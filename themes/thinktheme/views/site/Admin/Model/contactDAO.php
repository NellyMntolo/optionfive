<?php
include 'dbconfig.php';
mysql_set_charset("utf8");

                        $sqlcontacten = 'select * from think_contact_en';
                        $retvalcontacten = mysql_query( $sqlcontacten, $conn );                 
                             if(! $retvalcontacten )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                        $rowcontacten = mysql_fetch_array($retvalcontacten, MYSQL_ASSOC);
                            $idx = $rowcontacten['idx']; 
                            $entext1 = $rowcontacten['text1'];
                            $entext2 = $rowcontacten['text2'];
                            $entext3 = $rowcontacten['text3'];
                            $entext4 = $rowcontacten['text4'];
                            $entext5 = $rowcontacten['text5'];
                            $enimage1 = $rowcontacten['image1'];

                        

                        $sqlcontactzh = 'select * from think_contact_zh';
                        $retvalcontactzh = mysql_query( $sqlcontactzh, $conn );                 
                             if(! $retvalcontactzh )
                             {
                                die('Could not get data: ' . mysql_error());
                             }   
                        $rowcontactzh = mysql_fetch_array($retvalcontactzh, MYSQL_ASSOC);     
                            $zhtext1 = $rowcontactzh['text1'];     
                            $zhtext2 = $rowcontactzh['text2']; 
                            $zhtext3 = $rowcontactzh['text3']; 
                            $zhtext4 = $rowcontactzh['text4']; 
                            $zhtext5 = $rowcontactzh['text5']; 
                            $zhtext11 = $rowcontactzh['text11']; 


?>