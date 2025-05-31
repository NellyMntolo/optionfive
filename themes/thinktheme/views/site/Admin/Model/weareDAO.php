<?php
include 'dbconfig.php';
mysql_set_charset("utf8");

                        $sqlweareen = 'select * from think_weare_en';
                        $retvalweareen = mysql_query( $sqlweareen, $conn );                 
                             if(! $retvalweareen )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                        $rowweareen = mysql_fetch_array($retvalweareen, MYSQL_ASSOC);
                            $idx = $rowweareen['idx']; 
                            $entext1 = $rowweareen['text1'];
                            $entext2 = $rowweareen['text2'];
                            $entext3 = $rowweareen['text3'];
                            $entext4 = $rowweareen['text4'];
                            $entext5 = $rowweareen['text5'];
                            $entext6 = $rowweareen['text6'];
                            $entext7 = $rowweareen['text7'];
                            $entext8 = $rowweareen['text8'];
                            $entext9 = $rowweareen['text9'];
                            $entext10 = $rowweareen['text10'];
                            $entext11 = $rowweareen['text11'];
                            $entext12 = $rowweareen['text12'];
                            $entext13 = $rowweareen['text13'];
                            $entext14 = $rowweareen['text14'];
                            $entext15 = $rowweareen['text15'];
                            $entext16 = $rowweareen['text16'];
                            $entext17 = $rowweareen['text17'];
                            $entext18 = $rowweareen['text18'];
                            $entext19 = $rowweareen['text19'];
                            $entext20 = $rowweareen['text20'];
                            $entext21 = $rowweareen['text21'];
                            $entext22 = $rowweareen['text22'];
                            $entext23 = $rowweareen['text23'];
                            $entext24 = $rowweareen['text24'];
                            $entext25 = $rowweareen['text25'];
                            $enimage1 = $rowweareen['image1'];
                            $enimage2 = $rowweareen['image2'];
                            $enimage3 = $rowweareen['image3'];

                        

                        $sqlwearezh = 'select * from think_weare_zh';
                        $retvalwearezh = mysql_query( $sqlwearezh, $conn );                 
                             if(! $retvalwearezh )
                             {
                                die('Could not get data: ' . mysql_error());
                             }   
                        $rowwearezh = mysql_fetch_array($retvalwearezh, MYSQL_ASSOC);     
                            $zhtext1 = $rowwearezh['text1'];     
                            $zhtext2 = $rowwearezh['text2']; 
                            $zhtext3 = $rowwearezh['text3']; 
                            $zhtext4 = $rowwearezh['text4']; 
                            $zhtext5 = $rowwearezh['text5']; 
                            $zhtext6 = $rowwearezh['text6']; 
                            $zhtext7 = $rowwearezh['text7']; 
                            $zhtext8 = $rowwearezh['text8']; 
                            $zhtext9 = $rowwearezh['text9']; 
                            $zhtext10 = $rowwearezh['text10']; 
                            $zhtext11 = $rowwearezh['text11']; 
                            $zhtext12 = $rowwearezh['text12'];       
                            $zhtext13 = $rowwearezh['text13']; 
                            $zhtext14 = $rowwearezh['text14']; 
                            $zhtext15 = $rowwearezh['text15']; 
                            $zhtext16 = $rowwearezh['text16']; 
                            $zhtext17 = $rowwearezh['text17']; 
                            $zhtext18 = $rowwearezh['text18']; 
                            $zhtext19 = $rowwearezh['text19']; 
                            $zhtext20 = $rowwearezh['text20']; 
                            $zhtext21 = $rowwearezh['text21']; 
                            $zhtext22 = $rowwearezh['text22']; 
                            $zhtext23 = $rowwearezh['text23']; 
                            $zhtext24 = $rowwearezh['text24']; 
                            $zhtext25 = $rowwearezh['text25']; 


?>