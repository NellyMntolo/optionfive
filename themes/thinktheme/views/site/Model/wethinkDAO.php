<?php
include 'dbconfig.php';
mysql_set_charset("utf8");

                    //CONTENT
                        $sqlzh_wethink = 'select * from think_wethink_zh';
                        $retvalzh_wethink = mysql_query( $sqlzh_wethink, $conn );
                             if(! $retvalzh_wethink )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                        $rowzh_wethink = mysql_fetch_array($retvalzh_wethink, MYSQL_ASSOC);
                            $wethink_zhtext1 = $rowzh_wethink['text1'];
                            $wethink_zhtext2 = $rowzh_wethink['text2'];
                            $wethink_zhtext3 = $rowzh_wethink['text3'];
                            $wethink_zhtext4 = $rowzh_wethink['text4'];
                            $wethink_zhtext5 = $rowzh_wethink['text5'];
                            $wethink_zhtext6 = $rowzh_wethink['text6'];
                            $wethink_zhimage1 = $rowzh_wethink['image1']; 


                        $sqlen_wethink = 'select * from think_wethink_en';
                        $retvalen_wethink = mysql_query( $sqlen_wethink, $conn );
                             if(! $retvalen_wethink )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                        $rowen_wethink = mysql_fetch_array($retvalen_wethink, MYSQL_ASSOC);
                            $wethink_entext1 = $rowen_wethink['text1'];
                            $wethink_entext2 = $rowen_wethink['text2'];
                            $wethink_entext3 = $rowen_wethink['text3'];
                            $wethink_entext4 = $rowen_wethink['text4'];
                            $wethink_entext5 = $rowen_wethink['text5'];
                            $wethink_entext6 = $rowen_wethink['text6'];
                            $wethink_enimage1 = $rowen_wethink['image1']; 

                        $yes = 'yes';
                         //We Think Latest blogs
                        $sqlwethink_en = 'select * from think_blog_en WHERE publish = "'.$yes.'" ORDER BY sortable_order ASC';
                        $retval_wethink_en = mysql_query( $sqlwethink_en, $conn );                 
                             if(! $retval_wethink_en )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                        

                        $sqlwethink_zh = 'select * from think_blog_zh WHERE publish = "'.$yes.'" ORDER BY sortable_order ASC';
                        $retval_wethink_zh = mysql_query( $sqlwethink_zh, $conn );                 
                             if(! $retval_wethink_zh )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                            
?>