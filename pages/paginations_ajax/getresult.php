<?php
require_once("dbcontroller.php");
require_once("pagination.class.php");
$db_handle = new DBController();
$perPage = new PerPage();

$sql = "SELECT * FROM epa ORDER BY ID DESC ";
$sql_category="SELECT * FROM epa AS N INNER JOIN category AS C ON C.ID = N.ID ";
$paginationlink = "paginations_ajax/getresult.php?page=";    
$pagination_setting = $_GET["pagination_setting"];
// $sql_category = "SELECT * FROM news AS N INNER JOIN category AS C ON C.ID = N.ID";               
$page = 1;
if(!empty($_GET["page"])) {
$page = $_GET["page"];
}

$start = ($page-1)*$perPage->perpage;
if($start < 0) $start = 0;
$query1 =  $sql_category ;
$query =  $sql . " limit " . $start . "," . $perPage->perpage; 
// $query =  $sql_category."limit". $start . "," . $perPage->perpage; 
$faq = $db_handle->runQuery($query);
$faqs = $db_handle->runQuery($query1);



if(empty($_GET["rowcount"])) {
$_GET["rowcount"] = $db_handle->numRows($sql,$sql_category);
$_GET["rowcount1"] = $db_handle->numRows($sql_category);
}

if($pagination_setting == "prev-next") {
    $perpageresult = $perPage->getPrevNext($_GET["rowcount"], $paginationlink,$pagination_setting); 
} else {
    $perpageresult = $perPage->getAllPageLinks($_GET["rowcount"], $paginationlink,$pagination_setting); 
}


// if($pagination_setting == "prev-next") {
//     $perpageresult = $perPage->getPrevNext($_GET["rowcount1"], $paginationlink,$pagination_setting); 
// } else {
//     $perpageresult = $perPage->getAllPageLinks($_GET["rowcount1"], $paginationlink,$pagination_setting); 
// }


include('../../conn.php');

$output = '';

foreach($faq as $k=>$v) {
    
    // if($_GET['category']){
    //     $nama_kategori = mysql_fetch_array(mysql_query("SELECT * FROM category WHERE ID = '$faq[$k]['category']'asd"));
    // }else{
    //     $nama_kategori = mysql_fetch_array(mysql_query("SELECT * FROM category WHERE ID = '$faq[$k]['category']'"));
    // }

    // $kategorinya = mysqli_query($conn,"SELECT * FROM category WHERE ID = '$faq[$k]['post-author']'");
    // $nama_kategori = mysqli_fetch($conn, $kategorinya);

 // $output .= '<div class="question"><input type="hidden" id="rowcount" name="rowcount" value="' . $_GET["rowcount"] . '" />' . $faq[$k]["post_title"] . '</div>';

 // $output .= '<a href = "news_details.php?details='.$faq[$k]["ID"].' "> <font  style="font-size: 25px; font-weight: bold; color:#ffc925; line-height: 80%">'.$faq[$k]["post_title"].'</font></a>';




 $output .= '<div class="post post-short " data-animation="fadeInRight" data-animation-delay="500" style="margin-top:-20px; color: black;">'.
                        '<div class="container" style="margin-bottom:10vh;">'.
                            '<div class="col-md-5">'.
                                '<div class="post-header">'.
                                    '<div class="post-image">'.
                                        '<img style="width:100%;" src="../bahana_images_assets/epa/'.$faq[$k]["id"].'.jpg" alt="" class="img-responsive">'.
                                    '</div>'.
                                '</div>'.
                            '</div>'.
                            '<div class="col-md-7">'.
                                '<div class="post-story">'.
                                    '<div class="post-story-body clearfix"  >'.
                                        '<p class="txt1" >'.
                                            '<a class="hover_oranye_tipis" style="color:#ffc925; text-decoration:none;" href="event_details.php?details='.$faq[$k]["id"].' ">'.
                                                '<font  style="font-size: 25px; font-weight: bold; color:#ffc925; line-height: 80%"> '.$faq[$k]["judul_epa"].' </font>'.
                                            '</a>'.
                                            '<br>'.
                                            '<p style="text-align:justify;">';
                                                    $temp = explode("/>", $faq[$k][2]);

                                                    if($temp[0]==""){
                                                        echo substr(htmlspecialchars_decode($temp[1]),0,180);
                                                        $output .= '&nbsp;<a class="hover_oranye_tipis" style="background:#ffc925; color:black; padding:2px; text-decoration:none;" href="event_details.php?details='.$faq[$k]["id"].' ">Read More</a>'; 
                                                    }else{
                                                        echo substr(htmlspecialchars_decode($data_news_1[2]),0,180);
                                                    }
                                            $output .= '</p>'.
                                            ' <i> Release Date : '.$faq[$k]["tanggal"].' </i>'.
                                    '</div>'.
                                '</div>'.
                            '</div>'.
                        '</div>'.
                    '</div>';

 // akhir$nama_kategori[1].' | '.
                
}
if(!empty($perpageresult)) {
$output .= '<div id="paginations">' . $perpageresult . '</div>';
}
print $output;




?>



