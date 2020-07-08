const menuBtn = document.querySelector(".menu-btn");
const navUL = document.getElementById("ham");
let menuOpen = false;
menuBtn.addEventListener("click", () => {
  if (!menuOpen) {
    menuBtn.classList.add("open");
    menuOpen = true;
    navUL.classList.toggle("show");
  } else {
    menuBtn.classList.remove("open");
    menuOpen = false;
    navUL.classList.toggle("show");
  }
});
