<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Laravel</title>
</head>
<body>
<h1>
    <img src="{{url('/')}}/images/{{$file->pdfFile}}"
         alt ="Image" width="300" height ="300">
</h1>
</body>
</html>
