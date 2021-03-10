<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>提交</title>
</head>
<body>

{{--<form action="/task/getform" method="post">--}}
{{--    <input type="hidden" name="_token" value="{{csrf_token()}}">--}}
{{--    <input type="hidden" name="_method" value="put">--}}{{--将post提交转换为put提交--}}
{{--    <button type="submit">提交</button>--}}
{{--</form>--}}

<form action="/task/getform" method="post">
    @csrf
    @method('put')
    <button type="submit">提交</button>
</form>

{{--<form action="/api/getform" method="post">--}}
{{--    @method('put')--}}
{{--    <button type="submit">提交</button>--}}
{{--</form>--}}

</body>
</html>
