@extends('layouts.mainpage')
@section('content')

<section id="main" style="margin-top: auto;">
    <div class="container text-center">
        <h1 data-aos="flip-up" style="font-family: 'JetBrains Mono', monospace;">Üdvözöl a Neptun+!</h1>
    </div>
</section>
<script src="{{URL::asset('/js/aos.min.js')}}"></script>
<script src="{{URL::asset('/js/bs-init.js')}}"></script>
@endsection