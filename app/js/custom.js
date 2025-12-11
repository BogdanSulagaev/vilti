$(document).ready(function () {

  //section faq
    $('.faq__item').on('click', function() {
      $('.faq__item').not(this).removeClass('active').find('.faq__answer').slideUp();
      $(this).toggleClass('active').find('.faq__answer').slideToggle();
    });
    $('.faq__button .button').on('click', function () {
      const $button = $(this);
      const $grid = $button.closest('.faq__content').find('.faq__grid');

      $button.hide();
      $grid.addClass('expanded');
    });

    /*переключение категорий*/
    const $buttonsFaq = $('.faq .categories__item');
    const $categoriesFaq = $('.faq__panel');

    $buttonsFaq.on('click', function () {
        const index = $(this).index();

        $buttonsFaq.removeClass('categories__item--active');
        $(this).addClass('categories__item--active');

        $categoriesFaq.removeClass('is-active');
        $categoriesFaq.eq(index).addClass('is-active');
    });


  //section about-story
    /*переключение категорий*/
    const $buttonsAbout = $('.about-story .categories__item');
    const $categoriesAbout = $('.about-story__panel');

    $buttonsAbout.on('click', function () {
        const index = $(this).index();

        $buttonsAbout.removeClass('categories__item--active');
        $(this).addClass('categories__item--active');

        $categoriesAbout.removeClass('is-active');
        $categoriesAbout.eq(index).addClass('is-active');
    });


  //section articles
    /*переключение категорий*/
    const $buttonsArticles = $('.articles .categories__item');
    const $categoriesArticles = $('.articles__panel');

    $buttonsArticles.on('click', function () {
        const index = $(this).index();

        $buttonsArticles.removeClass('categories__item--active');
        $(this).addClass('categories__item--active');

        $categoriesArticles.removeClass('is-active');
        $categoriesArticles.eq(index).addClass('is-active');
    });


  //section documents
    /*переключение категорий*/
    const $buttonsDocuments = $('.documents .categories__item');
    const $categoriesDocuments = $('.documents-list__panel');

    $buttonsDocuments.on('click', function () {
        const index = $(this).index();

        $buttonsDocuments.removeClass('categories__item--active');
        $(this).addClass('categories__item--active');

        $categoriesDocuments.removeClass('is-active');
        $categoriesDocuments.eq(index).addClass('is-active');
    });


  //section media
    /*переключение категорий*/
    const $buttonsMedia = $('.media .categories__item');
    const $categoriesMedia = $('.media__panel');

    $buttonsMedia.on('click', function () {
        const index = $(this).index();

        $buttonsMedia.removeClass('categories__item--active');
        $(this).addClass('categories__item--active');

        $categoriesMedia.removeClass('is-active');
        $categoriesMedia.eq(index).addClass('is-active');
    });



  //sectiion construction-steps and step-process
    $('.steps--button .button').on('click', function () {
      const $button = $(this);
      const $grid = $button.closest('.steps--content').find('.steps--list');

      $button.hide();
      $grid.addClass('expanded');
    });


  //sectiion expert
    $('.expert .button--outline').on('click', function () {
      const $button = $(this);
      const $grid = $button.closest('.expert__content').find('.expert__text');

      $button.hide();
      $grid.addClass('expanded');
    });


  //sectiion clips
    const swiperClips = new Swiper('.clips .swiper', {
      loop: false,
      navigation: {
        nextEl: '.clips .swiper-button-next',
        prevEl: '.clips .swiper-button-prev',
      },
      breakpoints: {
        320: {          
          slidesPerView: "auto",
          spaceBetween: 10,
        },
        480: {          
          slidesPerView: 3,
          spaceBetween: 10,
        },
        768: {          
          slidesPerView: 4,
          spaceBetween: 15,
        },
        992: {          
          slidesPerView: 6,
          spaceBetween: 15,
        },
        1200: {          
          slidesPerView: 8,
          spaceBetween: 15,
        },
        
      },
    });


  //form
    $('.form__checkbox-check').each(function() {
      const $checkboxBtn = $(this);
      const $form = $checkboxBtn.closest('form');
      const $submitBtn = $form.find('.form__button');

      $checkboxBtn.on('click', function() {
        $checkboxBtn.toggleClass('form__checkbox-check--active');
        const isActive = $checkboxBtn.hasClass('form__checkbox-check--active');
        $submitBtn.prop('disabled', !isActive);
      });
    });


  //section vacancies
    $('.vacancies__item').on('click', function(e) {
      if ($(e.target).closest('button').length) return;

      $(this).toggleClass('active');
      $(this).find('.vacancies__details').stop(true, true).slideToggle(300);
    });


  //section contacts
    $('.contacts__map').on('click', function() {
        $(this).find('iframe').css('pointer-events', 'auto');
    });


  //section project-plan
    $('.project-plan .categories__item').on('click', function () {

      var index = $(this).index();

      $('.project-plan .categories__item').removeClass('categories__item--active');

      $(this).addClass('categories__item--active');

      $('.project-plan__content').removeClass('is-active').eq(index).addClass('is-active');
    });


  //fancybox
    Fancybox.bind("[data-fancybox]", {
      contentClick: "iterateZoom",
      Images: {
        Panzoom: {
          maxScale: 2,
        },
      },
    });


  //review-card
    function isMobile() {
        return window.matchMedia('(max-width: 480px)').matches;
    }

    $(document).on('click', '.review-card__btn-toggle', function () {
        if (!isMobile()) return;

        const $reviewCardBtn = $(this);
        const $reviewCardText = $reviewCardBtn.find('.review-card__text-toggle');

        $reviewCardBtn.toggleClass('is-open');
        $reviewCardText.slideToggle(300);
    });

    $('.review-card__params-btn').on('click', function () {
        // if (!isMobile()) return;

        const reviewCard = $(this).closest('.review-card');
        const reviewParams = reviewCard.find('.review-card__params');
        const reviewBtn = $(this);

        reviewParams.slideDown(300);
        reviewParams.addClass('is-open');
        reviewBtn.hide();
    });


  //filters
    $(document).on('click', '.select-btn', function (e) {
        e.stopPropagation();

        const $select = $(this).closest('.filter-item.select');
        const $dropdown = $select.find('.select-dropdown');

        $('.filter-item.select.open').not($select).each(function () {
            $(this).removeClass('open')
                   .find('.select-dropdown').hide();
        });

        if ($select.hasClass('open')) {
            $select.removeClass('open');
            $dropdown.hide();
        } else {
            $select.addClass('open');
            $dropdown.show();
        }
    });

    $(document).on('click', '.option-btn', function (e) {
        e.stopPropagation();

        const $opt = $(this);
        const $select = $opt.closest('.filter-item.select');
        const isMultiple = $select.data('multiple') === true || $select.data('multiple') === "true";

        if (isMultiple) {
            $opt.toggleClass('active');

            let selected = [];

            $select.find('.option-btn.active').each(function () {
                selected.push($(this).text());
            });

            if (selected.length === 0) {
                const first = $select.find('.option-btn').first().text();
                $select.find('.select-btn').text(first);
            } else {
                $select.find('.select-btn').text(selected.join(', '));
            }

        } else {
            $select.find('.option-btn').removeClass('active');
            $opt.addClass('active');
            $select.find('.select-btn').text($opt.text());
            $select.removeClass('open');
            $select.find('.select-dropdown').hide();
        }
    });

    $(document).on('click', '.switcher-btn', function (e) {
      e.stopPropagation();

      const $btn = $(this);
      const $switcher = $btn.closest('.filter-item.switcher');
      const $buttons = $switcher.find('.switcher-btn');

      $buttons.removeClass('active');
      $btn.addClass('active');

      const value = $btn.text();
    });

    $(document).on('click', function () {
      $('.filter-item.select.open').removeClass('open').find('.select-dropdown').hide();
    });

    $('.filters-button').on('click', function () {
      $('.filters').addClass('open');
      $('.overlay').addClass('active');
      lockScroll();
    });

    $('.overlay, .filters__close').on('click', function () {
      $('.filters').removeClass('open');
      $('.overlay').removeClass('active');
      unlockScroll();
    }); 


  //project page
    $('.fixed-project-panel .nav-link').on('click', function(e) {
      e.preventDefault();

      const target = $($(this).attr('href'));
      if (!target.length) return;

      $('html, body').animate({
          scrollTop: target.offset().top
      }, 600);
    });
    $('.fixed-project-panel__close').on('click', function(e) {
      $('.fixed-project-panel').fadeOut('fast');
    });

  //navmenu
    $(document).on('click', function (e) {
        const $target = $(e.target);
        const $menu = $('.navmenu');
        const $overlay = $('.overlay');

        // toggle по btn-burger
        if ($target.closest('.btn-burger').length) {
            const isOpen = $menu.hasClass('navmenu--open');

            if (isOpen) {
                
                $menu.removeClass('navmenu--open');
                $('.btn-burger').removeClass('active');
                $overlay.removeClass('active');
                
                unlockScroll();
            } else {
                $menu.addClass('navmenu--open');
                $('.btn-burger').addClass('active');
                $overlay.addClass('active');
                
                lockScroll();
            }
            return;
        }

        // закрыть по close
        if ($target.closest('.navmenu__close').length) {
            $overlay.removeClass('active');
            $menu.removeClass('navmenu--open');
            
            unlockScroll();
            return;
        }

        // закрыть по overlay
        if ($target.hasClass('overlay')) {
            $overlay.removeClass('active');
            $menu.removeClass('navmenu--open');
            
            $('.btn-burger').removeClass('active');
            unlockScroll();
            return;
        }
    });


  //modal
    /*default*/
    $(document).on('click', '[data-toggle="modal"]', function (e) {
        e.preventDefault();
        $($(this).data('target')).addClass('modal--open');
        $('.header').css({
            visibility: 'visible',
            animationName: 'fadeIn'
        });
        lockScroll();
    });

    $(document).on('click', '.modal__close', function () {
        $(this).closest('.modal').removeClass('modal--open');
        unlockScroll();
    });

    $(document).on('click', '.modal', function (e) {
        if ($(e.target).closest('.modal__inner').length) {
            return;
        }

        const $modal = $(this);
        $modal.removeClass('modal--open');
        unlockScroll();
    });

    /*video*/
    $(document).on('click', '[data-target="#modal_video"]', function (e) {
      e.preventDefault();
      e.stopPropagation();

      const src = $(this).data('src');
      $('#iframe_video').attr('src', src);

      $('#modal_video').addClass('active');
    });
    function closeVideoModal() {
      $('#modal_video').removeClass('active');
      $('#iframe_video').attr('src', '');
    }
    $(document).on('click', '.modal__close', function (e) {
      e.preventDefault();
      e.stopPropagation();
      closeVideoModal();
    });
}); 


