
<?php
error_reporting(0);
/*
------------------
Language: English
Author: @Nelly Mntolo
------------------
*/

include 'Model/mainDAO.php';
include '../Model/mainDAO.php';
include '../Model/weareDAO.php';
include '../Model/wethinkDAO.php';
include 'Model/projectDAO.php';
include '../Model/projectDAO.php';
include 'Model/footerDAO.php';
include '../Model/footerDAO.php';
include 'Model/menuDAO.php';
include '../Model/menuDAO.php';
include '../Model/mainprojectDAO.php';
include '../Model/contactDAO.php';
include '../Model/thinkerDAO.php';
include '../Model/partnerDAO.php';
include 'Model/blogDAO.php';
include '../Model/blogDAO.php';
include '../Model/categoryDAO.php';
include '../Model/tagDAO.php';
include '../Model/productsDAO.php';
include '../Model/retailersDAO.php';

$lang = array();

//Global
$lang['logo'] = '';

//Menu
$lang['menu_text1'] = $menu_entext1;
$lang['menu_text2'] = $menu_entext2;
$lang['menu_text3'] = $menu_entext3;
$lang['menu_text4'] = $menu_entext4;
$lang['menu_text5'] = $menu_entext5;


//Contact
$lang['contact_text1'] = $contact_entext1;
$lang['contact_text2'] = $contact_entext2;
$lang['contact_text3'] = $contact_entext3;
$lang['contact_text4'] = $contact_entext4;
$lang['contact_text5'] = $contact_entext5;
$lang['contact_text6'] = $contact_entext6;
$lang['contact_text7'] = $contact_entext7;
$lang['contact_text8'] = $contact_entext8;
$lang['contact_text9'] = $contact_entext9;
$lang['contact_text10'] = $contact_entext10;
$lang['contact_text11'] = $contact_entext11;
$lang['contact_image1'] = $contact_enimage1;
$lang['contact_text12'] = 'Please fill in the details of the questionaire.';


//Retailers
$lang['retailers_text1'] = $retailers_entext1;
$lang['retailers_text2'] = $retailers_entext2;
$lang['retailers_text3'] = $retailers_entext3;
$lang['retailers_text4'] = $retailers_entext4;
$lang['retailers_text5'] = $retailers_entext5;
$lang['retailers_text6'] = $retailers_entext6;
$lang['retailers_text7'] = $retailers_entext7;
$lang['retailers_image1'] = $retailers_enimage1;
$lang['retailers_image2'] = $retailers_enimage2;
$lang['retailers_image3'] = $retailers_enimage3;

//Main
$lang['index_text1'] = $index_entext1;
$lang['index_text2'] = $index_entext2;
$lang['index_text3'] = $index_entext3;
$lang['index_text4'] = $index_entext4;
$lang['index_text5'] = $index_entext5;
$lang['index_text6'] = $index_entext6;
$lang['index_text7'] = $index_entext7;
$lang['index_text8'] = $index_entext8;
$lang['index_text9'] = $index_entext9;
$index_textparagraph1 = trim($index_entext10);
$index_trimmedtext1 = nl2br($index_textparagraph1); 
$lang['index_text10'] = $index_trimmedtext1;  
//$lang['index_text10'] = $index_entext10;
$lang['index_text11'] = $index_entext11;
$lang['index_text12'] = $index_entext12;
$lang['index_text13'] = $index_entext13;
$lang['index_text14'] = $index_entext14;
$lang['index_text15'] = $index_entext15;
$lang['index_text16'] = $index_entext16;
$lang['index_text17'] = $index_entext17;
$lang['index_text18'] = $index_entext18;
$lang['index_text19'] = $index_entext19;
$lang['index_text20'] = $index_entext20;
$lang['index_image1'] = $index_enimage1;
$lang['index_image2'] = $index_enimage2;
$lang['index_image3'] = $index_enimage3;
$main_projects = '';
while($row_mainprojecten = mysql_fetch_array($retval_mainprojecten, MYSQL_ASSOC)){
	$idx = $row_mainprojecten['sortable_order'];
    $comment = $row_mainprojecten['text4'];
	$title = $row_mainprojecten['text5'];
	$image = $row_mainprojecten['image1']; 
    $url = $row_mainprojecten['url']; 

            $main_projects .= '<div class="swiper-slide" data-hash="slide1">

			                    	<div class="swiper-slide-btn">
			                        	<a href="/we_create/projects/'.$url.'" class="animsition-link"><button type="submit" class="btn2"><span>how to start</span></button><input type="hidden" value="'.$url.'" name="project_id"></a>
			                        </div>
			                        <img src="'.$image.'"/>
			                        <div class="swiper-info">
			                        	<h2>'.$title.'</h2>
			                            <p><span>'.$comment.'</span></p>
			                        </div>
			                        
									</div>';
			                   
}
$lang['index_projects'] = $main_projects;
$main_indexblogs = '';
while($row_indexblogs_en = mysql_fetch_array($retval_indexblogs_en, MYSQL_ASSOC)){
	$idx = $row_indexblogs_en['idx'];
	$text5 = $row_indexblogs_en['text5'];
	$text6 = $row_indexblogs_en['text6'];
    $text7 = $row_indexblogs_en['text7'];
	$image = $row_indexblogs_en['image2']; 
    $url = $row_indexblogs_en['url'];
	
			$main_indexblogs .= '<div class="thnk-blog-in" style="position:relative;">
                                <a href="/we_think/Articles/'.$url.'" class="animsition-link">
                                    <div class="think-blog-img-cont">
                                        <div class="thnk-blog-img"><img src="'.$image.'"/></div>
                                    </div>
                                    <div class="thnk-blog-text">
                                        <div class="thnk-date">
                                            <p>'.$text5.'</p>
                                        </div>
                                        <h2 class="alt">'.$text6.'</h2>
                                    </div>
                                    <div class="thnk-blog-para hidden-xs">
                                        <div class="thnk-blog-para-in">
                                            <p>'.$text7.'</p>
                                            <p>(Read More)</p>
                                        </div>
                                    </div>
                                    <input type="hidden" value="'.$idx.'" name="blog_id">
                                    <button type="submit" value=" " class="projSubmit-next" onclick="window.location=\'/we_think/Articles/'.$url.'\';">
                                </a>
                            </div> ';            

                  
}
$lang['indexblogs_projects'] = $main_indexblogs;

