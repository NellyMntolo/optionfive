<?php
include '../Model/dbconfig.php';
mysql_set_charset("utf8");

if(isset($_POST['tag_test'])){
    $blog_id = mysql_real_escape_string($_POST['blog_id'],$conn);
    $selected_option = mysql_real_escape_string($_POST['selected_option'],$conn);
    $selected_category = mysql_real_escape_string($_POST['selected_tag'],$conn);    


    $sqlcatzh = 'SELECT * FROM think_tag WHERE text1 = "'.$selected_category.'" ';
     
     $retvalcatzh = mysql_query( $sqlcatzh, $conn );     
     if(! $retvalcatzh )
     {
        die('Could not get data: ' . mysql_error());
     }
     $rowcatzh = mysql_fetch_array($retvalcatzh, MYSQL_ASSOC);
     $zhcategory =$rowcatzh['text2'];


    $sqlb = 'SELECT * FROM think_blog_en WHERE idx = "'.$blog_id.'" ';
     
     $retvalb = mysql_query( $sqlb, $conn );     
     if(! $retvalb )
     {
        die('Could not get data: ' . mysql_error());
     }

     while($row1 = mysql_fetch_array($retvalb, MYSQL_ASSOC)){
      $category1 =$row1['category1'];
      $category2 =$row1['category2'];
      $category3 =$row1['category3'];
      $category4 =$row1['category4'];
      $category5 =$row1['category5'];
      $category6 =$row1['category6'];
      $category7 =$row1['category7'];
      $category8 =$row1['category8'];
      $category9 =$row1['category9'];
      $category10 =$row1['category10'];
    }
if ($selected_option == "0") {
    if(is_null($category1)){
      $sql="UPDATE think_blog_en SET category1='".$selected_category."' WHERE idx ='".$blog_id."'";               
                   
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }

      $sqlreturnzh="UPDATE think_blog_zh SET category1='".$zhcategory."' WHERE idx ='".$blog_id."'"; 
      $retvalreturnzh = mysql_query( $sqlreturnzh, $conn );
                   if(! $retvalreturnzh )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
                       header("Refresh:0; url=/Admin/ViewAllBlogs/");
    } elseif (is_null($category2)) {
      $sql="UPDATE think_blog_en SET category2='".$selected_category."' WHERE idx ='".$blog_id."'";               
                   
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
      $sqlreturnzh="UPDATE think_blog_zh SET category2='".$zhcategory."' WHERE idx ='".$blog_id."'"; 
      $retvalreturnzh = mysql_query( $sqlreturnzh, $conn );
                   if(! $retvalreturnzh )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
                       header("Refresh:0; url=/Admin/ViewAllBlogs/");
    }  elseif (is_null($category3)) {
      $sql="UPDATE think_blog_en SET category3='".$selected_category."' WHERE idx ='".$blog_id."'";               
                   
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
      $sqlreturnzh="UPDATE think_blog_zh SET category3='".$zhcategory."' WHERE idx ='".$blog_id."'"; 
      $retvalreturnzh = mysql_query( $sqlreturnzh, $conn );
                   if(! $retvalreturnzh )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
                       header("Refresh:0; url=/Admin/ViewAllBlogs/");
    }  elseif (is_null($category4)) {
      $sql="UPDATE think_blog_en SET category4='".$selected_category."' WHERE idx ='".$blog_id."'";               
                   
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
      $sqlreturnzh="UPDATE think_blog_zh SET category4='".$zhcategory."' WHERE idx ='".$blog_id."'"; 
      $retvalreturnzh = mysql_query( $sqlreturnzh, $conn );
                   if(! $retvalreturnzh )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
                       header("Refresh:0; url=/Admin/ViewAllBlogs/");
    }  elseif (is_null($category5)) {
      $sql="UPDATE think_blog_en SET category5='".$selected_category."' WHERE idx ='".$blog_id."'";               
                   
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
      $sqlreturnzh="UPDATE think_blog_zh SET category5='".$zhcategory."' WHERE idx ='".$blog_id."'"; 
      $retvalreturnzh = mysql_query( $sqlreturnzh, $conn );
                   if(! $retvalreturnzh )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
                       header("Refresh:0; url=/Admin/ViewAllBlogs/");
    }  elseif (is_null($category6)) {
      $sql="UPDATE think_blog_en SET category6='".$selected_category."' WHERE idx ='".$blog_id."'";               
                   
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
      $sqlreturnzh="UPDATE think_blog_zh SET category6='".$zhcategory."' WHERE idx ='".$blog_id."'"; 
      $retvalreturnzh = mysql_query( $sqlreturnzh, $conn );
                   if(! $retvalreturnzh )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
                       header("Refresh:0; url=/Admin/ViewAllBlogs/");
    }  elseif (is_null($category7)) {
      $sql="UPDATE think_blog_en SET category7='".$selected_category."' WHERE idx ='".$blog_id."'";               
                   
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
      $sqlreturnzh="UPDATE think_blog_zh SET category7='".$zhcategory."' WHERE idx ='".$blog_id."'"; 
      $retvalreturnzh = mysql_query( $sqlreturnzh, $conn );
                   if(! $retvalreturnzh )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
                       header("Refresh:0; url=/Admin/ViewAllBlogs/");
    }  elseif (is_null($category8)) {
      $sql="UPDATE think_blog_en SET category8='".$selected_category."' WHERE idx ='".$blog_id."'";               
                   
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
      $sqlreturnzh="UPDATE think_blog_zh SET category8='".$zhcategory."' WHERE idx ='".$blog_id."'"; 
      $retvalreturnzh = mysql_query( $sqlreturnzh, $conn );
                   if(! $retvalreturnzh )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
                       header("Refresh:0; url=/Admin/ViewAllBlogs/");
    }  elseif (is_null($category9)) {
      $sql="UPDATE think_blog_en SET category9='".$selected_category."' WHERE idx ='".$blog_id."'";               
                   
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
      $sqlreturnzh="UPDATE think_blog_zh SET category9='".$zhcategory."' WHERE idx ='".$blog_id."'"; 
      $retvalreturnzh = mysql_query( $sqlreturnzh, $conn );
                   if(! $retvalreturnzh )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
                       header("Refresh:0; url=/Admin/ViewAllBlogs/");
    }  elseif (is_null($category10)) {
      $sql="UPDATE think_blog_en SET category10='".$selected_category."' WHERE idx ='".$blog_id."'";               
                   
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
      $sqlreturnzh="UPDATE think_blog_zh SET category10='".$zhcategory."' WHERE idx ='".$blog_id."'"; 
      $retvalreturnzh = mysql_query( $sqlreturnzh, $conn );
                   if(! $retvalreturnzh )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
                       header("Refresh:0; url=/Admin/ViewAllBlogs/");
    } else {
      echo '<script language="javascript">';
      echo 'alert("Whoops!\nCategory Limit Reached!\nPlease delete some categories in order to add more.")';
      echo '</script>';
      header("Refresh:0; url=/Admin/ViewAllBlogs/");
    }
  } else {
    if ($selected_category == $category1) {
    $sql="UPDATE think_blog_en SET category1 = NULL WHERE idx ='".$blog_id."'";               
                   
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
    $sqlreturnzh="UPDATE think_blog_zh SET category1 = NULL WHERE idx ='".$blog_id."'"; 
      $retvalreturnzh = mysql_query( $sqlreturnzh, $conn );
                   if(! $retvalreturnzh )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
                       header("Refresh:0; url=/Admin/ViewAllBlogs/");
    }  elseif ($selected_category == $category2) {
    $sql="UPDATE think_blog_en SET category2 = NULL WHERE idx ='".$blog_id."'";               
                   
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
    $sqlreturnzh="UPDATE think_blog_zh SET category2 = NULL WHERE idx ='".$blog_id."'"; 
      $retvalreturnzh = mysql_query( $sqlreturnzh, $conn );
                   if(! $retvalreturnzh )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
                       header("Refresh:0; url=/Admin/ViewAllBlogs/");
    }  elseif ($selected_category == $category3) {
    $sql="UPDATE think_blog_en SET category3 = NULL WHERE idx ='".$blog_id."'";               
                   
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
    $sqlreturnzh="UPDATE think_blog_zh SET category3 = NULL WHERE idx ='".$blog_id."'"; 
      $retvalreturnzh = mysql_query( $sqlreturnzh, $conn );
                   if(! $retvalreturnzh )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
                       header("Refresh:0; url=/Admin/ViewAllBlogs/");
    }  elseif ($selected_category == $category4) {
    $sql="UPDATE think_blog_en SET category4 = NULL WHERE idx ='".$blog_id."'";               
                   
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
    $sqlreturnzh="UPDATE think_blog_zh SET category4 = NULL WHERE idx ='".$blog_id."'"; 
      $retvalreturnzh = mysql_query( $sqlreturnzh, $conn );
                   if(! $retvalreturnzh )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
                       header("Refresh:0; url=/Admin/ViewAllBlogs/");
    }  elseif ($selected_category == $category5) {
    $sql="UPDATE think_blog_en SET category5 = NULL WHERE idx ='".$blog_id."'";               
                   
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
    $sqlreturnzh="UPDATE think_blog_zh SET category5 = NULL WHERE idx ='".$blog_id."'"; 
      $retvalreturnzh = mysql_query( $sqlreturnzh, $conn );
                   if(! $retvalreturnzh )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
                       header("Refresh:0; url=/Admin/ViewAllBlogs/");
    }  elseif ($selected_category == $category6) {
    $sql="UPDATE think_blog_en SET category6 = NULL WHERE idx ='".$blog_id."'";               
                   
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
    $sqlreturnzh="UPDATE think_blog_zh SET category6 = NULL WHERE idx ='".$blog_id."'"; 
      $retvalreturnzh = mysql_query( $sqlreturnzh, $conn );
                   if(! $retvalreturnzh )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
                       header("Refresh:0; url=/Admin/ViewAllBlogs/");
    }  elseif ($selected_category == $category7) {
    $sql="UPDATE think_blog_en SET category7 = NULL WHERE idx ='".$blog_id."'";               
                   
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
    $sqlreturnzh="UPDATE think_blog_zh SET category7 = NULL WHERE idx ='".$blog_id."'"; 
      $retvalreturnzh = mysql_query( $sqlreturnzh, $conn );
                   if(! $retvalreturnzh )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
                       header("Refresh:0; url=/Admin/ViewAllBlogs/");
    }  elseif ($selected_category == $category8) {
    $sql="UPDATE think_blog_en SET category8 = NULL WHERE idx ='".$blog_id."'";               
                   
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
    $sqlreturnzh="UPDATE think_blog_zh SET category8 = NULL WHERE idx ='".$blog_id."'"; 
      $retvalreturnzh = mysql_query( $sqlreturnzh, $conn );
                   if(! $retvalreturnzh )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
                       header("Refresh:0; url=/Admin/ViewAllBlogs/");
    }  elseif ($selected_category == $category9) {
    $sql="UPDATE think_blog_en SET category9 = NULL WHERE idx ='".$blog_id."'";               
                   
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
    $sqlreturnzh="UPDATE think_blog_zh SET category9 = NULL WHERE idx ='".$blog_id."'"; 
      $retvalreturnzh = mysql_query( $sqlreturnzh, $conn );
                   if(! $retvalreturnzh )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
                       header("Refresh:0; url=/Admin/ViewAllBlogs/");
    }  elseif ($selected_category == $category10) {
    $sql="UPDATE think_blog_en SET category10 = NULL WHERE idx ='".$blog_id."'";               
                   
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                        }
    $sqlreturnzh="UPDATE think_blog_zh SET category10 = NULL WHERE idx ='".$blog_id."'"; 
      $retvalreturnzh = mysql_query( $sqlreturnzh, $conn );
                   if(! $retvalreturnzh )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
                       header("Refresh:0; url=/Admin/ViewAllBlogs/");
    } else {
      echo '<script language="javascript">';
      echo 'alert("Woot Woot!\nDid you forget something?\nEither there are no categories\nset for this blog or\nSomething terrible went wrong.")';
      echo '</script>';
      header("Refresh:0; url=/Admin/ViewAllBlogs/");
    }
  }
  }

