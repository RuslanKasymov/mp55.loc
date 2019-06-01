<!DOCTYPE html>
<html lang="ru">
<head>
    [[$head]]
</head>
<body>
<div class="wrapper">
    <div class="content">
        <div class="content-fluid main_head_bg">
            [[$header]]
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title">
                        Аренда прицепов
                        <img src="/assets/theme/images/title_line.png" alt="линия">
                    </div>
                </div>
              	<div class="col-sm-12">
                    <p class="m-b_50">
                        Если у Вас нет необходимости покупать прицеп и нужда  в нем лишь на короткий срок, то специально для Вас „Магазин прицепов“ предоставляет
                        возможность взять прицепы в аренду/на прокат под небольшой залог. Вам предосталяется прицепы с грузоподъемностью до 515 килограмм! Прицепы могут
                        использоваться как для перевозки мотоциклов, квадроциклов, снегоходов и другой легкой техники, так и для перевозки мебели и крупногабаритных
                        предметов. Таблицу цен на аренду прицепов вы можете увидеть ниже:
                    </p>
				</div>
				<div class="col-lg-6 offset-lg-3">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col" class="text-right">Срок аренды
                                в том числе неполные 24 часа</th>
                            <th scope="col">Стоимость аренды
                                рублей за 24 часа</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-right">1-5 суток включительно</td>
                            <td>700 ₽</td>
                        </tr>
                        <tr>
                            <td class="text-right">6-15 суток включительно</td>
                            <td>550 ₽</td>
                        </tr>
                        <tr>
                            <td class="b-bottom-gray text-right">более 15 суток</td>
                            <td class="b-bottom-gray">450 ₽</td>
                        </tr>
                        <tr>
                            <td class="text-right">Запасное колесо</td>
                            <td>200 ₽</td>
                        </tr>
                        <tr>
                            <td class="text-right">Залог*</td>
                            <td>3000 ₽</td>
                        </tr>
                        </tbody>
                    </table>
                    <p class="f-w_bold">*Залог является обеспечением исполнения обязательств Арендатора</p>
                </div>
                <div class="col-sm-12 m-b_50">
                    Для аренды предоставляется 2 вида прицепов: Аляска АЛК-7143 (ФЕРМЕР) и Аляска АЛК-Стрела 1,6. Характеристики прицепов
                </div>
                [[!getResources?
                &parents=`2`
                &tpl=`Rent.Products`
                &includeTVs=`1`
                &tvFilters=`inRent==1`
                &sortdir=`ASC`
                ]]
			</div>
		</div>
        <div class="container-fluid order_bg" id="order_block">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="order order_rent">
                            [[!AjaxForm?
                            &snippet=`FormIt`
                            &hooks=`email`
                            &form=`Form.RentForm`
                            &emailTpl=`Form.RentForm.FormTpl`
                            &emailSubject=`Сообщение с сайта [[++site_name]]`
                            &emailTo=`fabrika-omsk@mail.ru`
                            &validate=`name:required,
                            phone:required`
                            &validationErrorMessage=`В форме содержатся ошибки!`
                            &successMessage=`Сообщение успешно отправлено`
                            ]]
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="logos">
                        <div class="item_logs">
                            <img src="/assets/theme/images/maestro.png" alt="maestro">
                        </div>
                        <div class="item_logs">
                            <img src="/assets/theme/images/mastercard.png" alt="mastercard">
                        </div>
                        <div class="item_logs">
                            <img src="/assets/theme/images/visa.png" alt="visa">
                        </div>
                        <div class="item_logs">
                            <img src="/assets/theme/images/sber.png" alt="сбербанк">
                        </div>
                        <div class="item_logs">
                            <img src="/assets/theme/images/mir.png" alt="мир">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	[[$footer]]
</div>
[[$scripts]]
</body>
</html>
