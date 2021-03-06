<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hi</title>
    <style>
        @page { size: 21cm 29.7cm; margin: 30mm 45mm 30mm 45mm; /* change the margins as you want them to be. */ }
        Source: https://prograide.com/pregunta/7039/comment-faire-une-page-html-en-format-papier-a4
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ $company->name }}</h1>
            </div>
            <div class="col-md-12">
                <table class="table table-hover table-striped table-bordered">
                    @foreach ($ebillets as $ebillet)
                        <tr>
                            <td>{{$ebillet->id}}</td>
                            <td>{{$ebillet->number}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
