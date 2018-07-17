<? include('header.php'); ?>

<section class="section-main">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <button class="b-sidebar-btn">Фильтр</button>
        <div class="b-sidebar b-sidebar--mw">
          <div class="b-sidebar-path">
            <div class="b-sidebar-path-head b-sidebar-path-head--active">
              <div class="b-sidebar-path-head__txt">
                <span>Тип дивана:</span>
              </div>
              <div class="b-sidebar-path-head__triangle"></div>
            </div>
            <div class="b-sidebar-path-body" style="display: block">
              <ul class="b-sidebar-path-body__ul">
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Угловой <span class="b-checkbox-subtext">24</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Прямой <span class="b-checkbox-subtext">42</span></div>
                  </label>
                </li>
              </ul>
            </div>
          </div>

          <div class="b-sidebar-path">
            <div class="b-sidebar-path-head b-sidebar-path-head--active">
              <div class="b-sidebar-path-head__txt">
                <span>Цена:</span>
              </div>
              <div class="b-sidebar-path-head__triangle"></div>
            </div>
            <div class="b-sidebar-path-body" style="display: block">
              <div class="b-rangeSlider" data-postfix="₽" data-step="10" data-from="100" data-step="10" data-to="3000" data-start1="500" data-start2="2500">
                <div class="b-rangeSlider-inputs">
                  <input class="b-rangeSlider-input">
                  <input class="b-rangeSlider-input">
                </div>
              </div>
                
            </div>
          </div>

          <div class="b-sidebar-path">
            <div class="b-sidebar-path-head b-sidebar-path-head--active">
              <div class="b-sidebar-path-head__txt">
                <span>Ширина:</span>
              </div>
              <div class="b-sidebar-path-head__triangle"></div>
            </div>
            <div class="b-sidebar-path-body" style="display: block">
              <div class="b-rangeSlider" data-postfix="см" data-step="10" data-from="0" data-step="100" data-to="10000" data-start1="1000" data-start2="6000">
                <div class="b-rangeSlider-inputs">
                  <input class="b-rangeSlider-input">
                  <input class="b-rangeSlider-input">
                </div>
              </div>
                
            </div>
          </div>

          <div class="b-sidebar-path">
            <div class="b-sidebar-path-head b-sidebar-path-head--active">
              <div class="b-sidebar-path-head__txt">
                <span>Помещения для установки:</span>
              </div>
              <div class="b-sidebar-path-head__triangle"></div>
            </div>
            <div class="b-sidebar-path-body" style="display: block">
              <ul class="b-sidebar-path-body__ul">
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Гостинная <span class="b-checkbox-subtext">14</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Кухня <span class="b-checkbox-subtext">88</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Детская <span class="b-checkbox-subtext">88</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Спальня <span class="b-checkbox-subtext">88</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Прихожая <span class="b-checkbox-subtext">88</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Офис <span class="b-checkbox-subtext">88</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Дача <span class="b-checkbox-subtext">88</span></div>
                  </label>
                </li>
              </ul>
            </div>
          </div>

          <div class="b-sidebar-path">
            <div class="b-sidebar-path-head">
              <div class="b-sidebar-path-head__txt">
                <span>Количество спальных мест:</span>
              </div>
              <div class="b-sidebar-path-head__triangle"></div>
            </div>
            <div class="b-sidebar-path-body">
              <ul class="b-sidebar-path-body__ul">
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Гостинная <span class="b-checkbox-subtext">14</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Кухня <span class="b-checkbox-subtext">88</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Детская <span class="b-checkbox-subtext">88</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Спальня <span class="b-checkbox-subtext">88</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Прихожая <span class="b-checkbox-subtext">88</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Офис <span class="b-checkbox-subtext">88</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Дача <span class="b-checkbox-subtext">88</span></div>
                  </label>
                </li>
              </ul>
            </div>
          </div>

          <div class="b-sidebar-path">
            <div class="b-sidebar-path-head">
              <div class="b-sidebar-path-head__txt">
                <span>Количество спальных мест::</span>
              </div>
              <div class="b-sidebar-path-head__triangle"></div>
            </div>
            <div class="b-sidebar-path-body">
              <ul class="b-sidebar-path-body__ul">
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Гостинная <span class="b-checkbox-subtext">14</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Кухня <span class="b-checkbox-subtext">88</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Детская <span class="b-checkbox-subtext">88</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Спальня <span class="b-checkbox-subtext">88</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Прихожая <span class="b-checkbox-subtext">88</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Офис <span class="b-checkbox-subtext">88</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Дача <span class="b-checkbox-subtext">88</span></div>
                  </label>
                </li>
              </ul>
            </div>
          </div>

          <div class="b-sidebar-path">
            <div class="b-sidebar-path-head">
              <div class="b-sidebar-path-head__txt">
                <span>Механизмы трансформации:</span>
              </div>
              <div class="b-sidebar-path-head__triangle"></div>
            </div>
            <div class="b-sidebar-path-body">
              <ul class="b-sidebar-path-body__ul">
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Гостинная <span class="b-checkbox-subtext">14</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Кухня <span class="b-checkbox-subtext">88</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Детская <span class="b-checkbox-subtext">88</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Спальня <span class="b-checkbox-subtext">88</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Прихожая <span class="b-checkbox-subtext">88</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Офис <span class="b-checkbox-subtext">88</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Дача <span class="b-checkbox-subtext">88</span></div>
                  </label>
                </li>
              </ul>
            </div>
          </div>

          <div class="b-sidebar-path">
            <div class="b-sidebar-path-head">
              <div class="b-sidebar-path-head__txt">
                <span>Короб для белья:</span>
              </div>
              <div class="b-sidebar-path-head__triangle"></div>
            </div>
            <div class="b-sidebar-path-body">
              <ul class="b-sidebar-path-body__ul">
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Гостинная <span class="b-checkbox-subtext">14</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Кухня <span class="b-checkbox-subtext">88</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Детская <span class="b-checkbox-subtext">88</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Спальня <span class="b-checkbox-subtext">88</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Прихожая <span class="b-checkbox-subtext">88</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Офис <span class="b-checkbox-subtext">88</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Дача <span class="b-checkbox-subtext">88</span></div>
                  </label>
                </li>
              </ul>
            </div>
          </div>

        </div>
      </div>
      <div class="col-md-9">
        <div class="b-breadcrumbs">
          <ul class="b-breadcrumbs__ul">
            <li class="b-breadcrumbs__li">
              <a href="#" class="b-breadcrumbs__link">Главная</a>
            </li>
            <li class="b-breadcrumbs__li">
              <a href="#" class="b-breadcrumbs__link">Мягкая мебель</a>
            </li>
            <li class="b-breadcrumbs__li">
              <a href="#" class="b-breadcrumbs__link">Угловые диваны</a>
            </li>
          </ul>
        </div>
        <h2>Угловые Диваны</h2>
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 catalog__block-item-wrap">
            <div class="catalog__block-item">
              <div class="cb__banners">
                <div class="cb__banner-item cb__banner-item-hit">
                  HIT
                </div>
              </div>
              <div class="cb__sliders clearfix">
                <div class="cb__slider-big-wrap">
                  <div class="cb__slider-big">
                    <div class="cb__slider-big-item">
                      <img src="img/sofa-big-1.png" alt="sofa">
                    </div>
                  </div>
                </div>
                <div class="cb__slider-small-wrap">
                  <div class="cb__slider-small">
                    <div class="cb__slider-small-item">
                      <img src="img/sofa-small-1.png" alt="sofa" data-bigsrc="img/sofa-big-1.png">
                    </div>
                    <div class="cb__slider-small-item">
                      <img src="img/sofa-small-2.png" alt="sofa" data-bigsrc="img/sofa-big-2.png">
                    </div>
                    <div class="cb__slider-small-item">
                      <img src="img/sofa-small-3.png" alt="sofa" data-bigsrc="img/sofa-big-3.png">
                    </div>
                  </div>
                </div>
              </div>
              <div class="cb__text">
                <div class="cb__text-name">
                  <a href="#">Угловой диван "Варберг"</a>
                </div>
                <div class="cb__text-material">
                  Ткань, оранжевый
                </div>
              </div>
              <div class="cb__price">
                <span class="price-big">46 590 Р</span>
                <span class="price-small">51 960 P</span>
              </div>
              <div class="cb__button">
                <button class="btn">В корзину</button>
                <div class="cb__variant">
                  <a href="#">Показать все варианты</a>
                </div>
              </div>
              <div class="cb__parameters">
                <p>Габаритные размеры: 242x150 см, высота 75 см</p>
                <p>Спальное место (см): 200,5 х 140</p>
                <p>Механизм трансформации: Дельфин</p>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 catalog__block-item-wrap">
            <div class="catalog__block-item">
              <div class="cb__banners">
                <div class="cb__banner-item cb__banner-item-new">
                  NEW
                </div>
              </div>
              <div class="cb__sliders clearfix">
                <div class="cb__slider-big-wrap">
                  <div class="cb__slider-big">
                    <div class="cb__slider-big-item">
                      <img src="img/sofa-big-2.png" alt="sofa">
                    </div>
                  </div>
                </div>
                <div class="cb__slider-small-wrap">
                  <div class="cb__slider-small">
                    <div class="cb__slider-small-item">
                      <img src="img/sofa-small-2.png" alt="sofa" data-bigsrc="img/sofa-big-2.png">
                    </div>
                  </div>
                </div>
              </div>
              <div class="cb__text">
                <div class="cb__text-name">
                  <a href="#">Угловой диван "Варберг"</a>
                </div>
                <div class="cb__text-material">
                  Ткань, оранжевый
                </div>
              </div>
              <div class="cb__price">
                <span class="price-big">46 590 Р</span>
                <span class="price-small">51 960 P</span>
              </div>
              <div class="cb__button">
                <button class="btn">В корзину</button>
                <div class="cb__variant">
                  <a href="#">Показать все варианты</a>
                </div>
              </div>
              <div class="cb__parameters">
                <p>Габаритные размеры: 242x150 см, высота 75 см</p>
                <p>Спальное место (см): 200,5 х 140</p>
                <p>Механизм трансформации: Дельфин</p>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 catalog__block-item-wrap">
            <div class="catalog__block-item">
              <div class="cb__sliders clearfix">
                <div class="cb__slider-big-wrap">
                  <div class="cb__slider-big">
                    <div class="cb__slider-big-item">
                      <img src="img/sofa-big-1.png" alt="sofa">
                    </div>
                  </div>
                </div>
                <div class="cb__slider-small-wrap">
                  <div class="cb__slider-small">
                    <div class="cb__slider-small-item">
                      <img src="img/sofa-small-1.png" alt="sofa" data-bigsrc="img/sofa-big-1.png">
                    </div>
                    <div class="cb__slider-small-item">
                      <img src="img/sofa-small-2.png" alt="sofa" data-bigsrc="img/sofa-big-2.png">
                    </div>
                    <div class="cb__slider-small-item">
                      <img src="img/sofa-small-1.png" alt="sofa" data-bigsrc="img/sofa-big-1.png">
                    </div>
                  </div>
                </div>
              </div>
              <div class="cb__text">
                <div class="cb__text-name">
                  <a href="#">Угловой диван "Варберг"</a>
                </div>
                <div class="cb__text-material">
                  Ткань, оранжевый
                </div>
              </div>
              <div class="cb__price">
                <span class="price-big">46 590 Р</span>
                <span class="price-small">51 960 P</span>
              </div>
              <div class="cb__button">
                <button class="btn">В корзину</button>
                <div class="cb__variant">
                  <a href="#">Показать все варианты</a>
                </div>
              </div>
              <div class="cb__parameters">
                <p>Габаритные размеры: 242x150 см, высота 75 см</p>
                <p>Спальное место (см): 200,5 х 140</p>
                <p>Механизм трансформации: Дельфин</p>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 catalog__block-item-wrap">
            <div class="catalog__block-item">
              <div class="cb__sliders clearfix">
                <div class="cb__slider-big-wrap">
                  <div class="cb__slider-big">
                    <div class="cb__slider-big-item">
                      <img src="img/sofa-big-1.png" alt="sofa">
                    </div>
                  </div>
                </div>
                <div class="cb__slider-small-wrap">
                  <div class="cb__slider-small">
                    <div class="cb__slider-small-item">
                      <img src="img/sofa-small-1.png" alt="sofa" data-bigsrc="img/sofa-big-1.png">
                    </div>
                    <div class="cb__slider-small-item">
                      <img src="img/sofa-small-2.png" alt="sofa" data-bigsrc="img/sofa-big-2.png">
                    </div>
                    <div class="cb__slider-small-item">
                      <img src="img/sofa-small-1.png" alt="sofa" data-bigsrc="img/sofa-big-1.png">
                    </div>
                  </div>
                </div>
              </div>
              <div class="cb__text">
                <div class="cb__text-name">
                  <a href="#">Угловой диван "Варберг"</a>
                </div>
                <div class="cb__text-material">
                  Ткань, оранжевый
                </div>
              </div>
              <div class="cb__price">
                <span class="price-big">46 590 Р</span>
                <span class="price-small">51 960 P</span>
              </div>
              <div class="cb__button">
                <button class="btn">В корзину</button>
                <div class="cb__variant">
                  <a href="#">Показать все варианты</a>
                </div>
              </div>
              <div class="cb__parameters">
                <p>Габаритные размеры: 242x150 см, высота 75 см</p>
                <p>Спальное место (см): 200,5 х 140</p>
                <p>Механизм трансформации: Дельфин</p>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 catalog__block-item-wrap">
            <div class="catalog__block-item">
              <div class="cb__sliders clearfix">
                <div class="cb__slider-big-wrap">
                  <div class="cb__slider-big">
                    <div class="cb__slider-big-item">
                      <img src="img/sofa-big-1.png" alt="sofa">
                    </div>
                  </div>
                </div>
                <div class="cb__slider-small-wrap">
                  <div class="cb__slider-small">
                    <div class="cb__slider-small-item">
                      <img src="img/sofa-small-1.png" alt="sofa" data-bigsrc="img/sofa-big-1.png">
                    </div>
                    <div class="cb__slider-small-item">
                      <img src="img/sofa-small-2.png" alt="sofa" data-bigsrc="img/sofa-big-2.png">
                    </div>
                    <div class="cb__slider-small-item">
                      <img src="img/sofa-small-1.png" alt="sofa" data-bigsrc="img/sofa-big-1.png">
                    </div>
                  </div>
                </div>
              </div>
              <div class="cb__text">
                <div class="cb__text-name">
                  <a href="#">Угловой диван "Варберг"</a>
                </div>
                <div class="cb__text-material">
                  Ткань, оранжевый
                </div>
              </div>
              <div class="cb__price">
                <span class="price-big">46 590 Р</span>
                <span class="price-small">51 960 P</span>
              </div>
              <div class="cb__button">
                <button class="btn">В корзину</button>
                <div class="cb__variant">
                  <a href="#">Показать все варианты</a>
                </div>
              </div>
              <div class="cb__parameters">
                <p>Габаритные размеры: 242x150 см, высота 75 см</p>
                <p>Спальное место (см): 200,5 х 140</p>
                <p>Механизм трансформации: Дельфин</p>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 catalog__block-item-wrap">
            <div class="catalog__block-item">
              <div class="cb__sliders clearfix">
                <div class="cb__slider-big-wrap">
                  <div class="cb__slider-big">
                    <div class="cb__slider-big-item">
                      <img src="img/sofa-big-3.png" alt="sofa">
                    </div>
                  </div>
                </div>
                <div class="cb__slider-small-wrap">
                  <div class="cb__slider-small">
                    <div class="cb__slider-small-item">
                      <img src="img/sofa-small-3.png" alt="sofa" data-bigsrc="img/sofa-big-3.png">
                    </div>
                    <div class="cb__slider-small-item">
                      <img src="img/sofa-small-2.png" alt="sofa" data-bigsrc="img/sofa-big-2.png">
                    </div>
                    <div class="cb__slider-small-item">
                      <img src="img/sofa-small-2.png" alt="sofa" data-bigsrc="img/sofa-big-2.png">
                    </div>
                  </div>
                </div>
              </div>
              <div class="cb__text">
                <div class="cb__text-name">
                  <a href="#">Угловой диван "Варберг"</a>
                </div>
                <div class="cb__text-material">
                  Ткань, оранжевый
                </div>
              </div>
              <div class="cb__price">
                <span class="price-big">46 590 Р</span>
                <span class="price-small">51 960 P</span>
              </div>
              <div class="cb__button">
                <button class="btn">В корзину</button>
                <div class="cb__variant">
                  <a href="#">Показать все варианты</a>
                </div>
              </div>
              <div class="cb__parameters">
                <p>Габаритные размеры: 242x150 см, высота 75 см</p>
                <p>Спальное место (см): 200,5 х 140</p>
                <p>Механизм трансформации: Дельфин</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<? include('footer.php'); ?>