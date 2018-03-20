  <!-- jQuery -->
  <script src="assets/js/jquery.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap-dropdownhover.min.js"></script>
  <!-- Plugin JavaScript -->
  <script src="assets/js/jquery.easing.min.js"></script>
  <script src="assets/js/jquery.fittext.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/modernizr.html"></script>
  <!-- Modernizr -->
  <script src="assets/js/main.html"></script>
  <!-- Resource jQuery -->
  <!--  countTo JavaScript  -->
  <script type="text/javascript" src="assets/js/jquery.countTo.js"></script>
  <!-- owl carousel -->
  <script src="assets/owl-carousel/owl.carousel.js"></script>
  <!--  Custom Theme JavaScript  -->
  <script src="assets/js/custom.js"></script>
<script src="assets/js/jquery.panelslider.min.js"></script>
 <script src="assets/js/newscript.js"></script>

  <script>

    $('#right-panel-link').panelslider({
      bodyClass: 'ps-active-right',
      clickClose: false,
      onOpen: function() {
        console.log('right panel open');
      }
    });

    $('#close-panel-bt').click(function() {
      $.panelslider.close();
    });

    $('#right-panel').on('psBeforeOpen psOpen psBeforeClose psClose', function(e) {
      console.log(e.type, e.target.getAttribute('id'));
    });
  </script>
