$(document).ready(function () {
    let filterFormElement = $('.filter-product-form-js');
    let listProductElement = $('.list-product-js');

    $('select').on('change', function() {
        filterFormElement.submit();
    })
    
    filterFormElement.submit(function(e) {
        e.preventDefault();
        let form = $(this).serialize();
        let actionUrl = $(this).attr('action');
        let nameSearchValue = $('.search__input').val();
        form += '&name=' + encodeURIComponent(nameSearchValue);
        console.log($(location).attr('href').includes('category'));
        let currentUrl = $(location).attr('href');
        let isSortByCategory = currentUrl.includes('category');
        if (isSortByCategory) {
            let parts = currentUrl.split('/');
            let lastPart = parts[parts.length - 1];
            if (!isNaN(lastPart)) {
                form += '&category_id=' + encodeURIComponent(lastPart);
            }
        }
        $.ajax({
            type: "GET",
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