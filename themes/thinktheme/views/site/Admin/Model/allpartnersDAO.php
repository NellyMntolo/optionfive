<?php
include 'dbconfig.php';
mysql_set_charset("utf8");

                        $sqlpartnersen = 'select * from think_partners_en ORDER BY idx DESC';
                        $retvalpartnersen = mysql_query( $sqlpartnersen, $conn );                 
                             if(! $retvalpartnersen )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                        

                        $sqlpartnerszh = 'select * from think_partners_zh ORDER BY idx DESC';
                        $retvalpartnerszh = mysql_query( $sqlpartnerszh, $conn );                 
                             if(! $retvalpartnerszh )
                             {
                                die('Could not get data: ' . mysql_error());
                             }   
                        


?>