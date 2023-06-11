let ToggleBtn = document.getElementsByClassName("navbar-toggle")[0];
let CloseNavbarBtn = document.getElementById('sfh-navbar-close');
let NavbarWrapper = [...document.getElementsByClassName("link-wrapper")];
let DropDownBtn = document.getElementsByClassName('sfh-drop-down-content');
let DropDownArray = Array.from(DropDownBtn);
DropDownArray.forEach((DropDownList) => {
    DropDownList.addEventListener('mouseenter', function () {
       
      this.classList.add('active')
  
    });

    DropDownList.addEventListener('mouseleave', function () {
       
      this.classList.remove('active')
  
    });
});
NavbarWrapper.forEach((wrapper) => {
    ToggleBtn.addEventListener("click", function () {
        wrapper.classList.add('active');
    });

    CloseNavbarBtn.addEventListener("click", function () {
        wrapper.classList.remove('active');
    });
});
