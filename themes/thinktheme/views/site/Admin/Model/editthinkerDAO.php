<?php
include 'dbconfig.php';
mysql_set_charset("utf8");

$uncheck = '';
$thethinkersid = mysql_real_escape_string($_GET['thinker_id'],$conn);

                        $sqlthethinkersen = 'select * from think_thethinkers_en WHERE idx="'.$thethinkersid.'" LIMIT 1';
                        $retvalthethinkersen = mysql_query( $sqlthethinkersen, $conn );                 
                             if(! $retvalthethinkersen )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                        $rowthethinkersen = mysql_fetch_array($retvalthethinkersen, MYSQL_ASSOC);
                            $idx = $rowthethinkersen['idx']; 
                            $entext1 = $rowthethinkersen['text1'];
                            $entext2 = $rowthethinkersen['text2'];
                            $entext3 = $rowthethinkersen['text3'];
                            $enimage1 = $rowthethinkersen['image1'];
                            $enimage2 = $rowthethinkersen['image2'];
                        

                        $sqlthethinkerszh = 'select * from think_thethinkers_zh WHERE idx="'.$thethinkersid.'" LIMIT 1';
                        $retvalthethinkerszh = mysql_query( $sqlthethinkerszh, $conn );                 
                             if(! $retvalthethinkerszh )
                             {
                                die('Could not get data: ' . mysql_error());
                             }   
                        $rowthethinkerszh = mysql_fetch_array($retvalthethinkerszh, MYSQL_ASSOC);     
                            $zhtext1 = $rowthethinkerszh['text1'];     
                            $zhtext2 = $rowthethinkerszh['text2']; 
                            $zhtext3 = $rowthethinkerszh['text3']; 
                            $zhimage1 = $rowthethinkersen['image1'];
                            $zhimage2 = $rowthethinkersen['image2'];
?>