$(document).ready(function () {
    let table = $("#basic-datatables").DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: routeGetData,
            type: 'GET',
        },
        columns: [
            { data: 'product.id', name: 'product.id', className: 'product-id'},
            { data: 'product.name', name: 'product.name', className: 'name'},
            { data: 'color.name', name: 'color.name' },
            { data: 'storage.name', name: 'storage.name' },
            { data: 'quantity', name: 'quantity' },
            { data: 'price', name: 'price', className:'price-origin'},
            { data: 'product.updated_at', name: 'product.updated_at' },
            { data: 'actions', name: 'actions', searchable: false },
        ],
        ordering: false,
        searchDelay: 1000,
        drawCallback: function (settings) {
            let api = this.api();
            let rows = api.rows({ page: 'current' }).nodes();
            let lastValue = null;
            let indexNameColumn = 1;
            let productNameClass = '.name';
            let productIdClass = '.product-id';
            let priceOriginClass = '.price-origin';
            let productNameAccess = 'product.name';
            
            // row span if same product name
            api.column(indexNameColumn, { page: 'current' }).data().each(function (value, i) {
                // colspan field col
                $(rows).eq(i).find(priceOriginClass).attr('colspan', 2);

                if (lastValue !== value) {
                    lastValue = value;
                    let rowspanCount = api.rows({ page: 'current' }).data().filter(function (item) {
                        let valueDataApi = getNestedFieldValue(item, productNameAccess)
                        return valueDataApi === value;
                    }).length; 
                    $(rows).eq(i).find(productIdClass).attr('rowspan', rowspanCount);
                    $(rows).eq(i).find(productNameClass).attr('rowspan', rowspanCount);
                    return;
                } 
                $(rows).eq(i).find(productIdClass).remove();
                $(rows).eq(i).find(productNameClass).remove();
            });
        },
        order: [[0, 'asc']] 
    });

    function getNestedFieldValue(obj, fieldPath) {
        return fieldPath.split('.').reduce((acc, key) => acc && acc[key], obj);
    }

    function closeModal() {
        $('.btn-close').trigger('click');
    }

    function showModalForAction(formModal, element, action) {
        const name = element.attr('data-name');
        const routeAction = element.attr('data-route');
        let contentModalBody = lang.delete_form.body + ' ' + name + '?';
        $(formModal).attr('action', routeAction);

        formModal.find('.modal-body:first').text(contentModalBody);
    }

    function addEventClickShowModal(classBtns, action = 'delete') {
        $('#basic-datatables').on('click', classBtns, function (event) {
            showModalForAction(formModal, $(this), action);

            if (action == 'delete') {
                rowCurrent = $(this).closest('tr');
            }
        });
    }

    const classDeleteBtns = '.toggle-delete-js';
    const formModal = $('#container-modal form');
    let rowCurrent;
    addEventClickShowModal(classDeleteBtns);

    formModal.submit(function (e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.
        let form = new FormData(this);
        let actionUrl = $(this).attr('action');

        $.ajax({
            type: "POST",
            url: actionUrl,
            data: form,
            processData: false,
            contentType: false,
            success: function (data) {
                if (data.status) {
                    toastr.success(data.message);
                    rowCurrent.fadeOut();
                } else {
                    toastr.error(data.message);
                }
            },
            error: function (errors) {
                if (errors.hasOwnProperty("responseJSON") && errors.responseJSON.errors) {
                    let messages = errors.responseJSON.errors;
                    showToastrErrors(messages)
                }
            },
            complete: function () {
                closeModal();
            }
        });
    });
});