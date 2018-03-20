<?php
session_start();
function createlatestevent(){

if (isset($_POST['additem'])) {

	$title=$_POST['event_title'];
	$description=$_POST['event_description'];
	$date=$_POST['event_date'];

	
	
 	$POST_DATA = array(
   'event_title' => $title,
   'event_description' => $description,
   'event_date' => $date
 );
 $curl = curl_init();
 curl_setopt($curl, CURLOPT_URL, 'http://www.kpias.com/webservices/latestEvents?api_key=160e64f13691a2f59d34492dc238f98e');
 curl_setopt($curl, CURLOPT_TIMEOUT, 30);
 curl_setopt($curl, CURLOPT_POST, 1);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($curl, CURLOPT_POSTFIELDS, $POST_DATA);
 $response = curl_exec($curl);
 curl_close ($curl);
 $result = json_decode($response,TRUE);
//echo $result['status']."<br>".$result['status_message'];	
	$_SESSION['message'] = $result['status_message'];
	header('Location:latestEvents.php');
}

}
function updatelatestevent(){

if (isset($_POST['edititem'])) {

	$id=$_POST['event_id'];
	$status=$_POST['event_status'];
	$title=$_POST['event_title'];
	$description=$_POST['event_description'];
	$date=$_POST['event_date'];
 	$POST_DATA = array(
 		'event_id'=>$id,
 		'event_status'=>$status,
   'event_title' => $title,
   'event_description' => $description,
   'event_date' => $date
 );
 	var_dump($POST_DATA);
 	
 $curl = curl_init();
 curl_setopt($curl, CURLOPT_URL, 'http://www.kpias.com/webservices/latestEventsUpdate?api_key=160e64f13691a2f59d34492dc238f98e');
 curl_setopt($curl, CURLOPT_TIMEOUT, 30);
 curl_setopt($curl, CURLOPT_POST, 1);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($curl, CURLOPT_POSTFIELDS, $POST_DATA);
 $response = curl_exec($curl);
 curl_close ($curl);
 $result = json_decode($response,TRUE);
//echo $result['status']."<br>".$result['status_message'];	
	$_SESSION['message'] = $result['status_message'];
	header('Location:latestEvents.php');

}

}
function createtopcourse(){

if (isset($_POST['additem'])) {

	$title=$_POST['course_title'];
	$description=$_POST['course_description'];
	$duration=$_POST['course_duration'];
	$eligibility=$_POST['course_eligibility'];
	$category=$_POST['course_category'];
	$thumbnailfn=$_FILES['course_thumbnail']['name'];
	$thumbnailfd=$_FILES['course_thumbnail']['tmp_name'];
	$thumbnailhandle=fopen($thumbnailfd, "r");
	$thumbnaildata=fread($thumbnailhandle, filesize($thumbnailfd));
	
	
 	$POST_DATA = array(
   'course_title' => $title,
   'course_description' => $description,
   'course_duration' => $duration,
   'course_eligibility' => $eligibility,
   'course_category'=> $category,
    'thumbnail_file_data' => base64_encode($thumbnaildata),
   'thumbnail_file_name' => $thumbnailfn
 );
 $curl = curl_init();
 curl_setopt($curl, CURLOPT_URL, 'http://www.kpias.com/webservices/topCourses?api_key=160e64f13691a2f59d34492dc238f98e');
 curl_setopt($curl, CURLOPT_TIMEOUT, 30);
 curl_setopt($curl, CURLOPT_POST, 1);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($curl, CURLOPT_POSTFIELDS, $POST_DATA);
 $response = curl_exec($curl);
 curl_close ($curl);
 $result = json_decode($response,TRUE);
//echo $result['status']."<br>".$result['status_message'];	
	$_SESSION['message'] = $result['status_message'];
	header('Location:topCourses.php');
}

}

