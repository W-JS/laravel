<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

class TaskController extends Controller
{
    public function index(){
//        $this->middleware('中间件');
//        return 'task index';
//        echo Route::currentRouteAction();
//        return view('task',['id'=>10]);// 路由跳转最常用

//        return 'index';
//        return response('index');
//        return [1,2,3];
//        return response([1,2,3]);
//        return response()->json([1,2,3]);

//        return response('index',201);
//        return response('<b>index</b>')->header('Content-type','text/plain');
        return response()->view('task',['id'=>10])->header('Content-type','text/plain');
    }
    public function read($id){
        return 'id:'.$id;
    }
    public function url(){
//        $url = route('task.index',['id'=>10],false);//可选参数，默认true
//        return $url;

//        return redirect()->route('task.index');

        $url = route('task.abc.index');
        return $url;
    }
}
