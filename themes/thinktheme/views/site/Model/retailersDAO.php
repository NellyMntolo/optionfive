<?php
include 'dbconfig.php';
mysql_set_charset("utf8");

                        $sqlretailersen = 'select * from think_retailers_en';
                        $retvalretailersen = mysql_query( $sqlretailersen, $conn );                 
                             if(! $retvalretailersen )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                        $rowretailersen = mysql_fetch_array($retvalretailersen, MYSQL_ASSOC);
                            $retailers_entext1 = $rowretailersen['text1'];
                            $retailers_entext2 = $rowretailersen['text2'];
                            $retailers_entext3 = $rowretailersen['text3'];
                            $retailers_entext4 = $rowretailersen['text4'];
                            $retailers_entext5 = $rowretailersen['text5'];
                            $retailers_entext6 = $rowretailersen['text6'];
                            $retailers_entext7 = $rowretailersen['text7'];
                            $retailers_enimage1 = $rowretailersen['image1'];
                            $retailers_enimage2 = $rowretailersen['image2'];
                            $retailers_enimage3 = $rowretailersen['image3'];

                        

                        $sqlretailerszh = 'select * from think_retailers_zh';
                        $retvalretailerszh = mysql_query( $sqlretailerszh, $conn );                 
                             if(! $retvalretailerszh )
                             {
                                die('Could not get data: ' . mysql_error());
                             }   
                        $rowretailerszh = mysql_fetch_array($retvalretailerszh, MYSQL_ASSOC);     
                            $retailers_zhtext1 = $rowretailerszh['text1'];     
                            $retailers_zhtext2 = $rowretailerszh['text2']; 
                            $retailers_zhtext3 = $rowretailerszh['text3']; 
                            $retailers_zhtext4 = $rowretailerszh['text4']; 
                            $retailers_zhtext5 = $rowretailerszh['text5']; 
                            $retailers_zhtext6 = $rowretailerszh['text6']; 
                            $retailers_zhtext7 = $rowretailerszh['text7']; 
                            $retailers_zhimage1 = $rowretailerszh['image1'];
                            $retailers_zhimage2 = $rowretailerszh['image2'];
                            $retailers_zhimage3 = $rowretailerszh['image3'];
?>