$(document).ready(function () {

	$("#wstoggle").on('click', function (e) {

		$('body').toggleClass('wsfopen');
		$(this).toggleClass('active');
	})
})
