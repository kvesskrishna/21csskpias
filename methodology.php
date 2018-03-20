<?php require_once('head.php');?>
            
    
  <body>
    <div id="page">
        <?php require_once('header.php');?>
                 

        <div style="margin-top: 100px;"></div>
   
        <div class="container-fluid">  
        <h3 class="headtext"> Our Methodology & Concept</h3>
         <hr>

          <!--PAGE CONTENT GOES HERE-->
 <div class="row"> 
   <div class="col-sm-8 col-md-8"> 
   <ul class="timeline">  
    <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=methodology&section_id=2');
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
             <!-- <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>-->
             <p class="pstyle"> <?php echo $section->section_content?> </p> 

            </div>
 <?php } ?>
           </div>
        </li>
   
    <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=methodology&section_id=5');
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
             <!-- <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>-->
             <p class="pstyle"> <?php echo $section->section_content?> </p> 

            </div>
          <?php } ?>
        </div>
        </li>
   
    <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=methodology&section_id=6');
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
             <!-- <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>-->
             <p class="pstyle"> <?php echo $section->section_content?> </p> 

            </div>
          <?php } ?>
        </div>
        </li>
        <!--<li>
          <div class="timeline-badge info"><i class="fa fa-eye"></i></div>
          <div class="timeline-panel">
          
          <div class="timeline-heading">
              <h4 class="timeline-title">Our Vision</h4>
            
             <p>KPIAS visualizes itself as a dominant player in the domain of State and Civil Services training across the country...</p>
            </div>
            <div class="timeline-body">
              <p>In near future, KPIAS envisages creating standard centers across the country.</p>
            </div>
          
          </div>
        </li>-->
        
        		
              <!-- accordion --> 
           <!-- question div -->
                
          <!-- accordion  end-->
        
    </ul>

     </div> 
   

     <!-- column div -->
     
     <!-- 2nd part -->
     
     <div class="col-sm-4 col-md-4">
     	
            <!-- Carousel
            ================================================== -->
            <?php require_once('latest-news.php');?>
     </div> 
     </div> <!-- 2nd end -->   
 <!-- row div -->    
          
        
        
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