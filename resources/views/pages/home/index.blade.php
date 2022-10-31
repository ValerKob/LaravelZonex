@extends('layouts.main')

{{-- @section('title', 'Zonex') --}}

@section('content')
    <div class="sidebar">
        <div class="wrapper__slider__one">
            <div class="flex__wrapper">
                <div class="slider__wrapper">
                    <div class="slide">
                        <img class="slider-img" src="./assets/images/slider-one/1.png" alt="title">
                        <div class="sidebar__info">
                            <div class="sidebar__title">Perfectly Poised</div>
                            <div class="sidebar__text">Discover our women's gift selection, including the La
                                Medusa
                                handbag.</div>
                        </div>
                    </div>
                    <div class="slide active">
                        <img class="slider-img active" src="./assets/images/slider-one/2.png" alt="title">
                        <div class="sidebar__info">
                            <div class="sidebar__title active">Fall-Winter Clearance Sales</div>
                            <div class="sidebar__text active">All Sale Items are Final Sale / Free Shipping on
                                All
                                Orders</div>
                        </div>
                    </div>
                    <div class="slide">
                        <img class="slider-img" src="./assets/images/slider-one/3.png" alt="title">
                        <div class="sidebar__info">
                            <div class="sidebar__title">For The Ultimate, Look Pair</div>
                            <div class="sidebar__text">or the finishing touch, browse an array of luxurious
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dots__wrapper">
                <span class="dot"></span>
                <span class="dot active"></span>
                <span class="dot"></span>
            </div>
        </div>

        <style> 
            @media (max-width: 770px) {
                .wrapper__slider__one {
                    display: none;
                }
            } 
        </style>

        <div class="shop__new">
            <div class="row gy-5">

                <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="shop__new-item">
                        <img class="shop__new-photo" src="./assets/images/shop__new/1.png" alt="">
                        <div class="shop__new-new">
                            <div class="shop__new-item--title">Women's <p>Mid-Season</p>
                            </div>
                            <div class="shop__new-item--text">Shop Now</div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="shop__new-item">
                        <img class="shop__new-photo" src="./assets/images/shop__new/2.png" alt="">
                        <div class="shop__new-new">
                            <div class="shop__new-item--title">Summer <p>Romance</p>
                            </div>
                            <div class="shop__new-item--text">Shop Now</div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-6 col-xl-4">
                    <div class="shop__new-item shop__new-item-three">
                        <img class="shop__new-photo" src="./assets/images/shop__new/3.png" alt="">
                        <div class="shop__new-new">
                            <div class="shop__new-item--title">20% Off <p>All Accessories</p>
                            </div>
                            <div class="shop__new-item--text">Shop Now</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="shop__new-page">
            <a href="#">
                <div class="shop__new-page--item active">
                    <p>Best Sellers </p>
                </div>
            </a>
            <a href="#">
                <div class="shop__new-page--item">
                    <p>New Products </p>
                </div>
            </a>
            <a href="#">
                <div class="shop__new-page--item">
                    <p>Sale Products</p>
                </div>
            </a>
        </div>


        <div class="row gy-5">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="shop__catalog-item">
                    <div class="shop__catalog-item--img-content">
                        <img src="./assets/images/shop/1.png" alt="">
                        <div class="shop__catalog-item--img-title">My Boat</div>
                        <div class="shop__catalog-item--img-text">Backpack with contrasting buckle</div>
                        <a href="#">
                            <div class="shop__catalog-item--img-button">Detailed</div>
                        </a>
                    </div>

                    <div class="shop__catalog-item-icon">
                        <img src="./assets/images/shop-icon/lightning.svg" alt="">
                        <span>New</span>
                    </div>
                    <div class="shop__catalog-item--title">Eye Mesh Boat Shoes</div>
                    <div class="shop__catalog-item--text">$220.00</div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="shop__catalog-item">
                    <div class="shop__catalog-item--img-content vertical">
                        <img src="./assets/images/shop/2.png" alt="">
                        <div class="shop__catalog-item--img-title">My Boat</div>
                        <div class="shop__catalog-item--img-text">Backpack with contrasting buckle</div>
                        <a href="#">
                            <div class="shop__catalog-item--img-button">Detailed</div>
                        </a>
                    </div>

                    <div class="shop__catalog-item--title">Azure Tote</div>
                    <div class="shop__catalog-item--text">$290.00</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="shop__catalog-item">
                    <div class="shop__catalog-item--img-content vertical">
                        <img src="./assets/images/shop/3.png" alt="">
                        <div class="shop__catalog-item--img-title">My Boat</div>
                        <div class="shop__catalog-item--img-text">Backpack with contrasting buckle</div>
                        <a href="#">
                            <div class="shop__catalog-item--img-button">Detailed</div>
                        </a>
                    </div>

                    <div class="shop__catalog-item--title">Blue Raincoat</div>
                    <div class="shop__catalog-item--text">$220.00</div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="shop__catalog-item">
                    <div class="shop__catalog-item--img-content vertical">
                        <img src="./assets/images/shop/4.png" alt="">
                        <div class="shop__catalog-item--img-title">My Boat</div>
                        <div class="shop__catalog-item--img-text">Backpack with contrasting buckle</div>
                        <a href="#">
                            <div class="shop__catalog-item--img-button">Detailed</div>
                        </a>
                    </div>

                    <div class="shop__catalog-item-icon">
                        <img src="./assets/images/shop-icon/switch.svg" alt="">
                        <span>best seller</span>
                    </div>
                    <div class="shop__catalog-item--title">Backpack with contrasting buckle</div>
                    <div class="shop__catalog-item--text">$80.00 – $125.00</div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="shop__catalog-item">
                    <div class="shop__catalog-item--img-content vertical">
                        <img src="./assets/images/shop/5.png" alt="">
                        <div class="shop__catalog-item--img-title">My Boat</div>
                        <div class="shop__catalog-item--img-text">Backpack with contrasting buckle</div>
                        <a href="#">
                            <div class="shop__catalog-item--img-button">Detailed</div>
                        </a>
                    </div>

                    <div class="shop__catalog-item-icon">
                        <img src="./assets/images/shop-icon/switch.svg" alt="">
                        <span>best seller</span>
                    </div>
                    <div class="shop__catalog-item--title">Shirt in organic cotton classic gingham</div>
                    <div class="shop__catalog-item--text">$59.50</div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="shop__catalog-item">
                    <div class="shop__catalog-item--img-content vertical">
                        <img src="./assets/images/shop/6.png" alt="">
                        <div class="shop__catalog-item--img-title">My Boat</div>
                        <div class="shop__catalog-item--img-text">Backpack with contrasting buckle</div>
                        <a href="#">
                            <div class="shop__catalog-item--img-button">Detailed</div>
                        </a>
                    </div>

                    <div class="shop__catalog-item-icon">
                        <img src="./assets/images/shop-icon/fire.svg" alt="">
                        <span>Hot</span>
                    </div>
                    <div class="shop__catalog-item--title">Tailored indigo jumpsuit</div>
                    <div class="shop__catalog-item--text">$128.00</div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="shop__catalog-item">
                    <div class="shop__catalog-item--img-content">
                        <img src="./assets/images/shop/7.png" alt="">
                        <div class="shop__catalog-item--img-title">My Boat</div>
                        <div class="shop__catalog-item--img-text">Backpack with contrasting buckle</div>
                        <a href="#">
                            <div class="shop__catalog-item--img-button">Detailed</div>
                        </a>
                    </div>

                    <div class="shop__catalog-item-icon">
                        <img src="./assets/images/shop-icon/star.svg" alt="">
                        <span>Top rate</span>
                    </div>
                    <div class="shop__catalog-item--title">Triple stone drop earrings</div>
                    <div class="shop__catalog-item--text">$49.50</div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="shop__catalog-item">
                    <div class="shop__catalog-item--img-content">
                        <img src="./assets/images/shop/8.png" alt="">
                        <div class="shop__catalog-item--img-title">My Boat</div>
                        <div class="shop__catalog-item--img-text">Backpack with contrasting buckle</div>
                        <a href="#">
                            <div class="shop__catalog-item--img-button">Detailed</div>
                        </a>
                    </div>

                    <div class="shop__catalog-item--title">Backpack with contrasting buckle</div>
                    <div class="shop__catalog-item--text">$158.00</div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="shop__catalog-item">
                    <div class="shop__catalog-item--img-content vertical">
                        <img src="./assets/images/shop/9.png" alt="">
                        <div class="shop__catalog-item--img-title">My Boat</div>
                        <div class="shop__catalog-item--img-text">Backpack with contrasting buckle</div>
                        <a href="#">
                            <div class="shop__catalog-item--img-button">Detailed</div>
                        </a>
                    </div>

                    <div class="shop__catalog-item-icon">
                        <img src="./assets/images/shop-icon/gear.svg" alt="">
                        <span>Only a few left</span>
                    </div>
                    <div class="shop__catalog-item--title">Eye Mesh Boat Shoes</div>
                    <div class="shop__catalog-item--text">$220.00</div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="shop__catalog-item">
                    <div class="shop__catalog-item--img-content vertical">
                        <img src="./assets/images/shop/10.png" alt="">
                        <div class="shop__catalog-item--img-title">My Boat</div>
                        <div class="shop__catalog-item--img-text">Backpack with contrasting buckle</div>
                        <a href="#">
                            <div class="shop__catalog-item--img-button">Detailed</div>
                        </a>
                    </div>

                    <div class="shop__catalog-item--title">Azure Tote</div>
                    <div class="shop__catalog-item--text">$290.00</div>
                </div>
            </div>
        </div>



        <div class="load__more">
            <div class="load__more-scroll">
                <p>Load More</p>
            </div>
        </div>



        <div class="read__more">
            <div class="row gy-0">
                <div class="col-12 col-xl-6">
                    <div class="read__more-item">
                        <img src="./assets/images/read/1.png" alt="">
                        <div class="read__more-content">
                            <div class="read__more-title">Men’s Sportswear</div>
                            <div class="read__more-link">Read more</div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-xl-6">
                    <div class="read__more-item">
                        <img src="./assets/images/read/2.png" alt="">
                        <div class="read__more-content">
                            <div class="read__more-title">Men’s Sportswear</div>
                            <div class="read__more-link">Read more</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="footer">

            <div class="info" style="border-bottom: none;  padding-bottom: 50px;">
                <div class="row">

                    <div class="col-12 col-lg-6 col-xl-4">
                        <div class="info__item">
                            <div class="info__item-title">Customer service</div>
                            <div class="info__item-link">
                                <ul>
                                    <li>
                                        <p>Phone: +866.597.2742</p>
                                    </li>
                                    <li>
                                        <p>Live chat</p>
                                    </li>
                                    <li>
                                        <p>About Us</p>
                                    </li>
                                    <li>
                                        <p>Terms & Conditions</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 col-xl-4">
                        <div class="info__item">
                            <div class="info__item-title">Company</div>
                            <div class="info__item-link">
                                <ul>
                                    <li>
                                        <p>What We Do</p>
                                    </li>
                                    <li>
                                        <p>Available Services</p>
                                    </li>
                                    <li>
                                        <p>Latest Posts</p>
                                    </li>
                                    <li>
                                        <p>FAQs</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-6 col-xl-4">
                        <div class="info__item">
                            <div class="info__item-title">Our newsletter</div>
                            <div class="info__item-link">
                                <ul>
                                    <li>
                                        <p>Join our list and get 15% off your first purchase!</p>
                                    </li>
                                    <li>
                                        <div class="info__item-text">
                                            <form action="">
                                                <input class="info__item-text--input" type="text"
                                                    placeholder="Email Address">
                                            </form>
                                            <div class="info__item-text--subscribe">
                                                Subscribe
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <p>*Don’t worry we don’t spam</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection