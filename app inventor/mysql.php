<?php
use mysql\mop as mysql;


/*  
 *  description:Run MYSQL query faster and get result in a reliable way.;
 *  Version: 1.0.0;
 *  Type: App Inventor version.
 *  Recommended php version: >= 7;
 *  website: https://github.com/bringittocode/mop-aiv
 *  contact: bringittocode@gmail.com
 */

define("MOP","mysql optimizer");

require_once 'src/mop.php';

header('Cache-Control: no-cache, must-revalidate');

if(isset($_POST['query']) && isset($_POST['key']))
{   
    $connect = new mysql();

    $query = urldecode($_POST['query']);

    $connect->verify($query);

    $connect->connect();

    $connect->query();

    $parameter = [];

    if(isset($_POST['param']))
    {
        $param = $_POST['param'];

        foreach ($param as $key => $value)
        {
            $parameter[] = urldecode($value);
        }

        $connect->run_all($parameter);
    }

    else
    {
        $connect->run();
    }

    if(isset($_POST['add_query']))
    {
        $query = urldecode($_POST['add_query']);

        $connect->verify($query);

        $connect->free_results();

        $connect->add_query($query);
    }

    header("HTTP/1.0 200");

    echo $connect->csv;

    $connect->close();
    
}

else
{
    header("HTTP/1.0 206");
    
    echo "Bad Request";
}
?>
