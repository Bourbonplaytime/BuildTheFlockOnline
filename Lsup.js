const expText = document.querySelectorAll('.enlarge');

expText.addEventListener('mouseover', () => {
  document.querySelectorAll('.enlarge').style.height="150px";
  document.querySelectorAll('.enlarge').style.width="150px";
});
