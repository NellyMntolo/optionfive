<?php
include 'dbconfig.php';
mysql_set_charset("utf8");

                        $sqlcategory = 'select * from think_category';
                        $retvalcategory = mysql_query( $sqlcategory, $conn );                 
                             if(! $retvalcategory )
                             {
                                die('Could not get data: ' . mysql_error());
                             }


?>