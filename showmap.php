<?php require_once('head.php');

$map=$_GET['id'];

switch ($map) {

  case 'vjybsroute':
  $title="KPIAS Vijayawada - Pandit Nehru Bustation Route Map";
  $link="https://www.google.com/maps/d/embed?mid=14J3WNPHQiU9FvzIej5ou5zA9fY9b4TNI";
  break;
  case 'vjyrsroute':
  $title="KPIAS Vijayawada - Railway Station Route Map";
  $link="https://www.google.com/maps/d/embed?mid=1i8IwQcsE_jHJUEpDMuJoevAFBgHr1-v9";
  break;


  
  default:
    header('Location:home');
  break;
}

?>


<body>
  <div id="page">
    <?php require_once('header.php');?>


    <div style="margin-top: 100px;"></div>

    <div class="container-fluid">  
      <h3 class="headtext"><?php echo $title?></h3>
      <hr>

      <!--PAGE CONTENT GOES HERE-->
      <div class="row">
        <div class="col-sm-8 col-md-8">
          <iframe src="<?php echo $link?>" width="100%" height="480"></iframe>
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