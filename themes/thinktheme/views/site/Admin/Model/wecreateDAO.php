<?php
include 'dbconfig.php';
mysql_set_charset("utf8");                    

                        $sqlmain_projecten = 'select * from think_main_project_en';
                        $retvalmain_projecten = mysql_query( $sqlmain_projecten, $conn );                 
                             if(! $retvalmain_projecten )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                        $rowmain_projecten = mysql_fetch_array($retvalmain_projecten, MYSQL_ASSOC);
                            $entext1 = $rowmain_projecten['text1'];
                            $entext2 = $rowmain_projecten['text2'];
                            $entext3 = $rowmain_projecten['text3'];
                            $entext4 = $rowmain_projecten['text4'];
                            $entext5 = $rowmain_projecten['text5'];
                            $entext6 = $rowmain_projecten['text6'];
                            $entext7 = $rowmain_projecten['text7'];
                            $enimage1 = $rowmain_projecten['image1'];

                        

                        $sqlmain_projectzh = 'select * from think_main_project_zh';
                        $retvalmain_projectzh = mysql_query( $sqlmain_projectzh, $conn );                 
                             if(! $retvalmain_projectzh )
                             {
                                die('Could not get data: ' . mysql_error());
                             }   
                        $rowmain_projectzh = mysql_fetch_array($retvalmain_projectzh, MYSQL_ASSOC);     
                            $zhtext1 = $rowmain_projectzh['text1'];     
                            $zhtext2 = $rowmain_projectzh['text2']; 
                            $zhtext3 = $rowmain_projectzh['text3']; 
                            $zhtext4 = $rowmain_projectzh['text4']; 
                            $zhtext5 = $rowmain_projectzh['text5']; 
                            $zhtext6 = $rowmain_projectzh['text6'];
                            $zhtext7 = $rowmain_projectzh['text7'];


?>