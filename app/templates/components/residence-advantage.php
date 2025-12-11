<?php
$cards = [
    1 => [
        'class' => 'info-card--1',
        'icon'  => 'mark1.svg',
        'title' => 'Приватность под NDA',
        'text'  => '<p><strong>Проект сопровождается соглашением о&nbsp;неразглашении.</strong> Ваш&nbsp;дом не&nbsp;станет витриной для чужих глаз.</p>',
        'link'  => [
            'url' => '#',
            'text' => 'Юридическая прозрачность',
        ],
    ],
    2 => [
        'class' => 'info-card--2',
        'icon'  => 'mark2.svg',
        'title' => 'Гарантия до 50 лет',
        'text'  => '<p>Дом строится на&nbsp;поколение вперёд: монолитные конструкции с&nbsp;официальной гарантией до&nbsp;полувека.</p>',
        'link'  => [
            'url' => './guarantee.php',
            'text' => 'Подробнее о гарантии',
        ],
    ],
    3 => [
        'class' => 'info-card--3',
        'icon'  => 'mark3.svg',
        'title' => 'Консьерж-сервис',
        'text'  => '<p>Ваш личный куратор ведёт проект от&nbsp;первого чертежа до&nbsp;сдачи ключей. Конфиденциально, точно, без лишнего вашего участия.</p>',
        'link'  => null, 
    ],
];

$advantage_id = $arParams['advantage_id'] ?? ($advantage_id ?? null);

if (!isset($advantage_id, $cards[$advantage_id])) {
    echo "<!-- Преимущество с ID=$advantage_id не найдено -->";
    return;
}

$card = $cards[$advantage_id];
?>

<div class="info-card <?=$card['class']?> info-card--large fade-in-up">
    <div class="info-card__img">
        <img class="lazyload" src="img/default.png" data-src="img/residences/<?=$card['icon']?>" alt="icon">
    </div>

    <div class="info-card__title"><?=$card['title']?></div>
    <div class="info-card__text">
        <?=$card['text']?>
        <?php if (!empty($card['link'])): ?>
            <a href="<?=$card['link']['url']?>" class="link">
                <?=$card['link']['text']?> <span class="link__icon"></span>
            </a>
        <?php endif; ?>        
    </div>
</div>
