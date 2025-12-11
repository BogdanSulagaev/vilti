<?php
$expert = [
    1 => [
        "image" => '1',
        "name" => 'Алия',
        "title" => 'История дома глазами архитектора',
        "text" => '
            <p>Современная интерпретация тосканской виллы Кардуччи: строгие фасады, натуральный камень и&nbsp;дерево, высокие потолки.</p>
            <p>Дом органично вписывается в&nbsp;природный ландшафт и&nbsp;рассчитан на&nbsp;круглогодичное проживание семьи. Классическая элегантность эпохи была переосмыслена в&nbsp;современном контексте: строгие линии фасадов, залитые светом пространства и&nbsp;гармония пропорций, благородство камня и&nbsp;тёплого дерева.</p>
            <p>Этот дом стал для меня возможностью показать, что классика может звучать современно.</p>',
        "links" => '
            <a href="#" class="link" data-toggle="modal" data-target="#modal_video" data-src="img/hero/video.mp4">Рецензия куратора проекта <span class="link__icon"></span></a>
            <a href="#" class="link" data-toggle="modal" data-target="#modal_video" data-src="img/hero/video.mp4">Комментарий проектировщика <span class="link__icon"></span></a>
            <a href="#" class="link" data-toggle="modal" data-target="#modal_video" data-src="img/hero/video.mp4">Оценка подрядчика <span class="link__icon"></span></a>',
    ],
    2 => [
        "image" => '2',
        "name" => 'Юрий',
        "title" => 'Наш подход',
        "text" => '
            <p>Используем материалы с&nbsp;увеличенным сроком службы, продумываем скрытые маршруты коммуникаций и&nbsp;интегрируем сервисные зоны. Эксплуатация дома превращается в&nbsp;предсказуемый процесс, а&nbsp;не&nbsp;в&nbsp;череду сложных вмешательств.</p>
            <ul>
                <li>Использование материалов с&nbsp;увеличенным сроком службы</li>
                <li>Скрытая прокладка без нарушения архитектуры</li>
                <li>Сервисные зоны для обслуживания без вскрытия отделки</li>
            </ul>',
        "links" => '<a href="#" class="link" data-toggle="modal" data-target="#modal_video" data-src="img/hero/video.mp4">Комментарий инженера <span class="link__icon"></span></a>',
    ],
];

$expert = $expert[$expert_id]; ?>

<!-- expert -->
<section class="expert">
    <div class="container">
        <div class="expert__inner fade-in">
            <div class="expert__col">
                <div class="expert__image">
                    <picture>
                        <source srcset="img/default.png" data-srcset="img/expert/<?=$expert['image']?>.webp 1x, img/expert/<?=$expert['image']?>@2x.webp 2x" type="image/webp">
                        <source srcset="img/default.png" data-srcset="img/expert/<?=$expert['image']?>.jpg 1x, img/expert/<?=$expert['image']?>@2x.jpg 2x" type="image/jpeg">
                        <img class="lazyload" src="img/default.png" data-srcset="img/expert/<?=$expert['image']?>.jpg 1x, img/expert/<?=$expert['image']?>@2x.jpg 2x" alt="img">
                    </picture>
                </div>
                <div class="expert__mark"><img class="lazyload" src="img/default.png" data-src="img/expert/mark.svg" alt="img"></div>
                <button class="expert__play" data-toggle="modal" data-target="#modal_video" data-src="img/hero/video.mp4"><img class="lazyload" src="img/default.png" data-src="img/icons/play-color.svg" alt="img"></button>
                <div class="expert__name"><?=$expert['name']?></div>
            </div>
            <div class="expert__content">
                <h2 class="expert__title section__title title--h2"><?=$expert['title']?></h2>
                <div class="expert__text"><?=$expert['text']?></div>
                <button class="button button--outline">Смотреть полностью</button>
                <div class="expert__links"><?=$expert['links']?></div>
            </div>
        </div>
    </div>
</section>


