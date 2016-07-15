var popUp = $('#modal1'),
	acceptBtn = $('.modal-action'),
	closeBtn = $('.modal-close'),
	volunteer = $('.volunteer'),
	validate = $('.validate');
volunteer.click(function () {
	popUp.fadeIn();
	closeBtn.click(function () {
		popUp.fadeOut();
	});
	acceptBtn.click(function() {
		if (validate.val() != '') {
			popUp.fadeOut();
			return true;
		} else {
			validate.css('border-bottom-color', '#cf000f');
		}
	})
});