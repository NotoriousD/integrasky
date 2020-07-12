<?php 
/* 
Template Name: Postgre
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

	<div class="home-possibility">
		<div class="inner">
			<div class="poss__list">
				<div class="poss__text">
					<h3 class="poss__title">Наши возможности при работе с PostgreSQL:</h3>
                </div>
                <?php if( have_rows('block2-list') ): ?>
                    <?php while( have_rows('block2-list') ): the_row(); ?>

                        <a href="#" class="poss__item">
                            <?php the_sub_field('icon'); ?>
                            <span class="poss__item-text"><?php the_sub_field('text'); ?></span>
                        </a>

                    <?php endwhile; ?>

                <?php endif; ?>
			</div>
		</div>
	</div>

	<div class="home-advantages">
		<div class="inner">
			<div class="section__title">
				<h3 class="site__title">Плюсы и минусы PostgreSQL</h3>
			</div>
			<div class="advant__list">
				<div class="advant__col">
					<div class="col__list">
                        <?php if( have_rows('block3-plus') ): ?>
                            <?php while( have_rows('block3-plus') ): the_row(); ?>

                                <div class="col__block">
                                    <div class="icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/check.png" alt=""></div>
                                    <span class="descr"><?php the_sub_field('text'); ?></span>
                                </div>

                            <?php endwhile; ?>

                        <?php endif; ?>
					</div>
				</div>
				<div class="advant__col">
					<div class="col__list">
                        <?php if( have_rows('block3-minus') ): ?>
                            <?php while( have_rows('block3-minus') ): the_row(); ?>

                                <div class="col__block">
                                    <div class="icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/check2.png" alt=""></div>
                                    <span class="descr"><?php the_sub_field('text'); ?></span>
                                </div>

                            <?php endwhile; ?>

                        <?php endif; ?>
					</div>
					<div class="advant__block">
						<span class="block__text">
                            <?php the_field('block3-text'); ?>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="home-reliability">
		<div class="section__title">
			<div class="inner">
				<h3 class="site__title">Надёжность</h3>
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
                                    <ul class="releab__ul">
                                        <?php if( have_rows('list') ): ?>
                                            <?php while( have_rows('list') ): the_row(); ?>
                                        <li>
                                            <span class="releab__ul-title"><?php the_sub_field('title'); ?></span>
                                            <span class="releab__ul-text"><?php the_sub_field('text'); ?></span>
                                        </li>
                                            <?php endwhile; ?>

                                        <?php endif; ?>
                                    </ul>
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

	<div class="home-form">
		<div class="inner">
			<div class="form__list">
				<div class="form__descr">
					<span class="form__title">
                        <?php the_field('form-title'); ?>
					</span>
					<span class="form__text"><?php the_field('form-text'); ?></span>
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

	<div class="home-perfomance">
		<div class="inner">
			<div class="perform__list">
				<div class="perform__descr">
					<h3 class="site__title">Производительность</h3>
					<span class="perform__text">Производительность PostgreSQL основывается на:</span>
					<img src="<?php the_field('block5-img'); ?>" alt="">
				</div>
				<div class="perform__blocks">

                        <?php if( have_rows('block5-list') ): ?>
                            <?php while( have_rows('block5-list') ): the_row(); ?>

                                <div class="perform__block">
                                    <div class="icon"><img src="<?php the_sub_field('img'); ?>" alt=""></div>
                                    <span class="block__title"><?php the_sub_field('title'); ?></span>
                                    <span class="block__text"><?php the_sub_field('text'); ?></span>
                                </div>

                            <?php endwhile; ?>

                        <?php endif; ?>
				</div>
			</div>
		</div>
	</div>

	<div class="home-expancion">
		<div class="inner">
			<div class="expans__list">
				<div class="expans__descr">
					<h3 class="site__title">
						Расширяемость
					</h3>
					<span class="expans__text">
						<?php the_field('block6-title'); ?>
					</span>
				</div>
				<div class="expanse__img">
					<img src="<?php the_field('block6-img'); ?>" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="home-characteristic">
		<div class="inner">
			<div class="section__title">
				<h3 class="site__title">Технические характеристики PostgreSQL</h3>
			</div>
			<div class="char__table">
				<table>

                    <?php if( have_rows('block7-list') ): ?>
                        <?php while( have_rows('block7-list') ): the_row(); ?>

                            <tr>
                                <td><?php the_sub_field('title'); ?></td>
                                <td><?php the_sub_field('text'); ?></td>
                            </tr>

                        <?php endwhile; ?>

                    <?php endif; ?>
					
				</table>
			</div>
			<span class="char__text">
                <?php the_field('block7-text'); ?>
			</span>
		</div>
	</div>

	<div class="home-cost">
		<div class="inner">
			<div class="cost__block">
				<h3 class="site__title">Стоимость PostgreSQL</h3>
				<span class="cost__text"><?php the_field('block8-text'); ?></span>
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
					<span class="form__text2">Или оставьте заявку на сайте и мы сами вам позвоним</span>
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
					<h3 class="seq__title">Последовательность внедрения PostgreSQL</h3>
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