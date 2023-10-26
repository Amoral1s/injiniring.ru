jQuery(document).ready(function ($) {

	//Sliders
	const genreFilters = document.getElementById('genre-filter');
	const cases = document.querySelector('.cases .swiper');
  if (!genreFilters && cases) {
    let casesPrev = document.querySelector('.cases .arr-prev');
		let casesNext = document.querySelector('.cases .arr-next');
		const options = {
			navigation: {
				nextEl: casesNext,
				prevEl: casesPrev,
			},
			breakpoints: {
				300: {
					slidesPerView: 1,
					spaceBetween: 10,
				},
				768: {
					slidesPerView: 1,
					spaceBetween: 0,
				}
			},
		}
		new Swiper(cases, options);
  }
  
	const sertSlider = document.querySelector('.sert .swiper');
	if (sertSlider && window.screen.width < 993) {
		new Swiper(sertSlider, {
		 breakpoints: {
			 300: {
				 slidesPerView: 1,
				 spaceBetween: 10,
			 },
			 579: {
				 slidesPerView: 2,
				 spaceBetween: 10,
			 }
		 },
	 });
	}

	const socSlider = document.querySelector('.feed-soc .swiper');
	if (socSlider && window.screen.width < 993) {
		new Swiper(socSlider, {
		pagination: {
			el: '.feed-pagination',
		},
		 breakpoints: {
			 300: {
				 slidesPerView: 1,
				 spaceBetween: 10,
			 },
			 768: {
				 slidesPerView: 2,
				 spaceBetween: 10,
			 }
		 },
	 });
	}

	const ethapsSlider = document.querySelector('.ethaps .swiper');
	if (ethapsSlider) {
		new Swiper(ethapsSlider, {
			navigation: {
				nextEl: '.ethaps .arr-next',
				prevEl: '.ethaps .arr-prev',
			},
		 breakpoints: {
			 300: {
				 slidesPerView: 1,
				 spaceBetween: 10,
			 },
			 768: {
				 slidesPerView: 2,
				 spaceBetween: 20,
			 },
			 993: {
				 slidesPerView: 4,
				 spaceBetween: 20,
			 }
		 },
	 });
	}

	const teamSlider = document.querySelector('.team .swiper');
	if (teamSlider && window.screen.width < 993) {
		new Swiper(teamSlider, {
		 breakpoints: {
			 300: {
				 slidesPerView: 1,
				 spaceBetween: 10,
			 },
			 579: {
				 slidesPerView: 2,
				 spaceBetween: 10,
			 }
		 },
	 });
	}

	const newsSlider = document.querySelector('.news .swiper');
	if (newsSlider && window.screen.width < 993) {
		new Swiper(newsSlider, {
		 breakpoints: {
			 300: {
				 slidesPerView: 1,
				 spaceBetween: 10,
			 },
			 768: {
				 slidesPerView: 2,
				 spaceBetween: 10,
			 }
		 },
	 });
	}
			
		
	const feedSlider = document.querySelector('.feed .swiper');
	if (feedSlider) {
			const arrPrev = document.querySelector('.feed .arr-prev');
			const arrNext = document.querySelector('.feed .arr-next');
			const feedSwiper = new Swiper(feedSlider, {
				navigation: {
					nextEl: arrNext,
					prevEl: arrPrev,
				},
				breakpoints: {
					300: {
						slidesPerView: 1,
						spaceBetween: 10,
					},
					768: {
						slidesPerView: 1,
						spaceBetween: 0,
					}
				},
			});
			const nums = document.querySelector('.feed .nums');
			const countSlides = document.querySelectorAll('.feed .swiper-slide');
			nums.textContent = `${feedSwiper.activeIndex + 1} / ${countSlides.length}`;
			feedSwiper.on('slideChange', function() {
				nums.textContent = `${feedSwiper.activeIndex + 1} / ${countSlides.length}`;
			});

		
	}
	

	$('.feed .item .right').magnificPopup({
		delegate: 'a',
		type: 'image',
		gallery: {
			enabled: false
		}
	});

	$('.sert-wrap').magnificPopup({
		delegate: 'a',
		type: 'image',
		gallery: {
			enabled: true
		}
	});
	$('.case-gallery-wrap').magnificPopup({
		delegate: 'a',
		type: 'image',
		gallery: {
			enabled: true
		}
	});


/* const links = document.querySelectorAll('a');

if (links) {
	links.forEach((elem) => {
		if (elem.href.indexOf('#') != -1) {
			elem.classList.add('click');
		}
	});
} */

		
  $(".wpcf7").on('wpcf7mailsent', function(event){

		if (event.detail.contactFormId == '426') {
			$('#thx-sub').fadeIn(200);
			$('.popup').addClass('popup-thx');
			$('#thx-sub').removeClass('popup-thx');
			$('.overlay').fadeIn(300);
		} else {
			$('#thx').fadeIn(200);
			$('.popup').addClass('popup-thx');
			$('#thx').removeClass('popup-thx');
			$('.overlay').fadeIn(300);
		}
   
    /* setTimeout(function(){
      $('.overlay').fadeOut(300);
      $('.popup').fadeOut(300);
      $('#thx').fadeOut(200);
    },2500);   */
  });
  $(".wpcf7").on('wpcf7invalid', function(event){
    alert('Заполните поля правильно и повторите попытку!');
  });
  $(".wpcf7").on('wpcf7mailfailed', function(event){
    alert('Ошибка отправки! Попробуйте еще раз!');
  });
	
	document.addEventListener('input', (event) => {
		if (event.target.value != '') {
			if (event.target.closest('.input')) {
				event.target.closest('.input').classList.add('listen');
			}
		}
		if (event.target.value === '') {
			if (event.target.closest('.input')) {
				event.target.closest('.input').classList.remove('listen');
			}
		}
	});

	//Header
	if (window.screen.width > 992) {
		$(window).scroll(function() { 
			if ($(window).scrollTop() > 200) {
				$('.header').addClass('active');
			} else {
				$('.header').removeClass('active');
			}
		});
	} else {
		$('.burger').on('click', function() {
			$('.mob-menu').slideToggle(300);
			$('.overlay-menu').fadeToggle(500);
			$(this).toggleClass('active');
			$('.mob-menu-contacts').fadeOut(300);
		});
		$('.header-contacts').on('click', function() {
			$('.mob-menu-contacts').fadeToggle(300);
			$(this).toggleClass('active');
		});
		$('.mob-menu-contacts .close').on('click', function() {
			$('.mob-menu-contacts').fadeOut(300);
			$('.header-contacts').removeClass('active');
		});
		$('.overlay-menu').on('click', function() {
			$('.mob-menu').slideUp(300);
			$('.overlay-menu').fadeOut(500);
			$('.burger').removeClass('active');
			$('.header-contacts').removeClass('active');
			$('.mob-menu-contacts').fadeOut(300);
		});
	}
	

	
	


	$('.overlay').on('click', function() {
		$('.popup').fadeOut(300);
		$('.overlay').fadeOut(300);
		$('.popup').removeClass('popup-thx');
		$('.popup-video iframe').attr('src', '');
	});
	
	$('.close-button').on('click', function() {
		$('.popup').fadeOut(300);
		$('.overlay').fadeOut(300);
		$('.popup').removeClass('popup-thx');
	});
	$('.popup .close').on('click', function() {
		$('.popup').fadeOut(300);
		$('.overlay').fadeOut(300);
		$('.popup').removeClass('popup-thx');
		$('.popup-video iframe').attr('src', '');
	});
	$('.callback').on('click', function() {
		$('.popup-call').fadeIn(300);
		$('.overlay').fadeIn(300);
	});
	$('.faq-callback').on('click', function() {
		$('.popup-faq').fadeIn(300);
		$('.overlay').fadeIn(300);
	});
	$('.quote-callback').on('click', function() {
		$('.popup-quote').fadeIn(300);
		$('.overlay').fadeIn(300);
	});
	






	


	const starRatingFunc = () => {
		const stars = document.querySelectorAll('.popup.review .form-stars img');
		const starsWrap = stars[0].parentElement;

		stars.forEach((e, i) => {
			e.addEventListener('click', (event) => {
				starsWrap.classList.add('selected');
				$('.stars-input').val(i + 1)
				stars.forEach(e => {
					e.classList.remove('active')
				})
				for (let r = 0; r < i + 1; r++) {
					stars[r].classList.add('active');
				}
				
			})
		})
		
		$(stars).hover(function() {
			if (!starsWrap.classList.contains('selected')) {
				$(this).addClass('active');
				$(this).prev().addClass('active');
				$(this).prev().prev().addClass('active');
				$(this).prev().prev().prev().addClass('active');
				$(this).prev().prev().prev().prev().addClass('active');
			}
		}, function() {
			if (!starsWrap.classList.contains('selected')) {
				$(this).removeClass('active');
				$(this).prev().removeClass('active');
				$(this).prev().prev().removeClass('active');
				$(this).prev().prev().prev().removeClass('active');
				$(this).prev().prev().prev().prev().removeClass('active');
			}

			
		});

	}
	

	const blogBreadcrumbs = document.querySelector('.blog-bread > span');

	if (blogBreadcrumbs) {
		const blogLink = document.createElement('span');
		blogLink.innerHTML = `<span><a href="/novosti/">Новости</a></span> / `;
		const referenceElement = blogBreadcrumbs.querySelector('.breadcrumb_last');
		blogBreadcrumbs.insertBefore(blogLink, referenceElement);
	}
	const caseBread = document.querySelector('.case-bread > span');

	if (caseBread) {
		const blogLink = document.createElement('span');
		blogLink.innerHTML = `<span><a href="/our_cases/">Наши работы</a></span> / `;
		const referenceElement = caseBread.querySelector('.breadcrumb_last');
		caseBread.insertBefore(blogLink, referenceElement);
	}

	const singlePage = document.querySelector('.only-single-page');

	if (singlePage) {
		
		setInterval(() => {
			const commentH2 = document.querySelector('.wpd-thread-info');
			commentH2.textContent = 'Комментарии к статье';
		}, 3000);
		const navWrap = document.querySelector('.single-nav-wrap');
		const navWrapParent = navWrap.parentElement;
		const content = document.querySelector('.content');
		const contentBlocks = content.querySelectorAll('*');
		let elems = 0;
		contentBlocks.forEach((elem, index) => {
			if (elem.id) {
				const navLink = document.createElement('a');
				navLink.href = `#${elem.id}`;
				navLink.classList.add('anchor');
				navLink.textContent = elem.id.replace(/\-/g, ' ');
				navWrap.appendChild(navLink);
				elems++;
			}
		});
		if (elems === 0) {
			navWrapParent.remove();
		}
		const rating = document.querySelector('.wpd-rating-stars').cloneNode(true);
		const ratngTopWrap = document.querySelector('.new-rating');
		const ratngVotes = document.querySelector('.wpd-rating-value .wpdrc').textContent;
		const votes = document.querySelector('.votes');

		ratngTopWrap.appendChild(rating);
		votes.textContent = ratngVotes;
	}
	$(".anchor").click(function () {
		var elementClick = $(this).attr("href");
		var destination = $(elementClick).offset().top - 90;
		$("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 500);
		return false;
	});



	const accelerator = document.querySelectorAll('a');

	accelerator.forEach(e => {
		if (e.href.indexOf('accelerator') != -1) {
			e.remove();
			setTimeout(() => {
				if (e) {
					e.remove();
				}
			}, 5000);
		}
	});
	


	const inputPhones = document.querySelectorAll('.wpcf7-tel');

	if (inputPhones.length > 0) {
		inputPhones.forEach(input => {
			IMask(input, {mask: '+{7} (000) 000-00-00'})
		});
	}

	if (window.screen.width < 768) {
		const servicesTitles = document.querySelectorAll('.services .title-toggle');

		if (servicesTitles.length > 0) {
			$(servicesTitles).on('click', function() {
				$(this).next().slideToggle(200);
				$(this).toggleClass('active');
			});
		}
	} else {
		const servicesToggles = document.querySelectorAll('.services-toggles .item');

		if (servicesToggles.length > 0) {
			servicesWrappers = document.querySelectorAll('.services .services-wrap');
			servicesToggles.forEach((item, index) => {
				item.addEventListener('click', () => {
					servicesToggles.forEach(e => e.classList.remove('active'));
					servicesWrappers.forEach(e => e.style.display = 'none');
					item.classList.add('active');
					servicesWrappers[index].style.display = 'block';
				})
			})
		}
	}


	const faqItems = document.querySelectorAll('.faq .item b');

	if (faqItems.length > 0) {
		$(faqItems).on('click', function() {
			$(this).toggleClass('active');
			$(this).next().slideToggle(200);
		})
	}

	const props = document.querySelectorAll('.props-wrap .left .item b');

	if (props.length > 0) {
		function copytext(el) {
			var $tmp = $("<textarea>");
			$("body").append($tmp);
			$tmp.val($(el).text()).select();
			document.execCommand("copy");
			$tmp.remove();
		}
		props.forEach(e => {
			e.addEventListener('click', () => {
				copytext(e);
				e.classList.add('active');
				setTimeout(() => {
					e.classList.remove('active');
				}, 1500);
			})
		})
	}

	const singleVideo = document.querySelector('.single-video');

	if (singleVideo) {
		singleVideo.addEventListener('click', () => {
			singleVideo.classList.add('active');
		})

	}

	const shareBtns = document.querySelector('.single .share .bar');

	if (shareBtns) {
		const copyBar = document.querySelector('.content .addtoany_content');
		const newBar = copyBar.cloneNode(true);
		shareBtns.appendChild(newBar);
		$('.single-top .share').hover(function() {
			$(this).children('.bar').fadeIn(200);
		}, function() {
			$(this).children('.bar').fadeOut(200);
			
		});
	}

	$('.feed-video-wrap .item').on('click', function() { 
		$('.popup-video').fadeIn(300);
		$('.overlay').fadeIn(300);
		$('.popup-video iframe').attr('src', $(this).attr('data-src'));
	});

}); //end