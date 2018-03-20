<?php
require_once('api_auth.php');

if ($response['auth_status']==1) { 

$verb = $_SERVER['REQUEST_METHOD'];

//HANDLE POST REQUEST START
//-----------------------
function insert_course()
	{
		global $mysqli;
		$thumbnail_enfile = $_POST['thumbnail_file_data'];
		$thumbnail_defile = base64_decode($thumbnail_enfile);
		$thumbnail_file = "../courses/".time().$_POST['thumbnail_file_name'];
		$thumbnail_path = "http://www.kpias.com".substr($thumbnail_file, 2);
		file_put_contents($thumbnail_file, $thumbnail_defile);
	
		$title = mysqli_real_escape_string($mysqli,$_POST['course_title']);
		$category = mysqli_real_escape_string($mysqli,$_POST['course_category']);
		$description = mysqli_real_escape_string($mysqli,$_POST['course_description']);
		$duration = mysqli_real_escape_string($mysqli,$_POST['course_duration']);
		$eligibility = mysqli_real_escape_string($mysqli,$_POST['course_eligibility']);
		
		$query = "INSERT INTO kpias_courses (course_title, course_category, course_description, course_duration,course_eligibility,course_thumbnail) VALUES ('{$title}', '{$category}', '{$description}','{$duration}','{$eligibility}','{$thumbnail_path}')";
		if($mysqli->query($query))
		{
			$response=array(
				
				'status' => 1,
				'status_message' =>'Course Added Successfully.'
			);
		}
		else
			$response=array(
				
				'status' => 0,
				'status_message' =>'Course Adding Failed.',
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
function get_courses($course_id=0){
	global $mysqli;

		$query="SELECT * FROM kpias_courses";
		if($course_id != 0)
		{
			$query.=" WHERE course_id=".$course_id." LIMIT 1";
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
		if(!empty($_GET["course_id"]))
			{
				$course_id=intval($_GET["course_id"]);
				get_courses($course_id);
			}
			else
			{
				get_courses();
			}
		break;
	case 'POST':
		insert_course();
		break;
	
	default:
		http_response_code(405);
		break;
}

}
?>