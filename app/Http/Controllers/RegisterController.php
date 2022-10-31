<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function addUser(RegisterRequest $req)
    {

        $login = $req->login;
        $email = $req->email;
        $password = $req->password;
        $g = 0;
        $message = '';

        for ($i = 0; $i < 100; $i++) {
            $users = Register::find($i);
            if ($users != null) {
                if ($login == $users->login) {
                    $g = 1;
                    $message = 'Такой Login уже существует...';
                }

                if ($email == $users->email) {
                    $g = 1;
                    $message = 'Такой Email уже существует...';
                }
            }
        }

        if ($g == 0) {
            $password = Hash::make($password);
            DB::table('registers')->insert(['login' => $login, 'email' => $email, 'password' => $password]);

            $user = $login;
            return view('pages.user.index', compact('user'));
        } else {
            return view('pages.register.index', compact('message'));
        }
    }

    public function login(RegisterRequest $req)
    {

        $login = $req->login;
        $password = $req->password;
        $g = 1;
        $message = '';

        for ($i = 0; $i < 100; $i++) {
            $users = Register::find($i);
            if ($users != null) {
                if ($login == $users->login) {
                    $g = 0;
                    $message = 'Такой Login уже существует...';
                }

                if (!(Hash::check($password, $users->password))) {
                    $g = 1;
                    $message = 'Не правильный пароль...';
                }

                if ($login == 'Admin' && $password == 'Admin') {
                    $user = $login;
                    return view('pages.admin.index', compact('user'));
                }
            }
        }

        if ($g == 0) {
            $user = $login;
            return view('pages.user.index', compact('user'));
        } else {
            return view('pages.login.index', compact('message'));
        }
    }
}
