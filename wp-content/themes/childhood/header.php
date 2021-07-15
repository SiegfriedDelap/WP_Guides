<!-- Вариант структуры логотипа классический
<div class="header__logo">
    <?php the_custom_logo(); ?>
</div> -->

<!-- 
Вариант собственной структуры логотипа 
<a href="<?php echo get_home_url(); ?>" class="header__logo">
    <img src="<?php 
        // получаем ссылку на логотип
        $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); 
        // выводим
        echo $custom_logo__url[0]; 
    ?>" alt="World" class="header__logo-img">
</a> -->

<header>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-11 col-sm-12 col-md-12 col-lg-3">
                        <div class="header__logo">
                            <?php the_custom_logo(); ?>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-9 offset-lg-0 col-xl-7 offset-xl-2 ">
                        <div class="header__contacts">
                            <div class="header__contacts-item">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/svg/email.svg" alt="почта" class="header__contacts-logo">
                                <a href= "<?php the_field('mail', 2); ?>" class="header__contacts-mail"> <?php the_field('mail', 2); ?> </a>
                            </div>
                            <div class="header__contacts-item">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/svg/phone.svg" alt="телефон" class="header__contacts-logo">
                                <div class="header__contacts-tel">
                                    <a href="tel:+797867834347">+797867834347</a>
                                    <a href="tel:+797867834358">+797867834358</a>
                                </div>
                            </div>
                            <div class="header__contacts-item">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/svg/pointer.svg" alt="указатель" class="header__contacts-logo">
                                <address>ул. Василисы Кожиной, 1<br>
                                    Москва, Россия, 121096</address>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="row" data-slide="1">
                    <ul class="header__nav">
                        <li>
                            <a class="header__nav-item" href="#about">Про компанию</a>
                        </li>
                        <li>
                            <a class="header__nav-item" href="#specialists">Наша команда</a>
                        </li>
                        <li>
                            <a class="header__nav-item" href="#toys">Игрушки</a>
                        </li>
                        <li>
                            <a class="header__nav-item" href="#aboutus">Наша история</a>
                        </li>
                        <li>
                            <a class="header__nav-item" href="#contacts">Контакты и отзывы</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header__hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </header>