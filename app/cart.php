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
              <a href="#" class="b-breadcrumbs__link">Корзина</a>
            </li>
          </ul>
        </div>
        <h2>Корзина</h2>
        <br>
        <div class="cart-props">
          <div class="row align-items-center">
            <div class="col-xl-6 col-lg-5 col-md-12">
              <form class="cart-props-form">
                <input type="text" class="cart-props-form__input" placeholder="Введите код купона для скидки">
                <button type="submit" class="cart-props-form__submit">
                  <i class="icon icon-arrow-black"></i>
                </button>
              </form>
            </div>
            <div class="col-xl-6 col-lg-7 col-md-12">
              <div class="cart-props__info" >
                <div>
                  <div class="cart-props__price-old">Скидка: 8 595 ₽</div>
                  <div class="cart-props__price">Итого со скидкой: <span>23 905 ₽</span></div>
                </div>
                <div>
                  <a href="#" class="btn-color">оформить заказ</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="b-cart">
          <div class="row justify-content-between">
            <div class="col-md-6">
              <form action="#" class="b-cart-filter">
                <input type="text" class="b-cart-filter__input" placeholder="Фильтр">
                <button type="reset" class="b-cart-filter__submit">
                  <i class="icon icon-close-black"></i>
                </button>
              </form>
            </div>
            <div class="col-auto">
              <div class="b-cart-amount">В корзине 1 товар</div>
            </div>
          </div>
          <table class="b-cart-table">
            <tr>
              <td class="b-cart-table-product-td">
                <div class="b-cart-table-product">
                  <div class="b-cart-table-product__img">
                    <img src="img/history-img-1.png" alt="">
                  </div>
                  <div class="b-cart-table-product__txt">Диван с деревянными подлокотниками «Анкона Д»</div>
                </div>
              </td>
              <td>
                <div class="b-cart-price">
                  <span class="b-cart-table-price__current">23 905 ₽</span>
                  <span class="b-cart-table-price__old">32 500 ₽</span>
                </div>
              </td>
              <td>
                <div class="b-cart-table-amount">  
                  <button type="text" class="b-cart-table-amount__dec">&#8211;</button>
                  <input type="text" class="b-cart-table-amount__val" value="1">
                  <button type="text" class="b-cart-table-amount__inc">&#43;</button>
                </div>
              </td>
              <td>
                <button class="b-cart-table-remove">удалить</button>
              </td>
            </tr>
            <tr>
              <td class="b-cart-table-product-td">
                <div class="b-cart-table-product">
                  <div class="b-cart-table-product__img">
                    <img src="img/history-img-1.png" alt="">
                  </div>
                  <div class="b-cart-table-product__txt">Диван с деревянными подлокотниками «Анкона Д»</div>
                </div>
              </td>
              <td>
                <div class="b-cart-price">
                  <span class="b-cart-table-price__current">23 905 ₽</span>
                  <span class="b-cart-table-price__old">32 500 ₽</span>
                </div>
              </td>
              <td>
                <div class="b-cart-table-amount">  
                  <button type="text" class="b-cart-table-amount__dec">&#8211;</button>
                  <input type="text" class="b-cart-table-amount__val" value="1">
                  <button type="text" class="b-cart-table-amount__inc">&#43;</button>
                </div>
              </td>
              <td>
                <button class="b-cart-table-remove">удалить</button>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>

<? include('footer.php'); ?>