if(isset($_POST['create_blog_submit'])){

  $max = 'SELECT sortable_order FROM think_blog_en ORDER BY sortable_order DESC';
  $retvalmaxen = mysql_query( $max, $conn );                 
                             if(! $retvalmaxen )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
  $rowmaxen = mysql_fetch_array($retvalmaxen, MYSQL_ASSOC);
  $large = $rowmaxen['sortable_order'];

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
  $publish = mysql_real_escape_string($_POST['publish'],$conn);
  $send_to_index = mysql_real_escape_string($_POST['send_to_index'],$conn);
  $tag_zh = mysql_real_escape_string($_POST['selected_tag_zh'],$conn);

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
  $tag_en = mysql_real_escape_string($_POST['selected_tag_en'],$conn);
  $image1 = $_FILES['blog_image1']['name'];
  $image2 = $_FILES['blog_image2']['name'];
  $image3 = $_FILES['blog_image3']['name'];
  $image4 = $_FILES['blog_image4']['name'];
  $image5 = $_FILES['blog_image5']['name'];
  $image6 = $_FILES['blog_image6']['name'];
  $image7 = $_FILES['blog_image7']['name'];
  $image8 = $_FILES['blog_image8']['name'];
  $image9 = $_FILES['blog_image9']['name'];
  $image10 = $_FILES['blog_image10']['name'];
  $image11 = $_FILES['blog_image11']['name'];

  $uploaded_image1 = '';
  $uploaded_image2 = '';
  $uploaded_image3 = '';
  $uploaded_image4 = '';
  $uploaded_image5 = '';
  $uploaded_image6 = '';
  $uploaded_image7 = '';
  $uploaded_image8 = '';
  $uploaded_image9 = '';
  $uploaded_image10 = '';
  $uploaded_image11 = '';

  if($image1 != null) {
    $file_tmp =$_FILES['blog_image1']['tmp_name'];
      move_uploaded_file($file_tmp, getcwd()."/../../../../../../uploads/".$image1);
    $uploaded_image1 = "/uploads/".$image1;
  }

  if($image2 != null) {
    $file_tmp =$_FILES['blog_image2']['tmp_name'];
      move_uploaded_file($file_tmp, getcwd()."/../../../../../../uploads/".$image2);
    $uploaded_image2 = "/uploads/".$image2;
  }

  if($image3 != null) {
    $file_tmp =$_FILES['blog_image3']['tmp_name'];
      move_uploaded_file($file_tmp, getcwd()."/../../../../../../uploads/".$image3);
    $uploaded_image3 = "/uploads/".$image3;
  }

  if($image4 != null) {
    $file_tmp =$_FILES['blog_image4']['tmp_name'];
      move_uploaded_file($file_tmp, getcwd()."/../../../../../../uploads/".$image4);
    $uploaded_image4 = "/uploads/".$image4;
  }

  if($image5 != null) {
    $file_tmp =$_FILES['blog_image5']['tmp_name'];
      move_uploaded_file($file_tmp, getcwd()."/../../../../../../uploads/".$image5);
    $uploaded_image5 = "/uploads/".$image5;
  }

  if($image6 != null) {
    $file_tmp =$_FILES['blog_image6']['tmp_name'];
      move_uploaded_file($file_tmp, getcwd()."/../../../../../../uploads/".$image6);
    $uploaded_image6 = "/uploads/".$image6;
  }

  if($image7 != null) {
    $file_tmp =$_FILES['blog_image7']['tmp_name'];
      move_uploaded_file($file_tmp, getcwd()."/../../../../../../uploads/".$image7);
    $uploaded_image7 = "/uploads/".$image7;
  }

  if($image8 != null) {
    $file_tmp =$_FILES['blog_image8']['tmp_name'];
      move_uploaded_file($file_tmp, getcwd()."/../../../../../../uploads/".$image8);
    $uploaded_image8 = "/uploads/".$image8;
  }

  if($image9 != null) {
    $file_tmp =$_FILES['blog_image9']['tmp_name'];
      move_uploaded_file($file_tmp, getcwd()."/../../../../../../uploads/".$image9);
    $uploaded_image9 = "/uploads/".$image9;
  }

  if($image10 != null) {
    $file_tmp =$_FILES['blog_image10']['tmp_name'];
      move_uploaded_file($file_tmp, getcwd()."/../../../../../../uploads/".$image10);
    $uploaded_image10 = "/uploads/".$image10;
  }

  if($image11 != null) {
    $file_tmp =$_FILES['blog_image11']['tmp_name'];
      move_uploaded_file($file_tmp, getcwd()."/../../../../../../uploads/".$image11);
    $uploaded_image11 = "/uploads/".$image11;
  }


$enurl = str_replace(' ', '_', $entext6);
$zhurl = str_replace(' ', '_', $zhtext6);
  $sqla = 'INSERT INTO think_blog_en (text1, text2, text3, text4, text5, text6, text7, text8, text9, text10, text11, text12, text13, text14, image1, image2, image3, image4, image5, image6, image7, image8, image9, image10, image11, publish, send_to_index, category1, sortable_order, url) VALUES ( "'.$entext1.'", "'.$entext2.'", "'.$entext3.'", "'.$entext4.'", "'.$entext5.'", "'.$entext6.'", "'.$entext7.'", "'.$entext8.'", "'.$entext9.'", "'.$entext10.'", "'.$entext11.'","'.$entext12.'","'.$entext13.'","'.$entext14.'","'.$uploaded_image1.'","'.$uploaded_image2.'","'.$uploaded_image3.'","'.$uploaded_image4.'","'.$uploaded_image5.'","'.$uploaded_image6.'","'.$uploaded_image7.'","'.$uploaded_image8.'","'.$uploaded_image9.'","'.$uploaded_image10.'","'.$uploaded_image11.'","'.$publish.'","'.$send_to_index.'","'.$tag_en.'","'.$large.'"+1, "'.$enurl.'")';

  $retvala = mysql_query( $sqla, $conn );
    if(! $retvala ) {  
        die('Could not enter data: ' . mysql_error());
      }

  $sqlb = 'INSERT INTO think_blog_zh (text1, text2, text3, text4, text5, text6, text7, text8, text9, text10, text11, text12, text13, text14, image1, image2, image3, image4, image5, image6, image7, image8, image9, image10, image11, publish, send_to_index, category1, sortable_order, url) VALUES ( "'.$zhtext1.'", "'.$zhtext2.'", "'.$zhtext3.'", "'.$zhtext4.'", "'.$zhtext5.'", "'.$zhtext6.'", "'.$zhtext7.'", "'.$zhtext8.'", "'.$zhtext9.'", "'.$zhtext10.'", "'.$zhtext11.'","'.$zhtext12.'","'.$zhtext13.'","'.$zhtext14.'","'.$uploaded_image1.'","'.$uploaded_image2.'","'.$uploaded_image3.'","'.$uploaded_image4.'","'.$uploaded_image5.'","'.$uploaded_image6.'","'.$uploaded_image7.'","'.$uploaded_image8.'","'.$uploaded_image9.'","'.$uploaded_image10.'","'.$uploaded_image11.'","'.$publish.'","'.$send_to_index.'","'.$tag_zh.'","'.$large.'"+1, "'.$zhurl.'")';

  $retvalb = mysql_query( $sqlb, $conn );
    if(! $retvalb ) {  
        die('Could not enter data: ' . mysql_error());
      }



      header("Refresh:0; url=/Admin/ViewAllBlogs");

}


