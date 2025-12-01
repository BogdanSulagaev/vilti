<?php
$featured = [
    1 => [
        'poster' => 'poster1.webp',
        'video'  => 'video1.mp4',
        'tag'    => 'Современный дом и гармония с природой',
        'title'  => 'Вилла Бруно',
    ],
    2 => [
        'poster' => 'poster2.webp',
        'video'  => 'video2.mp4',
        'tag'    => 'Дом – точка притяжения для всей семьи',
        'title'  => 'Вилла Лампеджи',
    ],
];

if (isset($featured_id) && isset($featured[$featured_id])) {
    $item = $featured[$featured_id];
    ?>
    <div class="residence-featured fade-in">
        <div class="residence-featured__image">
            <video muted autoplay loop playsinline class="lazy-video" poster="img/residences/<?= $item['poster'] ?>">
                <source data-src="img/residences/<?= $item['video'] ?>" type="video/mp4">
            </video>
        </div>
        <div class="residence-featured__overlay"></div>
        <div class="residence-featured__content text-light">
            <span class="residence-featured__tag"><?= $item['tag'] ?></span>
            <h3 class="residence-featured__title title title--h2"><?= $item['title'] ?></h3>
        </div>
    </div>
    <?php
}
