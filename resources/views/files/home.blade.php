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
                    @php $path = url('/'). "/images/". $file->pdfFile;
                        $loc = url('/'). "/images/"
                    @endphp
                    <a href="{{ $path }}">
                        <img src="{{$path}}[0]"/>
                    </a>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $files->links() }}
    </div>
</body>
</html>
