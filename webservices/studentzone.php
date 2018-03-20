<?php
require_once('api_auth.php');

if ($response['auth_status']==1) { 

$verb = $_SERVER['REQUEST_METHOD'];

//HANDLE POST REQUEST START
//-----------------------
function insert_currentaffair()
	{
		global $mysqli;
		$enfile = $_POST['file_data'];
		$defile = base64_decode($enfile);
		$file = "../studentzone/".time().$_POST['file_name'];
		$file_path = "http://www.kpias.com".substr($file, 2);
		file_put_contents($file, $defile);
		$description = mysqli_real_escape_string($mysqli,$_POST['ca_description']);
		$title = mysqli_real_escape_string($mysqli,$_POST['ca_title']);
		$category=$_POST['category'];
		$query = "INSERT INTO kpias_currentaffairs (ca_title, ca_description, ca_file, category) VALUES ('{$title}', '{$description}', '{$file_path}', '{$category}')";
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
function get_currentaffairs($ca_id=0){
	global $mysqli;

		$query="SELECT * FROM kpias_currentaffairs WHERE category='".$_GET['category']."'";
		if($ca_id != 0)
		{
			$query.=" AND ca_id=".$ca_id." LIMIT 1";
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
		if(!empty($_GET["ca_id"]))
			{
				$ca_id=intval($_GET["ca_id"]);
				get_currentaffairs($ca_id);
			}
			else
			{
				get_currentaffairs();
			}
		break;
	case 'POST':
		insert_currentaffair();
		break;
	
	default:
		http_response_code(405);
		break;
}

}
?>