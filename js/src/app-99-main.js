/** ========================
============================
@project    : DBR.ag
@version    : 1.0
@author     : Thiago Aguiar - thiago.aguiar86@gmail.com
@copyright  : 2016
============================
@begin
=========================**/

// Opacity with scroll elements
var opacityElement = {
	init: function() {
		this.welcome(500);
		this.profile(400);
		this.skills(400);
	}, 
	engine: function(element, range) {
		var _window = $(window);
		_window.on({
			scroll: function() {
				var scroll = $(this).scrollTop();
				var offset = element.offset().top;
				var height = element.height();
				
				offset = offset + height / 2;
				var calc = 1 - (scroll - offset + range) / range;

				element.css({
					'opacity': calc
				});

				if(calc > '1') {
					element.css({
						'opacity': 1
					});
				} else if(calc < '0') {
					element.css({
						'opacity': 0
					});
				}
			}
		});
	},
	welcome: function(range) {
		var welcome = $('.welcome .box');
		this.engine(welcome, range);
	},
	profile: function(range) {
		var profile = $('.profile .box');		
		this.engine(profile, range);
	},
	skills: function(range) {
		var skills = $('.skills .box');		
		this.engine(skills, range);
	}
}

// Parallax background elements
var parallax = {
	init: function() {
		this.engine();
	},
	engine: function() {
		var parallax = $('section:first-child, .skills');
		var speed = -0.15;

		window.onscroll = function() {
			[].slice.call(parallax).forEach( function(el,i) {
				var offset = window.pageYOffset,
				elBackgrounPos = "right " + (offset * speed) + "px";
				el.style.backgroundPosition = elBackgrounPos;
			});
		}
	}
}

// Choose genre form contact
var changeGenreContactForm = {
	init: function() {
		this.engine();
	},
	engine: function() {
		var container = $('form label.genre div');

		container.on({
			click: function() {
				
				var type = $(this).find('span');
				var verify = type.attr('id');

				if(verify == 'male') {
					container.removeClass().addClass('female');
					type.removeAttr('id').attr('id', 'female');
				
				} else if(verify == 'female') {					
					container.removeClass().addClass('male');
					type.removeAttr('id').attr('id', 'male');

				}
			}
		});
	}
}

// Execute functions
opacityElement.init();
parallax.init();
changeGenreContactForm.init();

/** ========================
end
=========================**/