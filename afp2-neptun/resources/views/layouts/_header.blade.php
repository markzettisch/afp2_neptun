<nav class="navbar navbar-dark navbar-expand-md bg-primary bg-gradient" style="--bs-primary: #0067ac;--bs-primary-rgb: 0,103,172;background: #0067ac;box-shadow: 0px 0px 8px;">
    <div class="container-fluid"><img src="{{URL::asset('/imgs/logo.png')}}" width="58" height="38"><a class="navbar-brand" href="#" style="font-family: 'JetBrains Mono', monospace;color: rgba(255,255,255,0.9);">Neptun+</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse d-xl-flex justify-content-end justify-content-xl-end" id="navcol-1">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ url("student/marks") }}" style="font-family: 'JetBrains Mono', monospace;color: rgb(255,255,255);">Jegyek</a></li>
                <li class="nav-item"><a class="nav-link" href="#" style="font-family: 'JetBrains Mono', monospace;color: rgb(255,255,255);">Hiányzások</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url("subjects/mysubjects") }}" style="font-family: 'JetBrains Mono', monospace;color: rgb(255,255,255);">Tantárgyak</a></li>
                <li class="nav-item"><form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="nav-link" style="font-family: 'JetBrains Mono', monospace;">Kijelentkezés</button></li>
                </form>
            </ul>
        </div>
    </div>
</nav>