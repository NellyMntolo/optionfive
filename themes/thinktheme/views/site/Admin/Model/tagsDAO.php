<?php
include 'dbconfig.php';
mysql_set_charset("utf8");

                        $sqltag = 'select * from think_tag ORDER BY idx DESC';
                        $retvaltag = mysql_query( $sqltag, $conn );                 
                             if(! $retvaltag )
                             {
                                die('Could not get data: ' . mysql_error());
                             }

                        $tags = '';
                        
                        while($rowtag = mysql_fetch_array($retvaltag, MYSQL_ASSOC)){
                        $idx = $rowtag['idx']; 
                        $text1 = $rowtag['text1'];  
                        $tags .= '<option name="tag_name" value="'.$idx.'" class="names">'.$text1.'</option>'; 
                           }
                        


?>