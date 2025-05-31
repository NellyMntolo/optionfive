<?php
include '../Model/dbconfig.php';
mysql_set_charset("utf8");

if(isset($_POST['create_project_submit'])){

  $max = 'SELECT sortable_order FROM think_project_en ORDER BY sortable_order DESC';
  $retvalmaxen = mysql_query( $max, $conn );                 
                             if(! $retvalmaxen )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
  $rowmaxen = mysql_fetch_array($retvalmaxen, MYSQL_ASSOC);
  $large = $rowmaxen['sortable_order'];
  //echo $large;

  $zhtext1 = mysql_real_escape_string($_POST['general_zhtext1'],$conn);
  $zhtext2 = mysql_real_escape_string($_POST['general_zhtext2'],$conn);
  $publish = mysql_real_escape_string($_POST['publish'],$conn);
  $send_to_index = mysql_real_escape_string($_POST['send_to_index'],$conn);

  $entext1 = mysql_real_escape_string($_POST['general_entext1'],$conn);
  $entext2 = mysql_real_escape_string($_POST['general_entext2'],$conn);
  $image1 = $_FILES['project_image1']['name'];
  $image2 = $_FILES['project_image2']['name'];

  $uploaded_image1 = '';
  $uploaded_image2 = '';

  if($image1 != null) {
    $file_tmp =$_FILES['project_image1']['tmp_name'];
      move_uploaded_file($file_tmp, getcwd()."/../../../../../../uploads/".$image1);
    $uploaded_image1 = "/uploads/".$image1;
  }

  if($image2 != null) {
    $file_tmp =$_FILES['project_image2']['tmp_name'];
      move_uploaded_file($file_tmp, getcwd()."/../../../../../../uploads/".$image2);
    $uploaded_image2 = "/uploads/".$image2;
  }


$enurl = str_replace(' ', '_', $entext1);
$zhurl = str_replace(' ', '_', $zhtext1);
  $sqla = 'INSERT INTO think_project_en (text1, text2, image1, image2, publish, send_to_index, sortable_order, url) VALUES ( "'.$entext1.'", "'.$entext2.'","'.$uploaded_image1.'","'.$uploaded_image2.'","'.$publish.'","'.$send_to_index.'","'.$large.'"+1, "'.$enurl.'")';

  $retvala = mysql_query( $sqla, $conn );
    if(! $retvala ) {  
        die('Could not enter data: ' . mysql_error());
      }

  $sqlb = 'INSERT INTO think_project_zh (text1, text2, image1, image2, publish, send_to_index, sortable_order, url) VALUES ( "'.$zhtext1.'", "'.$zhtext2.'","'.$uploaded_image1.'","'.$uploaded_image2.'","'.$publish.'","'.$send_to_index.'","'.$large.'"+1, "'.$zhurl.'")';

  $retvalb = mysql_query( $sqlb, $conn );
    if(! $retvalb ) {  
        die('Could not enter data: ' . mysql_error());
      }



      header("Refresh:0; url=/Admin/ViewAllProjects");

}


