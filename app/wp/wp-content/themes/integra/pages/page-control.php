<?php 
/* 
Template Name: Системы контроля рабочего времени
*/ 

get_header(); ?>

<div class="home-banner" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/banner-bg.png)">
        <div class="inner">
            <div class="banner__list">
                <div class="banner__descr">
                    <h1 class="banner__title"><?php the_field('banner-title'); ?></h1>
                    <ul class="banner__ul">
                    <?php if( have_rows('banner-list') ): ?>
                        <?php while( have_rows('banner-list') ): the_row(); ?>

                            <li><?php the_sub_field('text'); ?></li>

                        <?php endwhile; ?>

                    <?php endif; ?>
                    </ul>
                </div>
                <div class="banner__img">
                    <img src="<?php the_field('banner-img'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="work">
        <div class="inner">
            <div class="work__title">
                <h3 class="site__title"><?php the_field('work-title'); ?></h3>
            </div>
            <div class="work__list">
                <div class="work__img">
                    <img src="<?php the_field('block2-img'); ?>" alt="">
                </div>
                <div class="work__descr">
                    <span class="work__descr_text"><?php the_field('block2-text'); ?></span>
                    <span class="work__descr_bold"><?php the_field('block2-text-b'); ?></span>
                    <div class="work__descr_list">
                        <?php if( have_rows('block2-list') ): ?>
                            <?php while( have_rows('block2-list') ): the_row(); ?>

                                <div class="list__item">
                                    <img src="<?php the_sub_field('img'); ?>" alt="">
                                    <span class="list__item_text"><?php the_sub_field('text'); ?></span>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="example">
        <div class="inner">
            <div class="example__list">
                <div class="example__descr">
                    <span class="example__title"><?php the_field('example-title'); ?></span>
                    <span class="example__text"><?php the_field('example-text'); ?></span>
                </div>
                <div class="example__img">
                    <img src="<?php the_field('example-img'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="home-form">
        <div class="inner">
            <div class="form__list">
                <div class="form__descr">
                    <span class="form__title">
						<?php the_field('homef-title'); ?>
                    </span>
                    <span class="form__text"><?php the_field('homef-text'); ?></span>
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

    <div class="how-work">
        <div class="inner">
            <div class="work__title">
                <h3 class="site__title"><?php the_field('how-title'); ?></h3>
            </div>
            <div class="work__list">
				<?php if( have_rows('block3-list') ): ?>
                    <?php while( have_rows('block3-list') ): the_row(); ?>

                        <div class="work__item">
                            <img src="<?php the_sub_field('img'); ?>" alt="">
                            <span class="work__text"><?php the_sub_field('text'); ?></span>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="crocotime">
        <div class="inner">
            <div class="croc__list">
                <div class="croc__descr">
                    <h3 class="site__title"><?php the_field('crocotime-title'); ?></h3>
                    <span class="croc__text"><?php the_field('crocotime-text'); ?></span>
                </div>
                <div class="croc__gallery">
                    <div class="releab__slider">
                        <div class="r-slider2">
							<?php if( have_rows('crocotime-slider') ): ?>
                                <?php while( have_rows('crocotime-slider') ): the_row(); ?>

                                    <div class="item">
                                        <img src="<?php the_sub_field('img'); ?>" alt="">
                                    </div>

                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="r-controls">
                            <a href="#" class="rs2-prev"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linux/sl-prev.png" alt=""></a>
                            <a href="#" class="rs2-next"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linux/sl-next.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="staffcop">
        <div class="inner">
            <div class="staff__list">
                <div class="staff__gallery">
                    <div class="releab__slider">
                        <div class="r-slider1">
							<?php if( have_rows('releab-slider') ): ?>
                                <?php while( have_rows('releab-slider') ): the_row(); ?>

                                    <div class="item">
                                        <img src="<?php the_sub_field('img'); ?>" alt="">
                                    </div>

                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="r-controls">
                            <a href="#" class="rs1-prev"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linux/sl-prev.png" alt=""></a>
                            <a href="#" class="rs1-next"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linux/sl-next.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="staff__descr">
                    <h3 class="site__title"><?php the_field('staffcop-title'); ?></h3>
                    <span class="staff__text"><?php the_field('staffcop-text'); ?></span>
                    <ul>
										<?php if( have_rows('staffcop-list') ): ?>
                            <?php while( have_rows('staffcop-list') ): the_row(); ?>

                                <li>
                                    <?php the_sub_field('text'); ?>
                                </li>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="ic-form">
        <div class="inner">
            <div class="form__container">
                <div class="form__list">
                    <div class="form__descr">
                        <span class="form__text"><?php the_field('ic-text'); ?></span>
                    </div>
                    <div class="form__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ic/block4.png" alt=""></div>
                </div>
                <div class="form__form">
                    <form>
                        <div class="form__field">
                            <input type="text" name="Имя" placeholder="Имя">
                        </div>
                        <div class="form__field">
                            <input type="text" name="Email" placeholder="Email">
                        </div>
                        <div class="form__field">
                            <input type="tel" name="Телефон" placeholder="Телефон">
                        </div>
                        <div class="form__btn">
                            <input type="submit" value="Отправить">
                        </div>
                    </form>
                    <span>Нажимая на кнопку «Отправить» вы даете согласие на <a href="#">обработку персональных
                            данных</a></span>
                </div>
            </div>
        </div>
    </div>

    <div class="specialists">
        <div class="inner">
            <div class="aswell__block">
                <span class="aswell__bg"><?php the_field('spec-bg'); ?></span>
                <span class="aswell__title"><?php the_field('spec-title'); ?></span>
            </div>
        </div>
    </div>

    <div class="home-perfomance">
        <div class="inner">
            <div class="perform__list">
                <div class="perform__descr">
                    <span class="perform__title"><?php the_field('spec-left-title'); ?></span>
                    <img src="<?php the_field('spec-left-img'); ?>" alt="">
                </div>
                <div class="perform__blocks">
								<?php if( have_rows('block4-list') ): ?>
                            <?php while( have_rows('block4-list') ): the_row(); ?>

                               

														<div class="perform__block">
															<div class="icon"><img src="<?php the_sub_field('img'); ?>" alt=""></div>
															<span class="block__title"><?php the_sub_field('title'); ?>
															</span>
															<span class="block__text"><?php the_sub_field('text'); ?>
															</span>
														</div>

                            <?php endwhile; ?>
                        <?php endif; ?>

                </div>
            </div>
            <div class="perform__info">
                <span class="perform__info_text"><?php the_field('spec-bottom'); ?></span>
            </div>
        </div>
    </div>

    <div class="service">
        <div class="inner">
            <div class="service__list">
                <div class="service__descr">
                    <span class="service__title"><?php the_field('serv-title'); ?></span>
                    <span class="service__mini-text"><?php the_field('serv-mini-text'); ?></span>
                    <span class="service__text"><?php the_field('serv-text'); ?></span>
                    <a href="#"><?php the_field('serv-btn'); ?></a>
                </div>
                <div class="service__img">
                    <img src="<?php the_field('serv-img'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="price">
        <div class="inner">
            <div class="price__title">
                <h3 class="site__title">
								<?php the_field('price-title'); ?>
                </h3>
            </div>
            <div class="price__list">
                <div class="list">
								<?php if( have_rows('block5-list') ): ?>
                            <?php while( have_rows('block5-list') ): the_row(); ?>

														<div class="item">
															<img src="<?php the_sub_field('img'); ?>" alt="">
															<span class="item__text"><?php the_sub_field('text'); ?></span>
                   				 </div>

                            <?php endwhile; ?>
                        <?php endif; ?>
                </div>
                <div class="price__descr">
                    <span class="descr__text"><?php the_field('price-desc'); ?></span>
                </div>
            </div>
        </div>
    </div>

    <div class="micr-block2">
        <div class="inner">
            <div class="block__list">
                <div class="block__descr">
                    <span class="block__head"><?php the_field('micr-title'); ?></span>
                    <a href="#"><?php the_field('micr-btn'); ?></a>
                    <span class="block__text"><?php the_field('micr-text'); ?></span>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>