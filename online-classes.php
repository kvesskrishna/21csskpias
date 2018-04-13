<?php require_once('head.php');?>

    
  <body>
    <div id="page">
        <?php require_once('header.php');?>
                 

        <div style="margin-top: 100px;"></div>
   
        <div class="container-fluid">  
        <h3 class="headtext"> Online Classes </h3>
         <hr>

          <!--PAGE CONTENT GOES HERE-->
          <div class="row">
        <div class="col-sm-8 col-md-8">
          
    <ul class="timeline">
        <li>
          <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/content?api_key=160e64f13691a2f59d34492dc238f98e&page=onlineclasses&section_id=55');
                  curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
                  $response=curl_exec($ch);
                  curl_close ($ch);
                  $result= json_decode($response);
                  
                  foreach ($result as $section)
                  {

                   ?>
          <div class="timeline-badge info"><i class="fa fa-check-square"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title"><?php echo $section->section_title?></h4>
              <h4 class="timeline-title"><b>Android Users :</b> </h4>
              
              <p class="pstyle">
                Download Virtual Classroom from play store.

              </p>
               <br>

               <h4 class="timeline-title"><b>Windows Users:</b> </h4>              
              <p class="pstyle">Click the below link and follow the instructions given <br>
              <strong><a href="https://neostencil.com/?s=kpias&post_type=course" style="color: blue;"> NeoStencil </a></strong>
              <br> If you have any doubts mail us on KPIASONLINECLASS@GMAIL.COM</p>
<br> <!--  <h4 class="timeline-title"><b>Android Users :</b> </h4>  -->
<p class="pstyle"><strong> Note: </strong> All the students should maintain proper bandwidth and use head phones or ear phones for echo free HD voice.</p>               <br>
               <br>

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