<?php
require_once('api_auth.php');

if ($response['auth_status']==1) { 

$verb = $_SERVER['REQUEST_METHOD'];

//HANDLE POST REQUEST START
//-----------------------
function insert_winner()
	{
		global $mysqli;
		$thumbnail_enfile = $_POST['thumbnail_file_data'];
		$thumbnail_defile = base64_decode($thumbnail_enfile);
		$thumbnail_file = "../winners/".time().$_POST['thumbnail_file_name'];
		$thumbnail_path = "http://www.kpias.com".substr($thumbnail_file, 2);
		file_put_contents($thumbnail_file, $thumbnail_defile);
		$testimonial = mysqli_real_escape_string($mysqli,$_POST['winner_testimonial']);
		$year=$_POST['winner_year'];
	$rank=$_POST['winner_rank'];
	$rollno=$_POST['winner_rollno'];
		$name = mysqli_real_escape_string($mysqli,$_POST['winner_name']);
		$course = mysqli_real_escape_string($mysqli,$_POST['winner_course']);
		$query = "INSERT INTO kpias_winners (winner_name, winner_course, winner_thumbnail, winner_testimonial, winner_year, winner_rank, winner_rollno) VALUES ('{$name}', '{$course}', '{$thumbnail_path}','{$testimonial}','{$year}',{$rank},'{$rollno}')";
		if($mysqli->query($query))
		{
			$response=array(
				
				'status' => 1,
				'status_message' =>'Added Successfully.'
			);
		}
		else
			$response=array(
				
				'status' => 0,
				'status_message' =>'Adding Failed.',
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
function get_winners($winner_id=0){
	global $mysqli;

		$query="SELECT * FROM kpias_winners";
		if($winner_id != 0)
		{
			$query.=" WHERE winner_id=".$winner_id;
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





switch ($verb) {
	case 'GET':
		if(!empty($_GET["winner_id"]))
			{
				$winner_id=intval($_GET["winner_id"]);
				get_winners($winner_id);
			}
			else
			{
				get_winners();
			}
		break;
	case 'POST':
		insert_winner();
		break;
	
	default:
		http_response_code(405);
		break;
}

}
?>