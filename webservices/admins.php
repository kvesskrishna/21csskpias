<?php
require_once('api_auth.php');

if ($response['auth_status']==1) { 

$verb = $_SERVER['REQUEST_METHOD'];

//HANDLE POST REQUEST START
//-----------------------
function insert_admin()
	{
		global $mysqli;
		$username=mysqli_real_escape_string($mysqli,$_POST["username"]);
		$first_name=mysqli_real_escape_string($mysqli,$_POST["first_name"]);
		$last_name=mysqli_real_escape_string($mysqli,$_POST["last_name"]);
		$mobile=mysqli_real_escape_string($mysqli,$_POST["mobile"]);
		$role=mysqli_real_escape_string($mysqli,$_POST["role"]);
		$email=mysqli_real_escape_string($mysqli,$_POST["email"]);
		$password=sha1(mysqli_real_escape_string($mysqli,$_POST["password"]));
		$query="INSERT INTO technosoft_admins (username, first_name, last_name, mobile, role, email, password) values ('{$username}','{$first_name}', '{$last_name}', '{$mobile}', '{$role}', '{$email}','{$password}')";
		if($mysqli->query($query))
		{
			$response=array(
				'status' => 1,
				'status_message' =>'Admin Added Successfully.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'Admin Addition Failed.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response, JSON_UNESCAPED_SLASHES);
	}
//-----------------------
//HANDLE POST REQUEST END


//HANDLE GET REQUEST START
//-----------------------
function get_admin($admin_id=0)
	{
		global $mysqli;

		$query="SELECT * FROM technosoft_admins WHERE admin_status='active'";
		if($admin_id != 0)
		{
			$query.=" AND admin_id=".$admin_id." LIMIT 1";
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
function update_admin($admin_id)
{
	global $mysqli;
	$query_existing="SELECT * FROM technosoft_admins WHERE admin_id=$admin_id";
	if ($mysqli->query($query_existing)) {
		# code...
		$result_existing=$mysqli->query($query_existing);
		while ($row_existing=$result_existing->fetch_assoc()) {
			# code...
			$first_name=$row_existing['first_name'];
			$last_name=$row_existing['last_name'];
			$mobile=$row_existing['mobile'];
			$role=$row_existing['role'];
			$email=$row_existing['email'];
			$password=$row_existing['password'];
			$admin_status=$row_existing['admin_status'];
			$admin_modified=$row_existing['admin_modified'];

		}
		parse_str(file_get_contents("php://input"),$post_vars);
		if(!empty($post_vars['first_name'])) $first_name=mysqli_real_escape_string($mysqli,$post_vars["first_name"]);
		if(!empty($post_vars['last_name'])) $last_name=mysqli_real_escape_string($mysqli,$post_vars["last_name"]);
		if(!empty($post_vars['mobile'])) $mobile=mysqli_real_escape_string($mysqli,$post_vars["mobile"]);
		if(!empty($post_vars['role'])) $role=mysqli_real_escape_string($mysqli,$post_vars["role"]);
		if(!empty($post_vars['email'])) $email=mysqli_real_escape_string($mysqli,$post_vars["email"]);
		if(!empty($post_vars['password'])) $password=mysqli_real_escape_string($mysqli,$post_vars["password"]);
		if(!empty($post_vars['admin_status'])) $admin_status=mysqli_real_escape_string($mysqli,$post_vars["admin_status"]);

		$query="UPDATE technosoft_admins SET first_name='{$first_name}', last_name='{$last_name}', mobile='{$mobile}', role='{$role}', email='{$email}', password='{$password}', admin_status='{$admin_status}', admin_modified=now() WHERE admin_id=$admin_id";
		if($mysqli->query($query))
		{
			$response=array(
				
				'status' => 1,
				'status_message' =>'Admin Updated Successfully.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'Admin Update Failed.'
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
function delete_admin($admin_id)
	{
		global $mysqli;
		$query="DELETE FROM technosoft_admins WHERE admin_id=".$admin_id;
		if($mysqli->query($query))
		{
			$response=array(
				'status' => 1,
				'status_message' =>'Admin Deleted Successfully.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'Admin Deletion Failed.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response, JSON_UNESCAPED_SLASHES);
	}

//-----------------------
//HANDLE DELETE REQUEST END

switch ($verb) {
	case 'GET':
		if(!empty($_GET["admin_id"]))
			{
				$admin_id=intval($_GET["admin_id"]);
				get_admin($admin_id);
			}
			else
			{
				get_admin();
			}
		break;
	case 'POST':
		insert_admin();
		break;
	case 'PUT':
		$admin_id=intval($_GET["admin_id"]);
		update_admin($admin_id);
		break;
	case 'DELETE':
		$admin_id=intval($_GET["admin_id"]);
		delete_admin($admin_id);
		break;
	default:
		http_response_code(405);
		break;
}

}
?>