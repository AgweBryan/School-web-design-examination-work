$(".owl-carousel").owlCarousel({
	loop: true,
	margin: 10,
	nav: true,
	items: 3,
	autoplay: true,
	dots: true,
	responsive: {
		0: {
			items: 1,
		},
		600: {
			items: 3,
		},
		1000: {
			items: 3,
		},
	},
});
