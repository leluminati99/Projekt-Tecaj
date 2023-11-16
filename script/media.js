// const dropdownMeni = function() {
//   let meni = document.querySelector('.zanimanja-content');
//   if(meni.className.indexOf())
// }

// if (window.matchMedia("(max-width: 400px) and (min-width: 370px)").matches) {


// }

if (window.matchMedia("(max-width: 400px) and (min-width: 370px)").matches) {
  const dropdownButton = document.querySelector(".dropdown-zanimanja .bar");
  const dropdownMenu = document.querySelector(".dropdown-zanimanja .zanimanja-content");
  dropdownButton.addEventListener('click', function(event) {
    event.preventDefault();
    dropdownMenu.classList.toggle("show");
  });
}
