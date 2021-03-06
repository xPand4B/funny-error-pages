@extends('funny-error-pages::layout')

@section('title', __('funny-error-pages::funny-error-pages.404.title'))

@section('styles')
    <style>
        html{height:100%}body{min-height:100%;display:flex}h1{font-family:'Cabin Sketch',cursive;font-size:3em;text-align:center;opacity:.8;order:1}h1 small{display:block}.site{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;flex-direction:column;margin:0 auto;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center}.sketch{position:relative;height:400px;min-width:400px;margin:0;overflow:visible;order:2}.bee-sketch{height:100%;width:100%;position:absolute;top:0;left:0}.red{background:url("{{ asset('vendor/funny-error-pages/img/404-errors/heart/red-1.png') }}") no-repeat center center;opacity:1;animation:red 3s linear infinite,opacityRed 5s linear alternate infinite}.blue{background:url("{{ asset('vendor/funny-error-pages/img/404-errors/heart/blue-1.png') }}") no-repeat center center;opacity:0;animation:#00f 3s linear infinite,opacityBlue 5s linear alternate infinite}@media only screen and (min-width:780px){.site{flex-direction:row;padding:1em 3em 1em 0}h1{text-align:right;order:2;padding-bottom:2em;padding-left:2em}.sketch{order:1}}@keyframes blue{0%{background-image:url("{{ asset('vendor/funny-error-pages/img/404-errors/heart/blue-1.png') }}")}9.09%{background-image:url("{{ asset('vendor/funny-error-pages/img/404-errors/heart/blue-2.png') }}")}27.27%{background-image:url("{{ asset('vendor/funny-error-pages/img/404-errors/heart/blue-3.png') }}")}36.36%{background-image:url("{{ asset('vendor/funny-error-pages/img/404-errors/heart/blue-4.png') }}")}45.45%{background-image:url("{{ asset('vendor/funny-error-pages/img/404-errors/heart/blue-5.png') }}")}54.54%{background-image:url("{{ asset('vendor/funny-error-pages/img/404-errors/heart/blue-6.png') }}")}63.63%{background-image:url("{{ asset('vendor/funny-error-pages/img/404-errors/heart/blue-7.png') }}")}72.72%{background-image:url("{{ asset('vendor/funny-error-pages/img/404-errors/heart/blue-8.png') }}")}81.81%{background-image:url("{{ asset('vendor/funny-error-pages/img/404-errors/heart/blue-8.png') }}")}100%{background-image:url("{{ asset('vendor/funny-error-pages/img/404-errors/heart/blue-1.png') }}")}}@keyframes red{0%{background-image:url("{{ asset('vendor/funny-error-pages/img/404-errors/heart/red-1.png') }}")}9.09%{background-image:url("{{ asset('vendor/funny-error-pages/img/404-errors/heart/red-2.png') }}")}27.27%{background-image:url("{{ asset('vendor/funny-error-pages/img/404-errors/heart/red-3.png') }}")}36.36%{background-image:url("{{ asset('vendor/funny-error-pages/img/404-errors/heart/red-4.png') }}")}45.45%{background-image:url("{{ asset('vendor/funny-error-pages/img/404-errors/heart/red-5.png') }}")}54.54%{background-image:url("{{ asset('vendor/funny-error-pages/img/404-errors/heart/red-6.png') }}")}63.63%{background-image:url("{{ asset('vendor/funny-error-pages/img/404-errors/heart/red-7.png') }}")}72.72%{background-image:url("{{ asset('vendor/funny-error-pages/img/404-errors/heart/red-8.png') }}")}81.81%{background-image:url("{{ asset('vendor/funny-error-pages/img/404-errors/heart/red-9.png') }}")}100%{background-image:url("{{ asset('vendor/funny-error-pages/img/404-errors/heart/red-1.png') }}")}}@keyframes opacityBlue{from{opacity:0}25%{opacity:0}75%{opacity:1}to{opacity:1}}@keyframes opacityRed{from{opacity:1}25%{opacity:1}75%{opacity:.3}to{opacity:.3}}
    </style>
@endsection

@section('content')
    <div class="site">
        <div class="sketch">
            <div class="bee-sketch red"></div>
            <div class="bee-sketch blue"></div>
        </div>

        <h1>{{ __('funny-error-pages::funny-error-pages.404.page-not-found') }}
            <small>
                <a href="{{ url(config('funny-error-pages.redirect_link')) }}">{{ __('funny-error-pages::funny-error-pages.404.back-home') }}</a>
            </small>
        </h1>
    </div>
@endsection
