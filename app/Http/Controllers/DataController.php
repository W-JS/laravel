<?php
namespace App\Http\Controllers;

use App\Http\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DataController
{
    public function index(){
        // 原生SQL
//        $user = DB::select('SELECT * FROM laravel_users');
//        $user = DB::select('SELECT username FROM laravel_users WHERE id = 25');
//        return $user;

        // 查询构造器
//        $user = DB::table('users')->find(19);// 这里省去了 laravel_，需要在 database.php 配置
//        dd($user);
//        return response()->json($user);
//        return [$user];

//        return Str::plural('child');// 返回child复数形式
        // 模型查询
//        $user = User::all();
//        return $user;

        // get()方法可以查询当前表的所有数据
//        $users = DB::table('users')->get();
        // first()方法，可以获取到第一条数据
//        $users = DB::table('users')->first();
        // value(字段名)方法，可以获取到第一条数据的指定字段的值
//        $users = DB::table('users')->value('email');
        // find(id)方法，可以获取指定 id 的一条数据
//        $users = DB::table('users')->find(20);
        // pluck(字段名)可以获取所有数据单列值的集合
//        $users = DB::table('users')->pluck('username','id');
//        return [$users];

        // 分块处理
//        DB::table('users')->orderBy('id','desc')->chunk(3,function ($users){
//            foreach ($users as $user){
//                echo $user->username.'&nbsp;&nbsp;&nbsp;';
//            }
//            echo '---'.'<br>';
//        });

        // 记录条数
//        return DB::table('users')->count();
        // 平均值
//        return DB::table('users')->avg('price');

//        return DB::table('users')->where('id',19)->get();
//        return [DB::table('users')->where('id',19)->exists()];// 判断记录是否存在，存在返回true
//        return [DB::table('users')->where('id',18)->doesntExist()];// 判断记录是否存在，不存在返回true

        // select查询
//        $users = DB::table('users')->select('username as name','email')->get();
//        $base = DB::table('users')->select('username as name','email');
//        $users = $base->addSelect('gender')->get();
//
//        $users = DB::table('users')
//            ->groupBy('gender')
//            ->select(DB::raw('COUNT(*) AS count,gender'))
//            ->get();
//        $users = DB::table('users')
//            ->groupBy('gender')
//            ->selectRaw('COUNT(*) AS count,gender')
//            ->havingRaw('count>5')
//            ->get();

         // where查询
//        $users = DB::table('users')->where('id',19)->get();
//        $users = DB::table('users')->where('id','=',19)->get();
//        $users = DB::table('users')->where('id','>=',25)->get();
//        $users = DB::table('users')->where('username','like','%小%')->get();
//        $users = DB::table('users')->where([
//            'gender'    => '男',
//            'status'    => 1
//        ])->toSql();// 得到SQL语句
//        $users = DB::table('users')->where([
//            ['gender','=','男'],
//            ['price','>=',90]
//        ])->get();
//        $users = DB::table('users')->select('username')
//            ->where([
//            ['id', '=', 26],
//            ['gender', '=', '男']
//        ])->get();

        // orwhere查询
//        $users = DB::table('users')
//            ->where('price','>','95')
//            ->orWhere('gender','女')
//            ->get();

        // 闭包查询
//        $users = DB::table('users')
//            ->where('price','>','95')
//            ->orWhere(function ($query){
//                $query->where('gender','=','女')
//                      ->where('username','like','%小%');
//            })
//            ->toSql();

        // 区间查询
//        $users = DB::table('users')->whereBetween('price',[60,90])->toSql();
//        $users = DB::table('users')->whereNotBetween('price',[60,90])->toSql();
//        $users = DB::table('users')->where('id','=',1)->orwhereNotBetween('price',[60,90])->toSql();
//        $users = DB::table('users')->whereIn('id',[20,30,50,90])->get() ;
//        $users = DB::table('users')->whereNull('uid')->toSql();
//        $users = DB::table('users')->whereDate('created_at','2018-12-11')->toSql();
//        $users = DB::table('users')->whereYear('created_at','2019')->get();
//        $users = DB::table('users')->whereDate('created_at','>','2018-12-11')->toSql();

        // 字段相等
//        $users = DB::table('users')->whereColumn('created_at','updated_at')->get();
//        $users = DB::table('users')->whereColumn('created_at','>','updated_at')->get();

        // 排序
//        $users = DB::table('users')->orderBy('id','desc')->get();

        // 时间排序
//        $users = DB::table('users')->latest()->get();

        // 随机排序
//        $users = DB::table('users')->inRandomOrder()->get();

        // 分页
//        $users = DB::table('users')->take(3)->get();
//        $users = DB::table('users')->limit(3)->get();
//        $users = DB::table('users')->skip(3)->take(3)->get();

        // 条件选择
//        $users = DB::table('users')->when(true,function ($query){
//            $query->where('id',19);
//        },function ($query){
//            $query->where('id',20);
//        })->get();

        // json
//        $users = DB::table('users')->where('list->id',19)->get();

        // 子查询
//        $users = DB::table('users')->whereExists(function ($query){
////            $query->from('books')->whereRaw('laravel_books.user_id=laravel_users.id');
//            $query->selectRaw(1)->from('books')->whereColumn('books.user_id','users.id');
//        })->get();

//        $users = DB::table('users')->whereIn('id',function ($query){
//            $query->select('user_id')->from('books')->whereColumn('books.user_id','users.id');
//        })->get();

        // join查询
//        return $users;

        // 增
//        $users = DB::table('users')->insert([
//            'username' => '李白',
//            'password' => '123456',
//            'email'    => 'libia@163.com',
//            'details'  => '123'
//        ]);

//        $users = DB::table('users')->insert([
//            [
//                'username' => '李白',
//                'password' => '123456',
//                'email'    => 'libia@163.com',
//                'details'  => '123'
//            ],
//            [
//                'username' => '李白',
//                'password' => '123456',
//                'email'    => 'libia@163.com',
//                'details'  => '123'
//            ]
//        ]);

        // 改
//        $users = DB::table('users')->where('id',102)
//            ->update([
//                'username' => '李红',
//                'email'    => 'lihong@163.com'
//            ]);

        // 删
//        DB::table('users')->where('id', 102)->delete();

    }
}
