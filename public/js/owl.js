$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
 
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem:true,
      items:2,
      autoplay:true,
      loop:true
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });
 

$('.owl-carousel').owlCarousel({
    margin:7,
    slideSpeed : 100,
    paginationSpeed : 200,
    autoplay:true,
    loop:true,
    autoWidth:true,
    items:2
})

});

