document.addEventListener("DOMContentLoaded", function(event) { 
    document.getElementsByClassName('header-mobile__search-form')[0].remove();
    document.getElementsByClassName('header__search-form')[1].remove();
});


// Desktop
document.addEventListener("DOMContentLoaded", function(event) { 
    let searchInput = document.querySelector('.header__search-field');
    let searchResult = document.querySelector('.ajax-search');
    searchInput.addEventListener('keyup', (e) => {
    let searchValue = e.target.value;
    if(searchValue.length > 2){
        $.ajax({
            url: my_ajax_object.ajax_url,
            type: 'POST',
            data: {
                'action' : 'ajax_search',
                'term': searchValue
            },
            success: (results) => {
                searchResult.innerHTML = results;
            }
        });
        searchResult.style.display = "flex";
    } else {
       searchResult.style.display = "none";
    }
});
    document.body.addEventListener('click', (e) => {
        if(!e.target.classList.contains('search-mark')){
            searchResult.style.display = "none";
        }else{
            searchResult.style.display = "flex";
        }
    });
  });

//mobile
  document.addEventListener("DOMContentLoaded", function(event) { 
    let searchInput = document.querySelector('.header-mobile__search-field');
    let searchResult = document.querySelector('.ajax-search-mobile');
    searchInput.addEventListener('keyup', (e) => {
    let searchValue = e.target.value;
    if(searchValue.length > 2){
        console.log("AWD");
        $.ajax({
            url: my_ajax_object.ajax_url,
            type: 'POST',
            data: {
                'action' : 'ajax_search_mobile',
                'term': searchValue
            },
            success: (results) => {
                searchResult.innerHTML = results;
            }
        });
        searchResult.style.display = "flex";
    } else {
       searchResult.style.display = "none";
    }
});
    document.body.addEventListener('click', (e) => {
        if(!e.target.classList.contains('search-mark-mobile')){
            searchResult.style.display = "none";
        }else{
            searchResult.style.display = "flex";
        }
    });
  });


