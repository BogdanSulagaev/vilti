<?php
$services = [
    1 => [
        'name' => 'Архитектурное проектирование',
        'desc' => 'Уникальные планировки, отражающие образ жизни семьи',
        'link' => './architecture.php',
    ],
    2 => [
        'name' => 'Строительство под ключ',
        'desc' => 'Монолит, инженерия, отделка&nbsp;&mdash; от&nbsp;фундамента до&nbsp;готового дома',
        'link' => './turnkey-homes.php',
    ],
    3 => [
        'name' => 'Интерьеры и&nbsp;ландшафт',
        'desc' => 'Дизайн пространства, садов и&nbsp;террас в&nbsp;единой эстетике',
        'link' => './interior.php',
    ],
    4 => [
        'name' => 'Технологии и&nbsp;комфорт',
        'desc' => 'Умный дом, климат, безопасность&nbsp;&mdash; всё для спокойствия владельца',
        'link' => './engineering.php',
    ],
];
$services = $services[$services_id]; ?>

<div class="services-item fade-in-up">
    <div class="services-item__heading">
        <div class="services-item__name"><?=$services['name'] ?></div>
        <div class="services-item__icon"></div>
    </div>
    <div class="services-item__desc"><?=$services['desc'] ?></div>
    <a href="<?=$services['link'] ?>" class="services-item__link"></a>
</div>