//WeAre
$lang['weare_text1'] = $weare_entext1;
$lang['weare_text2'] = $weare_entext2;
$lang['weare_text3'] = $weare_entext3;
$lang['weare_text4'] = $weare_entext4;
$lang['weare_text5'] = $weare_entext5;
$weare_textparagraph6 = trim($weare_entext6);
$weare_trimmedtext6 = nl2br($weare_textparagraph6); 
$lang['weare_text6'] = $weare_trimmedtext6; 


$lang['weare_text7'] = $weare_entext7;
$weare_textparagraph1 = trim($weare_entext8);
$weare_trimmedtext1 = nl2br($weare_textparagraph1); 
$lang['weare_text8'] = $weare_trimmedtext1;  
//$lang['weare_text8'] = $weare_entext8;
$lang['weare_text9'] = $weare_entext9;
$weare_textparagraph2 = trim($weare_entext10);
$weare_trimmedtext2 = nl2br($weare_textparagraph2); 
$lang['weare_text10'] = $weare_trimmedtext2;
//$lang['weare_text10'] = $weare_entext10;
$lang['weare_text11'] = $weare_entext11;
$lang['weare_text12'] = $weare_entext12;
$lang['weare_text13'] = $weare_entext13;
$lang['weare_text14'] = $weare_entext14;
$lang['weare_text15'] = $weare_entext15;
$lang['weare_text16'] = $weare_entext16;
$lang['weare_text17'] = $weare_entext17;
$lang['weare_text18'] = $weare_entext18;
$lang['weare_text19'] = $weare_entext19;
$lang['weare_text20'] = $weare_entext20;
$lang['weare_text21'] = $weare_entext21;
$lang['weare_text22'] = $weare_entext22;
$lang['weare_text23'] = $weare_entext23;
$lang['weare_text24'] = $weare_entext24;
$lang['weare_text25'] = $weare_entext25;
$lang['weare_image1'] = $weare_enimage1;
$lang['weare_image2'] = $weare_enimage2;
$lang['weare_image3'] = $weare_enimage3;

$weare_thinkers = '';
while($row_thinkeren = mysql_fetch_array($retval_thinkeren, MYSQL_ASSOC)){
    $idx = $row_thinkeren['idx'];
    $text1 = $row_thinkeren['text1'];
    $text2 = $row_thinkeren['text2'];
    $image1 = $row_thinkeren['image1'];
    $image2 = $row_thinkeren['image2'];

            $weare_thinkers .= '<li class="gridder-list" data-griddercontent="#gridder-content-'.$idx.'">
                                <div class="gridder-person-container">
                                    <div class="gridder-person-img">
                                        <img src="'.$image1.'"/>
                                    </div>
                                    <div class="gridder-person-img2">
                                        <img src="'.$image2.'"/>
                                    </div>
                                    <p>'.$text1.'</p>
                                    <h3>'.$text2.'</h3>
                                </div>
                            </li>';
                               
}
$lang['weare_thinkers'] = $weare_thinkers;
$weare_thinkers_text = '';
while($row_thinkeren_text = mysql_fetch_array($retval_thinkeren_text, MYSQL_ASSOC)){
    $idx = $row_thinkeren_text['idx'];
    $text3 = $row_thinkeren_text['text3'];

            $weare_thinkers_text .= '<div id="gridder-content-'.$idx.'" class="gridder-content">
                <div class="gridder-wrapper alt-color">
                    <div class="thnk-container gridder-show-in">
                        <p >'.$text3.'</p>
                    </div>
                </div>
            </div>';
                               
}
$lang['weare_thinkers_text'] = $weare_thinkers_text;

