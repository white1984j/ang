<? include('header.php'); ?>

<section class="section-main">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <button class="b-btn b-sidebar-btn">Фильтр</button>
        <div class="b-sidebar b-sidebar--mw">
          <div class="b-sidebar-path">
            <div class="b-sidebar-path-head b-sidebar-path-head--active">
              <div class="b-sidebar-path-head__txt">
                <span>Стиль дивана:</span>
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
                    <div class="b-checkbox-text">Современный <span class="b-checkbox-subtext">24</span></div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Классический</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Прованс</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Кантри</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Лофт</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Модерн</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Хай тек</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Арт деко</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Минимализм</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Индустриальный</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Скандинавский</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Восточный</div>
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
                <span>Ширина дивана:</span>
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
            <div class="b-sidebar-path-head ">
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
                    <div class="b-checkbox-text">односпальный</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">двуспальный</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">полутороспальный</div>
                  </label>
                </li>
              </ul>            
            </div>
          </div>

          <div class="b-sidebar-path">
            <div class="b-sidebar-path-head ">
              <div class="b-sidebar-path-head__txt">
                <span>Помещение для установки:</span>
              </div>
              <div class="b-sidebar-path-head__triangle"></div>
            </div>
            <div class="b-sidebar-path-body" >
              <ul class="b-sidebar-path-body__ul">
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Детская</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Гостиная</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Подростковая комната</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Спальня</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Кухня</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Прихожая</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Офис</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Дача</div>
                  </label>
                </li>  
              </ul>            
            </div>
          </div>

          <div class="b-sidebar-path">
            <div class="b-sidebar-path-head">
              <div class="b-sidebar-path-head__txt">
                <span>Число мест:</span>
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
                    <div class="b-checkbox-text">Одноместный</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Двухместный</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Трехместный</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Четырехместный</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">и более</div>
                  </label>
                </li>
              </ul>            
            </div>
          </div>

          <div class="b-sidebar-path">
            <div class="b-sidebar-path-head ">
              <div class="b-sidebar-path-head__txt">
                <span>Короб для белья:</span>
              </div>
              <div class="b-sidebar-path-head__triangle"></div>
            </div>
            <div class="b-sidebar-path-body">
              <ul class="b-sidebar-path-body__ul">
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="radio" name="radio-box-for-linen" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Да</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="radio" name="radio-box-for-linen">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Нет</div>
                  </label>
                </li>
              </ul>            
            </div>
          </div>

          <div class="b-sidebar-path">
            <div class="b-sidebar-path-head">
              <div class="b-sidebar-path-head__txt">
                <span>МТД (механизмы трансформации диванов):</span>
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
                    <div class="b-checkbox-text">Еврокнижка</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Дельфин</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Клик-Кляк</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Танго</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Конрад</div>
                  </label>
                </li>
                 <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Седафлекс</div>
                  </label>
                </li>
                 <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Mixotoile</div>
                  </label>
                </li>
                 <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Тик-Так</div>
                  </label>
                </li>
                 <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Аккордеон</div>
                  </label>
                </li>
                 <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Книжка</div>
                  </label>
                </li>
              </ul>            
            </div>
          </div>

          <div class="b-sidebar-path">
            <div class="b-sidebar-path-head ">
              <div class="b-sidebar-path-head__txt">
                <span>Модульность:</span>
              </div>
              <div class="b-sidebar-path-head__triangle"></div>
            </div>
            <div class="b-sidebar-path-body">
              <ul class="b-sidebar-path-body__ul">
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="radio" name="radio-box-for-linen" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Да</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="radio" name="radio-box-for-linen">
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Нет</div>
                  </label>
                </li>
              </ul>            
            </div>
          </div>

          <div class="b-sidebar-path">
            <div class="b-sidebar-path-head">
              <div class="b-sidebar-path-head__txt">
                <span>МТД (механизмы трансформации диванов):</span>
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
                    <div class="b-checkbox-text">Жаккард</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Шенилл</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Гобелен</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Рогожка</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Велюр</div>
                  </label>
                </li>
                 <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Бархат</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Флок</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Эко кожа</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Натуральная кожа</div>
                  </label>
                </li>
                <li>
                  <label class="b-label b-label--checkbox">
                    <input type="checkbox" checked>
                    <div class="b-checkbox-icon">
                      <span class="icon icon-checked"></span>
                    </div>
                    <div class="b-checkbox-text">Искусственная замша</div>
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
          <div class="col-12 txt-c" style="margin-bottom: 40px;">
            <button class="b-btn">Показать еще</button>
          </div>
        </div>
        <div class="b-text">
          <h4>Фабрика «Ангажемент» предлагает красивые и удобные угловые диваны Фабрика</h4>
          <p>Фабрика «Ангажемент» предлагает красивые и удобные угловые диваны Фабрика «Ангажемент» предлагает красивые и удобные угловые диваны Все диваны отличаются по своей отделке, форме и механизму трансформации. Цена и качество моделей также бывают совершенно разными.</p>
          <br>
          <p>Все покупатели мечтают купить доступный по цене, удобный и простой в использовании, но, самое главное, качественный диван. Также важно, чтобы он подходил к общему стилю интерьера. </p>
          <br>
          <p>Наш интернет магазин предлагает диваны в различных цветовых решениях и на любой вкус. Угловые диваны имеют следующие преимущества:  максимально эффективное использование пространства благодаря удобной угловой форме. Подобная модель идеально подойдет для небольшой площади помещения. Также его можно поставить там, где нельзя установить прямой диван; возможность зонирования любой комнаты, например, спальни, детской, гостиной, кабинета или офиса. Также подобную модель можно успешно сочетать с другой мебелью; кроме цельной конструкции угловые диваны могут иметь несколько составных частей – модулей. Такая модель позволяет использовать их в качестве самостоятельной мебели и менять расположение угла; возможность выбора разных механизмов трансформации. Самые популярные из них: еврокнижка, дельфин, аккордеон, выкатная система.</p>
          <br>
          <p>Для максимально простого и быстрого раскладывания дивана без отодвигания от стены лучше всего подходит модель еврокнижка. В каталоге нашего интернет-магазина можно выбрать любую модель угловых диванов по выгодной стоимости. Эта мебель выполняется с тканевой, кожаной обивкой, а также из экокожи или в сочетании разных видов тканей. Стильные и практичные модели угловых диванов имеют правый или левый угол, что позволяет идеально вписать их в любой интерьер. При покупке углового дивана можно приобрести наши фабричные декоративные подушки по привлекательной цене.. Они выполняются из экокожи или ткани.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<? include('footer.php'); ?>