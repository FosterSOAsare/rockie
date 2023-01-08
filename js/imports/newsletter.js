import { Verifications } from "../imports/Verifications.js";
import { Ajax } from "../imports/Ajax.js";

export class NewsLetterFunc {
	constructor() {
		this.newsletterForm = document.querySelector("#newsletter form");
		this.err = document.querySelector("#newsletter .err");
		this.inputs = this.newsletterForm.querySelectorAll("input");
		this.verifications = new Verifications();
		this.submitNewsLetter();
		this.clearErrText();
	}

	submitNewsLetter() {
		this.newsletterForm.addEventListener("submit", (e) => {
			e.preventDefault();
			this.inputs.forEach((e) => {
				e.blur();
			});

			let formData = new FormData(this.newsletterForm);
			let email = formData.get("email");

			if (!this.verifications.verifyEmail(email)) {
				this.verifications.displayError(this.err, "Please enter a valid email address");
				return;
			}
			let postString = `type=subscribe&email=${email}`;
			let ajax = new Ajax("./includes/ajax/newsletter.php", postString);
			ajax.postData((res) => {
				if (res == "success") {
					// Registered
					this.verifications.displayError(this.err, "Email successfully registered");
					this.err.style.color = "green";
					setTimeout(() => {
						window.location.href = "./newsletter?type=success";
					}, 1000);
					return;
				}
				this.verifications.displayError(this.err, res);
			});
		});
	}

	clearErrText() {
		this.verifications.clearErrorOnFocus(this.inputs, this.err);
	}
}
