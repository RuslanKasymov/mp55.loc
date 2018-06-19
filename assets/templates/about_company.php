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
                        Контакты
                        <img src="/assets/theme/images/title_line.png" alt="линия">
                    </div>
                </div>
                <div class="col-12">
                    <div class="contact_text">
                        Мы ждем ваших звонков каждый день с 9:00 и до 19:00. Так же будем рады увидеть Вас в нашем офисе на Лескова 6.
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div id="map">
                <iframe src="https://yandex.ru/map-widget/v1/-/CBq25BdXwB" width="100%" height="400" frameborder="1" allowfullscreen="true"></iframe>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="contact_block">
                            Адрес:
                            <div class="text_red">[[*ContactsAddress]]</div>

                            Почтовый индекc:
                            <div class="text_red">[[*ContactsIndex]]</div>

                            Телефон:
                            <div class="text_red">[[*ContactsTel]]</div>

                            Email:
                            <div class="text_red">[[*ContactsEmail]]</div>

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
