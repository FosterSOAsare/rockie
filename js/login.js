import { MobileMenu } from "./imports/MobileMenu.js";
import { Ajax } from "./imports/Ajax.js";
new MobileMenu();

// Login functionality
class Login {
	constructor() {
		this.form = document.querySelector("form#login");
		this.err = this.form.querySelector(".err");
		this.submitDetails();
	}

	submitDetails() {
		this.form.addEventListener("submit", (e) => {
			e.preventDefault();
			let formData = new FormData(this.form);
			let password = formData.get("password");
			let email = formData.get("email");
			let data = `type=login&email=${email}&password=${password}`;

			// No verifications for email and password : unwanted characters will be stripped in PHP
			let ajax = new Ajax("./includes/ajax/account.php", data);
			ajax.postData((res) => {
				if (res == "success") {
					window.location.href = "./";
					return;
				}
			});
		});
	}
}

new Login();
