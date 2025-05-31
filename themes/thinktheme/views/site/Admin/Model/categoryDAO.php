<?php
include 'dbconfig.php';
mysql_set_charset("utf8");

                        $sqlcategory = 'select * from think_category ORDER BY idx DESC';
                        $retvalcategory = mysql_query( $sqlcategory, $conn );                 
                             if(! $retvalcategory )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                        $categories = '';
                        
                        while($rowcategory = mysql_fetch_array($retvalcategory, MYSQL_ASSOC)){
                        $idx = $rowcategory['idx']; 
                        $text1 = $rowcategory['text1'];  
                        $categories .= '<option name="category_name" value="'.$idx.'" class="names">'.$text1.'</option>'; 
                           }
                        


?>