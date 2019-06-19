<?php
require_once("dbcontroller.php");
require_once("pagination.class.php");
$db_handle = new DBController();
$perPage = new PerPage();
$output = '';

// $sql = "SELECT * FROM news ORDER BY ID DESC ";
// $sql = "SELECT * FROM news INNER JOIN category news.category = category.ID ORDER BY news.ID DESC ";
$sql = "SELECT news.ID as ID_news,news.post_author,news.post_date,news.post_content,news.post_title,news.pembuat,category.category,news.post_hits,news.ID,category.Category,category.page,category.Date FROM news INNER JOIN category ON news.category = category.ID";

$paginationlink = "pagination_ajax/getresult.php?page=";
$pagination_setting = $_GET["pagination_setting"];
// $sql_category = "SELECT * FROM news AS N INNER JOIN category AS C ON C.ID = N.ID";
$page = 1;
if(!empty($_GET["page"])) {
$page = $_GET["page"];
}

$id = 0;
if (!empty($_GET['ID'])) {

$output = '';

$id = $_GET['ID'];
// echo "<pre> this is id : ".$id."</pre>";
$start = ($page-1)*$perPage->perpage;
if($start < 0) $start = 0;
// /$query =  $sql_category
$query_first = $sql . " where news.category = ".$id." ORDER BY news.ID DESC";
// $query =  $sql . " limit " . $start . "," . $perPage->perpage;
$query =  $query_first . " limit " . $start . "," . $perPage->perpage;
// $querys =  $sql_category."limit". $start . "," . $perPage->perpage;
$faq = $db_handle->runQuery($query);

// $output .= '<pre> this is query : '.$query.' </pre>' ;

}else{


$start = ($page-1)*$perPage->perpage;
if($start < 0) $start = 0;
// /$query =  $sql_category
// $query_first = $sql . " where ID = ".$id;
$query =  $sql . " ORDER BY news.ID DESC limit " . $start . "," . $perPage->perpage;
// $query =  $query_first . " limit " . $start . "," . $perPage->perpage;
// $querys =  $sql_category."limit". $start . "," . $perPage->perpage;
$faq = $db_handle->runQuery($query);

// $output .= '<pre> this is query : '.$query.' </pre>' ;

}


if(empty($_GET["rowcount"]) && empty($_GET["ID"])) {
$_GET["rowcount"] = $db_handle->numRows($sql);
}else if(!empty($_GET["ID"])){

$sql_pagination = "SELECT news.ID as ID_news,news.post_author,news.post_date,news.post_content,news.post_title,news.pembuat,category.category,news.post_hits,news.ID,category.Category,category.page,category.Date FROM news INNER JOIN category ON news.category = category.ID where news.category = ".$_GET["ID"]."";
$_GET["rowcount"] = $db_handle->numRows($sql_pagination);
}else{
$_GET["rowcount"] = $db_handle->numRows($sql);
}

if($pagination_setting == "prev-next") {
    $perpageresult = $perPage->getPrevNext($_GET["rowcount"], $paginationlink,$pagination_setting);
} else {
    $perpageresult = $perPage->getAllPageLinks($_GET["rowcount"], $paginationlink,$pagination_setting);
    // $output .='<pre> '.$perpageresult.' </pre>' ;
}


include('../../conn.php');



foreach($faq as $k=>$v) {


 $output .= '<div class="post post-short " data-animation="fadeInRight" data-animation-delay="500" style="margin-top:-70px; color: black;">'.
                        
                            '<div class="col-md-5">'.
                                '<div class="post-header">'.
                                    '<div class="post-image">'.
                                        '<img style="width:100%;" src="../bahana_images_assets/news/'.$faq[$k]["ID_news"].'.jpg" alt="" class="img-responsive">'.
                                    '</div>'.
                                '</div>'.
                            '</div>'.
                            '<div class="col-md-7">'.
                                '<div class="post-story" style="margin-top:10px;">'.
                                    '<div class="post-story-body clearfix" style="font-size:13px;" >'.
                                        '<p class="txt1" style="font-size:13px;" >'.
                                            '<a class="hover_oranye_tipis" style="color:#ffc925; text-decoration:none;" href="news_details.php?details='.$faq[$k]["ID_news"].' ">'.
                                                '<font  style="font-size: 25px; font-weight: bold; color:#ffc925; line-height: 80%"> '.$faq[$k]["post_title"].' </font>'.
                                            '</a>'.
                                            '<br>'.
                                            '<p style="text-align:justify; font-size:13px;">';
                                            $output .= ''.strip_tags(substr($faq[$k]["post_content"],0,200)).'..';

                                                    // $temp = explode("/>", $faq[$k][3]);
                                                    //
                                                    // if($temp[0]==""){
                                                    //     echo substr(htmlspecialchars_decode($temp[1]),0,180);
                                                        $output .= '&nbsp;<a class="hover_oranye_tipis" style="background:#ffc925; color:black; padding:2px; text-decoration:none;" href="news_details.php?details='.$faq[$k]["ID_news"].' ">Read More</a>';
                                                    // }else{
                                                    //     echo substr(htmlspecialchars_decode($data_news_1[3]),0,180);
                                                    // }
                                            $output .= '</p>'.
                                            '<i>Category : '.$faq[$k]["Category"].' </i>'.
                                            '| <i> Release Date : '.$faq[$k]["post_date"].' </i>'.
                                        '</p>'.
                                    '</div>'.
                                '</div>'.
                            '</div>'.
                    '</div>';

 // akhir$nama_kategori[1].' | '.

}
if(!empty($perpageresult)) {
$output .= '<div id="pagination">' . $perpageresult . '</div>';
}
print $output;




?>
