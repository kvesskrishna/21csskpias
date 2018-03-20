<?php include('templates/header.php');
$page="contacts";
?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">

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
							<li class="active">Contact Requests</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Contact Requests
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
							
							<p class="text-right"><a href="#additemModal" role="button" class="btn btn-large btn-primary" data-toggle="modal">New Contact</a></p>
							
						</div><!-- /.page-header -->
						<div id="additemModal" class="modal fade">
							<div class="modal-dialog">
							    <div class="modal-content">
							        <div class="modal-header">
						                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						                <h4 class="modal-title">Add Contact</h4>
						            </div>						            
							<form class="form-horizontal" method="post" action="../contact_request.php" enctype="multipart/form-data">
								<input type="hidden" name="action" value="createcontact">
            						<div class="modal-body">
            						
  							  			<div class="form-group">
            								<label class="control-label col-md-4">Name</label>
            								<div class="col-md-4">
            									<input type="text" name="name" class="form-control" required="">
            								</div>
            							</div>
            							<div class="form-group">
            								<label class="control-label col-md-4">Email</label>
            								<div class="col-md-4">
            									<input type="email" name="email" class="form-control" required="">
            								</div>
            							</div>
            							<div class="form-group">
            								<label class="control-label col-md-4">Phone</label>
            								<div class="col-md-4">
            									<input type="text" name="phone" class="form-control" required="">
            								</div>
            							</div>
            							<div class="form-group">
            								<label class="control-label col-md-4">Message</label>
            								<div class="col-md-4">
            									<input type="text" name="message" class="form-control" required="">
            								</div>
            							</div>
            							
            						
					            	</div>
						            <div class="modal-footer">
						                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						                <button type="submit" name="additem" class="btn btn-primary">Add Contact</button>
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
						<?php
						$ch = curl_init();  
					    curl_setopt($ch,CURLOPT_URL,'http://www.technosoftgroup.com/webservices/contact_requests?api_key=160e64f13691a2f59d34492dc238f98e');
					    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
					    $response=curl_exec($ch);
					    curl_close($ch);
					    $result = json_decode($response);
					    //var_dump($result);
					    //echo $result[0]->service_name;
					    ?>
					<table id="dtable">
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Message</th>
								<th>Status</th>
								<th>Date</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
							for ($i=0; $i < sizeof($result); $i++) { 
								# code...
								?>
							<tr>
								<td><?php echo $result[$i]->contact_name;?></td>
								<td><?php echo $result[$i]->contact_email;?></td>
								<td><?php echo $result[$i]->contact_phone;?></td>
								<td><?php echo $result[$i]->contact_message;?></td>
								<td><?php echo $result[$i]->contact_status;?></td>

								
									<td><?php echo $result[$i]->contact_created;?></td>
								<td>
									<a  href="#edit<?php echo $result[$i]->contact_id?>" data-toggle="modal"><i class="fa fa-pencil"></i></a>
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
		</div><!-- /.main-container -->
		<!-- basic scripts -->
		<?php include('templates/basicscripts.php');?>
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
    		$('#dtable').DataTable({
    			"order": [[ 5, "desc"]],
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
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code'
  ],
    branding: false


			 });
		</script>
		<!-- page specific plugin scripts -->
		<?php include('templates/JSpsDashboard.php');?>
		<!-- inline scripts related to this page -->
		<?php include('templates/JSisDashboard.php');?>			<?php include('templates/footer.php');?>

	</body>
</html>