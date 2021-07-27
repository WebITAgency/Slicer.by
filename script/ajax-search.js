console.log(my_ajax_object.ajax_url);

let searchInput = $('.header__search-field');
console.log(searchInput);
let searchResult = document.querySelector('.ajax-search');

// searchInput.addEventListener('keyup', (e) => {
//     let searchValue = e.target.value;
//     if(searchValue.length > 2){
//         $.ajax({
//             url: my_ajax_object.ajax_url,
//             type: 'POST',
//             data: {
//                 'action' : 'ajax_search',
//                 'term': searchValue
//             },
//             success: (results) => {
//                 searchResult.fadeIn(200).html(results);
//             }
//         });
//     } else {
//        // searchResult.fadeOut(200);
//     }
// });
