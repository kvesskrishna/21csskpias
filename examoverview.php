<?php require_once('head.php');?>

    
  <body>
    <div id="page">
        <?php require_once('header.php');?>
                 

        <div style="margin-top: 100px;"></div>
   
        <div class="container-fluid">  
        <h3 class="headtext"> Exam Overview</h3>
         <hr>

          <!--PAGE CONTENT GOES HERE-->
        <div class="row">
        <div class="col-sm-8 col-md-8">
          <ul class="timeline">
        <li>
          <?php
             $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=examoverview&section_id=11');
                  curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
                  $response=curl_exec($ch);
                  curl_close ($ch);
                  $result= json_decode($response);
                  
                  foreach ($result as $section)
                  {
 ?>
          <div class="timeline-badge info"><i class="fa fa-check-square"></i></div>
          <div class="timeline-panel" title="click me">
            <div class="timeline-heading">
              <h4 class="timeline-title"><?php echo $section->section_title?></h4>
            
             <p><?php echo $section->section_content?></p>
             
            </div>
          </div>
        <?php } ?>
        </li>
      
  
            
            <!--<div class="timeline-body">
            <h4>The Civil Services Examination comprises two successive stages :</h4>
              <p title="click"> 
             	<p><strong>&nbsp; 1.</strong>&nbsp; Civil Services Preliminary Examinations (Objective Type) – for the selection of candidates for Main Examination </p>
				<strong> &nbsp; 2.</strong>&nbsp; Civil Services Main Examination (Written Test and Interview) – for the selection of candidates for the various services and posts.
                
                
                </p>
                <ol >
                	<li>Civil Services Preliminary Examinations (Objective Type) – for the selection of candidates for Main Examination.</li>
                    <li>Civil Services Main Examination (Written Test and Interview) – for the selection of candidates for the various services and posts.</li>
                </ol>
                
                </p>
            </div>
          </div>-->
        
        
        <li>
          <?php
             $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=examoverview&section_id=12');
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
           
             <p> <?php echo $section->section_content?></p>
          
          </div>
          <?php } ?>
        </li>
        
        <li>
          <?php
             $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=examoverview&section_id=13');
                  curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
                  $response=curl_exec($ch);
                  curl_close ($ch);
                  $result= json_decode($response);
                  
                  foreach ($result as $section)
                  {
 ?>
          <div class="timeline-badge "><i class="fa fa-book"></i></div>
          <div class="timeline-panel" title="click me">
          
          <div class="timeline-heading">
              <h4 class="timeline-title"><?php echo $section->section_title?></h4>
             <!-- <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>-->
            <?php echo $section->section_content?>
          </div>

        <?php } ?>
        </li>
        
        <li>
          <?php
             $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=examoverview&section_id=14');
                  curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
                  $response=curl_exec($ch);
                  curl_close ($ch);
                  $result= json_decode($response);
                  
                  foreach ($result as $section)
                  {
 ?>
          <div class="timeline-badge info"><i class="fa fa-eye"></i></div>
          <div class="timeline-panel" title="click me">
          
          <div class="timeline-heading">
              <h4 class="timeline-title"><?php echo $section->section_title?></h4>
             <!-- <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>-->
            
         <?php echo $section->section_content?> 
          
          </div>
          <?php } ?>
        </li>
        
        
        <!--<li>
          <div class="timeline-badge "><i class="fa fa-institution"></i></div>
          <div class="timeline-panel" title="click me">
          
            <div class="timeline-heading">
              <h4 class="timeline-title">Our Mission</h4>
              
             <p> Give valued services in the field of education and participate in different spheres of education at different stages..</p>
            </div>
            <div class="timeline-body">
              <p title="click" >To create an excellent competitive environment in the candidate who participate in the competitive exams by virtue of imparting qualitative education, with a consolidated strategy to produce proficient professionals.</p>
            </div>
           
          </div>
        </li> -->
        
   </ul>

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