<?php
include 'dbconfig.php';
mysql_set_charset("utf8");

                    //CONTENT
                        $sqlzh_wedo = 'select * from think_wedo_zh';
                        $retvalzh_wedo = mysql_query( $sqlzh_wedo, $conn );
                             if(! $retvalzh_wedo )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                        $rowzh_wedo = mysql_fetch_array($retvalzh_wedo, MYSQL_ASSOC);
                            $wedo_zhtext1 = $rowzh_wedo['text1'];
                            $wedo_zhtext2 = $rowzh_wedo['text2'];
                            $wedo_zhtext3 = $rowzh_wedo['text3'];
                            $wedo_zhtext4 = $rowzh_wedo['text4'];
                            $wedo_zhtext5 = $rowzh_wedo['text5'];
                            $wedo_zhtext6 = $rowzh_wedo['text6'];
                            $wedo_zhtext7 = $rowzh_wedo['text7'];
                            $wedo_zhtext8 = $rowzh_wedo['text8'];
                            $wedo_zhtext9 = $rowzh_wedo['text9'];
                            $wedo_zhtext10 = $rowzh_wedo['text10'];
                            $wedo_zhtext11 = $rowzh_wedo['text11'];
                            $wedo_zhtext12 = $rowzh_wedo['text12'];
                            $wedo_zhtext13 = $rowzh_wedo['text13'];
                            $wedo_zhtext14 = $rowzh_wedo['text14'];
                            $wedo_zhtext15 = $rowzh_wedo['text15'];
                            $wedo_zhtext16 = $rowzh_wedo['text16'];
                            $wedo_zhtext17 = $rowzh_wedo['text17'];
                            $wedo_zhtext18 = $rowzh_wedo['text18'];
                            $wedo_zhtext19 = $rowzh_wedo['text19'];
                            $wedo_zhtext20 = $rowzh_wedo['text20'];
                            $wedo_zhtext21 = $rowzh_wedo['text21'];
                            $wedo_zhtext22 = $rowzh_wedo['text22'];
                            $wedo_zhtext23 = $rowzh_wedo['text23'];
                            $wedo_zhtext24 = $rowzh_wedo['text24'];
                            $wedo_zhtext25 = $rowzh_wedo['text25'];
                            $wedo_zhtext26 = $rowzh_wedo['text26'];
                            $wedo_zhtext27 = $rowzh_wedo['text27'];
                            $wedo_zhtext28 = $rowzh_wedo['text28'];
                            $wedo_zhtext29 = $rowzh_wedo['text29'];
                            $wedo_zhtext30 = $rowzh_wedo['text30'];
                            $wedo_zhtext31 = $rowzh_wedo['text31'];
                            $wedo_zhtext32 = $rowzh_wedo['text32'];
                            $wedo_zhtext33 = $rowzh_wedo['text33'];
                            $wedo_zhtext34 = $rowzh_wedo['text34'];
                            $wedo_zhtext35 = $rowzh_wedo['text35'];
                            $wedo_zhtext36 = $rowzh_wedo['text36'];
                            $wedo_zhtext37 = $rowzh_wedo['text37'];
                            $wedo_zhtext38 = $rowzh_wedo['text38'];
                            $wedo_zhtext39 = $rowzh_wedo['text39'];
                            $wedo_zhtext40 = $rowzh_wedo['text40'];
                            $wedo_zhtext41 = $rowzh_wedo['text41'];
                            $wedo_zhtext42 = $rowzh_wedo['text42'];
                            $wedo_zhtext43 = $rowzh_wedo['text43'];
                            $wedo_zhtext44 = $rowzh_wedo['text44'];
                            $wedo_zhtext45 = $rowzh_wedo['text45'];
                            $wedo_zhtext46 = $rowzh_wedo['text46'];
                            $wedo_zhtext47 = $rowzh_wedo['text47'];
                            $wedo_zhtext48 = $rowzh_wedo['text48'];
                            $wedo_zhtext49 = $rowzh_wedo['text49'];
                            $wedo_zhtext50 = $rowzh_wedo['text50'];
                            $wedo_zhimage1 = $rowzh_wedo['image1']; 
                            $wedo_zhimage2 = '<img src="'.$rowzh_wedo['image2'].'"/>';
                            $wedo_zhimage3 = '<img src="'.$rowzh_wedo['image3'].'"/>';
                            $wedo_zhimage4 = '<img src="'.$rowzh_wedo['image4'].'"/>';
                            $wedo_zhimage5 = '<img src="'.$rowzh_wedo['image5'].'"/>';
                            $wedo_zhimage6 = '<img src="'.$rowzh_wedo['image6'].'"/>';
                            $wedo_zhimage7 = '<img src="'.$rowzh_wedo['image7'].'"/>';
                            $wedo_zhtext51 = $rowzh_wedo['text51'];
                            $wedo_zhtext52 = $rowzh_wedo['text52'];
                            $wedo_zhtext53 = $rowzh_wedo['text53'];
                            $wedo_zhtext54 = $rowzh_wedo['text54'];
                            $wedo_zhtext55 = $rowzh_wedo['text55'];
                            $wedo_zhtext56 = $rowzh_wedo['text56'];


                        $sqlen_wedo = 'select * from think_wedo_en';
                        $retvalen_wedo = mysql_query( $sqlen_wedo, $conn );
                             if(! $retvalen_wedo )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                        $rowen_wedo = mysql_fetch_array($retvalen_wedo, MYSQL_ASSOC);
                            $wedo_entext1 = $rowen_wedo['text1'];
                            $wedo_entext2 = $rowen_wedo['text2'];
                            $wedo_entext3 = $rowen_wedo['text3'];
                            $wedo_entext4 = $rowen_wedo['text4'];
                            $wedo_entext5 = $rowen_wedo['text5'];
                            $wedo_entext6 = $rowen_wedo['text6'];
                            $wedo_entext7 = $rowen_wedo['text7'];
                            $wedo_entext8 = $rowen_wedo['text8'];
                            $wedo_entext9 = $rowen_wedo['text9'];
                            $wedo_entext10 = $rowen_wedo['text10'];
                            $wedo_entext11 = $rowen_wedo['text11'];
                            $wedo_entext12 = $rowen_wedo['text12'];
                            $wedo_entext13 = $rowen_wedo['text13'];
                            $wedo_entext14 = $rowen_wedo['text14'];
                            $wedo_entext15 = $rowen_wedo['text15'];
                            $wedo_entext16 = $rowen_wedo['text16'];
                            $wedo_entext17 = $rowen_wedo['text17'];
                            $wedo_entext18 = $rowen_wedo['text18'];
                            $wedo_entext19 = $rowen_wedo['text19'];
                            $wedo_entext20 = $rowen_wedo['text20'];
                            $wedo_entext21 = $rowen_wedo['text21'];
                            $wedo_entext22 = $rowen_wedo['text22'];
                            $wedo_entext23 = $rowen_wedo['text23'];
                            $wedo_entext24 = $rowen_wedo['text24'];
                            $wedo_entext25 = $rowen_wedo['text25'];
                            $wedo_entext26 = $rowen_wedo['text26'];
                            $wedo_entext27 = $rowen_wedo['text27'];
                            $wedo_entext28 = $rowen_wedo['text28'];
                            $wedo_entext29 = $rowen_wedo['text29'];
                            $wedo_entext30 = $rowen_wedo['text30'];
                            $wedo_entext31 = $rowen_wedo['text31'];
                            $wedo_entext32 = $rowen_wedo['text32'];
                            $wedo_entext33 = $rowen_wedo['text33'];
                            $wedo_entext34 = $rowen_wedo['text34'];
                            $wedo_entext35 = $rowen_wedo['text35'];
                            $wedo_entext36 = $rowen_wedo['text36'];
                            $wedo_entext37 = $rowen_wedo['text37'];
                            $wedo_entext38 = $rowen_wedo['text38'];
                            $wedo_entext39 = $rowen_wedo['text39'];
                            $wedo_entext40 = $rowen_wedo['text40'];
                            $wedo_entext41 = $rowen_wedo['text41'];
                            $wedo_entext42 = $rowen_wedo['text42'];
                            $wedo_entext43 = $rowen_wedo['text43'];
                            $wedo_entext44 = $rowen_wedo['text44'];
                            $wedo_entext45 = $rowen_wedo['text45'];
                            $wedo_entext46 = $rowen_wedo['text46'];
                            $wedo_entext47 = $rowen_wedo['text47'];
                            $wedo_entext48 = $rowen_wedo['text48'];
                            $wedo_entext49 = $rowen_wedo['text49'];
                            $wedo_entext50 = $rowen_wedo['text50'];
                            $wedo_enimage1 = $rowen_wedo['image1']; 
                            $wedo_enimage2 = '<img src="'.$rowen_wedo['image2'].'"/>';
                            $wedo_enimage3 = '<img src="'.$rowen_wedo['image3'].'"/>';
                            $wedo_enimage4 = '<img src="'.$rowen_wedo['image4'].'"/>';
                            $wedo_enimage5 = '<img src="'.$rowen_wedo['image5'].'"/>';
                            $wedo_enimage6 = '<img src="'.$rowen_wedo['image6'].'"/>';
                            $wedo_enimage7 = '<img src="'.$rowen_wedo['image7'].'"/>';
                            $wedo_entext51 = $rowen_wedo['text51'];
                            $wedo_entext52 = $rowen_wedo['text52'];
                            $wedo_entext53 = $rowen_wedo['text53'];
                            $wedo_entext54 = $rowen_wedo['text54'];
                            $wedo_entext55 = $rowen_wedo['text55'];
                            $wedo_entext56 = $rowen_wedo['text56'];

                            
?>