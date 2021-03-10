<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController
{
    public function index(Request $request)
    {
//        return $request->input('name');
//        return $request->all();
//        return $request->path();
//        return $request->url();
//        return $request->fullUrl();
    }

    public function cookies()
    {
//        return $_COOKIE['laravel_session'];
//        return request()->cookie('laravel_session');

//        return Cookie::get('laravel_session');
//        return Cookie::has('laravel_session');

//        return response('Hello Cookie')->cookie('name', 'Mr.Wan', 23);

//        Cookie::queue('age', 100, 23);

//        $cookie = cookie('gender', '男', 23);
//        Cookie::queue($cookie);

//        Cookie::queue('name', 'Mr.Wan', 23);
    }

    public function sess()
    {
//        return request()->session()->all();
//        return \request()->session()->get('_token');
//        return Session::get('_token');
//        return Session::get('name', function () {
//            return 'no session name';
//        });

//        return \session('_token');
//        return Session::has('_token');

//        Session::put('name', 'Mr.Lee');
//        return Session::get('name');

//        Session::push('info.name', 'Mr.Lee');
//        Session::push('info.name', 'Mr.Wang');
//        Session::push('info.name', 'Mr.Zhang');
//        return Session::get('info');

//        Session::flash('name', 'Mr.Lee');
//        return Session::get('name');

//        Session::flash('name', 'Mr.Lee');
//        Session::put('age', 100);

//        return Session::all();

//        Session::flash('name', 'Mr.Lee');
//        Session::reflash();
//        return Session::get('name');

//        Session::forget('info');
//        return Session::all();

//        Session::regenerate();
//        return Cookie::get('laravel_session');
    }
}
