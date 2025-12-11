<!-- faq -->
<section class="faq">
    <div class="container">
        <div class="faq__content">
            <div class="head-content fade-in-up">
                <h2 class="title title--h2">Частые вопросы</h2>
            </div>

            <div class="faq__grid">
                <?php
                    $faq_id = 1;
                    include('templates/components/faq-item.php'); 

                    $faq_id = 2;
                    include('templates/components/faq-item.php'); 

                    $faq_id = 3;
                    include('templates/components/faq-item.php'); 

                    $faq_id = 4;
                    include('templates/components/faq-item.php'); 

                    $faq_id = 5;
                    include('templates/components/faq-item.php'); 

                    $faq_id = 6;
                    include('templates/components/faq-item.php'); 

                    $faq_id = 7;
                    include('templates/components/faq-item.php'); 

                    $faq_id = 8;
                    include('templates/components/faq-item.php'); 

                    $faq_id = 9;
                    include('templates/components/faq-item.php'); 
                    ?>
            </div>

            <div class="faq__button fade-in">
                <button class="button button--outline">Показать все вопросы</button>
            </div>
        </div>
    </div>
</section>