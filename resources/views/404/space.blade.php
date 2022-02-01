@extends('funny-error-pages::layout')

@section('title', __('funny-error-pages::funny-error-pages.404.title'))

@section('styles')
    <style>
        /*
        * VIEW IN FULL SCREEN MODE
        * FULL SCREEN MODE: http://salehriaz.com/404Page/404.html
        * DRIBBBLE: https://dribbble.com/shots/4330167-404-Page-Lost-In-Space
        */
        @-moz-keyframes rocket-movement{100%{-moz-transform:translate(1200px,-600px)}}@-webkit-keyframes rocket-movement{100%{-webkit-transform:translate(1200px,-600px)}}@keyframes rocket-movement{100%{transform:translate(1200px,-600px)}}@-moz-keyframes spin-earth{100%{-moz-transform:rotate(-360deg);transition:transform 20s}}@-webkit-keyframes spin-earth{100%{-webkit-transform:rotate(-360deg);transition:transform 20s}}@keyframes spin-earth{100%{-webkit-transform:rotate(-360deg);transform:rotate(-360deg);transition:transform 20s}}@-moz-keyframes move-astronaut{100%{-moz-transform:translate(-160px,-160px)}}@-webkit-keyframes move-astronaut{100%{-webkit-transform:translate(-160px,-160px)}}@keyframes move-astronaut{100%{-webkit-transform:translate(-160px,-160px);transform:translate(-160px,-160px)}}@-moz-keyframes rotate-astronaut{100%{-moz-transform:rotate(-720deg)}}@-webkit-keyframes rotate-astronaut{100%{-webkit-transform:rotate(-720deg)}}@keyframes rotate-astronaut{100%{-webkit-transform:rotate(-720deg);transform:rotate(-720deg)}}@-moz-keyframes glow-star{40%{-moz-opacity:.3}100%,90%{-moz-opacity:1;-moz-transform:scale(1.2)}}@-webkit-keyframes glow-star{40%{-webkit-opacity:.3}100%,90%{-webkit-opacity:1;-webkit-transform:scale(1.2)}}@keyframes glow-star{40%{-webkit-opacity:.3;opacity:.3}100%,90%{-webkit-opacity:1;opacity:1;-webkit-transform:scale(1.2);transform:scale(1.2);border-radius:999999px}}.spin-earth-on-hover{transition:ease 200s!important;transform:rotate(-3600deg)!important}body,html{margin:0;width:100%;height:100%;font-family:Dosis,sans-serif;font-weight:300;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.bg-purple{background:url("{{ asset('vendor/funny-error-pages/img/404-errors/space/bg_purple.png') }}");background-repeat:repeat-x;background-size:cover;background-position:left top;height:100%;overflow:hidden}ul{list-style-type:none;margin:0;padding:0;display:flex;align-items:center}li{float:left;padding:0 15px}li a{display:block;color:#fff;text-align:center;text-decoration:none;letter-spacing:2px;font-size:12px;-webkit-transition:all .3s ease-in;-moz-transition:all .3s ease-in;-ms-transition:all .3s ease-in;-o-transition:all .3s ease-in;transition:all .3s ease-in}li a:hover{color:#ffcb39}.btn-go-home{position:relative;z-index:200;margin:15px auto;width:100px;padding:10px 15px;border:1px solid #ffcb39;border-radius:100px;font-weight:400;display:block;color:#fff;text-align:center;text-decoration:none;letter-spacing:2px;font-size:11px;-webkit-transition:all .3s ease-in;-moz-transition:all .3s ease-in;-ms-transition:all .3s ease-in;-o-transition:all .3s ease-in;transition:all .3s ease-in}.btn-go-home:hover{background-color:#ffcb39;color:#fff;transform:scale(1.05);box-shadow:0 20px 20px rgba(0,0,0,.1)}.central-body{padding:17% 5% 10% 5%;text-align:center}.objects img{z-index:90;pointer-events:none}.object_rocket{z-index:95;position:absolute;transform:translateX(-50px);top:75%;pointer-events:none;animation:rocket-movement 200s linear infinite both running}.object_earth{position:absolute;top:20%;left:15%;z-index:90;animation:spin-earth 100s infinite linear both}.object_moon{position:absolute;top:12%;left:25%;transform:rotate(0);transition:transform ease-in 99999999999s}.object_astronaut{animation:rotate-astronaut 200s infinite linear both alternate}.box_astronaut{z-index:110!important;position:absolute;top:60%;right:20%;will-change:transform;animation:move-astronaut 50s infinite linear both alternate}.image-404{position:relative;z-index:100;pointer-events:none}.stars{background:url("{{ asset('vendor/funny-error-pages/svgs/404-errors/space/overlay_stars.svg') }}");background-repeat:repeat;background-size:contain;background-position:left top}.glowing_stars .star{position:absolute;border-radius:100%;background-color:#fff;width:3px;height:3px;opacity:.3;will-change:opacity}.glowing_stars .star:nth-child(1){top:80%;left:25%;animation:glow-star 2s infinite ease-in-out alternate 1s}.glowing_stars .star:nth-child(2){top:20%;left:40%;animation:glow-star 2s infinite ease-in-out alternate 3s}.glowing_stars .star:nth-child(3){top:25%;left:25%;animation:glow-star 2s infinite ease-in-out alternate 5s}.glowing_stars .star:nth-child(4){top:75%;left:80%;animation:glow-star 2s infinite ease-in-out alternate 7s}.glowing_stars .star:nth-child(5){top:90%;left:50%;animation:glow-star 2s infinite ease-in-out alternate 9s}@media only screen and (max-width:600px){.brand-logo img{width:120px}.box_astronaut{top:70%}.central-body{padding-top:25%}}
    </style>
@endsection

@section('content')
    <div class="bg-purple">
        <div class="stars">
            <div class="central-body">
                <img
                    class="image-404"
                    src="{{ url(asset('vendor/funny-error-pages/svgs/404-errors/space/404.svg')) }}"
                    width="300px"
                    alt="404 Not Found text"
                >
                <a
                    href="{{ url(config('funny-error-pages.redirect_link')) }}"
                    class="btn-go-home text-uppercase"
                >
                    {{ __('funny-error-pages::funny-error-pages.404.back-home') }}
                </a>
            </div>

            <div class="objects">
                <img
                    class="object_rocket"
                    src="{{ asset('vendor/funny-error-pages/svgs/404-errors/space/rocket.svg') }}"
                    width="40px"
                    alt="Space Rocket SVG graphic"
                >
                <div class="earth-moon">
                    <img
                        class="object_earth"
                        src="{{ asset('vendor/funny-error-pages/svgs/404-errors/space/earth.svg') }}"
                        width="100px"
                        alt="Planet Earth SVG graphic"
                    >
                    <img
                        class="object_moon"
                        src="{{ asset('vendor/funny-error-pages/svgs/404-errors/space/moon.svg') }}"
                        width="80px"
                        alt="Earth Moon SVG graphic"
                    >
                </div>
                <div class="box_astronaut">
                    <img
                        class="object_astronaut"
                        src="{{ asset('vendor/funny-error-pages/svgs/404-errors/space/astronaut.svg') }}"
                        width="140px"
                        alt="Astronaut in Space SVG graphic"
                    >
                </div>
            </div>

            <div class="glowing_stars">
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
            </div>
        </div>
    </div>
@endsection
