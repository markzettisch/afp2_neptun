@extends('layouts.mainpageteacher')
@section('content')
@isset($success)
    <div style="background-color: greenyellow"> 
        <p> {{ $success }}</p>
    </div>
@endisset
    <section id="main" style="margin-top: 5vw;">
        <div class="container py-4 py-xl-5">
            <div class="row mb-5" style="padding-bottom: 2vw;">
                <div class="col-md-8 col-xl-5 text-center mx-auto">
                    <h2 class="text-start" style="font-family: 'JetBrains Mono', monospace;">Tantárgyak</h2>
                    <p class="text-start" style="font-family: 'JetBrains Mono', monospace;">Hozzon létre új tárgyat az alábbi
                        menüponton, amennyiben módosítani vagy törölni szeretné a már meglévő tantárgyakat azt a kártyákon
                        belül megteheti</p>
                </div>
                <div class="col-xl-3 col-xxl-1 d-xl-flex justify-content-xl-start align-items-xl-center justify-content-xxl-start align-items-xxl-end"
                    style="padding-bottom: 2vw;"></div>
                <div class="col-xxl-4">
                    <form action="{{ url('/admin/subjects') }}" method="post" autocomplete="off">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="row d-xxl-flex justify-content-xxl-center align-items-xxl-start"
                                    style="padding-bottom: 1vw;">
                                    <div class="col">
                                        <div
                                            class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center d-inline-block mb-3 bs-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                fill="currentColor" viewBox="0 0 16 16" class="bi bi-graph-down">
                                                <path fill-rule="evenodd"
                                                    d="M0 0h1v15h15v1H0V0Zm14.817 11.887a.5.5 0 0 0 .07-.704l-4.5-5.5a.5.5 0 0 0-.74-.037L7.06 8.233 3.404 3.206a.5.5 0 0 0-.808.588l4 5.5a.5.5 0 0 0 .758.06l2.609-2.61 4.15 5.073a.5.5 0 0 0 .704.07Z">
                                                </path>
                                            </svg></div>
                                    </div>
                                    <div
                                        class="col-5 col-sm-3 col-md-7 col-lg-5 col-xl-4 col-xxl-4 d-flex d-xxl-flex justify-content-center align-items-start justify-content-xxl-end align-items-xxl-start">
                                        <button class="btn btn-primary d-xl-flex justify-content-xl-center" type="submit"
                                            style="background: rgb(0,103,172);">Létrehozás</button></div>
                                </div>
                                    <input class="border rounded form-control form-control-lg d-xxl-flex" name="name" type="text"
                                    style="width: 100%;margin-bottom: 1vw;" placeholder="{{ __("Name") }}" required>
                                    <input
                                    class="border rounded form-control form-control-lg" name="description" type="text" style="width: 100%; margin-bottom: 1vw;" placeholder="{{ __("Desc") }}">
                                    <input class="border rounded form-control form-control-lg d-xxl-flex" min="1" step="1" name="suggested_semester" type="number"
                                    style="width: 100%;margin-bottom: 1vw;" placeholder="{{ __("Suggested semester") }}" required>
                                    <input class="border rounded form-control form-control-lg d-xxl-flex" min="1" step="1"name="credit" type="number"
                                    style="width: 100%;margin-bottom: 1vw;" placeholder="{{ __("Credit") }}" required>
                            </div>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="POST">
                    </form>
                </div>
                <div class="col-xxl-1"></div>
            </div>
            <div class="row" style="margin-bottom: 2vw;">
                <div class="col">
                    <h2 style="font-family: 'JetBrains Mono', monospace;">Összes Tantárgy</h2>
                </div>
            </div>



            <div class="container">
                <div class="row">
            @foreach ($subjects as $subject)
             
            <div class="col-4">
                        <div class="card mb-4">
                            <form action="{{ route("admin.subject.edit", $subject->id) }}" method="post" >  
                            @csrf
                            <div class="card-body p-4">
                                <div
                                    class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center d-inline-block mb-3 bs-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        fill="currentColor" viewBox="0 0 16 16" class="bi bi-graph-down">
                                        <path fill-rule="evenodd"
                                            d="M0 0h1v15h15v1H0V0Zm14.817 11.887a.5.5 0 0 0 .07-.704l-4.5-5.5a.5.5 0 0 0-.74-.037L7.06 8.233 3.404 3.206a.5.5 0 0 0-.808.588l4 5.5a.5.5 0 0 0 .758.06l2.609-2.61 4.15 5.073a.5.5 0 0 0 .704.07Z">
                                        </path>
                                    </svg></div>
                                <div>

                                    <!-- {{ $subject->name }} -->
                                </div> <input name="name" class="border rounded form-control-lg w-100 d-xxl-flex" type="text"
                                    style="width: 80%;margin-bottom: 1vw;" value="{{ $subject->name }}" placeholder="{{ __("Name") }}"> 
                                    <input  name="desc" class="border rounded form-control-lg w-100" type="text" style="width: 100%;margin-bottom: 1vw;" value="{{ $subject->desc }}" placeholder="{{ __("Desc") }}">
                                    <input  name="suggested_semester" class="border rounded form-control-lg w-100" type="number" style="width: 100%;margin-bottom: 1vw;" value="{{ $subject->suggested_semester }}" placeholder="{{ __("Suggested semester") }}">
                                    <input  name="credit" class="border rounded form-control-lg w-100" type="number" style="width: 100%;margin-bottom: 1vw;" value="{{ $subject->credit }}" placeholder="{{ __("Credit") }}">
                                   <input type="submit" class="btn btn-warning form-control" value="{{ __("Edit") }}" > 
                                  
                            </div>
                    </div>
                    
            </form>
                </div>
            @endforeach
            </div>
            </div>






        </div>
    </section>
    <script src="{{ URL::asset('/js/aos.min.js') }}"></script>
    <script src="{{ URL::asset('/js/bs-init.js') }}"></script>
@endsection