//header
function lockScroll() {
  document.documentElement.setAttribute('data-scroll', 'false');
}
function unlockScroll() {
   document.documentElement.setAttribute('data-scroll', 'true');
}

let lastScroll = 0;

window.addEventListener('scroll', function () {
    const current = window.pageYOffset;
    const header = document.querySelector('.header');
    const caption = document.querySelector('.header__row-caption');

    if (!caption) return;

    if (current > lastScroll) {
        caption.classList.add('is-hidden');

        if (header) {
            header.style.visibility = 'visible';
            header.style.animationName = 'fadeIn';
        }
    } else {
        caption.classList.remove('is-hidden');


    }

    lastScroll = current;
});


//header height
function getHeaderHeight() {
  const header = document.querySelector('.header');
  if (!header) return 0;
  return header.getBoundingClientRect().height;
}
function updateTopOffsets() {
  const headerHeight = getHeaderHeight();

  const navmenu = document.querySelector('.navmenu');
  const modals = document.querySelectorAll('.modal');
  const filters = document.querySelector('.filters');

  if (navmenu) {
      navmenu.style.top = headerHeight + 'px';
  }

  if (filters) {
    filters.style.top = headerHeight + 'px';
  }

  modals.forEach(modal => {
    modal.style.top = headerHeight + 'px';
  });
}
window.addEventListener('load', updateTopOffsets);
window.addEventListener('resize', updateTopOffsets);
window.addEventListener('scroll', updateTopOffsets);


