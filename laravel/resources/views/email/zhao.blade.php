<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>点击链接重置密码</title>
</head>
<body>
    <p>请点击下面的链接重置密码<a href="{{config('app.web_host')}}reset?id={{$id}}&token={{$token}}">find</a></p>
</body>
</html>