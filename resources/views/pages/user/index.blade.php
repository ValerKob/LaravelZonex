@extends('layouts.main')

@section('title', 'Shop')

@section('content')
<div class="wrapper-user">
    <div class="user">
        <div class="row">
            <div class="col-12 col-sm-3" style="min-height: 100px; margin-left: 35px; margin-bottom: 35px;">
                <div class="user-card">
                    <div class="card text-center">
                        <img class="avatar_user" src="./assets/images/user/avatar150x150.png" alt="avatar">
                        <div class="card-body">
                            <h3 class="card-title">{{ $user }}</h5>
                                <p class="card-text">User</p>
                                <a href="#" class="btn btn-secondary">Avatar edit</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-8" style="min-height: 100px; margin-left: 35px; margin-bottom: 35px;  ">
                <div class="row gy-5">
                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="user-card">
                            <div class="card card-bg text-start">
                                <div class="card-body">
                                    <h3 class="card-title card-product">Покупки</h5>
                                        <span class="card-text">Заказы</span>
                                        <hr>
                                        <span class="card-text">Возвраты</span>
                                        <hr>
                                        <span class="card-text">Купленные товары</span>
                                        <hr>
                                        <span class="card-text">Сравнение товаров</span>
                                        <hr>
                                        <span class="card-text">Билеты и отели</span>
                                        <hr>
                                        <span class="card-text">Отзывы</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="user-card">
                            <div class="card card-bg text-start">
                                <div class="card-body">
                                    <h3 class="card-title card-product">Сервисы</h5>
                                        <span class="card-text">Коды и сертификаты</span>
                                        <hr>
                                        <span class="card-text">Баланс средств</span>
                                        <hr>
                                        <span class="card-text">Закупки для бизнеса</span>
                                        <hr>
                                        <span class="card-text">Zonex клуб</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-4">
                        <div class="user-card">
                            <div class="card card-bg text-start">
                                <div class="card-body">
                                    <h3 class="card-title card-product">Приложение</h5>
                                        <span class="card-text">Город</span>
                                        <hr>
                                        <span class="card-text">Валюта</span>
                                        <hr>
                                        <span class="card-text">Цвет приложения</span>
                                        <hr>
                                        <span class="card-text">О приложение</span>
                                        <hr>
                                        <span class="card-text">Помощь</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .user {
        margin-top: 70px;
    }

    .card {
        border-radius: 5px;
        padding: 10px;
    }

    .card-product {
        text-transform: uppercase;
    }

    .avatar_user {
        width: 100px;
        border-radius: 100%;
        border: 1px solid #000;
        margin: 0 auto;
    }

    .card-bg {
        background-color: rgb(245, 245, 245);
    }
</style>
@endsection