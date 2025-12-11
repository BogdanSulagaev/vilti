 <!-- about-services -->
<section class="about-services">
    <div class="container">
        <div class="about-services__content">
            <div class="head-content fade-in-up">
                <h2 class="title title--h2">Опыт и&nbsp;новая культура строительства</h2>
            </div>
            <div class="about-services__wrapper">
	            <div class="about-services__grid">
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
	            <div class="about-services__card fade-in">
	            	<div class="about-services__media">
	            		<video muted autoplay loop playsinline class="lazy-video" poster="img/about-services/poster.jpg">
	            			<source data-src="img/about-services/video.mp4" type="video/mp4">
            			</video>
	            	</div>
	            	<div class="about-services__descr">
	            		<p>Конструктив просчитан под десятилетия эксплуатации, <br>фасады и&nbsp;планировки соответствуют требованиям закрытых сообществ</p>
	            	</div>
	            	<a href="./project.php" class="link">Подробнее<span class="link__icon"></span></a>
	            </div>
           	</div>
        </div>
    </div>
</section>