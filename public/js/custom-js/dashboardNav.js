if (window.outerWidth < 350)
	document.querySelector(".btn-view").textContent = "Dashboard";

const toggleBtn = document.querySelector(".toggle-menu");
const navItems = document.querySelector(".navbar__items");
const toggleIcon = document.querySelector(".menu-icon");
toggleBtn.addEventListener("click", () => {
	navItems.classList.toggle("hide");
	navItems.classList.contains("hide")
		? (toggleIcon.src = "../../img/menu.svg")
		: (toggleIcon.src = "../../img/close.svg");
});
