<!-- residence-locations -->
<section class="residence-locations">
    <div class="container">
        <div class="residence-locations__content">
            <div class="head-content fade-in-up">
                <h2 class="title title--h2"><?php echo $title; ?></h2>
            </div>
            <div class="residence-locations__filters fade-in">
                <div class="filters">
                    <!-- множественный выбор - data-multiple="true" -->
                    <div class="filter-item select filter-item--hidden">
                        <label>Страна</label>
                        <button class="select-btn">Россия</button>
                        <div class="select-dropdown">
                            <div class="select-dropdown__inner buttons">
                                <button class="option-btn active">Россия</button>
                                <button class="option-btn">Россия</button>
                                <button class="option-btn">Россия</button>
                            </div>
                        </div>
                    </div>
                    <div class="filter-item select">
                        <label>Регион</label>
                        <button class="select-btn">Москва и Московская область</button>
                        <div class="select-dropdown">
                            <div class="select-dropdown__inner buttons">
                                <button class="option-btn active">Москва и Московская область</button>
                                <button class="option-btn">Москва и Московская область</button>
                                <button class="option-btn">Москва и Московская область</button>
                                <button class="option-btn">Москва и Московская область</button>
                            </div>
                        </div>
                    </div>
                    <div class="filter-item select">
                        <label>Шоссе</label>
                        <button class="select-btn">Новорижское</button>
                        <div class="select-dropdown">
                            <div class="select-dropdown__inner buttons">
                                <button class="option-btn">Новорижское</button>
                                <button class="option-btn active">Новорижское</button>
                            </div>
                        </div>
                    </div>
                    <div class="filter-item select">
                        <label>Поселок</label>
                        <button class="select-btn">Agalarov Estate</button>
                        <div class="select-dropdown">
                            <div class="select-dropdown__inner buttons">
                                <button class="option-btn">Agalarov Estate</button>
                                <button class="option-btn active">Agalarov Estate</button>
                                <button class="option-btn">Agalarov Estate</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="residence-locations__grid fade-in">
                <div class="residence-locations__item">
                    <div class="residence-locations__inner">
                        <div class="residence-locations__details">
                            <div class="residence-locations__header">
                                <div class="residence-locations__mark">
                                    <img class="lazyload" src="img/default.png" data-src="img/residence-locations/mark.svg" alt="img">
                                </div>
                                <div class="residence-locations__title">Agalarov Estate</div>
                            </div>
                            <div class="residence-locations__sub">Новорижское шоссе</div>
                            <div class="residence-locations__desc">
                                <p>Архитектура, идеально вписанная в&nbsp;окружающую среду и&nbsp;природный ландшафт, новое переосмысление классических античных образов&nbsp;&mdash; вот основные принципы американского неоклассицизма, ставшего основополагающим стилем коттеджного поселка Агаларов Эстейт. </p>
                                <p>Архитектура, идеально вписанная в&nbsp;окружающую среду и&nbsp;природный ландшафт, новое переосмысление классических античных образов&nbsp;&mdash; вот основные принципы американского неоклассицизма</p>
                            </div>
                        </div>
                        <div class="residence-locations__media">
                            <div id="map" style="width:100%; height:100%;filter: grayscale(1);"></div>

                            <script src="https://api-maps.yandex.ru/2.1/?apikey=98757bf7-9270-4d10-a904-eb5987d2e96a&lang=ru_RU"></script>
                            <script>
                                ymaps.ready(init);

                                function init() {
                                  const map = new ymaps.Map('map', {
                                    center: [55.800051, 37.006348],
                                    zoom: 12,
                                    controls: [],
                                    behaviors: ['drag']
                                  });

                                  const placemark = new ymaps.Placemark(
                                    [55.800051, 37.006348],
                                    {
                                        iconCaption: "",
                                    },
                                    {
                                        iconLayout: 'default#image',
                                        iconImageHref: 'img/residence-locations/logo.svg',
                                        iconImageSize: [120, 90],     
                                        iconImageOffset: [-40, -40]  
                                    }
                                  );
                                  map.geoObjects.add(placemark);
                                }
                            </script>
                            <div class="residence-locations__image">
                                <img class="lazyload" src="img/default.png" data-src="img/residence-locations/1.jpg" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