if(isset($_POST['edit_blog_submit'])){

  $blogid = mysql_real_escape_string($_POST['blog_id'],$conn);

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
  $publish = mysql_real_escape_string($_POST['publish'],$conn);
  $send_to_index = mysql_real_escape_string($_POST['send_to_index'],$conn);


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
  $image1 = $_FILES['blog_image1']['name'];
  $image2 = $_FILES['blog_image2']['name'];
  $image3 = $_FILES['blog_image3']['name'];
  $image4 = $_FILES['blog_image4']['name'];
  $image5 = $_FILES['blog_image5']['name'];
  $image6 = $_FILES['blog_image6']['name'];
  $image7 = $_FILES['blog_image7']['name'];
  $image8 = $_FILES['blog_image8']['name'];
  $image9 = $_FILES['blog_image9']['name'];
  $image10 = $_FILES['blog_image10']['name'];
  $image11 = $_FILES['blog_image11']['name'];

$enurl = str_replace(' ', '_', $entext6);
$zhurl = str_replace(' ', '_', $zhtext6);

 $sql="UPDATE think_blog_en SET text1='".$entext1."', text2='".$entext2."', text3='".$entext3."', text4='".$entext4."', text5='".$entext5."', text6='".$entext6."', text7='".$entext7."', text8='".$entext8."', text9='".$entext9."', text10='".$entext10."', text11='".$entext11."', text12='".$entext12."', text13='".$entext13."', text14='".$entext14."', publish='".$publish."', send_to_index='".$send_to_index."', url='".$enurl."' WHERE idx='".$blogid."' LIMIT 1 ";              
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }

