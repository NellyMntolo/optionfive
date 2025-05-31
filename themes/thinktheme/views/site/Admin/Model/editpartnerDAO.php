<?php
include 'dbconfig.php';
mysql_set_charset("utf8");

$partnersid = mysql_real_escape_string($_GET['partner_id'],$conn);

                        $sqlpartnersen = 'select * from think_partners_en WHERE idx="'.$partnersid.'" LIMIT 1';
                        $retvalpartnersen = mysql_query( $sqlpartnersen, $conn );                 
                             if(! $retvalpartnersen )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                        $rowpartnersen = mysql_fetch_array($retvalpartnersen, MYSQL_ASSOC);
                            $idx = $rowpartnersen['idx']; 
                            $entext1 = $rowpartnersen['text1'];
                            $enimage1 = $rowpartnersen['image1'];
                        

                        $sqlpartnerszh = 'select * from think_partners_zh WHERE idx="'.$partnersid.'" LIMIT 1';
                        $retvalpartnerszh = mysql_query( $sqlpartnerszh, $conn );                 
                             if(! $retvalpartnerszh )
                             {
                                die('Could not get data: ' . mysql_error());
                             }   
                        $rowpartnerszh = mysql_fetch_array($retvalpartnerszh, MYSQL_ASSOC);     
                            $zhtext1 = $rowpartnerszh['text1']; 
                            $zhimage1 = $rowpartnersen['image1'];
?>