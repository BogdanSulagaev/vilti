<div id="modal_video" class="modal modal--video">
    <div class="modal__container">
        <button class="modal__close" type="button"></button>
        
        <div class="modal__inner">
            <iframe id="iframe_video" src="" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
    </div>
</div>
<div id="modal_consultation" class="modal">
    <div class="modal__container">
        <div class="modal__inner">
            <button class="modal__close" type="button"></button>
            <div class="modal__content">
                <div class="modal__title">Оставьте заявку!</div>
                <div class="modal__text">
                    <p>Через 15&nbsp;минут с&nbsp;вами свяжется наш менеджер и&nbsp;ответит на&nbsp;все вопросы!</p>
                </div>
                <?php 
                    $form_id = "consult_project";
                    include('templates/components/form.php');
                ?>
            </div>
            <div class="modal__bg"> 
                <picture>
                    <source srcset="img/modal/bg.webp 1x, img/modal/bg@2x.webp 2x" type="image/webp">
                    <source srcset="img/modal/bg.jpg 1x, img/modal/bg@2x.jpg 2x" type="image/jpeg">
                    <img class="lazyload" data-srcset="img/modal/bg.jpg 1x, img/modal/bg@2x.jpg 2x" alt="img">
                </picture>
            </div>
        </div>
    </div>
</div>
<div id="modal_discuss-project" class="modal">
    <div class="modal__container">
        <div class="modal__inner">
            <button class="modal__close" type="button"></button>
            <div class="modal__content">
                <div class="modal__title">Оставьте заявку!</div>
                <div class="modal__text">
                    <p>Мы&nbsp;подготовим индивидуальное предложение и&nbsp;пригласим на&nbsp;консультацию с&nbsp;архитектором и&nbsp;дизайнером. Обсудим концепцию и&nbsp;планировку, покажем этапы, сроки и&nbsp;бюджет.</p>
                </div>
                <?php 
                    $form_id = "consult_project";
                    include('templates/components/form.php');
                ?>
            </div>
            <div class="modal__bg"> 
                <picture>
                    <source srcset="img/modal/bg.webp 1x, img/modal/bg@2x.webp 2x" type="image/webp">
                    <source srcset="img/modal/bg.jpg 1x, img/modal/bg@2x.jpg 2x" type="image/jpeg">
                    <img class="lazyload" data-srcset="img/modal/bg.jpg 1x, img/modal/bg@2x.jpg 2x" alt="img">
                </picture>
            </div>
        </div>
    </div>
</div>