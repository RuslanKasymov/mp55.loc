$(function () {
    $("#phone1").mask("8(999) 999-9999");
    $("#phone2").mask("8(999) 999-9999");
    $('.obor label').on('click', function () {
        var price;
        var result;
        if (!$(this).parent().children('input[type="checkbox"]').is(":checked")) {
            price = parseInt($('#dop_obor')[0].value) + parseInt($(this).parent().children(".obor_price").children(".price")[0].innerText);
            $('#dop_obor')[0].value = price;
            $('#price_dop')[0].innerText = price;
            result = parseInt($('#prod_price')[0].innerText) + price;

            $('#result')[0].innerText = result;
        } else {
            price = parseInt($('#dop_obor')[0].value) - parseInt($(this).parent().children(".obor_price").children(".price")[0].innerText);
            result = parseInt($('#prod_price')[0].innerText) + price;
            $('#dop_obor')[0].value = price;
            $('#price_dop')[0].innerText = price;
            $('#result')[0].innerText = result;
        }
    });
    $('#order_submit').on('click', function () {
        var list_obor = '';

        $('.obor input[type="checkbox"]').each(function () {
            if ($(this).is(":checked")) {
                list_obor += $(this).parent().children(".obor_title")[0].innerText + ', ';
            }
        });
        $('#list_obor')[0].value = list_obor;
        $('#form_order').submit();
    })
});
$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $('#scroll-to-top').fadeIn();
    } else {
        $('#scroll-to-top').fadeOut();
    }
});
// scroll body to 0px on click
$('#scroll-to-top').click(function () {
    $('#scroll-to-top').tooltip('hide');
    $('body,html').animate({
        scrollTop: 0
    }, 800);
    return false;
});

$('#scroll-to-top').tooltip('show');
