@extends('layouts.mainpageteacher')
@section('content')

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
            
            @foreach($subjects as $subject)
            <div class="col">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center d-inline-block mb-3 bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-graph-down">
                                <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm14.817 11.887a.5.5 0 0 0 .07-.704l-4.5-5.5a.5.5 0 0 0-.74-.037L7.06 8.233 3.404 3.206a.5.5 0 0 0-.808.588l4 5.5a.5.5 0 0 0 .758.06l2.609-2.61 4.15 5.073a.5.5 0 0 0 .704.07Z"></path>
                            </svg></div>
                        <h4 class="card-title">{{ $subject->name }}</h4>
                        <p class="card-text">{{ $subject->desc }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<script src="{{URL::asset('/js/bs-init.js')}}"></script>
@endsection