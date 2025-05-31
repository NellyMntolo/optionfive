<?php
include '../Model/dbconfig.php';
mysql_set_charset("utf8");


if(isset($_POST['page_submit'])){


  $zhtext1 = mysql_real_escape_string($_POST['content_text1'],$conn);
  $zhtext2 = mysql_real_escape_string($_POST['content_text2'],$conn);
  $zhtext3 = mysql_real_escape_string($_POST['content_zhtext3'],$conn);

  $entext1 = mysql_real_escape_string($_POST['content_text1'],$conn);
  $entext2 = mysql_real_escape_string($_POST['content_text2'],$conn);
  $entext3 = mysql_real_escape_string($_POST['content_entext3'],$conn);


 $sql="UPDATE think_footer_en SET text1='".$entext1."', text2='".$entext2."', text3='".$entext3."' ";              
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }

 $sqlzh="UPDATE think_footer_zh SET text1='".$zhtext1."', text2='".$zhtext2."', text3='".$zhtext3."' ";              
                   $retvalzh = mysql_query( $sqlzh, $conn );
                   if(! $retvalzh )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }



                       header("Refresh:0; url=/Admin/Footer");
}


if(isset($_POST['add_social'])){

$uploaded_image = '';

  $socialtext1 = mysql_real_escape_string($_POST['content_text4'],$conn);
  $socialtext2 = mysql_real_escape_string($_POST['content_text5'],$conn);
  $image = $_FILES['social_image']['name'];

if($image != null) {
    $file_tmp =$_FILES['social_image']['tmp_name'];
      move_uploaded_file($file_tmp, getcwd()."/../../../../../../uploads/".$image);
    $uploaded_image = "/uploads/".$image;
  }

if($socialtext1 != null){
  $sqlb = 'INSERT INTO think_social (text1, text2, image1) VALUES ( "'.$socialtext1.'", "'.$socialtext2.'", "'.$uploaded_image.'")';

  $retvalb = mysql_query( $sqlb, $conn );
    if(! $retvalb ) {  
        die('Could not enter data: ' . mysql_error());
      }
   }                    header("Refresh:0; url=/Admin/Footer");
}


if(isset($_POST['edit_social'])){

  $socialid = mysql_real_escape_string($_POST['social_id'],$conn);

  $socialtext1 = mysql_real_escape_string($_POST['content_text4'],$conn);
  $socialtext2 = mysql_real_escape_string($_POST['content_text5'],$conn);
  $image1 = $_FILES['social_image']['name'];


   $sql="UPDATE think_social SET text1='".$socialtext1."', text2='".$socialtext2."' WHERE idx='".$socialid."' LIMIT 1";              
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }    


if($image1 != null) {
      $file_tmp1 =$_FILES['social_image']['tmp_name'];
      move_uploaded_file($file_tmp1, getcwd()."/../../../../../../uploads/".$image1);
      $filename = "/uploads/".$image1;
      $sql1="UPDATE think_social SET image1='".$filename."' WHERE idx ='".$socialid."'";
      $retval1 = mysql_query( $sql1, $conn );
                   if(! $retval1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }     
    }   


   header("Refresh:0; url=/Admin/Footer");
}


if(isset($_POST['delete_social'])){
  $social_id = mysql_real_escape_string($_POST['social_id'],$conn);

        $sqlin = 'DELETE FROM think_social WHERE idx ="'.$social_id.'" LIMIT 1';
                 $retvalin = mysql_query( $sqlin, $conn );
                   if(! $retvalin )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }                       


        $sqlreseten1 = "ALTER TABLE think_social DROP idx; ";
        $sqlreseten2 = "ALTER TABLE think_social AUTO_INCREMENT = 1; ";
        $sqlreseten3 = "ALTER TABLE think_social ADD idx int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST; ";

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
header("Refresh:0; url=/Admin/Footer");
}


?>