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
              <a href="#" class="b-breadcrumbs__link">Личный кабинет</a>
            </li>
            <li class="b-breadcrumbs__li">
              <a href="#" class="b-breadcrumbs__link">Мои заказы</a>
            </li>
          </ul>
        </div>
        <h2>Мои заказы</h2>
        <br>
        <div>
          <a href="#" class="blue-link">Посмотреть историю заказов</a>
        </div>
        <br>
        <div class="b-my-orders-header__txt">Заказы в статусе «Принят, ожидается оплата»</div>
        <div class="b-my-orders-header">
          <div class="b-my-orders-header__txt">Заказ  №4 от 27.07.2018, 1 товар на сумму   23 905 ₽</div>
        </div>
        <div class="b-my-order-wrap">
          <div class="b-my-order-path">
            <div class="b-my-order-path__header">Оплата</div>
            <div class="b-my-order-path__body">
              <div class="b-my-order-path__body_info">
                <div class="b-my-order-path__title">
                  Счет №4/1 от 27.07.2018, Сбербанк <span class="b-my-order-path__txt-border b-my-order-path__txt-border--red">не оплачено</span>
                </div>
                <div>Сумма к оплате по счету:  23 905 ₽</div>
                <a href="#" class="blue-link">сменить способ оплаты</a>
              </div>
              <div class="b-my-order-path__body_btn">
                <a href="#" class="btn-color">оплатить</a>
              </div>
            </div>
          </div>
          <div class="b-my-order-path">
            <div class="b-my-order-path__header">Доставка</div>
            <div class="b-my-order-path__body">
              <div class="b-my-order-path__body_info">
                <div class="b-my-order-path__title">
                  Отгрузка  №4/2 <span class="b-my-order-path__txt-border b-my-order-path__txt-border--red">не отгружено</span>
                </div>
                <div>Стоимость доставки: 1 300 ₽ </div>
                <div>Статус отгрузки: <span class="b-my-order-path__txt-border b-my-order-path__txt-border--gray">ожидает обработки</span></div>
                <div>Служба доставки: СПСР-Экспресс:ГЕПАРД-Экспресс 13</div>
              </div>
            </div>
          </div>
          <div class="b-my-order__bottom">
            <div>
              <a href="#" class="blue-link b-my-order__bottom_link"><b>Подробнее о заказе</b></a>
            </div>
            <div>
              <a href="#" class="blue-link b-my-order__bottom_link">Повторить заказ</a>
              <a href="#" class="gray-link b-my-order__bottom_link">Отменить заказ</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<? include('footer.php'); ?>