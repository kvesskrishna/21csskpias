<?php require_once('head.php');?>

    
  <body>
    <div id="page">
        <?php require_once('header.php');?>
                 

        <div style="margin-top: 100px;"></div>
   
        <div class="container-fluid">  
        <h3 class="headtext"> Courses Offered</h3>
         <hr>

          <!--PAGE CONTENT GOES HERE-->
          <div class="row">
        <div class="col-sm-8 col-md-8">
          
    <ul class="timeline">
      <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=coursesoffered&section_id=30');
                  curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
                  $response=curl_exec($ch);
                  curl_close ($ch);
                  $result= json_decode($response);
                  
                  foreach ($result as $section)
                  {

                   ?>
        <li>
          <div class="timeline-badge info"><i class="fa fa-check-square"></i></div>
          <div class="timeline-panel" title="click me">
            <div class="timeline-heading">
              <h4 class="timeline-title"><?php echo $section->section_title?></h4>
            
  
            <?php echo $section->section_content?>
            
          
            
            
             <!--<ul style="list-style-position:outside; list-style-type: disc;">
             	<li>Classroom Instructions</li>
                <li>Guidance from external experts</li>
                <li>Work shops and Seminars </li>
                <li>Field Trips </li>
                <li>Soft Skills Training </li>
                <li>Evaluation </li>
                <li>Application of IT </li>
               
             </ul>-->
             
          <!--<a href="#" class="btn btn-lg btn-default">Register</a>-->
             
            </div>

            <div class="timeline-body">
            <!--<h4>The Civil Services Examination comprises two successive stages :</h4>-->
              <p title="click"> 
              <br>
             	<!--<ul style="list-style-position:outside; list-style-type: disc;">
             	<li>However, if they decide on Civils as a career at an early stage while in Intermediate or Degree, it helps them to succeed in the Civil Services Exam in their first attempt so that they enter the services at a young age of 21-22 years, they will enjoy longer tenure in the topmost positions like Cabinet Secretary, Home Secretary, Chief Secretary, Director General of Police, Chief Commissioner of Income Tax and other such top posts.</li>
             
             </ul>-->
                
                </p>
            </div>
          </div>
          <?php } ?>
        </li>
        
        
        <li>
           <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=coursesoffered&section_id=65');
                  curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
                  $response=curl_exec($ch);
                  curl_close ($ch);
                  $result= json_decode($response);
                  
                  foreach ($result as $section)
                  {

                   ?>
          <div class="timeline-badge danger"><i class="fa fa-cubes"></i></div>
          <div class="timeline-panel" title="click me">
          
          <div class="timeline-heading">
              <h4 class="timeline-title"><?php echo $section->section_title?></h4>
            
             	<?php echo $section->section_content?>
           
            </div>
            <div class="timeline-body">
              <p title="click">
              	<!--<ul style="list-style-position:outside; list-style-type: disc;">
                	<li>Economic and Social Development – Sustainable Development, Poverty, Inclusion, Demographics, Social Sector Initiatives, etc.</li>
                    
                </ul>-->
                
              </p>
            </div>
          
          
          </div>
          <?php } ?> 
        </li>
        
        
        
       
       
        
        
    </ul>

     </div>
     
     <!-- 2nd part -->
     
     <div class="col-sm-4 col-md-4">
     
     				
                                <!-- Carousel
                                ================================================== -->
                                <?php require_once('latest-news.php'); ?>
                                
                              
     
     
     
     
     
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