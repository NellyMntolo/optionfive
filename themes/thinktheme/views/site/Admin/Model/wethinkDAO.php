<?php
include 'dbconfig.php';
mysql_set_charset("utf8");

                        $sqlwethinken = 'select * from think_wethink_en';
                        $retvalwethinken = mysql_query( $sqlwethinken, $conn );                 
                             if(! $retvalwethinken )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                        $rowwethinken = mysql_fetch_array($retvalwethinken, MYSQL_ASSOC);
                            $idx = $rowwethinken['idx']; 
                            $entext1 = $rowwethinken['text1'];
                            $entext2 = $rowwethinken['text2'];
                            $entext3 = $rowwethinken['text3'];
                            $entext4 = $rowwethinken['text4'];
                            $entext5 = $rowwethinken['text5'];
                            $entext6 = $rowwethinken['text6'];
                            $enimage1 = $rowwethinken['image1'];

                        

                        $sqlwethinkzh = 'select * from think_wethink_zh';
                        $retvalwethinkzh = mysql_query( $sqlwethinkzh, $conn );                 
                             if(! $retvalwethinkzh )
                             {
                                die('Could not get data: ' . mysql_error());
                             }   
                        $rowwethinkzh = mysql_fetch_array($retvalwethinkzh, MYSQL_ASSOC);     
                            $zhtext1 = $rowwethinkzh['text1'];     
                            $zhtext2 = $rowwethinkzh['text2']; 
                            $zhtext3 = $rowwethinkzh['text3']; 
                            $zhtext4 = $rowwethinkzh['text4']; 
                            $zhtext5 = $rowwethinkzh['text5']; 
                            $zhtext6 = $rowwethinkzh['text6'];


?>