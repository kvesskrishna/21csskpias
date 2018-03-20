<?php 

$cat=$_GET['category'];

require_once('head.php');?>



    

  <body>

<style type="text/css">

  .accpanel{

    width: 100%;

    border:0;

    padding: 1px;

    background: #ddd;

    box-shadow: inset 0 0 0px 0px #112136;

  }

  .accpanelbody{

    background: #eee;

    color: #111;

  }

</style>

    <div id="page">

        <?php require_once('header.php');?>

                 



        <div style="margin-top: 100px;"></div>

   

        <div class="container-fluid">  

        <h3 class="headtext"> Student Zone > Current Affairs </h3>

         <hr>



          <!--PAGE CONTENT GOES HERE-->

          <div class="row">

         <div class="col-sm-8 col-md-8">

        <div class="panel-group" id="accordion">

          <?php

            $ch = curl_init();  

              curl_setopt($ch,CURLOPT_URL,'http://www.kpias.com/webservices/studentzone?api_key=160e64f13691a2f59d34492dc238f98e&category='.$cat);

              curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

              $response=curl_exec($ch);

              curl_close($ch);

              $result = json_decode($response);

              krsort($result);

              //var_dump($result);

              //echo $result[0]->service_name;

            foreach ($result as $item) {

              # code...

            

              ?>

            <div class="panel panel-default accpanel">

                <div class="panel-heading">

                    <h4 class="panel-title">

                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $item->ca_id?>">

                        <div class="container">

                            <div class="row">

                                <div class="col-sm-12" style="color: black"><?php echo $item->ca_title?> </div> 

                            </div>

                        </div>

                    </a>

                </h4>

                </div>

                <div id="collapse<?php echo $item->ca_id?>" class="panel-collapse collapse">

                    <div class="panel-body accpanelbody">

                        <?php echo $item->ca_description?>

                        <br>

                        <a class="btn btn-success" href="student-zone-content.php?id=<?php echo $item->ca_id.'&cat='.$item->category?>">Read More</a>

                    </div>

                </div>

            </div>

            <?php } ?>

        </div>

        <div class="col-md-12 text-center">

            <ul id="myPager" class="pagination"></ul>

        </div>

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

  <script>/* pagination plugin */

$.fn.pageMe = function(opts){

    var $this = this,

        defaults = {

            perPage: 7,

            showPrevNext: false,

            numbersPerPage: 1,

            hidePageNumbers: false

        },

        settings = $.extend(defaults, opts);

    

    var listElement = $this;

    var perPage = settings.perPage; 

    var children = listElement.children();

    var pager = $('.pagination');

    

    if (typeof settings.childSelector!="undefined") {

        children = listElement.find(settings.childSelector);

    }

    

    if (typeof settings.pagerSelector!="undefined") {

        pager = $(settings.pagerSelector);

    }

    

    var numItems = children.size();

    var numPages = Math.ceil(numItems/perPage);



    var curr = 0;

    pager.data("curr",curr);

    

    if (settings.showPrevNext){

        $('<li><a href="#" class="prev_link">«</a></li>').appendTo(pager);

    }

    

    while(numPages > curr && (settings.hidePageNumbers==false)){

        $('<li><a href="#" class="page_link">'+(curr+1)+'</a></li>').appendTo(pager);

        curr++;

    }

  

    if (settings.numbersPerPage>1) {

       $('.page_link').hide();

       $('.page_link').slice(pager.data("curr"), settings.numbersPerPage).show();

    }

    

    if (settings.showPrevNext){

        $('<li><a href="#" class="next_link">»</a></li>').appendTo(pager);

    }

    

    pager.find('.page_link:first').addClass('active');

    pager.find('.prev_link').hide();

    if (numPages<=1) {

        pager.find('.next_link').hide();

    }

    pager.children().eq(0).addClass("active");

    

    children.hide();

    children.slice(0, perPage).show();

    

    pager.find('li .page_link').click(function(){

        var clickedPage = $(this).html().valueOf()-1;

        goTo(clickedPage,perPage);

        return false;

    });

    pager.find('li .prev_link').click(function(){

        previous();

        return false;

    });

    pager.find('li .next_link').click(function(){

        next();

        return false;

    });

    

    function previous(){

        var goToPage = parseInt(pager.data("curr")) - 1;

        goTo(goToPage);

    }

     

    function next(){

        goToPage = parseInt(pager.data("curr")) + 1;

        goTo(goToPage);

    }

    

    function goTo(page){

        var startAt = page * perPage,

            endOn = startAt + perPage;

        

        children.css('display','none').slice(startAt, endOn).show();

        

        if (page>=1) {

            pager.find('.prev_link').show();

        }

        else {

            pager.find('.prev_link').hide();

        }

        

        if (page<(numPages-1)) {

            pager.find('.next_link').show();

        }

        else {

            pager.find('.next_link').hide();

        }

        

        pager.data("curr",page);

       

        if (settings.numbersPerPage>1) {

          $('.page_link').hide();

          $('.page_link').slice(page, settings.numbersPerPage+page).show();

      }

      

        pager.children().removeClass("active");

        pager.children().eq(page+1).addClass("active");

    

    }

};

/* end plugin */



$(document).ready(function(){

    

  $('#accordion').pageMe({pagerSelector:'#myPager',childSelector:'.panel',showPrevNext:true,hidePageNumbers:false,perPage:10});

    

});

</script>  

   

    

  </body>

</html>