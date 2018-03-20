<?php include('templates/header.php');
$page="downloads";

if (isset($_POST['adddownload'])) {
$dlimage="downloads.png";
if(isset($_FILES['dlfile'])&&!empty($_FILES['dlfile']['name'])){
        $errors= array();
      $file_name1 = time().$_FILES['dlfile']['name'];
      $file_size1 = $_FILES['dlfile']['size'];
      $file_tmp1 = $_FILES['dlfile']['tmp_name'];
      $file_type1 = $_FILES['dlfile']['type'];
      $file_ext1=pathinfo($_FILES["dlfile"]["name"])['extension'];


      
      $expensions1= array("zip","rar");
      
      if(in_array($file_ext1,$expensions1)=== false){
         $errors1[]="extension not allowed, please choose a zip/rar file.";
      }
      
      if($file_size1 > 10097152) {
         $errors1[]='File size must be less than 10 MB';
      }
      
      if(empty($errors1)==true) {
         move_uploaded_file($file_tmp1,"../new/downloads/".$file_name1);
         $dlfile=$file_name1;
      }else{
         print_r($errors1);
      }
   }
  

	$newtitle=mysqli_real_escape_string($mysqli,$_POST['dltitle']);
	$newdlimage="http://www.kpias.com/new/downloads/images/".mysqli_real_escape_string($mysqli,$dlimage);
	$newdlfile="http://www.kpias.com/new/downloads/".mysqli_real_escape_string($mysqli,$dlfile);
	$sql_adddata="INSERT INTO downloads (download_title,download_path,download_thumbnail) VALUES ('$newtitle','$newdlfile','$newdlimage')";
	
	$res_adddata=$mysqli->query($sql_adddata);
	if(!$res_adddata){
		die($mysqli->error);
	}
	$_SESSION['message']="Download Inserted Successfully";
	header('Location:downloads.php');
}
if (isset($_POST['editdownload'])) {
	
    $dlfile=$_POST['olddlfile'];
    if(isset($_FILES['dlfile'])&&!empty($_FILES['dlfile']['name'])){
        $delfile="../new/downloads/".basename($dlfile);
        unlink($delfile);
      $errors= array();
      $file_name = time().$_FILES['dlfile']['name'];
      $file_size = $_FILES['dlfile']['size'];
      $file_tmp = $_FILES['dlfile']['tmp_name'];
      $file_type = $_FILES['dlfile']['type'];
      $file_ext=pathinfo($_FILES["dlfile"]["name"])['extension'];


      
      $expensions= array("zip","rar");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a zip or rar file.";
      }
      
      if($file_size > 10097152) {
         $errors[]='File size must be less than 10 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"../new/downloads/".$file_name);
         $dlfile="http://www.kpias.com/new/downloads/".$file_name;
      }else{
         print_r($errors);
      }
   }
    $newdltitle=mysqli_real_escape_string($mysqli,$_POST['dltitle']);
    $newdlfile=mysqli_real_escape_string($mysqli,$dlfile);
    $newdlstatus=mysqli_real_escape_string($mysqli,$_POST['status']);
    $dlid=$_POST['downloadid'];
    $sql_updatedata="UPDATE downloads SET download_title='$newdltitle',download_path='$newdlfile',download_status='$newdlstatus',download_modifiedon=now() WHERE download_id=$dlid";
    
    $res_updatedata=$mysqli->query($sql_updatedata);
    if(!$res_updatedata){
        die($mysqli->error);
    }
    $_SESSION['message']=$alert="Download Updated Successfully";
    header('Location:downloads.php');
}
if (isset($_POST['deletedownload'])) {
	# code...
	$dlid=$_POST['downloadid'];
	$sql_deletedata="DELETE FROM downloads WHERE download_id=$dlid";
	$res_deletedata=$mysqli->query($sql_deletedata);
	if ($res_deletedata) {
		 $dlfile=$_POST['olddlfile'];
		  $delfile="../new/downloads/".basename($dlfile);
        unlink($delfile);
		$_SESSION['message']="Download Deleted Successfully";
	header('Location:downloads.php');
	}
}
?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
<style type="text/css">
	.table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
   background-color: lightblue;   
}
#orders i{
	font-size: 16px;
   	margin-left: 15px;
   }
   .fa-eye{
   	color: green;
   }
   .fa-trash{
   	color: red;
   }
</style>
		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

