(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.modal').modal();
    //var instance = M.Carousel.getInstance('.carousel-item');
    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        next: 3
    });
    //instance.next();
    //instance.next(3); // Move next n times.
      
  }); // end of document ready
})(jQuery); // end of jQuery name space



