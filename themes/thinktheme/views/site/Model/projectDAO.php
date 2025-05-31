<?php
include 'dbconfig.php';
mysql_set_charset("utf8");
session_start();

$projectid = mysql_real_escape_string($_GET['project_id'],$conn);
//$projectid = $_SESSION["project_session"];

//$getName = explode("/",$_SERVER['REQUEST_URI']);


                        $sqlprojecten = 'select * from think_project_en WHERE url="'.$projectid.'" LIMIT 1';
                        $retval_singleprojecten = mysql_query( $sqlprojecten, $conn );                 
                             if(! $retval_singleprojecten )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                        

                        $sqlprojectzh = 'select * from think_project_zh WHERE url="'.$projectid.'" LIMIT 1';
                        $retval_singleprojectzh = mysql_query( $sqlprojectzh, $conn );                 
                             if(! $retval_singleprojectzh )
                             {
                                die('Could not get data: ' . mysql_error());
                             }   


                        $sqlurlen = 'select * from think_project_en WHERE url="'.$projectid.'" LIMIT 1';
                        $retval_urlen = mysql_query( $sqlurlen, $conn );                 
                             if(! $retval_urlen )
                             {
                                die('Could not get data: ' . mysql_error());
                             }  
                             $rowurlen = mysql_fetch_array($retval_urlen, MYSQL_ASSOC);
                             $linkurlen = $rowurlen['sortable_order'];

                        $sqlurlzh = 'select * from think_project_zh WHERE url="'.$projectid.'" LIMIT 1';
                        $retval_urlzh = mysql_query( $sqlurlzh, $conn );                 
                             if(! $retval_urlzh )
                             {
                                die('Could not get data: ' . mysql_error());
                             }  
                             $rowurlzh = mysql_fetch_array($retval_urlzh, MYSQL_ASSOC);
                             $linkurlzh = $rowurlzh['sortable_order'];

                             
//NEXT PREV ENG
                        $firstrow = 'SELECT * FROM think_project_en ORDER BY sortable_order ASC LIMIT 1';
                        $retfirst = mysql_query( $firstrow, $conn );               
                        if(! $retfirst )
                        {
                           die('Could not get data: ' . mysql_error());
                        }
                        $rowfirst = mysql_fetch_array($retfirst, MYSQL_ASSOC);
                           $firstid =$rowfirst['sortable_order'];

                        $lastrow = 'SELECT * FROM think_project_en ORDER BY sortable_order DESC LIMIT 1';
                        $retlast = mysql_query( $lastrow, $conn );               
                        if(! $retlast )
                        {
                           die('Could not get data: ' . mysql_error());
                        }
                        $rowlast = mysql_fetch_array($retlast, MYSQL_ASSOC);
                           $lastid =$rowlast['sortable_order'];



                        if ($linkurlen == $firstid){
                             $sql = 'SELECT * FROM think_project_en where sortable_order = "'.$lastid.'" LIMIT 1'; //OFFSET
                                $retval = mysql_query( $sql, $conn );                                  
                                if(! $retval )
                                {
                                   die('Could not get data: ' . mysql_error());
                                }
                                $rowfirsts = mysql_fetch_array($retval, MYSQL_ASSOC);
                                $prev_id_en = $rowfirsts['url'];
                          } elseif ($linkurlen != $firstid){
                              $sql = 'SELECT * FROM think_project_en where sortable_order = "'.$linkurlen.'" -1 LIMIT 1'; //OFFSET
                                    $retval = mysql_query( $sql, $conn );                                      
                                    if(! $retval )
                                    {
                                       die('Could not get data: ' . mysql_error());
                                    }
                                    $rowfirsts = mysql_fetch_array($retval, MYSQL_ASSOC);
                                    $prev_id_en = $rowfirsts['url'];
                            }                          
                        

                          if ($linkurlen == $lastid){
                             $sql = 'SELECT * FROM think_project_en where sortable_order = "'.$firstid.'" LIMIT 1'; //OFFSET
                                $retval = mysql_query( $sql, $conn );                                  
                                if(! $retval )
                                {
                                   die('Could not get data: ' . mysql_error());
                                }
                                $rowlasts = mysql_fetch_array($retval, MYSQL_ASSOC);
                                $next_id_en = $rowlasts['url'];   
                          } elseif ($linkurlen != $lastid){
                          $sql = 'SELECT * FROM think_project_en where sortable_order = "'.$linkurlen.'"+1 LIMIT 1'; //OFFSET
                                $retval = mysql_query( $sql, $conn );                                  
                                if(! $retval )
                                {
                                   die('Could not get data: ' . mysql_error());
                                }
                                $rowlasts = mysql_fetch_array($retval, MYSQL_ASSOC);
                                $next_id_en = $rowlasts['url'];
                             } 
