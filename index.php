<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="css/style.css" />

  <!-- BOOTSTRAP LINK -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- Required Core Stylesheet -->
  <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.core.min.css" />

  <!-- Optional Theme Stylesheet -->
  <link rel="stylesheet" href="node_modules/@glidejs/glide/dist/css/glide.theme.min.css" />

  <title>Document</title>
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

  <section style="background-image: url(img/title_bg.png)" class="
        title
        container-fluid
        d-flex
        flex-column
        justify-content-center
        align-items-center
      ">
    <div class="title__gradient"></div>
    <img src="img/logo.png" class="logo" onclick="location.href='index.html'" />
    <a href="#" class="phonenumber phonenumber_title">
      <i class="phonenumber__icon bi bi-telephone"></i>
      <span class="phonenumber__text"> +375 (162) 35 64 45 </span>
    </a>
    <a href="#" class="insta">
      <i class="insta__icon bi bi-instagram"></i>
      <span class="insta__text"> knives_valvit </span>
    </a>
  </section>

  <section class="slider">
    <div class="row justify-content-center m-0">
      <div class="col-10 col-lg-9 slider__container">
        <div class="glide">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
              <li class="slider__item glide__slide">
                <div class="slider__item-content" data-href="0" style="background-image: url(img/slider1.png);">
                  <span>Ножи разделдочные</span>
                </div>
              </li>
              <li class="slider__item glide__slide">
                <div class="slider__item-content" data-href="1" style="background-image: url(img/slider2.jpg);">
                  <span>Слайсеры</span>
                </div>
              </li>
              <li class="slider__item glide__slide">
                <div class="slider__item-content" data-href="2" style="background-image: url(img/slider3.jpg);">
                  <span>Мусаты</span>
                </div>
              </li>
              <li class="slider__item glide__slide">
                <div class="slider__item-content" data-href="3" style="background-image: url(img/slider4.jpg);">
                  <span>Разделдочные приборы</span>
                </div>
              </li>
            </ul>
          </div>
          <div class="slider__controls" data-glide-el="controls">
            <button class="slider__side-btn" data-glide-dir="<"> <i class="bi bi-arrow-left"></i> </button>
            <a class="slider__topic-btn"> Подробнее </a>
            <button class="slider__side-btn" data-glide-dir=">"> <i class="bi bi-arrow-right"></i> </button>
          </div>
        </div>

      </div>
    </div>
  </section>

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

  <section class="container">
    <div class="row d-flex justify-content-center">
      <h2 class="text-center col-12 section-title">
        Хит продаж
      </h2>
    </div>
    <div class=" products__container
     row
      d-flex
       justify-content-center
        justify-content-md-around
        ">
      <div class="product-item col-10 col-md-5 col-xxl-3">
        <img src="img/A812T 1.png" alt="">
        <h2>Слайсер SL-228 EV-5</h2>
        <div class="line"></div>
        <span class="product-item__price">Цена договорная</span>
        <a href="#" class="product-item__btn">Ознакомиться</a>

      </div>

      <div class="product-item col-10 col-md-5 col-xxl-3 hit-flag">
        <img src="img/A812T 1.png" alt="">
        <h2>Слайсер SL-228 EV-5</h2>
        <div class="line"></div>
        <span class="product-item__price">Цена договорная</span>
        <a href="#" class="product-item__btn">Ознакомиться</a>
        <div class="triangle"><span>ХИТ!</span></div>
      </div>


      <div class="product-item col-10 col-md-5 col-xxl-3 hit-flag">
        <img src="img/A812T 1.png" alt="">
        <h2>Слайсер SL-228 EV-5</h2>
        <div class="line"></div>
        <span class="product-item__price">Цена договорная</span>
        <a href="#" class="product-item__btn">Ознакомиться</a>
        <div class="triangle"><span>ХИТ!</span></div>
      </div>

    </div>

  </section>

  <section class="container">
    <div class="row d-flex justify-content-center">
      <h2 class="text-center col-12 section-title">
        Все товары
      </h2>
    </div>
    <div class=" products__container
     row
      d-flex
       justify-content-center
        justify-content-md-around
        ">
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

  </section>

  <section class="container">
    <div class="row d-flex justify-content-center">
      <h2 class="text-center col-12 section-title">
        Новости
      </h2>
    </div>
    <div class=" products__container
     row
      d-flex
       justify-content-center
        justify-content-md-around
        ">
      <div class="product-item news-card col-10 col-md-5 col-xxl-3">
        <div class="news-card__thumb" style="background-image: url(img/newspic.png);"></div>
        <h2>Слайсер SL-228 EV-5</h2>
        <div class="line"></div>
        <span class="news-card__text">
          Lorem ipsum dolor sit amet, consectetur
          adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
          aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
          ut aliquip ex ea commodo consequat...
        </span>
        <a href="#" class="product-item__btn">Читать далее</a>
      </div>

      <div class="product-item news-card col-10 col-md-5 col-xxl-3">
        <div class="news-card__thumb" style="background-image: url(img/newspic.png);"></div>
        <h2>Слайсер SL-228 EV-5</h2>
        <div class="line"></div>
        <span class="news-card__text">
          Lorem ipsum dolor sit amet, consectetur
          adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
          aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
          ut aliquip ex ea commodo consequat...
        </span>
        <a href="#" class="product-item__btn">Читать далее</a>
      </div>

      <div class="product-item news-card col-10 col-md-5 col-xxl-3">
        <div class="news-card__thumb" style="background-image: url(img/newspic.png);"></div>
        <h2>Слайсер SL-228 EV-5</h2>
        <div class="line"></div>
        <span class="news-card__text">
          Lorem ipsum dolor sit amet, consectetur
          adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
          aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
          ut aliquip ex ea commodo consequat...
        </span>
        <a href="#" class="product-item__btn">Читать далее</a>
      </div>

    </div>
  </section>

  <section class="d-flex flex-column container justify-content-start">
    <div class="row d-flex justify-content-center">
      <h2 class="text-center col-12 section-title">
        Контакты
      </h2>
    </div>
    <h3 class="contacts__title">
      ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ "ВАЛВИТ"
    </h3>
    <span class="contacts__subtitle">
      Наш адрес:
    </span>
    <span class="contacts__text">
      224023, Республика Беларусь, г. Брест, ул. Васнецова 50, офис 8
    </span>
    <span class="contacts__subtitle">
      Банк:
    </span>
    <span class="contacts__text">
      р/с BY45OLMP30123000590040000933 в ОАО "Белгазпромбанк" Брестская областная дирекция"
      г. Брест, ул. Советской Конституции, 15, код банка OLMPBY2X
    </span>
    <span class="contacts__subtitle">
      Контакты:
    </span>
    <span class="contacts__text">
      <span>тел./факс: +375 162 35 64 45</span>
      <span>моб.тел.: +375 29 340-05-37</span>
      <span>е-mail: valvitinfo@tut.by</span>
      <span>сайт: www.valvit.by, www.slicer.by</span>

    </span>
    <div class="container-fluid">
      <iframe class="w-100" height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2351.1320393878077!2d27.548209715974792!3d53.89385704125977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbcf73f6e678a7%3A0x3a381d5362a18cb7!2z0JvQtdC90LjQvdCz0YDQsNC00YHQutCw0Y8gMQ!5e0!3m2!1sru!2sby!4v1626270655913!5m2!1sru!2sby" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </section>


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



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="node_modules/@glidejs/glide/dist/glide.min.js"></script>
  <script src="script/glideJsMount.js"> </script>
  <script src="script/menu.js"></script>
  <script src="script/index.js"></script>
  <script src="script/popup.js"></script>

  <!-- Test Js -->
  <script src="script/test.js"></script>
</body>

</html>