$weare_partners = '';
while($row_partneren = mysql_fetch_array($retval_partneren, MYSQL_ASSOC)){
    $idx = $row_partneren['idx'];
    $image1 = $row_partneren['image1'];

            $weare_partners .= '<li class="gridder-list" data-griddercontent="#gridder-content2-'.$idx.'">
                    <div class="gridder-person-container" >
                        <div class="gridder-person-img3">
                            <img src="'.$image1.'"/>
                        </div>
                        <p></p>
                    </div>
                </li>';
                               
}
$lang['weare_partners'] = $weare_partners;
$weare_partners_text = '';
while($row_partneren_text = mysql_fetch_array($retval_partneren_text, MYSQL_ASSOC)){
    $idx = $row_partneren_text['idx'];
    $text1 = $row_partneren_text['text1'];

            $weare_partners_text .= '<div id="gridder-content2-'.$idx.'" class="gridder-content">
                <div class="gridder-wrapper alt-color">
                    <div class="thnk-container gridder-show-in">
                        <p >'.$text1.'</p>
                    </div>
                </div>
            </div>';
                               
}
$lang['weare_partners_text'] = $weare_partners_text;

//WeThink
$lang['wethink_text1'] = $wethink_entext1;
$lang['wethink_text2'] = $wethink_entext2;
$lang['wethink_text3'] = $wethink_entext3;
$lang['wethink_text4'] = $wethink_entext4;
$lang['wethink_text5'] = $wethink_entext5;
$lang['wethink_text6'] = $wethink_entext6;
$lang['wethink_text7'] = $wethink_entext7;
$lang['wethink_text8'] = $wethink_entext8;
$lang['wethink_image1'] = $wethink_enimage1;
$main_wethink = '';
while($row_wethink_en = mysql_fetch_array($retval_wethink_en, MYSQL_ASSOC)){
	//$idx = $row_wethink_en['idx'];
	$text5 = $row_wethink_en['text5'];
	$text6 = $row_wethink_en['text6'];
    $text7 = $row_wethink_en['text7'];
	$image = $row_wethink_en['image2']; 
    $idx = $row_wethink_en['url'];
	
			$main_wethink .= '<div  class="the-blogs thnk-blog-in" style="position:relative;">
                                <a href="/we_think/Articles/'.$idx.'" class="animsition-link">
                                    <div class="think-blog-img-cont">
                                        <div class="thnk-blog-img"><img src="'.$image.'"/></div>
                                    </div>
                                    <div class="thnk-blog-text">
                                        <div class="thnk-date">
                                            <p>'.$text5.'</p>
                                        </div>
                                        <h2 class="alt">'.$text6.'</h2>
                                    </div>
                                    <div class="thnk-blog-para hidden-xs">
                                        <div class="thnk-blog-para-in">
                                            <p>'.$text7.'</p>
                                            <p>(Read More)</p>
                                        </div>
                                    </div>
                                    <input type="hidden" value="'.$idx.'" name="blog_id">
                                    <button type="submit" value=" " class="projSubmit-next" onclick="window.location=\'/we_think/Articles/'.$idx.'\';">
                                </a>
                            </div> ';            

                  
}
$lang['wethink_projects'] = $main_wethink;
$lang['wethink_more_blogs'] = '<form id="more_blogs_form" action=""> <button type="button" name="more_blogs" id="more_blogs" class="btn2 btn-1f"><span>more we think</span></button></form>';


