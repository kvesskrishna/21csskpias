<?php include('templates/header.php');
$page="latestnews";

if (isset($_POST['addlatest'])) {
	$latesttitle=mysqli_real_escape_string($mysqli,$_POST['latesttitle']);
	$latestdesc=mysqli_real_escape_string($mysqli,$_POST['latestdesc']);
	$closingdate=mysqli_real_escape_string($mysqli,$_POST['closingdate']);
	$sql_adddata="INSERT INTO latest_news (ln_title,ln_description,ln_closingdate) VALUES ('$latesttitle','$latestdesc','$closingdate')";
	
	$res_adddata=$mysqli->query($sql_adddata);
	if(!$res_adddata){
		die($mysqli->error);
	}
	$_SESSION['message']="Latest News Inserted Successfully";
	header('Location:latestnews.php');
}
if (isset($_POST['editlatest'])) {
	$latesttitle=mysqli_real_escape_string($mysqli,$_POST['latesttitle']);
	$latestdesc=mysqli_real_escape_string($mysqli,$_POST['latestdesc']);
	$closingdate=mysqli_real_escape_string($mysqli,$_POST['closingdate']);
	$lnid=$_POST['lnid'];
	$sql_updatedata="UPDATE latest_news SET ln_title='$latesttitle', ln_description='$latestdesc', ln_closingdate='$closingdate', ln_modifiedon=now() WHERE ln_id=$lnid";
	$res_updatedata=$mysqli->query($sql_updatedata);
	if(!$res_updatedata){
		die($mysqli->error);
	}
	$_SESSION['message']=$alert="Latest News Updated Successfully";
	header('Location:latestnews.php');

}
if (isset($_POST['deletelatest'])) {
	# code...
	$lnid=$_POST['lnid'];
	$sql_deletedata="DELETE FROM latest_news WHERE ln_id=$lnid";
	$res_deletedata=$mysqli->query($sql_deletedata);
	if (!$res_deletedata) {
		$_SESSION['message']=$alert="Latest News Deleted Successfully";
	header('Location:latestnews.php');
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
							<li class="active">Latest News</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Latest News
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
							<p class="text-right"><a href="#addlnModal" role="button" class="btn btn-large btn-primary" data-toggle="modal">New News</a></p>
						</div><!-- /.page-header -->
						<div id="addlnModal" class="modal fade">
							<div class="modal-dialog">
							    <div class="modal-content">
							        <div class="modal-header">
						                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						                <h4 class="modal-title">Add News</h4>
						            </div>						            
							<form class="form-horizontal" method="post" action="#">            				
            						<div class="modal-body">
            						<div class="form-group">
                                            <label class="control-label col-md-4">News Title</label>
                                            <div class="col-md-8">
                                                <input type="text" name="latesttitle" class="form-control" required="">
                                            </div>
                                        </div>
  							  			<div class="form-group">
            								<label class="control-label col-md-3">Description</label>
            								<div class="col-md-9">
            									<textarea name="latestdesc" class="form-control"></textarea>
            								</div>
            							</div>
            							<div class="form-group">
            								<label class="control-label col-md-4">Closing Date</label>
            								<div class="col-md-4">
            									<input type="text" id="addclosingdate" name="closingdate" class="form-control" required="">
            								</div>
            							</div>
					            	</div>
						            <div class="modal-footer">
						                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						                <button type="submit" name="addlatest" class="btn btn-primary">Add News</button>
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
                <th>Description</th>
                <th>Closing Date</th>
                <th>Created On</th>
               <th>Edit/Delete</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
               <th>Title</th>
                <th>Description</th>
                <th>Closing Date</th>
                <th>Created On</th>
               <th>Edit/Delete</th>
            </tr>
        </tfoot>
        <tbody>
        <?php
        $sql_getdata="SELECT * FROM latest_news";
        $res_getdata=$mysqli->query($sql_getdata);
        while ($row_getdata=$res_getdata->fetch_assoc()) {
        	
        	?>
        	<tr>
                <td><?php echo $row_getdata['ln_title']?></td>
                <td><?php echo $row_getdata['ln_description']?></td>
                <td><?php echo $row_getdata['ln_closingdate']?></td>
                <td><?php echo $row_getdata['ln_createdon']?></td>
                <td><a href="#edit<?php echo $row_getdata['ln_id']?>" data-toggle="modal"><i class="fa fa-pencil-square-o"></i></a>
                <a href="#delete<?php echo $row_getdata['ln_id']?>" data-toggle="modal"><i class="fa fa-trash"></i></a>
                <div id="delete<?php echo $row_getdata['ln_id']?>" class="modal fade">
							<div class="modal-dialog">
							    <div class="modal-content">
							        <div class="modal-header">
						                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						                <h4 class="modal-title">Delete News</h4>
						            </div>						            
							<form class="form-horizontal" method="post" action="#">            				
								Delete News <b><?php echo $row_getdata['ln_title']?></b>
            						<p class="text-primary">Are you sure you want to delete this news?</p>
					            	<input type="hidden" name="lnid" value="<?php echo $row_getdata['ln_id']?>">
						            <div class="modal-footer">
						                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						                <button type="submit" id="deletebtn" name="deletelatest" class="btn btn-primary">Delete news</button>
						            </div>
            				</form>
				        </div>
				    </div>
				</div>

                  <div id="edit<?php echo $row_getdata['ln_id']?>" class="modal fade">
							<div class="modal-dialog">
							    <div class="modal-content">
							        <div class="modal-header">
						                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						                <h4 class="modal-title">Edit news</h4>
						            </div>						            
							<form class="form-horizontal" method="post" action="#">            				
            						<div class="modal-body">
                                    <div class="form-group">
                                            <label class="control-label col-md-4">News Title</label>
                                            <div class="col-md-4">
                                                <input type="text" name="latesttitle" class="form-control" required="" value="<?php echo $row_getdata['ln_title']?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Description</label>
                                            <div class="col-md-9">
                                                <textarea name="latestdesc" class="form-control"><?php echo $row_getdata['ln_description']?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-4">Closing Date</label>
                                            <div class="col-md-4">
                                                <input type="text" id="editclosingdate" name="closingdate" class="form-control" required="" value="<?php echo $row_getdata['ln_closingdate']?>">
                                            </div>
                                        </div>
                                    </div>
					            	<input type="hidden" name="lnid" value="<?php echo $row_getdata['ln_id']?>">
						            <div class="modal-footer">
						                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						                <button type="submit" id="editbtn" name="editlatest" class="btn btn-primary">Edit news</button>
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
		</div><!-- /.main-container -->
		<!-- basic scripts -->
		<?php include('templates/basicscripts.php');?>
		<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript">
			  $(document).ready(function() {
			  	 $('#ordersa').DataTable({
             "order": [[ 3, "desc"]],
            });
    // Setup - add a text input to each footer cell
    $('#ordersa tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    var table = $('#ordersa').DataTable();
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
} );
		</script>
		<script type="text/javascript" src="assets/js/tinymce/tinymce.min.js"></script>
        <script type="text/javascript">
            tinymce.init({ selector:'textarea',
                menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code'
  ]
             });
        </script>
          <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#addclosingdate" ).datepicker({changeMonth: true,
    changeYear: true,dateFormat: 'yy-mm-dd'
 });

  } );
   $( function() {
    $( "#editclosingdate" ).datepicker({changeMonth: true,
    changeYear: true,dateFormat: 'yy-mm-dd'
 });

  } );
  </script>
		<!-- page specific plugin scripts -->
		<?php include('templates/JSpsDashboard.php');?>
		<!-- inline scripts related to this page -->
		<?php include('templates/JSisDashboard.php');?>			<?php include('templates/footer.php');?>

	</body>
</html>