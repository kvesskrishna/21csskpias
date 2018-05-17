<?php require_once('head.php');
 ?>
  <body>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js">
    <div id="page" >
        <?php require_once('header.php');?>
                 

        <div style="margin-top: 100px;"></div>
   
        <div class="container-fluid" >  
        <h3 class="headtext"> Gallery</h3>
         <hr>

          <!--PAGE CONTENT GOES HERE-->
          <div class="row">
        <div class="col-sm-8 col-md-8">

          
  
    
 <!-- gallery start -->   
            
       <div class="row">  
        <div class="col-sm-12 col-md-12">
          <div><h3>Videos</h3></div>
          <br>
            <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/videoGallery?api_key=160e64f13691a2f59d34492dc238f98e');
                  curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
                  $response=curl_exec($ch);
                  curl_close ($ch);
                  $result= json_decode($response);
                  ksort($result);
                  
                  foreach ($result as $video)
                  {
?>
              
            
            <div class="col-md-4 col-sm-6">
				<div class="video">
                <iframe class="embed-responsive-item" src='<?php echo $video->video_link?>' frameborder="0" allowfullscreen></iframe>
                </div>
				<p class="iframetext">
     <?php 
     $fulltitle=$video->video_title;
        $string = strip_tags($fulltitle);
if (strlen($string) > 26) {

    // truncate string
    $stringCut = substr($string, 0, 25);

    //if the string doesn't contain any space then it will cut without word basis.
    $string = substr($stringCut, 0, strrpos($stringCut, " ")).'... <br><a href="video-gallery.php?id='. $video->video_id.'" style="color:#428bca;" target="_blank">Watch Full video</a>';
}
       echo $string;
        ?>    
        </p>
            </div>
          <?php } ?>                        
        </div><!-- col div -->  
    </div> <!-- row div --> 
    
  <hr>  
            

            
    <!-- vedio gallery -->

   <div class="row">  
         
             <?php
                  $ch = curl_init();
                  curl_setopt ($ch, CURLOPT_URL, 'http://www.kpias.com/webservices/imgGallery?api_key=160e64f13691a2f59d34492dc238f98e');
                  curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
                  $response=curl_exec($ch);
                  curl_close ($ch);
                  $result= json_decode($response);
                  foreach ($result as $gallery)
                  {
                    ?>
                 <div class="col-sm-12 col-md-12">    
  <h3><?php echo $gallery->gallery_title?></h3>
  <?php 
foreach($gallery->images as $image)
{
  ?>
  <div class="col-md-3 col-sm-6"> <a href="<?php echo $image->img_file ?>" data-toggle="lightbox" data-title="A random title" data-footer="A custom footer text">
<img src="<?php echo $image->img_file ?>" Width=100% height=150px class="img-fluid"></a><br>
      <?php echo $image->img_title ?>
  </div>
   <?php } ?>               </div> 
                  <hr>
                  <?php } ?>

          
        </div><!-- col div -->  
          </div>
           <!-- row div --> 
    


     
     <!-- 2nd part -->
     
     <div class="col-sm-4 col-md-4">
     
     				
                                <!-- Carousel
                                ================================================== -->
       <?php require_once('latest-news.php');?>                         
     
     </div>  <!-- 2nd end -->   
      </div> <!-- row div -->    
      </div>    
        
        <br>
        
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
    <script type="text/javascript">
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
    </script>
    
   <style>
      
       .galleryblock {}
      </style>
    
  </body>
</html>