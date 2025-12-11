<!-- services -->
<section class="services">
    <div class="container">
        <div class="services__content">
            <div class="head-content fade-in-up">
                <h2 class="title title--h2">Услуги</h2>
            </div>
            <div class="services__grid">
                <?php
                    $services_id = 1;
                    include('templates/components/services-item.php'); 

                    $services_id = 2;
                    include('templates/components/services-item.php'); 

                    $services_id = 3;
                    include('templates/components/services-item.php'); 

                    $services_id = 4;
                    include('templates/components/services-item.php'); 
                ?>
            </div>
        </div>
    </div>
</section>