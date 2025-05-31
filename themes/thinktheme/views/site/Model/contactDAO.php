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
                            $contact_entext1 = $rowcontacten['text1'];
                            $contact_entext2 = $rowcontacten['text2'];
                            $contact_entext3 = $rowcontacten['text3'];
                            $contact_entext4 = $rowcontacten['text4'];
                            $contact_entext5 = $rowcontacten['text5'];
                            $contact_entext6 = $rowcontacten['text6'];
                            $contact_entext7 = $rowcontacten['text7'];
                            $contact_entext8 = $rowcontacten['text8'];
                            $contact_entext9 = $rowcontacten['text9'];
                            $contact_entext10 = $rowcontacten['text10'];
                            $contact_entext11 = $rowcontacten['text11'];
                            $contact_enimage1 = $rowcontacten['image1'];

                        

                        $sqlcontactzh = 'select * from think_contact_zh';
                        $retvalcontactzh = mysql_query( $sqlcontactzh, $conn );                 
                             if(! $retvalcontactzh )
                             {
                                die('Could not get data: ' . mysql_error());
                             }   
                        $rowcontactzh = mysql_fetch_array($retvalcontactzh, MYSQL_ASSOC);     
                            $contact_zhtext1 = $rowcontactzh['text1'];     
                            $contact_zhtext2 = $rowcontactzh['text2']; 
                            $contact_zhtext3 = $rowcontactzh['text3']; 
                            $contact_zhtext4 = $rowcontactzh['text4']; 
                            $contact_zhtext5 = $rowcontactzh['text5']; 
                            $contact_zhtext6 = $rowcontactzh['text6']; 
                            $contact_zhtext7 = $rowcontactzh['text7']; 
                            $contact_zhtext8 = $rowcontactzh['text8']; 
                            $contact_zhtext9 = $rowcontactzh['text9']; 
                            $contact_zhtext10 = $rowcontactzh['text10']; 
                            $contact_zhtext11 = $rowcontactzh['text11']; 
                            $contact_zhimage1 = $rowcontactzh['image1'];


?>