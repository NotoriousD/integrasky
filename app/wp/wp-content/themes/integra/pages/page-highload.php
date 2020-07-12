<?php 
/* 
Template Name: Высоконагруженные системы (Highload)
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

    <div class="high-system">
        <div class="inner">
            <div class="system__list">
                <div class="system__descr">
                    <span class="system__title"><?php the_field('block2-title'); ?></span>
                    <span class="system__text"><?php the_field('block2-text'); ?></span>
                </div>
                <div class="system__img">
                    <img src="<?php the_field('block2-img'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="s-road">
        <div class="inner">
            <div class="road__head">
                <h3 class="site__title">Какие системы могут быть высоконагруженными?</h3>
            </div>
            <div class="road__list">
                <?php if( have_rows('block3-list') ): ?>
                    <?php while( have_rows('block3-list') ): the_row(); ?>

                        <div class="road__item">
                            <?php the_sub_field('img'); ?>
                            <span class="road__text">
                                <?php the_sub_field('text'); ?>
                            </span>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
                <div class="road__info">
                    <span class="road__info_text">И другие системы…</span>
                </div>
            </div>
        </div>
    </div>

    <div class="r-block">
        <div class="inner">
            <div class="block__descr">
                <p class="block__text"><?php the_field('block3-text'); ?></p>
                <a href="<?php the_field('block3-url'); ?>">подробнее об оптимизации серверов</a>
            </div>
        </div>
    </div>

    <div class="not-sick">
        <div class="inner">
            <div class="sick__head">
                <h3 class="sick__head_title"><?php the_field('block4-title'); ?></h3>
                <span class="sick__head_text"><?php the_field('block4-text'); ?></span>
            </div>
            <div class="sick__list">
                <div class="sick__start">
                    <span class="sick__start_block">Откуда появляется высокая нагрузка?</span>
                </div>
                <div class="sick__middle">
                    <?php if( have_rows('block4-list1') ): ?>
                        <?php while( have_rows('block4-list1') ): the_row(); ?>

                            <span class="sick__mid_block"><?php the_sub_field('text'); ?></span>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="sick__last">
                    <?php if( have_rows('block4-list2') ): ?>
                        <?php while( have_rows('block4-list2') ): the_row(); ?>

                            <span class="sick__last_block"><?php the_sub_field('text'); ?></span>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="variant">
        <div class="inner">
            <div class="var__list">
                <div class="var__title">
                    <h3 class="site__title">Варианты оптимизации высокой нагрузки</h3>
                </div>
                <?php if( have_rows('block5-list') ): ?>
                    <?php while( have_rows('block5-list') ): the_row(); ?>

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
        </div>
    </div>

    <div class="micr-block2">
        <div class="inner">
            <div class="block__list">
                <div class="block__descr">
                    <span class="block__head"><?php the_field('block6-title'); ?></span>
                    <span class="block__text"><?php the_field('block6-text'); ?></span>
                </div>
            </div>
        </div>
    </div>

    <div class="linux-aswell">
        <div class="inner">
            <div class="aswell__title">
                <h3 class="site__title">Компании, использующие высоконагруженные системы</h3>
            </div>
            <div class="aswell__list">
                <?php if( have_rows('block6-list') ): ?>
                    <?php while( have_rows('block6-list') ): the_row(); ?>

                        <div class="aswell__item">
                            <span class="num"><?php the_sub_field('num'); ?></span>
                            <span class="blue__block"></span>
                            <img src="<?php the_sub_field('img'); ?>" alt="">
                            <span class="aswell__item-title"><?php the_sub_field('title'); ?></span>
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
                
                <div class="aswell__img">
                    <img src="<?php the_field('block6-img') ?>" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="home-form">
        <div class="inner">
            <div class="form__list">
                <div class="form__descr">
                    <span class="form__title"><?php the_field('form-title') ?></span>
                    <span class="form__text"><?php the_field('form-text') ?></span>
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

    <div class="target">
        <div class="inner">
            <div class="target__head">
                <h3 class="target__head_title"><?php the_field('block7-title'); ?></h3>
                <span class="target__head_text"><?php the_field('block7-text'); ?></span>
            </div>
            <div class="target__list">
                <div class="target__start">
                    <span class="target__start_text"><?php the_field('block7-start'); ?></span>
                </div>
                <div class="target__middle">
                    <div class="mid__col mcl">
                        <span class="mid__col_text">нет</span>
                    </div>
                    <div class="mid__col mcr">
                        <span class="mid__col_text">да</span>
                    </div>
                </div>
                <div class="target__last">
                    <div class="target__last_block">
                        <span class="target__last_text"><?php the_field('block7-ltext'); ?></span>
                        <a href="<?php the_field('block7-lurl'); ?>">Читать дальше</a>
                    </div>
                    <?php if( have_rows('block7-list') ): ?>
                        <?php while( have_rows('block7-list') ): the_row(); ?>

                            <div class="target__last_block">
                                <span class="target__last_title"><?php the_sub_field('title'); ?></span>
                                <span class="target__last_text"><?php the_sub_field('text'); ?></span>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer() ?>;