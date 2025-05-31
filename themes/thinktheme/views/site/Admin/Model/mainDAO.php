<?php
include 'dbconfig.php';
mysql_set_charset("utf8");

                        $sqlindexen = 'select * from think_index_en';
                        $retvalindexen = mysql_query( $sqlindexen, $conn );                 
                             if(! $retvalindexen )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                        $rowindexen = mysql_fetch_array($retvalindexen, MYSQL_ASSOC);
                            $idx = $rowindexen['idx']; 
                            $entext1 = $rowindexen['text1'];
                            $entext2 = $rowindexen['text2'];
                            $entext3 = $rowindexen['text3'];
                            $entext4 = $rowindexen['text4'];
                            $entext5 = $rowindexen['text5'];
                            $entext6 = $rowindexen['text6'];
                            $entext7 = $rowindexen['text7'];
                            $entext8 = $rowindexen['text8'];
                            $entext9 = $rowindexen['text9'];
                            $entext10 = $rowindexen['text10'];
                            $entext11 = $rowindexen['text11'];
                            $entext12 = $rowindexen['text12'];
                            $entext13 = $rowindexen['text13'];
                            $entext14 = $rowindexen['text14'];
                            $entext15 = $rowindexen['text15'];
                            $entext16 = $rowindexen['text16'];
                            $entext17 = $rowindexen['text17'];
                            $entext18 = $rowindexen['text18'];
                            $entext19 = $rowindexen['text19'];
                            $entext20 = $rowindexen['text20'];
                            /*$enimage1 = 'data:image/jpeg;base64,'.base64_encode($rowindexen['image1']).'';
                            $enimage2 = 'data:image/jpeg;base64,'.base64_encode($rowindexen['image2']).'';
                            $enimage3 = 'data:image/jpeg;base64,'.base64_encode($rowindexen['image3']).'';*/
                            $enimage1 =  $rowindexen['image1'];
                            $enimage2 =  $rowindexen['image2'];
                            $enimage3 =  $rowindexen['image3'];
                        

                        $sqlindexzh = 'select * from think_index_zh';
                        $retvalindexzh = mysql_query( $sqlindexzh, $conn );                 
                             if(! $retvalindexzh )
                             {
                                die('Could not get data: ' . mysql_error());
                             }   
                        $rowindexzh = mysql_fetch_array($retvalindexzh, MYSQL_ASSOC);     
                            $zhtext1 = $rowindexzh['text1'];     
                            $zhtext2 = $rowindexzh['text2']; 
                            $zhtext3 = $rowindexzh['text3']; 
                            $zhtext4 = $rowindexzh['text4']; 
                            $zhtext5 = $rowindexzh['text5']; 
                            $zhtext6 = $rowindexzh['text6']; 
                            $zhtext7 = $rowindexzh['text7']; 
                            $zhtext8 = $rowindexzh['text8']; 
                            $zhtext9 = $rowindexzh['text9']; 
                            $zhtext10 = $rowindexzh['text10']; 
                            $zhtext11 = $rowindexzh['text11']; 
                            $zhtext12 = $rowindexzh['text12'];       
                            $zhtext13 = $rowindexzh['text13']; 
                            $zhtext14 = $rowindexzh['text14']; 
                            $zhtext15 = $rowindexzh['text15']; 
                            $zhtext16 = $rowindexzh['text16']; 
                            $zhtext17 = $rowindexzh['text17']; 
                            $zhtext18 = $rowindexzh['text18']; 
                            $zhtext19 = $rowindexzh['text19']; 
                            $zhtext20 = $rowindexzh['text20'];


?>