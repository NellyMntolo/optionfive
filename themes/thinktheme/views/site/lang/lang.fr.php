
<?php
error_reporting(0);
/*
------------------
Language: Chinese
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
$lang['menu_text1'] = $menu_zhtext1;
$lang['menu_text2'] = $menu_zhtext2;
$lang['menu_text3'] = $menu_zhtext3;
$lang['menu_text4'] = $menu_zhtext4;
$lang['menu_text5'] = $menu_zhtext5;

//Contact
$lang['contact_text1'] = $contact_zhtext1;
$lang['contact_text2'] = $contact_zhtext2;
$lang['contact_text3'] = $contact_zhtext3;
$lang['contact_text4'] = $contact_zhtext4;
$lang['contact_text5'] = $contact_zhtext5;
$lang['contact_text6'] = $contact_zhtext6;
$lang['contact_text7'] = $contact_zhtext7;
$lang['contact_text8'] = $contact_zhtext8;
$lang['contact_text9'] = $contact_zhtext9;
$lang['contact_text10'] = $contact_zhtext10;
$lang['contact_text11'] = $contact_zhtext11;
$lang['contact_image1'] = $contact_zhimage1;
$lang['contact_text12'] = '請詳細填寫以下問卷，感謝您!';

//Retailers
$lang['retailers_text1'] = $retailers_zhtext1;
$lang['retailers_text2'] = $retailers_zhtext2;
$lang['retailers_text3'] = $retailers_zhtext3;
$lang['retailers_text4'] = $retailers_zhtext4;
$lang['retailers_text5'] = $retailers_zhtext5;
$lang['retailers_text6'] = $retailers_zhtext6;
$lang['retailers_text7'] = $retailers_zhtext7;
$lang['retailers_image1'] = $retailers_zhimage1;
$lang['retailers_image2'] = $retailers_zhimage2;
$lang['retailers_image3'] = $retailers_zhimage3;

//Main
$lang['index_text1'] = $index_zhtext1;
$lang['index_text2'] = $index_zhtext2;
$lang['index_text3'] = $index_zhtext3;
$lang['index_text4'] = $index_zhtext4;
$lang['index_text5'] = $index_zhtext5;
$lang['index_text6'] = $index_zhtext6;
$lang['index_text7'] = $index_zhtext7;
$lang['index_text8'] = $index_zhtext8;
$lang['index_text9'] = $index_zhtext9;

$index_textparagraph1 = trim($index_zhtext10);
$index_trimmedtext1 = nl2br($index_textparagraph1); 
$lang['index_text10'] = $index_trimmedtext1;  

//$lang['index_text10'] = $index_zhtext10;
$lang['index_text11'] = $index_zhtext11;
$lang['index_text12'] = $index_zhtext12;
$lang['index_text13'] = $index_zhtext13;
$lang['index_text14'] = $index_zhtext14;
$lang['index_text15'] = $index_zhtext15;
$lang['index_text16'] = $index_zhtext16;
$lang['index_text17'] = $index_zhtext17;
$lang['index_text18'] = $index_zhtext18;
$lang['index_text19'] = $index_zhtext19;
$lang['index_text20'] = $index_zhtext20;
$lang['index_image1'] = $index_zhimage1;
$lang['index_image2'] = $index_zhimage2;
$lang['index_image3'] = $index_zhimage3;
while($row_mainprojectzh = mysql_fetch_array($retval_mainprojectzh, MYSQL_ASSOC)){
	$idx = $row_mainprojectzh['sortable_order'];
    $comment = $row_mainprojectzh['text4'];
	$title = $row_mainprojectzh['text5'];
	$image = $row_mainprojectzh['image1']; 
    $url = $row_mainprojectzh['url']; 

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
while($row_indexblogs_zh = mysql_fetch_array($retval_indexblogs_zh, MYSQL_ASSOC)){
    $idx = $row_indexblogs_zh['idx'];
    $text5 = $row_indexblogs_zh['text5'];
    $text6 = $row_indexblogs_zh['text6'];
    $text7 = $row_indexblogs_zh['text7'];
    $image = $row_indexblogs_zh['image2']; 
    $url = $row_indexblogs_zh['url'];
    
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
$lang['weare_text1'] = $weare_zhtext1;
$lang['weare_text2'] = $weare_zhtext2;
$lang['weare_text3'] = $weare_zhtext3;
$lang['weare_text4'] = $weare_zhtext4;
$lang['weare_text5'] = $weare_zhtext5;
$weare_textparagraph6 = trim($weare_zhtext6);
$weare_trimmedtext6 = nl2br($weare_textparagraph6); 
$lang['weare_text6'] = $weare_trimmedtext6;

$lang['weare_text7'] = $weare_zhtext7;
$weare_textparagraph1 = trim($weare_zhtext8);
$weare_trimmedtext1 = nl2br($weare_textparagraph1); 
$lang['weare_text8'] = $weare_trimmedtext1; 
//$lang['weare_text8'] = $weare_zhtext8;
$lang['weare_text9'] = $weare_zhtext9;
$weare_textparagraph2 = trim($weare_zhtext10);
$weare_trimmedtext2 = nl2br($weare_textparagraph2); 
$lang['weare_text10'] = $weare_trimmedtext2;
//$lang['weare_text10'] = $weare_zhtext10;
$lang['weare_text11'] = $weare_zhtext11;
$lang['weare_text12'] = $weare_zhtext12;
$lang['weare_text13'] = $weare_zhtext13;
$lang['weare_text14'] = $weare_zhtext14;
$lang['weare_text15'] = $weare_zhtext15;
$lang['weare_text16'] = $weare_zhtext16;
$lang['weare_text17'] = $weare_zhtext17;
$lang['weare_text18'] = $weare_zhtext18;
$lang['weare_text19'] = $weare_zhtext19;
$lang['weare_text20'] = $weare_zhtext20;
$lang['weare_text21'] = $weare_zhtext21;
$lang['weare_text22'] = $weare_zhtext22;
$lang['weare_text23'] = $weare_zhtext23;
$lang['weare_text24'] = $weare_zhtext24;
$lang['weare_text25'] = $weare_zhtext25;
$lang['weare_image1'] = $weare_zhimage1;
$lang['weare_image2'] = $weare_zhimage2;
$lang['weare_image3'] = $weare_zhimage3;

$weare_thinkers = '';
while($row_thinkerzh = mysql_fetch_array($retval_thinkerzh, MYSQL_ASSOC)){
    $idx = $row_thinkerzh['idx'];
    $text1 = $row_thinkerzh['text1'];
    $text2 = $row_thinkerzh['text2'];
    $image1 = $row_thinkerzh['image1'];
    $image2 = $row_thinkerzh['image2'];

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
while($row_thinkerzh_text = mysql_fetch_array($retval_thinkerzh_text, MYSQL_ASSOC)){
    $idx = $row_thinkerzh_text['idx'];
    $text3 = $row_thinkerzh_text['text3'];

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
while($row_partnerzh = mysql_fetch_array($retval_partnerzh, MYSQL_ASSOC)){
    $idx = $row_partnerzh['idx'];
    $image1 = $row_partnerzh['image1'];

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
while($row_partnerzh_text = mysql_fetch_array($retval_partnerzh_text, MYSQL_ASSOC)){
    $idx = $row_partnerzh_text['idx'];
    $text1 = $row_partnerzh_text['text1'];

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
$lang['wethink_text1'] = $wethink_zhtext1;
$lang['wethink_text2'] = $wethink_zhtext2;
$lang['wethink_text3'] = $wethink_zhtext3;
$lang['wethink_text4'] = $wethink_zhtext4;
$lang['wethink_text5'] = $wethink_zhtext5;
$lang['wethink_text6'] = $wethink_zhtext6;
$lang['wethink_text7'] = $wethink_zhtext7;
$lang['wethink_text8'] = $wethink_zhtext8;
$lang['wethink_image1'] = $wethink_zhimage1;
$main_wethink = '';
while($row_wethink_zh = mysql_fetch_array($retval_wethink_zh, MYSQL_ASSOC)){
	//$idx = $row_wethink_zh['idx'];
	$text5 = $row_wethink_zh['text5'];
	$text6 = $row_wethink_zh['text6'];
    $text7 = $row_wethink_zh['text7'];
	$image = $row_wethink_zh['image2'];
    $idx = $row_wethink_zh['url']; 
	
			$main_wethink .= '<div class="the-blogs thnk-blog-in" style="position:relative;">
                                <a href="/we_think/Articles/'.$idx.'" class="animsition-link" >
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
$row_singleprojectzh = mysql_fetch_array($retval_singleprojectzh, MYSQL_ASSOC);
	$project_idx = $row_singleprojectzh['idx']; 
	$project_text1 = $row_singleprojectzh['text1'];
	$project_text2 = $row_singleprojectzh['text2'];
	$project_text3 = $row_singleprojectzh['text3'];
	$project_text4 = $row_singleprojectzh['text4'];
	$project_text5 = $row_singleprojectzh['text5'];
	$project_text6 = $row_singleprojectzh['text6'];
	$project_text7 = $row_singleprojectzh['text7'];
	$project_text8 = $row_singleprojectzh['text8'];
	$project_text9 = $row_singleprojectzh['text9'];
	$project_text10 = $row_singleprojectzh['text10'];
	$project_text11 = $row_singleprojectzh['text11'];
	$project_text12 = $row_singleprojectzh['text12'];
	$project_text13 = $row_singleprojectzh['text13'];
	$project_text14 = $row_singleprojectzh['text14'];
	$project_text15 = $row_singleprojectzh['text15'];
	$project_text16 = $row_singleprojectzh['text16'];
	$project_text17 = $row_singleprojectzh['text17'];
	$project_image1 = $row_singleprojectzh['image1'];
	$project_image2 = $row_singleprojectzh['image2'];
	$project_image3 = $row_singleprojectzh['image3'];
	$project_image4 = $row_singleprojectzh['image4'];
	$project_image5 = $row_singleprojectzh['image5'];
	$project_image6 = $row_singleprojectzh['image6'];
	$project_image7 = $row_singleprojectzh['image7'];
	$project_image8 = $row_singleprojectzh['image8'];
	$project_image9 = $row_singleprojectzh['image9'];
	$project_image10 = $row_singleprojectzh['image10'];
	$project_image11 = $row_singleprojectzh['image11'];
	$project_image12 = $row_singleprojectzh['image12'];
	$project_image13 = $row_singleprojectzh['image13'];
	$project_image14 = $row_singleprojectzh['image14'];
	$project_image15 = $row_singleprojectzh['image15'];
    $project_url = $row_singleprojectzh['url']; 

    $lang['project_share_image'] = $row_singleprojectzh['image1'];


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
		$image_to_show7 = '<div class="project-section2-in1"><img src="'.$project_image7.'"/></div>';
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
$lang['project_prev_id'] = $prev_id_zh;
$lang['project_next_id'] = $next_id_zh;

$main_wecreate = '';
while($row_wecreate_zh = mysql_fetch_array($retval_wecreate_zh, MYSQL_ASSOC)){
	//$idx = $row_wecreate_zh['sortable_order'];
	$text1 = $row_wecreate_zh['text1'];
	$text2 = $row_wecreate_zh['text2'];
	$image1 = $row_wecreate_zh['image1'];
    $image2 = $row_wecreate_zh['image2'];
    $idx = $row_wecreate_zh['url']; 
	

            $main_wecreate .= '<div class="thnk-prod-grid">
                <a class="thnk-project" href="/we_create/projects/'.$idx.'" class="animsition-link">
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
$lang['wecreate_projects'] = $main_wecreate;

//Main Project Page
$lang['main_project_text1'] = $main_project_zhtext1;
$lang['main_project_text2'] = $main_project_zhtext2;
$lang['main_project_text3'] = $main_project_zhtext3;
$lang['main_project_text4'] = $main_project_zhtext4;
$lang['main_project_text5'] = $main_project_zhtext5;
$lang['main_project_text6'] = $main_project_zhtext6;
$lang['main_project_text7'] = $main_project_zhtext7;
$lang['main_project_image1'] = $main_project_zhimage1;

//Products
$lang['product_text1'] = $products_zhtext1;
$lang['product_text2'] = $products_zhtext2;
$lang['product_text3'] = $products_zhtext3;
$lang['product_text4'] = $products_zhtext4;
$lang['product_text5'] = $products_zhtext5;
$lang['product_text6'] = $products_zhtext6;
$lang['product_text7'] = $products_zhtext7;
$lang['product_image1'] = $products_zhimage1;

//Footer
$lang['footer_text1'] = $footer_zhtext1;
$lang['footer_text2'] = $footer_zhtext2;
$lang['footer_text3'] = $footer_zhtext3;

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
$row_singleblogzh = mysql_fetch_array($retval_singleblogzh, MYSQL_ASSOC);
	$blog_idx = $row_singleblogzh['idx']; 
	$blog_text1 = $row_singleblogzh['text1'];
	$blog_text2 = $row_singleblogzh['text2'];
	$blog_text3 = $row_singleblogzh['text3'];
	$blog_text4 = $row_singleblogzh['text4'];
	$blog_text5 = $row_singleblogzh['text5'];
	$blog_text6 = $row_singleblogzh['text6'];
	$blog_text7 = $row_singleblogzh['text7'];
	$blog_text8 = $row_singleblogzh['text8'];
	$blog_text9 = $row_singleblogzh['text9'];
	$blog_text10 = $row_singleblogzh['text10'];
	$blog_text11 = $row_singleblogzh['text11'];
	$blog_text12 = $row_singleblogzh['text12'];
	$blog_text13 = $row_singleblogzh['text13'];
	$blog_text14 = $row_singleblogzh['text14'];
	$blog_image1 = $row_singleblogzh['image1'];
	$blog_image2 = $row_singleblogzh['image2'];
	$blog_image3 = $row_singleblogzh['image3'];
	$blog_image4 = $row_singleblogzh['image4'];
	$blog_image5 = $row_singleblogzh['image5'];
	$blog_image6 = $row_singleblogzh['image6'];
	$blog_image7 = $row_singleblogzh['image7'];
	$blog_image8 = $row_singleblogzh['image8'];
	$blog_image9 = $row_singleblogzh['image9'];
	$blog_image10 = $row_singleblogzh['image10'];
    $blog_image11 = $row_singleblogzh['image11'];
    $blog_url = $row_singleblogzh['url'];

    $lang['blog_share_image'] = $row_singleblogzh['image1'];


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
$lang['blog_prev_id'] = $blog_prev_id_zh;
$lang['blog_next_id'] = $blog_next_id_zh;


//id="category_'.$idx.'"
$category = '';
 while($rowcategory = mysql_fetch_array($retvalcategory, MYSQL_ASSOC)){
        $idx = $rowcategory['idx'];
        $category_text1 = $rowcategory['text1'];
        $category_text2 = $rowcategory['text2'];
       // $category .= '<li><a class="test"><input type="hidden" id="category" name="category[]" value="'.$category_text2.'">'.$category_text2.'</a></li>';
        $category .= '<li><option name="category_name" value="'.$idx.'" class="names">'.$category_text2.'</option></li>';
                        }
$lang['categories'] = $category;


$tag = '';
 while($rowtag = mysql_fetch_array($retvaltag, MYSQL_ASSOC)){
        $idx = $rowtag['idx'];
        $tag_text1 = $rowtag['text1'];
        $tag_text2 = $rowtag['text2'];
       // $tag .= '<li><a class="test"><input type="hidden" id="tag" name="tag[]" value="'.$tag_text2.'">'.$tag_text2.'</a></li>';
        $tag .= '<li><option name="category_name" value="'.$idx.'" class="names">'.$tag_text2.'</option></li>';
                        }
$lang['tags'] = $tag;


$lang['categories_list'] = "作品分類";
$lang['articles_list'] = "文章分類";
//$lang['articles_list'] = "文章分類";

$lang['form'] = '<form id="categ-form-zh" accept-charset="UTF-8">
                          <select class="selectpicker" name="selected_category" id="form-select">
                                <li><option><a href="/we_create" class="">全部作品</a></option></li>
                                '.$lang['categories'].'
                          </select>
                        </form>';

$lang['think_form'] = '<form id="categ-form-zh" accept-charset="UTF-8">
                          <select class="selectpicker" name="selected_category" id="form-select">   
                                <li><option><a href="/we_create" class="">全部文章</a></option></li>                             
                                '.$lang['tags'].'
                          </select>
                        </form>';

$lang['script'] = '$("#form-select :selected").text();';

echo '<style>
.fr-btn {
    opacity: 1!important;
}

</style>';

?>