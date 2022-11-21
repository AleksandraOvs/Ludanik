jQuery(document).ready(function($)  {
    $('.burger').click(function(event){
      $('body, .overlay, .burger,.navbar-nav').toggleClass('active')
   });
    $('img, em').fadeIn(1500); 
    // $('p, span, h2, h3'). fadeIn(1500);
})
