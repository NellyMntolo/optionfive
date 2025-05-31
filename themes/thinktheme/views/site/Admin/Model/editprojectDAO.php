<?php
include 'dbconfig.php';
mysql_set_charset("utf8");

$publish = '';
$send_to_index = '';
$projectid = mysql_real_escape_string($_GET['project_id'],$conn);

                        $sqlprojecten = 'select * from think_project_en WHERE idx="'.$projectid.'" LIMIT 1';
                        $retvalprojecten = mysql_query( $sqlprojecten, $conn );                 
                             if(! $retvalprojecten )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                        $rowprojecten = mysql_fetch_array($retvalprojecten, MYSQL_ASSOC);
                            $idx = $rowprojecten['idx']; 
                            $entext1 = $rowprojecten['text1'];
                            $entext2 = $rowprojecten['text2'];
                            $entext3 = $rowprojecten['text3'];
                            $entext4 = $rowprojecten['text4'];
                            $entext5 = $rowprojecten['text5'];
                            $entext6 = $rowprojecten['text6'];
                            $entext7 = $rowprojecten['text7'];
                            $entext8 = $rowprojecten['text8'];
                            $entext9 = $rowprojecten['text9'];
                            $entext10 = $rowprojecten['text10'];
                            $entext11 = $rowprojecten['text11'];
                            $entext12 = $rowprojecten['text12'];
                            $entext13 = $rowprojecten['text13'];
                            $entext14 = $rowprojecten['text14'];
                            $entext15 = $rowprojecten['text15'];
                            $entext16 = $rowprojecten['text16'];
                            $entext17 = $rowprojecten['text17'];
                            $enimage1 = $rowprojecten['image1'];
                            $enimage2 = $rowprojecten['image2'];
                            $enimage3 = $rowprojecten['image3'];
                            $enimage4 = $rowprojecten['image4'];
                            $enimage5 = $rowprojecten['image5'];
                            $enimage6 = $rowprojecten['image6'];
                            $enimage7 = $rowprojecten['image7'];
                            $enimage8 = $rowprojecten['image8'];
                            $enimage9 = $rowprojecten['image9'];
                            $enimage10 = $rowprojecten['image10'];
                            $enimage11 = $rowprojecten['image11'];
                            $enimage12 = $rowprojecten['image12'];
                            $enimage13 = $rowprojecten['image13'];
                            $enimage14 = $rowprojecten['image14'];
                            $enimage15 = $rowprojecten['image15'];
                            $project_publish = $rowprojecten['publish'];
                            $project_send_to_index = $rowprojecten['send_to_index'];

                            if($project_publish == "yes"){
                              $publish = "<input type=\"checkbox\" id=\"checker\" type=\"checkbox\" value=\"yes\" name=\"publish\" class=\"form-content\" checked=\"true\">";
                             } elseif ($project_publish == "no") {
                               $publish = "<input type=\"checkbox\" id=\"checker\" type=\"checkbox\" value=\"yes\" name=\"publish\" class=\"form-content\">";
                             }


                             if($project_send_to_index == "yes"){
                              $send_to_index = "<input type=\"checkbox\" id=\"checker\" type=\"checkbox\" value=\"yes\" name=\"send_to_index\" class=\"form-content\" checked=\"true\">";
                             } elseif ($project_send_to_index == "no") {
                               $send_to_index = "<input type=\"checkbox\" id=\"checker\" type=\"checkbox\" value=\"yes\" name=\"send_to_index\" class=\"form-content\">";
                             }

                        

                        $sqlprojectzh = 'select * from think_project_zh WHERE idx="'.$projectid.'" LIMIT 1';
                        $retvalprojectzh = mysql_query( $sqlprojectzh, $conn );                 
                             if(! $retvalprojectzh )
                             {
                                die('Could not get data: ' . mysql_error());
                             }   
                        $rowprojectzh = mysql_fetch_array($retvalprojectzh, MYSQL_ASSOC);     
                            $zhtext1 = $rowprojectzh['text1'];     
                            $zhtext2 = $rowprojectzh['text2']; 
                            $zhtext3 = $rowprojectzh['text3']; 
                            $zhtext4 = $rowprojectzh['text4']; 
                            $zhtext5 = $rowprojectzh['text5']; 
                            $zhtext6 = $rowprojectzh['text6']; 
                            $zhtext7 = $rowprojectzh['text7']; 
                            $zhtext8 = $rowprojectzh['text8']; 
                            $zhtext9 = $rowprojectzh['text9']; 
                            $zhtext10 = $rowprojectzh['text10']; 
                            $zhtext11 = $rowprojectzh['text11']; 
                            $zhtext12 = $rowprojectzh['text12'];       
                            $zhtext13 = $rowprojectzh['text13']; 
                            $zhtext14 = $rowprojectzh['text14']; 
                            $zhtext15 = $rowprojectzh['text15']; 
                            $zhtext16 = $rowprojectzh['text16'];
                            $zhtext17 = $rowprojectzh['text17'];

?>