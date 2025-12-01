<?php
$helpform = [
    1 => [
        "title" => "Не знаете, какой выбрать дом?",
        "subtitle" => "Пройдите небольшой опрос — мы подскажем проекты под ваш стиль жизни",
        "button" => "Пройти опрос",
    ],
    2 => [
        "title" => "Не нашли своего вопроса?",
        "subtitle" => "Заполните форму, и мы ответим вам через 15 минут!",
        "button" => "Задать вопрос",
    ],
];

$helpform = $helpform[$helpform_id]; ?>

<!-- help-form -->
<div class="help-form fade-in">
    <div class="help-form__content">
        <div class="help-form__img">
            <img class="lazyload" src="img/default.png" data-src="img/help-form/mark.svg" alt="img">
        </div>
        <h2 class="section__title title--h2"><?=$helpform['title']?></h2>
        <p class="subtitle"><?=$helpform['subtitle']?></p>
        <button class="button button--primary"><span class="button__text"><?=$helpform['button']?></span></button>
    </div>
    <div class="help-form__image fade-in-up">
        <picture>
            <source srcset="img/default.png" data-srcset="img/help-form/bg.webp 1x, img/help-form/bg@2x.webp 2x" type="image/webp">
            <source srcset="img/default.png" data-srcset="img/help-form/bg.jpg 1x, img/help-form/bg@2x.jpg 2x" type="image/jpeg">
            <img class="lazyload" src="img/default.png" data-srcset="img/help-form/bg.jpg 1x, img/help-form/bg@2x.jpg 2x" alt="img">
        </picture>
    </div>
</div>