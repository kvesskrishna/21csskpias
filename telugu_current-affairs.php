<?php require_once('head.php'); 
if (isset($_GET['id']))
{
  $id=$_GET['id'];

}
else {
  header('Location:suggested-reference.php');
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
  echo "Telugu Current Affairs 1";
  break;
 case 2:
  echo "Telugu Current Affairs 2";
  break;
  case 3:
  echo "Telugu Current Affairs 3";
  break;
  case 4:
  echo "Telugu Current Affairs 4";
  break;
  case 5:
  echo "Telugu Current Affairs 5";
  break;
  case 6:
  echo "Telugu Current Affairs 6";
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
  echo "Telugu Current Affairs 1";
  break;
 case 2:
  echo "Telugu Current Affairs 2";
  break;
  case 3:
  echo "Telugu Current Affairs 3";
  break;
  case 4:
  echo "Telugu Current Affairs 4";
  break;
  case 5:
  echo "Telugu Current Affairs 5";
  break;
  case 6:
  echo "Telugu Current Affairs 6";
  break;

 default:
  # code...
  break;
} ?></h4>

<iframe src="
<?php switch ($id) {
 case 1:
  echo "http://docs.google.com/gview?url=http://www.kpias.com/telugucurrentaffairs/01a.pdf&embedded=true";
  break;
 case 2:
  echo "http://docs.google.com/gview?url=http://www.kpias.com/telugucurrentaffairs/02a.pdf&embedded=true";
  break;
  case 3:
  echo "http://docs.google.com/gview?url=http://www.kpias.com/telugucurrentaffairs/03a.pdf&embedded=true";
  break;
  case 4:
  echo "http://docs.google.com/gview?url=http://www.kpias.com/telugucurrentaffairs/04a.pdf&embedded=true";
  break;
  case 5:
  echo "http://docs.google.com/gview?url=http://www.kpias.com/telugucurrentaffairs/05a.pdf&embedded=true";
  break;
  case 6:
  echo "http://docs.google.com/gview?url=http://www.kpias.com/telugucurrentaffairs/06a.pdf&embedded=true";
  break;
 
 default:
  # code...
  break;
} ?>"

style="width:100%; height:760px;" frameborder="0"></iframe>

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