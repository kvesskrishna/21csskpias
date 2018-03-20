<?php
require_once('api_auth.php');

if ($response['auth_status']==1) { 

$verb = $_SERVER['REQUEST_METHOD'];

switch ($verb) {
	case 'GET':
		if(!empty($_GET["service_id"]))
			{
				$service_id=intval($_GET["service_id"]);
				get_services($service_id);
			}
			else
			{
				get_services();
			}
		break;
	case 'POST':
		insert_service();
		break;
	case 'PUT':
		$service_id=intval($_GET["service_id"]);
		update_service($service_id);
		break;
	case 'DELETE':
		$service_id=intval($_GET["service_id"]);
		delete_service($service_id);
		break;
	default:
		http_response_code(405);
		break;
}

//HANDLE GET REQUEST START
//-----------------------
function get_services($service_id=0)
	{
		$query="SELECT * FROM 21css_services WHERE service_status='active'";
		if($service_id != 0)
		{
			$query.=" AND service_id=".$service_id." LIMIT 1";
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


//HANDLE POST REQUEST START
//-----------------------
function insert_service()
	{
		$service_name=$_POST["service_name"];
		$about=$_POST["about"];
		$key_offerings=$_POST['key_offerings'];
		$implementation_services=$_POST["implementation_services"];
		$service_image="http://www.21cssindia.com/img/services/default.png";
		if (is_uploaded_file($_FILES['service_image']['tmp_name']))
		{
			# code...
			$tmp_file=$_FILES['service_image']['tmp_name'];
			$file_name=time().$_FILES['service_image']['name'];
			$upload_dir="../img/services/".$file_name;
			if (move_uploaded_file($tmp_file, $upload_dir)) 
			{
				# code...
				$service_image="http://www.21cssindia.com/img/services/".$file_name;
			}
		}
		$query="INSERT INTO 21css_services (service_name, about, key_offerings, implementation_services, service_image) values ('{$service_name}', '{$about}', '{$key_offerings}', '{$implementation_services}', '{$service_image}')";
		if($mysqli->query($query))
		{
			$response=array(
				'status' => 1,
				'status_message' =>'Service Added Successfully.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'Service Addition Failed.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response, JSON_UNESCAPED_SLASHES);
	}
//-----------------------
//HANDLE POST REQUEST END


//HANDLE PUT REQUEST START
//-----------------------
function update_service($service_id)
{
	$query_existing="SELECT * FROM 21css_services WHERE service_id=$service_id";
	if ($mysqli->query($query_existing)) {
		# code...
		$result_existing=$mysqli->query($query_existing);
		while ($row_existing=$result_existing->fetch_assoc()) {
			# code...
			$service_name=$row_existing['service_name'];
			$about=$row_existing['about'];
			$key_offerings=$row_existing['key_offerings'];
			$implementation_services=$row_existing['implementation_services'];
			$service_status=$row_existing['service_status'];
		}
		parse_str(file_get_contents("php://input"),$post_vars);
		if(!empty($post_vars['service_name'])) $service_name=$post_vars["service_name"];
		if(!empty($post_vars['about'])) $about=$post_vars["about"];
		if(!empty($post_vars['key_offerings'])) $key_offerings=$post_vars["key_offerings"];
		if(!empty($post_vars['implementation_services'])) $implementation_services=$post_vars["implementation_services"];
		if(!empty($post_vars['service_status'])) $service_status=$post_vars["service_status"];
		$query="UPDATE 21css_services SET service_name='{$service_name}',about='{$about}',key_offerings='{$key_offerings}',implementation_services='{$implementation_services}',service_status='{$service_status}' WHERE service_id=$service_id";
		if($mysqli->query($query))
		{
			$response=array(
				'status' => 1,
				'status_message' =>'Service Update Successfully.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'Service Update Failed.'
			);
		}

	}
	header('Content-Type: application/json');
	echo json_encode($response, JSON_UNESCAPED_SLASHES);
}
//-----------------------
//HANDLE PUT REQUEST END


//HANDLE DELETE REQUEST START
//-----------------------
function delete_service($service_id)
	{
		$query="DELETE FROM 21css_services WHERE service_id=".$service_id;
		if($mysqli->query($query))
		{
			$response=array(
				'status' => 1,
				'status_message' =>'Service Deleted Successfully.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'Service Deletion Failed.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response, JSON_UNESCAPED_SLASHES);
	}

//-----------------------
//HANDLE DELETE REQUEST END
}
?>