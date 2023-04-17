@extends('layouts.mainpage')
@section('content')

<nav class="navbar navbar-dark navbar-expand-md bg-primary bg-gradient" style="--bs-primary: #0067ac;--bs-primary-rgb: 0,103,172;background: #0067ac;box-shadow: 0px 0px 8px;">
    <div class="container-fluid"><img src="{{URL::asset('/imgs/logo.png')}}" width="58" height="38"><a class="navbar-brand" href="#" style="font-family: 'JetBrains Mono', monospace;color: rgba(255,255,255,0.9);">Neptun+</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse d-xl-flex justify-content-end justify-content-xl-end" id="navcol-1">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#" style="font-family: 'JetBrains Mono', monospace;color: rgb(255,255,255);">Jegyek</a></li>
                <li class="nav-item"><a class="nav-link" href="#" style="font-family: 'JetBrains Mono', monospace;color: rgb(255,255,255);">Hiányzások</a></li>
                <li class="nav-item"><a class="nav-link" href="#" style="font-family: 'JetBrains Mono', monospace;color: rgb(255,255,255);">Tantárgyak</a></li>
                <li class="nav-item"><a class="nav-link" href="#" style="font-family: 'JetBrains Mono', monospace;">Kijelentkezés</a></li>
            </ul>
        </div>
    </div>
</nav>
<section id="main" style="margin-top: auto;">
    <div class="container text-center">
        <h1 data-aos="flip-up" style="font-family: 'JetBrains Mono', monospace;">Üdvözöl a Neptun+!</h1>
    </div>
</section>
<footer class="text-center py-4" style="margin-top: auto;">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-3">
            <div class="col-lg-12 col-xl-12">
                <p class="text-muted my-2" style="font-family: 'JetBrains Mono', monospace;">Copyright&nbsp;© 2023 Neptun+<br>Ács Róbert, Kiss Barnabás, Szegedi Tamás, Zettisch Márk</p>
            </div>
        </div>
    </div>
</footer>
<script src="{{URL::asset('/js/aos.min.js')}}"></script>
<script src="{{URL::asset('/js/bs-init.js')}}"></script>
@endsection