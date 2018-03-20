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
          
            <div class="timeline-heading">
              <form class="form-horizontal" role="form" method="POST" >
                 <h2>Registration Form</h2>

      <table>
      <tr>
        <td width="100%" style="font-size:22px;">
          Do You have a KPIAS ID? &nbsp;
          <br>
          <input type="radio" checked="checked" name="actions" value="Yes" id="yes" class="static_class" />
          <label for="yes">Yes &nbsp;</label>
          <input type="radio" checked="checked" name="actions" value="No" id="no" class="static_class"/>
          <label for="no">No </label>
        </td>
      </tr>
      <tr>
        <td width="100%">
          <div id="have" style="display: none;">
            <textarea cols="50" wrap="physical" rows="1" name="feedback" class="textboxid4 style"></textarea>
            <div class="col-sm-9  col-md-8">
              <button type="submit" class="btn btn-primary btn-block" onclick="alert('Thank You, We will inform soon. Our eGovernence Module is under development');">Submit</button>
            </div>
          </div>

          <div id="havenot" style="display: none;">
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
                    <label for="contact" class="col-sm-3 col-md-4 control-label">Contact No</label>
                    <div class="col-sm-9 col-md-8">
                        <input type="number" id="contact" placeholder="phone" class="form-control" required>
                    </div>              
                
                <div class="form-group2">
                    <label for="course" class="col-sm-3 col-md-4 control-label">Course you want to Join</label>
                    <div class="col-sm-9 col-md-8">
                        <select id="course" class="form-control">
                            <option>Inter with IAS</option>
                            <option>Civils / Groups</option>
                           
                            
                        </select>
                    </div>
                </div>
            <div class="col-sm-9  col-md-8">
              <button type="submit" class="btn btn-primary btn-block" onclick="alert('Thank You for your interest. We will get back to you soon. Our eGovernence Module is under development');">Register</button>
            </div>
          </div>
        </td>
      </tr>
      </table>

    
                
            </form> <!-- /form -->
            
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
    <script src="http://code.jquery.com/jquery.js"></script>
    <script type="text/javascript">
      $(function(){
        $(".static_class").click(function(){
          if($(this).val() === "Yes")
            $("#have").show("fast") && $("#havenot").hide("fast");
          else
            $("#havenot").show("fast") && $("#have").hide("fast");
        });
      });
    </script>
    
   

   
    
  </body>
</html>