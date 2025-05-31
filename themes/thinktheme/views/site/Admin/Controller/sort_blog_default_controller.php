<?php
include '../Model/dbconfig.php';
mysql_set_charset("utf8");

/*
$array = $_POST['blogList'];

  $x=1;
  foreach ($array as $key => $value) {
    # code...
    $query = "UPDATE think_blog_en SET sortable_order = ".$x." WHERE idx = ". $value;
    mysql_query($query) or die (mysql_error());
    $queryzh = "UPDATE think_blog_zh SET sortable_order = ".$x." WHERE idx = ". $value;
    mysql_query($queryzh) or die (mysql_error());

    $x ++;
  }
  */


/*-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

$order = mysql_real_escape_string($_POST['selected_category'],$conn);
$result = '';

if($order == 1 ){

                        $sqlblogen = 'select * from think_blog_en ORDER BY idx DESC';
                        $retvalblogen = mysql_query( $sqlblogen, $conn );                 
                             if(! $retvalblogen )
                             {
                                die('Could not get data: ' . mysql_error());
                             }      

                        $sqlblogzh = 'select * from think_blog_zh ORDER BY idx DESC';
                        $retvalblogzh = mysql_query( $sqlblogzh, $conn );                 
                             if(! $retvalblogzh )
                             {
                                die('Could not get data: ' . mysql_error());
                             }   



                    while($rowblogen = mysql_fetch_array($retvalblogen, MYSQL_ASSOC)){
                      $images = $rowblogen['image1'];
                      $titles = $rowblogen['text5'];
                      $idx = $rowblogen['idx'];
                      $sortable_order = $rowblogen['sortable_order'];
                              
                              $result .= "<div id=\"blogList_$idx\" class=\"project-list\">";
                              $result .= "<form action=\"/Admin/blogEdit\" method=\"GET\" enctype=\"multipart/form-data\" accept-charset=\"utf-8\">";
                              $result .= '<img src="'.$rowblogen['image1'].'"/>';
                              $result .= "<input type=\"hidden\" value=\"$idx\" name=\"blog_id\">";
                              $result .= "<input type=\"submit\" value=\"Edit\" class=\"btn-success extra-btn\">";
                              $result .= "</form></div>";
                         }
                         
  

} elseif ($order == 2 ) {
  # code...

                        $sqlblogen = 'select * from think_blog_en ORDER BY sortable_order ASC';
                        $retvalblogen = mysql_query( $sqlblogen, $conn );                 
                             if(! $retvalblogen )
                             {
                                die('Could not get data: ' . mysql_error());
                             }      

                        $sqlblogzh = 'select * from think_blog_zh ORDER BY sortable_order ASC';
                        $retvalblogzh = mysql_query( $sqlblogzh, $conn );                 
                             if(! $retvalblogzh )
                             {
                                die('Could not get data: ' . mysql_error());
                             }   



                    while($rowblogen = mysql_fetch_array($retvalblogen, MYSQL_ASSOC)){
                      $images = $rowblogen['image1'];
                      $titles = $rowblogen['text5'];
                      $idx = $rowblogen['idx'];
                      $sortable_order = $rowblogen['sortable_order'];
                              
                              $result .= "<div id=\"blogList_$idx\" class=\"project-list\">";
                              $result .= "<form action=\"/Admin/blogEdit\" method=\"GET\" enctype=\"multipart/form-data\" accept-charset=\"utf-8\">";
                              $result .= '<img src="'.$rowblogen['image1'].'"/>';
                              $result .= "<input type=\"hidden\" value=\"$idx\" name=\"blog_id\">";
                              $result .= "<input type=\"submit\" value=\"Edit\" class=\"btn-success extra-btn\">";
                              $result .= "</form></div>";
                         }
                         
 
}
echo $result;

?>