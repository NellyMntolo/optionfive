<?php
include 'dbconfig.php';
mysql_set_charset("utf8");

                    //CONTENT
                        $sqlzh_weare = 'select * from think_weare_zh';
                        $retvalzh_weare = mysql_query( $sqlzh_weare, $conn );
                             if(! $retvalzh_weare )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                        $rowzh_weare = mysql_fetch_array($retvalzh_weare, MYSQL_ASSOC);
                            $weare_zhtext1 = $rowzh_weare['text1'];
                            $weare_zhtext2 = $rowzh_weare['text2'];
                            $weare_zhtext3 = $rowzh_weare['text3'];
                            $weare_zhtext4 = $rowzh_weare['text4'];
                            $weare_zhtext5 = $rowzh_weare['text5'];
                            $weare_zhtext6 = $rowzh_weare['text6'];
                            $weare_zhtext7 = $rowzh_weare['text7'];
                            $weare_zhtext8 = $rowzh_weare['text8'];
                            $weare_zhtext9 = $rowzh_weare['text9'];
                            $weare_zhtext10 = $rowzh_weare['text10'];
                            $weare_zhtext11 = $rowzh_weare['text11'];
                            $weare_zhtext12 = $rowzh_weare['text12'];
                            $weare_zhtext13 = $rowzh_weare['text13'];
                            $weare_zhtext14 = $rowzh_weare['text14'];
                            $weare_zhtext15 = $rowzh_weare['text15'];
                            $weare_zhtext16 = $rowzh_weare['text16'];
                            $weare_zhtext17 = $rowzh_weare['text17'];
                            $weare_zhtext18 = $rowzh_weare['text18'];
                            $weare_zhtext19 = $rowzh_weare['text19'];
                            $weare_zhtext20 = $rowzh_weare['text20'];
                            $weare_zhtext21 = $rowzh_weare['text21'];
                            $weare_zhtext22 = $rowzh_weare['text22'];
                            $weare_zhtext23 = $rowzh_weare['text23'];
                            $weare_zhtext24 = $rowzh_weare['text24'];
                            $weare_zhtext25 = $rowzh_weare['text25'];
                            $weare_zhimage1 = $rowzh_weare['image1'];
                            $weare_zhimage2 = '<img src="'.$rowzh_weare['image2'].'"/>';
                            $weare_zhimage3 = $rowzh_weare['image3'];


                        $sqlen_weare = 'select * from think_weare_en';
                        $retvalen_weare = mysql_query( $sqlen_weare, $conn );
                             if(! $retvalen_weare )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                        $rowen_weare = mysql_fetch_array($retvalen_weare, MYSQL_ASSOC);
                            $weare_entext1 = $rowen_weare['text1'];
                            $weare_entext2 = $rowen_weare['text2'];
                            $weare_entext3 = $rowen_weare['text3'];
                            $weare_entext4 = $rowen_weare['text4'];
                            $weare_entext5 = $rowen_weare['text5'];
                            $weare_entext6 = $rowen_weare['text6'];
                            $weare_entext7 = $rowen_weare['text7'];
                            $weare_entext8 = $rowen_weare['text8'];
                            $weare_entext9 = $rowen_weare['text9'];
                            $weare_entext10 = $rowen_weare['text10'];
                            $weare_entext11 = $rowen_weare['text11'];
                            $weare_entext12 = $rowen_weare['text12'];
                            $weare_entext13 = $rowen_weare['text13'];
                            $weare_entext14 = $rowen_weare['text14'];
                            $weare_entext15 = $rowen_weare['text15'];
                            $weare_entext16 = $rowen_weare['text16'];
                            $weare_entext17 = $rowen_weare['text17'];
                            $weare_entext18 = $rowen_weare['text18'];
                            $weare_entext19 = $rowen_weare['text19'];
                            $weare_entext20 = $rowen_weare['text20'];
                            $weare_entext21 = $rowen_weare['text21'];
                            $weare_entext22 = $rowen_weare['text22'];
                            $weare_entext23 = $rowen_weare['text23'];
                            $weare_entext24 = $rowen_weare['text24'];
                            $weare_entext25 = $rowen_weare['text25'];
                            $weare_enimage1 = $rowen_weare['image1'];
                            $weare_enimage2 = '<img src="'.$rowen_weare['image2'].'"/>';
                            $weare_enimage3 = $rowen_weare['image3'];

                            
?>