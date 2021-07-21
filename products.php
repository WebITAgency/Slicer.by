<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Товары</title>
  <link rel="stylesheet" href="css/style.css">

  <!-- Закладочная иконка -->
  <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="img/favicons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="img/favicons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicons/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <!-- BOOTSTRAP LINK -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
  <header class="container-fluid d-flex justify-content-center align-items-center header">
    <div class="row w-100 d-flex justify-content-between align-items-center">
      <div class="col p-0 header__phonenumber d-lg-none">
        <i class="bi bi-telephone"></i>
        <a href="#"> +375 (162) 35 64 45 </a>
      </div>
      <div class="p-0 header__desktop-menu align-items-center col d-none d-lg-flex">

        <ul class="header__desktop-links list-unstyled d-flex align-items-center p-0 m-0">
          <li><a href="#"> <i class="bi bi-house"></i> </a></li>
          <li><a href="#"> Контакты </a></li>
          <li><a href="#"> Каталог </a></li>
          <li><a href="#"> ВАЛВИТ </a></li>
        </ul>
      </div>
      <div class="col d-flex justify-content-end align-items-center p-0">
        <form class="d-none d-lg-flex header__search-form">
          <input class="header__search-field" placeholder="Поиск" type="search" name="" id="">
          <button class="header__search-submit" type="submit"> <i class="bi bi-search"></i> </button>
        </form>
        <!-- <div class="header__search d-lg-none">
          <i class="bi bi-search"></i>
        </div> -->
        <div class="header__menu d-lg-none">
          <i class="header__menu_icon bi bi-list"></i>
          <div class="header__menu-mobile header__menu-mobile--inactive container-fluid">
            <ul class="d-flex w-100 flex-column list-unstyled align-items-center justify-content-center container">
              <li><a href="#"> Контакты </a></li>
              <li><a href="#"> Каталог </a></li>
              <li><a href="#"> ВАЛВИТ </a></li>
              <form class="mt-4 header__search-form">
                <input class="header__search-field" placeholder="Поиск" type="search" name="" id="">
                <button class="header__search-submit" type="submit"> <i class="bi bi-search"></i> </button>
              </form>
            </ul>

          </div>
        </div>
      </div>

    </div>
  </header>

  <div class="catalog-container">

    <div class="catalog-container__btn-container"><a href="#" class="btn-container__button">Все товары</a></div>

    <ul class="catalog-container__catalog">
      <li class="catalog__item">
        <a href="#" class="item__content">
          <img src="img/Meat slicer-Slice-Kitchen-Cook-Chef.svg" alt="">
          <span>Слайсеры</span>
        </a>

        <ul class="item__sub-menu">
          <li class="sub-menu__item">
            <a href="#" class="sub-menu__link">Универсальные</a>
          </li>
          <li class="sub-menu__item">
            <a href="#" class="sub-menu__link">Для сыра</a>
          </li>
          <li class="sub-menu__item">
            <a href="#" class="sub-menu__link">Ножи слайсерные</a>
          </li>
        </ul>
      </li>
      <li class="catalog__item">
        <a href="#" class="item__content">
          <img src="img/Vector.svg" alt="">
          <span>Пилы</span>
        </a>

        <ul class="item__sub-menu">
          <li class="sub-menu__item">
            <a href="#" class="sub-menu__link">Ленточные</a>
          </li>
          <li class="sub-menu__item">
            <a href="#" class="sub-menu__link">Дисковые</a>
          </li>
          <li class="sub-menu__item">
            <a href="#" class="sub-menu__link">Полотна для пил</a>
          </li>
          <li class="sub-menu__item">
            <a href="#" class="sub-menu__link">Дисковые ножи</a>
          </li>
        </ul>
      </li>
      <li class="catalog__item">
        <a href="#" class="item__content">
          <img src="img/Vector-1.svg" alt="">
          <span>Ножи Eicker</span>
        </a>

        <ul class="item__sub-menu">
          <li class="sub-menu__item">
            <a href="#" class="sub-menu__link">MANAGER</a>
          </li>
          <li class="sub-menu__item">
            <a href="#" class="sub-menu__link">PROFI</a>
          </li>
          <li class="sub-menu__item">
            <a href="#" class="sub-menu__link">PROFI E7</a>
          </li>
          <li class="sub-menu__item">
            <a href="#" class="sub-menu__link">С защитной ручкой</a>
          </li>
          <li class="sub-menu__item">
            <a href="#" class="sub-menu__link">Кованые ножи</a>
          </li>
          <li class="sub-menu__item">
            <a href="#" class="sub-menu__link">Кухонные ножи</a>
          </li>
          <li class="sub-menu__item">
            <a href="#" class="sub-menu__link">Секачи</a>
          </li>
          <li class="sub-menu__item">
            <a href="#" class="sub-menu__link">Аксессуары</a>
          </li>
        </ul>
      </li>
      <li class="catalog__item">
        <a href="#" class="item__content">
          <img src="img/Group.svg" alt="">
          <span>Мусаты</span>
        </a>

        <ul class="item__sub-menu">
          <li class="sub-menu__item">
            <a href="#" class="sub-menu__link">Поварские</a>
          </li>
          <li class="sub-menu__item">
            <a href="#" class="sub-menu__link">Для мяса</a>
          </li>
          <li class="sub-menu__item">
            <a href="#" class="sub-menu__link">Для птицы</a>
          </li>
          <li class="sub-menu__item">
            <a href="#" class="sub-menu__link">Для рыбы</a>
          </li>
          <li class="sub-menu__item">
            <a href="#" class="sub-menu__link">Для сыра</a>
          </li>
          <li class="sub-menu__item">
            <a href="#" class="sub-menu__link">Для овощей</a>
          </li>
          <li class="sub-menu__item">
            <a href="#" class="sub-menu__link">Секачи</a>
          </li>
          <li class="sub-menu__item">
            <a href="#" class="sub-menu__link">Хранение ножей</a>
          </li>
        </ul>
      </li>
      <li class="catalog__item">
        <a href="#" class="item__content">
          <img src="img/Group-1.svg" alt="">
          <span>Ножи разделочные</span>
        </a>

        <ul class="item__sub-menu">
          <li class="sub-menu__item">
            <a href="#" class="sub-menu__link">EICKER</a>
          </li>
          <li class="sub-menu__item">
            <a href="#" class="sub-menu__link">Другие</a>
          </li>
        </ul>
      </li>
      <li class="catalog__item">
        <a href="#" class="item__content">
          <img src="img/Group-2.svg" alt="">
          <span>Гигиена</span>
        </a>

        <ul class="item__sub-menu">
          <li class="sub-menu__item">
            <a href="#" class="sub-menu__link">Гигиена ножей</a>
          </li>
        </ul>
      </li>
      <li class="catalog__item">
        <a href="#" class="item__content">
          <img src="img/Vector-2.svg" alt="">
          <span>Защитная одежда</span>
        </a>

        <ul class="item__sub-menu">
          <li class="sub-menu__item">
            <a href="#" class="sub-menu__link">DICK</a>
          </li>
        </ul>
      </li>
      <li class="catalog__item">
        <a href="#" class="item__content">
          <img src="img/Group-3.svg" alt="">
          <span>Заточка</span>
        </a>

        <ul class="item__sub-menu">
          <li class="sub-menu__item">
            <a href="#" class="sub-menu__link">Фартуки</a>
          </li>
          <li class="sub-menu__item">
            <a href="#" class="sub-menu__link">Перчатки</a>
          </li>
        </ul>
      </li>
    </ul>

    <div class="catalog-container__btn-container"><a href="#" class="btn-container__button categories-btn"><i class="bi bi-arrow-down-short"></i><span>Все категории</span></a>

      <ul class="catalog-container__catalog push-menu">
        <li class="catalog__item">
          <a href="#" class="item__content">
            <img src="img/Group-1.svg" alt="">
            <span>Ножи разделочные</span>
          </a>
        </li>
        <li class="catalog__item">
          <a href="#" class="item__content">
            <img src="img/Group-2.svg" alt="">
            <span>Гигиена</span>
          </a>
        </li>
        <li class="catalog__item">
          <a href="#" class="item__content">
            <img src="img/Vector-2.svg" alt="">
            <span>Защитная одежда</span>
          </a>
        </li>
        <li class="catalog__item">
          <a href="#" class="item__content">
            <img src="img/Group-3.svg" alt="">
            <span>Заточка</span>
          </a>
        </li>
      </ul>

    </div>


  </div>


  <div class="products">
    <div class="products__navigation">
      <a href="#" class="item">All</a>
      <i class="bi bi-arrow-right arrow"></i>
      <a href="#" class="item">Next item</a>
      <i class="bi bi-arrow-right arrow"></i>
      <a href="" class="item">Next item</a>
    </div>

    <div class="products__container container d-flex justify-content-center">
      <div class="row d-flex justify-content-around w-100">
        <div class="product-item col-10 col-md-5 col-xxl-3">
          <img src="img/A812T 1.png" alt="">
          <h2>Слайсер SL-228 EV-5</h2>
          <div class="line"></div>
          <span class="product-item__price">Цена договорная</span>
          <a href="#" class="product-item__btn">Ознакомиться</a>
        </div>

        <div class="product-item col-10 col-md-5 col-xxl-3">
          <img src="img/A812T 1.png" alt="">
          <h2>Слайсер SL-228 EV-5</h2>
          <div class="line"></div>
          <span class="product-item__price">Цена договорная</span>
          <a href="#" class="product-item__btn">Ознакомиться</a>
        </div>


        <div class="product-item col-10 col-md-5 col-xxl-3">
          <img src="img/A812T 1.png" alt="">
          <h2>Слайсер SL-228 EV-5</h2>
          <div class="line"></div>
          <span class="product-item__price">Цена договорная</span>
          <a href="#" class="product-item__btn">Ознакомиться</a>
        </div>
        <div class="product-item col-10 col-md-5 col-xxl-3">
          <img src="img/A812T 1.png" alt="">
          <h2>Слайсер SL-228 EV-5</h2>
          <div class="line"></div>
          <span class="product-item__price">Цена договорная</span>
          <a href="#" class="product-item__btn">Ознакомиться</a>
        </div>

        <div class="product-item col-10 col-md-5 col-xxl-3">
          <img src="img/A812T 1.png" alt="">
          <h2>Слайсер SL-228 EV-5</h2>
          <div class="line"></div>
          <span class="product-item__price">Цена договорная</span>
          <a href="#" class="product-item__btn">Ознакомиться</a>
        </div>


        <div class="product-item col-10 col-md-5 col-xxl-3">
          <img src="img/A812T 1.png" alt="">
          <h2>Слайсер SL-228 EV-5</h2>
          <div class="line"></div>
          <span class="product-item__price">Цена договорная</span>
          <a href="#" class="product-item__btn">Ознакомиться</a>
        </div>
      </div>

    </div>
  </div>

  <footer class="footer">
    <div class="partners">
      <img src="img/dick-white 1.png" alt="" class="partners__item">
      <img src="img/Giesser_Messer_magazin_posudy_posuda_dlya_restoranov_professionalnaya.png" alt="" class="partners__item">
      <img src="img/mainca 1.png" alt="" class="partners__item">
      <img src="img/roser-group.png" alt="" class="partners__item">
      <img src="img/eicker 1.png" alt="" class="partners__item">
    </div>
  </footer>

  <div class="popup">
    <div class="popup__background"></div>

    <div class="popup__card">
      <div class="card__close"><i class="bi bi-x"></i></div>

      <div class="card__offer">
        <img src="img/A812T 1.png" alt="">
        <div class="offer__text">
          <h2>Слайсер SL-228 EV-5</h2>
          <span>Цена договорная</span>
        </div>
      </div>

      <ul class="card__description">
        <li class="description__item"><i class="bi bi-dot"></i>Lorem ipsum dolor</li>
        <li class="description__item"><i class="bi bi-dot"></i>Lorem ipsum dolor</li>
        <li class="description__item"><i class="bi bi-dot"></i>Lorem ipsum dolor</li>
        <li class="description__item"><i class="bi bi-dot"></i>Lorem ipsum dolor</li>
      </ul>

      <div class="card__buttons">
        <a href="#" class="buttons__buy-btn">Подробнее</a>
        <a href="#" class="buttons__more-btn">Заказать</a>
      </div>
    </div>
  </div>

  <!-- Popup script -->
  <script src="script/popup.js"></script>
  <!-- Mobile menu script -->
  <script src="script/menu.js"></script>
  <!-- BOOTSTRAP JS LINK -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>