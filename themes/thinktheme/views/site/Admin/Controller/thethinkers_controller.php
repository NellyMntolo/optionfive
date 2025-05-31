<?php
include '../Model/dbconfig.php';
mysql_set_charset("utf8");



if(isset($_POST['add_thinker'])){

  $zhtext1 = mysql_real_escape_string($_POST['content_zhtext1'],$conn);
  $zhtext2 = mysql_real_escape_string($_POST['content_zhtext2'],$conn);
  $zhtext3 = mysql_real_escape_string($_POST['content_zhtext3'],$conn);

  $entext1 = mysql_real_escape_string($_POST['content_entext1'],$conn);
  $entext2 = mysql_real_escape_string($_POST['content_entext2'],$conn);
  $entext3 = mysql_real_escape_string($_POST['content_entext3'],$conn);

  $image1 = $_FILES['thethinkers_image1']['name'];
  $image2 = $_FILES['thethinkers_image2']['name'];
  $uploaded_image1 = '';
  $uploaded_image2 = '';

  if($image1 != null) {
    $file_tmp =$_FILES['thethinkers_image1']['tmp_name'];
      move_uploaded_file($file_tmp, getcwd()."/../../../../../../uploads/".$image1);
    $uploaded_image1 = "/uploads/".$image1;
  }

  if($image2 != null) {
    $file_tmp =$_FILES['thethinkers_image2']['tmp_name'];
      move_uploaded_file($file_tmp, getcwd()."/../../../../../../uploads/".$image2);
    $uploaded_image2 = "/uploads/".$image2;
  }


 $sqla = 'INSERT INTO think_thethinkers_en (text1, text2, text3, image1, image2) VALUES ( "'.$entext1.'", "'.$entext2.'", "'.$entext3.'","'.$uploaded_image1.'","'.$uploaded_image2.'")';            
                   $retvala = mysql_query( $sqla, $conn );
                   if(! $retvala )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }

 $sqlb = 'INSERT INTO think_thethinkers_zh (text1, text2, text3, image1, image2) VALUES ( "'.$zhtext1.'", "'.$zhtext2.'", "'.$zhtext3.'","'.$uploaded_image1.'","'.$uploaded_image2.'")';            
                   $retvalb = mysql_query( $sqlb, $conn );
                   if(! $retvalb )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }

                       header("Refresh:0; url=/Admin/ViewAllThinkers");
}



if(isset($_POST['edit_thinker'])){

  $thinkerid = mysql_real_escape_string($_POST['thinker_id'],$conn);

  $zhtext1 = mysql_real_escape_string($_POST['content_zhtext1'],$conn);
  $zhtext2 = mysql_real_escape_string($_POST['content_zhtext2'],$conn);
  $zhtext3 = mysql_real_escape_string($_POST['content_zhtext3'],$conn);

  $entext1 = mysql_real_escape_string($_POST['content_entext1'],$conn);
  $entext2 = mysql_real_escape_string($_POST['content_entext2'],$conn);
  $entext3 = mysql_real_escape_string($_POST['content_entext3'],$conn);

  $image1 = $_FILES['thethinkers_image1']['name'];
  $image2 = $_FILES['thethinkers_image2']['name'];



 $sql="UPDATE think_thethinkers_en SET text1='".$entext1."', text2='".$entext2."', text3='".$entext3."' WHERE idx='".$thinkerid."' ";              
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }

 $sqlzh="UPDATE think_thethinkers_zh SET text1='".$zhtext1."', text2='".$zhtext2."', text3='".$zhtext3."' WHERE idx='".$thinkerid."' ";              
                   $retvalzh = mysql_query( $sqlzh, $conn );
                   if(! $retvalzh )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }

    if($image1 != null) {
      $file_tmp1 =$_FILES['thethinkers_image1']['tmp_name'];
      move_uploaded_file($file_tmp1, getcwd()."/../../../../../../uploads/".$image1);
      $filename = "/uploads/".$image1;
      $sql1="UPDATE think_thethinkers_en SET image1='".$filename."' WHERE idx ='".$thinkerid."'";
      $retval1 = mysql_query( $sql1, $conn );
                   if(! $retval1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
      $sql2="UPDATE think_thethinkers_zh SET image1='".$filename."' WHERE idx ='".$thinkerid."'";
      $retval2 = mysql_query( $sql2, $conn );
                   if(! $retval2 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }


    if($image2 != null) {
      $file_tmp2 =$_FILES['thethinkers_image2']['tmp_name'];
      move_uploaded_file($file_tmp2, getcwd()."/../../../../../../uploads/".$image2);
      $filename = "/uploads/".$image2;
      $sql1="UPDATE think_thethinkers_en SET image2='".$filename."' WHERE idx ='".$thinkerid."'";
      $retval1 = mysql_query( $sql1, $conn );
                   if(! $retval1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
      $sql2="UPDATE think_thethinkers_zh SET image2='".$filename."' WHERE idx ='".$thinkerid."'";
      $retval2 = mysql_query( $sql2, $conn );
                   if(! $retval2 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }

                       header("Refresh:0; url=/Admin/ViewAllThinkers");
}


if(isset($_POST['delete_thinker'])){
  $thethinkersid = mysql_real_escape_string($_POST['thinker_id'],$conn);

        $sqlin = 'DELETE FROM think_thethinkers_en WHERE idx ="'.$thethinkersid.'" LIMIT 1';
                 $retvalin = mysql_query( $sqlin, $conn );
                   if(! $retvalin )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }

        $sqlout = 'DELETE FROM think_thethinkers_zh WHERE idx ="'.$thethinkersid.'" LIMIT 1';
                 $retvalout = mysql_query( $sqlout, $conn );
                   if(! $retvalout )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
                       


        $sqlreseten1 = "ALTER TABLE think_thethinkers_en DROP idx; ";
        $sqlreseten2 = "ALTER TABLE think_thethinkers_en AUTO_INCREMENT = 1; ";
        $sqlreseten3 = "ALTER TABLE think_thethinkers_en ADD idx int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST; ";

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


        $sqlresetzh1 = "ALTER TABLE think_thethinkers_zh DROP idx; ";
        $sqlresetzh2 = "ALTER TABLE think_thethinkers_zh AUTO_INCREMENT = 1; ";
        $sqlresetzh3 = "ALTER TABLE think_thethinkers_zh ADD idx int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST; ";

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

                       header("Refresh:0; url=/Admin/ViewAllThinkers");

}


?>