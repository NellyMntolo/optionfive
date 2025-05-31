<?php
include 'dbconfig.php';
mysql_set_charset("utf8");                    

                        $sqlmain_producten = 'select * from think_products_en';
                        $retvalmain_producten = mysql_query( $sqlmain_producten, $conn );                 
                             if(! $retvalmain_producten )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                        $rowmain_producten = mysql_fetch_array($retvalmain_producten, MYSQL_ASSOC);
                            $products_entext1 = $rowmain_producten['text1'];
                            $products_entext2 = $rowmain_producten['text2'];
                            $products_entext3 = $rowmain_producten['text3'];
                            $products_entext4 = $rowmain_producten['text4'];
                            $products_entext5 = $rowmain_producten['text5'];
                            $products_entext6 = $rowmain_producten['text6'];
                            $products_entext7 = $rowmain_producten['text7'];
                            $products_enimage1 = $rowmain_producten['image1'];

                        

                        $sqlmain_productzh = 'select * from think_products_zh';
                        $retvalmain_productzh = mysql_query( $sqlmain_productzh, $conn );                 
                             if(! $retvalmain_productzh )
                             {
                                die('Could not get data: ' . mysql_error());
                             }   
                        $rowmain_productzh = mysql_fetch_array($retvalmain_productzh, MYSQL_ASSOC);     
                            $products_zhtext1 = $rowmain_productzh['text1'];     
                            $products_zhtext2 = $rowmain_productzh['text2']; 
                            $products_zhtext3 = $rowmain_productzh['text3']; 
                            $products_zhtext4 = $rowmain_productzh['text4']; 
                            $products_zhtext5 = $rowmain_productzh['text5']; 
                            $products_zhtext6 = $rowmain_productzh['text6'];
                            $products_zhtext7 = $rowmain_productzh['text7'];
                            $products_zhimage1 = $rowmain_productzh['image1'];


?>