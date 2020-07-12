<?php 
/* 
Template Name: Server
*/ 
?>

<?php get_header(); ?>

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

    <div class="s-ideal">
        <div class="inner">
            <div class="ideal__list">
                <span class="bg">server</span>
                <div class="ideal__descr">
                    <span class="ideal__text"><?php the_field('block2-text'); ?></span>
                    <span class="ideal__text2"><?php the_field('block2-text2'); ?></span>
                </div>
                <div class="ideal__img">
                    <img src="<?php the_field('block2-img'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="s-road">
        <div class="inner">
            <div class="road__head">
                <h3 class="road__title"><?php the_field('block3-title'); ?></h3>
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
            </div>
        </div>
    </div>

    <div class="s-cabel">
        <div class="inner">
            <div class="cabel__list">
                <div class="cabel__title">
                    <span class="num">01</span>
                    <h3 class="site__title">Кабель-менеджмент</h3>
                </div>
                <div class="cabel__descr">
                    <span class="descr__title"><?php the_field('block4-title'); ?></span>
                    <span class="descr__text"><?php the_field('block4-text'); ?></span>
                </div>
            </div>

            <div class="img__list">
                <?php if( have_rows('block4-list') ): ?>
                    <?php while( have_rows('block4-list') ): the_row(); ?>

                        <div class="img__item <?php the_sub_field('class'); ?>">
                            <img src="<?php the_sub_field('img'); ?>" alt="">
                            <?php $text = get_sub_field('text'); ?>
                            <?php if( !empty($text) ) { ?>
                                <span><?php the_sub_field('text'); ?></span>
                            <?php } ?>
                            
                        </div>

                    <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="s-wedo">
        <div class="inner">
            <div class="wedo__head">
                <span class="wedo__title">Что мы делаем в рамках кабель-менеджмента:</span>
            </div>
            <div class="wedo__list">
                <?php if( have_rows('block5-list') ): ?>
                    <?php while( have_rows('block5-list') ): the_row(); ?>

                        <div class="wedo__item">
                            <div class="wedo__picture">
                                <span class="num"><?php the_sub_field('num'); ?></span>
                            </div>
                            <span class="wedo__text"><?php the_sub_field('text'); ?></span>
                        </div>

                    <?php endwhile; ?>

                <?php endif; ?>
            </div>
            <div class="wedo__block">
                <div class="wedo__img"><img src="<?php the_field('block5-img'); ?>" alt=""></div>
                <div class="wedo__descr">
                    <span class="descr__text"><?php the_field('block5-text'); ?></span>
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

    <div class="s-battary sbf">
        <div class="inner">
            <div class="battary__list">
                <div class="battary__img">
                    <img src="<?php the_field('block6-img'); ?>" alt="">
                </div>
                <div class="battary__descr">
                    <span class="num">02</span>
                    <h3 class="site__title">Питание</h3>
                    <span class="bat__text"><?php the_field('block6-text'); ?></span>
                    <div class="bat__list">
                        <?php if( have_rows('block6-list') ): ?>
                            <?php while( have_rows('block6-list') ): the_row(); ?>

                                <div class="bat__item">
                                    <img src="<?php the_sub_field('img'); ?>" alt="">
                                    <span class="item__text"><?php the_sub_field('text'); ?></span>
                                </div>

                            <?php endwhile; ?>

                        <?php endif; ?>
                    </div>
                    <span class="bat__text"><?php the_field('block6-text2'); ?></span>
                </div>
            </div>
        </div>
    </div>

    <div class="s-frost">
        <div class="inner">
            <div class="frost__list">
                <div class="frost__descr">
                    <span class="num">03</span>
                    <h3 class="site__title">Охлаждение</h3>
                    <span class="frost__text"><?php the_field('block7-text'); ?></span>
                </div>
                <div class="frost__img"><img src="<?php the_field('block7-img'); ?>" alt=""></div>
            </div>
        </div>
    </div>

    <div class="home-cost">
        <div class="inner">
            <div class="cost__block">
                <h3 class="site__title"><?php the_field('block8-title'); ?></h3>
                <span class="cost__text"><?php the_field('block8-text'); ?></span>
            </div>
        </div>
    </div>

    <div class="ic-form">
        <div class="inner">
            <div class="form__container">
                <div class="form__list">
                    <div class="form__descr">
                        <span class="form__text"><?php the_field('form1-title'); ?></span>
                    </div>
                    <div class="form__img"><img src="<?php the_field('form1-img'); ?>" alt=""></div>
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

    <div class="s-battary">
        <div class="inner">
            <div class="battary__list">
                <div class="battary__img">
                    <img src="<?php the_field('block9-img'); ?>" alt="">
                </div>
                <div class="battary__descr">
                    <span class="num">04</span>
                    <h3 class="site__title">Доступ</h3>
                    <span class="bat__text"><?php the_field('block9-text'); ?></span>

                    <span class="bat__text2"><?php the_field('block9-text2'); ?></span>
                </div>
            </div>
        </div>
    </div>

    <div class="s-security">
        <div class="inner">
            <div class="sec__list">
                <div class="sec__title">
                    <span class="sec__text">Улучшаем безопасность серверной</span>
                </div>
                <?php if( have_rows('block10-list') ): ?>
                    <?php while( have_rows('block10-list') ): the_row(); ?>

                        <div class="sec__item">
                            <img src="<?php the_sub_field('img'); ?>" alt="">
                            <span class="item__title"><?php the_sub_field('title'); ?></span>
                            <span class="item__text"><?php the_sub_field('text'); ?></span>
                            <?php $url = get_sub_field('url'); ?>
                            <?php if( !empty($url) ) { ?>
                                <a href="<?php the_sub_field('url'); ?>">узнать подробнее о видеонаблюдении</a>
                            <?php } ?>
                            
                        </div>

                    <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="s-added">
        <div class="inner">
            <div class="add__title">
                <span class="num">05</span>
                <h3 class="site__title">Дополнительные системы</h3>
            </div>
            <div class="add__list">
                <?php if( have_rows('block11-list') ): ?>
                    <?php while( have_rows('block11-list') ): the_row(); ?>

                        <div class="add__col">
                            <div class="add__item">
                                <div class="add__img">
                                    <img src="<?php the_sub_field('img'); ?>" alt="">
                                </div>
                                <div class="add__descr">
                                    <span class="descr__title"><?php the_sub_field('title'); ?></span>
                                    <span class="descr__text"><?php the_sub_field('text'); ?></span>
                                </div>
                            </div>
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
                    <span class="form__title"><?php the_field('form2-title'); ?></span>
                    <span class="form__text"><?php the_field('form2-text'); ?></span>
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

    <div class="s-preym">
        <div class="inner">
            <div class="pre__content">
                <div class="pre__list">
                    <div class="pre__title">
                        <span class="pre__text">Об особенностях работы</span>
                    </div>
                    <?php if( have_rows('block12-list') ): ?>
                        <?php while( have_rows('block12-list') ): the_row(); ?>

                            <div class="aswell__item">
                                <span class="num"><?php the_sub_field('num'); ?></span>
                                <span class="blue__block"></span>
                                <img src="<?php the_sub_field('img'); ?>" alt="">
                                <span class="aswell__item-title"><?php the_sub_field('title'); ?></span>
                                <span class="aswell__text"><?php the_sub_field('text'); ?></span>
                            </div>

                        <?php endwhile; ?>

                    <?php endif; ?>
                </div>
                <div class="pre__img">
                    <img src="<?php the_field('block12-img'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>