if(isset($_POST['edit_project_submit'])){

  $projectid = mysql_real_escape_string($_POST['project_id'],$conn);

	$zhtext1 = mysql_real_escape_string($_POST['general_zhtext1'],$conn);
  $zhtext2 = mysql_real_escape_string($_POST['general_zhtext2'],$conn);
  $publish = mysql_real_escape_string($_POST['publish'],$conn);
  $send_to_index = mysql_real_escape_string($_POST['send_to_index'],$conn);


	$entext1 = mysql_real_escape_string($_POST['general_entext1'],$conn);
  $entext2 = mysql_real_escape_string($_POST['general_entext2'],$conn);
	$image1 = $_FILES['project_image1']['name'];
	$image2 = $_FILES['project_image2']['name'];

$enurl = str_replace(' ', '_', $entext1);
$zhurl = str_replace(' ', '_', $zhtext1);

 $sql="UPDATE think_project_en SET text1='".$entext1."', text2='".$entext2."', publish='".$publish."', send_to_index='".$send_to_index."', url='".$enurl."'  WHERE idx='".$projectid."' LIMIT 1 ";              
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }

 $sqlzh="UPDATE think_project_zh SET text1='".$zhtext1."', text2='".$zhtext2."', publish='".$publish."', send_to_index='".$send_to_index."', url='".$zhurl."' WHERE idx='".$projectid."' LIMIT 1 ";              
                   $retvalzh = mysql_query( $sqlzh, $conn );
                   if(! $retvalzh )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }

    if($image1 != null) {
      $file_tmp1 =$_FILES['project_image1']['tmp_name'];
      move_uploaded_file($file_tmp1, getcwd()."/../../../../../../uploads/".$image1);
      $filename = "/uploads/".$image1;
      $sql1="UPDATE think_project_en SET image1='".$filename."' WHERE idx ='".$projectid."'";
      $retval1 = mysql_query( $sql1, $conn );
                   if(! $retval1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
      $sql2="UPDATE think_project_zh SET image1='".$filename."' WHERE idx ='".$projectid."'";
      $retval2 = mysql_query( $sql2, $conn );
                   if(! $retval2 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }

    if($image2 != null) {
      $file_tmp1 =$_FILES['project_image2']['tmp_name'];
      move_uploaded_file($file_tmp1, getcwd()."/../../../../../../uploads/".$image2);
      $filename = "/uploads/".$image2;
      $sql1="UPDATE think_project_en SET image2='".$filename."' WHERE idx ='".$projectid."'";
      $retval1 = mysql_query( $sql1, $conn );
                   if(! $retval1 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
      $sql2="UPDATE think_project_zh SET image2='".$filename."' WHERE idx ='".$projectid."'";
      $retval2 = mysql_query( $sql2, $conn );
                   if(! $retval2 )
                       {
                          die('Could not enter image: ' . mysql_error());
                       }
    }


                       header("Refresh:0; url=/Admin/ViewAllProjects");
}


if(isset($_POST['delete_project_submit'])){
  $projectid = mysql_real_escape_string($_POST['project_id'],$conn);

  $strap = 'SELECT sortable_order FROM think_project_en WHERE idx = '.$projectid.' LIMIT 1';
  $retvalstrapen = mysql_query( $strap, $conn );                 
                             if(! $retvalstrapen )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
  $rowstrapen = mysql_fetch_array($retvalstrapen, MYSQL_ASSOC);
  $returnstrap = $rowstrapen['sortable_order'];



        $sqlin = 'DELETE FROM think_project_en WHERE idx ="'.$projectid.'" LIMIT 1';
                 $retvalin = mysql_query( $sqlin, $conn );
                   if(! $retvalin )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }

        $sqlout = 'DELETE FROM think_project_zh WHERE idx ="'.$projectid.'" LIMIT 1';
                 $retvalout = mysql_query( $sqlout, $conn );
                   if(! $retvalout )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }
                       


        $sqlreseten1 = "ALTER TABLE think_project_en DROP idx; ";
        $sqlreseten2 = "ALTER TABLE think_project_en AUTO_INCREMENT = 1; ";
        $sqlreseten3 = "ALTER TABLE think_project_en ADD idx int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST; ";

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


        $sqlresetzh1 = "ALTER TABLE think_project_zh DROP idx; ";
        $sqlresetzh2 = "ALTER TABLE think_project_zh AUTO_INCREMENT = 1; ";
        $sqlresetzh3 = "ALTER TABLE think_project_zh ADD idx int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST; ";

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




                    $sqlen="UPDATE think_project_en SET sortable_order= sortable_order-1  WHERE sortable_order >'".$returnstrap."' ";              
		                   $retvalen = mysql_query( $sqlen, $conn );
		                   if(! $retvalen )
		                       {
		                          die('Could not enter data: ' . mysql_error());
		                       }
		                $sqlzh="UPDATE think_project_zh SET sortable_order= sortable_order-1  WHERE sortable_order >'".$returnstrap."' ";              
		                   $retvalzh = mysql_query( $sqlzh, $conn );
		                   if(! $retvalzh )
		                       {
		                          die('Could not enter data: ' . mysql_error());
		                       }
                       header("Refresh:0; url=/Admin/ViewAllProjects");

}
?>