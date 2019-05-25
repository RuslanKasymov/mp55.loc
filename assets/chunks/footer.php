 <footer class="footer_bg">
        <div class="container ">
            <div class="row">
                <div class="col-sm-3">
                    <div class="logo logo_footer">
                        <a href="/"><img src="/assets/theme/images/main_footer_logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer_nav">
                                <div class="footer_nav_item"><a href="[[~2]]">Одноосные</a></div>
                                <div class="footer_nav_item"><a href="[[~7]]">Двуосные</a></div>
                                <div class="footer_nav_item"><a href="[[~8]]">Спец. прицепы</a></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="contacts">
                                <div>г.Омск, ул.Лескова,4</div>
                                <div><a href="tel:89507862092">+7(950)786-20-92</a></div>
                                <div><a href="mailto:info@fabrika.ru">info@fabrika.ru</a></div>
                                <div class="social">
                                    <a href="#"><img src="assets/theme/images/footer_soc_fb.png" alt="facebook"></a>
                                    <a href="#"><img src="assets/theme/images/footer_soc_ok.png" alt="vk"></a>
                                    <a href="#"><img src="assets/theme/images/footer_soc_vk.png" alt="ok"></a>
                                </div>
                            </div>
                        </div>
						[[!AjaxForm?
						&snippet=`FormIt`
						&hooks=`email`
						&form=`Form.footerForm`
						&emailTpl=`Form.footerForm.FormTpl`
						&emailSubject=`Заказ звонка[[++site_name]]`
						&emailTo=`info@fabrika55.ru`
						&validate=`name:required,
						phone:required`
						&validationErrorMessage=`В форме содержатся ошибки!`
						&successMessage=`Сообщение успешно отправлено`
						]]
                        <div class="col-lg-4">
                            <div class="footer_nav_cl md-d_n">
                                <div><a href="[[~15]]">Галерея</a></div>
                                <div><a href="[[~13]]">О компании</a></div>
                                <div><a href="[[~4]]">Контакты</a></div>
                                <div><a href="#">Вопрос ответ</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>