<!-- media -->
<section class="media">
  <div class="container">
    <div class="media__content">
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
                      <span itemprop="name">Медиа и экспертиза</span>
                  </span>
                  <meta itemprop="position" content="2" />
              </li>
          </ol>
      </nav>
      <div class="head-content fade-in-up">
        <h1 class="title title--h2">Медиа <br>и&nbsp;экспертиза</h1>
        <div class="subtitle">Профессиональное видеопроизводство и&nbsp;честный рассказ о&nbsp;процессах. Каждый материал&nbsp;&mdash; это инвестиция в&nbsp;доверие и&nbsp;демонстрация нашей открытости перед клиентами.</div>
      </div>
      <div class="media__video fade-in">
        <video muted autoplay loop playsinline class="lazy-video" poster="img/media/poster.jpg">
          <source data-src="img/media/video.mp4" type="video/mp4">
        </video>
      </div>
    </div>
    <div class="media__main">
      <div class="categories fade-in-up">
        <div class="categories__scroll fade-in">Выберите раздел <img class="lazyload" src="img/default.png" data-src="img/gif.gif" alt="img"></div>
        <div class="categories__list">
          <button class="categories__item categories__item--active" type="button">Все видео</button>
          <button class="categories__item" type="button">Интервью</button>
          <button class="categories__item" type="button">За кадром</button>
          <button class="categories__item" type="button">Отзывы</button>
          <button class="categories__item" type="button">Строительство</button>
          <button class="categories__item" type="button">Резиденции</button>
        </div>
      </div>
      <div class="media__articles">
        <?php
          $articlevideo_id = 1;
          include('templates/components/article-video.php'); 
        ?>
        <div class="media__articles-row">
          <?php
            $article_id = 9;
            include('templates/components/article-card.php'); 

            $article_id = 10;
            include('templates/components/article-card.php'); 

            $article_id = 11;
            include('templates/components/article-card.php'); 

            $article_id = 12;
            include('templates/components/article-card.php'); 
          ?>
        </div>
        <?php
          $articlevideo_id = 2;
          include('templates/components/article-video.php'); 
        ?>

        <div class="media__articles-row">
          <?php
            $article_id = 1;
            include('templates/components/article-card.php'); 

            $article_id = 3;
            include('templates/components/article-card.php'); 

            $article_id = 4;
            include('templates/components/article-card.php'); 

            $article_id = 5;
            include('templates/components/article-card.php'); 
          ?>
        </div>

        <?php
          $articlevideo_id = 3;
          include('templates/components/article-video.php'); 
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