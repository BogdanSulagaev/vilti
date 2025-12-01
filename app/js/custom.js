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

  //sectiion construction-steps
    $('.construction-steps__button .button').on('click', function () {
      const $button = $(this);
      const $grid = $button.closest('.construction-steps__content').find('.construction-steps__list');

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

  //fancybox
    Fancybox.bind("[data-fancybox]", {
      contentClick: "iterateZoom",
      Images: {
        Panzoom: {
          maxScale: 2,
        },
      },
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

    $(document).on('click', function () {
        $('.filter-item.select.open')
            .removeClass('open')
            .find('.select-dropdown').hide();
    });

    // $(document).on('click', '.filters-button', function () {
    //     $('.filters').addClass('open');
    //     $('.overlay').addClass('active');
    // });
    // $(document).on('click', '.overlay, .filters .close', function () {
    //     $('.filters').removeClass('open');
    //     $('.overlay').removeClass('active');
    // });

  

}); 

//section clips
document.querySelectorAll('[data-target="#modal_video"]').forEach(item => {
    item.addEventListener('click', function (e) {
        e.preventDefault();
        e.stopPropagation();

        const src = this.getAttribute('data-src');
        document.querySelector('#iframe_video').src = src;

        document.querySelector('#modal_video').classList.add('active');
    });
});
document.querySelector('.modal-video__close').addEventListener('click', () => {
    closeVideoModal();
});
document.querySelector('#modal_video').addEventListener('click', (e) => {
    if (e.target.id === 'modal_video') closeVideoModal();
});
function closeVideoModal() {
    const modal = document.querySelector('#modal_video');
    modal.classList.remove('active');
    document.querySelector('#iframe_video').src = '';
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


//video
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
        video.play();
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




