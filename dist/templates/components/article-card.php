<?php
$article = [
    1 => [
        "category" => "Интервью",
        "date" => "21 марта 2024",
        "title" => "Новая философия загородной жизни: как изменились запросы состоятельных покупателей",
        'image' => '1',
        'poster' => '',
        'video'  => '',
    ],
    2 => [
        "category" => "Аналитика рынка",
        "date" => "21 марта 2024",
        "title" => "Рост цен на элитную загородную недвижимость: +23% за год",
        'image' => '2',
        'poster' => '',
        'video'  => '',
    ],
    3 => [
        "category" => "Инвестиции",
        "date" => "21 марта 2024",
        "title" => "ESG-критерии в премиальном строительстве: тренд или необходимость",
        'image' => '3',
        'poster' => '',
        'video'  => '',
    ],
    4 => [
        "category" => "Аналитика рынка",
        "date" => "21 марта 2024",
        "title" => "Интервью: «Архитектура как философия семейных ценностей»",
        'image' => '4',
        'poster' => '',
        'video'  => '',
    ],
    5 => [
        "category" => "Инвестиции",
        "date" => "21 марта 2024",
        "title" => "Исследование: критерии выбора загородного дома в сегменте 400+ млн₽",
        'image' => '5',
        'poster' => '',
        'video'  => '',
    ],
    6 => [
        "category" => "Инвестиции",
        "date" => "21 марта 2024",
        "title" => "Лучшие планировки для модульного дома до 100 м²",
        'image' => '6',
        'poster' => '',
        'video'  => '',
    ],
    7 => [
        "category" => "Аналитика рынка",
        "date" => "21 марта 2024",
        "title" => "Сколько стоит построить модульный дом в 2025 году",
        'image' => '7',
        'poster' => '',
        'video'  => '',
    ],
    8 => [
        "category" => "Инвестиции",
        "date" => "21 марта 2024",
        "title" => "Экономим на строительстве: как не переплатить за модульный дом",
        'image' => '',
        'poster' => 'poster1',
        'video'  => 'video1',
    ],
    9 => [
        "category" => "Аналитика рынка",
        "date" => "21 марта 2024",
        "title" => "Срок службы модульного дома — мифы и реальность",
        'image' => '9',
        'poster' => '',
        'video'  => '',
    ],
    10 => [
        "category" => "Инвестиции",
        "date" => "21 марта 2024",
        "title" => "Технологии умного дома в premium-сегменте: безопасность превыше всего",
        'image' => '10',
        'poster' => '',
        'video'  => '',
    ],
    11 => [
        "category" => "Аналитика рынка",
        "date" => "21 марта 2024",
        "title" => "Как превратить модульный дом в дизайнерское пространство",
        'image' => '11',
        'poster' => '',
        'video'  => '',
    ],
    12 => [
        "category" => "Инвестиции",
        "date" => "21 марта 2024",
        "title" => "Интерьер модульной бани: уют, стиль и функциональность",
        'image' => '',
        'poster' => 'poster2',
        'video'  => 'video2',
    ],
    13 => [
        "category" => "Инвестиции",
        "date" => "21 марта 2024",
        "title" => "История клиента: как мы построили баню за 14 дней",
        'image' => '13',
        'poster' => '',
        'video'  => '',
    ],
    14 => [
        "category" => "Инвестиции",
        "date" => "21 марта 2024",
        "title" => "Обзор: модульный дом “под ключ” — что входит в комплектацию",
        'image' => '',
        'poster' => 'poster3',
        'video'  => 'video3',
    ],
    15 => [
        "category" => "Инвестиции",
        "date" => "21 марта 2024",
        "title" => "Модульный дом или каркасник: что выбрать?",
        'image' => '15',
        'poster' => '',
        'video'  => '',
    ],
    16 => [
        "category" => "Инвестиции",
        "date" => "21 марта 2024",
        "title" => "Как выбрать модульную баню: 5 параметров, которые важнее цены",
        'image' => '16',
        'poster' => '',
        'video'  => '',
    ],
];

$article = $article[$article_id]; ?>

<!-- article -->
<article class="article-card fade-in-up">
  <div class="article-card__image">
    <?php 
    $video = $article['video'] ?? false;
    if (empty($video)) { ?>

      <picture>
        <source srcset="img/default.png" data-srcset="img/article/<?=$article['image']?>.webp 1x, img/article/<?=$article['image']?>@2x.webp 2x" type="image/webp">
        <source srcset="img/default.png" data-srcset="img/article/<?=$article['image']?>.jpg 1x, img/article/<?=$article['image']?>@2x.jpg 2x" type="image/jpeg">
        <img class="lazyload" src="img/default.png" data-srcset="img/article/<?=$article['image']?>.jpg 1x, img/article/<?=$article['image']?>@2x.jpg 2x" alt="img">
      </picture>

    <?php } else { ?>

      <video muted autoplay loop playsinline class="lazy-video" poster="img/article/<?= $article['poster'] ?>.jpg">
          <source data-src="img/article/<?= $article['video'] ?>.mp4" type="video/mp4">
      </video>

  <?php } ?>

    <div class="article-card__category"><?=$article['category']?></div>
  </div>
  <div class="article-card__content">
    <div class="article-card__date"><?=$article['date']?></div>
    <div class="article-card__title"><?=$article['title']?></div>
    <a href="#" class="article-card__link"></a>
  </div>
</article>