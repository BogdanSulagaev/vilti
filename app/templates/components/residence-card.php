<?php
$cards = [
    1 => [
        'title' => 'Карлотта',
        'price' => 'от 61 000 000 ₽',
        'area' => '364 м<sup>2</sup>',
        'size' => '17.5 x 23 м',
        'details' => '<ul><li>Плоская крыша</li><li>8 комнат</li><li>Бассейн</li><li>Гараж (Два авто)</li></ul>',
        'image' => '1',
        'poster' => '',
        'video'  => '',
    ],
    2 => [
        'title' => 'Медичи',
        'price' => 'от 48 000 000 ₽',
        'area' => '364 м<sup>2</sup>',
        'size' => '17.5 x 23 м',
        'details' => '<ul><li>Плоская крыша</li><li>8 комнат</li><li>Бассейн</li><li>Гараж (Два авто)</li></ul>',
        'image' => '2',
        'poster' => '',
        'video'  => '',
    ],
    3 => [
        'title' => 'Контарини',
        'price' => 'от 48 000 000 ₽',
        'area' => '364 м<sup>2</sup>',
        'size' => '17.5 x 23 м',
        'details' => '<ul><li>Плоская крыша</li><li>8 комнат</li><li>Бассейн</li><li>Гараж (Два авто)</li></ul>',
        'image' => '3',
        'poster' => '',
        'video'  => '',
    ],
    4 => [
        'title' => 'Марчелло',
        'price' => 'от 48 000 000 ₽',
        'area' => '364 м<sup>2</sup>',
        'size' => '17.5 x 23 м',
        'details' => '<ul><li>Плоская крыша</li><li>8 комнат</li><li>Бассейн</li><li>Гараж (Два авто)</li></ul>',
        'image' => '4',
        'poster' => '',
        'video'  => '',
    ],
    5 => [
        'title' => 'Пуэро',
        'price' => 'от 48 000 000 ₽',
        'area' => '364 м<sup>2</sup>',
        'size' => '17.5 x 23 м',
        'details' => '<ul><li>Плоская крыша</li><li>8 комнат</li><li>Бассейн</li><li>Гараж (Два авто)</li></ul>',
        'image' => '5',
        'poster' => '',
        'video'  => '',
    ],
    6 => [
        'title' => 'Руфоло',
        'price' => 'от 48 000 000 ₽',
        'area' => '364 м<sup>2</sup>',
        'size' => '17.5 x 23 м',
        'details' => '<ul><li>Плоская крыша</li><li>8 комнат</li><li>Бассейн</li><li>Гараж (Два авто)</li></ul>',
        'image' => '6',
        'poster' => '',
        'video'  => '',
    ],
    7 => [
        'title' => 'Негрони',
        'price' => 'от 48 000 000 ₽',
        'area' => '364 м<sup>2</sup>',
        'size' => '17.5 x 23 м',
        'details' => '<ul><li>Плоская крыша</li><li>8 комнат</li><li>Бассейн</li><li>Гараж (Два авто)</li></ul>',
        'image' => '7',
        'poster' => '',
        'video'  => '',
    ],
    8 => [
        'title' => 'Факканони',
        'price' => 'от 48 000 000 ₽',
        'area' => '364 м<sup>2</sup>',
        'size' => '17.5 x 23 м',
        'details' => '<ul><li>Плоская крыша</li><li>8 комнат</li><li>Бассейн</li><li>Гараж (Два авто)</li></ul>',
        'image' => '8',
        'poster' => '',
        'video'  => '',
    ],
    9 => [
        'title' => 'Левада',
        'price' => 'от 48 000 000 ₽',
        'area' => '364 м<sup>2</sup>',
        'size' => '17.5 x 23 м',
        'details' => '<ul><li>Плоская крыша</li><li>8 комнат</li><li>Бассейн</li><li>Гараж (Два авто)</li></ul>',
        'image' => '',
        'poster' => 'poster3.webp',
        'video'  => 'video3.mp4',
    ],
    10 => [
        'title' => 'Корделлина',
        'price' => 'от 48 000 000 ₽',
        'area' => '364 м<sup>2</sup>',
        'size' => '17.5 x 23 м',
        'details' => '<ul><li>Плоская крыша</li><li>8 комнат</li><li>Бассейн</li><li>Гараж (Два авто)</li></ul>',
        'image' => '10',
        'poster' => '',
        'video'  => '',
    ],
];

$card_id = $arParams['card_id'] ?? ($card_id ?? null);

if (isset($card_id, $cards[$card_id])) {
    $card = $cards[$card_id];
    ?>
    <div class="residence-card fade-in-up">
        <div class="residence-card__image">
            <?php 
            $video = $card['video'] ?? false;
            if (empty($video)) { ?>
                <picture>
                    <source srcset="img/default.png" data-srcset="img/residences/<?=$card['image']?>.webp 1x, img/residences/<?=$card['image']?>@2x.webp 2x" type="image/webp">
                    <source srcset="img/default.png" data-srcset="img/residences/<?=$card['image']?>.jpg 1x, img/residences/<?=$card['image']?>@2x.jpg 2x" type="image/jpeg">
                    <img class="lazyload" src="img/default.png" data-srcset="img/residences/<?=$card['image']?>.jpg 1x, img/residences/<?=$card['image']?>@2x.jpg 2x" alt="<?=$card['title']?>">
                </picture>
            <?php } else { ?>
                <video muted autoplay loop playsinline class="lazy-video" poster="img/residences/<?= $card['poster'] ?>">
                    <source data-src="img/residences/<?= $card['video'] ?>" type="video/mp4">
                </video>
            <?php } ?>
        </div>

        <div class="residence-card__details">
            <?=$card['details']?>
        </div>
        <div class="residence-card__content">
            <div class="residence-card__info">
                <div class="residence-card__title"><?=$card['title']?></div>
                <div class="residence-card__price"><?=$card['price']?></div>
            </div>
            <div class="residence-card__info">
                <div class="residence-card__title"><span>Площадь: </span><?=$card['area']?></div>
                <div class="residence-card__price"><span>Размер: </span><?=$card['size']?></div>
            </div>
        </div>
        <div class="residence-card__btn">
            <button class="button button--primary">
                <span class="button__text">Задать вопрос</span>
                <img class="lazyload" src="img/default.png" data-src="img/icons/arrow-white.svg" alt="img">
            </button>
        </div>
        <a href="#" class="residence-card__link"></a>
    </div>
    <?php
}