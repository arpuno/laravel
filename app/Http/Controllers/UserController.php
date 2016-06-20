<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function insert()
    {
        return View('insert');
    }


public function dbinsert(Request $request)
    {
        $name = $request->name;
        $login = $request->login;
        $password = $request->password;
        DB::insert('insert into users_from_ru (name, login, password) values (?,?,?)', [$name, $login, $password]);
    }

    public function about()
    {
        return view('about');
    }


    public function laravel()
    {
        return view('laravel');
    }


    
}