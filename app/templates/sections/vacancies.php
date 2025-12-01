<?php
$vacancies = [
    [
        'label' => 'Ведущий архитектор',
        'desc' => '<p>Ждём талантливого архитектора для создания концепций премиальных резиденций площадью от&nbsp;300&nbsp;м&sup2;. Работа с&nbsp;состоятельными клиентами, индивидуальный подход к&nbsp;каждому проекту.</p>',
        'content' => '<p>Ключевые требования:</p><ul><li>Опыт в&nbsp;премиальном сегменте от&nbsp;7&nbsp;лет. </li><li>Портфолио реализованных проектов от&nbsp;40&nbsp;млн&nbsp;₽. </li><li>Знание международных стандартов качества. </li><li>Опыт работы с&nbsp;VIP-клиентами. </li></ul>',
        'price' => '&nbsp;350&nbsp;000&nbsp;',
    ],
    [
        'label' => 'Менеджер по&nbsp;продажам премиум домов',
        'desc' => '<p>Ищем профессионала для работы с&nbsp;состоятельными клиентами. Продажа резиденций стоимостью от&nbsp;40&nbsp;млн.&nbsp;₽, консультирование по&nbsp;инвестиционным решениям.</p>',
        'content' => '<p>Ключевые требования:</p><ul><li>Опыт в&nbsp;премиальном сегменте от&nbsp;7&nbsp;лет. </li><li>Портфолио реализованных проектов от&nbsp;40&nbsp;млн&nbsp;₽. </li><li>Знание международных стандартов качества. </li><li>Опыт работы с&nbsp;VIP-клиентами. </li></ul>',
        'price' => '&nbsp;350&nbsp;000&nbsp;',
    ],
    [
        'label' => 'Проектный менеджер',
        'desc' => '<p>Координация всех этапов строительства премиальных резиденций: от&nbsp;проектирования до&nbsp;сдачи объекта. Управление бюджетами от&nbsp;40&nbsp;млн.&nbsp;₽.</p>',
        'content' => '<p>Ключевые требования:</p><ul><li>Опыт в&nbsp;премиальном сегменте от&nbsp;7&nbsp;лет. </li><li>Портфолио реализованных проектов от&nbsp;40&nbsp;млн&nbsp;₽. </li><li>Знание международных стандартов качества. </li><li>Опыт работы с&nbsp;VIP-клиентами. </li></ul>',
        'price' => '&nbsp;350&nbsp;000&nbsp;',
    ],
];
?>

<!-- vacancies -->
<section class="vacancies">
    <div class="container">
        <div class="vacancies__content">
            <div class="head-content fade-in-up">
                <h2 class="title title--h2">Открытые вакансии</h2>
            </div>
            <div class="vacancies__grid">
                <?php foreach ($vacancies as $vacancy): ?>
                    <div class="vacancies__item fade-in-up">
                        <div class="vacancies__label"><?= $vacancy['label'] ?></div>
                        <div class="vacancies__info">
                            <div class="vacancies__descr">
                                <?= $vacancy['desc'] ?>
                            </div>
                            <div class="vacancies__details">
                                <div class="vacancies__details-inner">
                                    <?= $vacancy['content'] ?>
                                    <div class="vacancies__details-prices">от<span class="vacancies__details-price"><?= $vacancy['price'] ?></span>₽</div>
                                    <button class="button button--primary">
                                        <span class="button__text">Откликнуться</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div> 
        </div>     
    </div>
</section>
