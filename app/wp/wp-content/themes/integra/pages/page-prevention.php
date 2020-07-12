<?php 
/* 
Template Name: Профилактика
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

    <div class="home-possibility">
        <div class="inner">
            <div class="poss__list">
                <div class="poss__text">
                    <h3 class="poss__title">Чистка системных блоков</h3>
                </div>
                <?php if( have_rows('block2-list') ): ?>
                    <?php while( have_rows('block2-list') ): the_row(); ?>

                        <div class="poss__item">
                            <?php the_sub_field('icon'); ?>
                            <span class="poss__item-text"><?php the_sub_field('text'); ?></span>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="recomend">
        <div class="inner">
            <div class="rec__list">
                <div class="rec__img">
                    <img src="<?php the_field('block3-img'); ?>" alt="">
                </div>
                <div class="rec__descr">
                    <div class="descr__info">
                        <span class="rec__text_regular"><?php the_field('block3-title'); ?></span>
                        <span class="rec__text_medium">Рекомендуемо:</span>
                        <span class="rec__text_bold"><?php the_field('block3-text'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="prof-title">
        <div class="inner">
            <div class="proft__block">
                <h3 class="block__title">В рамках профилактики мы:</h3>
                <span class="proft_bg">prevention</span>
            </div>
        </div>
    </div>

    <div class="profilaction">
        <div class="inner">
            <?php if( have_rows('block4-list') ): ?>
                <?php while( have_rows('block4-list') ): the_row(); ?>

                    <div class="prof__line">
                        <div class="prof__block">
                            <div class="prof__block_descr">
                                <span class="num"><?php the_sub_field('num'); ?></span>
                                <span class="descr__title"><?php the_sub_field('title'); ?></span>
                                <span class="descr__text"><?php the_sub_field('text'); ?></span>
                            </div>
                            <div class="prof__block_img">
                                <img src="<?php the_sub_field('img'); ?>" alt="">
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

    <div class="price">
        <div class="inner">
            <div class="price__list">
                <div class="price__descr">
                    <div class="descr__info">
                        <span class="descr__title"><?php the_field('block5-title'); ?></span>
                        <span class="descr__text"><?php the_field('block5-text'); ?></span>
                    </div>
                </div>
                <div class="price__img">
                    <img src="<?php the_field('block5-img'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="home-form">
        <div class="inner">
            <div class="form__list">
                <div class="form__descr">
                    <span class="form__title"><?php the_field('form-title'); ?></span>
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

    <div class="service">
        <div class="inner">
            <div class="service__head">
                <div class="head__title">
                    <h3 class="site__title">Подробнее об услуге</h3>
                </div>
                <div class="head__descr">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/prev/voskr.png" alt="">
                    <div class="descr__info">
                        <span class="descr__text"><?php the_field('block6-text'); ?></span>
                    </div>
                </div>
            </div>
            <div class="service__list">
                <?php if( have_rows('block6-list') ): ?>
                    <?php while( have_rows('block6-list') ): the_row(); ?>

                        <div class="aswell__item">
                            <span class="num"><?php the_sub_field('num'); ?></span>
                            <span class="blue__block"></span>
                            <img src="<?php the_sub_field('img'); ?>" alt="">
                            <span class="aswell__item-title"><?php the_sub_field('title'); ?></span>
                            <span class="aswell__item_text"><?php the_sub_field('text'); ?></span>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
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

<?php get_footer(); ?>