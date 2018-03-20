
  
     <?php

                        $ch = curl_init();  

                        curl_setopt($ch,CURLOPT_URL,'http://www.kpias.com/webservices/latestEvents?api_key=160e64f13691a2f59d34492dc238f98e');

                        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

                        $response=curl_exec($ch);

                        curl_close($ch);

                        $result = json_decode($response);

                        krsort($result);

                        //var_dump($result);

                        //echo $result[0]->service_name;

                      

                        ?>


                 <div id="myCarousel" class="carousel slide">        
                                    <div class="carousel-inner" style="height: 150px; width: 100%;overflow: scroll;"> 
 <?php

                            foreach ($result as $key=>$event) 

                            {  
                                if ($key == 0) {
                                    $class = "active";# code...
                                }else{
                                    $class = "";
                                }
                                echo "<div class='item " . $class . "'>";
                                ?>
                                           <!-- <a href="#"><img class="thumbnail" src="http://placehold.it/600x400/" alt="Slide2"></a>-->
                                            <div class="caption">
                                              <h4><?php echo  $event->event_title ?></h4>
                                                <p><a href="show-latest-event?id=<?php echo $event->event_id?>"> <?php echo $event->event_description ?> </a> </p>
                                            </div>                                                           
                                         </div>  
                            
 <?php
                           }
                                ?>

                                     </div>
                                     <ol class="carousel-indicators">
                                        <?php

                            foreach ($result as $key=>$event) 

                            {   
                                if ($key == 0) {
                                    $class = " class='active'";# code...
                                }else{
                                    $class = "";
                                }
                                echo "<li data-target='#myCarousel' data-slide-to='". $key ."'". $class ."></li>";
                            }
                                ?>
                                      </ol> 
                                     </div>
            
                                <!-- Carousel
                                ================================================== -->
                                <!-- End Carousel -->  
                            
     
     
                  
                                <!--<div class="mocktest">
                                  <div class="mock">
                                  <h3>Take Mock Exams </h3>
                                    </div>
                                    <div class="list-group">
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-info"> 
                                            <span class="fa-stack fa-2x">
                                            <i class="fa fa-circle fa-stack-2x icon-background3"></i>
                                            <i class="fa fa-file-text-o fa-stack-1x"></i>
                                            </span> Prelims Mock Exam – GS Paper-1(Polity)</a>
                                    
                                    
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-success">
                                            <span class="fa-stack fa-2x">
                                            <i class="fa fa-circle fa-stack-2x icon-background3"></i>
                                            <i class="fa fa-file-text-o fa-stack-1x"></i>
                                            </span> Arithmetic Reasoning</a>
                                    
                                    
                                   
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-info">
                                            <span class="fa-stack fa-2x">
                                            <i class="fa fa-circle fa-stack-2x icon-background3"></i>
                                            <i class="fa fa-file-text-o fa-stack-1x"></i>
                                            </span>Arithmetic Reasoning</a>
                                            
                                      
                                    
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-success">
                                            <span class="fa-stack fa-2x">
                                            <i class="fa fa-circle fa-stack-2x icon-background3"></i>
                                            <i class="fa fa-file-text-o fa-stack-1x"></i>
                                            </span>Arithmetic Reasoning</a>
                                    
                                    
                                   
                                    <a href="#" class="list-group-item list-group-item-action list-group-item-info">
                                            <span class="fa-stack fa-2x">
                                            <i class="fa fa-circle fa-stack-2x icon-background3"></i>
                                            <i class="fa fa-file-text-o fa-stack-1x"></i>
                                            </span>Arithmetic Reasoning</a>
                                    
                                    
                                    
                                   
                                    </div>
                                
                                </div>-->
                                <br>
                               
                               <div class="dwn">
                                    <h3>Download Brochure </h3>
                                    <a href="#" class="btn btn-success "><i class="fa fa-download fa-1x icon-white"></i> RIB -2016 Test Series</a><br><br>
                                        <a href="#" class="btn btn-success "><i class="fa fa-download fa-1x icon-white"></i> Mains GS &GE Daily & Weekend Tests</a>
                               </div>

                                <!--<div>
                                <h3 style="color:#0C3C5A;">Your Downloads cart </h3>
                                <p style="color:#000;">You have 0 items in your shopping cart. </p>
                                
                                </div>-->
                                
                              
     
     
     
     
     
          
          
          
          
          
          
          
        