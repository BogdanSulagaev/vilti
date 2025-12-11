<!-- project-plan -->
<section class="project-plan" id="project-plan">
    <div class="container">
        <div class="project-plan__wrapper">
            <div class="head-content fade-in-up">
                <h2 class="title title--h2">Планировка дома</h2>
                <div class="subtitle">
                    <p>План дома&nbsp;&mdash; это не&nbsp;чертёж, а&nbsp;отражение привычек семьи. Мы&nbsp;создаём маршруты движения, свет и&nbsp;воздух в&nbsp;нужных местах, чтобы жизнь текла естественно. Каждая линия на&nbsp;плане&nbsp;&mdash; шаг к&nbsp;тому, чтобы утро начиналось в&nbsp;тишине, а&nbsp;вечер заканчивался у&nbsp;панорамных окон.</p>
                </div>
            </div>
            <div class="categories fade-in-up">
                <div class="categories__scroll fade-in">Выберите этаж <img class="lazyload" src="img/default.png" data-src="img/gif.gif" alt="img"></div>
                <div class="categories__list">
                    <button class="categories__item categories__item--active" type="button">Первый этаж</button>
                    <button class="categories__item" type="button">Второй этаж</button>
                </div>
            </div>
            <div class="fade-in">
                <div class="project-plan__content is-active">
                    <div class="project-plan__content-image">
                        <picture>
                            <source srcset="img/default.png" data-srcset="img/project-plan/1.webp 1x, img/project-plan/1@2x.webp 2x" type="image/webp">
                            <source srcset="img/default.png" data-srcset="img/project-plan/1.jpg 1x, img/project-plan/1@2x.jpg 2x" type="image/jpeg">
                            <img class="lazyload" src="img/default.png" data-srcset="img/project-plan/1.jpg 1x, img/project-plan/1@2x.jpg 2x" alt="img">
                        </picture>
                    </div>
                </div>
                <div class="project-plan__content">
                    <div class="project-plan__content-image project-plan__content-image--blur">
                        <picture>
                            <source srcset="img/default.png" data-srcset="img/project-plan/2.webp 1x, img/project-plan/2@2x.webp 2x" type="image/webp">
                            <source srcset="img/default.png" data-srcset="img/project-plan/2.jpg 1x, img/project-plan/2@2x.jpg 2x" type="image/jpeg">
                            <img class="lazyload" src="img/default.png" data-srcset="img/project-plan/2.jpg 1x, img/project-plan/2@2x.jpg 2x" alt="img">
                        </picture>
                    </div>
                    <div class="project-plan__form">
                        <div class="form__content form__content--dark"> 
                            <h3 class="form__content-heading">Хотите подняться на&nbsp;второй&nbsp;этаж?</h3>
                            <p class="form__content-text">Обсудим концепцию и&nbsp;планировку, покажем этапы, сроки и&nbsp;бюджет</p>
                            <?php 
                            $form_id = "second_floor_project";
                            include('templates/components/form.php'); 
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>