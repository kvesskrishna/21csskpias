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
  echo "Suggested Group 1 Reference Materials";
  break;
 case 2:
  echo "Suggested Group 2 Reference Materials";
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
  echo "Suggested Group 1 Reference Materials";
  break;
 case 2:
  echo "Suggested Group 2 Reference Materials";
  break;
 
 default:
  # code...
  break;
} ?></h4>

<iframe src="
<?php switch ($id) {
 case 1:
  echo "http://docs.google.com/gview?url=http://www.kpias.com/references/group-1-reference-books.pdf&embedded=true";
  break;
 case 2:
  echo "http://docs.google.com/gview?url=http://www.kpias.com/references/group-2-reference-books.pdf&embedded=true";
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