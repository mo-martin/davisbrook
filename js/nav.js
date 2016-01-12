/* Responsive Nav - */
$(document).ready(function(){
    $("button.navtoggle").click(function(){
        $(".mainlinks").slideToggle();
    });
});
(function($){
  $(document).ready(function(){
    var current_width = $(window).width();
    if(current_width < 768){
      $(".mainlinks").css("display","");
    }
  });
  $(window).resize(function(){
    var current_width = $(window).width();
    if(current_width > 768){
      $(".mainlinks").css("display","table");
    }
	else {
		$(".mainlinks").css("display","");
	}
  });

})(jQuery);