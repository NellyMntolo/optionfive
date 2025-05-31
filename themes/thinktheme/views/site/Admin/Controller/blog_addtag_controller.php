<?php 
include '../Model/dbconfig.php';
mysql_set_charset("utf8");

$result = '';
//if(isset($_POST['test-input'])){ 
  $selected_option = mysql_real_escape_string($_POST['test-input'],$conn);
  //$sql_option_name = 'SELECT * FROM think_category WHERE idx = "'.$selected_option.'" LIMIT 1';  


    $sql_category = 'SELECT * FROM think_blog_en WHERE idx = "'.$selected_option.'" ';    
     $retval_category = mysql_query( $sql_category, $conn );     
     if(! $retval_category )
     {
        die('Could not get data: ' . mysql_error());
     }

      $row_category = mysql_fetch_array($retval_category, MYSQL_ASSOC);
      $category1 = $row_category['category1'];       
      $category2 = $row_category['category2'];
      $category3 = $row_category['category3'];
      $category4 = $row_category['category4'];
      $category5 = $row_category['category5'];
      $category6 = $row_category['category6'];
      $category7 = $row_category['category7'];
      $category8 = $row_category['category8'];
      $category9 = $row_category['category9'];
      $category10 = $row_category['category10'];

      if ($category1 != null || $category2 != null || $category3 != null || $category4 != null || $category5 != null || $category6 != null || $category7 != null || $category8 != null || $category9 != null || $category10 != null) {
          $sql_option_name = 'SELECT * FROM think_tag WHERE text1 != "'.$category1.'" AND text1 != "'.$category2.'" AND text1 != "'.$category3.'" AND text1 != "'.$category4.'" AND text1 != "'.$category5.'" AND text1 != "'.$category6.'" AND text1 != "'.$category7.'" AND text1 != "'.$category8.'" AND text1 != "'.$category9.'" AND text1 != "'.$category10.'"';
          $retval_option_name = mysql_query( $sql_option_name, $conn );     
           if(! $retval_option_name )
           {
              die('Could not get data: ' . mysql_error());
           }

           while($rowoption = mysql_fetch_array($retval_option_name, MYSQL_ASSOC)) {
            $idx = $rowoption['idx'];  
            $text1 = $rowoption['text1'];       
            $text2 = $rowoption['text2'];
            $result .= '<option value="'.$text1.'">'.$text1.'</option>';
            }
      } else {
             $sql_option_name = 'SELECT * FROM think_tag';    
             $retval_option_name = mysql_query( $sql_option_name, $conn );     
             if(! $retval_option_name )
             {
                die('Could not get data: ' . mysql_error());
             }

             while($rowoption = mysql_fetch_array($retval_option_name, MYSQL_ASSOC)) {
              $idx = $rowoption['idx'];  
              $text1 = $rowoption['text1'];       
              $text2 = $rowoption['text2'];
              $result .= '<option value="'.$text1.'">'.$text1.'</option>';
     }
      }
     



/*

  $sql_option_name = 'SELECT * FROM think_category';    
     $retval_option_name = mysql_query( $sql_option_name, $conn );     
     if(! $retval_option_name )
     {
        die('Could not get data: ' . mysql_error());
     }

     while($rowoption = mysql_fetch_array($retval_option_name, MYSQL_ASSOC)) {
     	$idx = $rowoption['idx'];  
		  $text1 = $rowoption['text1'];       
	    $text2 = $rowoption['text2'];
	    $result .= '<option value="'.$text1.'">'.$text1.'</option>';
     }
     */
     
//}

echo $result;


?>