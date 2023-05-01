@extends('layouts.mainpageteacher')
@section('content')

<section id="main" style="margin-top: auto;">
<div class="container text-center">
    <div class="row d-flex flex-column">
        <div class="col">
            <h1 class="d-xxl-flex justify-content-xxl-start align-items-xxl-center" style="font-family: 'JetBrains Mono', monospace;">Jegyek</h1>
        </div>
        <div class="col-xxl-4">
            <p class="text-center" style="font-family: 'JetBrains Mono', monospace;">Az alábbi menüpontban hozzáadhat tanulókhoz érdemjegyeket, módosíthatja és törölheti azokat.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-5 col-xxl-4 d-flex d-xl-flex flex-column justify-content-xl-center align-items-xl-center align-items-xxl-start" style="margin-top: 2vw;">
            <h3 style="font-family: 'JetBrains Mono', monospace;">Tantárgy</h3><select class="form-select-lg">
                <option value="1" selected="">Alkalmazások fejlesztése és projektlabor II.</option>
                <option value="2" selected="">Kalkulus II.</option>
                <option value="3" selected="">Magasszintű programozási nyelvek II.</option>
            </select>
        </div>
        <div class="col-xl-3 offset-xl-0 d-flex d-xl-flex flex-column justify-content-xl-start justify-content-xxl-center align-items-xxl-center" style="margin-top: 2vw;">
            <h3 style="font-family: 'JetBrains Mono', monospace;">Hallgató</h3><select class="form-select-lg">
                <optgroup label="Tantárgy1">
                    <option value="2" selected="">Kiss Sándor</option>
                    <option value="3" selected="">Péter Árpád</option>
                </optgroup>
                <optgroup label="Alkalmazások Fejlesztése és projektlabor II:">
                    <option value="3">Kiss Barnabás</option>
                    <option value="4">Farkas Lajos</option>
                    <option value="5">Göröcs Lajos Zsolt</option>
                    <option value=""></option>
                </optgroup>
            </select>
        </div>
        <div class="col-xl-1 col-xxl-2 d-flex d-xl-flex flex-column justify-content-xl-center align-items-xl-center align-items-xxl-start" style="margin-top: 2vw;">
            <h3 style="font-family: 'JetBrains Mono', monospace;">Érdemjegy</h3><input class="form-control-lg" type="number" style="width: 100%;" min="1" max="5" step="1" placeholder="1" name="mark">
        </div>
        <div class="col-xxl-2 d-xl-flex justify-content-xl-center align-items-xl-center align-items-xxl-end" style="margin-top: 2vw;"><button class="btn btn-primary btn-lg" type="button" style="background: rgb(15,112,177);font-family: 'JetBrains Mono', monospace;">Hozzáadás</button></div>
    </div>
    <div class="row">
        <div class="col">
            <div class="table-responsive" style="margin-top: 5vw;">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Tantárgy</th>
                            <th>Hallgató</th>
                            <th>Érdemjegy</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="font-family: 'JetBrains Mono', monospace;">Magasszintű programozási nyelvek II.</td>
                            <td style="font-family: 'JetBrains Mono', monospace;">Göröcs Lajos Zsolt</td>
                            <td><input class="form-control-sm" type="number" style="width: 30%;" min="1" max="5" step="1" placeholder="1" name="mark"></td>
                            <td><button class="btn btn-primary btn-sm" type="button" style="background: rgb(15,112,177);font-family: 'JetBrains Mono', monospace;">Módosítás</button></td>
                            <td><button class="btn btn-danger btn-sm" type="button" style="font-family: 'JetBrains Mono', monospace;">Törlés</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</section>
<script src="{{URL::asset('/js/aos.min.js')}}"></script>
<script src="{{URL::asset('/js/bs-init.js')}}"></script>
@endsection