@extends('layouts.mainpage')
@section('content')

<section id="main" style="margin-top: auto;">
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