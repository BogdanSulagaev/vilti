<!-- faq -->
<section class="faq faq--page">
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
                        <span itemprop="name">Часто задаваемые вопросы</span>
                    </span>
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </nav>
        <div class="faq__content">
            <div class="head-content fade-in-up">
                <h1 class="title title--h2">Часто задаваемые вопросы</h1>
            </div>
            <div class="categories fade-in-up">
                <div class="categories__scroll fade-in">Выберите раздел <img class="lazyload" src="img/default.png" data-src="img/gif.gif" alt="img"></div>
                <div class="categories__list">
                    <button class="categories__item categories__item--active" type="button">Общие</button>
                    <button class="categories__item" type="button">Процесс</button>
                    <button class="categories__item" type="button">Стоимость</button>
                    <button class="categories__item" type="button">Технические</button>
                    <button class="categories__item" type="button">Правовые</button>
                </div>
            </div>
            <div class="faq__panel is-active">
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
            </div>
            <div class="faq__panel">
                <div class="faq__grid">
                    <?php
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
                    ?>
                </div>
            </div>
            <div class="faq__panel">
                <div class="faq__grid">
                    <?php
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
                    ?>
                </div>
            </div>
            <div class="faq__panel">
                <div class="faq__grid">
                    <?php
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
                    ?>
                </div>
            </div>
            <div class="faq__panel">
                <div class="faq__grid">
                    <?php
                    $faq_id = 5;
                    include('templates/components/faq-item.php'); 

                    $faq_id = 6;
                    include('templates/components/faq-item.php'); 

                    $faq_id = 7;
                    include('templates/components/faq-item.php'); 

                    $faq_id = 8;
                    include('templates/components/faq-item.php'); 
                    ?>
                </div>
            </div>
            <?php 
                $helpform_id = 2;
                include('templates/sections/help-form.php');
            ?>
        </div>
    </div>
</section>