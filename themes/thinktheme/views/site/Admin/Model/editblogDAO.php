<?php
include 'dbconfig.php';
mysql_set_charset("utf8");

$publish = '';
$send_to_index = '';
$blogid = mysql_real_escape_string($_GET['blog_id'],$conn);

                        $sqlblogen = 'select * from think_blog_en WHERE idx="'.$blogid.'" LIMIT 1';
                        $retvalblogen = mysql_query( $sqlblogen, $conn );                 
                             if(! $retvalblogen )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                        $rowblogen = mysql_fetch_array($retvalblogen, MYSQL_ASSOC);
                            $idx = $rowblogen['idx']; 
                            $entext1 = $rowblogen['text1'];
                            $entext2 = $rowblogen['text2'];
                            $entext3 = $rowblogen['text3'];
                            $entext4 = $rowblogen['text4'];
                            $entext5 = $rowblogen['text5'];
                            $entext6 = $rowblogen['text6'];
                            $entext7 = $rowblogen['text7'];
                            $entext8 = $rowblogen['text8'];
                            $entext9 = $rowblogen['text9'];
                            $entext10 = $rowblogen['text10'];
                            $entext11 = $rowblogen['text11'];
                            $entext12 = $rowblogen['text12'];
                            $entext13 = $rowblogen['text13'];
                            $entext14 = $rowblogen['text14'];
                            $enimage1 = $rowblogen['image1'];
                            $enimage2 = $rowblogen['image2'];
                            $enimage3 = $rowblogen['image3'];
                            $enimage4 = $rowblogen['image4'];
                            $enimage5 = $rowblogen['image5'];
                            $enimage6 = $rowblogen['image6'];
                            $enimage7 = $rowblogen['image7'];
                            $enimage8 = $rowblogen['image8'];
                            $enimage9 = $rowblogen['image9'];
                            $enimage10 = $rowblogen['image10'];
                            $enimage11 = $rowblogen['image11'];
                            $blog_publish = $rowblogen['publish'];
                            $blog_send_to_index = $rowblogen['send_to_index'];

                            if($blog_publish == "yes"){
                              $publish = "<input type=\"checkbox\" id=\"checker\" type=\"checkbox\" value=\"yes\" name=\"publish\" class=\"form-content\" checked=\"true\">";
                             } elseif ($blog_publish == "no") {
                               $publish = "<input type=\"checkbox\" id=\"checker\" type=\"checkbox\" value=\"yes\" name=\"publish\" class=\"form-content\">";
                             }

                             if($blog_send_to_index == "yes"){
                              $send_to_index = "<input type=\"checkbox\" id=\"checker\" type=\"checkbox\" value=\"yes\" name=\"send_to_index\" class=\"form-content\" checked=\"true\">";
                             } elseif ($blog_send_to_index == "no") {
                               $send_to_index = "<input type=\"checkbox\" id=\"checker\" type=\"checkbox\" value=\"yes\" name=\"send_to_index\" class=\"form-content\">";
                             } 

                        

                        $sqlblogzh = 'select * from think_blog_zh WHERE idx="'.$blogid.'" LIMIT 1';
                        $retvalblogzh = mysql_query( $sqlblogzh, $conn );                 
                             if(! $retvalblogzh )
                             {
                                die('Could not get data: ' . mysql_error());
                             }   
                        $rowblogzh = mysql_fetch_array($retvalblogzh, MYSQL_ASSOC);     
                            $zhtext1 = $rowblogzh['text1'];     
                            $zhtext2 = $rowblogzh['text2']; 
                            $zhtext3 = $rowblogzh['text3']; 
                            $zhtext4 = $rowblogzh['text4']; 
                            $zhtext5 = $rowblogzh['text5']; 
                            $zhtext6 = $rowblogzh['text6']; 
                            $zhtext7 = $rowblogzh['text7']; 
                            $zhtext8 = $rowblogzh['text8']; 
                            $zhtext9 = $rowblogzh['text9']; 
                            $zhtext10 = $rowblogzh['text10']; 
                            $zhtext11 = $rowblogzh['text11']; 
                            $zhtext12 = $rowblogzh['text12'];       
                            $zhtext13 = $rowblogzh['text13']; 
                            $zhtext14 = $rowblogzh['text14'];

?>