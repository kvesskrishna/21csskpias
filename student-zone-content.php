<?php require_once('head.php');

$id=$_GET['id'];

$cat=$_GET['cat'];



            $ch = curl_init();  

              curl_setopt($ch,CURLOPT_URL,'http://www.kpias.com/webservices/studentzone?api_key=160e64f13691a2f59d34492dc238f98e&category='.$cat.'&ca_id='.$id);

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

        <h3 class="headtext"> <?php echo $result[0]->ca_title?></h3>

         <hr>



          <!--PAGE CONTENT GOES HERE-->

          <div class="row">

        <div class="col-sm-8 col-md-8">

<h4><b>Description: </b><?php echo $result[0]->ca_description;?></h4>

<iframe src="http://docs.google.com/gview?url=<?php echo $result[0]->ca_file;?>&embedded=true" 

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