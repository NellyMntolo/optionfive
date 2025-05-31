<?php
include '../Model/dbconfig.php';
mysql_set_charset("utf8");


if(isset($_POST['page_submit'])){

	$zhtext1 = mysql_real_escape_string($_POST['general_zhtext1'],$conn);
  $zhtext2 = mysql_real_escape_string($_POST['general_zhtext2'],$conn);
  $zhtext3 = mysql_real_escape_string($_POST['general_zhtext3'],$conn);
  $zhtext4 = mysql_real_escape_string($_POST['general_zhtext4'],$conn);

  $zhtext5 = mysql_real_escape_string($_POST['content_zhtext1'],$conn);
  $zhtext6 = mysql_real_escape_string($_POST['content_zhtext2'],$conn);
  $zhtext7 = mysql_real_escape_string($_POST['content_zhtext3'],$conn);
	$zhimage1 = $_FILES['wedo_image1']['name'];
	$zhimage2 = $_FILES['wedo_image2']['name'];
  $zhimage3 = $_FILES['wedo_image3']['name'];


	$entext1 = mysql_real_escape_string($_POST['general_entext1'],$conn);
  $entext2 = mysql_real_escape_string($_POST['general_entext2'],$conn);
  $entext3 = mysql_real_escape_string($_POST['general_entext3'],$conn);
  $entext4 = mysql_real_escape_string($_POST['general_entext4'],$conn);

  $entext5 = mysql_real_escape_string($_POST['content_entext1'],$conn);
  $entext6 = mysql_real_escape_string($_POST['content_entext2'],$conn);
  $entext7 = mysql_real_escape_string($_POST['content_entext3'],$conn);
	$image1 = $_FILES['wedo_image1']['name'];
	$image2 = $_FILES['wedo_image2']['name'];
  $image3 = $_FILES['wedo_image3']['name'];


 $sql="UPDATE think_retailers_en SET text1='".$entext1."', text2='".$entext2."', text3='".$entext3."', text4='".$entext4."', text5='".$entext5."', text6='".$entext6."', text7='".$entext7."' ";              
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }

 $sqlzh="UPDATE think_retailers_zh SET text1='".$zhtext1."', text2='".$zhtext2."', text3='".$zhtext3."', text4='".$zhtext4."', text5='".$zhtext5."', text6='".$zhtext6."', text7='".$zhtext7."' ";              
                   $retvalzh = mysql_query( $sqlzh, $conn );
                   if(! $retvalzh )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }

    if($image1 != null) {
      $file_tmp1 =$_FILES['wedo_image1']['tmp_name'];
      move_uploaded_file($file_tmp1, getcwd()."/../../../../../../uploads/".$image1);
      $filename = "/uploads/".$image1;
      $sql1="UPDATE think_retailers_en SET image1='".$filename."'";
      $retval1 = mysql_query( $sql1, $conn );
                   if(! $retval1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
      $sql2="UPDATE think_retailers_zh SET image1='".$filename."'";
      $retval2 = mysql_query( $sql2, $conn );
                   if(! $retval2 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }

    if($image2 != null) {
      $file_tmp1 =$_FILES['wedo_image2']['tmp_name'];
      move_uploaded_file($file_tmp1, getcwd()."/../../../../../../uploads/".$image2);
      $filename = "/uploads/".$image2;
      $sql1="UPDATE think_retailers_en SET image2='".$filename."'";
      $retval1 = mysql_query( $sql1, $conn );
                   if(! $retval1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
      $sql2="UPDATE think_retailers_zh SET image2='".$filename."'";
      $retval2 = mysql_query( $sql2, $conn );
                   if(! $retval2 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }

    if($image3 != null) {
      $file_tmp1 =$_FILES['wedo_image3']['tmp_name'];
      move_uploaded_file($file_tmp1, getcwd()."/../../../../../../uploads/".$image3);
      $filename = "/uploads/".$image3;
      $sql1="UPDATE think_retailers_en SET image3='".$filename."'";
      $retval1 = mysql_query( $sql1, $conn );
                   if(! $retval1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
      $sql3="UPDATE think_retailers_zh SET image3='".$filename."'";
      $retval3 = mysql_query( $sql3, $conn );
                   if(! $retval3 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }
  


                       header("Refresh:0; url=/Admin/Retailers");
}


?>