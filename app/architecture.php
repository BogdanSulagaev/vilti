<?php include('templates/header.php') ?>

<?php include('templates/sections/architecture-hero.php') ?>  

<?php include('templates/sections/architecture-process.php') ?>

<?php 
    $title_pricing = 'Прозрачная стоимость проектирования';
    $active_card = 2;
    include('templates/sections/pricing.php');
?>

<?php
    $promoform_id = 4;
    include('templates/sections/promo-form.php'); 
?>

<?php include('templates/sections/architecture-design.php') ?>

<?php include('templates/sections/architecture-approach.php') ?>

<!-- projects -->
    <section class="projects residences">
        <div class="container">
            <div class="head-content fade-in-up">
                <h2 class="title title--h2">Премиальные архитектурные <br>проекты резиденции</h2>
                <div class="subtitle">
                    <p>Используем BIM-модели, VR-презентации и&nbsp;онлайн-систему контроля. <br>Клиент видит каждый узел, стоимость материалов и&nbsp;сроки ещё до&nbsp;начала стройки.</p>
                </div>
            </div>
            <div class="residences__main">
                <div class="residences__grid">
                    <?php
                    $card_id = 1;
                    include('templates/components/residence-card.php'); 

                    $card_id = 2;
                    include('templates/components/residence-card.php'); 

                    $card_id = 3;
                    include('templates/components/residence-card.php'); 

                    $card_id = 4;
                    include('templates/components/residence-card.php'); 
                    ?>
                </div>
            </div>
        </div>
    </section>

<?php
    $promoform_id = 4;
    include('templates/sections/promo-form.php'); 
?>

<?php include('templates/footer.php') ?>  