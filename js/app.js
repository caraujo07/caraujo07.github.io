function slideToggle() {
  let slider = document.getElementById('navbarSupportedContent');

  if(slider.style.left == '0px') {
    slider.style.left = '-1000px';
  }else {
    slider.style.left = '0px';
  }
}   


$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    items: 2,
    nav: true,
  });
});