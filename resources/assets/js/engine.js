$(document).ready(function() {
	var $buttonGetThankYou = $('.get-thank-you-popup');
	var $buttonGetCallback = $('.get-callback-popup');
	var $popupThankYou = $('.popup-thank-you');
	var $popupCallback = $('.popup-callback');
	var $popupMask = $('.popup-mask');
	var $popupClose = $('.popup__close');

	//Init Slider
	initSiema();

	// Init Slider
	function initSiema() {
		var $sliderArrowLeft = $('.products-slider__arrow_left');
		var $sliderArrowRight = $('.products-slider__arrow_right');
		window.slider = new Siema({
						selector: '.products-slider-wrapper',
						duration: 200
					});

		$sliderArrowLeft.click(function() {
			slider.prev();
		});

		$sliderArrowRight.click(function() {
			slider.next();
		});
	}

	// init popup
	// $buttonGetThankYou.click(getThankYouPopup);
	$buttonGetCallback.click(getCallback);
	$popupMask.click(closePopup);
	$popupClose.click(closePopup);

    function getCallback(event) {
        event.preventDefault();
        $popupCallback.fadeIn();
    }
});

window.getThankYouPopup = function() {
    $('.popup-thank-you').fadeIn();
}

window.closePopup = function() {
    $('.popup-wrapper').fadeOut();
}

window.gaEvent = function(name) {
    ga('send', 'event', 'interaction', name)
}
