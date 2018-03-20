<?php require_once('head.php');
$id=$_GET['id'];

            $ch = curl_init();  
              curl_setopt($ch,CURLOPT_URL,'http://www.21cssindia.com/new/workspace/webservices/latestEvents?api_key=160e64f13691a2f59d34492dc238f98e&event_id='.$id);
              curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
              $response=curl_exec($ch);
              curl_close($ch);
              $result = json_decode($response);
            //var_dump($result);
              //echo $result[0]->service_name;
?>
    
  <body>
    <div id="page">
        <?php require_once('header.php');?>
                 

        <div style="margin-top: 100px;"></div>
   
        <div class="container-fluid">  
        <h3 class="headtext"> Latest Events</h3>
         <hr>

          <!--PAGE CONTENT GOES HERE-->
          <div class="row">
        <div class="col-sm-8 col-md-8">
<h4><b>Title </b><?php echo $result[0]->event_title;?></h4>
<h6 style="color:black"><?php echo $result[0]->event_description?> </h6>
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