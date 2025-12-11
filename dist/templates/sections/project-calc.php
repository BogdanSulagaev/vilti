<section class="project-calc" id="project-calc">
	<div class="container">
		<div class="project-calc__wrapper section-bg">
			<div class="project-calc__content">
				<div class="project-calc__mark"><img class="lazyload" src="img/default.png" data-src="img/project-calc/mark.svg" alt="img"></div>
				<div class="head-content">
					<h2 class="section-title title--h2 title--mobile">Ориентировочный расчет&nbsp;стоимости</h2>
				</div>
				<div class="project-calc__group">
		            <div class="project-calc__group-title">Общие параметры дома:</div>

		            <div class="filters">
		            	<div class="filter-item input">
							<label>Площадь, м²</label>
							<input type="number" class="input-number" value="450">
						</div>
						<div class="filter-item switcher">
							<label>Этажность</label>
							<div class="switcher-buttons">
								<button class="switcher-btn">1</button>
								<button class="switcher-btn active">2</button>
							</div>
						</div>
		            </div>
		        </div>
		        <div class="project-calc__group">
		            <div class="project-calc__group-title">Планировка:</div>
		            <div class="filters">
		            	<div class="filter-item select">
	                        <label>Терраса</label>
	                        <button class="select-btn">Да</button>
	                        <div class="select-dropdown">
	                            <div class="select-dropdown__inner buttons">
	                                <button class="option-btn active">Да</button>
	                                <button class="option-btn">Нет</button>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="filter-item select">
	                        <label>Камин</label>
	                        <button class="select-btn">Да</button>
	                        <div class="select-dropdown">
	                            <div class="select-dropdown__inner buttons">
	                                <button class="option-btn active">Да</button>
	                                <button class="option-btn">Нет</button>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="filter-item select">
	                        <label>Балкон</label>
	                        <button class="select-btn">Да</button>
	                        <div class="select-dropdown">
	                            <div class="select-dropdown__inner buttons">
	                                <button class="option-btn active">Да</button>
	                                <button class="option-btn">Нет</button>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="filter-item select">
	                        <label>Крыша</label>
	                        <button class="select-btn">Плоская</button>
	                        <div class="select-dropdown">
	                            <div class="select-dropdown__inner buttons">
	                            	<button class="option-btn active">Плоская</button>
	                                <button class="option-btn">Скатная</button>
	                            </div>
	                        </div>
	                    </div>
		            </div>
		        </div>
		        <div class="project-calc__result">
		            <div class="project-calc__price project-calc__price--min">
		                от <span>61 000 000</span> ₽
		            </div>
		            <div class="project-calc__price project-calc__price--max">
		                до <span>110 000 000</span> ₽
		            </div>
		        </div>
			</div>
			<div class="project-calc__form fade-in">
                <div class="form__content form__content--dark"> 
                    <h3 class="form__content-heading">Оставьте заявку на&nbsp;расчёт</h3>
                    <p class="form__content-text">Окончательная цена зависит от&nbsp;планировки <br>и&nbsp;объёма работ. Для точного расчета <br>свяжитесь с&nbsp;нашим менеджером.</p>
                    <?php 
                    $form_id = "consult_project";
                    include('templates/components/form.php'); 
                    ?>
                </div>
            </div>
            <div class="project-calc__image fade-in-up">
            	<img class="lazyload" src="img/default.png" data-src="img/project-calc/main.png" alt="img">
            </div>
            <div class="section-bg__cover">
		        <picture>
		        	<source srcset="img/project-calc/bg.webp 1x, img/project-calc/bg@2x.webp 2x" type="image/webp">
		        	<source srcset="img/project-calc/bg.jpg 1x, img/project-calc/bg@2x.jpg 2x" type="image/jpeg">
		        	<img class="lazyload" data-srcset="img/project-calc/bg.jpg 1x, img/project-calc/bg@2x.jpg 2x" alt="img">
		        </picture>
		    </div>
		</div>
	</div>
</section>