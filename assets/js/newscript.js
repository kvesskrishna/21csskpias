$('.timeline-panel').click(function() {
    $('.timeline-body', this).toggle(); // p00f
});
	
	
// acordion 

 $(function() {
  $(".expand").on( "click", function() {
    // $(this).next().slideToggle(200);
    $expand = $(this).find(">:first-child");
    
    if($expand.text() == "+") {
      $expand.text("-");
    } else {
      $expand.text("+");
    }
  });
});
   