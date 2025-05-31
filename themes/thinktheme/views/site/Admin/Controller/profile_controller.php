<?php
include '../Model/dbconfig.php';
mysql_set_charset("utf8");


if(isset($_POST['page_submit'])){


  $entext1 = mysql_real_escape_string($_POST['text1'],$conn);
  $entext2 = mysql_real_escape_string($_POST['text2'],$conn);
  $entext3 = mysql_real_escape_string($_POST['text3'],$conn);
  $entext4 = mysql_real_escape_string($_POST['text4'],$conn);

$image1 = $_FILES['profileimage']['name'];
$uploaded_image1 = '';

if($image1 != null) {
    $file_tmp =$_FILES['profileimage']['tmp_name'];
      move_uploaded_file($file_tmp, getcwd()."/../../../../../../uploads/".$image1);
    $uploaded_image1 = "/uploads/".$image1;
      $sql1="UPDATE think_master SET image1='".$uploaded_image1."'";
      $retval1 = mysql_query( $sql1, $conn );
                   if(! $retval1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
  }


 $sql="UPDATE think_master SET firstname='".$entext1."', lastname='".$entext2."', jobtitle='".$entext3."', dob='".$entext4."' ";              
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }




                       header("Refresh:0; url=/Admin/Profile");
}


?>