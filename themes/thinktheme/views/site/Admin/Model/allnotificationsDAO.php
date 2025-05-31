<?php
include 'dbconfig.php';
mysql_set_charset("utf8");
                        //ALL THINKERS
                        $sql_allthinkers = 'select * from think_thethinkers_en ORDER BY idx DESC';
                        $retval_allthinkers = mysql_query( $sql_allthinkers, $conn );                 
                             if(! $retval_allthinkers )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                        $row_allthinkers = mysql_fetch_array($retval_allthinkers, MYSQL_ASSOC);                      
                        $allthinkers_idx = $row_allthinkers['idx'];

                        //ALL PARTNERS
                        $sql_allpartners = 'select * from think_partners_en ORDER BY idx DESC';
                        $retval_allpartners = mysql_query( $sql_allpartners, $conn );                 
                             if(! $retval_allpartners )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                        $row_allpartners = mysql_fetch_array($retval_allpartners, MYSQL_ASSOC);                      
                        $allpartners_idx = $row_allpartners['idx'];

                        //ALL BLOGS
                        $sql_allblogs = 'select * from think_blog_en ORDER BY idx DESC';
                        $retval_allblogs = mysql_query( $sql_allblogs, $conn );                 
                             if(! $retval_allblogs )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                        $row_allblogs = mysql_fetch_array($retval_allblogs, MYSQL_ASSOC);                      
                        $allblogs_idx = $row_allblogs['idx'];

                        //ALL PROJECTS
                        $sql_allprojects = 'select * from think_project_en ORDER BY idx DESC';
                        $retval_allprojects = mysql_query( $sql_allprojects, $conn );                 
                             if(! $retval_allprojects )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                        $row_allprojects = mysql_fetch_array($retval_allprojects, MYSQL_ASSOC);                      
                        $allprojects_idx = $row_allprojects['idx'];

                        //ALL CATEGORIES
                        //ALL TAGS
                        


?>