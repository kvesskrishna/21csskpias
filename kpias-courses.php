<?php require_once('head.php');?>

    
  <body>
    <div id="page">
        <?php require_once('header.php');?>
                 

        <div style="margin-top: 100px;"></div>
   
        <div class="container-fluid">
        	<h2>All Kpias Courses</h2>
        	<hr>
			<div class="row">
        <div class="col-sm-8 col-md-8">
				<?php 
		$ch = curl_init();  
         curl_setopt($ch,CURLOPT_URL,'http://www.kpias.com/webservices/topCourses?api_key=160e64f13691a2f59d34492dc238f98e');
         curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
         $response=curl_exec($ch);
         curl_close($ch);
         $result = json_decode($response);
       
         foreach ($result as $course) {
					    
					    ?>
				
					<div class="col-xs-12 col-sm-6 col-md-4">
						<!-- .viewed-courses-box -->
						<div class="viewed-courses-box">
							<div class="viewed-courses-img">
								<img src="<?php echo $course->course_thumbnail?>" width=100% height=150px/>
							</div>
							<div class="viewed-courses-text">
								<a href="#">
									<h6><?php echo $course->course_title?></h6>
								</a>
								<p> Category: <?php echo $course->course_category?> </p>
								<div class="star">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
								</div>
								<div class="price">
									<p> <?php echo $course->course_duration?> -
									  <?php echo $course->course_eligibility?>
									
										</p>
								</div>
							</div>
						</div>
						<!-- /.viewed-courses-box -->
					</div>
<?php } ?>
     </div>
     <!-- 2nd part -->
     
     <div class="col-sm-4 col-md-4">
     
     				
                                <!-- Carousel
                                ================================================== -->
                                <?php require_once('latest-news.php');?>                                                                   
     </div>  <!-- 2nd end -->   
      </div> <!-- row div -->    
          
          
                              
        </div>
      <?php require_once('footer.php');?>
   </div>
    <?php require_once('rightpanel.php');?>     
    <?php require_once('footscripts.php');?>
 
    <script> 
    
    $('#myCarousel').carousel({
    	interval:   4000
	});
    
    
    </script>
    
   
    
  </body>
</html>