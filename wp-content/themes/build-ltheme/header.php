<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
    <title>HouseVOP</title>
</head>

<body>
    <div class="box">
        <header class="header" id="header">
            <div class="container">
                <nav class="header__nav nav">
                    <div class="logo">
                        <p>HouseVOP</p>
                        <p>ЖИТЛОВИЙ КОМПЛЕКС</p>
                    </div>
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#" class="nav__link">Про комплекс</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__link">Район</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__link">Каталог квартир</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__link">Іпотека</a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">Контакти</a>
                        </li>
                    </ul>
                    <span class="burger-menu" onclick="openNav()">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/burger.svg" alt="burger">
                    </span>
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/close.svg" alt="close">
                        </a>
                        <ul class="nav__list-second">
                            <li class="nav__item">
                                <a href="#"> Про комплекс</a>
                            </li>
                            <li class="nav__item">
                                <a href="#"> Район</a>
                            </li>
                            <li class="nav__item">
                                <a href="#"> Каталог квартир</a>
                            </li>
                            <li class="nav__item">
                                <a href="#"> Іпотека</a>
                            </li>
                            <li class="nav__item">
                                <a href="#contact"> Контакти</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="header__main">
                    <div class="header__title">
                        <h1>Житловий комплекс в історичному центрі</h1>

                        <img src="<?php bloginfo('template_url'); ?>/assets/img/mouse.svg" alt="mouse-svg">
                    </div>
                    <div class="header__contact">
                        <a href="https://www.google.com.ua/maps/place/%D1%83%D0%BB.+%D0%9A%D1%80%D0%B5%D1%89%D0%B0%D1%82%D0%B8%D0%BA,+%D0%9A%D0%B8%D0%B5%D0%B2,+02000/@50.4475854,30.5220257,17z/data=!3m1!4b1!4m5!3m4!1s0x40d4ce56b2456d3b:0xd062ae171b57e947!8m2!3d50.4475854!4d30.5220257"
                            target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/Point.svg"
                                alt="point"><?php the_field('adres') ?></a>
                        <a href="tel:<?php the_field('phone')?>"> <img
                                src="<?php bloginfo('template_url'); ?>/assets/img/phone.svg" alt="phone">
                            <?php the_field('phone') ?></a>
                    </div>
                </div>
            </div>
        </header>