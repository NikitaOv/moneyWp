<?php
/*
Template Name: О нас
*/
?>

<?php
    get_header('white');
?>

<section class="about">
    <div class="container">
        <div class="title">О нас</div>
        <div class="about-block">
            <img src="<?php echo bloginfo('template_url');?>/assets/img/lol.jpg" alt="lol" class="about-block__img">
            <div class="about-block__text">Мы - совершенно не понимаем, что продаем</div>
        </div>

        <div class="about-block">
            <div class="about-block__text">ЛОЛ, этот неудачник у нас что-то купил</div>
            <img src="<?php echo bloginfo('template_url');?>/assets/img/hands.jpg" alt="hands" class="about-block__img about-block__img_right">
        </div>

        <div class="about-block">
            <img src="<?php echo bloginfo('template_url');?>/assets/img/cool.jpg" alt="cool" class="about-block__img">
            <div class="about-block__text">А ещё мы крутые</div>
        </div>
    </div>
</section>

<?php
    get_footer();
?>