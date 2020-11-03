import $ from 'jquery';

class Search {
	// 1. describe and create/initiate our object
	constructor() {
		alert("This is gagan!");
		this.openButton = $(".js-search-trigger");
		this.closeButton = $(".search-overlay__close");
		this.searchOverlay = $(".search-overlay");
		this.events();
	}

	// 2. events
	events() {
		this.openButton.on("click", this.openOverlay.bind(this));
		this.closeOverlay.on("click", this.closeOverlay.bind(this));
	}

	// 3. methods (function, action...)
	openOverlay() {
		this.searchOverlay.addClass("search-overlay--active");
	}

	closeOverlay() {
		this.searchOverlay.removeClass("search-overlay--active");
	}
}

export default Search;