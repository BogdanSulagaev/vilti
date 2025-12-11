<?php include('templates/header.php') ?>

	<?php include('templates/sections/project-hero.php') ?> 

	<?php include('templates/sections/project-gallery.php') ?>

    <?php include('templates/sections/project-plan.php') ?>

    <?php include('templates/sections/project-specifications.php') ?>

    <?php include('templates/sections/project-gallerymini.php') ?>

	<?php include('templates/sections/project-process.php') ?>

    <?php include('templates/sections/project-moodboard.php') ?>  

    <?php include('templates/sections/project-calc.php') ?>  
		
	<?php 
    $title = 'Строим дом для тех, кто&nbsp;выбирает <br>камерность и&nbsp;статус. В&nbsp;лучших локациях';
    include('templates/sections/residence-locations.php') ?>


	<!-- projects -->
    <section class="projects residences">
        <div class="container">
            <div class="head-content fade-in-up">
                <h2 class="section__title title--h2">Другие дома, которые можно построить в&nbsp;Agalarov Estate</h2>
            </div>
            <div class="residences__main">
                <div class="residences__grid">
                    <?php
                    $card_id = 1;
                    include('templates/components/residence-card.php'); 

                    $card_id = 2;
                    include('templates/components/residence-card.php'); 
                    ?>
                </div>
            </div>
        </div>
    </section>

    <?php include('templates/sections/project-advantages.php') ?>

	<?php 
	$expert_id = 1;
	include('templates/sections/expert.php') ?>

	<?php
	    $promoform_id = 1;
	    include('templates/sections/promo-form.php') ?>

    <!-- fixed-project-panel -->
    <div class="fixed-project-panel">
        <div class="fixed-project-panel__inner">
            <button class="fixed-project-panel__close"><img class="lazyload" src="img/default.png" data-src="img/icons/close.svg" alt="img"></button>
            <div class="fixed-project-panel__price">
                <div class="price">от <span>61&nbsp;000&nbsp;000</span> ₽</div>
                <div class="area">486 м²</div>
            </div>

            <?php 
                $form_id = "consult_project";
                include('templates/components/form.php'); 
            ?>

            <div class="fixed-project-panel__nav">
                <span class="nav-title">быстрая навигация</span>

                <div class="nav-links">
                    <a href="#project-moodboard" class="nav-link">Описание</a>
                    <a href="#project-plan" class="nav-link">Планировка</a>
                    <a href="#project-process" class="nav-link">Сроки</a>
                    <a href="#project-calc" class="nav-link">Калькулятор</a>
                </div>
            </div>
            <button class="fixed-project-panel__button" data-toggle="modal" data-target="#modal_discuss-project">Обсудить похожий проект</button>
        </div>
    </div>

<?php include('templates/footer.php') ?>  