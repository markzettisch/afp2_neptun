@extends('layouts.subjects')
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
<section id="main" style="margin-top: 5vw;">
    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-5 text-center mx-auto">
                <h2 class="text-start" style="font-family: 'JetBrains Mono', monospace;">Tantárgyak</h2>
                <p class="text-start" style="font-family: 'JetBrains Mono', monospace;">A felvett tárgyakat lentebb találhatod, amennyiben nem vettél fel egy tárgyat sem az oldal üres marad.</p>
            </div>
            <div class="col"></div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            <div class="col">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center d-inline-block mb-3 bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-bicycle">
                                <path d="M4 4.5a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1v.5h4.14l.386-1.158A.5.5 0 0 1 11 4h1a.5.5 0 0 1 0 1h-.64l-.311.935.807 1.29a3 3 0 1 1-.848.53l-.508-.812-2.076 3.322A.5.5 0 0 1 8 10.5H5.959a3 3 0 1 1-1.815-3.274L5 5.856V5h-.5a.5.5 0 0 1-.5-.5zm1.5 2.443-.508.814c.5.444.85 1.054.967 1.743h1.139L5.5 6.943zM8 9.057 9.598 6.5H6.402L8 9.057zM4.937 9.5a1.997 1.997 0 0 0-.487-.877l-.548.877h1.035zM3.603 8.092A2 2 0 1 0 4.937 10.5H3a.5.5 0 0 1-.424-.765l1.027-1.643zm7.947.53a2 2 0 1 0 .848-.53l1.026 1.643a.5.5 0 1 1-.848.53L11.55 8.623z"></path>
                            </svg></div>
                        <h4 class="card-title">Kötelező testnevelés II.</h4>
                        <p class="card-text">Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center d-inline-block mb-3 bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-app-indicator">
                                <path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z"></path>
                                <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                            </svg></div>
                        <h4 class="card-title">Alkalmazások fejlesztése és projektlabor II.</h4>
                        <p class="card-text">Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center d-inline-block mb-3 bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-graph-down">
                                <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm14.817 11.887a.5.5 0 0 0 .07-.704l-4.5-5.5a.5.5 0 0 0-.74-.037L7.06 8.233 3.404 3.206a.5.5 0 0 0-.808.588l4 5.5a.5.5 0 0 0 .758.06l2.609-2.61 4.15 5.073a.5.5 0 0 0 .704.07Z"></path>
                            </svg></div>
                        <h4 class="card-title">Kalkulus II.</h4>
                        <p class="card-text">Erat netus est hendrerit, nullam et quis ad cras porttitor iaculis. Bibendum vulputate cras aenean.</p>
                    </div>
                </div>
            </div>
        </div>
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
<script src="{{URL::asset('/js/bs-init.js')}}"></script>
@endsection