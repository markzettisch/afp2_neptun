
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>NeptunPlus EKE_HALLGTÓI_WEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo+Black&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=JetBrains+Mono&amp;display=swap">
</head>

<body style="background-color: rgb(17 24 39);">
    <div class="container">
        <h1 style="color: rgb(255,255,255);font-style: italic;font-weight: bold;text-align: center;font-family: 'JetBrains Mono', monospace;margin-top: 4vw;margin-bottom: 4vw;">Eszterházy Károly Katolikus Egyetem</h1>
        <div class="row">
            <div class="col-md-6 col-xl-4 offset-md-3 offset-xl-4 offset-xxl-4">
                <div class="card mb-5">
                    <div class="card-body d-flex flex-column align-items-center" style="box-shadow: 0px 0px 20px rgb(66,71,77);"><img src="{{URL::asset('/imgs/logo.png')}}" width="156" height="105">
                        <h1 style="font-family: 'JetBrains Mono', monospace;font-weight: bold;font-style: italic;color: rgb(33, 37, 41);margin-bottom: 0;">{{ $pageSettings->name }}</h1>
                        <p style="font-family: 'JetBrains Mono', monospace;font-weight: bold;font-style: italic;margin-bottom: 3vw;">{{ $pageSettings->short_desc }}</p>
                        <div class="row d-block mb-5">

                            <a href="{{ route('student.login') }}" class="btn btn-primary mb-3"> {{ __("Student log in") }} </a>
                            <a href="{{ route('teacher.login') }}" class="btn btn-danger mb-3"> {{ __("Teacher log in") }} </a>
                        </div>
                        
                    </div>
                </div>
                <p style="text-align: center;font-family: 'JetBrains Mono', monospace;font-weight: bold; color:aliceblue">EKE_WEB({{ $pageSettings->version }})<br>Verzió: {{ $pageSettings->version }} ({{ $pageSettings->updated_at }})<br></p>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>    
</body>

</html>
