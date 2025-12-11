<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
<script src="https://npmcdn.com/flatpickr/dist/l10n/ru.js"></script>

<!-- project-process -->
<section class="project-process" id="project-process">
    <div class="container">
        <div class="head-content fade-in-up">
            <h2 class="section__title title--h2 title--mobile">Сроки строительства резиденции Кардуччи</h2>
        </div>
        <div class="project-process__content">
            <div class="project-process__info fade-in">
                <div class="project-process__head">
                    <div class="project-process_img">
                        <img class="lazyload" src="img/default.png" data-src="img/project-process/mark.svg" alt="img">
                    </div>
                    <div class="project-process__title">Выберите дату начала&nbsp;строительства</div>
                    <div class="project-process__date" id="project-process__date">
                        <label class="project-process__date-label">Выберите дату</label>
                        <div class="project-process__date-input">
                            <input type="text" name="date" id="datepicker" placeholder="24.11.2025" class="date">
                        </div>
                        <script>
                            document.addEventListener('DOMContentLoaded', () => {
                              flatpickr('#datepicker', {
                                dateFormat: "d.m.Y",
                                "locale": "ru",
                                disableMobile: "true",
                                appendTo: document.querySelector('#project-process__date')
                              });
                            });
                        </script>
                        <style>
                            .flatpickr-calendar {
                                position: absolute !important;
                                left: 0 !important;
                                top: calc(100% + 8px) !important;
                                transform: none !important;
                            }
                        </style>
                    </div>
                    <div class="project-process__total">
                        Итого: <span class="project-process__total-value">1 год 3 месяца</span>
                    </div>
                </div>
                <div class="project-process__image">
                    <picture>
                        <source srcset="img/default.png" data-srcset="img/project-process/bg.webp 1x, img/project-process/bg@2x.webp 2x" type="image/webp">
                        <source srcset="img/default.png" data-srcset="img/project-process/bg.jpg 1x, img/project-process/bg@2x.jpg 2x" type="image/jpeg">
                        <img class="lazyload fade-in-up" src="img/default.png" data-srcset="img/project-process/bg.jpg 1x, img/project-process/bg@2x.jpg 2x" alt="img">
                    </picture>
                </div>
            </div>
            <div class="project-process__scroll fade-in">Проскрольте вправо <img class="lazyload" src="img/default.png" data-src="img/gif.gif" alt="img"></div>
            <div class="project-process__stages fade-in">
                <div class="project-process__labels">
                    <span class="project-process__label">Фундамент</span>
                    <span class="project-process__label">Стены 1 этажа</span>
                    <span class="project-process__label">Перекрытие 1 этажа</span>
                    <span class="project-process__label">Стены 2 этажа</span>
                    <span class="project-process__label">Стропильная система</span>
                    <span class="project-process__label">Кровля</span>
                    <span class="project-process__label">Отделка фасада</span>
                    <span class="project-process__label">Черновая отделка</span>
                    <span class="project-process__label">Инженерные системы</span>
                    <span class="project-process__label">Чистовая отделка</span>
                </div>
                <div class="project-process__items">
                    <span class="process__item">
                        <span class="process__item-date">14.09</span>
                    </span>
                    <span class="process__item">
                        <span class="process__item-date">28.09</span>
                    </span>
                    <span class="process__item">
                        <span class="process__item-date">12.10</span>
                    </span>
                    <span class="process__item">
                        <span class="process__item-date">26.10</span>
                    </span>
                    <span class="process__item">
                        <span class="process__item-date">14.12</span>
                    </span>
                    <span class="process__item">
                        <span class="process__item-date">28.12</span>
                    </span>
                    <span class="process__item">
                        <span class="process__item-date">25.01.2026</span>
                    </span>
                    <span class="process__item">
                        <span class="process__item-date">15.02.2026</span>
                    </span>
                    <span class="process__item">
                        <span class="process__item-date">10.05.2026</span>
                    </span>
                    <span class="process__item">
                        <span class="process__item-date">30.05.2026</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>


