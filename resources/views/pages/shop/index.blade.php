@extends('layouts.main')

@section('title', 'Shop')

@section('content')
    <div class="shop__sidebar__zonex">

        <div class="slider__2">
            <div class="flex__wrapper-2">
                <div class="slider__wrapper-2">
                    <div class="slider-2 active">
                        <img class="img__slider-2 active" src="./assets/images/shop__slider__2/1.png" alt="">
                        <div class="slider-2--content">
                            <div class="slider-2--title active">The best thing about going back to school?</div>
                            <div class="slider-2--text active">This fall denim is king! Denim is officially back
                                in and cool to wear in all its many forms</div>
                            <div class="slider-2--button">
                                <div class="slider-2--button_left activeButton" id="slider-2--button_left-one">
                                    Discovery</div>
                                <div class="slider-2--button_right activeButton"
                                    id="slider-2--button_right-one">Shop now</div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-2">
                        <img class="img__slider-2" src="./assets/images/shop__slider__2/2.png" alt="">
                        <div class="slider-2--content">
                            <div class="slider-2--title">Staff style asosers on style dresses!</div>
                            <div class="slider-2--text">Denim is officially back in and cool to wear in all its
                                many forms</div>
                            <div class="slider-2--button">
                                <div class="slider-2--button_left" id="slider-2--button_left-two">Discovery
                                </div>
                                <div class="slider-2--button_right" id="slider-2--button_right-two">Shop now
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-2">
                        <img class="img__slider-2" src="./assets/images/shop__slider__2/3.png" alt="">
                        <div class="slider-2--content">
                            <div class="slider-2--title">Of the best style topshop pride</div>
                            <div class="slider-2--text">New everyday ride-or-die or something fancy for your
                                next event, we gotchu</div>
                            <div class="slider-2--button">
                                <div class="slider-2--button_left" id="slider-2--button_left-three">Discovery
                                </div>
                                <div class="slider-2--button_right" id="slider-2--button_right-three">Shop now
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="btn__prev-2"></div>
                    <div id="btn__next-2"></div>
                </div>
            </div>
        </div>

        <style>
            @media (max-width: 1000px) {
                .slider__2 {
                    display: none;
                }
            }
        </style>

        <div class="tegs">
            <div class="tegs__item">Home</div>
            <div class="tegs__item">Shop</div>
            <div class="tegs__item active">New Arrvals</div>
        </div>



        <div class="shop__newarrvals">
            <div class="shop__newarrvals-filter active">
                <div class="filter__header-title">Hide Filters</div>
                <div class="filter__content">

                    <div class="filter__categories">
                        <div class="filter__title active" id="categories">Categories</div>
                        <div class="filter__title-values two-column" id="filter__categories">
                            <ul>
                                <li>
                                    <input type="checkbox" class="filter__checkbox" id="checkbox_1">
                                    <label for="checkbox_1" class="filter__input">All categories</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter__checkbox" id="checkbox_2">
                                    <label for="checkbox_2" class="filter__input">Accessories</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter__checkbox" id="checkbox_3">
                                    <label for="checkbox_3" class="filter__input">Dresses</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter__checkbox" id="checkbox_4">
                                    <label for="checkbox_4" class="filter__input">Coats</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter__checkbox" id="checkbox_5">
                                    <label for="checkbox_5" class="filter__input">Clothes</label>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <input type="checkbox" class="filter__checkbox" id="checkbox_6">
                                    <label for="checkbox_6" class="filter__input">T-Shirt</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter__checkbox" id="checkbox_7">
                                    <label for="checkbox_7" class="filter__input">Summer</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter__checkbox" id="checkbox_8">
                                    <label for="checkbox_8" class="filter__input">Shirts</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter__checkbox" id="checkbox_9">
                                    <label for="checkbox_9" class="filter__input">Jacket</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter__checkbox" id="checkbox_10">
                                    <label for="checkbox_10" class="filter__input">Short</label>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /Categories-->

                    <style> 
                        .active__filter {
                            height: 0;
                            opacity: 0;
                        }
                    </style>

                    <div class="filter__categories color">
                        <div class="filter__title" id="color">Color</div>
                        <div class="filter__title-values one-column active__filter" id="filter__color">
                            <ul>
                                <li>
                                    <input type="checkbox" class="filter__checkbox" id="checkbox_11">
                                    <label for="checkbox_11" class="filter__input">Green</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter__checkbox" id="checkbox_12">
                                    <label for="checkbox_12" class="filter__input">Red</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter__checkbox" id="checkbox_13">
                                    <label for="checkbox_13" class="filter__input">Black</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter__checkbox" id="checkbox_14">
                                    <label for="checkbox_14" class="filter__input">Yellow</label>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="filter__categories size">
                        <div class="filter__title" id="size">Size</div>
                        <div class="filter__title-values one-column active__filter" id="filter__size">
                            <ul>
                                <li>
                                    <input type="checkbox" class="filter__checkbox" id="checkbox_15">
                                    <label for="checkbox_15" class="filter__input">46</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter__checkbox" id="checkbox_16">
                                    <label for="checkbox_16" class="filter__input">48</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter__checkbox" id="checkbox_17">
                                    <label for="checkbox_17" class="filter__input">50</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter__checkbox" id="checkbox_18">
                                    <label for="checkbox_18" class="filter__input">52</label>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="filter__categories price">
                        <div class="filter__title" id="price">Price (Руб)</div>
                        <div class="filter__title-values one-column active__filter" id="filter__price">
                            <ul>
                                <li>
                                    <input type="checkbox" class="filter__checkbox" id="checkbox_19">
                                    <label for="checkbox_19" class="filter__input">100 - 1000</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter__checkbox" id="checkbox_20">
                                    <label for="checkbox_20" class="filter__input">1000 - 10 000</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter__checkbox" id="checkbox_21">
                                    <label for="checkbox_21" class="filter__input">10 000 - 100 000</label>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="filter__categories filter-by-brand">
                        <div class="filter__title" id="brand">Filter by Brand</div>
                        <div class="filter__title-values one-column active__filter" id="filter__brand">
                            <ul>
                                <li>
                                    <input type="checkbox" class="filter__checkbox" id="checkbox_22">
                                    <label for="checkbox_22" class="filter__input">Nike</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter__checkbox" id="checkbox_23">
                                    <label for="checkbox_23" class="filter__input">Vuitton</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter__checkbox" id="checkbox_24">
                                    <label for="checkbox_24" class="filter__input">GUCCI</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter__checkbox" id="checkbox_25">
                                    <label for="checkbox_25" class="filter__input">H&M</label>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="filter__categories active discount">
                        <div class="filter__title active" id="discount">Discount</div>
                        <div class="filter__title-values one-column" id="filter__discount">
                            <ul>
                                <li>
                                    <input type="checkbox" class="filter__checkbox" id="checkbox_26">
                                    <label for="checkbox_26" class="filter__input">70% And Above</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter__checkbox" id="checkbox_27">
                                    <label for="checkbox_27" class="filter__input">60% - 70% Off</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter__checkbox" id="checkbox_28">
                                    <label for="checkbox_28" class="filter__input">40% - 60% Off</label>
                                </li>
                                <li>
                                    <input type="checkbox" class="filter__checkbox" id="checkbox_29">
                                    <label for="checkbox_29" class="filter__input">Less Than 40% Off</label>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div><!-- /Content-->

            </div>
            <div class="shop__newarrvals-products">

                <div class="products__header">
                    <div class="products__header-number">Column number:</div>
                    <div class="products__choice-tegs active">Sort by latest</div>
                </div>

                <div class="products__tegs">
                    <ul>
                        <li class="products__tegs-item">Accessories</li>
                        <li class="products__tegs-item">28</li>
                        <li class="products__tegs-item">medium</li>
                        <li class="products__tegs-item">60% - 70% Off</li>
                    </ul>

                    <div class="products__tegs-clear">
                        Clear all
                    </div>
                </div>

                <div class="shop__catalog-products">

                    <div class="row gy-5">

                        <div class="col-sm-12 col-md-6 col-lg-4" style="display: flex; justify-content: center;">
                            <div class="shop__catalog-products--item">
                                <img class="shop__catalog-products--item-photo" src="./assets/images/shop_product/product.png"
                                    alt="">
                                <div class="shop__catalog-products--item-icon">
                                    <img src="./assets/images/shop-icon/lightning.svg" alt="">
                                    <div>New</div>
                                </div>
                                <div class="shop__catalog-products--item-title">Eye Mesh Boat Shoes</div>
                                <div class="shop__catalog-products--item-text">$220.00</div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4" style="display: flex; justify-content: center;">
                            <div class="shop__catalog-products--item">
                                <img class="shop__catalog-products--item-photo" src="./assets/images/shop_product/product.png"
                                    alt="">
                                <div class="shop__catalog-products--item-title">Azure Tote</div>
                                <div class="shop__catalog-products--item-text">$290.00</div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4" style="display: flex; justify-content: center;">
                            <div class="shop__catalog-products--item">
                                <img class="shop__catalog-products--item-photo" src="./assets/images/shop_product/product.png"
                                    alt="">
                                <div class="shop__catalog-products--item-title">Blue Raincoat</div>
                                <div class="shop__catalog-products--item-text">$430.00</div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4" style="display: flex; justify-content: center;">
                            <div class="shop__catalog-products--item">
                                <img class="shop__catalog-products--item-photo" src="./assets/images/shop_product/product.png"
                                    alt="">
                                <div class="shop__catalog-products--item-icon">
                                    <img src="./assets/images/shop-icon/switch.svg" alt="">
                                    <div>best seller</div>
                                </div>
                                <div class="shop__catalog-products--item-title">Backpack with contrasting buckle
                                </div>
                                <div class="shop__catalog-products--item-text">$80.00 – $125.00</div>
                            </div>
                        </div>


                        <div class="col-sm-12 col-md-6 col-lg-4" style="display: flex; justify-content: center;">
                            <div class="shop__catalog-products--item">
                                <img class="shop__catalog-products--item-photo" src="./assets/images/shop_product/product.png"
                                    alt="">
                                <div class="shop__catalog-products--item-icon">
                                    <img src="./assets/images/shop-icon/switch.svg" alt="">
                                    <div>best seller</div>
                                </div>
                                <div class="shop__catalog-products--item-title">Shirt in organic cotton classic
                                    ging
                                    Shirt in organic cotton classic ging</div>
                                <div class="shop__catalog-products--item-text">$59.50</div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4" style="display: flex; justify-content: center;">
                            <div class="shop__catalog-products--item">
                                <img class="shop__catalog-products--item-photo" src="./assets/images/shop_product/product.png"
                                    alt="">
                                <div class="shop__catalog-products--item-icon">
                                    <img src="./assets/images/shop-icon/fire.svg" alt="">
                                    <div>Hot</div>
                                </div>
                                <div class="shop__catalog-products--item-title">Tailored indigo jumpsuit</div>
                                <div class="shop__catalog-products--item-text">$128.00</div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4" style="display: flex; justify-content: center;">
                            <div class="shop__catalog-products--item">
                                <img class="shop__catalog-products--item-photo" src="./assets/images/shop_product/product.png"
                                    alt="">
                                <div class="shop__catalog-products--item-icon">
                                    <img src="./assets/images/shop-icon/star.svg" alt="">
                                    <div>Top rate</div>
                                </div>
                                <div class="shop__catalog-products--item-title">Triple stone drop earrings</div>
                                <div class="shop__catalog-products--item-text">$49.50</div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4" style="display: flex; justify-content: center;">
                            <div class="shop__catalog-products--item">
                                <img class="shop__catalog-products--item-photo" src="./assets/images/shop_product/product.png"
                                    alt="">
                                <div class="shop__catalog-products--item-icon">
                                    <img src="./assets/images/shop-icon/gear.svg" alt="">
                                    <div>Only a few left</div>
                                </div>
                                <div class="shop__catalog-products--item-title">Backpack with contrasting buckle
                                </div>
                                <div class="shop__catalog-products--item-text">$158.00</div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4" style="display: flex; justify-content: center;">
                            <div class="shop__catalog-products--item">
                                <img class="shop__catalog-products--item-photo" src="./assets/images/shop_product/product.png"
                                    alt="">
                                <div class="shop__catalog-products--item-icon">
                                    <img src="./assets/images/shop-icon/fire.svg" alt="">
                                    <div>Hot</div>
                                </div>
                                <div class="shop__catalog-products--item-title">High-rise Peyton wide-leg pant
                                </div>
                                <div class="shop__catalog-products--item-text">$59.50</div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4" style="display: flex; justify-content: center;">
                            <div class="shop__catalog-products--item">
                                <img class="shop__catalog-products--item-photo" src="./assets/images/shop_product/product.png"
                                    alt="">
                                <div class="shop__catalog-products--item-icon">
                                    <img src="./assets/images/shop-icon/fire.svg" alt="">
                                    <div>Hot</div>
                                </div>
                                <div class="shop__catalog-products--item-title">High-rise Peyton wide-leg pant
                                </div>
                                <div class="shop__catalog-products--item-text">$98.00</div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4" style="display: flex; justify-content: center;">
                            <div class="shop__catalog-products--item">
                                <img class="shop__catalog-products--item-photo" src="./assets/images/shop_product/product.png"
                                    alt="">
                                <div class="shop__catalog-products--item-icon">
                                    <img src="./assets/images/shop-icon/star.svg" alt="">
                                    <div>Top rate</div>
                                </div>
                                <div class="shop__catalog-products--item-title">Silk button-up shirt in
                                    botanical che
                                    Silk button-up shirt in botanical che</div>
                                <div class="shop__catalog-products--item-text">$120.00</div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-4" style="display: flex; justify-content: center;">
                            <div class="shop__catalog-products--item">
                                <img class="shop__catalog-products--item-photo" src="./assets/images/shop_product/product.png"
                                    alt="">
                                <div class="shop__catalog-products--item-title">Parke blazer in English
                                    herringbo Parke
                                    blazer in English herringbo</div>
                                <div class="shop__catalog-products--item-text">$138.00</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="leaf">
                    <ul>
                        <a href="#" class="leaf__link active">
                            <li>
                                1
                            </li>
                        </a>
                        <a href="#" class="leaf__link">
                            <li>
                                2
                            </li>
                        </a>
                        <a href="#" class="leaf__link">
                            <li>
                                3
                            </li>
                        </a>
                        <a href="#" class="leaf__link">
                            <li>
                                Next
                            </li>
                        </a>
                    </ul>
                </div>

            </div><!-- /shop__newarrvals-products-->

        </div><!-- /shop__newarrvals-->

    </div><!-- /shop__sidebar__zonex-->

    <style> 
        @media (max-width: 1000px) {

            .shop__sidebar__zonex {
                margin-top: 30px;
            }
        }
    </style>
@endsection