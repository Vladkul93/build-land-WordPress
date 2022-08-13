<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>
<main>
    <div class="picture-img">
        <div class="img-svg">
            <div class="picture">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/Group1.svg" alt="Group1">
                <p>Поруч історичні парки та сквери</p>
            </div>
            <div class="picture">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/Group2.svg" alt="Group2">
                <p> Повністю облаштований</p>
            </div>
            <div class="picture group3">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/Group3.svg" alt="Group3">
                <p>10 фонтанів на території</p>
            </div>
            <div class="picture position">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/Group4.svg" alt="Group4">
                <p class="width">6 км велодоріжок</p>
            </div>
            <p class="roman2">
                II
            </p>
        </div>
    </div>
    <div class="apartment">
        <h2>Наші квартири</h2>
        <p class="roman3">III</p>
        <div class="apartment__variant">
            <div class="apartment__variant">
                <?php
                global $post;
                $myposts = get_posts([ 
                    'numberposts' => -1,
                ]);
                if( $myposts ){
                    foreach( $myposts as $post ){
                        setup_postdata( $post );
                        ?>
                <div class="house1">
                    <?php the_post_thumbnail(array(515,320)); ?>
                    <p><?php the_title(); ?></p>
                </div>
                <?php 
                    }
                } 
                wp_reset_postdata(); 
                ?>
            </div>
        </div>
    </div>
    <div class="background__apartment">
        <div class="apartment__box">
            <div class="text__apartment">
                <h2>Хочете подивитися?</h2>
                <p>Обираючи місце майбутнього проживання, спершу слід поспілкуватись з місцевими жителями,
                    дізнатися відгуки про той чи інший мікрорайон. А ще можна переглянути останні новини,
                    пов’язані з тією чи іншою місцевістю у засобах масової інформації. Якщо мікрорайон добре
                    знайомий, можна опиратися на власні судження.</p>
            </div>
            <div class="form__apartment">
                <form class="form__main" action="#">
                    <input type="text" placeholder="Ваше ім'я">
                    <input class="phone__input" type="phone" placeholder="Ваш телефон">
                    <p>Ми нікому не передаємо ваші дані. I не зберігаємо ваш номер у базу</p>
                    <button>Подивитись район</button>
                </form>
            </div>
        </div>
    </div>
    <div class="video__box">
        <div class="apartment__video">
            <video preload="auto" class="video__item" controls
                poster="<?php bloginfo('template_url'); ?>/assets/img/video.jpg">
                <source src="<?php bloginfo('template_url'); ?>/assets/img/videoplayback.mp4" type="video/mp4">
            </video>
        </div>
        <p class="roman4">
            IV
        </p>
    </div>
    <div class="map__box">
        <h2>Район на карті</h2>
        <div class="map__main">
            <div class="google__map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.4484167798173!2d30.523012315697773!3d50.45137397947553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce505b8be8cd%3A0x6fbde9b021ab61dd!2z0JrRgNC10YnQsNGC0LjQug!5e0!3m2!1sru!2sua!4v1659368651454!5m2!1sru!2sua"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <p class="roman5">
            V
        </p>
    </div>
    <div class="form__box">
        <h2>Є питання?</h2>
        <form action="#" class="form__box form__flex">
            <p>*Ми нікому не передаємо ваші дані. I не зберігаємо ваш номер у базу.</p>
            <input class="phone__input" type="text" placeholder="Ваше ім'я">
            <input class="phone__input" type="phone" placeholder="Ваш телефон">
            <button>Подивитись район</button>
        </form>
    </div>
</main>
<?php get_footer(); ?>