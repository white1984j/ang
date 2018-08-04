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
              <a href="#" class="b-breadcrumbs__link">История заказов</a>
            </li>
          </ul>
        </div>
        <h2>История заказов</h2>
        <br>
        <div class="b-history-orders__wrap">
          <table class="b-history-orders">
            <thead>
              <tr>
                <th>Наимнование</th>
                <th>Дата заказа</th>
                <th>Артикул</th>
                <th>Цена</th>
                <th>Количество</th>
                <th>Итого</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="b-history-orders-product-td">
                  <span class="b-history-orders__mob">Наимнование</span>
                  <div class="b-history-orders-product">
                    <div class="b-history-orders-product__img">
                      <img src="img/history-img-1.png" alt="">
                    </div>
                    <div class="b-history-orders-product__txt">
                      Диван с деревянными подлокотниками «Анкона Д»
                    </div>
                  </div>
                </td>
                <td><span class="b-history-orders__mob">Дата заказа</span>27.07.2018</td>
                <td><span class="b-history-orders__mob">Артикул</span>90NB04U2-M02610</td>
                <td><span class="b-history-orders__mob">Цена</span><b>23 905 ₽</b></td>
                <td><span class="b-history-orders__mob">Количество</span><b>1</b></td>
                <td><span class="b-history-orders__mob">Итого</span><b>23 905 ₽</b></td>
              </tr>
              <tr>
                <td class="b-history-orders-product-td">
                  <span class="b-history-orders__mob">Наимнование</span>
                  <div class="b-history-orders-product">
                    <div class="b-history-orders-product__img">
                      <img src="img/history-img-2.png" alt="">
                    </div>
                    <div class="b-history-orders-product__txt">
                      Диван с деревянными подлокотниками «Анкона Д»
                    </div>
                  </div>
                </td>
                <td><span class="b-history-orders__mob">Дата заказа</span>27.07.2018</td>
                <td><span class="b-history-orders__mob">Артикул</span>90NB04U2-M02610</td>
                <td><span class="b-history-orders__mob">Цена</span><b>26 905 ₽</b></td>
                <td><span class="b-history-orders__mob">Количество</span><b>1</b></td>
                <td><span class="b-history-orders__mob">Итого</span><b>26 905 ₽</b></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<? include('footer.php'); ?>