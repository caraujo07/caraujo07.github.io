function slideToggle() {
  let slider = document.getElementById('navbarSupportedContent');

  if(slider.style.left == '0px') {
    slider.style.left = '-100px';
  }else {
    slider.style.left = '0px';
  }
}   