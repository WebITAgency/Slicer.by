<form
    role="search"
    method="get"
    action="<?php echo home_url(); ?>"
    class="d-none d-lg-flex header__search-form">
          <input class="header__search-field search-mark"
           placeholder="Поиск"
            type="text"
            autocompete="off"
            name="aboba" id="">
          <!-- <button class="header__search-submit" type="submit"> <i class="bi bi-search"></i> </button> -->
          <ul class="ajax-search search-mark"></ul>
        </form>