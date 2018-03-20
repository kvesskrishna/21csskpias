<?php
require_once('api_auth.php');

if ($response['auth_status']==1) { 

$verb = $_SERVER['REQUEST_METHOD'];

//HANDLE POST REQUEST START
//-----------------------
function update_content()
	{
		global $mysqli;
		$id=$_POST['section_id'];
		$status=$_POST['section_status'];
		$title = mysqli_real_escape_string($mysqli,$_POST['section_title']);
		$content = mysqli_real_escape_string($mysqli,$_POST['section_content']);
		$query = "UPDATE kpias_content SET section_title='{$title}', section_content='{$content}', section_status='{$status}', section_modified=now() WHERE section_id=$id";
		if($mysqli->query($query))
		{
			$response=array(
				
				'status' => 1,
				'status_message' =>'Updated Successfully.',
				'registration_id'=>mysqli_insert_id($mysqli)
			);
		}
		else
			$response=array(
				
				'status' => 0,
				'status_message' =>'Updation Failed.',
				'query' => $query,
				'error' => $mysqli->error
			);
		header('Content-Type: application/json');
		echo json_encode($response, JSON_UNESCAPED_SLASHES);
	}
//-----------------------
//HANDLE POST REQUEST END


//HANDLE GET REQUEST START
//-----------------------
	function get_content($section_id=0){
		global $mysqli;

		$query="SELECT * FROM kpias_content WHERE page='".$_GET['page']."' ORDER BY ca_id DESC ";
		if($section_id != 0)
		{
			$query="SELECT * FROM kpias_content WHERE page='".$_GET['page']."' AND section_id=".$section_id." LIMIT 1";
		}
		$result=$mysqli->query($query);
		while($row=$result->fetch_assoc())
		{
			$response[]=$row;
		}
		header('Content-Type: application/json');
		echo json_encode($response, JSON_UNESCAPED_SLASHES);
	}
//-----------------------
//HANDLE GET REQUEST END





//HANDLE PUT REQUEST START
//-----------------------

//-----------------------
//HANDLE PUT REQUEST END


//HANDLE DELETE REQUEST START
//-----------------------

//-----------------------
//HANDLE DELETE REQUEST END

switch ($verb) {
	case 'POST':
		update_content();
		break;
		
	case 'GET':
		if(!empty($_GET["section_id"]))
			{
				$section_id=intval($_GET["section_id"]);
				get_content($section_id);
			}
			else
			{
				get_content();
			}
		break;
	
	/*
	case 'PUT':
		$registration_id=intval($_GET["registration_id"]);
		update_registration($registration_id);
		break;
	case 'DELETE':
		$registration_id=intval($_GET["registration_id"]);
		delete_registration($registration_id);
		break;
		*/
	default:
		http_response_code(405);
		break;
}

}
?>