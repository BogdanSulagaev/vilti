<?php
$services = [
    [
        'name' => 'Архитектурное проектирование',
        'desc' => 'Уникальные планировки, отражающие образ жизни семьи',
        'link' => '#',
    ],
    [
        'name' => 'Строительство под ключ',
        'desc' => 'Монолит, инженерия, отделка&nbsp;&mdash; от&nbsp;фундамента до&nbsp;готового дома',
        'link' => '#',
    ],
    [
        'name' => 'Интерьеры и&nbsp;ландшафт',
        'desc' => 'Дизайн пространства, садов и&nbsp;террас в&nbsp;единой эстетике',
        'link' => '#',
    ],
    [
        'name' => 'Технологии и&nbsp;комфорт',
        'desc' => 'Умный дом, климат, безопасность&nbsp;&mdash; всё для спокойствия владельца',
        'link' => '#',
    ],
];
?>

<section class="services">
    <div class="container">
        <div class="services__content">
            <div class="head-content fade-in-up">
                <h2 class="title title--h2">Услуги</h2>
            </div>
            <div class="services__grid">
                <?php foreach ($services as $service): ?>
                    <div class="services__item fade-in-up">
                        <div class="service__heading">
                            <div class="services__name"><?= $service['name'] ?></div>
                            <div class="service__icon"></div>
                        </div>
                        <div class="services__desc"><?= $service['desc'] ?></div>
                        <a href="<?= $service['link'] ?>" class="services__link"></a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>