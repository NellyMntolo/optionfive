<?php
include 'dbconfig.php';
mysql_set_charset("utf8");

                        $sqlfooteren = 'select * from think_footer_en';
                        $retvalfooteren = mysql_query( $sqlfooteren, $conn );                 
                             if(! $retvalfooteren )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                        $rowfooteren = mysql_fetch_array($retvalfooteren, MYSQL_ASSOC);
                            $idx = $rowfooteren['idx']; 
                            $entext1 = $rowfooteren['text1'];
                            $entext2 = $rowfooteren['text2'];
                            $entext3 = $rowfooteren['text3'];

                        

                        $sqlfooterzh = 'select * from think_footer_zh';
                        $retvalfooterzh = mysql_query( $sqlfooterzh, $conn );                 
                             if(! $retvalfooterzh )
                             {
                                die('Could not get data: ' . mysql_error());
                             }   
                        $rowfooterzh = mysql_fetch_array($retvalfooterzh, MYSQL_ASSOC);     
                            $zhtext1 = $rowfooterzh['text1'];     
                            $zhtext2 = $rowfooterzh['text2']; 
                            $zhtext3 = $rowfooterzh['text3']; 




                        $sqlsocial = 'select * from think_social';
                        $retvalsocial = mysql_query( $sqlsocial, $conn );                 
                             if(! $retvalsocial )
                             {
                                die('Could not get data: ' . mysql_error());
                             }   


?>