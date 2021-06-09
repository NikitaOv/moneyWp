<?php
/*
Template Name: Корзина
*/
?>

<?php
    get_header('white');
?>

<section class="cart">
    <div class="container">

        <div class="title">Корзина</div>
        <div class="order-list">
            <div class="order">

                <div class="order__left">
                    <div class="order__img-wrapper">
                        <img src="<?php echo bloginfo('template_url');?>/assets/img/money.png" alt="money" class="order__img">
                    </div>

                    <div class="order__text">Купюра 100$</div>
                </div>

                <div class="order__right">
                    <div class="counter">
                        <button class="counter__minus">-</button>
                        <div class="counter__text">1</div>
                        <button class="counter__plus">+</button>
                    </div>

                    <img src="<?php echo bloginfo('template_url');?>/assets/icons/trash.svg" alt="trash" class="trash-icon">
                </div>

            </div>

            <div class="order">

                <div class="order__left">
                    <div class="order__img-wrapper">
                        <img src="<?php echo bloginfo('template_url');?>/assets/img/money.png" alt="money" class="order__img">
                    </div>

                    <div class="order__text">Купюра 100$</div>
                </div>

                <div class="order__right">
                    <div class="counter">
                        <button class="counter__minus">-</button>
                        <div class="counter__text">1</div>
                        <button class="counter__plus">+</button>
                    </div>

                    <img src="<?php echo bloginfo('template_url');?>/assets/icons/trash.svg" alt="trash" class="trash-icon">
                </div>

            </div>

        </div>
        <button class="btn btn_cart">ОФОРМИТЬ ЗАКАЗ</button>

    </div>
</section>

<?php
    get_footer();
?>