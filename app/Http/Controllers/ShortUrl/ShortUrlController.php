<?php


namespace App\Http\Controllers\ShortUrl;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;

class ShortUrlController extends Controller
{
    public function index()
    {
        return view('shortUrl');
    }

    public function getShortUrl(Request $request)
    {
        $long_url = $request->get('longUrl');
        $short_host = "http://127.0.0.1:8000/";
        $random_code = $this->getRandomString(6);
        $short_url = $short_host . $random_code;

        $flag = DB::table('shorturl')->insert([
            'random_code' => $random_code,
            'short_url' => $short_url,
            'long_url' => $long_url
        ]);

        if ($flag)
            return $short_host . $random_code;
        else
            return '生成失败，请重新生成！！！';
    }

    public function jumps1(Request $request)
    {
        $random_code = $request->path();
        $long_url = DB::table('shorturl')
            ->select('long_url')
            ->where('random_code', '=', substr($random_code, -6))
            ->get();
        $long_url = $long_url->toArray()[0]->long_url;
        return redirect()->away($long_url);
    }

    public function jumps2(Request $request)
    {
        $random_code = $request->get('shortUrl');
        $long_url = DB::table('shorturl')
            ->select('long_url')
            ->where('random_code', '=', substr($random_code, -6))
            ->get();
        $long_url = $long_url->toArray()[0]->long_url;
        return $long_url;
    }

    // 生成指定长度的字符串，包括数字和大小写字母
    function getRandomString($random_length)
    {
        $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz_=";
        $random_string = '';
        for ($i = 0; $i < $random_length; $i++) {
            $random_string .= $chars [mt_rand(0, strlen($chars) - 1)];
        }
        return $random_string;
    }

    public function test()
    {
        date_default_timezone_set('PRC');// 临时设置为中国时区
        $time = DB::table('shorturl')
            ->select('created_at')
            ->where('random_code', '=', 'CgDr68')
            ->get();
        $time = $time->toArray()[0]->created_at;
        $now = date('Y-m-d H-i-s', time());
        $newTime = date("Y-m-d H-i-s", strtotime("$time   +1   day"));
        if ($newTime < $now) {
            return $newTime . ' 时间已超过24小时！！！';
        } else {
            return $now . ' 时间未超过24小时！！！';
        }
    }

}
