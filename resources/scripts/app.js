document.querySelector('.menu-open').addEventListener('click', () => {
  document.querySelector('.nav').classList.remove('translate-x-[100%]');
});

document.querySelector('.menu-close').addEventListener('click', () => {
  document.querySelector('.nav').classList.add('translate-x-[100%]');
});
