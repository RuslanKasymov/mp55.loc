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
ymaps.ready(function () {
    var myMap = new ymaps.Map('map_contact', {
            center: [54.987962, 73.441554],
            zoom: 16,
            controls: []
        }),
        // Создаём макет содержимого.
        MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
        ),
        myPlacemarkWithContent = new ymaps.Placemark([54.987962, 73.433654], {});
    myMap.geoObjects
        .add(myPlacemarkWithContent);
});