//cookie footer
function acceptCookies() {
  document.getElementById('cookie').style.display = 'none';
  localStorage.setItem('cookiesAccepted', 'true');
}
window.addEventListener('load', function () {
  if (localStorage.getItem('cookiesAccepted') !== 'true') {
    document.getElementById('cookie').style.display = 'block';
  }
});
/*страница проекта, фиксированная плашка fixed-project-panel*/
window.addEventListener('load', function () {
  const cookie = document.getElementById('cookie');
  const panel = $('.fixed-project-panel');

  const cookieAccepted = localStorage.getItem('cookiesAccepted') === 'true';

  if (!cookieAccepted) {
    cookie.style.display = 'block';
    panel.hide(); 
  } else {
    cookie.style.display = 'none';
    panel.show(); 
  }
});
function acceptCookies() {
  document.getElementById('cookie').style.display = 'none';
  localStorage.setItem('cookiesAccepted', 'true');

  $('.fixed-project-panel').fadeIn('fast');
}


//wow
document.querySelectorAll('.fade-in').forEach(el => {
  el.classList.add('wow', 'animate__animated', 'animate__fadeIn');
});
document.querySelectorAll('.fade-in-up').forEach(el => {
  el.classList.add('wow', 'animate__animated', 'animate__fadeInUp');
});
var wow = new WOW(
  {
    boxClass:     'wow',      
    animateClass: 'animated', 
    offset:       0,          
    mobile:       true,       
    live:         true,       
    callback:     function(box) {
    },
    scrollContainer: null,    
    
  }
);
wow.init();


