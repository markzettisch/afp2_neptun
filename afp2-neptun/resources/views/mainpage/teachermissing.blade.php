@extends('layouts.mainpageteacher')
@section('content')

<section id="main" style="margin-top: auto;">
    <div class="container text-center">
        <h1 style="font-family: 'JetBrains Mono', monospace;text-align: left;">Hiányzások</h1>
        <div class="row">
            <div class="col-xl-5 offset-xxl-3 d-flex d-xl-flex flex-column justify-content-xl-center align-items-xl-center" style="margin-top: 2vw;">
                <h3 style="font-family: 'JetBrains Mono', monospace;">Tantárgy</h3><select class="form-select-lg">
                    <option value="1" selected="">Alkalmazások fejlesztése és projektlabor II.</option>
                    <option value="2" selected="">Kalkulus II.</option>
                    <option value="3" selected="">Magasszintű programozási nyelvek II.</option>
                </select>
            </div>
            <div class="col-xxl-2 d-xl-flex justify-content-xl-center align-items-xl-center align-items-xxl-end" style="margin-top: 2vw;"><button class="btn btn-primary btn-lg" type="button" style="background: rgb(15,112,177);">Rögzítés</button></div>
        </div>
        <div class="row" style="margin-top: 2vw;">
            <div class="col">
                <h1 style="font-family: 'JetBrains Mono', monospace;">Hallgatók:</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-12 offset-xxl-0" style="background: rgba(19,114,178,0.24);border-radius: 15px;">
                <div class="form-check form-switch form-check-inline form-check-reverse" style="font-size: 19px;"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Teszt Péter</label></div>
            </div>
        </div>
    </div>
</section>
<script src="{{URL::asset('/js/aos.min.js')}}"></script>
<script src="{{URL::asset('/js/bs-init.js')}}"></script>
@endsection