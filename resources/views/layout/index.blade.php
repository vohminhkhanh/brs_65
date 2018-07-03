<!DOCTYPE html>
<html class=" js csstransforms no-csstransforms3d">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>@yield('title')</title>
        <base href="{{ asset('') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        {!! Html::style('css/bootstrap.min.css') !!}
        {!! Html::style('css/rzslider.css') !!}
        {!! Html::style('css/css') !!}
        {!! Html::style('css/font-awesome.min.css') !!}
        {!! Html::style('css/flexslider.css') !!}
        {!! Html::style('css/icon.css') !!}
        {!! Html::style('css/animate.css') !!}
        {!! Html::style('css/angular-material.min.css') !!}
        {!! Html::style('css/owl.carousel.css') !!}
        {!! Html::style('css/responsive.css') !!}
        {!! Html::style('css/panelSettings.css') !!}
        {!! Html::style('css/style.css') !!}
        @yield('css')
    </head>
    <body style="">
        <!--Panel Setting-->
        <!--Top Header-->
        <section class="top-header">
            <div class="container">
                <div class="col-xs-6 col-md-6 top-user">
                    <div class="user-name">
                       Phan Trong Phi
                    </div>
                </div>
                <div class="col-xs-6 col-md-6  mainmenu">
                    <nav>
                        <ul>
                            <li>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ trans('messages.language') }}
                                    </button>
                                    <div class="dropdown-menu " aria-labelledby="dropdownMenu2">
                                        <button class="dropdown-item btn btn-secondary dropdown-toggle" type="button">{{ trans('messages.en') }}</button>
                                        <br>
                                        <button class="dropdown-item btn btn-secondary dropdown-toggle" type="button">{{ trans('messages.vi') }}</button>
                                  </div>
                                </div>
                            </li>
                            <li>
                                <a href="#">{{ trans('messages.register') }}</a>
                            </li>
                            <li>
                                <a href="#">{{ trans('messages.login') }}</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        @include('layout.header')
        <!-- Page Content -->
        @yield('content')
        <!-- end Page Content -->

        <!-- Footer -->
        @include('layout.footer')
        <!--Menu-->
        {!! Html::script('js/jquery.min.js') !!}
        {!! Html::script('js/modernizr.2.5.3.min.js') !!}
        {!! Html::script('js/bootstrap.min.js') !!}
        <!--Mini Flexslide-->
        {!! Html::script('js/jquery.flexslider.js') !!}
        {!! Html::script('js/shCore.js') !!}
        {!! Html::script('js/shBrushXml.js') !!}
        {!! Html::script('js/shBrushJScript.js') !!}
        <!-- OwnCarousel -->
        {!! Html::script('js/owl.carousel.js') !!}
        {!! Html::script('js/jquery.mixitup.min.js') !!}
        {!! Html::script('js/turn.min.js') !!}
        <!-- Animation Text -->
        {!! Html::script('js/jquery.fittext.js') !!}
        {!! Html::script('js/jquery.lettering.js') !!}
        {!! Html::script('js/jquery.textillate.js') !!}
        <!-- General Script -->
        {!! Html::script('js/main.js') !!}
        @yield('script')
    </body>
</html>
