<div class="container">

{{--    Carousel--}}
    <div class="row">
        <div class="col-12 ">
            <div>
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="https://firebasestorage.googleapis.com/v0/b/personal-34526.appspot.com/o/shop1.jpg?alt=media&token=0314cd0c-3f72-4728-aa0a-053f48a2b133" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="https://firebasestorage.googleapis.com/v0/b/personal-34526.appspot.com/o/shop2.jpg?alt=media&token=3842d7e0-8666-4c6b-90e7-b37f8f35896a" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://firebasestorage.googleapis.com/v0/b/personal-34526.appspot.com/o/shop3.jpg?alt=media&token=bafed0a0-516e-4648-9576-2eebc59cb2f5" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
{{--    Carousel--}}

{{--    Categories--}}
    <div class="row">
        <div class="col-12">
            <div class="header-text">
                Browse Popular Categories
            </div>
            <div>
                <div class="row">

                    @foreach(\App\Models\Category::all() as $category)
                        <div class="col-12 col-lg-2 mt-2 mt-lg-0">
                            <div class="category-card">
                                {{ $category->name }}
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
{{--    Categories--}}

{{--    Items--}}
    <div class="row">
        <div class="col-12">
            <div class="header-text">
                New Lasted Items
            </div>
            <div>
                <div class="row">

                    <div class="col-12 col-lg-4">
                        <div class="item-card">
                            <div class="item-card-img">
                                <img src="https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg" width="100px" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
{{--    Items--}}

</div>