function updatetopcourse(){

if (isset($_POST['edititem'])) {

	$id=$_POST['course_id'];
	$status=$_POST['course_status'];
	$title=$_POST['course_title'];
	$description=$_POST['course_description'];
	$duration=$_POST['course_duration'];
	$eligibility=$_POST['course_eligibility'];
	$category=$_POST['course_category'];

$thumbnaildata="";
$thumbnailfn=$_POST['old_thumbnail'];
if (!empty($_FILES['course_thumbnail']['name'])) {
	# code...
$thumbnailfn=$_FILES['course_thumbnail']['name'];
	$thumbnailfd=$_FILES['course_thumbnail']['tmp_name'];
	$thumbnailhandle=fopen($thumbnailfd, "r");
	$thumbnaildata=fread($thumbnailhandle, filesize($thumbnailfd));

}
	
 	$POST_DATA = array(
 		'course_id'=>$id,
   'course_title' => $title,
   'course_description' => $description,
   'course_duration' => $duration,
   'course_eligibility' => $eligibility,
   'course_category'=> $category,
   'course_status'=>$status,
    'thumbnail_file_data' => base64_encode($thumbnaildata),
   'thumbnail_file_name' => $thumbnailfn,
   'oldfile'=>$_POST['old_thumbnail']
 );
 	var_dump($POST_DATA);
 	
 $curl = curl_init();
 curl_setopt($curl, CURLOPT_URL, 'http://www.kpias.com/webservices/topCoursesUpdate?api_key=160e64f13691a2f59d34492dc238f98e');
 curl_setopt($curl, CURLOPT_TIMEOUT, 30);
 curl_setopt($curl, CURLOPT_POST, 1);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($curl, CURLOPT_POSTFIELDS, $POST_DATA);
 $response = curl_exec($curl);
 curl_close ($curl);
 $result = json_decode($response,TRUE);
//echo $result['status']."<br>".$result['status_message'];	
	$_SESSION['message'] = $result['status_message'];
	header('Location:topCourses.php');

}

}

function updatevisionmission(){

if (isset($_POST['edititem'])) {

	$id=$_POST['content_id'];
	$status=$_POST['content_status'];
	$title=$_POST['content_title'];
	$description=$_POST['content_description'];
	
	
 	$POST_DATA = array(
 		'content_id'=>$id,
   'content_title' => $title,
   'content_description' => $description,
   'content_status'=>$status
 );
 	var_dump($POST_DATA);
 	
 $curl = curl_init();
 curl_setopt($curl, CURLOPT_URL, 'http://www.kpias.com/webservices/visionMission?api_key=160e64f13691a2f59d34492dc238f98e');
 curl_setopt($curl, CURLOPT_TIMEOUT, 30);
 curl_setopt($curl, CURLOPT_POST, 1);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($curl, CURLOPT_POSTFIELDS, $POST_DATA);
 $response = curl_exec($curl);
 curl_close ($curl);
 $result = json_decode($response,TRUE);
//echo $result['status']."<br>".$result['status_message'];	
	$_SESSION['message'] = $result['status_message'];
	header('Location:visionMission.php');

}

}

function createwinner(){

if (isset($_POST['additem'])) {

	$name=$_POST['winner_name'];
	$year=$_POST['winner_year'];
	$rank=$_POST['winner_rank'];
	$rollno=$_POST['winner_rollno'];

	$course=$_POST['winner_course'];
	$testimonial=$_POST['winnter_testimonial'];
	$thumbnailfn=$_FILES['winner_thumbnail']['name'];
	$thumbnailfd=$_FILES['winner_thumbnail']['tmp_name'];
	$thumbnailhandle=fopen($thumbnailfd, "r");
	$thumbnaildata=fread($thumbnailhandle, filesize($thumbnailfd));
	
	
 	$POST_DATA = array(
   'winner_name' => $name,
   'winner_year' => $year,
   'winner_rank' => $rank,
   'winner_rollno' => $rollno,
   'winner_course' => $course,
   'winnter_testimonial'=>$testimonial,
    'thumbnail_file_data' => base64_encode($thumbnaildata),
   'thumbnail_file_name' => $thumbnailfn
 );
 $curl = curl_init();
 curl_setopt($curl, CURLOPT_URL, 'http://www.kpias.com/webservices/ourWinners?api_key=160e64f13691a2f59d34492dc238f98e');
 curl_setopt($curl, CURLOPT_TIMEOUT, 30);
 curl_setopt($curl, CURLOPT_POST, 1);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($curl, CURLOPT_POSTFIELDS, $POST_DATA);
 $response = curl_exec($curl);
 curl_close ($curl);
 $result = json_decode($response,TRUE);
//echo $result['status']."<br>".$result['status_message'];	
	$_SESSION['message'] = $result['status_message'];
	header('Location:ourWinners.php');
}

}

