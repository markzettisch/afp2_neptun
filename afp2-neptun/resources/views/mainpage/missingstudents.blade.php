@extends('layouts.mainpage')
@section('content')

<section id="main" style="margin-top: auto;">
    <div class="container text-center">
        <div class="row d-flex flex-column">
            <div class="col">
                <h1 class="d-xxl-flex justify-content-xxl-start align-items-xxl-center" style="font-family: 'JetBrains Mono', monospace;">Hiányzások</h1>
            </div>
            <div class="col-xxl-4">
                <p class="text-center" style="font-family: 'JetBrains Mono', monospace;">Az alábbi menüpontban láthatja a hiányzásokat.</p>
            </div>
        </div>
    <div class="container text-center pt-5">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Dátum</th>
                <th scope="col">Tanár</th>
                <th scope="col">Tantárgy</th>
                <th scope="col">Hiányzás</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                <th>2022.12.10.</th></th>
                <td>Péter Árpád</td>
                <td>Valami</td>
                <td>Megjelent</td>
                </tr>
            </tbody>
          </table>
    </div>
</section>
<script src="{{URL::asset('/js/aos.min.js')}}"></script>
<script src="{{URL::asset('/js/bs-init.js')}}"></script>
@endsection