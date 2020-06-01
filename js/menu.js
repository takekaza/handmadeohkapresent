window.addEventListener("load", function() {
  const navHead = document.getElementById('navHead');
  const navMenu =
  document.getElementById('navMenu');
  navHead.addEventListener('click', function() {
    navHead.classList.toggle('clicked');
    navMenu.classList.toggle('clicked');
  });
});
