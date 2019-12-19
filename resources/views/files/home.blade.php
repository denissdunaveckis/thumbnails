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
                    @php $pathPdf = url('/'). "/images/". $file->pdfFile;
                        $pathThumb = url('/'). "/images/". $file->thumbnail;
                        $loc = url('/'). "/images/";
                    @endphp
                    <a href="{{ $pathPdf }}">
                        <img src="{{$pathThumb}}" height="300" width="300"/>
                    </a>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $files->links() }}
    </div>
</body>
</html>
