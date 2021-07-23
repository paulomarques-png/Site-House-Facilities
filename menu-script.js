const btnMobile = document.getElementById('btn-mobile');
function toggleMenu() {
  const menu = document.getElementById('menu');
  menu.classList.toggle('open');
}

function zero() {
  const btnmobile = document.getElementById('btn-mobile');
  btnmobile.classList.toggle('active');
}

function corpo() {
  const corpo = document.getElementById('corpo');
  corpo.classList.toggle('over');
}
btnMobile.addEventListener('click', corpo);
btnMobile.addEventListener('click', toggleMenu);
btnMobile.addEventListener('click', zero);