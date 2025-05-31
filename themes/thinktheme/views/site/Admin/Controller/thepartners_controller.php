<?php
include '../Model/dbconfig.php';
mysql_set_charset("utf8");



if(isset($_POST['add_partner'])){

  $zhtext1 = mysql_real_escape_string($_POST['content_zhtext1'],$conn);

  $entext1 = mysql_real_escape_string($_POST['content_entext1'],$conn);

  $image1 = $_FILES['partners_image1']['name'];
  $uploaded_image1 = '';

  if($image1 != null) {
    $file_tmp =$_FILES['partners_image1']['tmp_name'];
      move_uploaded_file($file_tmp, getcwd()."/../../../../../../uploads/".$image1);
    $uploaded_image1 = "/uploads/".$image1;
  }


 $sqla = 'INSERT INTO think_partners_en (text1, image1) VALUES ( "'.$entext1.'","'.$uploaded_image1.'")';            
                   $retvala = mysql_query( $sqla, $conn );
                   if(! $retvala )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }

 $sqlb = 'INSERT INTO think_partners_zh (text1, image1) VALUES ( "'.$zhtext1.'","'.$uploaded_image1.'")';            
                   $retvalb = mysql_query( $sqlb, $conn );
                   if(! $retvalb )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }

                       header("Refresh:0; url=/Admin/ViewAllPartners");
}



if(isset($_POST['edit_partner'])){

  $partnerid = mysql_real_escape_string($_POST['partner_id'],$conn);

  $zhtext1 = mysql_real_escape_string($_POST['content_zhtext1'],$conn);

  $entext1 = mysql_real_escape_string($_POST['content_entext1'],$conn);

  $image1 = $_FILES['partners_image1']['name'];



 $sql="UPDATE think_partners_en SET text1='".$entext1."' WHERE idx='".$partnerid."' ";              
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }

 $sqlzh="UPDATE think_partners_zh SET text1='".$zhtext1."' WHERE idx='".$partnerid."' ";              
                   $retvalzh = mysql_query( $sqlzh, $conn );
                   if(! $retvalzh )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }

    if($image1 != null) {
      $file_tmp1 =$_FILES['partners_image1']['tmp_name'];
      move_uploaded_file($file_tmp1, getcwd()."/../../../../../../uploads/".$image1);
      $filename = "/uploads/".$image1;
      $sql1="UPDATE think_partners_en SET image1='".$filename."' WHERE idx ='".$partnerid."'";
      $retval1 = mysql_query( $sql1, $conn );
                   if(! $retval1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
      $sql2="UPDATE think_partners_zh SET image1='".$filename."' WHERE idx ='".$partnerid."'";
      $retval2 = mysql_query( $sql2, $conn );
                   if(! $retval2 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }

                       header("Refresh:0; url=/Admin/ViewAllPartners");
}


if(isset($_POST['delete_partner'])){
  $partnersid = mysql_real_escape_string($_POST['partner_id'],$conn);

        $sqlin = 'DELETE FROM think_partners_en WHERE idx ="'.$partnersid.'" LIMIT 1';
                 $retvalin = mysql_query( $sqlin, $conn );
                   if(! $retvalin )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }

        $sqlout = 'DELETE FROM think_partners_zh WHERE idx ="'.$partnersid.'" LIMIT 1';
                 $retvalout = mysql_query( $sqlout, $conn );
                   if(! $retvalout )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
                       


        $sqlreseten1 = "ALTER TABLE think_partners_en DROP idx; ";
        $sqlreseten2 = "ALTER TABLE think_partners_en AUTO_INCREMENT = 1; ";
        $sqlreseten3 = "ALTER TABLE think_partners_en ADD idx int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST; ";

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


        $sqlresetzh1 = "ALTER TABLE think_partners_zh DROP idx; ";
        $sqlresetzh2 = "ALTER TABLE think_partners_zh AUTO_INCREMENT = 1; ";
        $sqlresetzh3 = "ALTER TABLE think_partners_zh ADD idx int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST; ";

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

                       header("Refresh:0; url=/Admin/ViewAllPartners");

}


?>