<?php
include 'dbconfig.php';
mysql_set_charset("utf8");

                    //CONTENT
                        $sql_partnerzh = 'select * from think_partners_zh ORDER BY idx DESC';
                        $retval_partnerzh = mysql_query( $sql_partnerzh, $conn );
                             if(! $retval_partnerzh )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                        $retval_partnerzh_text = mysql_query( $sql_partnerzh, $conn );
                             if(! $retval_partnerzh_text )
                             {
                                die('Could not get data: ' . mysql_error());
                             }


                        $sql_partneren = 'select * from think_partners_en ORDER BY idx DESC';
                        $retval_partneren = mysql_query( $sql_partneren, $conn );
                             if(! $retval_partneren )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                         $retval_partneren_text = mysql_query( $sql_partneren, $conn );
                             if(! $retval_partneren_text )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                            
?>