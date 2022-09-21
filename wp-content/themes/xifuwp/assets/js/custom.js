jQuery(document).ready(function($) {
    console.log('OKAY');
    $('.js-people-saying.owl-carousel').owlCarousel({
        items: 2,
        margin: 25
    });

    $('body').on('click', '.plus', function() {
        var quantity = parseInt($(this).parents('.group-quantity').find('.number input').val());
        if (quantity != 0) {
            quantity += 1;
        }
        $(this).parents('.item-image-cart').find('.add-to-cart-shop').attr('data-quantity', quantity);
        $(this).parents('.group-quantity').find('.number input').val(quantity);
        $('.woocommerce-cart-form .update-cart-btn').removeAttr('disabled').removeClass('tag-a-disabled');
        $(this).parents('.group-quantity').find('.number input').change();
    });

    $('body').on('click', '.minus', function() {
        var quantity = parseInt($(this).parents('.group-quantity').find('.number input').val());
        if (quantity != 0) {
            quantity -= 1;
            if (quantity === 0) {
                quantity = 1;
            }
        }
        $(this).parents('.item-image-cart').find('.add-to-cart-shop').attr('data-quantity', quantity);
        $(this).parents('.group-quantity').find('.number input').val(quantity);
        $('.woocommerce-cart-form .update-cart-btn').removeAttr('disabled').removeClass('tag-a-disabled');
        $(this).parents('.group-quantity').find('.number input').change();
    });

    $(window).scroll(function() {
        $(window).scrollTop() >= 100 ? $(".header").addClass("fixed") : $(".header").removeClass("fixed")
    });

});