$sqlzh="UPDATE think_blog_zh SET text1='".$zhtext1."', text2='".$zhtext2."', text3='".$zhtext3."', text4='".$zhtext4."', text5='".$zhtext5."', text6='".$zhtext6."', text7='".$zhtext7."', text8='".$zhtext8."', text9='".$zhtext9."', text10='".$zhtext10."', text11='".$zhtext11."', text12='".$zhtext12."', text13='".$zhtext13."', text14='".$zhtext14."', publish='".$publish."', send_to_index='".$send_to_index."', url='".$zhurl."' WHERE idx='".$blogid."' LIMIT 1 ";              
                   $retvalzh = mysql_query( $sqlzh, $conn );
                   if(! $retvalzh )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }

    if($image1 != null) {
      $file_tmp1 =$_FILES['blog_image1']['tmp_name'];
      move_uploaded_file($file_tmp1, getcwd()."/../../../../../../uploads/".$image1);
      $filename = "/uploads/".$image1;
      $sql1="UPDATE think_blog_en SET image1='".$filename."' WHERE idx ='".$blogid."'";
      $retval1 = mysql_query( $sql1, $conn );
                   if(! $retval1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
      $sql2="UPDATE think_blog_zh SET image1='".$filename."' WHERE idx ='".$blogid."'";
      $retval2 = mysql_query( $sql2, $conn );
                   if(! $retval2 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }

    if($image2 != null) {
      $file_tmp1 =$_FILES['blog_image2']['tmp_name'];
      move_uploaded_file($file_tmp1, getcwd()."/../../../../../../uploads/".$image2);
      $filename = "/uploads/".$image2;
      $sql1="UPDATE think_blog_en SET image2='".$filename."' WHERE idx ='".$blogid."'";
      $retval1 = mysql_query( $sql1, $conn );
                   if(! $retval1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
      $sql2="UPDATE think_blog_zh SET image2='".$filename."' WHERE idx ='".$blogid."'";
      $retval2 = mysql_query( $sql2, $conn );
                   if(! $retval2 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }

    if($image3 != null) {
      $file_tmp1 =$_FILES['blog_image3']['tmp_name'];
      move_uploaded_file($file_tmp1, getcwd()."/../../../../../../uploads/".$image3);
      $filename = "/uploads/".$image3;
      $sql1="UPDATE think_blog_en SET image3='".$filename."' WHERE idx ='".$blogid."'";
      $retval1 = mysql_query( $sql1, $conn );
                   if(! $retval1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
      $sql3="UPDATE think_blog_zh SET image3='".$filename."' WHERE idx ='".$blogid."'";
      $retval3 = mysql_query( $sql3, $conn );
                   if(! $retval3 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }

    if($image4 != null) {
      $file_tmp1 =$_FILES['blog_image4']['tmp_name'];
      move_uploaded_file($file_tmp1, getcwd()."/../../../../../../uploads/".$image4);
      $filename = "/uploads/".$image4;
      $sql1="UPDATE think_blog_en SET image4='".$filename."' WHERE idx ='".$blogid."'";
      $retval1 = mysql_query( $sql1, $conn );
                   if(! $retval1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
      $sql4="UPDATE think_blog_zh SET image4='".$filename."' WHERE idx ='".$blogid."'";
      $retval4 = mysql_query( $sql4, $conn );
                   if(! $retval4 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }

    if($image5 != null) {
      $file_tmp1 =$_FILES['blog_image5']['tmp_name'];
      move_uploaded_file($file_tmp1, getcwd()."/../../../../../../uploads/".$image5);
      $filename = "/uploads/".$image5;
      $sql1="UPDATE think_blog_en SET image5='".$filename."' WHERE idx ='".$blogid."'";
      $retval1 = mysql_query( $sql1, $conn );
                   if(! $retval1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
      $sql5="UPDATE think_blog_zh SET image5='".$filename."' WHERE idx ='".$blogid."'";
      $retval5 = mysql_query( $sql5, $conn );
                   if(! $retval5 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }

    if($image6 != null) {
      $file_tmp1 =$_FILES['blog_image6']['tmp_name'];
      move_uploaded_file($file_tmp1, getcwd()."/../../../../../../uploads/".$image6);
      $filename = "/uploads/".$image6;
      $sql1="UPDATE think_blog_en SET image6='".$filename."' WHERE idx ='".$blogid."'";
      $retval1 = mysql_query( $sql1, $conn );
                   if(! $retval1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
      $sql6="UPDATE think_blog_zh SET image6='".$filename."' WHERE idx ='".$blogid."'";
      $retval6 = mysql_query( $sql6, $conn );
                   if(! $retval6 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }


    if($image7 != null) {
      $file_tmp1 =$_FILES['blog_image7']['tmp_name'];
      move_uploaded_file($file_tmp1, getcwd()."/../../../../../../uploads/".$image7);
      $filename = "/uploads/".$image7;
      $sql1="UPDATE think_blog_en SET image7='".$filename."' WHERE idx ='".$blogid."'";
      $retval1 = mysql_query( $sql1, $conn );
                   if(! $retval1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
      $sql7="UPDATE think_blog_zh SET image7='".$filename."' WHERE idx ='".$blogid."'";
      $retval7 = mysql_query( $sql7, $conn );
                   if(! $retval7 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }


    if($image8 != null) {
      $file_tmp1 =$_FILES['blog_image8']['tmp_name'];
      move_uploaded_file($file_tmp1, getcwd()."/../../../../../../uploads/".$image8);
      $filename = "/uploads/".$image8;
      $sql1="UPDATE think_blog_en SET image8='".$filename."' WHERE idx ='".$blogid."'";
      $retval1 = mysql_query( $sql1, $conn );
                   if(! $retval1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
      $sql8="UPDATE think_blog_zh SET image8='".$filename."' WHERE idx ='".$blogid."'";
      $retval8 = mysql_query( $sql8, $conn );
                   if(! $retval8 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }


    if($image9 != null) {
      $file_tmp1 =$_FILES['blog_image9']['tmp_name'];
      move_uploaded_file($file_tmp1, getcwd()."/../../../../../../uploads/".$image9);
      $filename = "/uploads/".$image9;
      $sql1="UPDATE think_blog_en SET image9='".$filename."' WHERE idx ='".$blogid."'";
      $retval1 = mysql_query( $sql1, $conn );
                   if(! $retval1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
      $sql9="UPDATE think_blog_zh SET image9='".$filename."' WHERE idx ='".$blogid."'";
      $retval9 = mysql_query( $sql9, $conn );
                   if(! $retval9 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }



    if($image10 != null) {
      $file_tmp1 =$_FILES['blog_image10']['tmp_name'];
      move_uploaded_file($file_tmp1, getcwd()."/../../../../../../uploads/".$image10);
      $filename = "/uploads/".$image10;
      $sql1="UPDATE think_blog_en SET image10='".$filename."' WHERE idx ='".$blogid."'";
      $retval1 = mysql_query( $sql1, $conn );
                   if(! $retval1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
      $sql10="UPDATE think_blog_zh SET image10='".$filename."' WHERE idx ='".$blogid."'";
      $retval10 = mysql_query( $sql10, $conn );
                   if(! $retval10 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }


    if($image11 != null) {
      $file_tmp1 =$_FILES['blog_image11']['tmp_name'];
      move_uploaded_file($file_tmp1, getcwd()."/../../../../../../uploads/".$image11);
      $filename = "/uploads/".$image11;
      $sql1="UPDATE think_blog_en SET image11='".$filename."' WHERE idx ='".$blogid."'";
      $retval1 = mysql_query( $sql1, $conn );
                   if(! $retval1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
      $sql11="UPDATE think_blog_zh SET image11='".$filename."' WHERE idx ='".$blogid."'";
      $retval11 = mysql_query( $sql11, $conn );
                   if(! $retval11 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }


                       header("Refresh:0; url=/Admin/ViewAllBlogs");
}


if(isset($_POST['delete_blog_submit'])){
  $blogid = mysql_real_escape_string($_POST['blog_id'],$conn);


  $strap = 'SELECT sortable_order FROM think_blog_en WHERE idx = '.$blogid.' LIMIT 1';
  $retvalstrapen = mysql_query( $strap, $conn );                 
                             if(! $retvalstrapen )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
  $rowstrapen = mysql_fetch_array($retvalstrapen, MYSQL_ASSOC);
  $returnstrap = $rowstrapen['sortable_order'];



        $sqlin = 'DELETE FROM think_blog_en WHERE idx ="'.$blogid.'" LIMIT 1';
                 $retvalin = mysql_query( $sqlin, $conn );
                   if(! $retvalin )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }

        $sqlout = 'DELETE FROM think_blog_zh WHERE idx ="'.$blogid.'" LIMIT 1';
                 $retvalout = mysql_query( $sqlout, $conn );
                   if(! $retvalout )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
                       


        $sqlreseten1 = "ALTER TABLE think_blog_en DROP idx; ";
        $sqlreseten2 = "ALTER TABLE think_blog_en AUTO_INCREMENT = 1; ";
        $sqlreseten3 = "ALTER TABLE think_blog_en ADD idx int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST; ";

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


        $sqlresetzh1 = "ALTER TABLE think_blog_zh DROP idx; ";
        $sqlresetzh2 = "ALTER TABLE think_blog_zh AUTO_INCREMENT = 1; ";
        $sqlresetzh3 = "ALTER TABLE think_blog_zh ADD idx int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST; ";

        $retvalresetzh1 = mysql_query( $sqlresetzh1, $conn );
        $retvalresetzh2 = mysql_query( $sqlresetzh2, $conn );
        $retvalresetzh3 = mysql_query( $sqlresetzh3, $conn );
                  if(! $retvalresetzh1 )
                       {
                          die('Could not alter chinese data: ' . mysql_error());
                       }

                       if(! $retvalresetzh2 )
                       {
                          die('Could not alter chinese data: ' . mysql_error());
                       }

                       if(! $retvalresetzh3 )
                       {
                          die('Could not alter chinese data: ' . mysql_error());
                       }



                    $sqlen="UPDATE think_blog_en SET sortable_order= sortable_order-1  WHERE sortable_order >'".$returnstrap."' ";              
                       $retvalen = mysql_query( $sqlen, $conn );
                       if(! $retvalen )
                           {
                              die('Could not enter data: ' . mysql_error());
                           }
                    $sqlzh="UPDATE think_blog_zh SET sortable_order= sortable_order-1  WHERE sortable_order >'".$returnstrap."' ";              
                       $retvalzh = mysql_query( $sqlzh, $conn );
                       if(! $retvalzh )
                           {
                              die('Could not enter data: ' . mysql_error());
                           }

                       header("Refresh:0; url=/Admin/ViewAllBlogs");

}
?>