//video lazy
document.querySelectorAll(".lazy-video").forEach(video => {
    if (!('IntersectionObserver' in window)) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            const videoEl = entry.target;

            if (entry.isIntersecting) {
                const firstSource = videoEl.querySelector('source');
                const isLazyLoaded = firstSource && firstSource.src;

                if (isLazyLoaded) {
                    if (videoEl.paused) videoEl.play();
                } else {
                    videoEl.querySelectorAll('source').forEach(source => {
                        if (source.dataset.src) {
                            source.src = source.dataset.src;
                        }
                    });

                    videoEl.load();
                    videoEl.classList.remove("lazy-video");
                    videoEl.play();
                }
            } else {
                if (!videoEl.paused) videoEl.pause();
            }
        });
    }, { threshold: 0.1 });

    observer.observe(video);
});


//article-video
document.querySelectorAll('.article-video__video').forEach(wrapper => {
    const video = wrapper.querySelector('.article-video-lazy');
    const btn = wrapper.querySelector('.button--play');
    const poster = wrapper.querySelector('.article-video-poster');

    if (!video || !btn) return;

    btn.addEventListener('click', () => {

        if (!video.dataset.loaded) {
            video.querySelectorAll('source').forEach(source => {
                if (source.dataset.src) {
                    source.src = source.dataset.src;
                }
            });

            video.load();
            video.classList.remove('article-video-lazy');
            video.dataset.loaded = 'true'; 
        }

        if (poster) poster.classList.add('is-hidden');
        btn.classList.add('is-hidden');

        setTimeout(() => {
            if (poster) poster.style.display = 'none';
        }, 400);

        video.style.pointerEvents = 'auto';
        video.style.cursor = 'pointer';
        // video.play();
        video.play().catch(() => {});
    });

    video.addEventListener('click', () => {
        if (!video.paused) {
            video.pause();

            btn.classList.remove('is-hidden');
            btn.style.pointerEvents = 'auto';

            video.style.pointerEvents = 'none';
            video.style.cursor = 'default';
        }
    });
});


//Cursor
const cursor = document.querySelector('.cursor');
let x = 0, y = 0, tx = 0, ty = 0;
const speed = 0.15;

document.addEventListener('mousemove', e => {
  tx = e.clientX;
  ty = e.clientY;
});

function animate() {
  x += (tx - x) * speed;
  y += (ty - y) * speed;
  cursor.style.transform = `translate(${x}px, ${y}px) scale(${cursor.dataset.scale || 1})`;
  requestAnimationFrame(animate);
}
animate();

document.querySelectorAll('a, button, .header, .header *').forEach(el => {
  el.addEventListener('mouseenter', () => cursor.dataset.scale = 0);
  el.addEventListener('mouseleave', () => cursor.dataset.scale = 1);
});


//menu
document.addEventListener('DOMContentLoaded', function () {
  const dropdownLinks = document.querySelectorAll('.menu .has-children > a');
  const hasChildrenItems = document.querySelectorAll('.menu .has-children');

  dropdownLinks.forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault(); 
      e.stopPropagation(); 

      const parent = link.parentElement;

      hasChildrenItems.forEach(item => {
        if (item !== parent) {
          item.classList.remove('open');
        }
      });

      parent.classList.toggle('open');
    });
  });

  document.addEventListener('click', function (e) {
    hasChildrenItems.forEach(item => item.classList.remove('open'));
  });

  document.querySelector('.menu').addEventListener('click', function (e) {
    e.stopPropagation();
  });
});


//section process
document.addEventListener('DOMContentLoaded', () => {
  const items = document.querySelectorAll('.process__item');

  let previousRight = 0;

  items.forEach((item, i) => {
    const dateEl = item.querySelector('.process__item-date');

    dateEl.style.marginLeft = `${previousRight}px`;

    const rect = dateEl.getBoundingClientRect();
    const width = rect.width || 60;

    previousRight += width + 1; 
  });
});




