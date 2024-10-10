$(document).ready(function () {
    const addProductDetailBtn = $('.add-product-detail-js');
    const createProductDetailsFormElement = $('#product-details-form .card-body');
    const removeBtnClass = '.btn-remove';

    // get image id old deleted and product detail id old deleted
    let imgDeletedIds = [];
    let productDetailDeletedIds = [];

    // Enter at least 1 product detail
    $('body').on('click', removeBtnClass, function () {
        if($(removeBtnClass).length <= 1) {
            toastr.error('Vui lòng nhập ít nhất 1 chi tiết sản phẩm');
            return;
        }

        if ($(this).data('id')) {
            productDetailDeletedIds.push($(this).data('id'));
        }
        let rowOfRemoveBtn = $(this).closest('.row');
        rowOfRemoveBtn.remove();
    });

    // Render html row product detail inputs
    addProductDetailBtn.on('click', function (e) {
        const rowInputDataHtmls = `
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <input type="text" class="form-control" name="product_detail_id[]" value="" hidden>
                    <label for="color_id">Màu sắc</label>
                    <span class="text-danger">*</span>
                    <select class="form-select" name="color_id[]">
                        <option value="" hidden selected hidden>Chọn màu sắc</option>
                        ${colors.map(color => `<option value="${color.id}">${color.name}</option>`).join('')}
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="storage_id">Dung lượng</label>
                    <span class="text-danger">*</span>
                    <select class="form-select" name="storage_id[]">
                        <option value="" hidden selected hidden>Chọn dung lượng</option>
                        ${storages.map(storage => `<option value="${storage.id}">${storage.name}</option>`).join('')}
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="qty">Số lượng</label>
                    <span class="text-danger">*</span>
                    <input type="number" class="form-control" name="qty[]">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="price">Giá</label>
                    <span class="text-danger">*</span>
                    <input type="number" class="form-control" name="price[]">
                </div>
            </div>
            <div class="col">
                <div class="form-group d-flex align-items-end h-100">
                    <div class="btn btn-danger btn-remove">
                        <i class="fa-solid fa-trash"></i>
                    </div>
                </div>
            </div>
        </div>
        `;

        createProductDetailsFormElement.prepend(rowInputDataHtmls);
    })

    // ----------multiplefile-upload---------
    function ImgUpload() {
        let imgArray = [];

        $('.upload__inputfile').each(function () {
            $(this).on('change', function (e) {
                let imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
                let maxLength = parseInt($(this).attr('data-max_length'), 10);

                let files = e.target.files;
                let filesArr = Array.from(files);

                filesArr.some(function (f) {
                    if (!f.type.match('image.*')) {
                        return false;
                    }

                    if (imgArray.length >= maxLength) {
                        return true; // Stop upload file when max qty file
                    }

                    imgArray.push(f);

                    let reader = new FileReader();
                    reader.onload = function (e) {
                        let html = `
                            <div class='upload__img-box'>
                                <div style='background-image: url(${e.target.result})' data-file='${f.name}' class='img-bg'>
                                    <div class='upload__img-close'></div>
                                </div>
                            </div>`;
                        imgWrap.append(html);
                    };
                    reader.readAsDataURL(f);
                });

                updateInputFiles($(this), imgArray);
            });
        });

        $('body').on('click', ".upload__img-close", function () {
            if($('.upload__img-close').length <= 1) {
                toastr.error('Vui lòng chọn ít nhất 1 ảnh sản phẩm');
                return;
            }

            if ($(this).data('id')) {
                // increase max length image
                imgDeletedIds.push($(this).data('id'));
                let productImageElement = $('#product-images');
                let currMaxLengthImg = productImageElement.attr('data-max_length');
                productImageElement.attr('data-max_length', ++currMaxLengthImg);
            }

            let fileName = $(this).parent().data("file");

            // Delete file from imgArray and update input file
            imgArray = imgArray.filter(f => f.name !== fileName);
            let input = $(this).closest('.upload__box').find('.upload__inputfile');
            updateInputFiles(input, imgArray);

            // Delete element HTML of image deleted
            $(this).closest('.upload__img-box').remove();
        });

        function updateInputFiles(input, files) {
            let dataTransfer = new DataTransfer();
            files.forEach(file => dataTransfer.items.add(file));
            input[0].files = dataTransfer.files;
        }
    }
    ImgUpload();
    
    function appendElementToArrayOfForm (arr, keyArrOfForm ,form)
    {
        arr.forEach((item, index) => {
            form.append(`${keyArrOfForm}[${index}]`, item); // add element to form data
        });
    }

    // this is the id of the form
    $("#product-details-form").submit(function (e) {
        e.preventDefault(); // avoid to execute the actual submit of the form.
        let form = new FormData(this);
        appendElementToArrayOfForm(imgDeletedIds, 'imgDeletedIds', form);
        appendElementToArrayOfForm(productDetailDeletedIds, 'productDetailDeletedIds', form);
        let actionUrl = $(this).attr('action');

        $.ajax({
            type: "POST",
            url: actionUrl,
            data: form,
            processData: false,
            contentType: false,
            success: function (data) {
                if (data.status) {
                    localStorage.setItem('success', data.message);
                    window.location.href = data.redirectRoute;
                } else {
                    toastr.error(data.message);
                }
            },
            error: function (errors) {
                if (errors.hasOwnProperty("responseJSON") && errors.responseJSON.errors) {
                    let messages = errors.responseJSON.errors;
                    showToastrErrors(messages)
                }
            }
        });

    });
});