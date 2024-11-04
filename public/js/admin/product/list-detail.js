$(document).ready(function () {
    let table = $("#basic-datatables").DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: routeGetData,
            type: 'GET',
        },
        columns: [
            { data: 'product.id', name: 'product.id', className: 'product-id' },
            { data: 'product.name', name: 'product.name', className: 'name' },
            { data: 'color.name', name: 'color.name' },
            { data: 'storage.name', name: 'storage.name' },
            { data: 'quantity', name: 'quantity' },
            { data: 'price', name: 'price', className: 'price-origin' },
            { data: 'product.updated_at', name: 'product.updated_at' },
            { data: 'actions', name: 'actions', className: 'actions' },
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
            let actionClass = '.actions';
            let productNameAccess = 'product.name';

            // row span if same product name
            api.column(indexNameColumn, { page: 'current' }).data().each(function (value, i) {
                if (lastValue !== value) {
                    lastValue = value;
                    let rowspanCount = api.rows({ page: 'current' }).data().filter(function (item) {
                        let valueDataApi = getNestedFieldValue(item, productNameAccess)
                        return valueDataApi === value;
                    }).length;
                    $(rows).eq(i).find(actionClass).attr('rowspan', rowspanCount);
                    $(rows).eq(i).find(productIdClass).attr('rowspan', rowspanCount);
                    $(rows).eq(i).find(productNameClass).attr('rowspan', rowspanCount);
                    return;
                }
                $(rows).eq(i).find(actionClass).remove();
                $(rows).eq(i).find(productIdClass).remove();
                $(rows).eq(i).find(productNameClass).remove();
            });
        },
        order: [[0, 'asc']],
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
    });
    // Đếm số lượng cột
    var columnCount = table.columns().count();
    console.log("Số lượng cột: " + columnCount);

    $('.export-excel-btn-js').on('click', function (e) {
        // fnExcelReport();
        tableToExcel('basic-datatables', 'Test');

    })
    var tableToExcel = (function () {
        var uri = 'data:application/vnd.ms-excel;base64,',
            template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40">' +
                '<head><!--[if gte mso 9]>' +
                '<xml><x:ExcelWorkbook><x:ExcelWorksheets>' +
                '<x:ExcelWorksheet><x:Name>{worksheet}</x:Name>' +
                '<x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet>' +
                '</x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]-->' +
                '<meta http-equiv="content-type" content="text/plain; charset=UTF-8"/>' +
                '<style>' +
                'table { border-collapse: collapse; } ' +
                'th, td { border: 1px solid black; padding: 5px; } ' +
                'th { font-weight: bold; background-color: #f2f2f2; }' +
                '</style>' +
                '</head><body><table>{table}</table></body></html>',
            base64 = function (s) { return window.btoa(unescape(encodeURIComponent(s))) },
            format = function (s, c) { return s.replace(/{(\w+)}/g, function (m, p) { return c[p]; }) };

        return function (table, name) {
            if (!table.nodeType) {
                table = document.getElementById(table);
            }
            var ctx = { worksheet: name || 'Worksheet', table: table.innerHTML };
            var filename = name ? name + '.xls' : 'Worksheet.xls'; // Đặt tên file
            var link = document.createElement('a');
            link.href = uri + base64(format(template, ctx));
            link.download = filename; // Gán tên file cho thuộc tính download
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        };
    })();

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