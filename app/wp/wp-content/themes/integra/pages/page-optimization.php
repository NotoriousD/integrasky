<?php 
/* 
Template Name: Optimozation Servers
*/ 
?>

<?php get_header(); ?>


<div class="home-banner" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/banner-bg.png)">
		<div class="inner">
			<div class="banner__list">
				<div class="banner__descr">
					<h1 class="banner__title"><?php the_field('banner-title'); ?></h1>
					<span class="banner__text"><?php the_field('banner-text'); ?></span>
				</div>
				<div class="banner__img">
					<img src="<?php the_field('banner-img'); ?>" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="opt-block2">
        <div class="inner">
            <div class="block2__list">
                <div class="block2__img">
                    <img src="<?php the_field('block2-img'); ?>" alt="">
                </div>
                <div class="block2__descr">
                    <span class="block2__text"><?php the_field('block2-text'); ?></span>
                </div>
            </div>
        </div>
    </div>

    <div class="optimization">
        <div class="inner">
            <div class="opt__head">
                <h3 class="site__title">Оптимизация – способ продлить работу старого сервера</h3>
            </div>
            <div class="opt__list">
                <div class="opt__descr">
                    <div class="opt__block">
                        <span class="block__text"><?php the_field('block3-text1'); ?></span>
                    </div>
                    <span class="opt__title">Наша задача</span>
                    <span class="opt__text"><?php the_field('block3-text2'); ?></span>
                </div>
                <div class="opt__img"><img src="<?php the_field('block3-img'); ?>" alt=""></div>
            </div>
        </div>
    </div>

    <div class="variant">
        <div class="inner">
            <div class="var__list">
                <div class="var__title">
                    <h3 class="site__title">Виды <br> оптимизации </h3>
                </div>
                <?php if( have_rows('block4-list') ): ?>
                    <?php while( have_rows('block4-list') ): the_row(); ?>

                        <div class="var__item">
                            <span class="num"><?php the_sub_field('num'); ?></span>
                            <img src="<?php the_sub_field('img'); ?>" alt="">
                            <div class="var__item_descr">
                                <span class="descr__title"><?php the_sub_field('title'); ?></span>
                                <p class="descr__text"><?php the_sub_field('text'); ?></p>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="var__block">
                <span class="bg">Optimization</span>
                <div class="block__descr">
                    <span class="block__text">
                        Оптимизация <br> рекомендуется при:
                    </span>
                </div>
            </div>
        </div>
	</div>
	
	<div class="recomend">
		<div class="inner">
			<div class="rec__list">
				<div class="rec__img">
					<img src="<?php the_field('block5-img'); ?>" alt="">
				</div>
				<div class="rec__blocks">
                    <?php if( have_rows('block5-list') ): ?>
                        <?php while( have_rows('block5-list') ): the_row(); ?>

                            <div class="rec__item">
                                <span class="num"><?php the_sub_field('num'); ?></span>
                                <span class="rec__text"><?php the_sub_field('text'); ?></span>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
				</div>
			</div>
		</div>
	</div>

	<div class="mikrotik-form" style="background-image: url(<?php the_field('form1-bg'); ?>)">
		<div class="inner">
			<div class="form__list">
				<div class="form__descr">
					<h3 class="form__title">
                        <?php the_field('form1-title'); ?>
					</h3>
					<span class="form__text"><?php the_field('form1-text'); ?></span>
				</div>
				<div class="form__col">
					<div class="form__links">
						<a class="form-open open-active" href="#tab1">Оставить заявку</a>
						<a class="form-open" href="#tab2">Заказать звонок</a>
					</div>
					<div id="tab1" class="tab tab-active">
						<form>
							<div class="form__field">
								<input type="text" name="Имя" placeholder="Имя" required>
							</div>
							<div class="form__field">
								<input type="text" name="Email" placeholder="Email" required>
							</div>
							<div class="form__field">
								<input type="tel" name="Телефон" placeholder="Телефон" required>
							</div>
							<div class="form__sub">
								<div class="form__sbt">
									<input type="submit" value="Заказать">
								</div>
								<div class="form__check">
									<input type="checkbox" checked required>
									<span>Соглашение об обработке персональных данных</span>
								</div>
							</div>

						</form>
					</div>
					<div id="tab2" class="tab">
						<form>
							<div class="form__field">
								<input type="text" name="Имя" placeholder="Имя" required>
							</div>
							<div class="form__field">
								<input type="tel" name="Телефон" placeholder="Телефон" required>
							</div>
							<div class="form__text">
								<span class="time-work">Работаем по будням с 10:00 до 19:00. Заявки, отправленные в выходные, обрабатываем в первый рабочий день до 10:30</span>
							</div>
							<div class="form__sub">
								<div class="form__sbt">
									<input type="submit" value="Заказать">
								</div>
								<div class="form__check">
									<input type="checkbox" checked required>
									<span>Соглашение об обработке персональных данных</span>
								</div>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="what-opt">
		<div class="inner">
			<div class="what__head">
				<h3 class="site__title">Как происходит оптимизация? </h3>
			</div>
			<div class="what__list">
                <?php if( have_rows('block6-list') ): ?>
                    <?php while( have_rows('block6-list') ): the_row(); ?>

                        <div class="what__item">
                            <img src="<?php the_sub_field('img'); ?>" alt="">
                            <div class="dot"></div>
                            <span class="num"><?php the_sub_field('num'); ?></span>
                            <span class="what__title"><?php the_sub_field('title'); ?></span>
                            <span class="what__text"><?php the_sub_field('text'); ?></span>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
	</div>

	<div class="s-road">
        <div class="inner">
            <div class="road__head">
                <h3 class="site__title">С какими серверами работаем?</h3>
            </div>
            <div class="road__list">
                <?php if( have_rows('block7-list') ): ?>
                    <?php while( have_rows('block7-list') ): the_row(); ?>

                        <div class="road__item">
                            <?php the_sub_field('img'); ?>
                            <span class="road__text"><?php the_sub_field('text'); ?></span>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
                <div class="road__info">
                    <span class="road__info_text">и другие серверные решения…</span>
                </div>
            </div>
        </div>
	</div>
	
	<div class="mikrotik-form" style="background-image: url(<?php the_field('form2-bg'); ?>)">
		<div class="inner">
			<div class="form__list">
				<div class="form__descr">
					<h3 class="form__title">
                        <?php the_field('form2-title'); ?>
					</h3>
					<span class="form__text"><?php the_field('form2-text'); ?></span>
				</div>
				<div class="form__col">
					<div class="form__links">
						<a class="form-open open-active" href="#tab1">Оставить заявку</a>
						<a class="form-open" href="#tab2">Заказать звонок</a>
					</div>
					<div id="tab1" class="tab tab-active">
						<form>
							<div class="form__field">
								<input type="text" name="Имя" placeholder="Имя" required>
							</div>
							<div class="form__field">
								<input type="text" name="Email" placeholder="Email" required>
							</div>
							<div class="form__field">
								<input type="tel" name="Телефон" placeholder="Телефон" required>
							</div>
							<div class="form__sub">
								<div class="form__sbt">
									<input type="submit" value="Заказать">
								</div>
								<div class="form__check">
									<input type="checkbox" checked required>
									<span>Соглашение об обработке персональных данных</span>
								</div>
							</div>

						</form>
					</div>
					<div id="tab2" class="tab">
						<form>
							<div class="form__field">
								<input type="text" name="Имя" placeholder="Имя" required>
							</div>
							<div class="form__field">
								<input type="tel" name="Телефон" placeholder="Телефон" required>
							</div>
							<div class="form__text">
								<span class="time-work">Работаем по будням с 10:00 до 19:00. Заявки, отправленные в выходные, обрабатываем в первый рабочий день до 10:30</span>
							</div>
							<div class="form__sub">
								<div class="form__sbt">
									<input type="submit" value="Заказать">
								</div>
								<div class="form__check">
									<input type="checkbox" checked required>
									<span>Соглашение об обработке персональных данных</span>
								</div>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="free-opt">
		<div class="inner">
			<div class="free__list">
				<div class="free__img">
					<img src="<?php the_field('block8-img'); ?>" alt="">
				</div>
				<div class="free__descr">
					<span class="free__title"><?php the_field('block8-title'); ?></span>
					<span class="free__text"><?php the_field('block8-text'); ?></span>
					<a href="<?php the_field('block8-url'); ?>" class="free__url">подробнее об IT-аутсорсинге</a>
				</div>
			</div>
		</div>
    </div>
    
<?php get_footer(); ?>