//Project
$single_project = '';
$text_to_show1 = '';
$text_to_show2 = '';
$text_to_show3 = '';
$text_to_show4 = '';
$text_to_show5 = '';
$text_to_show6 = '';
$text_to_show7 = '';
$text_to_show8 = '';
$text_to_show9 = '';
$text_to_show10 = '';
$text_to_show11 = '';
$text_to_show12 = '';
$text_to_show13 = '';
$text_to_show14 = '';
$text_to_show15 = '';
$text_to_show16 = '';
$text_to_show17 = '';
$text_to_show18 = '';
$text_to_show19 = '';
$text_to_show20 = '';
$image_to_show1 = '';
$image_to_show2 = '';
$image_to_show3 = '';
$image_to_show4 = '';
$image_to_show5 = '';
$image_to_show6 = '';
$image_to_show7 = '';
$image_to_show8 = '';
$image_to_show9 = '';
$image_to_show10 = '';
$image_to_show11 = '';
$image_to_show12 = '';
$image_to_show13 = '';
$image_to_show14 = '';
$image_to_show15 = '';
$row_singleprojecten = mysql_fetch_array($retval_singleprojecten, MYSQL_ASSOC);
	$project_idx = $row_singleprojecten['idx']; 
	$project_text1 = $row_singleprojecten['text1'];
	$project_text2 = $row_singleprojecten['text2'];
	$project_text3 = $row_singleprojecten['text3'];
	$project_text4 = $row_singleprojecten['text4'];
	$project_text5 = $row_singleprojecten['text5'];
	$project_text6 = $row_singleprojecten['text6'];
	$project_text7 = $row_singleprojecten['text7'];
	$project_text8 = $row_singleprojecten['text8'];
	$project_text9 = $row_singleprojecten['text9'];
	$project_text10 = $row_singleprojecten['text10'];
	$project_text11 = $row_singleprojecten['text11'];
	$project_text12 = $row_singleprojecten['text12'];
	$project_text13 = $row_singleprojecten['text13'];
	$project_text14 = $row_singleprojecten['text14'];
	$project_text15 = $row_singleprojecten['text15'];
	$project_text16 = $row_singleprojecten['text16'];
	$project_text17 = $row_singleprojecten['text17'];
	$project_image1 = $row_singleprojecten['image1'];
	$project_image2 = $row_singleprojecten['image2'];
	$project_image3 = $row_singleprojecten['image3'];
	$project_image4 = $row_singleprojecten['image4'];
	$project_image5 = $row_singleprojecten['image5'];
	$project_image6 = $row_singleprojecten['image6'];
	$project_image7 = $row_singleprojecten['image7'];
	$project_image8 = $row_singleprojecten['image8'];
	$project_image9 = $row_singleprojecten['image9'];
	$project_image10 = $row_singleprojecten['image10'];
	$project_image11 = $row_singleprojecten['image11'];
	$project_image12 = $row_singleprojecten['image12'];
	$project_image13 = $row_singleprojecten['image13'];
	$project_image14 = $row_singleprojecten['image14'];
	$project_image15 = $row_singleprojecten['image15'];
    $project_url = $row_singleprojecten['url']; 


    $lang['project_share_image'] = $row_singleprojecten['image1'];

	$text_to_show1 = $project_text1;
	$text_to_show2 = $project_text2;
	$text_to_show3 = $project_text3;
	

	if($project_text5 != null) {
		$text_to_show5 = '<h3>'.$project_text5.'</h3>';
	}

	if($project_text6 != null) {
		$text_to_show6 = '<h2 class="alt">'.$project_text6.'</h2>';
	}

	if($project_text7 != null) {
		$text_to_show7 = '<div class="project-awards-item-icon">
                                	<img src="'.$project_image3.'">
                                </div>
                                <div class="project-award-desc">
                                	<p>'.$project_text7.'</p>
                                </div>';
	}

	if($project_text8 != null) {
		$text_to_show8 = '<div class="project-awards-item-icon">
                                	<img src="'.$project_image4.'">
                                </div>
                                <div class="project-award-desc">
                                	<p>'.$project_text8.'</p>
                                </div>';
	}

	if($project_text9 != null) {
		$text_to_show9 = '<div class="project-awards-item-icon">
                                	<img src="'.$project_image5.'">
                                </div>
                                <div class="project-award-desc">
                                	<p>'.$project_text9.'</p>
                                </div>';
	}

	if($project_text10 != null) {
		$text_to_show10 = '<div class="project-awards-item-icon">
                                	<img src="'.$project_image6.'">
                                </div>
                                <div class="project-award-desc">
                                	<p>'.$project_text10.'</p>
                                </div>';
	}

    if($project_text11 != null) {
        $project_textparagraph1 = trim($project_text11);
        $project_trimmedtext1 = nl2br($project_textparagraph1); 
        $text_to_show11 = '<p>'.$project_trimmedtext1.'</p>';
        //$text_to_show11 = '<p>'.$project_text11.'</p>';
    }

    if($project_text12 != null) {
        $text_to_show12 = '<div class="project-info-left"><h2 class="alt">'.$project_text12.'</h2></div>';
    }

    if($project_text13 != null) {
        $project_textparagraph2 = trim($project_text13);
        $project_trimmedtext2 = nl2br($project_textparagraph2); 
        $text_to_show13 = '<div class="project-info-right"><p>'.$project_trimmedtext2.'</p></div>';
        //$text_to_show13 = '<p>'.$project_text13.'</p>';
    }

    if($project_text14 != null) {
        $text_to_show14 = '<div class="project-info-left"><h2 class="alt">'.$project_text14.'</h2></div>';
    }

    if($project_text15 != null) {
        $project_textparagraph3 = trim($project_text15);
        $project_trimmedtext3 = nl2br($project_textparagraph3); 
        $text_to_show15 = '<div class="project-info-right"><p>'.$project_trimmedtext3.'</p></div>';
        //$text_to_show15 = '<p>'.$project_text15.'</p>';
    }



	if($project_text16 != null) {
		$text_to_show16 = '<div class="project-info-left"><h2 class="alt">'.$project_text16.'</h2></div>';
	}

	if($project_text17 != null) {
		$project_textparagraph4 = trim($project_text17);
        $project_trimmedtext4 = nl2br($project_textparagraph4); 
        $text_to_show17 = '<div class="project-info-right"><p>'.$project_trimmedtext4.'</p></div>';
	}

	$image_to_show1 = '<div class="project-top"><img src="'.$project_image1.'"/></div>';
	$image_to_show2 = '<img src="'.$project_image2.'" />';

	if($project_image7 != null ) {
       // echo $project_image7['extension'];
        if (substr($project_image7, -3) == 'jpg' || substr($project_image7, -4) == 'jpeg') {
            $image_to_show7 = '<div class="project-section2-in1"><img src="'.$project_image7.'"/></div>';
        } elseif (substr($project_image7, -3) == 'mp4') {
            $image_to_show7 = '<div class="project-section2-in1"><video width="320" height="240" controls><source src="'.$project_image7.'" type="video/mp4">Your browser does not support the video tag.</video></div>';
        }        
    }

    if($project_image8 != null ) {
        $image_to_show8 = '<div class="project-section2-in2"><img src="'.$project_image8.'"/></div>';
    }

    if($project_image9 != null ) {
        $image_to_show9 = '<div class="project-section2-in3"><img src="'.$project_image9.'"/></div>';
    }

    if($project_image10 != null ) {
        $image_to_show10 = '<div class="project-section4-in1"><img src="'.$project_image10.'"/></div>';
    }

    if($project_image11 != null ) {
        $image_to_show11 = '<div class="project-section4-in2"><img src="'.$project_image11.'"/></div>';
    }

    if($project_image12 != null ) {
        $image_to_show12 = '<div class="project-section4-in3"><img src="'.$project_image12.'"/></div>';
    }

    if($project_image13 != null ) {
        $image_to_show13 = '<div class="project-section2-in1"><img src="'.$project_image13.'"/></div>';
    }

    if($project_image14 != null ) {
        $image_to_show14 = '<div class="project-section2-in2"><img src="'.$project_image14.'"/></div>';
    }

    if($project_image15 != null ) {
        $image_to_show15 = '<div class="project-section2-in3"><img src="'.$project_image15.'"/></div>';
    }

            
			                   

