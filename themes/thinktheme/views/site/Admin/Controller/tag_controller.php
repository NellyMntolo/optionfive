<?php
include '../Model/dbconfig.php';
mysql_set_charset("utf8");



if(isset($_POST['add_tag'])){

  $zhtext1 = mysql_real_escape_string($_POST['content_zhtext1'],$conn);

  $entext1 = mysql_real_escape_string($_POST['content_entext1'],$conn);



  $sql_tag = 'SELECT * FROM think_tag'; 
  $retval_tag = mysql_query( $sql_tag, $conn );     
     if(! $retval_tag )
     {
        die('Could not get data: ' . mysql_error());
     }

     $row_tag = mysql_fetch_array($retval_tag, MYSQL_ASSOC);
     $total_rows = mysql_num_rows($retval_tag); 

  if($total_rows < "10"){

     $sqla = 'INSERT INTO think_tag (text1, text2) VALUES ( "'.$entext1.'","'.$zhtext1.'")';            
                       $retvala = mysql_query( $sqla, $conn );
                       if(! $retvala )
                           {
                              die('Could not enter data: ' . mysql_error());
                           }

                           header("Refresh:0; url=/Admin/BlogTags");
    } else {
      echo '<script language="javascript">';
      echo 'alert("Whoops!\nTag Limit Reached!\nPlease delete some tags in order to add more.")';
      echo '</script>';
      header("Refresh:0; url=/Admin/BlogTags");
    }
}



if(isset($_POST['edit_tag'])){

  $tagid = mysql_real_escape_string($_POST['tag_id'],$conn);

  $zhtext1 = mysql_real_escape_string($_POST['content_zhtext2'],$conn);

  $entext1 = mysql_real_escape_string($_POST['content_entext2'],$conn);


 $sql="UPDATE think_tag SET text1='".$entext1."', text2='".$zhtext1."' WHERE idx='".$tagid."' ";              
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }


                       header("Refresh:0; url=/Admin/BlogTags");
}


if(isset($_POST['delete_tag'])){
  $tagid = mysql_real_escape_string($_POST['tag_id'],$conn);

        $sqlin = 'DELETE FROM think_tag WHERE idx ="'.$tagid .'" LIMIT 1';
                 $retvalin = mysql_query( $sqlin, $conn );
                   if(! $retvalin )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
                       


        $sqlreseten1 = "ALTER TABLE think_tag DROP idx; ";
        $sqlreseten2 = "ALTER TABLE think_tag AUTO_INCREMENT = 1; ";
        $sqlreseten3 = "ALTER TABLE think_tag ADD idx int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST; ";

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

                       header("Refresh:0; url=/Admin/BlogTags");

}
?>