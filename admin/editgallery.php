<?php include('templates/header.php');
$page="imagegallery";

						$ch = curl_init();  
					    curl_setopt($ch,CURLOPT_URL,'http://www.kpias.com/webservices/galleryImg?api_key=160e64f13691a2f59d34492dc238f98e&gallery_id='.$_GET['id']);
					    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
					    $response=curl_exec($ch);
					    curl_close($ch);
					    $result = json_decode($response);
					    //var_dump($result);
					    //echo $result[0]->service_name;
					  

?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

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
							<li class="active">Edit Gallery id <?php echo $_GET['id'];?></li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Edit Gallery id <?php echo $_GET['id'];?>
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
							
							<p class="text-right"><a href="#additemModal" role="button" class="btn btn-large btn-primary" data-toggle="modal">New Item</a></p>
							
						</div><!-- /.page-header -->
						<div id="additemModal" class="modal fade">
							<div class="modal-dialog">
							    <div class="modal-content">
							        <div class="modal-header">
						                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						                <h4 class="modal-title">Add Item</h4>
						            </div>						            
							<form class="form-horizontal" method="post" action="formactions.php" enctype="multipart/form-data">
								<input type="hidden" name="action" value="creategalleryimg">
            						<div class="modal-body">
            							
  							  			<div class="form-group">
            								<label class="control-label col-md-4">Title</label>
            								<div class="col-md-8">
            									<input type="text" name="img_title" class="form-control" required="">
            								</div>
            							</div>
            							<div class="form-group">
            								<label class="control-label col-md-4">File</label>
            								<div class="col-md-8">
            									<input type="file" name="img_file">
            								</div>
            							</div>
            							<div class="form-group">
            								<label class="control-label col-md-4">Comment</label>
            								<div class="col-md-8">
            									<textarea name="img_comment"> </textarea>
            								</div>
            							</div>
            							<input type="hidden" name="gallery_id" value="<?php echo $_GET['id']?>">
            							

            					
					            	</div>
						            <div class="modal-footer">
						                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						                <button type="submit" name="additem" class="btn btn-primary">Add Item</button>
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
						
					<table id="dtable">
						<thead>
							<tr>
								<th>Title</th>
								<th>Image</th>
								<th>Status</th>
								<th>Created on</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($result as $row) {
								# code...
								?>
							<tr>
								<td><?php echo $row->img_title;?></td>
								<td><img src="<?php echo $row->img_file;?>" height="100px" width="150px"></td>
								<td><?php echo $row->img_status;?></td>
								<td><?php echo $row->img_created;?></td>
								<td>
									<a style="color: red"  href="#delete<?php echo $row->img_id?>" data-toggle="modal"><i class="fa fa-times"></i></a>
								</td>
						<div id="delete<?php echo $row->img_id?>" class="modal fade">
							<div class="modal-dialog">
							    <div class="modal-content">
							        <div class="modal-header">
						                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						                <h4 class="modal-title">Delete Item</h4>
						            </div>						            
							<form class="form-horizontal" method="post" enctype="multipart/form-data" action="http://www.kpias.com/webservices/delgalleryimg.php">
            						<div class="modal-body">
            							
									
  							  			<div class="form-group">
            								<label class="control-label col-md-12">Do you want to delete this file? <?php echo $row->img_title?></label>
            								
            							</div>
            							
            							
					            	</div>
					            	<input type="hidden" name="img_id" value="<?php echo $row->img_id?>">

					            	<input type="hidden" name="action" value="deletegalleryimg">  
					            	 
						            <div class="modal-footer">
						                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						                <button type="submit" id="delbtn" name="delitem" class="btn btn-primary">Delete</button>
						            </div>
            				</form>
				        </div>
				    </div>
				</div>
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
		</div><!-- /.main-container -->
		<!-- basic scripts -->
		<?php include('templates/basicscripts.php');?>
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
    		$('#dtable').DataTable({
    			"order": [[ 1, "desc"]],
    		});
			} );
	
		</script>
 <script type="text/javascript" src="assets/js/tinymce/jquery.tinymce.min.js"></script>
		<script type="text/javascript" src="assets/js/tinymce/tinymce.min.js"></script>
		<script type="text/javascript">
			tinymce.init({ selector:'textarea',
				menubar: false,
				height: 300,
				forced_root_block : "",
				images_upload_url: 'newsImgAcceptor.php',
  images_upload_base_path: 'http://www.21cssindia.com',
  images_upload_credentials: true,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code'
  ],
    branding: false


			 });
		</script>
		 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
  <script>
 $("#newsdate1").datepicker({showOn: 'focus',changeMonth: true,
    changeYear: true,dateFormat: 'yy-mm-dd'  
 });
 $("#newsdate2").datepicker({showOn: 'focus',changeMonth: true,
    changeYear: true,dateFormat: 'yy-mm-dd'  
 });

  </script>
		<!-- page specific plugin scripts -->
		<?php include('templates/JSpsDashboard.php');?>
		<!-- inline scripts related to this page -->
		<?php include('templates/JSisDashboard.php');?>			<?php include('templates/footer.php');?>

	</body>
</html>