$lang['project_text1'] = $text_to_show1;
$lang['project_text2'] = $text_to_show2;
$lang['project_text3'] = $text_to_show3;
$lang['project_text4'] = $text_to_show4;
$lang['project_text5'] = $text_to_show5;
$lang['project_text6'] = $text_to_show6;
$lang['project_text7'] = $text_to_show7;
$lang['project_text8'] = $text_to_show8;
$lang['project_text9'] = $text_to_show9;
$lang['project_text10'] = $text_to_show10;
$lang['project_text11'] = $text_to_show11;
$lang['project_text12'] = $text_to_show12;
$lang['project_text13'] = $text_to_show13;
$lang['project_text14'] = $text_to_show14;
$lang['project_text15'] = $text_to_show15;
$lang['project_text16'] = $text_to_show16;
$lang['project_text17'] = $text_to_show17;
$lang['project_text18'] = $text_to_show18;
$lang['project_text19'] = $text_to_show19;
$lang['project_text20'] = $text_to_show20;
$lang['project_image1'] = $image_to_show1;
$lang['project_image2'] = $image_to_show2;
$lang['project_image3'] = $image_to_show3;
$lang['project_image4'] = $image_to_show4;
$lang['project_image5'] = $image_to_show5;
$lang['project_image6'] = $image_to_show6;
$lang['project_image7'] = $image_to_show7;
$lang['project_image8'] = $image_to_show8;
$lang['project_image9'] = $image_to_show9;
$lang['project_image10'] = $image_to_show10;
$lang['project_image11'] = $image_to_show11;
$lang['project_image12'] = $image_to_show12;
$lang['project_image13'] = $image_to_show13;
$lang['project_image14'] = $image_to_show14;
$lang['project_image15'] = $image_to_show15;
$lang['project_prev_id'] = $prev_id_en;
$lang['project_next_id'] = $next_id_en;

