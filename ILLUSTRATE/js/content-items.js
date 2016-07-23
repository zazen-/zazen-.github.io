jQuery(document).ready(function(){
	function htmSlider(){
		var slideWrap = jQuery('.item-wrap');

		var nextLink = jQuery('.next-item');
		var prevLink = jQuery('.prev-item');

		var playLink = jQuery('.auto');

		var is_animate = false;

		//ширина с отступами 
		var slideWidth = jQuery('.item-content').outerWidth();

		//смещение слайдера
		var newLeftPos = slideWrap.position().left - slideWidth;

		//Клик по ссылке на следующий слайд
		nextLink.click(function(){
			if(!slideWrap.is(':animated')) {

				slideWrap.animate({left: newLeftPos}, 500, function(){
					slideWrap
						.find('.item-content:first')
						.appendTo(slideWrap)
						.parent()
						.css({'left': 0});
				});

			}
		});

		//Клик по ссылке на предыдующий слайд
		prevLink.click(function(){
			if(!slideWrap.is(':animated')) {

				slideWrap
					.css({'left': newLeftPos})
					.find('.item-content:last')
					.prependTo(slideWrap)
					.parent()
					.animate({left: 0}, 500);

			}
		});


		//Функция автоматической прокрутки слайдера
		function autoplay(){
			if(!is_animate){
				is_animate = true;
				slideWrap.animate({left: newLeftPos}, 500, function(){
					slideWrap
						.find('.item-content:first')
						.appendTo(slideWrap)
						.parent()
						.css({'left': 0});
					is_animate = false;
				});
			}
		}

		//Клики по ссылкам старт/пауза
		playLink.click(function(){
			if(playLink.hasClass('play')){
				playLink.removeClass('play').addClass('pause');
				jQuery('.navy').addClass('disable');
				timer = setInterval(autoplay, 1000);
			} else {
				playLink.removeClass('pause').addClass('play');
				jQuery('.navy').removeClass('disable');
				clearInterval(timer);
			}
		});

	}

	//иницилизируем функцию слайдера
	htmSlider();
});