function updatewinner(){

if (isset($_POST['edititem'])) {

	$id=$_POST['winner_id'];
	$name=$_POST['winner_name'];
		$testimonial=$_POST['winnter_testimonial'];
$year=$_POST['winner_year'];
	$rank=$_POST['winner_rank'];
	$rollno=$_POST['winner_rollno'];
	$course=$_POST['winner_course'];
	$status=$_POST['winner_status'];

$thumbnaildata="";
$thumbnailfn=$_POST['old_thumbnail'];
if (!empty($_FILES['winner_thumbnail']['name'])) {
	# code...
$thumbnailfn=$_FILES['winner_thumbnail']['name'];
	$thumbnailfd=$_FILES['winner_thumbnail']['tmp_name'];
	$thumbnailhandle=fopen($thumbnailfd, "r");
	$thumbnaildata=fread($thumbnailhandle, filesize($thumbnailfd));

}
	
 	$POST_DATA = array(
 		'winner_id'=>$id,
  'winner_name' => $name,
   'winner_course' => $course,
      'winnter_testimonial'=>$testimonial,
'winner_year' => $year,
   'winner_rank' => $rank,
   'winner_rollno' => $rollno,
   'winner_status'=>$status,
    'thumbnail_file_data' => base64_encode($thumbnaildata),
   'thumbnail_file_name' => $thumbnailfn,
   'oldfile'=>$_POST['old_thumbnail']
 );
 	var_dump($POST_DATA);
 	
 $curl = curl_init();
 curl_setopt($curl, CURLOPT_URL, 'http://www.kpias.com/webservices/ourWinnersUpdate?api_key=160e64f13691a2f59d34492dc238f98e');
 curl_setopt($curl, CURLOPT_TIMEOUT, 30);
 curl_setopt($curl, CURLOPT_POST, 1);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($curl, CURLOPT_POSTFIELDS, $POST_DATA);
 $response = curl_exec($curl);
 curl_close ($curl);
 $result = json_decode($response,TRUE);
//echo $result['status']."<br>".$result['status_message'];	
	$_SESSION['message'] = $result['status_message'];
	header('Location:ourWinners.php');

}

}

