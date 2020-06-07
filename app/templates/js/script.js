// ФУНКЦИЯ ОПРЕДЕЛЕНИЯ ПОДДЕРЖКИ WEBP
function testWebP(callback) {
  var webP = new Image();
  webP.onload = webP.onerror = function () {
    callback(webP.height == 2);
  };
  webP.src =
    'data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA';
}

testWebP(function (support) {
  if (support == true) {
    document.querySelector('body').classList.add('webp');
  }
});
;
$(document).ready(function () {
	$('.header__burger').click(function (event) {
		$('.header__burger,.header__content__menu, .headerW__content__menuW').toggleClass('active');
		$('body').toggleClass('lock');
	});
});
;
let headerW =  $('.headerW'),
scrollPrevW = 0;
let header = $('header'),
	scrollPrev = 0;

$(window).scroll(function () {
	let scrolled = $(window).scrollTop();

	if (scrolled > 1 && scrolled > scrollPrev) {
		header.addClass('out');
	} else if (scrolled == 0) {
		header
			.removeClass('out')
			.css({ background: 'linear-gradient(rgb(0, 0, 0), transparent)' })
			.css('border-radius', '0px')
			.css({ width: '100% ', margin: '0' });
	} else if (scrolled > 2) {
		header
			.removeClass('out')
			.css({ background: 'rgba(0,0,0,0.9)' })
			.css('margin-top', '1vh')
			.css('border-radius', '25px 25px')
			.css({ width: '90% ', margin: '1vh 5vw' });
	} else {
		header.removeClass('out');
	}

	if (scrolled > 1 && scrolled > scrollPrevW) {
		headerW.addClass('outW');
	} else if (scrolled == 0) {
		headerW
			.removeClass('outW')
			.css({ background: 'rgb(0, 0, 0)' })
			.css('border-radius', '0px')
			.css({ width: '100% ', margin: '0' });
	} else if (scrolled > 2) {
		headerW
			.removeClass('outW')
			.css({ background: 'rgba(0,0,0,0.9)' })
			.css('margin-top', '1vh')
			.css('border-radius', '25px 25px')
			.css({ width: '90% ', margin: '1vh 5vw' });
	} else {
		headerW.removeClass('outW');
	}
	scrollPrevW = scrolled;
	scrollPrev = scrolled;
});;
const popupLinks = document.querySelectorAll('.popup-link');
const lockPadding = document.querySelectorAll('.lock-padding');

let unlock = true;

const timeout = 800;

if (popupLinks.length > 0) {
	for (let i = 0; i < popupLinks.length; i++) {
		const popupLink = popupLinks[i];
		popupLink.addEventListener('click', (e) => {
			const popupName = popupLink.getAttribute('href').replace('#', '');
			const curentPopup = document.getElementById(popupName);
			popupOpen(curentPopup);
			e.preventDefault();
		});
	}
}

const popupCloseIcon = document.querySelectorAll('.close-popup');
if (popupCloseIcon.length > 0) {
	for (let i = 0; i < popupCloseIcon.length; i++) {
		const el = popupCloseIcon[i];
		el.addEventListener('click', (e) => {
			popupClose(el.closest('.popup'));
			e.preventDefault();
		});
	}
}

function popupOpen(curentPopup) {
	if (curentPopup && unlock) {
		const popupActive = document.querySelector('.popup.open');
		if (popupActive) {
			popupClose(popupActive, false);
		} else {
			bodyLock();
		}
		curentPopup.classList.add('open');
		curentPopup.addEventListener('click', (e) => {
			if (!e.target.closest('.popup__content')) {
				popupClose(e.target.closest('.popup'));
			}
		});
	}
}

function popupClose(popupActive, doUnlock = true) {
	if (unlock) {
		popupActive.classList.remove('open');
		if (doUnlock) {
			bodyUnLock();
		}
	}
}

function bodyLock() {
	const lockPaddingValue =
		window.innerWidth - document.querySelector('.wrapper').offsetWidth + 'px';

	if (lockPadding.length > 0) {
		for (let i = 0; i < lockPadding.length; i++) {
			const el = lockPadding[i];
			el.style.paddingRight = lockPaddingValue;
		}
	}
	document.body.style.paddingRight = lockPaddingValue;
	document.body.classList.add('lock');

	unlock = false;
	setTimeout(() => {
		unlock = true;
	}, timeout);
}

