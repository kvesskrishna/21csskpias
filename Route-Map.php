<?php require_once('head.php'); 
if (isset($_GET['id']))
{
  $id=$_GET['id'];

}
else {
  header('Location:contact.php');
}
?>

    

  <body>

    <div id="page">

        <?php require_once('header.php');?>

                 



        <div style="margin-top: 100px;"></div>

   

        <div class="container-fluid">

        <h3 class="headtext">
       <?php switch ($id) {
 case 1:
  echo "Route Map";
  break;
 case 2:
  echo "Route Map";
  break;
  case 3:
  echo "Route Map";
  break;
  case 4:
  echo "Route Map";
  break;
  case 5:
  echo "Route Map";
  break;
  case 6:
  echo "Route Map";
  break;
  case 7:
  echo "Route Map";
  break;
  case 8:
  echo "Route Map";
  break;
  case 9:
  echo "Route Map";
  break;
  case 10:
  echo "Route Map";
  break;
  case 11:
  echo "Route Map";
  break;
  case 12:
  echo "Route Map";
  break;
  case 13:
  echo "Route Map";
  break;
  case 14:
  echo "Route Map";
  break;
  case 15:
  echo "Route Map";
  break;
  case 16:
  echo "Route Map";
  break;
  case 17:
  echo "Route Map";
  break;
  case 18:
  echo "Route Map";
  break;
 
 default:
  # code...
  break;
} ?>
  </h3>

         <hr>



          <!--PAGE CONTENT GOES HERE-->

          <div class="row">

        <div class="col-sm-8 col-md-8">

<h4><b>Description: </b><?php switch ($id) {
 case 1:
  echo "Route from Hyderabad Bus-Complex to Ashok Nagar KPIAS branch";
  break;
 case 2:
  echo "Route from Hyderabad Railway-Station to Ashok Nagar KPIAS branch";
  break;
  case 3:
  echo "Route from secunderabad Bus-Complex to Ashok Nagar KPIAS branch";
  break;
  case 4:
  echo "Route from secunderabad Railway-Station to Ashok Nagar KPIAS branch";
  break;
  case 5:
  echo "Route from Hyderabad Bus-Complex to SR Nagar KPIAS branch";
  break;
  case 6:
  echo "Route from Hyderabad Railway-Station to SR Nagar KPIAS branch";
  break;
  case 7:
  echo "Route from secunderabad Bus-Complex to SR Nagar KPIAS branch";
  break;
  case 8:
  echo "Route from secunderabad Railway-Station to SR Nagar KPIAS branch";
  break;
  case 9:
  echo "Route from Hyderabad Bus-Complex to KPHB KPIAS branch";
  break;
  case 10:
  echo "Route from Hyderabad Railway-Station to KPHB KPIAS branch";
  break;
  case 11:
  echo "Route from secunderabad Bus-Complex to KPHB KPIAS branch";
  break;
  case 12:
  echo "Route from secunderabad Railway-Station to KPHB KPIAS branch";
  break;
  case 13:
  echo "Route from Visakhapatnam Bus-Complex to Dwaraka Nagar KPIAS branch";
  break;
  case 14:
  echo "Route from Visakhapatnam Railway-Station to Dwaraka Nagar KPIAS branch";
  break;
  case 15:
  echo "Route from Rajahmundry Bus-Complex to Torredu KPIAS branch";
  break;
  case 16:
  echo "Route from Rajahmundry Railway-Station to Torredu KPIAS branch";
  break;
  case 17:
  echo "Route from Vijayawada Bus-Complex to Bandar Road KPIAS branch";
  break;
  case 18:
  echo "Route from Vijayawada Railway-Station to Bandar Road KPIAS branch";
  break;

 default:
  # code...
  break;
} ?></h4>

<iframe src="
<?php switch ($id) {
 case 1:
  echo "https://www.google.com/maps/d/embed?mid=15u1TwyvQiw-jVPuQyVF5syu7he1nYV3V&embedded=true";
  break;
 case 2:
  echo "https://www.google.com/maps/d/embed?mid=1YtQFeOf5iFID2r9FOCJuudQxcWWM2BuL&embedded=true";
  break;
  case 3:
  echo "https://www.google.com/maps/d/embed?mid=17Ubl7tBIrFXFFzDyJi5SD9ZOD19iWvnf&embedded=true";
  break;
  case 4:
  echo "https://www.google.com/maps/d/embed?mid=1HKcgWZ2wrfMODDqerhEZgxpo9OjwGQsa&embedded=true";
  break;
  case 5:
  echo "https://www.google.com/maps/d/embed?mid=1_fBskYnFkmY1j6YhTwCjkmtJk4S4JECy&embedded=true";
  break;
  case 6:
  echo "https://www.google.com/maps/d/embed?mid=1v5MNERI_nlOKzyqsQfX7l1gSmAuPFBtQ&embedded=true";
  break;
  case 7:
  echo "https://www.google.com/maps/d/embed?mid=1s_GUYkWnKewMZaq8_G2zmj1D3W4yU-dO";
  break;
  case 8:
  echo "https://www.google.com/maps/d/embed?mid=1Riu5TgD0Jcl0L3_cUmMw8thdct2_i6DP";
  break;
  case 9:
  echo "https://www.google.com/maps/d/embed?mid=1KtptiMCZVrUD-eMO1picnnheepIX21ge";
  break;
  case 10:
  echo "https://www.google.com/maps/d/embed?mid=1V2jFGCMm3jWd90WXz8lCL2OMqFOWhhIL";
  break;
  case 11:
  echo "https://www.google.com/maps/d/embed?mid=1sl3Zmr9Z1RDtd_9rW-8U0yDK2in9V2LG";
  break;
  case 12:
  echo "https://www.google.com/maps/d/embed?mid=1DxkjIvi1EntQP5S0Nv3gmWTDnFDUGU4I";
  break;
  case 13:
  echo "https://www.google.com/maps/d/embed?mid=1S79ya4kcD6l_cZLMoH87FhjchEKIE5TH&embedded=true";
  break;
  case 14:
  echo "https://www.google.com/maps/d/embed?mid=1iYcN3vy8LO7ZeH-ZUCuX44DCy0hefSiK&embedded=true";
  break;
  case 15:
  echo "https://www.google.com/maps/d/embed?mid=1BzlNQSyhUZ279uslY_0Zj5BXOb0ugYER&embedded=true";
  break;
  case 16:
  echo "https://www.google.com/maps/d/embed?mid=1BzlNQSyhUZ279uslY_0Zj5BXOb0ugYER&embedded=true";
  break;
  case 17:
  echo "https://www.google.com/maps/d/embed?mid=1NFvYgYxB0s899V6W1oQacQTziq6pvA0v&embedded=true";
  break;
  case 18:
  echo "https://www.google.com/maps/d/embed?mid=1i8IwQcsE_jHJUEpDMuJoevAFBgHr1-v9&embedded=true";
  break;
 
 default:
  # code...
  break;
} ?>"

style="width:640px; height:480px;" frameborder="0"></iframe>

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