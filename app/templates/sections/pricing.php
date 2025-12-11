<!-- pricing -->
<section class="pricing">
    <div class="container">
        <div class="pricing__content">
            <div class="head-content fade-in-up">
                <h2 class="title title--h2"><?php echo $title_pricing; ?></h2>
            </div>
            <div class="pricing__grid">
                <div class="pricing__item pricing__item--1 <?= ($active_card === 1 ? 'active' : '') ?>">
                    <div class="pricing__item-img">
                        <img class="lazyload" src="img/default.png" data-src="img/pricing/1.png" data-srcset="img/pricing/1.png 1x, img/pricing/1@2x.png 2x" alt="img">
                    </div>
                    <div class="pricing__item-content"> 
                        <div class="pricing__item-title">Эскизный проект</div>
                        <div class="pricing__item-text">Включает эскизный проект <br>и&nbsp;архитектурно-строительный проект</div>
                    </div>
                    <div class="pricing__item-price">от <span class="pricing__item-value">1 000</span> ₽/м<sup>2</sup></div>
                    <button class="button pricing__item-button" data-toggle="modal" data-target="#modal_consultation">Заказать проект</button>
                </div>
                <div class="pricing__item pricing__item--2 <?= ($active_card === 2 ? 'active' : '') ?>">
                    <div class="pricing__item-img">
                        <img class="lazyload" src="img/default.png" data-src="img/pricing/2.png" data-srcset="img/pricing/2.png 1x, img/pricing/2@2x.png 2x" alt="img">
                    </div>
                    <div class="pricing__item-content">
                        <div class="pricing__item-title">Рабочий проект</div>
                        <div class="pricing__item-text">В&nbsp;стадии проектирования входит: <br>АР, КЖ, КР</div>
                    </div>
                    <div class="pricing__item-price">от <span class="pricing__item-value">1 500</span> ₽/м<sup>2</sup></div>
                    <button class="button pricing__item-button" data-toggle="modal" data-target="#modal_consultation">Заказать проект</button>
                </div>
                <div class="pricing__item pricing__item--3 <?= ($active_card === 3 ? 'active' : '') ?>">
                    <div class="pricing__item-img">
                        <img class="lazyload" src="img/default.png" data-src="img/pricing/3.png" data-srcset="img/pricing/3.png 1x, img/pricing/3@2x.png 2x" alt="img">
                    </div>
                    <div class="pricing__item-content">
                        <div class="pricing__item-title">Дизайн-проект</div>
                        <div class="pricing__item-text">Визуализация: 3D-модели, <br>фото- и&nbsp;видеоматериалы</div>
                    </div>
                    <div class="pricing__item-price">от <span class="pricing__item-value">4 000</span> ₽/м<sup>2</sup></div>
                    <button class="button pricing__item-button" data-toggle="modal" data-target="#modal_consultation">Заказать проект</button>
                </div>
                <div class="pricing__item pricing__item--4 <?= ($active_card === 4 ? 'active' : '') ?>">
                    <div class="pricing__item-img">
                        <img class="lazyload" src="img/default.png" data-src="img/pricing/4.png" data-srcset="img/pricing/4.png 1x, img/pricing/4@2x.png 2x" alt="img">
                    </div>
                    <div class="pricing__item-content">
                        <div class="pricing__item-title">ЭОВК проект</div>
                        <div class="pricing__item-text">Проект с&nbsp;электрикой, отоплением, вентиляцией, канализацией</div>
                    </div>
                    <div class="pricing__item-price">от <span class="pricing__item-value">1 000</span> ₽/м<sup>2</sup></div>
                    <button class="button pricing__item-button" data-toggle="modal" data-target="#modal_consultation">Заказать проект</button>
                </div>
            </div>
        </div>  
    </div>
</section>