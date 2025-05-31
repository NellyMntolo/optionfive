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

                        $sqlprojecten = 'select * from think_project_en ORDER BY idx DESC';
                        $retvalprojecten = mysql_query( $sqlprojecten, $conn );                 
                             if(! $retvalprojecten )
                             {
                                die('Could not get data: ' . mysql_error());
                             }      

                        $sqlprojectzh = 'select * from think_project_zh ORDER BY idx DESC';
                        $retvalprojectzh = mysql_query( $sqlprojectzh, $conn );                 
                             if(! $retvalprojectzh )
                             {
                                die('Could not get data: ' . mysql_error());
                             }   



                    while($rowprojecten = mysql_fetch_array($retvalprojecten, MYSQL_ASSOC)){
                      $images = $rowprojecten['image1'];
                      $titles = $rowprojecten['text5'];
                      $idx = $rowprojecten['idx'];
                      $sortable_order = $rowprojecten['sortable_order'];
                              
                              $result .= "<div id=\"projectList_$idx\" class=\"project-list\">";
                              $result .= "<form action=\"/Admin/ProjectEdit\" method=\"GET\" enctype=\"multipart/form-data\" accept-charset=\"utf-8\">";
                              $result .= '<img src="'.$rowprojecten['image2'].'"/>';
                              $result .= "<input type=\"hidden\" value=\"$idx\" name=\"project_id\">";
                              $result .= "<input type=\"submit\" value=\"Edit\" class=\"btn-success extra-btn\">";
                              $result .= "</form></div>";
                         }
                         
  

} elseif ($order == 2 ) {
  # code...

                        $sqlprojecten = 'select * from think_project_en ORDER BY sortable_order ASC';
                        $retvalprojecten = mysql_query( $sqlprojecten, $conn );                 
                             if(! $retvalprojecten )
                             {
                                die('Could not get data: ' . mysql_error());
                             }      

                        $sqlprojectzh = 'select * from think_project_zh ORDER BY sortable_order ASC';
                        $retvalprojectzh = mysql_query( $sqlprojectzh, $conn );                 
                             if(! $retvalprojectzh )
                             {
                                die('Could not get data: ' . mysql_error());
                             }   



                    while($rowprojecten = mysql_fetch_array($retvalprojecten, MYSQL_ASSOC)){
                      $images = $rowprojecten['image1'];
                      $titles = $rowprojecten['text5'];
                      $idx = $rowprojecten['idx'];
                      $sortable_order = $rowprojecten['sortable_order'];
                              
                              $result .= "<div id=\"projectList_$idx\" class=\"project-list\">";
                              $result .= "<form action=\"/Admin/ProjectEdit\" method=\"GET\" enctype=\"multipart/form-data\" accept-charset=\"utf-8\">";
                              $result .= '<img src="'.$rowprojecten['image2'].'"/>';
                              $result .= "<input type=\"hidden\" value=\"$idx\" name=\"project_id\">";
                              $result .= "<input type=\"submit\" value=\"Edit\" class=\"btn-success extra-btn\">";
                              $result .= "</form></div>";
                         }
                         
 
}
echo $result;

?>