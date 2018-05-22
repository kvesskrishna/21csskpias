	<style>
		.btn {margin-top: 4px;
			margin-bottom: 4px;}
	</style>
<section class="for-box">
		<?php
						$ch = curl_init();  
					    curl_setopt($ch,CURLOPT_URL,'https://www.kpias.com/webservices/latestEvents?api_key=160e64f13691a2f59d34492dc238f98e');
					    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
					    $response=curl_exec($ch);
					    curl_close($ch);
					    $result = json_decode($response);
					    krsort($result);
					    ?>
		<marquee onmouseover="this.stop();" onmouseout="this.start();" bgcolor="#fff">
			<?php
							foreach ($result as $event) 
							{
								echo '<img src="img/new-icon2.gif"> <a href= "#" style="color:black; font-family: Georgia;">'. $event->event_title . ' <a href="show-latest-event.php?id='.$event->event_id.'" class="btn btn-info btn-xs">More</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;';
							}
								?>
		</marquee>

		<!-- /.for-box -->
	</section>