function bodyUnLock() {
	setTimeout(() => {
		if (lockPadding.length > 0) {
			for (let i = 0; i < lockPadding.length; i++) {
				const el = lockPadding[i];
				el.style.paddingRight = '0px';
			}
		}

		document.body.style.paddingRight = '0px';
		document.body.classList.remove('lock');
	}, timeout);

	unlock = false;
	setTimeout(() => {
		unlock = true;
	}, timeout);
}

document.addEventListener('keydown', (e) => {
	if (e.which === 27) {
		const popupActive = document.querySelector('.popup.open');
		popupClose(popupActive);
	}
});

(function () {
	if (!Element.prototype.clouset) {
		Element.prototype.clouset = function (css) {
			var node = this;
			while (node) {
				if (node.matches(css)) return node;
				else node = node.parentElement;
			}
		};
		return null;
	}
})();

(function () {
	if (!Element.prototype.matches) {
		Element.prototype.matches =
			Element.prototype.matchesSelector ||
			Element.prototype.webkitMatchesSelector ||
			Element.prototype.mozMatchesSelector ||
			Element.prototype.msMatchesSelector;
	}
})();
;
$(function () {
	$('.minimized').click(function (event) {
		var i_path = $(this).attr('src');
		$('body').append(
			'<div id="overlay"></div><div id="magnify"><img src="' +
				i_path +
				'"><div id="close-popup"><i></i></div></div>'
		);
		$('#magnify').css({
			left: ($(document).width() - $('#magnify').outerWidth()) / 2,
			top: ($(window).height() - $('#magnify').outerHeight()) / 2,
		});
		$('#overlay, #magnify').fadeIn('fast');
	});

	$('body').on('click', '#close-popup, #overlay', function (event) {
		event.preventDefault();

		$('#overlay, #magnify').fadeOut('fast', function () {
			$('#close-popup, #magnify, #overlay').remove();
		});
	});
});
;


$(document).ready(function(){
	$('#submit-contact').click(function(){
		// собираем данные с формы
		var name    = $('#name-contact').val();
		var phone   = $('#phone-contact').val();
		var message   = $('#message-contact').val();
		// отправляем данные
		$.ajax({
			url: "/contacts/ajax", // куда отправляем
			type: "post", // метод передачи
			dataType: "json", // тип передачи данных
			data: { // что отправляем
				"name-contact":   name,
				"phone-contact":  phone,
				"message-contact":  message
			},
			// после получения ответа сервера
			success: function(data){
				if (jQuery.isEmptyObject(data['failure'])) {
					$('.formSection__content').css({display: "none"});
					$('.result-contact').css({background: "#017605", color: "#fff", padding: "10px", fontSize: "18px", textAlign: "center"})
					$('.result-contact').html(data.success); // выводим ответ сервера
				} else {
					$('.result-contact').css({border: "2px solid #000", color: "red", padding: "10px", fontSize: "16px"})
					$('.result-contact').html(data.failure);
				}
			}
		});
	});
});

// ----  POPUP --------

$(document).ready(function(){
	$('#submit-popup').click(function(){
		// собираем данные с формы
		var name    = $('#name-popup').val();
		var phone   = $('#phone-popup').val();
		var message   = $('#message-popup').val();
		// отправляем данные
		$.ajax({
			url: "/action-popup.php", // куда отправляем
			type: "post", // метод передачи
			dataType: "json", // тип передачи данных
			data: { // что отправляем
				"name-popup":   name,
				"phone-popup":  phone,
				"message-popup":  message
			},
			// после получения ответа сервера
			success: function(data){
				if (jQuery.isEmptyObject(data['failure'])) {
					$('.popup__item').css({display: "none"});
					$('.result-popup').css({background: "#017605", color: "#fff", padding: "10px", fontSize: "18px", textAlign: "center"})
					$('.result-popup').html(data.success); // выводим ответ сервера
					$('.popup').delay(2250).fadeOut("slow");
				} else {
					$('.result-popup').css({border: "2px solid #000", color: "red", padding: "10px", fontSize: "16px"})
					$('.result-popup').html(data.failure);
				}
			}
		});
	});
});