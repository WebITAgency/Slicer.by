<form
    role="search"
    method="get"
    aria-label="desktop"
    action="<?php echo home_url(); ?>"
    class="d-none d-lg-flex header__search-form">
          <input class="header__search-field search-mark"
           placeholder="Поиск"
            type="text"
            autocompete="off"
            name="search" id="">
          <ul class="ajax-search search-mark"></ul>
        </form>

 <form
    role="search"
    method="get"
    aria-label="mobile"
    action="<?php echo home_url(); ?>"
    class="d-flex d-lg-none header-mobile__search-form">
          <input class="header-mobile__search-field search-mark"
           placeholder="Поиск"
            type="text"
            autocompete="off"
            name="search-mobile" id="">
          <ul class="ajax-search-mobile search-mark"></ul>
        </form>