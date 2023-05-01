@extends('layouts.mainpage')
@section('content')

<section id="main" style="margin-top: auto;">
    <div class="container text-center">
        <div class="row d-flex flex-column">
            <div class="col">
                <h1 class="d-xxl-flex justify-content-xxl-start align-items-xxl-center" style="font-family: 'JetBrains Mono', monospace;">Jegyek</h1>
            </div>
            <div class="col-xxl-4">
                <p class="text-center" style="font-family: 'JetBrains Mono', monospace;">Az alábbi menüpontban láthatja a tantárgyakból megszerzett jegyeket.</p>
            </div>
        </div>
    <div class="container text-center pt-5">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Dátum</th>
                <th scope="col">Tanár</th>
                <th scope="col">Tantárgy</th>
                <th scope="col">Érdemjegy</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">2023.05.12.</th>
                <td>Péter Árpád</td>
                <td>Valmi useless tantárgy</td>
                <td>5</td>
              </tr>
            </tbody>
          </table>
    </div>
</section>
<script src="{{URL::asset('/js/aos.min.js')}}"></script>
<script src="{{URL::asset('/js/bs-init.js')}}"></script>
@endsection