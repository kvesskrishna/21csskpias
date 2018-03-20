<?php
require_once('api_auth.php');

if ($response['auth_status']==1) { 

$verb = $_SERVER['REQUEST_METHOD'];

//HANDLE POST REQUEST START
//-----------------------
function insert_event()
	{
		global $mysqli;
		
		$title = mysqli_real_escape_string($mysqli,$_POST['event_title']);
		$description = mysqli_real_escape_string($mysqli,$_POST['event_description']);
		$date = mysqli_real_escape_string($mysqli,$_POST['event_date']);
	

		$query = "INSERT INTO kpias_latestevents (event_title, event_description, event_date) VALUES ('{$title}', '{$description}', '{$date}')";
		if($mysqli->query($query))
		{
			$response=array(
				
				'status' => 1,
				'status_message' =>'Added Successfully.',
				'registration_id'=>mysqli_insert_id($mysqli)
			);
		}
		else
			$response=array(
				
				'status' => 0,
				'status_message' =>'Addition Failed.',
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
	function get_events($event_id=0){
		global $mysqli;

		$query="SELECT * FROM kpias_latestevents";
		if($event_id != 0)
		{
			$query.=" WHERE event_id=".$event_id." LIMIT 1";
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
		insert_event();
		break;
		
	case 'GET':
		if(!empty($_GET["event_id"]))
			{
				$event_id=intval($_GET["event_id"]);
				get_events($event_id);
			}
			else
			{
				get_events();
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