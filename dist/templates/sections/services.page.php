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
        <div class="faq__content">
            <div class="head-content fade-in-up">
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
            <?php 
                $helpform_id = 2;
                include('templates/sections/help-form.php');
            ?>
        </div>
    </div>
</section>