$(function(){
				$('#products').slides({
					preload: true,
					preloadImage: 'img/loading.gif',
					effect: 'slide, fade',
					crossfade: true,
					slideSpeed: 350,
					fadeSpeed: 500,
					generateNextPrev: true,
					generatePagination: false
				});
			});