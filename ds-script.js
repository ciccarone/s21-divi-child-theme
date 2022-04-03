// Custom JS goes here ------------


jQuery(document).ready(function( $ ) {

  $(".s21-testimonials .et_pb_column:nth-child(2)").slick({
    infinite: true,
    dots: true,
    arrows: true,
    slidesToScroll: 1,
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 5000,

  });

  $('.s21-dd__item').click(function(){
    $(this).toggleClass('active');
  })

});
