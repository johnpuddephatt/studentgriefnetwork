document.querySelector('.menu-open').addEventListener('click', () => {
  document.querySelector('.nav').classList.remove('translate-x-[100%]');
  document.body.classList.add('overflow-hidden');
});

document.querySelector('.menu-close').addEventListener('click', () => {
  document.querySelector('.nav').classList.add('translate-x-[100%]');
  document.body.classList.remove('overflow-hidden');
});

document.querySelectorAll('.menu-item-has-children').forEach((elem) => {
  elem.addEventListener('click', () => {
    elem.nextElementSibling.classList.toggle('hidden');
  });
});
