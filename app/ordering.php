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
              <a href="#" class="b-breadcrumbs__link">Оформление заказа</a>
            </li>
          </ul>
        </div>
        <h2>Оформление заказа</h2>
        <br>
        <div class="row align-items-start" >
          <div class="col-lg-4 col-md-12 order-lg-2" >
            <div class="b-ordering-info ">
              <div class="b-ordering-info__path">Товаров на:  23 905 ₽</div>
              <div class="b-ordering-info__path">Доставка:  1 300 ₽</div>
              <div class="b-ordering-info__bottom">
                Итого со скидкой:  <span class="b-ordering-info__price">25 205 ₽</span>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-12 order-lg-1" >
            <div class="b-ordering">
              <div class="b-ordering__header" style="display: none;">Товары в заказе</div>
              <div class="b-ordering__body" style="display: block;">
                <div class="b-ordering-path">
                  <div class="b-ordering__title">Товары в заказе</div>
                  <table class="b-ordering-table-product">
                    <tbody>
                      <tr>
                        <td>
                          <div class="b-ordering-table-product-item">
                            <div class="b-ordering-table-product-item__img">
                              <img src="img/history-img-1.png" alt="">
                            </div>
                            <div class="b-ordering-table-product-item__txt">Диван с деревянными подлокотниками «Анкона Д»</div>
                          </div>
                        </td>
                        <td>
                          <div class="b-ordering-table-product-amount">1 шт.</div>
                        </td>
                        <td>
                          <div class="b-ordering-table-product-price">23 905 ₽</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="b-ordering-path">
                  <form class="b-ordering-form-coupon">
                    <input type="text" class="b-ordering-form-coupon__input" placeholder="Введите код купона для скидки">
                    <button type="submit" class="b-ordering-form-coupon__submit">
                      <i class="icon icon-arrow-black"></i>
                    </button>
                  </form>
                </div>
                <div class="b-ordering-path">
                  <input type="submit" class="btn btn--sm btn--active b-ordering-path__btn b-ordering-path__btn--next" value="Далее">
                </div>
              </div>
  
            </div>

            <div class="b-ordering">
              <div class="b-ordering__header">Регион доставки</div>
              <div class="b-ordering__body">
                <div class="b-ordering-path">
                  <div class="b-ordering__title">Регион доставки</div>
                  <p>Тип плательщика</p>
                  <label class="b-label b-label--checkbox b-label--mb-0">
                    <input type="radio" name="ordering-choice-ur-l" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Физическое лицо</div>
                  </label>
                  <label class="b-label b-label--checkbox">
                    <input type="radio" name="ordering-choice-ur-l">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Юридическое лицо</div>
                  </label>
                  <label class="b-label">
                    <input type="text" class="b-input-city" value="Москва">
                  </label>
                  <label class="b-label">
                    <p class="b-label__txt"><span class="sign-required">*</span> Местоположение</p>
                    <input type="text" class="b-input">
                  </label>
                  <label class="b-label">
                    <p class="b-label__txt"><span class="sign-required">*</span> Индекс</p>
                    <input type="text" class="b-input">
                  </label>
                  <small>Выберите свой город в списке. Если вы не нашли свой город, выберите "другое местоположение", а город впишите в поле "Город"</small>
                </div>
                <div class="b-ordering-path">
                  <div class="d-flex flex-wrap">
                    <input type="submit" class="btn btn--sm btn--active b-ordering-path__btn b-ordering-path__btn--prev" value="Назад">
                    <input type="submit" class="btn btn--sm btn--active b-ordering-path__btn b-ordering-path__btn--next" value="Далее">
                  </div>
                </div>
              </div>
            </div>

            <div class="b-ordering">
              <div class="b-ordering__header">Доставка</div>
              <div class="b-ordering__body">
                <div class="b-ordering-path">
                  <div class="row">
                    <div class="col-md-7 d-flex flex-column justify-content-between">
                      <div>
                        <div class="b-ordering__title">Доставка</div>
                        <div class="row">
                          <div class="col-md-4">
                            <label class="b-ordering-choice">
                              <div class="b-ordering-choice__img">
                                <input type="radio" name="b-ordering-choice__delivery" checked>
                                <div class="b-checkbox-icon">
                                  <span class="icon icon-checked"></span>
                                </div>
                                <img src="img/ordering-choice-delivery1.png" alt="">
                              </div>
                              <div class="b-ordering-choice__txt">СПСР-Экспресс (ГЕПАРД-Экспресс 13)</div>
                            </label>
                          </div>
                          <div class="col-md-4">
                            <label class="b-ordering-choice">
                              <div class="b-ordering-choice__img">
                                <input type="radio" name="b-ordering-choice__delivery" checked>
                                <div class="b-checkbox-icon">
                                  <span class="icon icon-checked"></span>
                                </div>
                                <img src="img/ordering-choice-delivery1.png" alt="">
                              </div>
                              <div class="b-ordering-choice__txt">СПСР-Экспресс (ГЕПАРД-Экспресс 13)</div>
                            </label>
                          </div>
                          <div class="col-md-4">
                            <label class="b-ordering-choice">
                              <div class="b-ordering-choice__img">
                                <input type="radio" name="b-ordering-choice__delivery" checked>
                                <div class="b-checkbox-icon">
                                  <span class="icon icon-checked"></span>
                                </div>
                                <img src="img/ordering-choice-delivery1.png" alt="">
                              </div>
                              <div class="b-ordering-choice__txt">СПСР-Экспресс (ГЕПАРД-Экспресс 13)</div>
                            </label>
                          </div>
                          <div class="col-md-4">
                            <label class="b-ordering-choice">
                              <div class="b-ordering-choice__img">
                                <input type="radio" name="b-ordering-choice__delivery" checked>
                                <div class="b-checkbox-icon">
                                  <span class="icon icon-checked"></span>
                                </div>
                                <img src="img/ordering-choice-delivery1.png" alt="">
                              </div>
                              <div class="b-ordering-choice__txt">СПСР-Экспресс (ГЕПАРД-Экспресс 13)</div>
                            </label>
                          </div>
                          <div class="col-md-4">
                            <label class="b-ordering-choice">
                              <div class="b-ordering-choice__img">
                                <input type="radio" name="b-ordering-choice__delivery" checked>
                                <div class="b-checkbox-icon">
                                  <span class="icon icon-checked"></span>
                                </div>
                                <img src="img/ordering-choice-delivery1.png" alt="">
                              </div>
                              <div class="b-ordering-choice__txt">СПСР-Экспресс (ГЕПАРД-Экспресс 13)</div>
                            </label>
                          </div>
                          <div class="col-md-4">
                            <label class="b-ordering-choice">
                              <div class="b-ordering-choice__img">
                                <input type="radio" name="b-ordering-choice__delivery" checked>
                                <div class="b-checkbox-icon">
                                  <span class="icon icon-checked"></span>
                                </div>
                                <img src="img/ordering-choice-delivery1.png" alt="">
                              </div>
                              <div class="b-ordering-choice__txt">СПСР-Экспресс (ГЕПАРД-Экспресс 13)</div>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div>
                        <form class="b-ordering-form-coupon">
                          <input type="text" class="b-ordering-form-coupon__input" placeholder="Введите код купона для скидки">
                          <button type="submit" class="b-ordering-form-coupon__submit">
                            <i class="icon icon-arrow-black"></i>
                          </button>
                        </form>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="b-ordering-choice-active">
                        <div class="b-ordering-choice-active__title">СПСР-Экспресс (ГЕПАРД-Экспресс 13)</div>
                        <div class="b-ordering-choice-active__img">
                          <img src="img/ordering-choice-delivery1.png" alt="img">
                        </div>
                        <p>Самая быстрая доставка посылок в стране</p>
                        <label class="b-label b-label--checkbox">
                          <input type="checkbox" checked>
                          <div class="b-checkbox-icon">
                            <span class="icon icon-checked"></span>
                          </div>
                          <div class="b-checkbox-text">
                            <b>SMS информирование Получателя</b>
                            <p>Услуга, позволяющая путём отправки коротких SMS-сообщений информировать Получателя об идущем в его адрес отправлении/грузе</p>
                          </div>
                        </label>
                        <label class="b-label b-label--checkbox">
                          <input type="checkbox" checked>
                          <div class="b-checkbox-icon">
                            <span class="icon icon-checked"></span>
                          </div>
                          <div class="b-checkbox-text">
                            <b>Доставка лично в руки</b>
                            <p>Возможность для Отправителя заказать доставку и вручение коммерческих документов или ценных или конфиденциальных отправлений/грузов конкретному Получателю, указанному в накладной</p>
                          </div>
                        </label>
                        <div class="b-ordering-choice-active__bottom">
                          <p>Стоимость: <b>1 029.09 руб.</b></p>
                          <p>Срок доставки: <b>1-1 (дней)</b></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="b-ordering-path">
                  <div class="d-flex flex-wrap">
                    <input type="submit" class="btn btn--sm btn--active b-ordering-path__btn b-ordering-path__btn--prev" value="Назад">
                    <input type="submit" class="btn btn--sm btn--active b-ordering-path__btn b-ordering-path__btn--next" value="Далее">
                  </div>
                </div>
              </div>
            </div>

            <div class="b-ordering">
              <div class="b-ordering__header">Оплата</div>
              <div class="b-ordering__body">
                <div class="b-ordering-path">
                  <div class="row">
                    <div class="col-md-7 d-flex flex-column justify-content-between">
                      <div>
                        <div class="b-ordering__title">Оплата</div>
                        <div class="row">
                          <div class="col-md-4">
                            <label class="b-ordering-choice">
                              <div class="b-ordering-choice__img">
                                <input type="radio" name="b-ordering-choice__delivery" checked>
                                <div class="b-checkbox-icon">
                                  <span class="icon icon-checked"></span>
                                </div>
                                <img src="img/yandex-money.png" alt="">
                              </div>
                              <div class="b-ordering-choice__txt">Яндекс.Деньги</div>
                            </label>
                          </div>
                          <div class="col-md-4">
                            <label class="b-ordering-choice">
                              <div class="b-ordering-choice__img">
                                <input type="radio" name="b-ordering-choice__delivery" checked>
                                <div class="b-checkbox-icon">
                                  <span class="icon icon-checked"></span>
                                </div>
                                <img src="img/mastercard.png" alt="">
                              </div>
                              <div class="b-ordering-choice__txt">Банковские карты</div>
                            </label>
                          </div>
                          <div class="col-md-4">
                            <label class="b-ordering-choice">
                              <div class="b-ordering-choice__img">
                                <input type="radio" name="b-ordering-choice__delivery" checked>
                                <div class="b-checkbox-icon">
                                  <span class="icon icon-checked"></span>
                                </div>
                                <img src="img/terminal.png" alt="">
                              </div>
                              <div class="b-ordering-choice__txt">Терминалы</div>
                            </label>
                          </div>
                          <div class="col-md-4">
                            <label class="b-ordering-choice">
                              <div class="b-ordering-choice__img">
                                <input type="radio" name="b-ordering-choice__delivery" checked>
                                <div class="b-checkbox-icon">
                                  <span class="icon icon-checked"></span>
                                </div>
                                <img src="img/first.png" alt="">
                              </div>
                              <div class="b-ordering-choice__txt">Наличные курьеру</div>
                            </label>
                          </div>
                          <div class="col-md-4">
                            <label class="b-ordering-choice">
                              <div class="b-ordering-choice__img">
                                <input type="radio" name="b-ordering-choice__delivery" checked>
                                <div class="b-checkbox-icon">
                                  <span class="icon icon-checked"></span>
                                </div>
                                <img src="img/first.png" alt="">
                              </div>
                              <div class="b-ordering-choice__txt">Наложенный платеж</div>
                            </label>
                          </div>
                          <div class="col-md-4">
                            <label class="b-ordering-choice">
                              <div class="b-ordering-choice__img">
                                <input type="radio" name="b-ordering-choice__delivery" checked>
                                <div class="b-checkbox-icon">
                                  <span class="icon icon-checked"></span>
                                </div>
                                <img src="img/sber.png" alt="">
                              </div>
                              <div class="b-ordering-choice__txt">Сбербанк</div>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="b-ordering-choice-active">
                        <div class="b-ordering-choice-active__img">
                          <img src="img/sber.png" alt="img">
                        </div>
                        <p>Вы можете оплатить заказ в любом отделении Сбербанка. За услугу по переводу денег с Вас возьмут от 3 до 7% от стоимости заказа, в зависимости от региона. Перечисление денег займет порядка 10 дней.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="b-ordering-path">
                  <div class="d-flex flex-wrap">
                    <input type="submit" class="btn btn--sm btn--active b-ordering-path__btn b-ordering-path__btn--prev" value="Назад">
                    <input type="submit" class="btn btn--sm btn--active b-ordering-path__btn b-ordering-path__btn--next" value="Далее">
                  </div>
                </div>
              </div>
            </div>

            <div class="b-ordering">
              <div class="b-ordering__header">Покупатель</div>
              <div class="b-ordering__body">
                <div class="b-ordering-path">
                  <div class="b-ordering__title">Покупатель</div>
                  <label class="b-label">
                    <p class="b-label__txt"><span class="sign-required">*</span> ФИО</p>
                    <input type="text" class="b-input">
                  </label>
                  <label class="b-label">
                    <p class="b-label__txt"><span class="sign-required">*</span> E-Mail</p>
                    <input type="email" class="b-input">
                  </label>
                  <label class="b-label">
                    <p class="b-label__txt"><span class="sign-required">*</span> Телефон</p>
                    <input type="text" class="b-input">
                  </label>
                  <label class="b-label">
                    <p class="b-label__txt"><span class="sign-required">*</span> Адрес доставки</p>
                    <input type="text" class="b-input">
                  </label>
                  <label class="b-label">
                    <p class="b-label__txt">Комментарии к заказу:</p>
                    <textarea type="text" class="b-input"></textarea>
                  </label>
                </div>
                <div class="b-ordering-path">
                  <div class="d-flex flex-wrap">
                    <input type="submit" class="btn btn--sm btn--active b-ordering-path__btn b-ordering-path__btn--prev" value="Назад">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-4 offset-lg-9 offset-md-8">
                <a href="#" class="btn-color b-ordering-btn">ОФОРМИТЬ ЗАКАЗ</a>
              </div>
            </div>
            
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>

<? include('footer.php'); ?>