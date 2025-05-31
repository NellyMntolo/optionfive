<?php 
include '../Model/dbconfig.php';
mysql_set_charset("utf8");

$result = '';
//if(isset($_POST['selected_category'])){ 
  $categoryname = mysql_real_escape_string($_POST['selected_category'],$conn);

  $sql_catag_name = 'SELECT text2 FROM think_category WHERE idx = "'.$categoryname.'" LIMIT 1';    
     $retval_catag_name = mysql_query( $sql_catag_name, $conn );     
     if(! $retval_catag_name )
     {
        die('Could not get data: ' . mysql_error());
     }

     $rowcategory = mysql_fetch_array($retval_catag_name, MYSQL_ASSOC);
     $text2 = $rowcategory['text2'];       
     $result = $text2;
//}

echo $result;

?>