<?php include('templates/header.php');
$page="dashboard";
?>		<link rel="stylesheet" href="assets/css/jquery.gritter.min.css" />

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
							<li class="active">Dashboard</li>
						</ul><!-- /.breadcrumb -->
					</div>

	
				</div>
			</div><!-- /.main-content -->
			<?php include('templates/footer.php');?>
		</div><!-- /.main-container -->
		<!-- basic scripts -->
		<?php include('templates/basicscripts.php');?>
		<!-- page specific plugin scripts -->
				<script src="assets/js/jquery.gritter.min.js"></script>

		<script type="text/javascript">
			$(document).ready(function(){
				$('#catshares div').filter(':even').addClass('infobox-red');
				$('#catshares div').filter(':odd').addClass('infobox-blue');

			$.gritter.add({
				// (string | mandatory) the heading of the notificationclass_name: 'gritter-light',
				title: 'Hello Administrator!',
				// (string | mandatory) the text inside the notification
				text: 'Great power comes with great responsibility. Welcome to <a href="http://www.kpias.com" style="color:#ccc">KPIAS</a>.',
			
				// (bool | optional) if you want it to fade out on its own or just sit there
				sticky: false,
				// (int | optional) the time you want it to be alive for before fading out
				time: '',
				class_name: 'gritter-info'
			});

			return false;
			
						});

		</script>
		<?php include('templates/JSpsDashboard.php');?>
		<!-- inline scripts related to this page -->
		<?php include('templates/JSisDashboard.php');?>
	</body>
</html>