<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('index', function () {
//    return 'Hello World!';
//});

//Route::any('index', function () {
//    return 'Hello World!';
//});

//Route::match(['get','post'],'index', function () {
//    return 'Hello World!';
//});

//Route::get('index/{id}', function ($id) {
//    return 'Hello World!'.$id;
//});

//Route::get('task','TaskController@index');
//Route::get('task/read/{id}','TaskController@read');

//Route::get('task/read/{id}', 'TaskController@read')
//    ->where('id', '[0-9]+');

// 利用正则表达式设置参数控制
//Route::get('task/read/{id}', 'TaskController@read')
//    ->where(['id'=>'[0-9]+']);

// 解除全局路由配置
//Route::get('task/read/{id}','TaskController@read')
//    ->where('id','.*');

// 路由重定向（注意清除缓存）
// 跳转：301永久性，302临时性
//Route::redirect('index','task',301);
// 301跳转
//Route::permanentRedirect('index','task');

// 视图路由
//Route::view('task','task',['id'=>10]);
//Route::get('task',function (){
//    return view('task',['id'=>10]);
//});
//Route::get('task','TaskController@index');

// 路由命名
//Route::get('task/url','TaskController@url');
//Route::get('task','TaskController@index')->name('task.index');

// 路由分组（不推荐）
//Route::prefix('api')->get('index',function (){
//    return 'index';
//});
//Route::prefix('api')->get('task','TaskController@index');
// 路由分组（推荐）
//Route::group(['prefix'=>'api'],function (){
//    Route::get('index',function (){
//        return 'index';
//    });
//    Route::get('task','TaskController@index');
//});
// 路由分组（推荐）
//Route::prefix('api')->group(function (){
//    Route::get('index',function (){
//        return 'index';
//    });
//    Route::get('task','TaskController@index');
//});

// 中间件
//Route::middleware('中间件')->group(function (){
//    Route::get('index',function (){
//        return 'index';
//    });
//    Route::get('task','TaskController@index');
//});

// 子域名
//Route::domain('127.0.0.1')->group(function (){
//    Route::get('index',function (){
//        return 'index';
//    });
//    Route::get('task','TaskController@index');
//});

//// 命名空间
//Route::namespace('Admin')->group(function (){
//    Route::get('index',function (){
//        return 'index';
//    });
//    Route::get('task','TaskController@index');
//    Route::get('manage','ManageController@index');
//});

// 命名前缀
//Route::name('task.')->group(function (){
//    Route::get('index',function (){
//        return 'index';
//    });
//    Route::name('abc.')->group(function (){
//        Route::get('task','TaskController@index')->name('index');
//    });
//    Route::get('task/url','TaskController@url');
//});

// 单行为控制器
//Route::get('one','OneController');

// 查看路由信息
//Route::get('task','TaskController@index')->name('task.index');
//Route::get('index',function (){
////    dump(Route::current());               // 当前路由信息
////    dump(Route::current()->action);
////    return Route::currentRouteName();     // 当前路由名称
////    return Route::currentRouteAction();   // 当前路由指向的方法
//})->name('localhost.index');

// 路由重定向
//use Illuminate\Support\Facades\Redirect;
//Route::get('index',function (){
////    return redirect('/');// 推荐
////    return redirect()->to('/');
////    return \Illuminate\Support\Facades\Redirect::to('task');
////    return Redirect::to('task');
////    return redirect()->route('task.index');
////    return redirect()->back();
////    return back();
////    return redirect()->action('TaskController@index');
////    return redirect()->away('http://www.baidu.com');
//});

// 单个资源路由
//Route::resource('blogs','BlogController');
//Route::resource('blogs','BlogController')->only(['index','show']);
//Route::resource('blogs','BlogController')->except(['index','show']);

// 批量资源路由
//Route::resources([
//    'blogs'=>'BlogController'
//]);

// API资源路由
//Route::apiResource('blogs','BlogController');

// 资源路由嵌套
Route::resource('blogs.comments','CommentController')
    ->shallow()->name('index','b.c.i')->parameters(['blogs'=>'bid','comments'=>'cid']);







// 路由回退
//Route::fallback(function (){
////    return redirect('/');
//    return view('404');
//});
