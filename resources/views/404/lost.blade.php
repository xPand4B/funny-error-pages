@extends('funny-error-pages::layout')

@section('title', __('funny-error-pages::funny-error-pages.404.title'))

@section('styles')
    <style>
        *{font-family:Roboto,Helvetica,Arial,sans-serif}.page_404{padding:40px 0;background:#fff}.page_404 img{width:100%}.four_zero_four_bg{background-image:url("{{ asset('vendor/funny-error-pages/img/404-errors/lost/dribbble_1.gif') }}");background-repeat:no-repeat;height:40vh;background-position:center}.link_404{display:flex;justify-content:center;color:#fff!important;padding:10px 20px;background:#39ac31;margin:50px 0;width:auto;text-decoration:none}.content_box_404{margin:auto}.container{display:flex;flex-direction:column}.text-center{text-align:center}
    </style>
@endsection

@section('content')
    <section class="page_404">
        <div class="container">
            <div class="four_zero_four_bg"></div>
            <div class="content_box_404">
                <h2 class="text-center">{{ __('funny-error-pages::funny-error-pages.404.lost.title') }}</h2>
                <p class="text-center">{{ __('funny-error-pages::funny-error-pages.404.lost.text') }}</p>
                <a href="{{ url(config('funny-error-pages.redirect_link')) }}" class="link_404">
                    {{ __('funny-error-pages::funny-error-pages.404.back-home') }}
                </a>
            </div>
        </div>
    </section>
@endsection
