const email = document.getElementById("email").value;
const password = document.getElementById("password").value;
// const form = document.getElementById('form').value;
const errorEmail = document.getElementById("errorEmail");
const errorPassword = document.getElementById("errorPassword");
const loginBtn = document.querySelector(".login-btn");

let validMail = "/^[^ ]+@[^ ]+.[A-Z]{2,3}$/";

console.log(loginBtn);
loginBtn.addEventListener("click", (event) => {
	event.preventDefault();

	if (email === "" || email === null || email !== validMail) {
		errorEmail.textContent = "* Please input a valid email.";
		setTimeout(() => {
			errorEmail.textContent = "";
		}, 2000);
	}
	if (password < 6) {
		errorPassword.textContent =
			"* Incorrect password, must be at least 6 characters.";
		setTimeout(() => {
			errorPassword.textContent = "";
		}, 2000);
	}
});
