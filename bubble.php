<!Doctype html>
<head>
  <style>
    .zoom {

  position: fixed;
  bottom: 45px;
  right: 24px;
  height: 70px;

}
 
.zoom-fab {
  display: inline-block;
  width: 40px;
  height: 40px;
  line-height: 40px;
  border-radius: 50%;
  background-color: #18C8DF;
  vertical-align: middle;
  text-decoration: none;
  text-align: center;
  transition: 0.2s ease-out;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
  cursor: pointer;
  color: #FFF;
  font-size: 11px;
  word-wrap: break-word !important;
}
 
.zoom-fab:hover {
  background-color: #6BEEFF;
  box-shadow: 0 3px 3px 0 rgba(0, 0, 0, 0.14), 0 1px 7px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -1px rgba(0, 0, 0, 0.2);
}
 
.zoom-btn-large {
  width: 60px;
  height: 60px;
  line-height: 60px;
}
 
 


.scale-transition { transition: transform 0.3s cubic-bezier(0.53, 0.01, 0.36, 1.63) !important; }

.scale-transition.scale-out {
  transform: scale(0);
  transition: transform 0.2s !important;
}

.scale-transition.scale-in { transform: scale(1); }

  </style>
</head>
<div class="zoom">
  <a href="#"><img style="border: 1px solid grey;padding: 5px;background-color: white" src="assets/img/neostencil.png" alt="Logo|KPIAS" class="img-rounded" height=100px width=150px> </a>
</div>


<script>$('#zoomBtn').click(function() {
  $('.zoom-btn-sm').toggleClass('scale-out');
  if (!$('.zoom-card').hasClass('scale-out')) {
    $('.zoom-card').toggleClass('scale-out');
  }
});

$('.zoom-btn-sm').click(function() {
  var btn = $(this);
  var card = $('.zoom-card');
  if ($('.zoom-card').hasClass('scale-out')) {
    $('.zoom-card').toggleClass('scale-out');
  }
  if (btn.hasClass('zoom-btn-person')) {
    card.css('background-color', '#d32f2f');
  } else if (btn.hasClass('zoom-btn-doc')) {
    card.css('background-color', '#fbc02d');
  } else if (btn.hasClass('zoom-btn-tangram')) {
    card.css('background-color', '#388e3c');
  } else if (btn.hasClass('zoom-btn-report')) {
    card.css('background-color', '#1976d2');
  } else {
    card.css('background-color', '#7b1fa2');
  }
});</script>
</html>

