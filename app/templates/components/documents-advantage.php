<?php
$advantage = [
    1 => [
        'class' => 'documents-advantages__item--1',
        'icon'  => 'mark1.svg',
        'title' => 'Юридическая чистота',
        'text'  => '<p>Все документы проверены ведущими юридическими компаниями и&nbsp;соответствуют требованиям закона</p>',
    ],
    2 => [
        'class' => 'documents-advantages__item--2',
        'icon'  => 'mark2.svg',
        'title' => 'Страховая защита',
        'text'  => '<p>Полное страхование гражданской ответственности и&nbsp;профессиональной деятельности</p>',
    ],
    3 => [
        'class' => 'documents-advantages__item--3',
        'icon'  => 'mark3.svg',
        'title' => 'Лицензии и сертификаты',
        'text'  => '<p>Все необходимые разрешения для работы в&nbsp;сфере строительства и&nbsp;соответствие международным стандартам</p>',
    ],
];

$advantage_id = $arParams['advantage_id'] ?? ($advantage_id ?? null);

if (!isset($advantage_id, $advantage[$advantage_id])) {
    echo "<!-- Преимущество с ID=$advantage_id не найдено -->";
    return;
}

$advantage = $advantage[$advantage_id];
?>

<div class="documents-advantages__item <?=$advantage['class']?> fade-in-up">
    <div class="documents-advantages__img">
        <img class="lazyload"
             src="img/default.png"
             data-src="img/documents/<?=$advantage['icon']?>"
             alt="icon">
    </div>

    <div class="documents-advantages__title"><?=$advantage['title']?></div>
    <div class="documents-advantages__text"><?=$advantage['text']?></div>
</div>
