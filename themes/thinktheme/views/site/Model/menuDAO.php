<?php
include 'dbconfig.php';
mysql_set_charset("utf8");

                        $sqlmenuen = 'select * from think_menu_en';
                        $retvalmenuen = mysql_query( $sqlmenuen, $conn );                 
                             if(! $retvalmenuen )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                        $rowmenuen = mysql_fetch_array($retvalmenuen, MYSQL_ASSOC);
                            $menu_entext1 = $rowmenuen['text1'];
                            $menu_entext2 = $rowmenuen['text2'];
                            $menu_entext3 = $rowmenuen['text3'];
                            $menu_entext4 = $rowmenuen['text4'];
                            $menu_entext5 = $rowmenuen['text5'];

                        

                        $sqlmenuzh = 'select * from think_menu_zh';
                        $retvalmenuzh = mysql_query( $sqlmenuzh, $conn );                 
                             if(! $retvalmenuzh )
                             {
                                die('Could not get data: ' . mysql_error());
                             }   
                        $rowmenuzh = mysql_fetch_array($retvalmenuzh, MYSQL_ASSOC);     
                            $menu_zhtext1 = $rowmenuzh['text1'];     
                            $menu_zhtext2 = $rowmenuzh['text2']; 
                            $menu_zhtext3 = $rowmenuzh['text3']; 
                            $menu_zhtext4 = $rowmenuzh['text4']; 
                            $menu_zhtext5 = $rowmenuzh['text5']; 


?>