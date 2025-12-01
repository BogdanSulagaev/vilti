<?php include('templates/header.php') ?>

    <!-- projects -->
    <section class="projects residences">
        <div class="container">
            <nav class="breadcrumbs fade-in" aria-label="Breadcrumb" role="navigation" itemscope itemtype="https://schema.org/BreadcrumbList">
                <ol class="breadcrumbs__list">
                    <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a class="breadcrumbs__link" href="/" itemprop="item">
                            <span itemprop="name">Главная</span>
                        </a>
                        <meta itemprop="position" content="1" />
                    </li>
                    <li class="breadcrumbs__item breadcrumbs__item--current" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
                        <span class="breadcrumbs__link" itemprop="item">
                            <span itemprop="name">Бутик резиденций</span>
                        </span>
                        <meta itemprop="position" content="2" />
                    </li>
                </ol>
            </nav>
            <div class="head-content fade-in">
                <h1 class="title title--h2">Бутик резиденций VILTI manor</h1>
                <div class="projects__head-img"> 
                    <img class="lazyload" src="img/default.png" data-src="img/contacts/mark.svg" alt="img">
                </div>
            </div>
            <div class="residences__filters fade-in">
                <button class="filters-button">Фильтр</button>
                <div class="filters">
                    <div class="filter-item range">
                        <label>Площадь</label>
                        <div class="range__inner">
                            <input type="text" id="square_min" class="input-range">
                            <input type="text" id="square_max" class="input-range">
                        </div>
                        <div id="slider-range"></div>
                    </div>

                    <div class="filter-item select" data-name="roof">
                        <label>Крыша</label>
                        <button class="select-btn">Плоская</button>
                        <div class="select-dropdown">
                            <div class="select-dropdown__inner buttons">
                                <button class="option-btn active">Плоская</button>
                                <button class="option-btn">Скатная</button>
                                <button class="option-btn">Мансардная</button>
                            </div>
                        </div>
                    </div>

                    <div class="filter-item select" data-name="rooms" data-multiple="true">
                        <label>Кол-во комнат</label>
                        <button class="select-btn">8 комнат, 7 комнат, 5 комнат</button>
                        <div class="select-dropdown">
                            <div class="select-dropdown__inner buttons">
                                <button class="option-btn active">5 комнат</button>
                                <button class="option-btn">6 комнат</button>
                                <button class="option-btn active">7 комнат</button>
                                <button class="option-btn active">8 комнат</button>
                            </div>
                        </div>
                    </div>

                    <div class="filter-item select" data-name="pool">
                        <label>Бассейн</label>
                        <button class="select-btn">Есть</button>
                        <div class="select-dropdown">
                            <div class="select-dropdown__inner buttons">
                                <button class="option-btn">Нет</button>
                                <button class="option-btn active">Есть</button>
                            </div>
                        </div>
                    </div>

                    <div class="filter-item select" data-name="garage">
                        <label>Гараж</label>
                        <button class="select-btn">Для авто</button>
                        <div class="select-dropdown">
                            <div class="select-dropdown__inner buttons">
                                <button class="option-btn">Нет</button>
                                <button class="option-btn active">Для авто</button>
                                <button class="option-btn">На 2 авто</button>
                            </div>
                        </div>
                    </div>

                    <button class="reset-btn">Сбросить <img class="lazyload" src="img/default.png" data-src="img/icons/close-filters.svg" alt="img"></button>
                </div>

            </div>
            <div class="residences__main">
                <div class="residences__grid">
                    <?php
                    $card_id = 1;
                    include('templates/components/residence-card.php'); 

                    $card_id = 2;
                    include('templates/components/residence-card.php'); 

                    $card_id = 3;
                    include('templates/components/residence-card.php'); 

                    $card_id = 4;
                    include('templates/components/residence-card.php'); 
                    ?>
                </div>

                <?php
                $helpform_id = 1;
                include('templates/sections/help-form.php'); 
                ?>

                <?php
                $featured_id = 2;
                include('templates/components/residence-featured.php'); 
                ?>

                <div class="residences__grid">
                    <?php
                    $card_id = 5;
                    include('templates/components/residence-card.php'); 

                    $card_id = 6;
                    include('templates/components/residence-card.php'); 

                    $card_id = 7;
                    include('templates/components/residence-card.php'); 

                    $card_id = 8;
                    include('templates/components/residence-card.php'); 
                    ?> 
                </div>

                <?php
                $helpform_id = 1;
                include('templates/sections/help-form.php'); 
                ?>

                <div class="residences__grid">
                    <?php
                    $card_id = 9;
                    include('templates/components/residence-card.php'); 

                    $card_id = 10;
                    include('templates/components/residence-card.php'); 
                    ?>
                </div>

                <?php
                $featured_id = 1;
                include('templates/components/residence-featured.php'); 
                ?>

                <div class="residences__button fade-in">
                    <button class="button button--outline">Показать еще</button>
                </div>
            </div>
        </div>
    </section>

    <?php
    $promoform_id = 2;
    include('templates/sections/promo-form.php'); 
    ?>

    <?php include('templates/sections/faq.php') ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/nouislider/dist/nouislider.min.css">
    <script src="https://cdn.jsdelivr.net/npm/nouislider/dist/nouislider.min.js"></script>
    <script>
        (function() {
          var slider = document.getElementById('slider-range');
          var inputMin = document.getElementById('square_min');
          var inputMax = document.getElementById('square_max');

          noUiSlider.create(slider, {
            start: [389, 441],
            connect: true,
            range: {
              min: 389,
              max: 460
            },
            step: 1
          });

          function clean(str) {
            return parseInt(str.replace(/[^\d]/g, ''), 10) || 0;
          }
          function format(val) {
            return val + ' м²';
          }

          // При движении ползунков — обновить инпуты с маской
          slider.noUiSlider.on('update', function(values, handle) {
            var val = parseInt(values[handle]);
            if (handle === 0) {
              inputMin.value = format(val);
            } else {
              inputMax.value = format(val);
            }
          });

          // При фокусе — убрать «м²», оставить число
          [inputMin, inputMax].forEach(function(inp) {
            inp.addEventListener('focus', function() {
              inp.value = clean(inp.value);
            });
          });

          // При blur — формат + установить в слайдер
          [inputMin, inputMax].forEach(function(inp, index) {
            inp.addEventListener('blur', function() {
              var min = clean(inputMin.value);
              var max = clean(inputMax.value);
              // Можно добавить проверку: если min > max, поменять местами
              if (min > max) {
                var tmp = min;
                min = max;
                max = tmp;
                inputMin.value = format(min);
                inputMax.value = format(max);
              }
              slider.noUiSlider.set([min, max]);
              inp.value = format(clean(inp.value));
            });
          });
        })();

    </script>   

<?php include('templates/footer.php') ?>  