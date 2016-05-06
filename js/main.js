

$(window).load(function() {

	$('.loader').css('display', 'none');

	// $('.contact input').focus(function () {

	// 	$('.contact .options').css('display', 'none');

	// });

	// $('.interested').click(function () {

	// 	$('.contact .options').toggle();

	// })

	// $('.contact .options li').click(function () {

	// 	var value = $(this).text();

	// 	$('.contact input[name=interested]').val(value);

	// 	$('.contact .options').toggle();

	// });

	$('.left').hover(function() {

		$('.left').addClass('left-img');

	}, function () {

		$('.left').removeClass('left-img');

	})

	$('.right').hover(function() {

		$('.right').addClass('right-img');

	}, function () {

		$('.right').removeClass('right-img');

	})
	var toLoop = $('.bio').length === 0 ? true : false;
	$('#slider').carouFredSel({

		// width: 850,

		// height: 506,

		auto : false,

		circular: toLoop,

		infinite: toLoop,

		next: {	

			button: ".right",

			key: "right"

		},

		prev: { 

			button: ".left",

			key: "left"

		},

		items: {

			visible: 1,

			width: "variable"

			// height:

		},

		// scroll: {

		// 	items: 1,

		// 	duration: 600

		// },

		// onAfter : function () {

		// 	console.log('after');

		// }

		scroll      : {

	        onBefore    : function( data ) {

	        },

	        onAfter     : function( data ) {
	        	if (!toLoop) {
	        		var img = data.items.visible['0'];

		        	if ($(img).hasClass('last')) {

		        		$('.right').css('display', 'none');
		        		$('.button-next').css('display', 'none');

		        	} else {

		        		$('.right').css('display', 'block');
		        		$('.button-next').css('display', 'inline');

		        	}

		        	if ($(img).hasClass('first')) {

		        		$('.left').css('display', 'none');
		        		$('.button-prev').css('display', 'none');

		        	} else {

		        		$('.left').css('display', 'block');
		        		$('.button-prev').css('display', 'inline');

		        	}
	        	}
	        	

	        },

	        onEnd       : function() {

	        }

	    }

	});

	window.slider = $('#slider');

	$('.picture .caroufredsel_wrapper').swiperight(function (){

		$('#slider').trigger("prev", 1);



	});
	$('.button-prev').on('click', function () {
		$('#slider').trigger("prev", 1);
	});
	$('.button-next').on('click', function () {
		$('#slider').trigger("next", 1);
	});
	$('.picture .caroufredsel_wrapper').swipeleft(function (){

		$('#slider').trigger("next", 1);

	})

	$('.submit').click(function () {

		$.post('ajax/send-contact', $( "#contact-form" ).serialize(), function (data) {

			if (data.result) {

				// clear form

				clearForm();

				$('#contact-form').hide();

			}

			$('#msg').html(data.response);

		}, 'json').fail(function () {

			var msg = 'failed to send';

			if (!window.console === 'undefined' || typeof console.log === 'undefined') {

				var console = {};

				this.console = {log: function (msg) {}};

			} else {

				console.log('fail to send');

			}

		});

		return false;

	})
	if (!toLoop) {
		$('.left').css('display', 'none'); // remove the left arrow on start
		$('.button-prev').css('display', 'none');
	}
	$('#slider .img-wrap').css('margin-right', '8px');
	$("#contactDatePicker").datepicker();

	function clearForm() {

		$('form input, form textarea').val('');

	}



});