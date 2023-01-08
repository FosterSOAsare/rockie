export class Verifications {
	verifyEmail(email) {
		if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
			return false;
		}
		return true;
	}

	displayError(err__element, textContent) {
		err__element.textContent = textContent;
		err__element.style.display = "block";
	}

	clearErrorOnFocus(focus__elements, err__element) {
		focus__elements.forEach((e) => {
			e.addEventListener("focus", () => {
				err__element.style.display = "none";
			});
		});
	}
}
