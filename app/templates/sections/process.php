<!-- process -->
<section class="process">
    <div class="container">
        <div class="process__content">
            <div class="process__info fade-in">
                <div class="process__head">
                    <div class="process_img">
                        <img class="lazyload" src="img/default.png" data-src="img/process/mark.svg" alt="img">
                    </div>
                    <div class="process__title">Прозрачный процесс</div>
                    <div class="process__text"><p><strong>Фиксированные этапы и&nbsp;сроки. </strong>Вы&nbsp;заранее знаете бюджет и&nbsp;видите, как дом растёт шаг за&nbsp;шагом.</p></div>
                    <a href="#" class="link">Этапы реализации <span class="link__icon"></span></a>
                </div>
                <div class="process__image fade-in-up">
                    <picture>
                        <source srcset="img/default.png" data-srcset="img/process/bg.webp 1x, img/process/bg@2x.webp 2x" type="image/webp">
                        <source srcset="img/default.png" data-srcset="img/process/bg.jpg 1x, img/process/bg@2x.jpg 2x" type="image/jpeg">
                        <img class="lazyload" src="img/default.png" data-srcset="img/process/bg.jpg 1x, img/process/bg@2x.jpg 2x" alt="img">
                    </picture>
                </div>
            </div>
            <div class="process__scroll fade-in">Проскрольте вправо <img class="lazyload" src="img/default.png" data-src="img/gif.gif" alt="img"></div>
            <div class="process__stages fade-in">
                <div class="process__labels">
                    <span class="process__label">Фундамент</span>
                    <span class="process__label">Стены 1 этажа</span>
                    <span class="process__label">Перекрытие 1 этажа</span>
                    <span class="process__label">Стены 2 этажа</span>
                    <span class="process__label">Стропильная система</span>
                    <span class="process__label">Кровля</span>
                    <span class="process__label">Отделка фасада</span>
                    <span class="process__label">Черновая отделка</span>
                    <span class="process__label">Инженерные системы</span>
                    <span class="process__label">Чистовая отделка</span>
                </div>
                <div class="process__items">
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
            <div class="process__form fade-in">
                <div class="form__content">
                    <h3 class="form__content-heading">Первый шаг к&nbsp;дому <br>начинается с&nbsp;проекта</h3>
                    <p class="form__content-text">Начните с&nbsp;архитектурного концепта. <br>Мы&nbsp;подготовим разбор участка, <br>планировку и&nbsp;сроки проектирования.</p>
                    <?php 
                    $form_id = "consult_row_2";
                    include('templates/components/form.php'); 
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>