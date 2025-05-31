<?php
include 'dbconfig.php';
mysql_set_charset("utf8");

                        
                        //We recent projects
                        $sqlrecentprojects_en1 = 'select * from think_project_en  ORDER BY idx DESC Limit 1';
                        $retval_recentprojects_en1 = mysql_query( $sqlrecentprojects_en1, $conn );                 
                             if(! $retval_recentprojects_en1 )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                        $sqlrecentprojects_en = 'select * from think_project_en  ORDER BY idx DESC Limit 2 offset 1';
                        $retval_recentprojects_en = mysql_query( $sqlrecentprojects_en, $conn );                 
                             if(! $retval_recentprojects_en )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                        //Website Views
                        $sqlviews_en = 'select views from think_index_en';
                        $retval_views_en = mysql_query( $sqlviews_en, $conn );                 
                             if(! $retval_views_en )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                        $row_views_en = mysql_fetch_array($retval_views_en, MYSQL_ASSOC);
                        $views = $row_views_en['views'];

                        

                        //Published Projects
                        $yes = 'yes';
                        $sqlpublished_en = 'select * from think_project_en where publish = "'.$yes.'"';
                        $retval_published_en = mysql_query( $sqlpublished_en, $conn );                 
                             if(! $retval_published_en )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                        $row_published_en = mysql_fetch_array($retval_published_en, MYSQL_ASSOC);
                        $published_projects = mysql_num_rows($retval_published_en);

                        $sqltotal_en = 'select * from think_project_en';
                        $retval_total_en = mysql_query( $sqltotal_en, $conn );                 
                             if(! $retval_total_en )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                        $row_total_en = mysql_fetch_array($retval_total_en, MYSQL_ASSOC);
                        $total_projects = mysql_num_rows($retval_total_en);
                        //Published Projects

                        //Published blogs
                        $sqlpublishedblogs_en = 'select * from think_blog_en where publish = "'.$yes.'"';
                        $retval_publishedblogs_en = mysql_query( $sqlpublishedblogs_en, $conn );                 
                             if(! $retval_publishedblogs_en )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                        $row_publishedblogs_en = mysql_fetch_array($retval_publishedblogs_en, MYSQL_ASSOC);
                        $publishedblogs_projects = mysql_num_rows($retval_publishedblogs_en);

                        $sqltotalblogs_en = 'select * from think_blog_en';
                        $retval_totalblogs_en = mysql_query( $sqltotalblogs_en, $conn );                 
                             if(! $retval_totalblogs_en )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                        $row_totalblogs_en = mysql_fetch_array($retval_totalblogs_en, MYSQL_ASSOC);
                        $totalblogs_projects = mysql_num_rows($retval_totalblogs_en);
                        //Published blogs
                        
?>