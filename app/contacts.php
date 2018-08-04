<? include('header.php'); ?>

<section class="section-main">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="b-breadcrumbs">
          <ul class="b-breadcrumbs__ul">
            <li class="b-breadcrumbs__li">
              <a href="#" class="b-breadcrumbs__link">Главная</a>
            </li>
            <li class="b-breadcrumbs__li">
              <a href="#" class="b-breadcrumbs__link">Контакты</a>
            </li>
          </ul>
        </div>
        <h2>Контакты</h2>
        <br>
        <section class="contacts-section">
          <div class="row">
            <div class="col-lg-5 col-md-12">
              <div class="b-contact-main">
                <div class="b-contact-main__path">
                  <div class="b-contact-main__title">Москва</div>
                </div>
                <div class="b-contact-main__path">
                  <p>Интернет-магазин </p>
                </div>
                <div class="b-contact-main__path">
                  <p><b>Телефон: <a href="tel:84956637212">8 (495) 663-72-12</a></b></p>
                  <p><b>E-mail: <a href="mailto:eshop@angagement.ru">eshop@angagement.ru</a></b></p>
                </div>
                <div class="b-contact-main__path">
                  <p><b>Адрес шоурума:</b></p>
                  <p>Варшавское шоссе, дом 45</p>
                  <p>метро Нагатинская </p>
                </div>
                <div class="b-contact-main__path">
                  <p><b>Оптовый отдел Москва:</b></p>
                  <p>Телефон: <a href="tel:+7-916-248-05-22">+7-916-248-05-22</a></p>
                  <p>E-mail: <a href="mailto:reg_manager@angagement.ru">reg_manager@angagement.ru</a></p>
                  <p>Контактное лицо - Михаил Грузинский</p>
                </div>
                <div class="b-contact-main__path">
                  <p><b>Адрес регионального склада самовывоза:</b></p>
                  <p>Щербинка, ул. Южная, д. 20</p>
                </div>
              </div>
            </div>
            <div class="col-lg-7 col-md-12">
              <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
              <div id="map" style="width: 100%; height: 400px"></div>
              <script type="text/javascript">
                  // Функция ymaps.ready() будет вызвана, когда
                  // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
                  ymaps.ready(init);
                  function init(){ 
                      // Создание карты.    
                      var myMap = new ymaps.Map("map", {
                          // Координаты центра карты.
                          // Порядок по умолчнию: «широта, долгота».
                          // Чтобы не определять координаты центра карты вручную,
                          // воспользуйтесь инструментом Определение координат.
                          center: [55.491326, 37.562578],
                          // Уровень масштабирования. Допустимые значения:
                          // от 0 (весь мир) до 19.
                          zoom: 16
                      });

                      var myPlacemark = new ymaps.Placemark([55.490350, 37.562667], {}, {
                        preset: 'islands#redDotIcon'
                      });

                      myMap.geoObjects.add(myPlacemark);
                  }
              </script>
            </div>
            <div class="col-md-12">
              <div class="b-contact-desc">
                <div class="b-contact-desc__path">
                  <div>
                    <p><b>Приемная фабрики:</b> <a href="tel:8 (861) 210-37-32">8 (861) 210-37-32</a></p>
                  </div>
                  <div>
                    <p><b>Отдел качества:</b> <a href="tel:8 (861) 210-11-28">8 (861) 210-11-28</a></p>
                  </div>
                  <div>
                    <p><b>Отдел ОПТовых продаж:</b> <a href="tel:8 (918) 354-95-15">8 (918) 354-95-15</a></p>
                    <p><b>E-mail:</b> <a href="mailto:opt2@angagement.ru">opt2@angagement.ru</a> </p>
                    <p><b>Skype:</b> ang_divanopt</p>
                  </div>
                  <div>
                    <p><b>Отдел закупок:</b> <a href="tel:8 (861) 210-37-32">8 (861) 210-37-32</a></p>
                  </div>
                </div>
                <div class="b-contact-desc__path">
                  <div>
                    <div class="b-contact-desc__title">Реквизиты:</div>
                  </div>
                  <div>
                    <p><b>Общество с ограниченной ответственностью «Фабрика Ангажемент»</b></p>
                  </div>
                  <div>
                    <p><b>ИНН</b>    2312166982</p>
                  </div>
                  <div>
                    <p><b>КПП</b>    231201001</p>
                  </div>
                  <div>
                    <p><b>ОГРН</b>   1092312010251</p>
                  </div>
                  <div>
                    <p><b>Юридический адрес:</b></p>
                    <p>350066,Россия, Краснодарский край, г. Краснодар, </p>
                    <p>ул. Стасова-Сормовская дом 178-180/1</p>
                  </div>
                  <div>
                    <p><b>Почтовый адрес:</b> </p>
                    <p>350066,Россия, Краснодарский край, г. Краснодар, </p>
                    <p>ул. Стасова-Сормовская дом 178-180/1 </p>
                  </div>
                </div>
                <div class="b-contact-desc__path">
                  <div>
                    <p><b>Официальным представителем фабрики "Ангажемент" в регионах является ИП Джасте</b></p>
                  </div>
                  <div>
                    <p><b>Реквизиты ИП Джасте:</b></p>
                  </div>
                  <div>
                    <p><b>Адрес:</b> 350911, г. Краснодар, пос. Пашковский, Ул.Выгонная, д. 20, кв. 105</p>
                  </div>
                  <div>
                    <p><b>ИНН</b>    231299662935</p>
                  </div>
                  <div>
                    <p><b>ОГРН</b>   313231215400112</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
  
      </div>
    </div>
  </div>
</section>

<? include('footer.php'); ?>