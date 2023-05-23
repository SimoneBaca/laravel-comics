<div class="nav-bar-dc-blue w-100">
    <div class="container d-flex flex-row-reverse">
        <span class="color-white mini">DC POWER VISA</span>
        <span class="color-white mini">ADDITIONAL DC SITES</span>
    </div>
</div>

<div>
    <nav class="navbar navbar-expand-lg bg-white navbar-dc">


        <div class="container">

            <a class="navbar-brand" href="#">
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="">
            </a>

            <div class="navbar h-100">
                <ul class="navbar-nav">
                    @foreach (config("conf.navbar") as $link)
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <h6>{{$link}}</h6>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </nav>
    <div class="spacer"></div>
    <div class="jumbotron">

    </div>
</div>