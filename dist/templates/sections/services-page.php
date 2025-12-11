<!-- services -->
<section class="services services--page">
    <div class="container">
        <nav class="breadcrumbs fade-in" aria-label="Breadcrumb" role="navigation" itemscope itemtype="https://schema.org/BreadcrumbList">
            <ol class="breadcrumbs__list">
                <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a class="breadcrumbs__link" href="/" itemprop="item">
                        <span itemprop="name">Главная</span>
                    </a>
                    <meta itemprop="position" content="1" />
                </li>
                <li class="breadcrumbs__item breadcrumbs__item--current" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" aria-current="page">
                    <span class="breadcrumbs__link" itemprop="item">
                        <span itemprop="name">Услуги</span>
                    </span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </nav>
        <div class="services__content">
            <div class="head-content fade-in-up">
                <div class="services__content-mark"><img class="lazyload" src="img/default.png" data-src="img/services/mark.svg" alt="img"></div>
                <h1 class="title title--h2">Услуги</h1>
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

<?php
    $promoform_id = 1;
    include('templates/sections/promo-form.php'); 
?> 