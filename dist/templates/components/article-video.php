<?php
$articlevideo = [
    1 => [
        "label" => "Премьера",
        "date" => "15 августа 2025",
        "views" => "1 247 просмотров",
        "title" => "Философия создания семейных резиденций",
        "text" => "Откровенный разговор с основателем компании о том, как рождается концепция дома, который станет наследием семьи. От первого эскиза до финальных штрихов — весь путь создания премиальной резиденции площадью 800 м².",
        'video' => 'video1',
        'poster' => 'poster4',
    ],
    2 => [
        "label" => "Премьера",
        "date" => "24 июля 2025",
        "views" => "1 960 просмотров",
        "title" => "Архитектура — это застывшая музыка семьи",
        "text" => "Главный архитектор о том, как пространство отражает характер и ценности заказчика.",
        'video' => 'video1',
        'poster' => 'poster5',
    ],
    3 => [
        "label" => "Премьера",
        "date" => "6 мая 2025",
        "views" => "2 156 просмотров",
        "title" => "Резиденция «Северный парк»: 365 дней строительства за 12 минут",
        "text" => "Таймлапс возведения дома площадью 650 м² от первого колышка до сдачи ключей.",
        'video' => 'video1',
        'poster' => 'poster6',
    ],
];

$articlevideo = $articlevideo[$articlevideo_id]; ?>

<!-- article -->
<article class="article-video fade-in-up">
    <div class="article-video__info">
        <div class="article-video__label"><?=$articlevideo['label']?></div>
        <div class="article-video__date"><?=$articlevideo['date']?></div>
        <div class="article-video__views"><?=$articlevideo['views']?></div>
    </div>
    <div class="article-video__video">
        <img class="lazyload article-video-poster" src="img/default.png" data-src="img/article/<?= $articlevideo['poster'] ?>.jpg" alt="img">
        <video muted loop playsinline class="article-video-lazy">
            <source data-src="img/article/<?= $articlevideo['video'] ?>.mp4" type="video/mp4">
        </video>
        <button class="button button--play"><img class="lazyload" src="img/default.png" data-src="img/icons/play.svg" alt="img"></button>
    </div>
    <div class="article-video__content fade-in-up">
        <div class="article-video__title"><?=$articlevideo['title']?></div>
        <div class="article-video__text"><?=$articlevideo['text']?></div>
        <a href="#" class="button button--outline">Смотреть полностью</a>
    </div>
</article>