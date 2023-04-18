
@extends('layouts.user.studentlogin')
@section('content')
<div class="container">
    <h1 style="color: rgb(255,255,255);font-style: italic;font-weight: bold;text-align: center;font-family: 'JetBrains Mono', monospace;margin-top: 4vw;margin-bottom: 4vw;">Eszterházy Károly Katolikus Egyetem</h1>
    <div class="row">
        <div class="col-md-6 col-xl-4 offset-md-3 offset-xl-4 offset-xxl-4">
            <div class="card mb-5">
                <div class="card-body d-flex flex-column align-items-center" style="box-shadow: 0px 0px 20px rgb(66,71,77);"><img src="{{URL::asset('/imgs/logo.png')}}" width="156" height="105">
                    <h1 style="font-family: 'JetBrains Mono', monospace;font-weight: bold;font-style: italic;color: rgb(33, 37, 41);margin-bottom: 0;">Neptun+</h1>
                    <p style="font-family: 'JetBrains Mono', monospace;font-weight: bold;font-style: italic;margin-bottom: 3vw;">Egységes Tanulmányi Rendszer</p>
                    <form class="text-center" method="post" action="{{ route("login") }}">
                        @csrf
                        <div class="mb-3"><input class="form-control form-control-lg" type="text" name="NeptunCode" placeholder="Email" style="font-family: 'JetBrains Mono', monospace;"></div>
                        <div class="mb-3"><input class="form-control form-control-lg" type="password" name="Password" placeholder="Jelszó" style="font-family: 'JetBrains Mono', monospace;"></div>
                        <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="font-family: 'JetBrains Mono', monospace;--bs-primary: #0067ac;--bs-primary-rgb: 0,103,172;background: rgb(0,103,172);">Bejelentkezés</button></div>
                    </form>
                </div>
            </div>
            <p style="text-align: center;font-family: 'JetBrains Mono', monospace;font-weight: bold;">Hallgatói EKE_HALLGTÓI_WEB(2982)<br>Verzió: 2023.04.02 (2023.04.02)<br></p>
        </div>
    </div>
</div>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
@endsection