$(document).ready(function () {
    let filterFormElement = $('.filter-product-form-js');
    let listProductElement = $('.list-product-js');

    $('select').on('change', function() {
        let key = 'sort_name';
        localStorage.setItem(key, $(this).val());
        if(!$(this).val()) {
            localStorage.removeItem(key);
        }
        filterFormElement.submit();
    })

    $('body').on('click', 'a.page-link', function (e) {
        e.preventDefault();
        let actionUrl = $(this).attr('href');
        if (localStorage.getItem('sort_name')) {
            actionUrl += '&sort_name=' + localStorage.getItem('sort_name');
        }
        let nameSearchValue = $('.search__input').val();
        if (nameSearchValue) {
            actionUrl += '&name=' + encodeURIComponent(nameSearchValue);
        }
        let urlParams = new URLSearchParams(window.location.search);
        let value = urlParams.get('category_id'); 
        if (value) {
            actionUrl += '&category_id=' + encodeURIComponent(value);
        }

        $.ajax({
            url: actionUrl,
            success: function (data) {
                listProductElement.html(data);
                formatAllPriceViElement();
            },
            error: function (errors) {
                if (errors.hasOwnProperty("responseJSON") && errors.responseJSON.errors) {
                    let messages = errors.responseJSON.errors;
                    showToastrErrors(messages)
                }
            },
        });
    })
     
    filterFormElement.submit(function(e) {
        e.preventDefault();
        let form = $(this).serialize();
        let actionUrl = $(this).attr('action');
        let type = 'GET';

        let nameSearchValue = $('.search__input').val();
        if (nameSearchValue) {
            form += '&name=' + encodeURIComponent(nameSearchValue);
        }
        let urlParams = new URLSearchParams(window.location.search);
        let value = urlParams.get('category_id'); 
        if (value) {
            form += '&category_id=' + encodeURIComponent(value);
        }
        
        $.ajax({
            type: type,
            url: actionUrl,
            data: form,
            success: function (data) {
                listProductElement.html(data);
                formatAllPriceViElement();
            },
            error: function (errors) {
                if (errors.hasOwnProperty("responseJSON") && errors.responseJSON.errors) {
                    let messages = errors.responseJSON.errors;
                    showToastrErrors(messages)
                }
            },
        });
    });
});