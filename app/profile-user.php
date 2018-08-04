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
              <a href="#" class="b-breadcrumbs__link">Личные данные</a>
            </li>
          </ul>
        </div>
        <h2>Профиль пользователя</h2>
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <form action="#" class="b-form">
              <div class="b-form__path">
                <label class="b-label">
                  <p class="b-label__txt">Имя</p>
                  <input type="text" class="b-input" value="Филипп">
                </label>
                <label class="b-label">
                  <p class="b-label__txt">Фамилия</p>
                  <input type="text" class="b-input" value="Старк">
                </label>
                <label class="b-label">
                  <p class="b-label__txt">Логин <span class="b-label__txt__sm">(минимум 3 символа)</span></p>
                  <input type="text" class="b-input" value="Старк">
                </label>
                <label class="b-label">
                  <p class="b-label__txt">E-mail</p>
                  <input type="email" class="b-input" value="philippe@starck.com">
                </label>
                <label class="b-label">
                  <p class="b-label__txt">Телефон</p>
                  <input type="tel" class="b-input" value="+33-1-400-701- 65">
                </label>
              </div>
              <div class="b-form__path">
                <label class="b-label">
                  <p class="b-label__txt">Новый пароль <span class="b-label__txt__sm">(Пароль должен быть не менее 6 символов длиной)</span></p>
                  <input type="password" class="b-input" value="Старк">
                </label>
                <label class="b-label">
                  <p class="b-label__txt">Подтверждение пароля</p>
                  <input type="text" class="b-input" value="известныйфранцузский">
                </label>
                <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <input type="submit" class="btn btn--sm btn--active w-100" value="СОХРАНИТЬ">
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <input type="reset" class="btn btn--sm w-100" value="ОТМЕНА">
                  </div>
                </div>
                
                <div class="b-form__bottom">
                  <p>Вы можете связать свой профиль с профилями в социальных сетях и сервисах</p>
                  <div class="footer__social d-inline-flex">
                    <a class="footer__social-icon footer__social-icon-fb" href="#"></a>
                    <a class="footer__social-icon footer__social-icon-vk" href="#"></a>
                    <a class="footer__social-icon footer__social-icon-odn" href="#"></a>
                    <a class="footer__social-icon footer__social-icon-tw" href="#"></a>
                  </div>
                </div>
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