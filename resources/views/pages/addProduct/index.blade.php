@extends('layouts.main')

@section('title', 'Shop')

@section('content')
<div class="wrapper-user">
    <div class="product">
        <h1 class="text-center">Добавление товара в магазин...</h1>
        <div class="productAdd">
            <form action="addProduc" class="d-flex justify-content-center" method="POST" enctype="multipart/form-data">
                <div class="row gy-5">
                    <div class="col-12 col-sm-6 col-md-4 dataProduct">
                        <div class="titleProduct">Введите название товара: <span style="color: red;">*</span></div>
                        <input type="text" class="form-control mt-2">
                        <div class="titleProduct mt-3">Выберите тип товара: </div>
                        <select name="#" id="#" class="form-control mt-2">
                            <option value="noy">-->Без типа<-- </option>
                            <option value="NEW">NEW</option>
                            <option value="BEST SELLER">BEST SELLER</option>
                            <option value="HOT">HOT</option>
                            <option value="TOP RATE">TOP RATE</option>
                            <option value="ONLY A FEW LEFT">ONLY A FEW LEFT</option>
                        </select>
                        <div class="titleProduct mt-3">Введите описание товара: <span style="color: red;">*</span></div>
                        <textarea name="#" id="#" cols="30" rows="10" class="form-control"> </textarea>
                        <div class="titleProduct mt-3">Выберите тип товара: <span style="color: red;">*</span></div>
                        <select name="#" id="#" class="form-control mt-2">
                            <option value="Accessories">Accessories</option>
                            <option value="Dresses">Dresses</option>
                            <option value="Coats">Coats</option>

                            <option value="Clothes">Clothes</option>
                            <option value="T-Shirt">T-Shirt</option>
                            <option value="Summer">Summer</option>

                            <option value="Shirts">Shirts</option>
                            <option value="Jacket">Jacket</option>
                            <option value="Short">Short</option>
                        </select>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 dataProduct">
                        <div class="titleProduct mt-3">Выберите тип товара: <span style="color: red;">*</span></div>
                        <select name="#" id="#" class="form-control mt-2">
                            <option value="Nike">Nike</option>
                            <option value="Vuitton">Vuitton</option>
                            <option value="GUCCI">GUCCI</option>
                            <option value="H&M">H&M</option>
                        </select>
                        <div class="titleProduct mt-3">Выберите фотографию товара (Желательно, размер фотографий 315x303): <span style="color: red;">*</span></div>
                        <input type="file" class="form-control mt-2">
                        <div class="titleProduct mt-3">Введите цену товара: <span style="color: red;">*</span></div>
                        <input type="text" class="form-control mt-2">
                        <div class="titleProduct mt-3">Введите валюту товара: <span style="color: red;">*</span></div>
                        <select name="#" id="#" class="form-control mt-2">
                            <option value="USD">USD</option>
                            <option value="EUR">EUR</option>
                            <option value="RUB">RUB</option>
                        </select>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4 dataProduct">
                        <div class="titleProduct mt-3">Введите цвет товара: <span style="color: red;">*</span></div>
                        <div class="d-flex">
                            <input type="checkbox" class="form-check-input mt-2 me-2" style="padding: 6px;" value="Red">
                            <h5 style="color: black; font-size: 16px; margin: 1px;">Red</h5>

                            <input type="checkbox" class="form-check-input mt-2 ms-3 me-2" style="padding: 6px;" value="Yellow">
                            <h5 style="color: black; font-size: 16px; margin: 1px;">Yellow</h5>

                            <input type="checkbox" class="form-check-input mt-2 ms-3 me-2" style="padding: 6px;" value="Green">
                            <h5 style="color: black; font-size: 16px; margin: 1px;">Green</h5>
                        </div>
                        <div class="d-flex">
                            <input type="checkbox" class="form-check-input mt-2 me-2" style="padding: 6px;" value="White">
                            <h5 style="color: black; font-size: 16px; margin: 1px;">White</h5>

                            <input type="checkbox" class="form-check-input mt-2 ms-3 me-2" style="padding: 6px;" value="Black">
                            <h5 style="color: black; font-size: 16px; margin: 1px;">Black</h5>

                            <input type="checkbox" class="form-check-input mt-2 ms-3 me-2" style="padding: 6px;" value="Brown">
                            <h5 style="color: black; font-size: 16px; margin: 1px;">Brown</h5>
                        </div>
                        <div class="d-flex">
                            <input type="checkbox" class="form-check-input mt-2 me-2" style="padding: 6px;" value="Purple">
                            <h5 style="color: black; font-size: 16px; margin: 1px;">Purple</h5>

                            <input type="checkbox" class="form-check-input mt-2 ms-3 me-2" style="padding: 6px;" value="Grey">
                            <h5 style="color: black; font-size: 16px; margin: 1px;">Grey</h5>
                        </div>



                        <div class="titleProduct mt-3">Введите размеры товара: <span style="color: red;">*</span></div>
                        <div class="d-flex">
                            <input type="checkbox" class="form-check-input mt-2 me-2" style="padding: 6px;" value="34">
                            <h5 style="color: black; font-size: 16px; margin: 1px;">34</h5>

                            <input type="checkbox" class="form-check-input mt-2 ms-3 me-2" style="padding: 6px;" value="36">
                            <h5 style="color: black; font-size: 16px; margin: 1px;">36</h5>

                            <input type="checkbox" class="form-check-input mt-2 ms-3 me-2" style="padding: 6px;" value="38">
                            <h5 style="color: black; font-size: 16px; margin: 1px;">38</h5>

                            <input type="checkbox" class="form-check-input mt-2 ms-3 me-2" style="padding: 6px;" value="40">
                            <h5 style="color: black; font-size: 16px; margin: 1px;">40</h5>
                        </div>
                        <div class="d-flex">
                            <input type="checkbox" class="form-check-input mt-2 me-2" style="padding: 6px;" value="42">
                            <h5 style="color: black; font-size: 16px; margin: 1px;">42</h5>

                            <input type="checkbox" class="form-check-input mt-2 ms-3 me-2" style="padding: 6px;" value="44">
                            <h5 style="color: black; font-size: 16px; margin: 1px;">44</h5>

                            <input type="checkbox" class="form-check-input mt-2 ms-3 me-2" style="padding: 6px;" value="46">
                            <h5 style="color: black; font-size: 16px; margin: 1px;">46</h5>

                            <input type="checkbox" class="form-check-input mt-2 ms-3 me-2" style="padding: 6px;" value="48">
                            <h5 style="color: black; font-size: 16px; margin: 1px;">48</h5>
                        </div>
                        <div class="d-flex">
                            <input type="checkbox" class="form-check-input mt-2 me-2" style="padding: 6px;" value="50">
                            <h5 style="color: black; font-size: 16px; margin: 1px;">50</h5>

                            <input type="checkbox" class="form-check-input mt-2 ms-3 me-2" style="padding: 6px;" value="52">
                            <h5 style="color: black; font-size: 16px; margin: 1px;">52</h5>

                            <input type="checkbox" class="form-check-input mt-2 ms-3 me-2" style="padding: 6px;" value="54">
                            <h5 style="color: black; font-size: 16px; margin: 1px;">54</h5>

                            <input type="checkbox" class="form-check-input mt-2 ms-3 me-2" style="padding: 6px;" value="56">
                            <h5 style="color: black; font-size: 16px; margin: 1px;">56</h5>
                        </div>

                        <div class="titleProduct mt-3">Введите колличество товара: <span style="color: red;">*</span></div>
                        <input type="text" class="form-control mt-2">
                    </div>

                    <button type="submit" class="btn btn-outline-primary btn-add-product">Add Product</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .btn-add-product {
        font-size: 16px;
        max-width: 120px;
        margin: 50px auto 50px;
        border-radius: 9px;
    }

    .product {
        margin-top: 70px;
    }

    .titleProduct {
        font-size: 16px;
    }

    .dataProduct {
        padding: 0 50px;
    }
</style>
@endsection