// Display Menu
export class MobileMenu {
	constructor() {
		this.mediaQuery = window.matchMedia("(max-width: 760px)");
		this.menu = document.querySelector("#phone__menu");
		this.closeMenu = document.querySelector("#phone__menu .top__section .closeMenu");
		this.openMenu = document.querySelector("header .header__container .phone__menu");

		this.showMobileMenu();
		this.closeMobileMenu();
		this.mediaQuery.addEventListener("change", (e) => this.createToggle(e));
	}
	showMobileMenu() {
		this.openMenu.addEventListener("click", () => {
			this.toggleMenu("show");
		});
	}
	closeMobileMenu() {
		this.closeMenu.addEventListener("click", () => {
			this.toggleMenu("hide");
		});
	}
	toggleMenu(display) {
		let animation = (display == "show" ? "slideRight" : "slideLeft") + " 1s forwards";
		this.menu.style.animation = animation;
	}
	createToggle(e) {
		if (!e.matches) {
			this.menu.style.animation = "none";
		}
	}
}
