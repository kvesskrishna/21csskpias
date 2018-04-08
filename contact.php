<?php require_once('head.php');?>

    
  <body>
    <div id="page">
        <?php require_once('header.php');?>
                 

        <div style="margin-top: 100px;"></div>
   
        <div class="container-fluid">  
        <h3 class="headtext">Contact</h3>
        <hr>
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
                      <!--Page Content Goes Here-->
            <div id="map" style="height: 400px; width: 100%;">

            </div>
          </div>
        </div>
        <div style="margin-top: 50px;"></div>
        <div class="row">
            <div class="col-md-6">

              <div class="alert alert-success hidden" id="contactSuccess">
                <strong>Success!</strong> Your message has been sent to us.
              </div>

              <div class="alert alert-danger hidden" id="contactError">
                <strong>Error!</strong> There was an error sending your message.
              </div>

              <h2 class="mb-sm mt-sm"><strong>Contact</strong> Us</h2>
              <form id="contactForm" action="php/contact-form.php" method="POST">
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-6">
                      <label>Your name *</label>
                      <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="col-md-6">
                      <label>Your email address *</label>
                      <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Subject</label>
                      <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group">
                    <div class="col-md-12">
                      <label>Message *</label>
                      <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" required></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <input type="submit" value="Send Message" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Loading...">
                  </div>
                </div>
              </form>
              <br>
            </div>
            <div class="col-md-6">

              <h4 class="heading-primary">Our <strong>Locations</strong></h4>
              <hr>
              <ul class="list list-icons list-icons-style-3 mt-xlg" style="list-style-type:none">

                <li><i class="fa fa-map-marker"></i> <strong>Hyderabad Branch:</strong><br>
                1) Opp : Sub Registrar Office, Ashok Nagar, Hyderabad-500020.
                <br>2) Opp.UmeshChandraStatue, Vodafone-Airtel Building, 3rd Floor, SR Nagar Busstop, SR Nagar, Hyderabad-500038 <br>
                <i class="fa fa-phone"></i> <strong>Phone:</strong> 08686233879, 040 - 65537733, 9972075540 </li><br>
                
                
                <li><i class="fa fa-map-marker"></i> <strong>Hyderabad Branch:</strong><br> Beside VRK Silks, Archids Building, Opp.Chutneys Restaurant, KPHB, Hyderabad-500072.<br>
                <i class="fa fa-phone"></i> <strong>Phone:</strong> +91 9502318332 <br>
                </li><br>

                <li><i class="fa fa-map-marker"></i> <strong>Visakhapatnam Branch:</strong><br>
                 Opp : Union Bank, 4th Lane Dwaraka Nagar. 2.D.No:47/14/8,#202, Isnar Satyasri Complex, 2ndFloor, ICICI Building, Dwaraka Nagar, Visakhapatnam-530016. <br>
                <i class="fa fa-phone"></i> <strong>Phone:</strong> 09247000899</li><br>
                
                <li><i class="fa fa-map-marker"></i> <strong>Rajahmundry Branch:</strong><br>
                Opp: Panchayat School, Torredu(v), Seetanagaram Road, Rajahmundry-533104.<br>
                <i class="fa fa-phone"></i> <strong>Phone:</strong> 9573416524, 9618883155, 9618885155</li><br>

                <li><i class="fa fa-map-marker"></i> <strong>Vijayawada Branch:</strong><br>
                <i class="fa fa-phone"></i> <strong>Phone:</strong> 09133678666, 09133351165<br><br>
                <i class="fa fa-envelope"></i> <strong>Email:</strong>
                  <a href="mailto:contact@21cssindia.com">info@kpias.com</a></li>
              </ul>

              <hr>

            </div>

          </div>
      </div>

     
     <!-- 2nd part -->
     
        
      

      <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="f-sicon">
            <h2>FOLLOW US ON</h2>
                     <ul>
                        <li><a href="https://www.facebook.com/21stCenturyIas"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/kpiasacademy"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/krishna-pradeep-872107106/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                         <li><a href="https://www.youtube.com/user/kptrainer21/videos" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
          <div class="copyright">
            &copy;KPIAS. All Right Reserved 2017<small>.Designed and Developed by <a href="http://www.21cssindia.com" style="color:white">21CSS India Pvt. Ltd.</a></small>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
   </div>
    <?php require_once('rightpanel.php');?>     
    <?php require_once('footscripts.php');?>

     <script>
    $('#myCarousel').carousel({
      interval:   4000
  });
    
    
    </script>
 
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOulZLrKOZcxCbyM01pXj9tM3iN-iST_Q&callback=initMap">
    </script>
    <script type="text/javascript">
    var locations = [
      ['India', 17.744649, 83.308444, 3]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 2,
      center: new google.maps.LatLng(17.92, 13.25),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) { 
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
    
   
    
   
    
  </body>
</html>