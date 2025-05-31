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


	$entext1 = mysql_real_escape_string($_POST['general_entext1'],$conn);
  $entext2 = mysql_real_escape_string($_POST['general_entext2'],$conn);
  $entext3 = mysql_real_escape_string($_POST['general_entext3'],$conn);
  $entext4 = mysql_real_escape_string($_POST['general_entext4'],$conn);
  $entext5 = mysql_real_escape_string($_POST['content_entext1'],$conn);
  $entext6 = mysql_real_escape_string($_POST['content_entext2'],$conn);


  $video_name = $_FILES['video_name']['name'];
  $video_tmp = $_FILES['video_name']['tmp_name'];
  //$video_url = mysql_real_escape_string($_POST['video_url'],$conn);

  $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $video_name);

  $videofile_name = "/themes/thinktheme/views/site/Assets/video/".$withoutExt;
  move_uploaded_file($video_tmp, getcwd()."/../../Assets/video/".$video_name);





 $sql="UPDATE think_products_en SET text1='".$entext1."', text2='".$entext2."', text3='".$entext3."', text4='".$entext4."', text5='".$entext5."', text6='".$entext6."' ";              
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }

 $sqlzh="UPDATE think_products_zh SET text1='".$zhtext1."', text2='".$zhtext2."', text3='".$zhtext3."', text4='".$zhtext4."', text5='".$zhtext5."', text6='".$zhtext6."' ";              
                   $retvalzh = mysql_query( $sqlzh, $conn );
                   if(! $retvalzh )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }

    if($video_name != null) {
      $videofile_name = "/themes/thinktheme/views/site/assets/video/".$withoutExt;
      move_uploaded_file($video_tmp, getcwd()."/../../assets/video/".$video_name);
      $sqlvideo_name1="UPDATE think_products_en SET image1='".$videofile_name."' ";
      $retvalvideo_name1 = mysql_query( $sqlvideo_name1, $conn );
                   if(! $retvalvideo_name1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
      $sqlvideo_name2="UPDATE think_products_zh SET image1='".$videofile_name."' ";
      $retvalvideo_name2 = mysql_query( $sqlvideo_name2, $conn );
                   if(! $retvalvideo_name2 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }

                      header("Refresh:0; url=/Admin/Products");
}


?>