$main_wecreate = '';
while($row_wecreate_en = mysql_fetch_array($retval_wecreate_en, MYSQL_ASSOC)){
	//$idx = $row_wecreate_en['sortable_order'];
	$text1 = $row_wecreate_en['text1'];
	$text2 = $row_wecreate_en['text2'];
	$image1 = $row_wecreate_en['image1']; 
    $image2 = $row_wecreate_en['image2']; 
    $idx = $row_wecreate_en['url'];

			                
            //action="/we_create/projects?'.$text5.'"



            $main_wecreate .= '<section id="section2" class="cd-section2 animation-element bounce-up">
                    <div class="thnk-wrapper subject bg-color1">
                        <div class="thnk-container thnk-restrict">
                            <div class="thnk-talk">
                                
                                <h1 class="alt">'.$text1.'</h1>
                                <div class="thnk-wrapper">
                                    <div class="thnk-talk-dots animation-element bounce-updot">
                                        <div class="thnk-talk-dots animation-element bounce-updot">
                                        <div class="thnk-talk-dot thnk-talk-dot-rotate subject"></div>
                                        <div class="thnk-talk-dot thnk-talk-dot-rotate subject2"></div>
                                        <div class="thnk-talk-dot thnk-talk-dot-rotate subject3"></div>
                                        <div class="thnk-talk-dot thnk-talk-dot-rotate subject3"></div>
                                        <div class="thnk-talk-dot thnk-talk-dot-rotate subject3"></div>
                                    </div>
                                    </div>
                                </div>
                                <img src="'.$image1.'"/>
                                <p>'.$text2.'</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="thnk-wrapper bg-color1 subject">
                        <div class="we-logo">
                            <img src="'.$image2.'"/>
                        </div>
                    </div>
                </section><!-- cd-section -->';
}
$lang['wecreate_projects'] = $main_wecreate;


//Main Project Page
$lang['main_project_text1'] = $main_project_entext1;
$lang['main_project_text2'] = $main_project_entext2;
$lang['main_project_text3'] = $main_project_entext3;
$lang['main_project_text4'] = $main_project_entext4;
$lang['main_project_text5'] = $main_project_entext5;
$lang['main_project_text6'] = $main_project_entext6;
$lang['main_project_text7'] = $main_project_entext7;
$lang['main_project_image1'] = $main_project_enimage1;

//Products
$lang['product_text1'] = $products_entext1;
$lang['product_text2'] = $products_entext2;
$lang['product_text3'] = $products_entext3;
$lang['product_text4'] = $products_entext4;
$lang['product_text5'] = $products_entext5;
$lang['product_text6'] = $products_entext6;
$lang['product_text7'] = $products_entext7;
$lang['product_image1'] = $products_enimage1;


//Footer
$lang['footer_text1'] = $footer_entext1;
$lang['footer_text2'] = $footer_entext2;
$lang['footer_text3'] = $footer_entext3;

$social = '';
while($rowsocial = mysql_fetch_array($retvalsocial, MYSQL_ASSOC)){
                            $idx = $rowsocial['idx'];
                            $socialtext1 = $rowsocial['text1'];     
                            $socialtext2 = $rowsocial['text2']; 
                            $socialimage = $rowsocial['image1']; 

                            $social .= '<a href="'.$socialtext1.'" target="'.$socialtext2.'"><img src="'.$socialimage.'"/></a>';
                }
$lang['social'] = $social;

