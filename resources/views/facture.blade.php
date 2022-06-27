<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hi</title>
    <style>
        .top-left-logo {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0.25;
        }
    </style>
</head>
<body>
    <div class="top-left-logo">
        <img src="data:image/png;base64,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" alt="">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Ma facture</h1>
            </div>
            <div class="col-md-12">
                <table class="table table-hover table-striped table-bordered">
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
