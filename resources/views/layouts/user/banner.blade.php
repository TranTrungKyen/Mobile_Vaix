{{-- Banner --}}
<section class="container">
    <div class="row">
        <div class="col-md-8">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner rounded">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/realme-gt-neo-5.jpg') }}" class="d-block w-100" alt="neo-5">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/neo-5-se.jpg') }}" class="d-block w-100" alt="neo-5-se">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls"
                    data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleControls"
                    data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="banner-items d-flex align-items-end flex-column">
                <img src="{{ asset('images/banner-2.jpg') }}" class="w-96 rounded" alt="banner-2">
                <img src="{{ asset('images/banner-1.jpg') }}" class="w-96 rounded mt-2" alt="banner-1">
            </div>
        </div>
    </div>
</section>
{{-- Banner end --}}