//blog
$single_blog = '';
$blog_text_to_show1 = '';
$blog_text_to_show2 = '';
$blog_text_to_show3 = '';
$blog_text_to_show4 = '';
$blog_text_to_show5 = '';
$blog_text_to_show6 = '';
$blog_text_to_show7 = '';
$blog_text_to_show8 = '';
$blog_text_to_show9 = '';
$blog_text_to_show10 = '';
$blog_text_to_show11 = '';
$blog_text_to_show12 = '';
$blog_text_to_show13 = '';
$blog_text_to_show14 = '';
$blog_image_to_show1 = '';
$blog_image_to_show2 = '';
$blog_image_to_show3 = '';
$blog_image_to_show4 = '';
$blog_image_to_show5 = '';
$blog_image_to_show6 = '';
$blog_image_to_show7 = '';
$blog_image_to_show8 = '';
$blog_image_to_show9 = '';
$blog_image_to_show10 = '';
$blog_image_to_show11 = '';
$row_singleblogen = mysql_fetch_array($retval_singleblogen, MYSQL_ASSOC);
	$blog_idx = $row_singleblogen['idx']; 
	$blog_text1 = $row_singleblogen['text1'];
	$blog_text2 = $row_singleblogen['text2'];
	$blog_text3 = $row_singleblogen['text3'];
	$blog_text4 = $row_singleblogen['text4'];
	$blog_text5 = $row_singleblogen['text5'];
	$blog_text6 = $row_singleblogen['text6'];
	$blog_text7 = $row_singleblogen['text7'];
	$blog_text8 = $row_singleblogen['text8'];
	$blog_text9 = $row_singleblogen['text9'];
	$blog_text10 = $row_singleblogen['text10'];
	$blog_text11 = $row_singleblogen['text11'];
	$blog_text12 = $row_singleblogen['text12'];
	$blog_text13 = $row_singleblogen['text13'];
	$blog_text14 = $row_singleblogen['text14'];
	$blog_image1 = $row_singleblogen['image1'];
	$blog_image2 = $row_singleblogen['image2'];
	$blog_image3 = $row_singleblogen['image3'];
	$blog_image4 = $row_singleblogen['image4'];
	$blog_image5 = $row_singleblogen['image5'];
	$blog_image6 = $row_singleblogen['image6'];
	$blog_image7 = $row_singleblogen['image7'];
	$blog_image8 = $row_singleblogen['image8'];
	$blog_image9 = $row_singleblogen['image9'];
	$blog_image10 = $row_singleblogen['image10'];
    $blog_image11 = $row_singleblogen['image11'];
    $blog_url = $row_singleblogen['url']; 

    $lang['blog_share_image'] = $row_singleblogen['image1'];


	$blog_text_to_show1 = $blog_text1;
	$blog_text_to_show2 = $blog_text2;
	$blog_text_to_show3 = $blog_text3;
	

	if($blog_text5 != null) {
		$blog_text_to_show5 = '<h3>'.$blog_text5.'</h3>';
	}

	if($blog_text6 != null) {
		$blog_text_to_show6 = '<h2 class="alt">'.$blog_text6.'</h2>';
	}


	if($blog_text7 != null) {
        $blog_textparagraph1 = trim($blog_text7);
        $blog_trimmedtext1 = nl2br($blog_textparagraph1); 
		$blog_text_to_show7 = '<p>'.$blog_trimmedtext1.'</p>';
        //$blog_text_to_show11 = '<p>'.$blog_text11.'</p>';
	}

	if($blog_text8 != null) {
		$blog_text_to_show8 = '<span>'.$blog_text8.'</span>';
	}

	if($blog_text9 != null) {
		$blog_text_to_show9 = '<div class="project-info-left"><h2 class="alt">'.$blog_text9.'</h2></div>';
	}

	if($blog_text10 != null) {
        $blog_textparagraph2 = trim($blog_text10);
        $blog_trimmedtext2 = nl2br($blog_textparagraph2); 
        $blog_text_to_show10 = '<div class="project-info-right"><p>'.$blog_trimmedtext2.'</p></div>';
		//$blog_text_to_show13 = '<p>'.$blog_text13.'</p>';
	}

	if($blog_text11 != null) {
		$blog_text_to_show11 = '<div class="project-info-left"><h2 class="alt">'.$blog_text11.'</h2></div>';
	}

	if($blog_text12 != null) {
        $blog_textparagraph3 = trim($blog_text12);
        $blog_trimmedtext3 = nl2br($blog_textparagraph3); 
        $blog_text_to_show12 = '<div class="project-info-right"><p>'.$blog_trimmedtext3.'</p></div>';
		//$blog_text_to_show15 = '<p>'.$blog_text15.'</p>';
	}

	if($blog_text13 != null) {
		$blog_text_to_show13 = '<div class="project-info-left"><h2 class="alt">'.$blog_text13.'</h2></div>';
	}

	if($blog_text14 != null) {
        $blog_textparagraph4 = trim($blog_text14);
        $blog_trimmedtext4 = nl2br($blog_textparagraph4); 
        $blog_text_to_show14 = '<div class="project-info-right"><p>'.$blog_trimmedtext4.'</p></div>';
		//$blog_text_to_show15 = '<p>'.$blog_text15.'</p>';
	}

	$blog_image_to_show1 = '<div class="blog-top"><img src="'.$blog_image1.'"/></div>';
	$blog_image_to_show2 = '<img src="'.$blog_image2.'" />';

	if($blog_image3 != null ) {
		$blog_image_to_show3 = '<div class="project-section2-in1"><img src="'.$blog_image3.'"/></div>';
	}

	if($blog_image4 != null ) {
		$blog_image_to_show4 = '<div class="project-section2-in2"><img src="'.$blog_image4.'"/></div>';
	}

	if($blog_image5 != null ) {
		$blog_image_to_show5 = '<div class="project-section2-in3"><img src="'.$blog_image5.'"/></div>';
	}

	if($blog_image6 != null ) {
		$blog_image_to_show6 = '<div class="project-section4-in1"><img src="'.$blog_image6.'"/></div>';
	}

	if($blog_image7 != null ) {
		$blog_image_to_show7 = '<div class="project-section4-in2"><img src="'.$blog_image7.'"/></div>';
	}

	if($blog_image8 != null ) {
		$blog_image_to_show8 = '<div class="project-section4-in3"><img src="'.$blog_image8.'"/></div>';
	}

	if($blog_image9 != null ) {
		$blog_image_to_show9 = '<div class="project-section2-in1"><img src="'.$blog_image9.'"/></div>';
	}

	if($blog_image10 != null ) {
		$blog_image_to_show10 = '<div class="project-section2-in2"><img src="'.$blog_image10.'"/></div>';
	}

	if($blog_image11 != null ) {
		$blog_image_to_show11 = '<div class="project-section2-in3"><img src="'.$blog_image11.'"/></div>';
	}

            
			                   

