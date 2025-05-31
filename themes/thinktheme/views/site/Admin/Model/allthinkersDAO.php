<?php
include 'dbconfig.php';
mysql_set_charset("utf8");

                        $sqlthethinkersen = 'select * from think_thethinkers_en ORDER BY idx DESC';
                        $retvalthethinkersen = mysql_query( $sqlthethinkersen, $conn );                 
                             if(! $retvalthethinkersen )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                        

                        $sqlthethinkerszh = 'select * from think_thethinkers_zh ORDER BY idx DESC';
                        $retvalthethinkerszh = mysql_query( $sqlthethinkerszh, $conn );                 
                             if(! $retvalthethinkerszh )
                             {
                                die('Could not get data: ' . mysql_error());
                             }   
                        


?>