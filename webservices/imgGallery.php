<?php
require_once('api_auth.php');

if ($response['auth_status']==1) { 

$verb = $_SERVER['REQUEST_METHOD'];

//HANDLE POST REQUEST START
//-----------------------
//-----------------------
//HANDLE POST REQUEST END


function get_gallery($gallery_id=0){
	global $mysqli;

		$query="SELECT * FROM kpias_gallery";
		if($gallery_id != 0)
		{
			$query.=" WHERE gallery_id=".$gallery_id;
		}
		$result=$mysqli->query($query);
		if (!$result) {
			# code...
			die($mysqli->error);
		}

		while($row=$result->fetch_assoc())
		{
			$sql="SELECT * FROM kpias_galleryimg WHERE gallery_id=".$row['gallery_id'];
			$res=$mysqli->query($sql);
			while ($irow=$res->fetch_assoc()) {
				# code...
				$row['images'][]=$irow;
			}
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