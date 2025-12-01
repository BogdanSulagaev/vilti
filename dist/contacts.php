<?php include('templates/header.php') ?>

    <?php include('templates/sections/contacts.php') ?>

    <!-- projects -->
    <section class="projects residences">
        <div class="container">
            <div class="head-content fade-in-up">
                <h2 class="title title--h2">Посмотрите проекты наших домов</h2>
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
    $promoform_id = 1;
    include('templates/sections/promo-form.php'); 
    ?>

<?php include('templates/footer.php') ?>  