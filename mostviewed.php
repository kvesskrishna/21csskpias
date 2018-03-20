
	<section class="viewed-courses">
		<!-- .viewed-courses -->
		<div class="container">
			<div class="row">
				
				<div class="tittle">
					<h2>Most Viewed Courses</h2>
				</div>
				<div class="row">
				<?php 
		$ch = curl_init();  
         curl_setopt($ch,CURLOPT_URL,'http://www.kpias.com/webservices/topCourses?api_key=160e64f13691a2f59d34492dc238f98e');
         curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
         $response=curl_exec($ch);
         curl_close($ch);
         $result = json_decode($response);
       
         foreach ($result as $course) {
					    
					    ?>
				
					<div class="col-xs-12 col-sm-3 col-md-3">
						<!-- .viewed-courses-box -->
						<div class="viewed-courses-box">
							<div class="viewed-courses-img">
								<img src="<?php echo $course->course_thumbnail?>" width=100% height=200px/>
							</div>
							<div class="viewed-courses-text">
								<a href="<?php echo $course->course_description?>">
									<h6><?php echo $course->course_title?></h6>
								</a>
								<p style="color:#333"> Category: <?php echo $course->course_category?> </p>
								<div class="star">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
								</div>
								<div class="price">
									<p style="color:#333"> <?php echo $course->course_duration?> -
									  <?php echo $course->course_eligibility?>
									
										</p>
								</div>
								<a href="<?php echo $course->course_description?>" class="btn btn-info btn-xs">View More</a>
							</div>
						</div>
						<!-- /.viewed-courses-box -->
					</div>
<?php } ?>
					<div class="col-md-12">
						<a href="kpias-courses" class="button">Browse More Courses</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /.viewed-courses -->
	</section>