$lang['blog_text1'] = $blog_text_to_show1;
$lang['blog_text2'] = $blog_text_to_show2;
$lang['blog_text3'] = $blog_text_to_show3;
$lang['blog_text4'] = $blog_text_to_show4;
$lang['blog_text5'] = $blog_text_to_show5;
$lang['blog_text6'] = $blog_text_to_show6;
$lang['blog_text7'] = $blog_text_to_show7;
$lang['blog_text8'] = $blog_text_to_show8;
$lang['blog_text9'] = $blog_text_to_show9;
$lang['blog_text10'] = $blog_text_to_show10;
$lang['blog_text11'] = $blog_text_to_show11;
$lang['blog_text12'] = $blog_text_to_show12;
$lang['blog_text13'] = $blog_text_to_show13;
$lang['blog_text14'] = $blog_text_to_show14;
$lang['blog_image1'] = $blog_image_to_show1;
$lang['blog_image2'] = $blog_image_to_show2;
$lang['blog_image3'] = $blog_image_to_show3;
$lang['blog_image4'] = $blog_image_to_show4;
$lang['blog_image5'] = $blog_image_to_show5;
$lang['blog_image6'] = $blog_image_to_show6;
$lang['blog_image7'] = $blog_image_to_show7;
$lang['blog_image8'] = $blog_image_to_show8;
$lang['blog_image9'] = $blog_image_to_show9;
$lang['blog_image10'] = $blog_image_to_show10;
$lang['blog_image11'] = $blog_image_to_show11;
$lang['blog_prev_id'] = $blog_prev_id_en;
$lang['blog_next_id'] = $blog_next_id_en;



$category = '';
 while($rowcategory = mysql_fetch_array($retvalcategory, MYSQL_ASSOC)){
        $idx = $rowcategory['idx'];
        $category_text1 = $rowcategory['text1'];
        //$category .= '<li><a href="" class="">'.$category_text1.'</a></li>';
        //$category .= '<li><a><form class="category-form" method="POST"><input type="hidden" id="category" name="category" value="'.$category_text1.'"><input type="submit" class="" value="'.$category_text1.'"></form></a></li>';


        //$category .= '<li><a class="test"><input type="hidden" id="category_'.$idx.'" name="category[]" value="'.$category_text1.'">'.$category_text1.'</a></li>';



        $category .= '<li><option name="category_name" value="'.$idx.'" class="names">'.$category_text1.'</option></li>';
                        }
$lang['categories'] = $category;



$tag = '';
 while($rowtag = mysql_fetch_array($retvaltag, MYSQL_ASSOC)){
        $idx = $rowtag['idx'];
        $tag_text1 = $rowtag['text1'];
        $tag_text2 = $rowtag['text2'];
       // $tag .= '<li><a class="test"><input type="hidden" id="tag" name="tag[]" value="'.$tag_text2.'">'.$tag_text2.'</a></li>';
        $tag .= '<li><option name="category_name" value="'.$idx.'" class="names">'.$tag_text1.'</option></li>';
                        }
$lang['tags'] = $tag;

$lang['categories_list'] = "category";
$lang['articles_list'] = "category";
//$lang['articles_list'] = "Article";

$lang['form'] = '<form id="categ-form-en" accept-charset="UTF-8">
                          <select class="selectpicker" name="selected_category" id="form-select">
                                <li data-tokens="/we_create" ><option><a href="/we_create" class="">all works</a></option></li>
                                '.$lang['categories'].'
                          </select>
                        </form>';

$lang['think_form'] = '<form id="categ-form-en" accept-charset="UTF-8">
                          <select class="selectpicker" name="selected_category" id="form-select">      
                          <li><option><a href="/we_think" class="">all articles</a></option></li>                          
                                '.$lang['tags'].'
                          </select>
                        </form>';

$lang['script'] = 'escape($("#form-select :selected").text());';


echo '<style>
.eng-btn {
    opacity: 1!important;
}

</style>';

?>