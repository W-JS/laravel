<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('bootstrap-4.6.0-dist/css/bootstrap.css')}}">
    <script type="text/javascript" src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('bootstrap-4.6.0-dist/js/bootstrap.js')}}"></script>
    <style>
        .container {
            position: relative;
        }

        .center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
    <title>短链接</title>
</head>
<body>

<div class="container center">
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">长链接：</span>
        </div>
        <input type="text" class="form-control" id="longUrl" placeholder="https://www.baidu.com/" value="">
        <button type="button" class="btn btn-primary" id="generate">生成</button>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text">短链接：</span>
        </div>
        <input type="text" class="form-control" id="shortUrl" placeholder="http://localhost:8000/A1B2C3" value="">
        <button type="button" class="btn btn-success" id="jumps">跳转</button>
    </div>

    <input type="hidden" id="_token" name="_token" value="{{csrf_token()}}">
</div>
</body>

<script>

    $(function () {
        $("#generate").click(Generate);
        $("#jumps").click(Jumps);
    });

    function Generate() {
        let longUrl = $("#longUrl").val();
        if (longUrl == '' || longUrl == null) {
            alert('请输入长链接！！！');
        }
        $.post({
            url: '/shortUrl/getShortUrl',
            data: {
                'longUrl': longUrl,
                '_token': $('#_token').val()
            },
            success: function ($result) {
                $('#shortUrl').val($result);
            }
        })
    }

    function Jumps() {
        let shortUrl = $("#shortUrl").val();
        if (shortUrl == '' || shortUrl == null) {
            alert('短链接暂未生成！！！');
        }
        console.log(shortUrl);
        $.post({
            url: '/shortUrl/jumps',
            data: {
                'shortUrl': shortUrl,
                '_token': $('#_token').val()
            },
            success: function ($result) {
                // window.location.href = $result;// 原窗口跳转
                window.open($result);// 新窗口跳转
            }
        })
    }

    /*function change() {
        var $lurl = $('#l_url').val();
        var $http = $lurl.substr(0, 7);
        var $https = $lurl.substr(0, 8);
        if ($http !== 'http://' && $https !== 'https://') {
            alert('网站格式输入错误，请以http:// 或者 https:// 开头');
            return;
        }
        $.post({
            url: '/task/changeUrl',
            data: {
                'longUrl': $lurl,
                '_token': $('#_token').val()
            },
            success: function ($result) {
                $('#lab').html('转换后的网址为');
                $('#l_url').val($result);
                $('#btn_ch').attr('disabled', "true");
            }
        })
    }*/
</script>
</html>
