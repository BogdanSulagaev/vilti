<?php
$promoform = [
    1 => [
        "image" => "",
        "title" => "Расскажите о&nbsp;доме своей мечты",
        "subtitle" => "Первая встреча носит ознакомительный характер",
        "form-title" => "Мы&nbsp;подготовим индивидуальное предложение и&nbsp;пригласим на&nbsp;консультацию с&nbsp;архитектором и&nbsp;дизайнером",
        "form-subtitle" => "Обсудим концепцию и&nbsp;планировку, покажем этапы, сроки и&nbsp;бюджет",
        "form_id" => "consult_row_3",
        "icon" => "",
        "class" => "",
    ],
    2 => [
        "image" => "2",
        "title" => "Хотите получить смету проекта?",
        "subtitle" => "Консультация поможет определить масштаб задач",
        "form-title" => "Оставьте заявку, и&nbsp;мы&nbsp;подготовим <br>для вас индивидуальное предложение",
        "form-subtitle" => "Обсудим концепцию и&nbsp;планировку, покажем этапы, сроки и&nbsp;бюджет",
        "form_id" => "consult_row_3",
        "icon" => "",
        "class" => "",
    ],
    3 => [
        "image" => "3",
        "title" => "Хотите начать сотрудничество?",
        "subtitle" => "",
        "form-title" => "Оставьте заявку, и&nbsp;мы&nbsp;обсудим возможности партнерства и&nbsp;найдем оптимальный формат взаимодействия",
        "form-subtitle" => "Каждое предложение рассматриваем индивидуально",
        "form_id" => "consult_partners",
        "icon" => "2",
        "class" => "promo-form--partners",
    ],
    4 => [
        "image" => "3",
        "title" => "Первый шаг к дому <br>начинается с проекта",
        "subtitle" => "",
        "form-title" => "Оставьте заявку, и&nbsp;мы&nbsp;подготовим <br>для вас все материалы",
        "form-subtitle" => "Мы подготовим разбор участка, планировку и сроки проектирования",
        "form_id" => "consult_reviews",
        "icon" => "2",
        "class" => "promo-form--reviews",
    ],
];

$promoform = $promoform[$promoform_id]; ?>

<!-- promo-form -->
<section class="promo-form <?=$promoform['class']?>">
    <div class="container">
        <div class="promo-form__content fade-in">
            <div class="promo-form__main">
                <div class="promo-form__img">
                    <img class="lazyload" src="img/default.png" data-src="img/promo-form/mark<?=$promoform['icon']?>.svg" alt="img">
                </div>
                <h2 class="section__title title--h2"><?=$promoform['title']?></h2>
                <?php if ($promoform['subtitle']) { ?>
                    <p class="subtitle"><?=$promoform['subtitle']?></p>
                <?php } ?>
                <div class="promo-form__image fade-in-up">
                    <picture>
                        <source srcset="img/default.png" data-srcset="img/promo-form/bg<?=$promoform['image']?>.webp 1x, img/promo-form/bg<?=$promoform['image']?>@2x.webp 2x" type="image/webp">
                        <source srcset="img/default.png" data-srcset="img/promo-form/bg<?=$promoform['image']?>.jpg 1x, img/promo-form/bg<?=$promoform['image']?>@2x.jpg 2x" type="image/jpeg">
                        <img class="lazyload" src="img/default.png" data-srcset="img/promo-form/bg<?=$promoform['image']?>.jpg 1x, img/promo-form/bg<?=$promoform['image']?>@2x.jpg 2x" alt="img">
                    </picture>
                </div>
            </div>
            <div class="promo-form__form">
                <div class="form__content">
                    <h3 class="form__content-heading"><?=$promoform['form-title']?></h3>
                    <p class="form__content-text"><?=$promoform['form-subtitle']?></p>
                    <?php 
                    $form_id = $promoform['form_id'];
                    include('templates/components/form.php'); 
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>