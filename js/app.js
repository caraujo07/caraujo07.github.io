// Function to animate the button correctly
const btnx = () => {
  const btn = document.querySelector(".navbar-toggler .toggle-wrapper");
  console.log(btn);
  if(!btn.classList.contains('on')) {
    btn.classList.add('on');
  }else{
    btn.classList.remove('on');
  }
}


const activelink = () => {
  const href = location.pathname.replace('/', '');
  const el = $('.nav-link');
  $('.nav-link[href="' + href +'"').addClass('active');
}


activelink();