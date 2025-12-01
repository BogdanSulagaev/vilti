<!-- articles -->
<section class="articles">
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
                    <span itemprop="name">Журнал</span>
                </span>
                <meta itemprop="position" content="2" />
            </li>
        </ol>
    </nav>
    <div class="head-content fade-in-up">
      <h1 class="title title--h2">Журнал</h1>
      <p class="subtitle">Мы&nbsp;одни из&nbsp;тех, кто формирует повестку премиального рынка загородной недвижимости. Руководители компании регулярно <br>выступают с&nbsp;экспертными комментариями в&nbsp;ведущих деловых изданиях, участвуют в&nbsp;профильных конференциях и&nbsp;исследованиях рынка.</p>
    </div>
    <div class="articles__content">
      <div class="categories fade-in-up">
        <div class="categories__scroll fade-in">Выберите раздел <img class="lazyload" src="img/default.png" data-src="img/gif.gif" alt="img"></div>
        <div class="categories__list">
          <button class="categories__item categories__item--active" type="button">Все посты</button>
          <button class="categories__item" type="button">Интервью</button>
          <button class="categories__item" type="button">Аналитика</button>
          <button class="categories__item" type="button">Инвестиции</button>
        </div>
      </div>
      <div class="articles__list">

        <?php
        $article_id = 1;
        include('templates/components/article-card.php'); 

        $article_id = 2;
        include('templates/components/article-card.php'); 

        $article_id = 3;
        include('templates/components/article-card.php'); 

        $article_id = 4;
        include('templates/components/article-card.php'); 

        $article_id = 5;
        include('templates/components/article-card.php'); 

        $article_id = 6;
        include('templates/components/article-card.php'); 

        $article_id = 7;
        include('templates/components/article-card.php'); 

        $article_id = 8;
        include('templates/components/article-card.php'); 

        $article_id = 9;
        include('templates/components/article-card.php'); 

        $article_id = 10;
        include('templates/components/article-card.php'); 

        $article_id = 11;
        include('templates/components/article-card.php'); 

        $article_id = 12;
        include('templates/components/article-card.php'); 

        $article_id = 13;
        include('templates/components/article-card.php'); 

        $article_id = 14;
        include('templates/components/article-card.php'); 

        $article_id = 15;
        include('templates/components/article-card.php'); 

        $article_id = 16;
        include('templates/components/article-card.php'); 
        ?>

      </div>
      <nav class="pagination fade-in">
        <ul class="pagination__list">
          <li class="pagination__item pagination__item--active"><button type="button">1</button></li>
          <li class="pagination__item"><button type="button">2</button></li>
          <li class="pagination__item"><button type="button">3</button></li>
          <li class="pagination__item"><button type="button">4</button></li>
          <li class="pagination__item"><button type="button">5</button></li>
          <li class="pagination__item"><button type="button">6</button></li>
          <li class="pagination__item"><button type="button">...</button></li>
          <li class="pagination__item"><button type="button">10</button></li>
        </ul>
      </nav>
    </div>
  </div>
</section>