$(document).ready(function () {
    const inputStorageElement = $("#storage");
    const inputColorElement = $("#color");
    const inputProductDetailIdElement = $("#product-detail-id");
    const productDetailPriceElement = $('.product-detail-price-js');

    // Render position by department
    function showColorByStorage() {
        const storageId = $(this).val();

        let optionColorHtmls = productDetailValues.map((element) => {

            if (storageId == element.storage_id) {
                return `<option value="${element.color_id}">${element.color.name}</option>`;
            }
        })
        inputColorElement.html(`<option value="" selected="">Chọn màu sắc</option>` + optionColorHtmls);
        // Set productDetailId is null
        inputProductDetailIdElement.val('');

        if (!storageId) {
            inputColorElement.attr('disabled', 'disabled');
            return;
        }
        if (inputColorElement.attr('disabled')) {
            inputColorElement.removeAttr('disabled');
        }
    }
    inputStorageElement.on('input change', showColorByStorage);

    // getProductDetailId
    function getProductDetailId() {
        const storageId = inputStorageElement.val();
        const colorId = inputColorElement.val();
        productDetailValues.forEach(productDetail => {
            if (storageId != productDetail.storage_id || colorId != productDetail.color_id) {
                return;
            }
            inputProductDetailIdElement.val(productDetail.id);
            changePrice(productDetail.price, productDetail.price_current)
        });
    }

    function changePrice(price, priceCurrent) {

        let priceHtmls = `
            <h2 class="price mb-0 mr-2 price-js--vi" data-amount="${price}"></h2>
        `;
        if (priceCurrent != null) {
            priceHtmls = `
                <h2 class="price mb-0 mr-2 price-js--vi" data-amount="${priceCurrent}"></h2>
                <p class="old-price mb-0 d-flex align-items-end price-js--vi" data-amount="${price}"></p>
            `;
        }
        productDetailPriceElement.html(priceHtmls);
        formatAllPriceViElement()
    }

    // Set product detail id
    inputColorElement.on('change', getProductDetailId);

    $('#productImageControls').on('click', '.carousel-control-prev', function () {
        $('#productImageControls').carousel('prev');
    })
    $('#productImageControls').on('click', '.carousel-control-next', function () {
        $('#productImageControls').carousel('next');
    })
});