<?php include('templates/sidenav.php');?>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Downloads</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Downloads
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>
									overview &amp; stats
								</small>                                
                                <?php 
                                if(isset($_SESSION['message']))
                                echo "<div style='color:red'>".$_SESSION['message']."</div>";
                                unset($_SESSION['message']);
                            ?>
							</h1>
							<p class="text-right"><a href="#adddlModal" role="button" class="btn btn-large btn-primary" data-toggle="modal">New Download</a></p>
						</div><!-- /.page-header -->
						<div id="adddlModal" class="modal fade">
							<div class="modal-dialog">
							    <div class="modal-content">
							        <div class="modal-header">
						                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						                <h4 class="modal-title">Add Download</h4>
						            </div>						            
							<form class="form-horizontal" method="post" action="#" enctype="multipart/form-data">            				
            						<div class="modal-body">
  							  			<div class="form-group">
            								<label class="control-label col-md-4">Title</label>
            								<div class="col-md-4">
            									<input type="text" name="dltitle" class="form-control" required="">
            								</div>
            							</div>
            							<div class="form-group">
            								<label class="control-label col-md-4">File</label>
            								<div class="col-md-4">
            									<input type="file" name="dlfile" class="form-control" required="">
            								</div>
            							</div>
            							
					            	</div>
						            <div class="modal-footer">
						                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						                <button type="submit" name="adddownload" class="btn btn-primary">Add Download</button>
						            </div>
            				</form>
				        </div>
				    </div>
				</div>



						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
								<div class="col-md-12">
	<table id="ordersa" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Title</th>
                <th>Path</th>
                <th>Status</th>
                <th>Created On</th>
                <th>Modified On</th>
               <th>Edit/Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql_getdata="SELECT * FROM downloads";
        $res_getdata=$mysqli->query($sql_getdata);
        while ($row_getdata=$res_getdata->fetch_assoc()) {
        	# code...
        	?>
        	<tr>
                <td><?php echo $row_getdata['download_title']?> </a></td>
                <td><?php echo $row_getdata['download_path']?></td>
                <td><?php echo $row_getdata['download_status']?></td>
                <td><?php echo $row_getdata['download_createdon']?></td>
                <td><?php echo $row_getdata['download_modifiedon']?></td>
                <td><a href="#edit<?php echo $row_getdata['download_id']?>" data-toggle="modal"><i class="fa fa-pencil-square-o"></i></a>
                <a href="#delete<?php echo $row_getdata['download_id']?>" data-toggle="modal"><i class="fa fa-trash"></i></a>
                <div id="delete<?php echo $row_getdata['download_id']?>" class="modal fade">
							<div class="modal-dialog">
							    <div class="modal-content">
							        <div class="modal-header">
						                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						                <h4 class="modal-title">Delete Download</h4>
						            </div>						            
							<form class="form-horizontal" method="post" action="#">            				
								Delete Download <b><?php echo $row_getdata['download_title']?></b>
            						<p class="text-primary">Are you sure you want to delete this download?</p>
					            	<input type="hidden" name="downloadid" value="<?php echo $row_getdata['download_id']?>">
					            	<input type="hidden" name="olddlfile" value="<?php echo $row_getdata['download_path']?>">
						            <div class="modal-footer">
						                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						                <button type="submit" id="deletebtn" name="deletedownload" class="btn btn-primary">Delete download</button>
						            </div>
            				</form>
				        </div>
				    </div>
				</div>

                  <div id="edit<?php echo $row_getdata['download_id']?>" class="modal fade">
							<div class="modal-dialog">
							    <div class="modal-content">
							        <div class="modal-header">
						                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						                <h4 class="modal-title">Edit Download</h4>
						            </div>						            
							<form class="form-horizontal" method="post" action="#" enctype="multipart/form-data">            				
            						<div class="modal-body">
  							  			<div class="form-group">
            								<label class="control-label col-md-4">Download Title</label>
            								<div class="col-md-4">
            									<input type="text" name="dltitle" class="form-control" required="" value="<?php echo $row_getdata['download_title']?>">
            								</div>
            							</div>
            							<div class="form-group">
            								<label class="control-label col-md-4">File</label>
            								<div class="col-md-4">
            									<input type="file" name="dlfile" class="form-control">
            								</div>
            							</div>
            							<div class="form-group">
            								<label class="control-label col-md-4">Status</label>
            								<div class="col-md-4">
            									<select class="form-control" name="status">
            										<option selected="" value="<?php echo $row_getdata['download_status']?>"><?php echo $row_getdata['download_status']?></option>
            										<option value="Active">Active</option>
            										<option value="Inactive">Inactive</option>
            									</select>
            								</div>
            							</div>
					            	</div>
					            	<input type="hidden" name="downloadid" value="<?php echo $row_getdata['download_id']?>">
					            	<input type="hidden" name="olddlfile" value="<?php echo $row_getdata['download_path']?>">
						            <div class="modal-footer">
						                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						                <button type="submit" id="editbtn" name="editdownload" class="btn btn-primary">Edit Download</button>
						            </div>
            				</form>
				        </div>
				    </div>
				</div>
                </td>
            </tr>

        	<?php
        }
        ?>               
        </tbody>
    </table>
    </div>
    </div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
			<?php include('templates/footer.php');?>
		</div><!-- /.main-container -->
		<!-- basic scripts -->
		<?php include('templates/basicscripts.php');?>
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
    		$('#ordersa').DataTable({
    			"order": [[ 3, "desc"]],
    		});
			} );
	
		</script>
		
		<!-- page specific plugin scripts -->
		<?php include('templates/JSpsDashboard.php');?>
		<!-- inline scripts related to this page -->
		<?php include('templates/JSisDashboard.php');?>
	</body>
</html>