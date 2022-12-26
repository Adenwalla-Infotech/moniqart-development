

const mentBtn = document.querySelector(".mobile_navbar-menuBtn");

const mobileMenu = document.querySelector(".mobile_navbar-bottom");

mentBtn.addEventListener("click" , ()=>{

    mobileMenu.classList.toggle('active');

})