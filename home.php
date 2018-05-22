<?php require_once('head.php');?>



<body>
	<style type="text/css">

</style>
<div class="hidden-md hidden-lg">
	<p class="text-center" style="margin-top: 100px">
		<b style="font-size: 18px;color: black">Install KPIAS App, Stay Updated..</b>
		<a href='https://itunes.apple.com/in/app/kpias/id1110691801?mt=8&at=10l6Xd&ct=jeav72vtgc00xkod01g9a'><img alt='Download on App Store' src='https://www.kpias.com/appstore-logo.png'/></a>

		<a href='https://play.google.com/store/apps/details?id=com.a21css.kpias&hl=en&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'><img alt='Get it on Google Play' src='https://www.kpias.com/playstore-logo.png'/ style="margin-top: 25px"></a>
	</p>
</div>
<div id="page">

	<?php require_once('header.php');?>

	<div class="hidden-xs hidden-sm" class="container-fluid">

		<div class="row">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
			<link rel="stylesheet" href="https://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">

			<div id="first-slider">
				<div id="carousel-example-generic" class="carousel slide carousel-fade">
					<!-- Indicators -->

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<!-- Item 1 -->
						<div class="item active slide1">
							<div class="row"><div class="container">

								<div class="col-md-9 text-left">
									<h3 data-animation="animated bounceInDown">Make Your Civils Dream</h3>
									<h4 data-animation="animated bounceInUp">Come True With KPIAS</h4>             
								</div>
							</div></div>
						</div> 
						<!-- Item 2 -->
						<div class="item slide2">
							<div class="row"><div class="container">
								<div class="col-md-7 text-left">
									<h3 data-animation="animated bounceInDown"> Environment that Relishes</h3>
									<h4 data-animation="animated bounceInUp">Making Your Preparation The Best Experience </h4>
								</div>

							</div></div>
						</div>
						<div class="item slide22">
							<div class="row"><div class="container">


							</div></div>
						</div>
						<!-- Item 3 -->
						<div class="item slide3">
							<div class="row"><div class="container">
								<div class="col-md-7 text-right">
									<h3 data-animation="animated bounceInDown">Outstanding Guidance </h3>
									<h4 data-animation="animated bounceInUp">Meet The Top Trainers</h4>
								</div>

							</div></div>
						</div>
						<!-- Item 4 -->
						<div class="item slide4">
							<div class="row"><div class="container">
								<div class="col-md-7 text-left">
									<h3 data-animation="animated bounceInDown">We are creative</h3>
									<h4 data-animation="animated bounceInUp">Get Start Your Preparation</h4>
								</div>

							</div></div>
						</div>
						<!-- End Item 4 -->
						<div class="item slide5">
							<div class="row"><div class="container">
								<div class="col-md-7 text-right">
									<h3 data-animation="animated bounceInDown">Assisting You At The Maximum</h3>
									<h4 data-animation="animated bounceInUp">To Put Your Best Spirit</h4>
								</div>

							</div></div>
						</div>
						<div class="item slide6">
							<div class="row"><div class="container">
								<div class="col-md-7 text-left">
									<h3 data-animation="animated bounceInDown">Not Only Studies</h3>
									<h4 data-animation="animated bounceInUp">Every Activity That Counts</h4>
								</div>

							</div></div>
						</div>
						<div class="item slide7">
							<div class="row"><div class="container">
								<div class="col-md-7 text-right">
									<h3 data-animation="animated bounceInDown">Success Doesnt Come In A Day</h3>
									<h4 data-animation="animated bounceInUp">Get The Best Out Of Your Every Effort</h4>
								</div>

							</div></div>
						</div>
						<div class="item slide8">
							<div class="row"><div class="container">
								<div class="col-md-7 text-left">
									<h3 data-animation="animated bounceInDown">Creative, Confident and Clear</h3>
									<h4 data-animation="animated bounceInUp">Get Start With Awesome KPIAS </h4>
								</div>

							</div>
						</div>
					</div>
				</div>
				<!-- End Wrapper for slides-->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
				</a>
			</div>
		</div>

	</div>

</div>

<div id="push">

</div>





<?php require_once('forbox.php');?>



<?php require_once('mostviewed.php');?>





