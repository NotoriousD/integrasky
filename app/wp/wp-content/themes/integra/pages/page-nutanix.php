<?php 
/* 
Template Name: Nutanix
*/ 
?>

<?php get_header(); ?>

    <div class="home-banner" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/banner-bg.png)">
		<div class="inner">
			<div class="banner__list">
				<div class="banner__descr">
					<h1 class="banner__title"><?php the_field('banner-title'); ?></h1>
				</div>
				<div class="banner__img">
					<img src="<?php the_field('banner-img'); ?>" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="home-possibility">
		<div class="inner">
			<div class="poss__list">
                <?php if( have_rows('block2-list') ): ?>
                    <?php while( have_rows('block2-list') ): the_row(); ?>

                        <a href="#" class="poss__item">
                            <?php the_sub_field('icon'); ?>
                            <span class="poss__item-text"><?php the_sub_field('text'); ?></span>
                        </a>

                    <?php endwhile; ?>

                <?php endif; ?>
                <div class="poss__text">
					<h3 class="poss__descr"><?php the_field('block2-title'); ?></h3>
				</div>
			</div>
		</div>
	</div>

	<div class="home-reliability">
		<div class="section__title">
			<div class="inner">
				<h3 class="site__title">Преимущества от использования Nutanix</h3>
			</div>
		</div>
		<div class="inner">
			<div class="releab__list">
                <div class="releab__col">
                    <?php if( have_rows('block4-item') ): ?>
                        <?php while( have_rows('block4-item') ): the_row(); ?>

                            <div class="releab__item">
                                <span class="num"><?php the_sub_field('num'); ?></span>
                                <span class="releab__title"><?php the_sub_field('title'); ?></span>
                                <span class="releab__text"><?php the_sub_field('text'); ?></span>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>	
				</div>
				<div class="releab__col">
                    <?php if( have_rows('block4-list') ): ?>
                        <?php while( have_rows('block4-list') ): the_row(); ?>

                            <div class="releab__item">
                                <span class="num"><?php the_sub_field('num'); ?></span>
                                <span class="releab__title"><?php the_sub_field('title'); ?></span>
                                <span class="releab__text"><?php the_sub_field('text'); ?></span>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
					<div class="releab__img"><img src="<?php the_field('block4-img'); ?>" alt=""></div>
				</div>
			</div>
		</div>
    </div>
    
    <div class="n-nutanix">
        <div class="inner">
            <div class="nutan__list">
                <div class="nutan__img"><img src="<?php the_field('block5-img'); ?>" alt=""></div>
                <div class="nutan__descr">
                    <span class="nutan__title"><?php the_field('block5-title'); ?></span>
                    <span class="nutan__text"><?php the_field('block5-text'); ?></span>
                </div>
            </div>
        </div>
    </div>

	<div class="home-form">
		<div class="inner">
			<div class="form__list">
				<div class="form__descr">
					<span class="form__title">
                        <?php the_field('form-title'); ?>
					</span>
					<div class="form__phone">
						<span class="phone__text">Наш специалист доступен по телефону</span>
						<a href="#" class="phone"><span>8 495</span> 373 27 53</a>
                    </div>
                    <span class="form__text"><?php the_field('form-text'); ?></span>
				</div>
				<div class="form__form">
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
						<div class="form__check">
							<input type="checkbox" checked required>
							<span>Соглашение об обработке персональных данных</span>
						</div>
						<div class="form__sbt">
							<input type="submit" value="Заказать">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
    
    <div class="n-work">
        <div class="inner">
            <div class="work__list">
                <div class="work__descr">
                    <h3 class="site__title"><?php the_field('block6-title'); ?></h3>
                    <span class="work__text"><?php the_field('block6-text'); ?> </span>
                    <img src="<?php the_field('block6-img'); ?>" alt="">
                </div>
                <div class="work__img">
                    <img src="<?php the_field('block6-img2'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="n-features">
        <div class="inner">
            <div class="features__list">
                <h3 class="features__title">Особенности Nutanix</h3>
                <?php if( have_rows('block7-list') ): ?>
                        <?php while( have_rows('block7-list') ): the_row(); ?>

                            <div class="features__item">
                                <span class="num"><?php the_sub_field('num'); ?></span>
                                <span class="feat__title"><?php the_sub_field('title'); ?></span>
                                <span class="feat__text"><?php the_sub_field('text'); ?></span>
                            </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="features__list">
                <?php if( have_rows('block7-list2') ): ?>
                    <?php while( have_rows('block7-list2') ): the_row(); ?>

                        <div class="features__item">
                            <span class="num"><?php the_sub_field('num'); ?></span>
                            <span class="feat__title"><?php the_sub_field('title'); ?></span>
                            <span class="feat__text"><?php the_sub_field('text'); ?></span>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

	<div class="home-form">
		<div class="inner">
			<div class="form__list">
				<div class="form__descr">
					<span class="form__title">
                        <?php the_field('form1-title'); ?>
					</span>
					<span class="form__text"><?php the_field('form1-text'); ?></span>
					<div class="form__phone">
						<span class="phone__text">Наш специалист доступен по телефону</span>
						<a href="#" class="phone"><span>8 495</span> 373 27 53</a>
					</div>
				</div>
				<div class="form__form">
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
						<div class="form__check">
							<input type="checkbox" checked required>
							<span>Соглашение об обработке персональных данных</span>
						</div>
						<div class="form__sbt">
							<input type="submit" value="Заказать">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="home-sequence">
		<div class="inner">
			<div class="seq__list">
				<div class="seq__descr" style="order: 1">
					<h3 class="seq__title">Последовательность внедрения</h3>
                </div>
                <?php if( have_rows('block9-list') ): ?>
                    <?php while( have_rows('block9-list') ): the_row(); ?>

                        <div class="seq__item" style="order: <?php the_sub_field('order'); ?>">
                            <span class="icon"><span class="num"><?php the_sub_field('num'); ?></span><img src="<?php the_sub_field('img'); ?>" alt=""></span>
                            <span class="item__title"><?php the_sub_field('title'); ?></span>
                            <span class="item__text"><?php the_sub_field('text'); ?></span>
                        </div>

                    <?php endwhile; ?>

                <?php endif; ?>
				<div class="seq__img" style="order: 4">
					<img src="<?php the_field('block9-img'); ?>" alt="">
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>