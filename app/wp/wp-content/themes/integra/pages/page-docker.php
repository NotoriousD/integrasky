<?php 
/* 
Template Name: Docker
*/ 

get_header(); ?>

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

    <div class="containers">
        <div class="inner">
            <div class="cont__list">
                <div class="cont__descr">
                    <h3 class="cont__title"><?php the_field('block2-title'); ?></h3>
                    <span class="cont__text"><?php the_field('block2-text'); ?></span>
                    <img src="<?php the_field('block2-img'); ?>" alt="">
                </div>
                <div class="cont__img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/docker/block2.png" alt="">
                    <div class="cont__img_list">
                        <div class="list__item">
                            <span class="list__item_text"><?php the_field('block2-text2'); ?></span>
                        </div>
                        <div class="list__item">
                            <span class="list__item_text"><?php the_field('block2-text3'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="block3">
        <div class="inner">
            <div class="block__list">
                <?php if( have_rows('block3-list') ): ?>
                    <?php while( have_rows('block3-list') ): the_row(); ?>

                        <div class="block__col">
                            <?php $text = get_sub_field('info'); ?>
                            <?php if( !empty($text) ) { ?>
                                <span class="col__text"><?php the_sub_field('info'); ?></span>
                            <?php } ?>
                            <div class="col__item">
                                <span class="num"><?php the_sub_field('num'); ?></span>
                                <img src="<?php the_sub_field('img'); ?>" alt="">
                                <span class="block__title"><?php the_sub_field('title'); ?></span>
                                <span class="block__text"><?php the_sub_field('text'); ?></span>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="docker-slider">
        <div class="inner">
            <div class="docker__container">
                <div class="docker__controls">
                    <div class="r-slider">
                    <?php if( have_rows('block4-list') ): ?>
                        <?php while( have_rows('block4-list') ): the_row(); ?>

                            <div class="item"><img src="<?php the_sub_field('img'); ?>" alt=""></div>

                        <?php endwhile; ?>

                    <?php endif; ?>
                    </div>
                    <div class="r-controls">
                        <a href="#" class="rs-prev"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linux/sl-prev.png" alt=""></a>
                        <a href="#" class="rs-next"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linux/sl-next.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="virtual">
        <div class="inner">
            <div class="vir__list">
                <div class="vir__descr">
                    <h3 class="site__title"><?php the_field('block5-title'); ?></h3>
                    <div class="vir__descr_list">
                        <?php if( have_rows('block5-list') ): ?>
                            <?php while( have_rows('block5-list') ): the_row(); ?>

                                <div class="list__item">
                                    <span class="item__title"><?php the_sub_field('title'); ?></span>
                                    <ul>
                                        <?php if( have_rows('list') ): ?>
                                            <?php while( have_rows('list') ): the_row(); ?>
                                            <li><?php the_sub_field('text'); ?></li>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="vir__img">
                    <img src="<?php the_field('block5-img'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="ic-form">
        <div class="inner">
            <div class="form__container">
                <div class="form__list">
                    <div class="form__descr">
                        <span class="form__text">Мы реализовали сотни проектов для небольших компаний и точно знаем, как
                            сделать телефонию, которая не только полностью окупиться за 6-8 месяцев, но и станет
                            драйвером роста бизнеса на ближайшие несколько лет</span>
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

    <div class="home-perfomance">
        <div class="inner">
            <div class="perform__list">
                <div class="perform__descr">
                    <h3 class="site__title">Где используются контейнеры?</h3>
                    <img src="<?php the_field('block6-img'); ?>" alt="">
                </div>
                <div class="perform__blocks">
                    <?php if( have_rows('block6-list') ): ?>
                        <?php while( have_rows('block6-list') ): the_row(); ?>

                             <div class="perform__block">
                                 <div class="icon"><img src="<?php the_sub_field('img'); ?>" alt=""></div>
                                <span class="block__title"><?php the_sub_field('title'); ?></span>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="help">
        <div class="inner">
            <div class="help__list">
                <div class="help__descr">
                    <h3 class="site__title"><?php the_field('block7-title'); ?></h3>
                    <?php if( have_rows('block7-list') ): ?>
                        <?php while( have_rows('block7-list') ): the_row(); ?>

                            <span class="help__text">
                                <?php the_sub_field('text'); ?>
                            </span>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="help__img">
                    <img src="<?php the_field('block7-img'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="home-reliability">
        <div class="section__title">
            <div class="inner">
                <h3 class="site__title">Использование контейнеров Docker позволяет:</h3>
            </div>
        </div>
        <div class="inner">
            <div class="releab__list">
                <?php if( have_rows('block8-list1') ): ?>
                    <?php while( have_rows('block8-list1') ): the_row(); ?>
                        <div class="releab__col">
                        <?php if( have_rows('blocks') ): ?>
                            <?php while( have_rows('blocks') ): the_row(); ?>
                                <?php $text = get_sub_field('text'); ?>
                                <div class="releab__item">
                                    <span class="num"><?php the_sub_field('num'); ?></span>
                                    <span class="releab__title"><?php the_sub_field('title'); ?></span>
                                    <?php if( !empty($text) ) { ?>
                                        <span class="releab__text"><?php echo $text ?></span>
                                    <?php } ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        </div>
                        
                    <?php endwhile; ?>
                <?php endif; ?>
                <div class="releab__col">
                    <div class="releab__img"><img src="<?php the_field('block8-img'); ?>" alt=""></div>
                </div>
            </div>
            <div class="releab__list">
                <?php if( have_rows('block8-list2') ): ?>
                    <?php while( have_rows('block8-list2') ): the_row(); ?>
                        <div class="releab__col">
                        <?php if( have_rows('blocks') ): ?>
                            <?php while( have_rows('blocks') ): the_row(); ?>
                                <?php $text = get_sub_field('text'); ?>
                                <div class="releab__item">
                                    <span class="num"><?php the_sub_field('num'); ?></span>
                                    <span class="releab__title"><?php the_sub_field('title'); ?></span>
                                    <?php if( !empty($text) ) { ?>
                                        <span class="releab__text"><?php echo $text ?></span>
                                    <?php } ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        </div>
                        
                    <?php endwhile; ?>
                <?php endif; ?>
                <div class="releab__col">
                    <div class="releab__img"><img src="<?php the_field('block82-img'); ?>" alt=""></div>
                </div>
            </div>
            <div class="releab__list">
                <?php if( have_rows('block8-list3') ): ?>
                    <?php while( have_rows('block8-list3') ): the_row(); ?>
                        <div class="releab__col">
                        <?php if( have_rows('blocks') ): ?>
                            <?php while( have_rows('blocks') ): the_row(); ?>
                                <?php $text = get_sub_field('text'); ?>
                                <div class="releab__item">
                                    <span class="num"><?php the_sub_field('num'); ?></span>
                                    <span class="releab__title"><?php the_sub_field('title'); ?></span>
                                    <?php if( !empty($text) ) { ?>
                                        <span class="releab__text"><?php echo $text ?></span>
                                    <?php } ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        </div>
                        
                    <?php endwhile; ?>
                <?php endif; ?>
                <div class="releab__col">
                    <div class="releab__img"><img src="<?php the_field('block83-img'); ?>" alt=""></div>
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
    
    <div class="docker">
        <div class="inner">
            <div class="docker__head">
                <h3 class="docker__title"><?php the_field('block9-title'); ?></h3>
                <span class="docker__info"><?php the_field('block9-descr'); ?></span>
            </div>
            <div class="docker__list">
                <div class="docker__descr">
                    <span class="docker__text"><?php the_field('block9-text'); ?></span>
                </div>
                <div class="docker__img">
                    <img src="<?php the_field('block9-img'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>