<?php
$award = [
    1 => [
        'image'  => '1',
        'title' => 'Премия <br>&laquo;Архитектурная точность&raquo;',
        'text'  => '<p><strong>Номинация:</strong> За&nbsp;совершенство проектных решений и&nbsp;инженерную эстетику.</p><p><strong>Организатор:</strong> Национальный совет организации АрхитекторыМосРуден.</p>',
        'quote' => '<p>&laquo;За&nbsp;безупречную интеграцию архитектурной формы и&nbsp;инженерного исполнения.&raquo;</p>',
    ],
    2 => [
        'image'  => '2',
        'title' => 'Премия <br>&laquo;Дом как наследие&raquo;',
        'text'  => '<p><strong>Номинация:</strong> За&nbsp;концепцию жилых домов, сочетающую эстетику и&nbsp;долговечность.</p><p><strong>Организатор:</strong> Журнал Modern Architecture &amp;&nbsp;Design Awards.</p>',
        'quote' => '<p>&laquo;За&nbsp;создание нового стандарта <br>частной архитектуры.&raquo;</p>',
    ],
    3 => [
        'image'  => '3',
        'title' => 'Премия <br>&laquo;Архитектура и&nbsp;среда&raquo;',
        'text'  => '<p><strong>Номинация:</strong> За&nbsp;экологичный подход и&nbsp;интеграцию домов в&nbsp;природный ландшафт.</p><p><strong>Организатор:</strong> Международная выставка EcoBuild Moscow.</p>',
        'quote' => '<p>&laquo;За&nbsp;умение создавать архитектуру, которая не&nbsp;нарушает природу, а&nbsp;становится её&nbsp;частью.&raquo;</p>',
    ],
    4 => [
        'image'  => '4',
        'title' => 'Премия <br>&laquo;Инженерная гарантия&raquo;',
        'text'  => '<p><strong>Номинация:</strong> За&nbsp;инновации в&nbsp;строительных технологиях и&nbsp;системах контроля качества.</p><p><strong>Организатор:</strong> Профессиональное сообщество девелоперов BuildTrust 2025.</p>',
        'quote' => '<p>&laquo;За&nbsp;внедрение прозрачной системы контроля и&nbsp;гарантий в&nbsp;премиум-домостроении.&raquo;</p>',
    ],
];

$award_id = $arParams['award_id'] ?? ($award_id ?? null);

if (!isset($award_id, $award[$award_id])) {
    echo "<!-- Преимущество с ID=$award_id не найдено -->";
    return;
}

$award = $award[$award_id];
?>

<div class="documents-awards__item fade-in-up">
    <div class="documents-awards__title"><?=$award['title']?></div>
    <div class="documents-awards__content">
        <div class="documents-awards__text">
            <?=$award['text']?>
        </div>
        <div class="documents-awards__quote">
            <?=$award['quote']?>
        </div>      
    </div>
    <div class="documents-awards__image">
        <picture>
            <source srcset="img/documents/<?=$award['image']?>.webp 1x, img/documents/<?=$award['image']?>@2x.webp 2x" type="image/webp">
            <source srcset="img/documents/<?=$award['image']?>.jpg 1x, img/documents/<?=$award['image']?>@2x.jpg 2x" type="image/jpeg">
            <img class="lazyload" data-srcset="img/documents/<?=$award['image']?>.jpg 1x, img/documents/<?=$award['image']?>@2x.jpg 2x" alt="img">
        </picture>
    </div> 
</div>
