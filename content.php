<?php require_once('head.php');?>

    
  <body>
    <div id="page">
        <?php require_once('header.php');?>
                 

        <div style="margin-top: 100px;"></div>
   
        <div class="container-fluid">  
        <h3 class="headtext"> Why KPIAS</h3>
         <hr>

          <!--PAGE CONTENT GOES HERE-->
          <div class="row">
           <div class="col-sm-8 col-md-8">
         
    <ul class="timeline">

      <li>
      <?php
             $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=whykpias&section_id=1');
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
             <!-- <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>-->
             <p class="pstyle"><?php echo $section->section_content?></p>
          </div>
            <div class="timeline-body">
              <p title="click" class="pstyle">Since its inception, the institute has helped over 200 students to enter the Civil Services including IAS, IPS, IRS and other Central Services. Within no time, the institute has achieved good results and progressively improving the results including the 13th Rank in 2010-11 Civil Services examination. The institute has quickly gained the confidence and trust of the students preparing for civil services. Our students are not only from Andhra Pradesh, we also have alumni from the other South Indian States like- Karnataka, Tamil Nadu, and Kerala and also from North East states like Manipur.</p>
            </div>
          </div>
          <?php } ?>
        </li>
        
        
        <li>
          <?php
             $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=whykpias&section_id=4');
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
             <!-- <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>-->
             <p class="pstyle"> <?php echo $section->section_content?></p>
            </div>
            <div class="timeline-body">
              <p title="click" class="pstyle">What, Why, Where, Who, Why and How of Civil Services Exam i.e. the gateway to becoming IAS / IPS / IRS / IFS officer.

				Civil Service exam is a common exam which gives you an opportunity to join any of the two All India Services (IAS/IPS)
                 and 25 other Central Services (IRS/ IFS/ Railway Services) etc.</p>
            </div>
          
          
          </div>
          <?php } ?>
        </li>
        
        <li>
          <?php
             $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=whykpias&section_id=10');
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
             <p class="pstyle"><?php echo $section->section_content?></p>
            </div>
            <div class="timeline-body">
              <p title="click" class="pstyle" >Since its inception, the institute has helped over 200 students to enter the Civil Services including IAS,
               IPS, IRS and other Central Services. Within no time, the .</p>
            </div>
          
          
          </div>
          <?php } ?>
        </li>
        
        <li>
          <div class="timeline-badge info"><i class="fa fa-eye"></i></div>
          <div class="timeline-panel" title="click me">
          
          <div class="timeline-heading">
              <h4 class="timeline-title">Our Vision</h4>
             <!-- <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>-->
             <p class="pstyle">KPIAS visualizes itself as a dominant player in the domain of State and Civil Services training across the country...</p>
            </div>
            <div class="timeline-body">
              <p title="click" class="pstyle">In near future, KPIAS envisages creating standard centers across the country.</p>
            </div>
          
          
          </div>
        </li>
        
        
        <li>
          <div class="timeline-badge "><i class="fa fa-institution"></i></div>
          <div class="timeline-panel" title="click me">
          
            <div class="timeline-heading">
              <h4 class="timeline-title">Our Mission</h4>
             <!-- <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>-->
             <p class="pstyle"> Give valued services in the field of education and participate in different spheres of education at different stages..</p>
            </div>
            <div class="timeline-body">
              <p title="click" class="pstyle">To create an excellent competitive environment in the candidate who participate in the competitive exams by virtue of imparting qualitative education, with a consolidated strategy to produce proficient professionals.</p>
            </div>
           
          </div>
        </li>
        
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
        <?php require_once('bubble.php');?>
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