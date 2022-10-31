@extends('layouts.main')

@section('title', 'Register')

@section('content')
<div class="register d-flex justify-content-center min-vh-100" style="margin-top: 50px; align-items: center;">
    <div class="">
        <div class="card" style="width: 25rem;">
            <div class="card-body text-center">
                <h2 class="card-title mb-4 mt-3" style="cursor: pointer;">Регистрация</h2>

                @if($errors->any())
                <ul class="text-start">
                    @foreach($errors->all() as $error)
                    <h4 style="color: red">{{ $error }}</h4>
                    @endforeach
                </ul>
                @endif

                <h4 style="color: red">{{ $message }}</h4>

                <form action="register" method="POST">
                    @csrf
                    <div class="text-start">
                        <div for="/" class="fomr-label label-fs">Login<span style="color: red;">*</span></div>
                        <input type="text" class="form-control mt-2" name="login">
                        <div for="/" class="fomr-labe mt-3 label-fs">Email<span style="color: red;">*</span></div>
                        <input type="email" class="form-control mt-2" name="email">
                        <div for="/" class="fomr-label mt-3 label-fs">Password <span style="color: red;">*</span></div>
                        <input type="password" class="form-control mt-2" name="password">
                    </div>

                    <button type="submit" class="btn btn-primary mt-4 mb-2 btnBr">
                        <h4>Зарегестрироваться</h4>
                    </button>
                </form>
            </div>
        </div>
        <div class="log_rec">
            <a href="{{ route('login') }}" class="btn bnt-login">Login</a>
            <a href="{{ route('recovery') }}" class="btn bnt-login">Recovery</a>
        </div>
    </div>
</div>

<style>
    .log_rec {
        display: flex;
        justify-content: space-around;
        margin-top: 25px;
    }

    .bnt-login {
        font-size: 16px;
        border-radius: 10px;

    }
</style>
@endsection