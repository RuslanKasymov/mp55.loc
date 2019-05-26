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
                        Если у Вас нет необходимости покупать прицеп и нужда  в нем лишь на короткий срок, то специально для Вас, „Магазин прицепов“ предоставляет
                        возможность взять прицепы в аренду под залог. Вам предосталяется прицепы с грузоподъемностью до 515 килограмм! Прицепы могут
                        использоваться как для перевозки мотоциклов, квадрациклов, снегоходов и другой легкой техники, до перевозки мебели и крупногабаритных
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
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    [[getImageList?
                                    &tvname=`MProductImage`
                                    &tpl=`MProduct.ImageDots.RowTpl`
                                    &docid=`11`
                                    ]]
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    [[getImageList?
                                    &tvname=`MProductImage`
                                    &tpl=`MProduct.Image.RowTpl`
                                    &docid=`11`
                                    ]]
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="title_tovar">
                                [[#11.pagetitle]]
                            </div>
                            <div class="harateristic m-b_50">
                                <div class="har-title">Технические характеристики</div>
                                [[getImageList?
                                &tvname=`MProductHaracter`
                                &tpl=`MProduct.Haracter.RowTpl`
                                &docid=`11`
                                ]]
                                <div class="har-title">Грузоподъемность</div>
                                [[getImageList?
                                &tvname=`MProductGruz`
                                &tpl=`MProduct.Haracter.RowTpl`
                                &docid=`11`
                                ]]
                                <div class="har-title">Описание</div>
                                <div>
                                    [[#11.content]]
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    [[getImageList?
                                    &tvname=`MProductImage`
                                    &tpl=`MProduct.ImageDots.RowTpl`
                                    &docid=`18`
                                    ]]
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    [[getImageList?
                                    &tvname=`MProductImage`
                                    &tpl=`MProduct.Image.RowTpl`
                                    &docid=`18`
                                    ]]
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="title_tovar">
                                [[#18.pagetitle]]
                            </div>
                            <div class="harateristic m-b_50">
                                <div class="har-title">Технические характеристики</div>
                                [[getImageList?
                                &tvname=`MProductHaracter`
                                &tpl=`MProduct.Haracter.RowTpl`
                                &docid=`18`
                                ]]
                                <div class="har-title">Грузоподъемность</div>
                                [[getImageList?
                                &tvname=`MProductGruz`
                                &tpl=`MProduct.Haracter.RowTpl`
                                &docid=`18`
                                ]]
                                <div class="har-title">Описание</div>
                                <div>
                                    [[#18.content]]
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
        <div class="container-fluid order_bg">
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
                            &emailTo=`info@fabrika55.ru`
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
