<?php
include '../Model/dbconfig.php';
mysql_set_charset("utf8");



if(isset($_POST['add_category'])){

  $zhtext1 = mysql_real_escape_string($_POST['content_zhtext1'],$conn);

  $entext1 = mysql_real_escape_string($_POST['content_entext1'],$conn);


  $sql_category = 'SELECT * FROM think_category'; 
  $retval_category = mysql_query( $sql_category, $conn );     
     if(! $retval_category )
     {
        die('Could not get data: ' . mysql_error());
     }

     $row_category = mysql_fetch_array($retval_category, MYSQL_ASSOC);
     $total_rows = mysql_num_rows($retval_category); 

  if($total_rows < "10"){

 $sqla = 'INSERT INTO think_category (text1, text2) VALUES ( "'.$entext1.'","'.$zhtext1.'")';            
                   $retvala = mysql_query( $sqla, $conn );
                   if(! $retvala )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }

                       header("Refresh:0; url=/Admin/ProjectCategories");

     } else {
      echo '<script language="javascript">';
      echo 'alert("Whoops!\nCategory Limit Reached!\nPlease delete some categories in order to add more.")';
      echo '</script>';
      header("Refresh:0; url=/Admin/ProjectCategories");
    }
}



if(isset($_POST['edit_category'])){

  $categoryid = mysql_real_escape_string($_POST['category_id'],$conn);

  $zhtext1 = mysql_real_escape_string($_POST['content_zhtext2'],$conn);

  $entext1 = mysql_real_escape_string($_POST['content_entext2'],$conn);


 $sql="UPDATE think_category SET text1='".$entext1."', text2='".$zhtext1."' WHERE idx='".$categoryid."' ";              
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }


                       header("Refresh:0; url=/Admin/ProjectCategories");
}


if(isset($_POST['delete_category'])){
  $categoryid = mysql_real_escape_string($_POST['category_id'],$conn);

        $sqlin = 'DELETE FROM think_category WHERE idx ="'.$categoryid .'" LIMIT 1';
                 $retvalin = mysql_query( $sqlin, $conn );
                   if(! $retvalin )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
                       


        $sqlreseten1 = "ALTER TABLE think_category DROP idx; ";
        $sqlreseten2 = "ALTER TABLE think_category AUTO_INCREMENT = 1; ";
        $sqlreseten3 = "ALTER TABLE think_category ADD idx int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST; ";

        $retvalreseten1 = mysql_query( $sqlreseten1, $conn );
        $retvalreseten2 = mysql_query( $sqlreseten2, $conn );
        $retvalreseten3 = mysql_query( $sqlreseten3, $conn );
                  if(! $retvalreseten1 )
                       {
                          die('Could not alter english data: ' . mysql_error());
                       }

                       if(! $retvalreseten2 )
                       {
                          die('Could not alter english data: ' . mysql_error());
                       }

                       if(! $retvalreseten3 )
                       {
                          die('Could not alter english data: ' . mysql_error());
                       }

                       header("Refresh:0; url=/Admin/ProjectCategories");

}
?>