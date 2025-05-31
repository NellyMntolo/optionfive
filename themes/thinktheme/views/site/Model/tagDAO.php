<?php
include 'dbconfig.php';
mysql_set_charset("utf8");

                        $sqltag = 'select * from think_tag';
                        $retvaltag = mysql_query( $sqltag, $conn );                 
                             if(! $retvaltag )
                             {
                                die('Could not get data: ' . mysql_error());
                             }


?>