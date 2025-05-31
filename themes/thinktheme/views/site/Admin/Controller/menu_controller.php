<?php
include '../Model/dbconfig.php';
mysql_set_charset("utf8");


if(isset($_POST['page_submit'])){


  $zhtext1 = mysql_real_escape_string($_POST['content_zhtext1'],$conn);
  $zhtext2 = mysql_real_escape_string($_POST['content_zhtext2'],$conn);
  $zhtext3 = mysql_real_escape_string($_POST['content_zhtext3'],$conn);
  $zhtext4 = mysql_real_escape_string($_POST['content_zhtext4'],$conn);
  $zhtext5 = mysql_real_escape_string($_POST['content_zhtext5'],$conn);

  $entext1 = mysql_real_escape_string($_POST['content_entext1'],$conn);
  $entext2 = mysql_real_escape_string($_POST['content_entext2'],$conn);
  $entext3 = mysql_real_escape_string($_POST['content_entext3'],$conn);
  $entext4 = mysql_real_escape_string($_POST['content_entext4'],$conn);
  $entext5 = mysql_real_escape_string($_POST['content_entext5'],$conn);


 $sql="UPDATE think_menu_en SET text1='".$entext1."', text2='".$entext2."', text3='".$entext3."', text4='".$entext4."', text5='".$entext5."' ";              
                   $retval = mysql_query( $sql, $conn );
                   if(! $retval )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }

 $sqlzh="UPDATE think_menu_zh SET text1='".$zhtext1."', text2='".$zhtext2."', text3='".$zhtext3."', text4='".$zhtext4."', text5='".$zhtext5."' ";              
                   $retvalzh = mysql_query( $sqlzh, $conn );
                   if(! $retvalzh )
                       {
                          die('Could not enter data: ' . mysql_error());
                       }



                       header("Refresh:0; url=/Admin/Menu");
}


?>