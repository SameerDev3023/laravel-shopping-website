let ToggleBtn = document.getElementsByClassName("navbar-toggle")[0];
let CloseNavbarBtn = document.getElementById('sfh-navbar-close');
let NavbarWrapper = document.getElementsByClassName("link-wrapper");

ToggleBtn.addEventListener("click", function () {
    NavbarWrapper[0].classList.add('active')
});
CloseNavbarBtn.addEventListener("click", function () {
    NavbarWrapper[0].classList.remove('active')
});
