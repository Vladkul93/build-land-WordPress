<footer>
    <div class="footer__box" id="contact">
        <div class="logo">
            <p>HouseVOP</p>
            <p>ЖИТЛОВИЙ КОМПЛЕКС</p>
        </div>
        <ul>
            <li>Про комплекс</li>
            <li>Район</li>
            <li>Каталог квартир</li>
            <li>Іпотека</li>
            <li>Контакти</li>
        </ul>
        <ul>
            <li>Про комплекс</li>
            <li>Район</li>
            <li>Каталог квартир</li>
            <li>Іпотека</li>
            <li>Контакти</li>
        </ul>
        <ul>
            <li>Адреса: Хрещатик</li>
            <li><a class="phone__footer" href="tel:<?php the_field('phone')?>">Телефон: <?php the_field('phone')?></a>
            </li>
            <li>Відділ продажів: 10:00 - 20:00</li>
            <li><a class="mail__footer" href="mailto:vip@housevip.com">E-mail: <span>vip@housevip.com</span></a>
            </li>
            <li class="footer__icon">
                <a href="<?php the_field('youtube') ?>"><img
                        src="<?php bloginfo('template_url'); ?>/assets/img/youtube.svg" alt="youtube"></a>
                <a href="<?php the_field('vk') ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/Vk.svg"
                        alt="Vk"></a>
                <a href="<?php the_field('facebook') ?>"><img
                        src="<?php bloginfo('template_url'); ?>/assets/img/facebook.svg" alt="facebook"></a>
                <a href="<?php the_field('instagram') ?>"><img
                        src="<?php bloginfo('template_url'); ?>/assets/img/instagram.svg" alt="instagram"></a>
            </li>
        </ul>
    </div>
</footer>
<a href="#header" class="top">
    <img src="<?php bloginfo('template_url'); ?>/assets/img/up.png" alt="up">
</a>
</div>

<?php wp_footer(); ?>

</body>

</html>