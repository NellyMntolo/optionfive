<?php
include 'dbconfig.php';
mysql_set_charset("utf8");

                        $sqlmain_projecten = 'select * from think_main_project_en';
                        $retvalmain_projecten = mysql_query( $sqlmain_projecten, $conn );                 
                             if(! $retvalmain_projecten )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                        $rowmain_projecten = mysql_fetch_array($retvalmain_projecten, MYSQL_ASSOC);
                            $main_project_entext1 = $rowmain_projecten['text1'];
                            $main_project_entext2 = $rowmain_projecten['text2'];
                            $main_project_entext3 = $rowmain_projecten['text3'];
                            $main_project_entext4 = $rowmain_projecten['text4'];
                            $main_project_entext5 = $rowmain_projecten['text5'];
                            $main_project_entext6 = $rowmain_projecten['text6'];
                            $main_project_entext7 = $rowmain_projecten['text7'];
                            $main_project_enimage1 = $rowmain_projecten['image1']; 


                        

                        $sqlmain_projectzh = 'select * from think_main_project_zh';
                        $retvalmain_projectzh = mysql_query( $sqlmain_projectzh, $conn );                 
                             if(! $retvalmain_projectzh )
                             {
                                die('Could not get data: ' . mysql_error());
                             }   
                        $rowmain_projectzh = mysql_fetch_array($retvalmain_projectzh, MYSQL_ASSOC);     
                            $main_project_zhtext1 = $rowmain_projectzh['text1'];     
                            $main_project_zhtext2 = $rowmain_projectzh['text2']; 
                            $main_project_zhtext3 = $rowmain_projectzh['text3']; 
                            $main_project_zhtext4 = $rowmain_projectzh['text4']; 
                            $main_project_zhtext5 = $rowmain_projectzh['text5']; 
                            $main_project_zhtext6 = $rowmain_projectzh['text6']; 
                            $main_project_zhtext7 = $rowmain_projectzh['text7'];
                            $main_project_zhimage1 = $rowmain_projectzh['image1']; 

                        $yes = 'yes';
                        //We Create Latest Projects
                        $sqlwecreate_en = 'select * from think_project_en  WHERE publish = "'.$yes.'" ORDER BY sortable_order ASC';
                        $retval_wecreate_en = mysql_query( $sqlwecreate_en, $conn );                 
                             if(! $retval_wecreate_en )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                        

                        $sqlwecreate_zh = 'select * from think_project_zh WHERE publish = "'.$yes.'" ORDER BY sortable_order ASC';
                        $retval_wecreate_zh = mysql_query( $sqlwecreate_zh, $conn );                 
                             if(! $retval_wecreate_zh )
                             {
                                die('Could not get data: ' . mysql_error());
                             }   


?>