<!-- residences -->
<section class="residences">
    <div class="container">
        <div class="head-content fade-in-up">
            <h2 class="section__title title--h2">Вы&nbsp;в&nbsp;бутике резиденций. Выбирайте</h2>
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

            <?php
            $featured_id = 1;
            include('templates/components/residence-featured.php'); 
            ?>

            <div class="residences__quote fade-in">
                <span class="residences__quote-label">analytics</span>
                <div class="residences__quote-text"><p>&laquo;В&nbsp;2024 году средний бюджет покупки Premium-коттеджей в&nbsp;Подмосковье вырос на&nbsp;25% и&nbsp;достиг ~178 млн&nbsp;₽ (NF&nbsp;Group). <br><strong>При этом объём предложений продолжает сокращаться&raquo;.</strong></p></div>
            </div>

            <div class="residences__grid">
                <?php
                $card_id = 3;
                include('templates/components/residence-card.php'); 

                $card_id = 4;
                include('templates/components/residence-card.php'); 

                $card_id = 5;
                include('templates/components/residence-card.php'); 

                $card_id = 6;
                include('templates/components/residence-card.php'); 
                ?>
            </div>

            <div class="residences-advantages">
                <?php 
                $advantage_id = 1;
                include('templates/components/residence-advantage.php'); 

                $advantage_id = 2;
                include('templates/components/residence-advantage.php'); 

                $advantage_id = 3;
                include('templates/components/residence-advantage.php'); 
                ?>
            </div>

            <?php
            $featured_id = 2;
            include('templates/components/residence-featured.php'); 
            ?>

            <div class="residences__button fade-in">
                <button class="button button--outline">Смотреть все проекты</button>
            </div>
        </div>
    </div>
</section>