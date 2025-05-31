<?php
include 'dbconfig.php';
mysql_set_charset("utf8");

                    //CONTENT
                        $sql_thinkerzh = 'select * from think_thethinkers_zh ORDER BY idx DESC';
                        $retval_thinkerzh = mysql_query( $sql_thinkerzh, $conn );
                             if(! $retval_thinkerzh )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                        $retval_thinkerzh_text = mysql_query( $sql_thinkerzh, $conn );
                             if(! $retval_thinkerzh_text )
                             {
                                die('Could not get data: ' . mysql_error());
                             }


                        $sql_thinkeren = 'select * from think_thethinkers_en ORDER BY idx DESC';
                        $retval_thinkeren = mysql_query( $sql_thinkeren, $conn );
                             if(! $retval_thinkeren )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                         $retval_thinkeren_text = mysql_query( $sql_thinkeren, $conn );
                             if(! $retval_thinkeren_text )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                            
?>