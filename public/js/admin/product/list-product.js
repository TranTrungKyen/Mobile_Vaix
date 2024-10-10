$(document).ready(function () {
    $("#basic-datatables").DataTable({});
    
    function closeModal () {
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