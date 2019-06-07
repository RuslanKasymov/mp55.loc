 <footer class="footer_bg">
        <div class="container ">
            <div class="row">
                <div class="col-sm-3">
                    <div class="logo logo_footer">
                        <a href="/"><img src="/assets/theme/images/main_footer_logo.png" alt="магазин прицепов"></a>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer_nav">
                                <div class="footer_nav_item"><a href="[[~2]]">Бортовые</a></div>
                                <div class="footer_nav_item"><a href="[[~8]]">Спец. прицепы</a></div>
                                <div class="footer_nav_item"><a href="[[~17]]">Аренда</a></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="contacts">
                                <div>г.Омск, ул.Лескова,4/2</div>
                                <div><a href="tel:89533926234">+7(953)392-62-34</a></div>
                                <div><a href="mailto:info@mp55.ru">info@mp55.ru</a></div>
                                <div class="social m-b_25">
                                    <a href="https://vk.com/fabrikajalousie"><img src="/assets/theme/images/footer_soc_ok.png" alt="vk"></a>
                                    <a href="https://ok.ru/fabrikazhalousie"><img src="/assets/theme/images/footer_soc_vk.png" alt="ok"></a>
                                    <a href="https://www.instagram.com/fabrika.jalousie/" target="_blank"><img src="/assets/theme/images/footer_soc_insta.png" alt="ok"> </a>
                                </div>
                                <div>
                                    Находясь на нашем сайте, Вы подписываете<br><a href="[[~19]]">политику конфиденциальности</a>
                                </div>
                            </div>

                        </div>
						[[!AjaxForm?
						&snippet=`FormIt`
						&hooks=`email`
						&form=`Form.footerForm`
						&emailTpl=`Form.footerForm.FormTpl`
						&emailSubject=`Заказ звонка [[++site_name]]`
						&emailTo=`fabrika-omsk@mail.ru`
                        &emailFrom=`fabrika-omsk@mail.ru`
						&validate=`phone1:required`
						&validationErrorMessage=`В форме содержатся ошибки!`
						&successMessage=`Сообщение успешно отправлено`
						]]
                        <div class="col-lg-4">
                            <div class="footer_nav_cl md-d_n">
                                <div><a href="[[~15]]">Галерея</a></div>
                                <div><a href="[[~13]]">О компании</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     <a id="scroll-to-top" href="#" role="button" title="Вернуться наверх" data-toggle="tooltip" data-placement="left"><span class="icon-arrow-up2"></span></a>
    </footer>
