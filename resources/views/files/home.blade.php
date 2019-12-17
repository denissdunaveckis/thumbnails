<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Laravel</title>
</head>
<body>
    <a href='/image-upload'><button>Upload</button></a>
    <div class="container">
        <table class="table table-striped">
            <tbody>
            @foreach($files as $file)
                <tr>
                    <a href="{{$file->id}}">
                        {{$file->thumbnail}}
                    </a>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $files->links() }}
    </div>
</body>
</html>
