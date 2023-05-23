<div class="background-comics">
    <div class="container row m-auto p-5 overflow-hidden">
        <div class="col-5">
            <div class="row g-0">
                <div class="col-4">
                    <h5 class="white">DC COMICS</h5>
                    <ul class="lista">
                        @foreach (config("conf.footer.DCcomics") as $link)
                        <li><a class="gray" href="#">{{$link}}</a></li>
                        @endforeach
                    </ul>
                    <h5 class="white">SHOP</h5>
                    <ul class="lista">
                        @foreach (config("conf.footer.Shop") as $link)
                        <li><a class="gray" href="#">{{$link}}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-4">
                    <h5 class="white">DC</h5>
                    <ul class="lista">
                        @foreach (config("conf.footer.Listacomics") as $link)
                        <li><a class="gray" href="#">{{$link}}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-4">
                    <h5 class="white">SITES</h5>
                    <ul class="lista">
                        @foreach (config("conf.footer.Sites") as $link)
                        <li><a class="gray" href="#">{{$link}}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-12">
                    <span class="gray">All sites content TM and # 2020 DC Entertainement, unless otherwise <span class="blue">noted here</span>. All rights reserved. <br>
                        <span class="blue">Cookies Settings</span>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-5 offset-1 position-relative">
            <img class="position-absolute sfondo-dc" src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="Logo DC di sfondo">
        </div>
    </div>

    <div class="background-gray">
        <div class="container pt-4 pb-4 m-auto row">
            <div class="col-6">
                <button class="btn btn-outline sign-up-btn white">SIGN-UP NOW!</button>
            </div>

            <div class="col-4 offset-2 d-flex align-items-center justify-content-between p-0">
                <h5 class="blue m-0">FOLLOW US</h5>
                <div class="d-flex justify-content-between p-0 icone">
                <a href="#" v-for="icona in listaIcona"><img src="{{Vite::asset('resources/img/footer-facebook.png')}}"></a>
                    </div>
                    <div class="d-flex justify-content-between p-0 icone">
                        <a href="#" v-for="icona in listaIcona"><img src="{{Vite::asset('resources/img/footer-periscope.png')}}"></a>
                    </div>
                    <div class="d-flex justify-content-between p-0 icone">
                        <a href="#" v-for="icona in listaIcona"><img src="{{Vite::asset('resources/img/footer-pinterest.png')}}"></a>
                    </div>
                    <div class="d-flex justify-content-between p-0 icone">
                        <a href="#" v-for="icona in listaIcona"><img src="{{Vite::asset('resources/img/footer-twitter.png')}}"></a>
                    </div>
                    <div class="d-flex justify-content-between p-0 icone">
                        <a href="#" v-for="icona in listaIcona"><img src="{{Vite::asset('resources/img/footer-youtube.png')}}"></a>
                </div>
            </div>
        </div>
    </div>
</div>