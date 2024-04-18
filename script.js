const navbarNav = document.querySelector(".nav");
document.querySelector("#hamburger-menu").onClick = () => {
    navbarNav.classList.toggle("active");
};


const hamburger = document.querySelector("#hamburger-menu");
document.addEventListener("click", function (e) {
    if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
      navbarNav.classList.remove("active");
    }
});