( function( $ ) {		
  class SlickCarousel {
    constructor() {
      this.initiateCarousel();
    }

    initiateCarousel() {
      $( '.posts-carousel' ).slick( {
        autoplay: true,
        infinite: true,
        speed: 1000,
        fade: true,
        cssEase: 'linear'              
      } );
    }
  }

  new SlickCarousel();

} )( jQuery );
