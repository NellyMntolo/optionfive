<?php
include '../Model/dbconfig.php';
mysql_set_charset("utf8");

//$category = mysql_real_escape_string($_POST['category'],$conn);

/*
$someArray=array('1','2','3','4','5','6','7'); // size 7
foreach($someArray as $value){ 
    echo $value;    
}
*/

$x=1;
/*
//$category = $_POST['category'];
foreach ($_POST['category'] as $category )
{
$yes = 'yes';
                        //We Create Latest Projects
                        //$sqlwecreate_en = 'select * from think_project_en  WHERE publish = "'.$yes.'" AND category1 = "'.$category.'" OR category2 = "'.$category.'" ORDER BY idx DESC';
                        $sqlwecreate_en = 'select * from think_project_en  WHERE category1 = "'.$category.'" OR category2 = "'.$category.'" ORDER BY idx DESC';
                        $retval_wecreate_en = mysql_query( $sqlwecreate_en, $conn );                 
                             if(! $retval_wecreate_en )
                             {
                                die('Could not get data: ' . mysql_error());
                             }


while($row_wecreate_en = mysql_fetch_array($retval_wecreate_en, MYSQL_ASSOC)){
    $idx = $row_wecreate_en['idx'];
    $text5 = $row_wecreate_en['text5'];
    $text6 = $row_wecreate_en['text6'];
    $image = $row_wecreate_en['image2']; 

            echo '<div class="thnk-prod-grid">
                <form class="thnk-project" action="/we_create/projects/">
                 <img src="'.$image.'"/>
                 <button type="submit" value=" " class="thnk-project-info">
                        <div class="thnk-project-info-in">
                         <h2>'.$text5.'</h2>
                            <div class="thnk-project-dots">
                                <div class="thnk-project-dot"></div>
                                <div class="thnk-project-dot"></div>
                                <div class="thnk-project-dot"></div>
                            </div>
                            <p>'.$text6.'</p>
                        </div>
                </button>
                <input type="hidden" value="'.$idx.'" name="project_id">
                </form>
            </div>'; 

} 

//echo $category;



}
*/

$result = '';
//if(isset($_POST['selected_category'])){ 
  $categoryname = mysql_real_escape_string($_POST['selected_category'],$conn);
  

  //$sql_catag_name = 'SELECT text2 FROM think_category WHERE idx = "'.$categoryname.'" LIMIT 1'; 
  $sql_catag_name = 'select * from think_project_zh  WHERE category1 = "'.$categoryname.'" OR category2 = "'.$categoryname.'" OR category3 = "'.$categoryname.'" OR category4 = "'.$categoryname.'" OR category5 = "'.$categoryname.'" OR category6 = "'.$categoryname.'" OR category7 = "'.$categoryname.'" OR category8 = "'.$categoryname.'" OR category9 = "'.$categoryname.'" OR category10 = "'.$categoryname.'" ORDER BY idx DESC';   
     $retval_catag_name = mysql_query( $sql_catag_name, $conn );     
     if(! $retval_catag_name )
     {
        die('Could not get data: ' . mysql_error());
     }

     while($rowcategory = mysql_fetch_array($retval_catag_name, MYSQL_ASSOC)){
        //$category1 = $rowcategory['category1'];       
        //$result .= $category1;

        //$idx = $rowcategory['idx'];
        $text5 = $rowcategory['text5'];
        $text6 = $rowcategory['text6'];
        $image = $rowcategory['image2']; 
        $idx = $rowcategory['url'];

        $result .= '<div class="thnk-prod-grid">
                <a class="thnk-project" href="/we_create/projects/'.$idx.'" >
                <button type="submit" value=" " >
                 <img src="'.$image.'"/>
                 <div class="thnk-project-info">
                        <div class="thnk-project-info-in">
                         <h2>'.$text5.'</h2>
                            <div class="thnk-project-dots">
                                <div class="thnk-project-dot"></div>
                                <div class="thnk-project-dot"></div>
                                <div class="thnk-project-dot"></div>
                            </div>
                            <p>'.$text6.'</p>
                        </div>
                    </div>                
                <input type="hidden" value="'.$idx.'" name="project_id">
                </button>
                </a>
            </div>'; 
                
     }
     
//}

echo $result;



/*
foreach ($_POST['category'] as $category )
{
$yes = 'yes';
                        //We Create Latest Projects
                        //$sqlwecreate_en = 'select * from think_project_en  WHERE publish = "'.$yes.'" AND category1 = "'.$category.'" OR category2 = "'.$category.'" ORDER BY idx DESC';
                        $sqlwecreate_en = 'select * from think_project_en  WHERE category1 = "'.$category.'" OR category2 = "'.$category.'" ORDER BY idx DESC';
                        $retval_wecreate_en = mysql_query( $sqlwecreate_en, $conn );                 
                             if(! $retval_wecreate_en )
                             {
                                die('Could not get data: ' . mysql_error());
                             }


while($row_wecreate_en = mysql_fetch_array($retval_wecreate_en, MYSQL_ASSOC)){
    $idx = $row_wecreate_en['idx'];
    $text5 = $row_wecreate_en['text5'];
    $text6 = $row_wecreate_en['text6'];
    $image = $row_wecreate_en['image2']; 

            echo '<div class="thnk-prod-grid">
                <form class="thnk-project" action="/we_create/projects/">
                 <img src="'.$image.'"/>
                 <button type="submit" value=" " class="thnk-project-info">
                        <div class="thnk-project-info-in">
                         <h2>'.$text5.'</h2>
                            <div class="thnk-project-dots">
                                <div class="thnk-project-dot"></div>
                                <div class="thnk-project-dot"></div>
                                <div class="thnk-project-dot"></div>
                            </div>
                            <p>'.$text6.'</p>
                        </div>
                </button>
                <input type="hidden" value="'.$idx.'" name="project_id">
                </form>
            </div>';                   
} 

echo $category;



}

                        
*/



?>