//NEXT PREV ENG

//NEXT PREV ZH
                        $firstrowzh = 'SELECT * FROM think_project_zh ORDER BY sortable_order ASC LIMIT 1';
                        $retfirstzh = mysql_query( $firstrowzh, $conn );               
                        if(! $retfirstzh )
                        {
                           die('Could not get data: ' . mysql_error());
                        }
                        $rowfirstzh = mysql_fetch_array($retfirstzh, MYSQL_ASSOC);
                           $firstidzh =$rowfirstzh['sortable_order'];


                        $lastrowzh = 'SELECT * FROM think_project_zh ORDER BY sortable_order DESC LIMIT 1';
                        $retlastzh = mysql_query( $lastrowzh, $conn );               
                        if(! $retlastzh )
                        {
                           die('Could not get data: ' . mysql_error());
                        }
                        $rowlastzh = mysql_fetch_array($retlastzh, MYSQL_ASSOC);
                           $lastidzh =$rowlastzh['sortable_order']; 


                        if ($linkurlzh == $firstidzh){
                             $sql = 'SELECT * FROM think_project_zh where sortable_order = "'.$lastidzh.'" LIMIT 1'; //OFFSET
                                $retval = mysql_query( $sql, $conn );                                  
                                if(! $retval )
                                {
                                   die('Could not get data: ' . mysql_error());
                                }
                                $rowfirsts = mysql_fetch_array($retval, MYSQL_ASSOC);
                                $prev_id_zh = $rowfirsts['url'];
                          } elseif ($linkurlzh != $firstidzh){
                              $sql = 'SELECT * FROM think_project_zh where sortable_order = "'.$linkurlzh.'"-1 LIMIT 1'; //OFFSET
                                    $retval = mysql_query( $sql, $conn );                                      
                                    if(! $retval )
                                    {
                                       die('Could not get data: ' . mysql_error());
                                    }
                                    $rowfirsts = mysql_fetch_array($retval, MYSQL_ASSOC);
                                    $prev_id_zh = $rowfirsts['url'];                              
                                 }                                                  
                        

                          if ($linkurlzh == $lastidzh){
                             $sql = 'SELECT * FROM think_project_zh where sortable_order = "'.$firstidzh.'" LIMIT 1'; //OFFSET
                                $retval = mysql_query( $sql, $conn );                                  
                                if(! $retval )
                                {
                                   die('Could not get data: ' . mysql_error());
                                }
                                $rowlasts = mysql_fetch_array($retval, MYSQL_ASSOC);
                                $next_id_zh = $rowlasts['url'];                
                          } elseif ($linkurlzh != $lastidzh){
                          $sql = 'SELECT * FROM think_project_zh where sortable_order = "'.$linkurlzh.'"+1 LIMIT 1'; //OFFSET
                                $retval = mysql_query( $sql, $conn );                                  
                                if(! $retval )
                                {
                                   die('Could not get data: ' . mysql_error());
                                }
                                $rowlasts = mysql_fetch_array($retval, MYSQL_ASSOC);
                                $next_id_zh = $rowlasts['url'];
                             } 
//NEXT PREV ZH                             

?>