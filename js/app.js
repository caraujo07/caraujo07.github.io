function slideToggle() {
  let slider = document.getElementById('navbarSupportedContent');

  if(slider.style.left == '0px') {
    slider.style.left = '-1100px';
  }else {
    slider.style.left = '0px';
  }
}   


$(document).ready(function(){
  $("#parceiros .owl-carousel").owlCarousel({
    items: 2,
    nav: true,
    autoplay: true,
    responsiveClass: true,
    responsive: {
      768: {
        items: 3
      },
      1000: {
        items: 4
      }
    }
  });

  $(".owl-carousel").owlCarousel({
    items: 1,
    autoplay: true
  });
});