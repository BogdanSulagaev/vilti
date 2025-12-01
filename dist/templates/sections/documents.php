<!-- documents -->
<section class="documents">
    <div class="container">
        <div class="documents__content">
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
                            <span itemprop="name">Награды и документы</span>
                        </span>
                        <meta itemprop="position" content="2" />
                    </li>
                </ol>
            </nav>
            <div class="head-content fade-in-up">
                <h1 class="title title--h2">Награды и&nbsp;документы</h1>
                <div class="subtitle">Правовая надёжность, открытость, репутация — основа доверия</div>
            </div>
            <div class="documents__main">
                <div class="documents-awards">
                    <div class="documents-awards__grid">
                        <?php 
                            $award_id = 1;
                            include('templates/components/documents-award.php'); 

                            $award_id = 2;
                            include('templates/components/documents-award.php'); 

                            $award_id = 3;
                            include('templates/components/documents-award.php'); 

                            $award_id = 4;
                            include('templates/components/documents-award.php'); 
                        ?>
                    </div>
                    <div class="documents-awards__button fade-in-up">
                        <button class="button button--outline">Показать еще</button>
                    </div>
                </div>
                <div class="documents-advantages">
                    <?php 
                        $advantage_id = 1;
                        include('templates/components/documents-advantage.php'); 

                        $advantage_id = 2;
                        include('templates/components/documents-advantage.php'); 

                        $advantage_id = 3;
                        include('templates/components/documents-advantage.php'); 
                    ?>
                </div>  
                <div class="documents-list">
                    <div class="categories fade-in-up">
                        <div class="categories__scroll fade-in">Выберите раздел <img class="lazyload" src="img/default.png" data-src="img/gif.gif" alt="img"></div>
                        <div class="categories__list">
                            <button class="categories__item categories__item--active" type="button">Все документы</button>
                            <button class="categories__item" type="button">Лицензии</button>
                            <button class="categories__item" type="button">Корпоративные</button>
                            <button class="categories__item" type="button">Инвестиции</button>
                            <button class="categories__item" type="button">Технические</button>
                            <button class="categories__item" type="button">Правовые</button>
                        </div>
                    </div>
                    <div class="documents-list__grid fade-in-up">
                        <a href="#" target="_blank" class="documents-list__item">
                            <div class="documents-list__content">Лицензия на строительную деятельность.pdf</div>
                        </a>
                        <a href="#" target="_blank" class="documents-list__item">
                            <div class="documents-list__content">Сертификат ISO 9001:2015.pdf</div>
                        </a>
                        <a href="#" target="_blank" class="documents-list__item">
                            <div class="documents-list__content">Разрешение на проектную деятельность.pdf</div>
                        </a>
                        <a href="#" target="_blank" class="documents-list__item">
                            <div class="documents-list__content">СРО "Союз строительных компаний Москвы".pdf</div>
                        </a>
                        <a href="#" target="_blank" class="documents-list__item">
                            <div class="documents-list__content">Разрешение на выполнение инженерных изысканий.pdf</div>
                        </a>
                        <a href="#" target="_blank" class="documents-list__item">
                            <div class="documents-list__content">Выписка из ЕГРЮЛ.pdf</div>
                        </a>
                        <a href="#" target="_blank" class="documents-list__item">
                            <div class="documents-list__content">Паспорт промышленной безопасности предприятия.pdf</div>
                        </a>
                        <a href="#" target="_blank" class="documents-list__item">
                            <div class="documents-list__content">Политика конфиденциальности.pdf</div>
                        </a>
                        <a href="#" target="_blank" class="documents-list__item">
                            <div class="documents-list__content">Соглашение об обработке персональных данных.pdf</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>