function updatecontent(){

if (isset($_POST['edititem'])) {

	$id=$_POST['section_id'];
	$status=$_POST['section_status'];
	$title=$_POST['section_title'];
	$content=$_POST['section_content'];
	$page=$_POST['page'];
	
 	$POST_DATA = array(
 		'section_id'=>$id,
   'section_title' => $title,
   'section_content' => $content,
   'section_status'=>$status,
   'page'=>$page
 );
 	var_dump($POST_DATA);
 	
 $curl = curl_init();
 curl_setopt($curl, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e');
 curl_setopt($curl, CURLOPT_TIMEOUT, 30);
 curl_setopt($curl, CURLOPT_POST, 1);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($curl, CURLOPT_POSTFIELDS, $POST_DATA);
 $response = curl_exec($curl);
 curl_close ($curl);
 $result = json_decode($response,TRUE);
//echo $result['status']."<br>".$result['status_message'];	
	$_SESSION['message'] = $result['status_message'];
	header('Location:content.php?page='.$page);

}

}
function createvideo(){

if (isset($_POST['additem'])) {

	$title=$_POST['video_title'];
	$link=$_POST['video_link'];
	$comment=$_POST['video_comment'];
	
 	$POST_DATA = array(
   'video_title' => $title,
   'video_link' => $link,
   'video_comment'=>$comment
 );
 	var_dump($POST_DATA);
 	
 $curl = curl_init();
 curl_setopt($curl, CURLOPT_URL, 'http://www.kpias.com/webservices/videoGallery?api_key=160e64f13691a2f59d34492dc238f98e');
 curl_setopt($curl, CURLOPT_TIMEOUT, 30);
 curl_setopt($curl, CURLOPT_POST, 1);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($curl, CURLOPT_POSTFIELDS, $POST_DATA);
 $response = curl_exec($curl);
 curl_close ($curl);
 $result = json_decode($response,TRUE);
//echo $result['status']."<br>".$result['status_message'];	
	$_SESSION['message'] = $result['status_message'];
	header('Location:videogallery.php');

}

}



function updatevideo(){

if (isset($_POST['edititem'])) {

	$id=$_POST['video_id'];
	$status=$_POST['video_status'];
	$title=$_POST['video_title'];
	$link=$_POST['video_link'];
	$comment=$_POST['video_comment'];
	
 	$POST_DATA = array(
 		'video_id'=>$id,
   'video_title' => $title,
   'video_link' => $link,
   'video_status'=>$status,
   'video_comment'=>$comment
 );
 	var_dump($POST_DATA);
 	
 $curl = curl_init();
 curl_setopt($curl, CURLOPT_URL, 'http://www.kpias.com/webservices/videoGalleryUpdate?api_key=160e64f13691a2f59d34492dc238f98e');
 curl_setopt($curl, CURLOPT_TIMEOUT, 30);
 curl_setopt($curl, CURLOPT_POST, 1);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($curl, CURLOPT_POSTFIELDS, $POST_DATA);
 $response = curl_exec($curl);
 curl_close ($curl);
 $result = json_decode($response,TRUE);
//echo $result['status']."<br>".$result['status_message'];	
	$_SESSION['message'] = $result['status_message'];
	header('Location:videogallery.php');

}

}
function createcontent(){

if (isset($_POST['additem'])) {

	$title=$_POST['section_title'];
	$content=$_POST['section_content'];
	$page=$_POST['page'];
	
 	$POST_DATA = array(
   'section_title' => $title,
   'section_content' => $content,
   'page'=>$page
 );
 	var_dump($POST_DATA);
 	
 $curl = curl_init();
 curl_setopt($curl, CURLOPT_URL, 'http://www.kpias.com/webservices/addcontent?api_key=160e64f13691a2f59d34492dc238f98e');
 curl_setopt($curl, CURLOPT_TIMEOUT, 30);
 curl_setopt($curl, CURLOPT_POST, 1);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($curl, CURLOPT_POSTFIELDS, $POST_DATA);
 $response = curl_exec($curl);
 curl_close ($curl);
 $result = json_decode($response,TRUE);
//echo $result['status']."<br>".$result['status_message'];	
	$_SESSION['message'] = $result['status_message'];
	header('Location:content.php?page='.$page);

}

}
function creategallery(){

if (isset($_POST['additem'])) {

	$title=$_POST['gallery_title'];
	$comment=$_POST['gallery_comment'];
	
 	$POST_DATA = array(
   'gallery_title' => $title,
   'gallery_comment'=>$comment
 );
 	var_dump($POST_DATA);
 	
 $curl = curl_init();
 curl_setopt($curl, CURLOPT_URL, 'http://www.kpias.com/webservices/gallery?api_key=160e64f13691a2f59d34492dc238f98e');
 curl_setopt($curl, CURLOPT_TIMEOUT, 30);
 curl_setopt($curl, CURLOPT_POST, 1);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($curl, CURLOPT_POSTFIELDS, $POST_DATA);
 $response = curl_exec($curl);
 curl_close ($curl);
 $result = json_decode($response,TRUE);
//echo $result['status']."<br>".$result['status_message'];	
	$_SESSION['message'] = $result['status_message'];
	header('Location:imagegallery.php');

}

}



function updategallery(){

if (isset($_POST['edititem'])) {

	$id=$_POST['gallery_id'];
	$status=$_POST['gallery_status'];
	$title=$_POST['gallery_title'];
	$comment=$_POST['gallery_comment'];
	
 	$POST_DATA = array(
 		'gallery_id'=>$id,
   'gallery_title' => $title,
   'gallery_status'=>$status,
   'gallery_comment'=>$comment
 );
 	var_dump($POST_DATA);
 	
 $curl = curl_init();
 curl_setopt($curl, CURLOPT_URL, 'http://www.kpias.com/webservices/galleryUpdate?api_key=160e64f13691a2f59d34492dc238f98e');
 curl_setopt($curl, CURLOPT_TIMEOUT, 30);
 curl_setopt($curl, CURLOPT_POST, 1);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($curl, CURLOPT_POSTFIELDS, $POST_DATA);
 $response = curl_exec($curl);
 curl_close ($curl);
 $result = json_decode($response,TRUE);
//echo $result['status']."<br>".$result['status_message'];	
	$_SESSION['message'] = $result['status_message'];
	header('Location:imagegallery.php');

}

}
function creategalleryimg(){

if (isset($_POST['additem'])) {

	$title=$_POST['img_title'];
		$comment=$_POST['img_comment'];
$galleryid=$_POST['gallery_id'];

$thumbnaildata="";
if (!empty($_FILES['img_file']['name'])) {
	# code...
$thumbnailfn=$_FILES['img_file']['name'];
	$thumbnailfd=$_FILES['img_file']['tmp_name'];
	$thumbnailhandle=fopen($thumbnailfd, "r");
	$thumbnaildata=fread($thumbnailhandle, filesize($thumbnailfd));

}
	
 	$POST_DATA = array(
      'img_title'=>$title,
'gallery_id'=>$galleryid,
   'img_comment'=>$comment,
    'thumbnail_file_data' => base64_encode($thumbnaildata),
   'thumbnail_file_name' => $thumbnailfn,
 );
 	var_dump($POST_DATA);
 	
 $curl = curl_init();
 curl_setopt($curl, CURLOPT_URL, 'http://www.kpias.com/webservices/galleryImg?api_key=160e64f13691a2f59d34492dc238f98e');
 curl_setopt($curl, CURLOPT_TIMEOUT, 30);
 curl_setopt($curl, CURLOPT_POST, 1);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($curl, CURLOPT_POSTFIELDS, $POST_DATA);
 $response = curl_exec($curl);
 curl_close ($curl);
 $result = json_decode($response,TRUE);
//echo $result['status']."<br>".$result['status_message'];	
	$_SESSION['message'] = $result['error'];
	header('Location:editgallery.php?id='.$galleryid);

}

}

function createca(){

if (isset($_POST['additem'])) {

	$title=$_POST['ca_title'];
	$description=$_POST['ca_description'];
	$filefn=$_FILES['ca_file']['name'];
	$filefd=$_FILES['ca_file']['tmp_name'];
	$filehandle=fopen($filefd, "r");
	$filedata=fread($filehandle, filesize($filefd));
	$category=$_POST['category'];
	
 	$POST_DATA = array(
   'ca_title' => $title,
   'ca_description' => $description,
    'file_data' => base64_encode($filedata),
   'file_name' => $filefn,
   'category' =>$category
 );
 $curl = curl_init();
 curl_setopt($curl, CURLOPT_URL, 'http://www.kpias.com/webservices/studentzone?api_key=160e64f13691a2f59d34492dc238f98e');
 curl_setopt($curl, CURLOPT_TIMEOUT, 30);
 curl_setopt($curl, CURLOPT_POST, 1);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($curl, CURLOPT_POSTFIELDS, $POST_DATA);
 $response = curl_exec($curl);
 curl_close ($curl);
 $result = json_decode($response,TRUE);
//echo $result['status']."<br>".$result['status_message'];	
	$_SESSION['message'] = $result['status_message'];
	header('Location:studentzone.php?cat='.$category);
}

}

function updateca(){

if (isset($_POST['edititem'])) {

	$id=$_POST['ca_id'];
	$title=$_POST['ca_title'];
		$description=$_POST['ca_description'];
$category=$_POST['category'];
	$status=$_POST['ca_status'];

$filedata="";
$filefn=$_POST['old_file'];
if (!empty($_FILES['ca_file']['name'])) {
	# code...
$filefn=$_FILES['ca_file']['name'];
	$filefd=$_FILES['ca_file']['tmp_name'];
	$filehandle=fopen($filefd, "r");
	$filedata=fread($filehandle, filesize($filefd));

}
	
 	$POST_DATA = array(
 		'ca_id'=>$id,
  'ca_title' => $title,
   'ca_description' => $description,
      'ca_status'=>$status,
    'file_data' => base64_encode($filedata),
   'file_name' => $filefn,
   'oldfile'=>$_POST['old_file'],
   'category'=>$_POST['category']
 );
 	//var_dump($POST_DATA);
 	
 $curl = curl_init();
 curl_setopt($curl, CURLOPT_URL, 'http://www.kpias.com/webservices/studentzoneUpdate?api_key=160e64f13691a2f59d34492dc238f98e');
 curl_setopt($curl, CURLOPT_TIMEOUT, 30);
 curl_setopt($curl, CURLOPT_POST, 1);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($curl, CURLOPT_POSTFIELDS, $POST_DATA);
 $response = curl_exec($curl);
 curl_close ($curl);
 $result = json_decode($response,TRUE);
//echo $result['status']."<br>".$result['status_message'];	
	$_SESSION['message'] = $result['status_message'];
header('Location:studentzone.php?cat='.$category);
}

}

//die(var_dump($_POST));
$action = $_POST['action'];

switch ($action) {
	case 'createlatestevent':
		# code...
	createlatestevent();
		break;
	case 'updatelatestevent':
		# code...
	updatelatestevent();
		break;
	case 'createtopcourse':
		# code...
	createtopcourse();
		break;
	case 'updatetopcourse':
		# code...
	updatetopcourse();
		break;
	case 'updatevisionmission':
		# code...
	updatevisionmission();
		break;
	case 'updatewinner':
		# code...
	updatewinner();
		break;
case 'createwinner':
		# code...
	createwinner();
		break;
	case 'updatecontent':
		# code...
	updatecontent();
		break;
		case 'createcontent':
		# code...
	createcontent();
		break;
	case 'updatevideo':
		# code...
	updatevideo();
		break;
		case 'createvideo':
		# code...
	createvideo();
		break;
		case 'updategallery':
		# code...
	updategallery();
		break;
		case 'creategallery':
		# code...
	creategallery();
		break;
		case 'creategalleryimg':
		# code...
	creategalleryimg();
		break;
		case 'createca':
		# code...
	createca();
		break;
		case 'updateca':
		# code...
	updateca();
		break;
	
	default:
		# code...
		break;
}
?>