jQuery(document).ready(function($){

    //js for the header slider
    $('.one-time').slick({
        prevArrow:"<button type='button' class='slick-prev pull-left'><img alt='prev' src='/wp-content/uploads/2022/03/Group-68.svg'/></button>",
        nextArrow:"<button type='button' class='slick-next pull-right'><img alt='next' src='/wp-content/uploads/2022/03/Group-55.svg'/></button>"
      });
      $('.slider-sec').slick({
        slidesToShow: 8,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        centerMode: true,
        focusOnSelect: true, 
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 5,
                slidesToScroll: 3,
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 6,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 1
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
        
      });

});