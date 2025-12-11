<?php
$advantage = [
    1 => [
        'class' => 'info-card--1',
        'icon'  => 'mark1.svg',
        'title' => 'Юридическая чистота',
        'text'  => '<p>Все документы проверены ведущими юридическими компаниями и&nbsp;соответствуют требованиям закона</p>',
    ],
    2 => [
        'class' => 'info-card--2',
        'icon'  => 'mark2.svg',
        'title' => 'Страховая защита',
        'text'  => '<p>Полное страхование гражданской ответственности и&nbsp;профессиональной деятельности</p>',
    ],
    3 => [
        'class' => 'info-card--3',
        'icon'  => 'mark3.svg',
        'title' => 'Лицензии и сертификаты',
        'text'  => '<p>Все необходимые разрешения для работы в&nbsp;сфере строительства и&nbsp;соответствие международным стандартам</p>',
    ],
];

$advantage = $advantage[$advantage_id];
?>

<div class="info-card <?=$advantage['class']?> fade-in-up">
    <div class="info-card__img">
        <img class="lazyload" src="img/default.png" data-src="img/documents/<?=$advantage['icon']?>" alt="icon">
    </div>

    <div class="info-card__title"><?=$advantage['title']?></div>
    <div class="info-card__text"><?=$advantage['text']?></div>
</div>
