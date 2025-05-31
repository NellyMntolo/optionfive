<?php
include 'dbconfig.php';
mysql_set_charset("utf8");

                    //CONTENT
                        $sqlzh_index = 'select * from think_index_zh';
                        $retvalzh_index = mysql_query( $sqlzh_index, $conn );
                             if(! $retvalzh_index )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                        $rowzh_index = mysql_fetch_array($retvalzh_index, MYSQL_ASSOC);
                            $index_zhtext1 = $rowzh_index['text1'];
                            $index_zhtext2 = $rowzh_index['text2'];
                            $index_zhtext3 = $rowzh_index['text3'];
                            $index_zhtext4 = $rowzh_index['text4'];
                            $index_zhtext5 = $rowzh_index['text5'];
                            $index_zhtext6 = $rowzh_index['text6'];
                            $index_zhtext7 = $rowzh_index['text7'];
                            $index_zhtext8 = $rowzh_index['text8'];
                            $index_zhtext9 = $rowzh_index['text9'];
                            $index_zhtext10 = $rowzh_index['text10'];
                            $index_zhtext11 = $rowzh_index['text11'];
                            $index_zhtext12 = $rowzh_index['text12'];
                            $index_zhtext13 = $rowzh_index['text13'];
                            $index_zhtext14 = $rowzh_index['text14'];
                            $index_zhtext15 = $rowzh_index['text15'];
                            $index_zhtext16 = $rowzh_index['text16'];
                            $index_zhtext17 = $rowzh_index['text17'];
                            $index_zhtext18 = $rowzh_index['text18'];
                            $index_zhtext19 = $rowzh_index['text19'];
                            $index_zhtext20 = $rowzh_index['text20'];
                            $index_zhimage1 = $rowzh_index['image1']; 
                            $index_zhimage2 = $rowzh_index['image2'];
                            $index_zhimage2 = $rowzh_index['image3'];

                        $sqlen_index = 'select * from think_index_en';
                        $retvalen_index = mysql_query( $sqlen_index, $conn );
                             if(! $retvalen_index )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                        $rowen_index = mysql_fetch_array($retvalen_index, MYSQL_ASSOC);
                            $index_entext1 = $rowen_index['text1'];
                            $index_entext2 = $rowen_index['text2'];
                            $index_entext3 = $rowen_index['text3'];
                            $index_entext4 = $rowen_index['text4'];
                            $index_entext5 = $rowen_index['text5'];
                            $index_entext6 = $rowen_index['text6'];
                            $index_entext7 = $rowen_index['text7'];
                            $index_entext8 = $rowen_index['text8'];
                            $index_entext9 = $rowen_index['text9'];
                            $index_entext10 = $rowen_index['text10'];
                            $index_entext11 = $rowen_index['text11'];
                            $index_entext12 = $rowen_index['text12'];
                            $index_entext13 = $rowen_index['text13'];
                            $index_entext14 = $rowen_index['text14'];
                            $index_entext15 = $rowen_index['text15'];
                            $index_entext16 = $rowen_index['text16'];
                            $index_entext17 = $rowen_index['text17'];
                            $index_entext18 = $rowen_index['text18'];
                            $index_entext19 = $rowen_index['text19'];
                            $index_entext20 = $rowen_index['text20'];
                            $index_enimage1 = $rowen_index['image1']; 
                            $index_enimage2 = $rowen_index['image2']; 
                            $index_enimage3 = $rowen_index['image3']; 
                            $index_views = $rowen_index['views'];

                            $view_update = $index_views+1;


                            $sql_views_en="UPDATE think_index_en SET views='".$view_update."' LIMIT 1 ";              
                               $retval_views_en = mysql_query( $sql_views_en, $conn );
                               if(! $retval_views_en )
                                   {
                                      die('Could not enter data: ' . mysql_error());
                                   }
                            $sql_views_zh="UPDATE think_index_zh SET views='".$view_update."' LIMIT 1 ";              
                               $retval_views_zh = mysql_query( $sql_views_zh, $conn );
                               if(! $retval_views_zh )
                                   {
                                      die('Could not enter data: ' . mysql_error());
                                   }

                        $yes = 'yes';

                        //Index Projects
                        $sql_mainprojecten = 'select * from think_project_en WHERE send_to_index = "'.$yes.'" AND publish = "'.$yes.'" ORDER BY idx DESC LIMIT 3';
                        $retval_mainprojecten = mysql_query( $sql_mainprojecten, $conn );                 
                             if(! $retval_mainprojecten )
                             {
                                die('Could not get data: ' . mysql_error());
                             }      

                        $sql_mainprojectzh = 'select * from think_project_zh WHERE send_to_index = "'.$yes.'" AND publish = "'.$yes.'" ORDER BY idx DESC LIMIT 3';
                        $retval_mainprojectzh = mysql_query( $sql_mainprojectzh, $conn );                 
                             if(! $retval_mainprojectzh )
                             {
                                die('Could not get data: ' . mysql_error());
                             }      




                        //Index blogs
                        $sqlindexblogs_en = 'select * from think_blog_en  WHERE send_to_index = "'.$yes.'" AND publish = "'.$yes.'" ORDER BY idx DESC Limit 2';
                        $retval_indexblogs_en = mysql_query( $sqlindexblogs_en, $conn );                 
                             if(! $retval_indexblogs_en )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                        

                        $sqlindexblogs_zh = 'select * from think_blog_zh WHERE send_to_index = "'.$yes.'" AND publish = "'.$yes.'" ORDER BY idx DESC Limit 2';
                        $retval_indexblogs_zh = mysql_query( $sqlindexblogs_zh, $conn );                 
                             if(! $retval_indexblogs_zh )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
?>