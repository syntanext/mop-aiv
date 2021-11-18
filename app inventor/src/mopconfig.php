<?php
namespace mysql;

if(!defined('MOP')){die('Direct access is not allow');}


/*  
 *  description:Run MYSQL query faster and get result in a reliable way.;
 *  Version: 1.0.0;
 *  Type: App Inventor version.
 *  Recommended php version: >= 7;
 *  website: https://github.com/bringittocode/mop-aiv
 *  contact: bringittocode@gmail.com
 */

class configuration
{
public function config ()
    {
        return [




        "host" => 'localhost',          //host

        "username" => 'root',       //username

        "password" => '',       //password

        "database" => 'mop',       //database name

        "injection" => 
        [
            'table names',
            'database names'
        ],

        "masterkey" => 'your master key',

        "sqlkey" => 'your key',









        ];

    }
}
