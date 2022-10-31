@extends('layouts.main')

@section('title', 'Product')

@section('content')
    <div class="shop__product">

        <div class="container">
            <div class="shop__product-title">
                <div class="tegs__product">
                    <div class="tegs__item__product">Home</div>
                    <div class="tegs__item__product">Man</div>
                    <div class="tegs__item__product">Jacket </div>
                    <div class="tegs__item__product active">Band-collar popover tunic</div>
                </div>
                <div class="tegs__product-right">
                    <div class="tegs__product-right--item prev">prev</div>
                    <div class="tegs__product-right--item next">next</div>
                </div>
            </div>
        </div>

        <div class="shop__product-sidebar">

            <div class="shop__product-sidebar--cart">
                <div class="container">
                    <div class="row gy-5">
                        <div class="col-12 col-xxl-6" style="display: flex; justify-content: center;">

                            <div class="shop__product-sidebar--cart-icon">
                                <div class="shop__product-sidebar--cart-icon--item">
                                    <img src="./assets/images/elemets_product/product.png" alt="">
                                </div>
                                <div class="shop__product-sidebar--cart-icon--item">
                                    <img src="./assets/images/elemets_product/product.png" alt="">
                                </div>
                                <div class="shop__product-sidebar--cart-icon--item">
                                    <img src="./assets/images/elemets_product/product.png" alt="">
                                </div>
                                <div class="shop__product-sidebar--cart-icon--item">
                                    <img src="./assets/images/elemets_product/product.png" alt="">
                                </div>
                                <div class="shop__product-sidebar--cart-icon--item">
                                    <img src="./assets/images/elemets_product/product.png" alt="">
                                </div>
                            </div>
                            <div class="shop__product-sidebar--cart-photo">
                                <img src="./assets/images/products/product-1/1.png" alt="">
                            </div>
                        </div>

                        <div class="col-12 col-xxl-6" style="display: flex; justify-content: center;">
                            <div class="shop__product-sidebar--cart-content">
                                <div class="shop__product-sidebar--cart-content-teg">
                                    <div class="shop__catalog-products--item-icon">
                                        <img src="./assets/images/shop-icon/switch.svg" alt="">
                                        <div>best seller</div>
                                    </div>
                                </div>
                                <div class="shop__product-sidebar--cart-content-title">
                                    <p>Band-collar popover tunic</p>
                                </div>
                                <div class="shop__product-sidebar--cart-content-rating">
                                    <img src="./assets/images/figures/1.png" alt="">
                                    <img src="./assets/images/figures/1.png" alt="">
                                    <img src="./assets/images/figures/1.png" alt="">
                                    <img src="./assets/images/figures/1.png" alt="">
                                    <img src="./assets/images/figures/2.png" alt="">
                                    <p>2</p>
                                    <div>Reviews</div>
                                </div>
                                <div class="shop__product-sidebar--cart-content-price">
                                    <div class="shop__product-sidebar--cart-content-price--presen">$128.00</div>
                                    <div class="shop__product-sidebar--cart-content-price--past">$165.00 </div>
                                </div>
                                <div class="shop__product-sidebar--cart-content--text">
                                    <p>We love the dramatic ruffle details
                                        down the sleeve, delicate fabric
                                        buttons and polished cuffs.</p>
                                </div>
                                <div class="shop__product-sidebar--cart-content--color">
                                    <div class="shop__product-sidebar--cart-content--color-text">
                                        <div class="shop__product-sidebar--cart-content--color-text-name">Color:
                                        </div>
                                        <div class="shop__product-sidebar--cart-content--color-text-title" id="colorName">Select color
                                        </div>
                                    </div>
                                    <div class="shop__product-sidebar--cart-content--color-items">
                                        <button class="shop__product-sidebar--cart-content--color-items-item red" id="colorButton" value="Red">
                                        </button>
                                        <button
                                            class="shop__product-sidebar--cart-content--color-items-item yellow" id="colorButton"  value="Yellow">
                                        </button>
                                        <button
                                            class="shop__product-sidebar--cart-content--color-items-item green" id="colorButton"  value="Green">
                                        </button>
                                        <button
                                            class="shop__product-sidebar--cart-content--color-items-item white" id="colorButton"  value="White">
                                        </button>
                                        <button
                                            class="shop__product-sidebar--cart-content--color-items-item black" id="colorButton" value="Black">
                                        </button>
                                        <button
                                            class="shop__product-sidebar--cart-content--color-items-item brown" id="colorButton" value="Brown">
                                        </button>
                                        <button
                                            class="shop__product-sidebar--cart-content--color-items-item purple" id="colorButton" value="Purple">
                                        </button>
                                        <button 
                                            class="shop__product-sidebar--cart-content--color-items-item grey" id="colorButton" value="Grey">
                                        </button>
                                    </div>
                                </div>

                                <script>
                                    function colorActiveButton() {
                                        document.querySelectorAll('#colorButton').forEach(button => {
                                            button.classList.remove('active')
                                        })        

                                        this.classList.add('active')
                                        let colorButton = this.value
                                        document.getElementById('colorName').innerHTML = colorButton
                                    }

                                    document.querySelectorAll('#colorButton').forEach(button => {
                                        button.onclick = colorActiveButton
                                    })
                                </script>

                                <div class="shop__product-sidebar--cart-content--size">
                                    <div class="shop__product-sidebar--cart-content--size-text">
                                        <div class="shop__product-sidebar--cart-content--size-text--left">
                                            <div class="shop__product-sidebar--cart-content--size-text-name">
                                                Size:
                                            </div>
                                            <div class="shop__product-sidebar--cart-content--size-text-title" id="sizeSelect">
                                                Select
                                                Size</div>
                                        </div>
                                        <div class="shop__product-sidebar--cart-content--size-text--rigth">
                                            <div
                                                class="shop__product-sidebar--cart-content--size-text-name right">
                                                Size
                                                charts</div>
                                        </div>
                                    </div>
                                    <div class="shop__product-sidebar--cart-content--size-items">
                                        <button class="shop__product-sidebar--cart-content--size-items--item" id="sizeItem" value="23">23
                                        </button>
                                        <button class="shop__product-sidebar--cart-content--size-items--item" id="sizeItem" value="24">24
                                        </button>
                                        <button class="shop__product-sidebar--cart-content--size-items--item" id="sizeItem" value="25">25
                                        </button>
                                        <button class="shop__product-sidebar--cart-content--size-items--item" id="sizeItem" value="26">26
                                        </button>
                                        <button class="shop__product-sidebar--cart-content--size-items--item" id="sizeItem" value="27">27
                                        </button>
                                        <button
                                            class="shop__product-sidebar--cart-content--size-items--item" id="sizeItem" value="28">
                                            28
                                        </button>
                                        <button class="shop__product-sidebar--cart-content--size-items--item" id="sizeItem" value="29">29
                                        </button>
                                        <button class="shop__product-sidebar--cart-content--size-items--item" id="sizeItem" value="30">30
                                        </button>
                                        <button class="shop__product-sidebar--cart-content--size-items--item" id="sizeItem" value="31">31
                                        </button>
                                    </div>
                                    
                                    <script>
                                        
                                        function colorActive() {
                                            document.querySelectorAll('#sizeItem').forEach(button => {
                                                button.classList.remove('active')
                                            })

                                            this.classList.add('active')
                                            let colorValue = this.value
                                            document.getElementById('sizeSelect').innerHTML = colorValue
                                        }

                                        document.querySelectorAll('#sizeItem').forEach(button => {
                                            button.onclick = colorActive
                                        })
                                    </script>

                                    <div class="shop__product-sidebar--cart-content--size-clear" id="clear">Clear</div>

                                    <script>

                                        let clearClick = document.getElementById('clear')

                                        clearClick.addEventListener('click', () => {
                                            document.getElementById('colorName').innerHTML = 'Select Color'
                                            document.getElementById('sizeSelect').innerHTML = 'Select Size'

                                            document.querySelectorAll('#colorButton').forEach(button => {
                                                button.classList.remove('active')
                                            })

                                            document.querySelectorAll('#sizeItem').forEach(button => {
                                                button.classList.remove('active')
                                            })

                                            document.getElementById('numberProduct').innerHTML = 1
                                        })

                                    </script>
                                </div>
                                <div class="shop__product-sidebar--cart-content-numbers">
                                    <div class="shop__product-sidebar--cart-content-numbers--col">
                                        <div class="shop__product-sidebar--cart-content-numbers--col-minus" id="minus">
                                        </div>
                                        <button class="shop__product-sidebar--cart-content-numbers--col-number btn-number" id="numberProduct" value="1">1
                                        </button>
                                        <div class="shop__product-sidebar--cart-content-numbers--col-plus" id="plus">
                                        </div>

                                        <style>
                                            .btn-number {
                                                background-color: white;
                                                color: inherit;
                                                padding: 0;
                                                border: none;
                                                outline: inherit;
                                                cursor: pointer;
                                            }
                                        </style>

                                        <script>
                                            let plus = document.getElementById('plus')
                                            let minus = document.getElementById('minus')
                                            let numberProduct = document.getElementById('numberProduct').value
                                            plus.addEventListener('click', () => {
                                                document.getElementById('numberProduct').innerHTML = numberProduct++
                                            })

                                            minus.addEventListener('click', () => {
                                                if(numberProduct < 1) {
                                                } else {
                                                    document.getElementById('numberProduct').innerHTML = numberProduct--
                                                }
                                            })
                                        </script>

                                    </div>
                                    <div class="shop__product-sidebar--cart-content-numbers--cart">
                                        <div class="shop__product-sidebar--cart-content-numbers--cart-text">Add
                                            to
                                            cart
                                        </div>
                                    </div>
                                    <div class="shop__product-sidebar--cart-content-numbers--wishlist">
                                        <div class="shop__product-sidebar--cart-content-numbers--wishlist-text">
                                            Add
                                            to
                                            wishlist</div>
                                    </div>
                                </div>
                                <div class="shop__product-sidebar--cart-content--abouts">
                                    <div class="shop__product-sidebar--cart-content--abouts-items">
                                        <div class="shop__product-sidebar--cart-content--abouts-items-item">
                                            <div
                                                class="shop__product-sidebar--cart-content--abouts-items-item--name">
                                                SKU:</div>
                                            <div
                                                class="shop__product-sidebar--cart-content--abouts-items-item--text">
                                                FW511</div>
                                        </div>
                                        <div class="shop__product-sidebar--cart-content--abouts-items-item">
                                            <div
                                                class="shop__product-sidebar--cart-content--abouts-items-item--name">
                                                Category:</div>
                                            <div
                                                class="shop__product-sidebar--cart-content--abouts-items-item--text">
                                                Trousers, Life style</div>
                                        </div>
                                        <div class="shop__product-sidebar--cart-content--abouts-items-item">
                                            <div
                                                class="shop__product-sidebar--cart-content--abouts-items-item--name">
                                                Tags:</div>
                                            <div
                                                class="shop__product-sidebar--cart-content--abouts-items-item--text">
                                                Designer, Women</div>
                                        </div>
                                        <div class="shop__product-sidebar--cart-content--abouts-items-item">
                                            <div
                                                class="shop__product-sidebar--cart-content--abouts-items-item--name">
                                                Share:</div>
                                            <div
                                                class="shop__product-sidebar--cart-content--abouts-items-item--text">
                                                <a href="https://twitter.com/" target="_blank">
                                                    <img src="./assets/images/social/twitter.svg" alt="twitter">
                                                </a>
                                                <a href="https://ru-ru.facebook.com/" target="_blank">
                                                    <img src="./assets/images/social/facebook.svg"
                                                        alt="facebook">
                                                </a>
                                                <a href="https://www.instagram.com/" target="_blank">
                                                    <img src="./assets/images/social/instagram.svg"
                                                        alt="instagram">
                                                </a>
                                                <a href="https://www.pinterest.ru/" target="_blank">
                                                    <img src="./assets/images/social/pinterest.svg"
                                                        alt="pinterest">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="shop__product-footer">
            <div class="shop__product-footer-wrapper">
                <div class="shop__product-footer-wrapper-accordion">
                    <button class="shop__product-footer-wrapper-accordion-item-title btn-number-acc active" style="cursor: pointer;" id="accInfo" value="1">Description</button>
                    <button class="shop__product-footer-wrapper-accordion-item-title btn-number-acc" style="cursor: pointer;" id="accInfo" value="2">Additional information</button>
                    <button class="shop__product-footer-wrapper-accordion-item-title btn-number-acc" style="cursor: pointer;" id="accInfo" value="3">Reviews (2)</button>
                </div>
                <div class="wrapper-accInfo">
                    <div class="shop__product-footer-wrapper-accordion-content-oneTwo" style="padding: 10px;" id="oneAcc">
                        <div class="shop__product-footer-wrapper-accordion-content-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                            voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                            inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                        </div>
                        <div class="shop__product-footer-wrapper-accordion-content-text">
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                            consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                            quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed
                            quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                            voluptatem.
                        </div>
                    </div>

                    <div class="shop__product-footer-wrapper-accordion-content-oneTwo inactive" style="padding: 10px;" id="twoAcc">
                        <div class="shop__product-footer-wrapper-accordion-content-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </div>
                        <div class="shop__product-footer-wrapper-accordion-content-text">
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                            consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                        </div>
                    </div>

                    <div class="shop__product-footer-wrapper-accordion-content-oneTwo inactive" style="padding: 10px;" id="threeAcc">
                        <div class="shop__product-footer-wrapper-accordion-content-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                            voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                            inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                        </div>
                        <div class="shop__product-footer-wrapper-accordion-content-text">
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                            consequuntur magni dolores eos qui.
                        </div>
                    </div>
                </div>
            </div>

            <style>
                .btn-number-acc {
                    background-color: white;
                    color: #858585;
                    padding: 0;
                    border: none;
                    outline: inherit;
                    cursor: pointer;
                }

                .shop__product-footer-wrapper {
                    position: relative;
                }

                .shop__product-footer-wrapper-accordion-content-oneTwo {
                    position: absolute;
                    max-width: 875px;
                    max-height: 250px;
                    overflow-y: auto;
                    scroll-snap-type: none;
                    margin: 0 auto;
                    color: #151515;
                    font-size: 13px;
                    font-weight: 700;
                    top: -10px;
                    left: 225px;
                    opacity: 1;
                    transition: all 1.7s ease-in-out;
                }

                .shop__product-footer-wrapper-accordion-content-oneTwo::-webkit-scrollbar {
                    width: 3px;
                }

                .shop__product-footer-wrapper-accordion-content-oneTwo::-webkit-scrollbar-track {
                    background-color: inherit;
                }

                .shop__product-footer-wrapper-accordion-content-oneTwo::-webkit-scrollbar-thumb {
                    background: linear-gradient(180deg, #000000, #cccccc);
                }

                .inactive {
                    opacity: 0;
                    transform: translateY(50px);
                    transition: all 1.7s ease-in-out;
                    z-index: -100;
                }

                .shop__product-footer-wrapper-accordion::after {
                    transition: all 1.7s ease-in-out;
                    transform: translateY(0);
                }

                .toolTwo.shop__product-footer-wrapper-accordion::after {
                    transition: all 1.7s ease-in-out;
                    transform: translateY(43.85px);
                }
                
                .toolThree.shop__product-footer-wrapper-accordion::after {
                    transition: all 1.7s ease-in-out;
                    transform: translateY(97.7px);
                }

            </style>

            <script>
                function addActiveAcc() {
                    let addActeTool = document.querySelector('.shop__product-footer-wrapper-accordion')

                    document.querySelectorAll('#accInfo').forEach(button => {
                        button.classList.remove('active')
                    })

                    this.classList.add('active')
                    let valueAccInfo = this.value

                    if(valueAccInfo == 1) {
                        document.getElementById('oneAcc').classList.remove('inactive')
                        document.getElementById('twoAcc').classList.add('inactive')
                        document.getElementById('threeAcc').classList.add('inactive')
                        addActeTool.addEventListener('click', () => {
                            addActeTool.classList.remove('toolTwo')
                            addActeTool.classList.remove('toolThree')
                        })
                    } else if(valueAccInfo == 2) {
                        document.getElementById('oneAcc').classList.add('inactive')
                        document.getElementById('twoAcc').classList.remove('inactive')
                        document.getElementById('threeAcc').classList.add('inactive')
                        addActeTool.addEventListener('click', () => {
                            addActeTool.classList.add('toolTwo')
                            addActeTool.classList.remove('toolThree')
                        }) 
                    } else {
                        document.getElementById('oneAcc').classList.add('inactive')
                        document.getElementById('twoAcc').classList.add('inactive')
                        document.getElementById('threeAcc').classList.remove('inactive')
                        addActeTool.addEventListener('click', () => {
                            addActeTool.classList.add('toolThree')
                            addActeTool.classList.remove('toolTwo')
                        })
                    }
                }

                document.querySelectorAll('#accInfo').forEach(button => {
                    button.onclick = addActiveAcc
                })

            </script>

            <div class="shop__product-footer-related">
                <div class="shop__product-footer-related-title">Related Products</div>
                <div class="shop__product__wrapper__product" id="oneProductWrapper">
                    <div class="shop__product-footer-related-items">
                        <div class="row gy-5">
                            <div class="col-sm-12 col-md-6 col-lg-4" style="display: flex; justify-content: center;">
                                <div class="shop__product-footer-related-items-item">
                                    <img class="shop__product-footer-related-items-item-photo"
                                        src="./assets/images/elemets_product_zonex/product.png" alt="">
                                    <div class="shop__product-footer-related-items-item-icon">
                                        <img src="./assets/images/shop-icon/gear.svg" alt="">
                                        <div>New</div>
                                    </div>
                                    <div class="shop__product-footer-related-items-item-title">Eye Mesh Boat Shoes
                                    </div>
                                    <div class="shop__product-footer-related-items-item-text">$220.00</div>
                                </div>
                            </div>
    
                            <div class="col-sm-12 col-md-6 col-lg-4" style="display: flex; justify-content: center;">
                                <div class="shop__product-footer-related-items-item">
                                    <img class="shop__product-footer-related-items-item-photo"
                                        src="./assets/images/elemets_product_zonex/product.png" alt="">
                                    <div class="shop__product-footer-related-items-item-title">Azure Tote</div>
                                    <div class="shop__product-footer-related-items-item-text">$290.00</div>
                                </div>
                            </div>
    
                            <div class="col-sm-12 col-md-6 col-lg-4" style="display: flex; justify-content: center;">
                                <div class="shop__product-footer-related-items-item">
                                    <img class="shop__product-footer-related-items-item-photo"
                                        src="./assets/images/elemets_product_zonex/product.png" alt="">
                                    <div class="shop__product-footer-related-items-item-icon">
                                        <img src="./assets/images/shop-icon/switch.svg" alt="">
                                        <div>best seller</div>
                                    </div>
                                    <div class="shop__product-footer-related-items-item-title">Backpack with
                                        contrasting
                                        buckle</div>
                                    <div class="shop__product-footer-related-items-item-text">$80.00 – $125.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shop__product__wrapper__product activeProduct" id="twoProductWrapper">
                    <div class="shop__product-footer-related-items">
                        <div class="row gy-5">
                            <div class="col-sm-12 col-md-6 col-lg-4" style="display: flex; justify-content: center;">
                                <div class="shop__product-footer-related-items-item">
                                    <img class="shop__product-footer-related-items-item-photo"
                                        src="./assets/images/elemets_product_zonex/product.png" alt="">
                                    <div class="shop__product-footer-related-items-item-icon">
                                        <img src="./assets/images/shop-icon/gear.svg" alt="">
                                        <div>New</div>
                                    </div>
                                    <div class="shop__product-footer-related-items-item-title">Eye Mesh Boat Shoes
                                    </div>
                                    <div class="shop__product-footer-related-items-item-text">$220.00</div>
                                </div>
                            </div>
    
                            <div class="col-sm-12 col-md-6 col-lg-4" style="display: flex; justify-content: center;">
                                <div class="shop__product-footer-related-items-item">
                                    <img class="shop__product-footer-related-items-item-photo"
                                        src="./assets/images/elemets_product_zonex/product.png" alt="">
                                    <div class="shop__product-footer-related-items-item-title">Azure Tote</div>
                                    <div class="shop__product-footer-related-items-item-text">$290.00</div>
                                </div>
                            </div>
    
                            <div class="col-sm-12 col-md-6 col-lg-4" style="display: flex; justify-content: center;">
                                <div class="shop__product-footer-related-items-item">
                                    <img class="shop__product-footer-related-items-item-photo"
                                        src="./assets/images/elemets_product_zonex/product.png" alt="">
                                    <div class="shop__product-footer-related-items-item-title">Blue Raincoat</div>
                                    <div class="shop__product-footer-related-items-item-text">$59.50</div>
                                </div>
                            </div>
    
                            <div class="col-sm-12 col-md-6 col-lg-4" style="display: flex; justify-content: center;">
                                <div class="shop__product-footer-related-items-item">
                                    <img class="shop__product-footer-related-items-item-photo"
                                        src="./assets/images/elemets_product_zonex/product.png" alt="">
                                    <div class="shop__product-footer-related-items-item-icon">
                                        <img src="./assets/images/shop-icon/switch.svg" alt="">
                                        <div>best seller</div>
                                    </div>
                                    <div class="shop__product-footer-related-items-item-title">Backpack with
                                        contrasting
                                        buckle</div>
                                    <div class="shop__product-footer-related-items-item-text">$80.00 – $125.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="shop__product__wrapper__product" id="threeProductWrapper">
                    <div class="shop__product-footer-related-items">
                        <div class="row gy-5">
                            <div class="col-sm-12 col-md-6 col-lg-4" style="display: flex; justify-content: center;">
                                <div class="shop__product-footer-related-items-item">
                                    <img class="shop__product-footer-related-items-item-photo"
                                        src="./assets/images/elemets_product_zonex/product.png" alt="">
                                    <div class="shop__product-footer-related-items-item-icon">
                                        <img src="./assets/images/shop-icon/gear.svg" alt="">
                                        <div>New</div>
                                    </div>
                                    <div class="shop__product-footer-related-items-item-title">Eye Mesh Boat Shoes
                                    </div>
                                    <div class="shop__product-footer-related-items-item-text">$220.00</div>
                                </div>
                            </div>
    
                            <div class="col-sm-12 col-md-6 col-lg-4" style="display: flex; justify-content: center;">
                                <div class="shop__product-footer-related-items-item">
                                    <img class="shop__product-footer-related-items-item-photo"
                                        src="./assets/images/elemets_product_zonex/product.png" alt="">
                                    <div class="shop__product-footer-related-items-item-icon">
                                        <img src="./assets/images/shop-icon/switch.svg" alt="">
                                        <div>best seller</div>
                                    </div>
                                    <div class="shop__product-footer-related-items-item-title">Backpack with
                                        contrasting
                                        buckle</div>
                                    <div class="shop__product-footer-related-items-item-text">$80.00 – $125.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <style>


                    .shop__product__wrapper__product {
                        display: none;
                    }

                    .activeProduct {
                        display: block;
                    }

                </style>

                <div class="dots__wrapper-shop__product" style="z-index: 1;">
                    <span class="dot-shop__product" id="productDotOne"></span>
                    <span class="dot-shop__product active" id="productDotTwo"></span>
                    <span class="dot-shop__product" id="productDotThree"></span>
                </div>

                <script>

                    let productDotOne = document.getElementById('productDotOne')
                    let productDotTwo = document.getElementById('productDotTwo')
                    let productDotThree = document.getElementById('productDotThree')

                    let oneProductWrapper = document.getElementById('oneProductWrapper')
                    let twoProductWrapper = document.getElementById('twoProductWrapper')
                    let threeProductWrapper = document.getElementById('threeProductWrapper')

                    productDotOne.addEventListener('click', () => {
                        oneProductWrapper.classList.add('activeProduct')
                        twoProductWrapper.classList.remove('activeProduct')
                        threeProductWrapper.classList.remove('activeProduct')

                        productDotOne.classList.add('active')
                        productDotTwo.classList.remove('active')
                        productDotThree.classList.remove('active')
                    })

                    productDotTwo.addEventListener('click', () => {
                        oneProductWrapper.classList.remove('activeProduct')
                        twoProductWrapper.classList.add('activeProduct')
                        threeProductWrapper.classList.remove('activeProduct')

                        productDotOne.classList.remove('active')
                        productDotTwo.classList.add('active')
                        productDotThree.classList.remove('active')
                    })

                    productDotThree.addEventListener('click', () => {
                        oneProductWrapper.classList.remove('activeProduct')
                        twoProductWrapper.classList.remove('activeProduct')
                        threeProductWrapper.classList.add('activeProduct')

                        productDotOne.classList.remove('active')
                        productDotTwo.classList.remove('active')
                        productDotThree.classList.add('active')
                    })

                </script>
            </div>
        </div>
    </div>
@endsection