<?php require_once('head.php');?>

    
  <body>
    <div id="page">
        <?php require_once('header.php');?>
                 

        <div style="margin-top: 100px;"></div>
   
        <div class="container-fluid">  
        <h3 class="headtext"> Registration</h3>
         <hr>

          <!--PAGE CONTENT GOES HERE-->
          <div class="row">
        <div class="col-sm-8 col-md-8">
          
    <ul class="timeline">
        <li>
          <div class="timeline-badge info"><i class="fa fa-check-square"></i></div>
          <div class="timeline-panel" title="click me">
            <div class="timeline-heading">
              <!--<h4 class="timeline-title">Registration Form</h4>-->
            
            
             
              <form class="form-horizontal" role="form" method="POST" action="registerUser.php">
                 <h2>Registration Form</h2>

                <div class="form-group2">
                    <label for="firstName" class="col-sm-3 col-md-4 control-label">Full Name</label>
                    <div class="col-sm-9 col-md-8">
                        <input type="text" id="firstName" placeholder="Full Name" class="form-control" required autofocus>
                        <span class="help-block">Last Name, First Name</span>
                    </div>
                </div>
                
                <div class="form-group2">
                    <label for="email" class="col-sm-3 col-md-4 control-label">Email</label>
                    <div class="col-sm-9 col-md-8">
                        <input type="email" id="email" placeholder="Email" class="form-control" required>
                    </div>
                </div>
                <div class="form-group2">
                    <label for="email" class="col-sm-3 col-md-4 control-label">Password</label>
                    <div class="col-sm-9 col-md-8">
                        <input type="password" id="pwd" placeholder="Password" class="form-control" required>
                    </div>
                </div>
                <div class="form-group2">
                    <label for="email" class="col-sm-3 col-md-4 control-label">Confirm Password</label>
                    <div class="col-sm-9 col-md-8">
                        <input type="password" id="pwd" placeholder="Password" class="form-control" required>
                    </div>
                </div>
                
                
                <div class="form-group2">
                    <label for="level" class="col-sm-3 col-md-4 control-label">Level</label>
                    <div class="col-sm-9 col-md-8">
                        <select id="level" class="form-control">
                            <option>Intermediate</option>
                            <option>Degree</option>
                            <option>PG</option>
                           
                            
                        </select>
                    </div>
                </div> <!-- /.form-group2 -->
                
                <div class="form-group2">
                    <label for="course" class="col-sm-3 col-md-4 control-label">Course</label>
                    <div class="col-sm-9 col-md-8">
                        <select id="course" class="form-control">
                            <option>MPC</option>
                            <option>MEC</option>
                            <option>CEC</option>
                           
                            
                        </select>
                    </div>
                </div> <!-- /.form-group2 -->
                
                <div class="form-group2">
                    <label for="contact_no" class="col-sm-3 col-md-4 control-label">Phone Number</label>
                    <div class="col-sm-9 col-md-8">
                        <!--<input type="password" id="password" placeholder="Password" class="form-control">-->
                         <input name="contact_no" placeholder="(639)" class="form-control" type="number" required>
                    </div>
                </div>
                
                 <div class="form-group2">
                    <label for="Subject" class="col-sm-3 col-md-4 control-label">Subject</label>
                    <div class="col-sm-9 col-md-8">
                        <input type="text" id="Subject" placeholder=" Enter Subject" class="form-control" required>
                    </div>
                </div>
                
                <div class="form-group2">
                    <label for="message" class="col-sm-3 col-md-4 control-label">Your Message</label>
                    <div class="col-sm-9 col-md-8">
                        <textarea id="message" class="form-control">
                            
                            
                        </textarea>
                    </div>
                </div> <!-- /.form-group2 -->
                
                
                
                
                <div class="form-group2">
               		<label class="col-sm-3 col-md-4" control-label> </label>
                      <!--<div class="col-sm-9 col-sm-offset-3 col-md-8">-->
                    <div class="col-sm-9  col-md-8">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form> <!-- /form -->
            
            </div>
            
          </div>
        </li>
        
        
         <li>
          <div class="timeline-badge danger"><i class="fa fa-cubes"></i></div>
          <div class="timeline-panel" title="click me">
          
          <div class="timeline-heading">
              <h4 class="timeline-title">Address:</h4>
            
             	 <ul style="list-style-position:outside; list-style-type:none;">
                	<li> Opp. Panchayat School, </li>
                    <li> Sita Nagaram Road, Torredu(v), </li>
                    <li> Rajahmundry – 533104, </li>
                    <li> East Godavari District, </li>
                    <li> Andhra Pradesh. </li>
                     <li>Tel: 0883-2497566. </li>
                    
                </ul>
           
            </div>
            
          </div>
        </li>
        
    </ul>

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