<?php
include 'dbconfig.php';
mysql_set_charset("utf8");

                        $sqlwedoen = 'select * from think_retailers_en';
                        $retvalwedoen = mysql_query( $sqlwedoen, $conn );                 
                             if(! $retvalwedoen )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                        $rowwedoen = mysql_fetch_array($retvalwedoen, MYSQL_ASSOC);
                            $idx = $rowwedoen['idx']; 
                            $entext1 = $rowwedoen['text1'];
                            $entext2 = $rowwedoen['text2'];
                            $entext3 = $rowwedoen['text3'];
                            $entext4 = $rowwedoen['text4'];
                            $entext5 = $rowwedoen['text5'];
                            $entext6 = $rowwedoen['text6'];
                            $entext7 = $rowwedoen['text7'];
                            $enimage1 = $rowwedoen['image1'];
                            $enimage2 = $rowwedoen['image2'];
                            $enimage3 = $rowwedoen['image3'];

                        

                        $sqlwedozh = 'select * from think_retailers_zh';
                        $retvalwedozh = mysql_query( $sqlwedozh, $conn );                 
                             if(! $retvalwedozh )
                             {
                                die('Could not get data: ' . mysql_error());
                             }   
                        $rowwedozh = mysql_fetch_array($retvalwedozh, MYSQL_ASSOC);     
                            $zhtext1 = $rowwedozh['text1'];     
                            $zhtext2 = $rowwedozh['text2']; 
                            $zhtext3 = $rowwedozh['text3']; 
                            $zhtext4 = $rowwedozh['text4']; 
                            $zhtext5 = $rowwedozh['text5']; 
                            $zhtext6 = $rowwedozh['text6']; 
                            $zhtext7 = $rowwedozh['text7']; 
?>