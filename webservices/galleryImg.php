<?php
require_once('api_auth.php');

if ($response['auth_status']==1) { 

$verb = $_SERVER['REQUEST_METHOD'];

//HANDLE POST REQUEST START
//-----------------------
function insert_img()
	{
		global $mysqli;
		$thumbnail_enfile = $_POST['thumbnail_file_data'];
		$thumbnail_defile = base64_decode($thumbnail_enfile);
		$thumbnail_file = "../gallery/".time().$_POST['thumbnail_file_name'];
		$thumbnail_path = "http://www.kpias.com".substr($thumbnail_file, 2);
		file_put_contents($thumbnail_file, $thumbnail_defile);
	$galleryid=$_POST['gallery_id'];
		$title = mysqli_real_escape_string($mysqli,$_POST['img_title']);
		$comment = mysqli_real_escape_string($mysqli,$_POST['img_comment']);
		$query = "INSERT INTO kpias_galleryimg (img_title, gallery_id, img_comment, img_file) VALUES ('{$title}', $galleryid, '{$comment}','{$thumbnail_path}')";
		if($mysqli->query($query))
		{
			$response=array(
				
				'status' => 1,
				'status_message' =>'Image Added Successfully.'
			);
		}
		else
			$response=array(
				
				'status' => 0,
				'status_message' =>'Image Adding Failed.',
				'query' => $query,
				'error' => $mysqli->error
			);
		header('Content-Type: application/json');
		echo json_encode($response, JSON_UNESCAPED_SLASHES);
	}
//-----------------------
//HANDLE POST REQUEST END


function get_gallery($gallery_id=0){
	global $mysqli;

		$query="SELECT images.*,gallery.* FROM kpias_gallery gallery, kpias_galleryimg images WHERE gallery.gallery_id=images.gallery_id";
		if($gallery_id != 0)
		{
			$query.=" AND gallery.gallery_id=".$gallery_id;
		}
		$result=$mysqli->query($query);
		if (!$result) {
			# code...
			die($mysqli->error);
		}
		while($row=$result->fetch_assoc())
		{
			$response[]=$row;
		}
		header('Content-Type: application/json');
		echo json_encode($response, JSON_UNESCAPED_SLASHES);
}
//-----------------------
//HANDLE GET REQUEST END





switch ($verb) {
	case 'GET':
		if(!empty($_GET["gallery_id"]))
			{
				$gallery_id=intval($_GET["gallery_id"]);
				get_gallery($gallery_id);
			}
			else
			{
				get_gallery();
			}
		break;
	case 'POST':
		insert_img();
		break;
	
	default:
		http_response_code(405);
		break;
}

}
?>