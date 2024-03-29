@extends('layouts.mainpageteacher')
@section('content')
@isset($success)
    <div style="background-color: greenyellow"> 
        <p> {{ $success }}</p>
    </div>
@endisset

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
    <form action="{{ url('/teacher/marks') }}" method="post" autocomplete="off">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="col-xl-5 col-xxl-4 d-flex d-xl-flex flex-column justify-content-xl-center align-items-xl-center align-items-xxl-start" style="margin-top: 2vw;">
                <h3 style="font-family: 'JetBrains Mono', monospace;">Tantárgy</h3><select class="form-select-lg" name="subject_id">
                    @foreach($subjects as $subject)
                        <option value="{{ $subject->name }}" selected="">{{ $subject->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-xl-3 offset-xl-0 d-flex d-xl-flex flex-column justify-content-xl-start justify-content-xxl-center align-items-xxl-center" style="margin-top: 2vw;">
                <h3 style="font-family: 'JetBrains Mono', monospace;">Hallgató</h3><select class="form-select-lg" name="student_id">
                @foreach($students as $student)
                        <option value="{{ $student->id }}" selected="">{{ $student->name }}</option>
                @endforeach
                </select>
            </div>
            <div class="col-xl-1 col-xxl-2 d-flex d-xl-flex flex-column justify-content-xl-center align-items-xl-center align-items-xxl-start" style="margin-top: 2vw;">
                <h3 style="font-family: 'JetBrains Mono', monospace;">Érdemjegy</h3><input class="form-control-lg" type="number" style="width: 100%;" min="1" max="5" step="1" value="1" name="mark">
            </div>
            <div class="col-xxl-2 d-xl-flex justify-content-xl-center align-items-xl-center align-items-xxl-end" style="margin-top: 2vw;"><button class="btn btn-primary btn-lg" type="submit" style="background: rgb(15,112,177);font-family: 'JetBrains Mono', monospace;">Hozzáadás</button></div>
        </div>
    </form>
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
                            @foreach($marks as $mark)
                            <form action="{{ route("admin.marks.edit", $mark->id) }}" method="post" > 
                            @csrf
                              
                            <tr>
                            <td style="font-family: 'JetBrains Mono', monospace;">{{ $mark->name }}</td>
                            <td style="font-family: 'JetBrains Mono', monospace;">{{ $mark->hallgato }}</td>
                            <td><input class="form-control-sm" type="number" style="width: 30%;" min="1" max="5" step="1" value="{{$mark->mark}}" name="mark"></td>
                            <td><button class="btn btn-primary btn-sm" type="submit" value="{{ __("Edit") }}" style="background: rgb(15,112,177);font-family: 'JetBrains Mono', monospace;">Módosítás</button></td>
                        </form>
                            <form action="{{ route("admin.marks.destroy") }}" method="post">
                                @csrf
                            <td><button class="btn btn-primary btn-sm" type="submit" name="deletebutton"  id="deletebutton" value="{{$mark->id}}" style="background:red;font-family: 'JetBrains Mono', monospace;">Törlés</button></td>
                            </tr>
                            </form>
                            @endforeach
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