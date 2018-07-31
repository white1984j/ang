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
              <a href="#" class="b-breadcrumbs__link">Вход на сайт</a>
            </li>
          </ul>
        </div>
        <h2>Авторизация</h2>
        <br>
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <h4>Пожалуйста, авторизуйтесь</h4>
            <br>
            <div class="footer__social d-inline-flex">
              <a class="footer__social-icon footer__social-icon-fb" href="#"></a>
              <a class="footer__social-icon footer__social-icon-vk" href="#"></a>
              <a class="footer__social-icon footer__social-icon-odn" href="#"></a>
              <a class="footer__social-icon footer__social-icon-tw" href="#"></a>
            </div>
            <form action="#" class="b-authorisation-form">
              <label class="b-label">
                <p class="b-label__txt">Логин</p>
                <input type="text" class="b-input">
              </label>
              <label class="b-label">
                <p class="b-label__txt">Пароль</p>
                <input type="password" class="b-input">
              </label>
              <label class="b-label b-label--checkbox">
                <input type="checkbox">
                <div class="b-checkbox-icon">
                  <span class="icon icon-checked"></span>
                </div>
                <div class="b-checkbox-text">Согласие на обработку данных</div>
              </label>
              <input type="submit" class="btn-color col-md-5" value="ВОЙТИ">
              <div class="b-authorisation-form__bottom">
                <a href="#">Забыли свой пароль?</a>
                <p>Если вы впервые на сайте, заполните, пожалуйста, регистрационную форму.</p>
                <a href="#">Зарегистрироваться</a>
              </div>
            </form>
          </div>
          <div class="col-lg-4 offset-lg-2 col-md-6">
            <h5>Мы в соцсетях</h5>
            <div class="footer__social d-inline-flex mb-30 mt-10">
              <a class="footer__social-icon footer__social-icon-vk" href="#"></a>
              <a class="footer__social-icon footer__social-icon-in" href="#"></a>
              <a class="footer__social-icon footer__social-icon-fb" href="#"></a>
              <a class="footer__social-icon footer__social-icon-odn" href="#"></a>
              <a class="footer__social-icon footer__social-icon-tw" href="#"></a>
            </div>
            <h5>Рассылка</h5>
            <div class="b-subscription__form b-subscription__form-p-sm mb-30">
              <form action="#">
                <div class="d-flex flex-wrap">
                  <input type="text" placeholder="Ваш e-mail" class="b-subscription-input">
                  <button type="submit" class="b-subscription-submit"><i class="icon icon-mail"></i> Подписаться</button>
                </div>
                <div>
                  <label class="b-label b-label--checkbox">
                      <input type="checkbox" checked="">
                      <div class="b-checkbox-icon">
                        <span class="icon icon-checked"></span>
                      </div>
                      <div class="b-checkbox-text">
                        <p>Я соглашаюсь на обработку и хранение персональных данных. </p>
                        <p>С политикой конфиденциальности ознакомлен(а)*</p>
                      </div>
                    </label>
                </div>
              </form>
            </div>
            <a href="#" class="b-sm-special-offers">
              <img src="img/special-offers-banner.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<? include('footer.php'); ?>