<section class="px-bg">

	<div class="container">

		<div class="row">

			<div class="col-md-12">

				<?php 

				$ch = curl_init();  

				curl_setopt($ch,CURLOPT_URL,'https://www.21cssindia.com/new/workspace/webservices/visionMission?api_key=160e64f13691a2f59d34492dc238f98e');

				curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

				$response=curl_exec($ch);

				curl_close($ch);

				$result = json_decode($response);



				foreach ($result as $content) {



					?>

					<div class="col-md-12">  



						<h3><?php echo $content->content_title?>

							<br>



							<ul style="font-size: 18px;">

								<?php echo $content->content_description?>

							</ul> </h3>

							<?php 

						}

						?> 

						<a href="content.php" class="button">Read More</a>

					</div>

				</div>

			</div>

		</div>

	</section>



	<section>
		<div class="container">
			<div class="row">
				<h3>Our Achievers</h3>
				<div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
					<div class="MultiCarousel-inner">
						<?php
						$ch = curl_init();  
						curl_setopt($ch,CURLOPT_URL,'https://www.kpias.com/webservices/ourWinners?api_key=160e64f13691a2f59d34492dc238f98e');
						curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
						$response=curl_exec($ch);
						curl_close($ch);
						$result = json_decode($response);
						krsort($result);
              //var_dump($result);
              //echo $result[0]->service_name;
						foreach ($result as $winner) {
              # code...
							?>
							<div class="item">
								<div class="pad15 ">
									<p class="lead text-center" >
										<div style="height: 100px;width: 100%;font-size: 26px;font-weight: bold; background: #0099cc;color: white">
											<h4>All India Rank</h4>
											<?php echo $winner->winner_rank;?>
										</div>
									</p>
									<p style="color: black;font-weight: bold"><?php echo $winner->winner_name;?></p>
									<p style="color: black;font-weight: bold"><?php echo $winner->winner_course;?></p>
									<p style="color: black;font-weight: bold"><?php echo $winner->winner_year;?></p>
								</div>
							</div>
							<?php } ?>

						</div>
						<button class="btn btn-primary leftLst"><</button>
						<button class="btn btn-primary rightLst">></button>
					</div>
				</div>

			</div>
		</section>



		<div class="subscribe">

			<?php require_once('outreached-programs.php');?>

		</div>

		<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"  id="onload">

			<div class="modal-dialog">


				<div class="modal-content">

					<div class="modal-body">
						<img src="popup/20180522.jpeg" width="100%" />
						<div class="text-center" style="display: none;">
							<a href="popup/23042018.pdf" target="_blank" class="btn btn-primary btn-lg" alt="Popup Image|KPIAS">Download Schedule</a>
						</div>
					</div>

				</div>

			</div>
		</div>

		<?php require_once('bubble.php');?> <?php require_once('leftbubble.php');?>
		<?php require_once('footer.php');?>

	</div>

	<?php require_once('rightpanel.php');?>     

	<?php require_once('footscripts.php');?>
	<script type="text/javascript">
		$(window).load(function(){
			$('#onload').modal('show');
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function () {
			var itemsMainDiv = ('.MultiCarousel');
			var itemsDiv = ('.MultiCarousel-inner');
			var itemWidth = "";

			$('.leftLst, .rightLst').click(function () {
				var condition = $(this).hasClass("leftLst");
				if (condition)
					click(0, this);
				else
					click(1, this)
			});

			ResCarouselSize();




			$(window).resize(function () {
				ResCarouselSize();
			});

    //this function define the size of the items
    function ResCarouselSize() {
    	var incno = 0;
    	var dataItems = ("data-items");
    	var itemClass = ('.item');
    	var id = 0;
    	var btnParentSb = '';
    	var itemsSplit = '';
    	var sampwidth = $(itemsMainDiv).width();
    	var bodyWidth = $('body').width();
    	$(itemsDiv).each(function () {
    		id = id + 1;
    		var itemNumbers = $(this).find(itemClass).length;
    		btnParentSb = $(this).parent().attr(dataItems);
    		itemsSplit = btnParentSb.split(',');
    		$(this).parent().attr("id", "MultiCarousel" + id);


    		if (bodyWidth >= 1200) {
    			incno = itemsSplit[3];
    			itemWidth = sampwidth / incno;
    		}
    		else if (bodyWidth >= 992) {
    			incno = itemsSplit[2];
    			itemWidth = sampwidth / incno;
    		}
    		else if (bodyWidth >= 768) {
    			incno = itemsSplit[1];
    			itemWidth = sampwidth / incno;
    		}
    		else {
    			incno = itemsSplit[0];
    			itemWidth = sampwidth / incno;
    		}
    		$(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
    		$(this).find(itemClass).each(function () {
    			$(this).outerWidth(itemWidth);
    		});

    		$(".leftLst").addClass("over");
    		$(".rightLst").removeClass("over");

    	});
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
    	var leftBtn = ('.leftLst');
    	var rightBtn = ('.rightLst');
    	var translateXval = '';
    	var divStyle = $(el + ' ' + itemsDiv).css('transform');
    	var values = divStyle.match(/-?[\d\.]+/g);
    	var xds = Math.abs(values[4]);
    	if (e == 0) {
    		translateXval = parseInt(xds) - parseInt(itemWidth * s);
    		$(el + ' ' + rightBtn).removeClass("over");

    		if (translateXval <= itemWidth / 2) {
    			translateXval = 0;
    			$(el + ' ' + leftBtn).addClass("over");
    		}
    	}
    	else if (e == 1) {
    		var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
    		translateXval = parseInt(xds) + parseInt(itemWidth * s);
    		$(el + ' ' + leftBtn).removeClass("over");

    		if (translateXval >= itemsCondition - itemWidth / 2) {
    			translateXval = itemsCondition;
    			$(el + ' ' + rightBtn).addClass("over");
    		}
    	}
    	$(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
    	var Parent = "#" + $(ee).parent().attr("id");
    	var slide = $(Parent).attr("data-slide");
    	ResCarousel(ell, Parent, slide);
    }

});

		(function( $ ) {

    //Function to animate slider captions 
    function doAnimations( elems ) {
    //Cache the animationend event in a variable
    var animEndEv = 'webkitAnimationEnd animationend';
    
    elems.each(function () {
    	var $this = $(this),
    	$animationType = $this.data('animation');
    	$this.addClass($animationType).one(animEndEv, function () {
    		$this.removeClass($animationType);
    	});
    });
}

  //Variables on page load 
  var $myCarousel = $('#carousel-example-generic'),
  $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");

  //Initialize carousel 
  $myCarousel.carousel();
  
  //Animate captions in first slide on page load 
  doAnimations($firstAnimatingElems);
  
  //Pause carousel  
  $myCarousel.carousel('pause');
  
  
  //Other slides to be animated on carousel slide event 
  $myCarousel.on('slide.bs.carousel', function (e) {
  	var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
  	doAnimations($animatingElems);
  });  
  $('#carousel-example-generic').carousel({
  	interval:3000,
  	pause: "false"
  });
  
})(jQuery); 

</script>
</body>

</html>