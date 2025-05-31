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
  $zhtext8 = mysql_real_escape_string($_POST['content_zhtext4'],$conn);
  $zhtext9 = mysql_real_escape_string($_POST['content_zhtext5'],$conn);
  $zhtext10 = mysql_real_escape_string($_POST['content_zhtext6'],$conn);
  $zhtext11 = mysql_real_escape_string($_POST['content_zhtext7'],$conn);
  $zhtext12 = mysql_real_escape_string($_POST['content_zhtext8'],$conn);
  $zhtext13 = mysql_real_escape_string($_POST['content_zhtext9'],$conn);
  $zhtext14 = mysql_real_escape_string($_POST['content_zhtext10'],$conn);
  $zhtext15 = mysql_real_escape_string($_POST['content_zhtext11'],$conn);
  $zhtext16 = mysql_real_escape_string($_POST['content_zhtext12'],$conn);
  $zhtext17 = mysql_real_escape_string($_POST['content_zhtext13'],$conn);
  $zhtext18 = mysql_real_escape_string($_POST['content_zhtext14'],$conn);
  $zhtext19 = mysql_real_escape_string($_POST['content_zhtext15'],$conn);
  $zhtext20 = mysql_real_escape_string($_POST['content_zhtext16'],$conn);


	$entext1 = mysql_real_escape_string($_POST['general_entext1'],$conn);
  $entext2 = mysql_real_escape_string($_POST['general_entext2'],$conn);
  $entext3 = mysql_real_escape_string($_POST['general_entext3'],$conn);
  $entext4 = mysql_real_escape_string($_POST['general_entext4'],$conn);

  $entext5 = mysql_real_escape_string($_POST['content_entext1'],$conn);
  $entext6 = mysql_real_escape_string($_POST['content_entext2'],$conn);
  $entext7 = mysql_real_escape_string($_POST['content_entext3'],$conn);
  $entext8 = mysql_real_escape_string($_POST['content_entext4'],$conn);
  $entext9 = mysql_real_escape_string($_POST['content_entext5'],$conn);
  $entext10 = mysql_real_escape_string($_POST['content_entext6'],$conn);
  $entext11 = mysql_real_escape_string($_POST['content_entext7'],$conn);
  $entext12 = mysql_real_escape_string($_POST['content_entext8'],$conn);
  $entext13 = mysql_real_escape_string($_POST['content_entext9'],$conn);
  $entext14 = mysql_real_escape_string($_POST['content_entext10'],$conn);
  $entext15 = mysql_real_escape_string($_POST['content_entext11'],$conn);
  $entext16 = mysql_real_escape_string($_POST['content_entext12'],$conn);
  $entext17 = mysql_real_escape_string($_POST['content_entext13'],$conn);
  $entext18 = mysql_real_escape_string($_POST['content_entext14'],$conn);
  $entext19 = mysql_real_escape_string($_POST['content_entext15'],$conn);
  $entext20 = mysql_real_escape_string($_POST['content_entext16'],$conn);
	$image1 = $_FILES['index_image1']['name'];
	$image2 = $_FILES['index_image2']['name'];

  $video_name = $_FILES['video_name']['name'];
  $video_tmp = $_FILES['video_name']['tmp_name'];
  //$video_url = mysql_real_escape_string($_POST['video_url'],$conn);

  $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $video_name);

  $videofile_name = "/themes/thinktheme/views/site/Assets/video/".$withoutExt;
  move_uploaded_file($video_tmp, getcwd()."/../../Assets/video/".$video_name);



 $sql="UPDATE think_index_en SET text1='".$entext1."', text2='".$entext2."', text3='".$entext3."', text4='".$entext4."', text5='".$entext5."', text6='".$entext6."', text7='".$entext7."', text8='".$entext8."', text9='".$entext9."', text10='".$entext10."', text11='".$entext11."', text12='".$entext12."', text13='".$entext13."', text14='".$entext14."', text15='".$entext15."', text16='".$entext16."', text17='".$entext17."', text18='".$entext18."', text19='".$entext19."', text20='".$entext20."' ";              
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }

 $sqlzh="UPDATE think_index_zh SET text1='".$zhtext1."', text2='".$zhtext2."', text3='".$zhtext3."', text4='".$zhtext4."', text5='".$zhtext5."', text6='".$zhtext6."', text7='".$zhtext7."', text8='".$zhtext8."', text9='".$zhtext9."', text10='".$zhtext10."', text11='".$zhtext11."', text12='".$zhtext12."', text13='".$zhtext13."', text14='".$zhtext14."', text15='".$zhtext15."', text16='".$zhtext16."', text17='".$zhtext17."', text18='".$zhtext18."', text19='".$zhtext19."', text20='".$zhtext20."' ";              
                   $retvalzh = mysql_query( $sqlzh, $conn );
                   if(! $retvalzh )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }




    if($video_name != null) {
      $videofile_name = "/themes/thinktheme/views/site/assets/video/".$withoutExt;
      move_uploaded_file($video_tmp, getcwd()."/../../assets/video/".$video_name);
      $sqlvideo_name1="UPDATE think_index_en SET image1='".$videofile_name."' ";
      $retvalvideo_name1 = mysql_query( $sqlvideo_name1, $conn );
                   if(! $retvalvideo_name1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
      $sqlvideo_name2="UPDATE think_index_zh SET image1='".$videofile_name."' ";
      $retvalvideo_name2 = mysql_query( $sqlvideo_name2, $conn );
                   if(! $retvalvideo_name2 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }



    if($image1 != null) {
    	$index_image1 = addslashes(file_get_contents($_FILES['index_image1']['tmp_name']));
      $file_tmp1 =$_FILES['index_image1']['tmp_name'];
      move_uploaded_file($file_tmp1, getcwd()."/../../../../../../uploads/".$image1);
      $filename = "/uploads/".$image1;
    	$sql1="UPDATE think_index_en SET image2='".$filename."'";
    	$retval1 = mysql_query( $sql1, $conn );
                   if(! $retval1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
      $sql2="UPDATE think_index_zh SET image2='".$filename."'";
      $retval2 = mysql_query( $sql2, $conn );
                   if(! $retval2 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }

    if($image2 != null) {
      $index_image2 = addslashes(file_get_contents($_FILES['index_image2']['tmp_name']));
      $file_tmp =$_FILES['index_image2']['tmp_name'];
      move_uploaded_file($file_tmp, getcwd()."/../../../../../../uploads/".$image2);
      $filename = "/uploads/".$image2;
      $sql1="UPDATE think_index_en SET image3='".$filename."'";
      $retval1 = mysql_query( $sql1, $conn );
                   if(! $retval1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
      $sql2="UPDATE think_index_zh SET image3='".$filename."'";
      $retval2 = mysql_query( $sql2, $conn );
                   if(! $retval2 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }

    header("Refresh:0; url=/Admin/Main");
    
}


?>