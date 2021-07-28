console.log(my_ajax_object.ajax_url);

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
    } else {
       // searchResult.fadeOut(200);
    }
});

  });



