@extends('layout.index')
@section('content')
<section class="pattern-1">
    <div class="container content-top-about">
        <div class="col-md-12 content-top-about">
            <div class="img-man">
                {!! Html::image('image/man.png', '') !!}
            </div>
            <div class="fadeInUp animated">
                {!! Html::image('image/top-book5.png', '') !!}
            </div>
        </div>
    </div>
</section>
<section class="container page-details-product">
    <div class="row">
        <div class="col-md-12 table-padding">
            <div class="panel panel-info-full">
                <div class="list-product">
                    <div class="col-md-3 my-shop-animation">
                        <div class="box-prod">
                            <div class="box-img-book">
                                {!! Html::image('image/1.png', '') !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 box-desc-detail">
                        <h2 class="title-product">Divina Commedia</h2>
                        <p>Productivity concept from motivation and book setting to focus and decision making thatexplain why pay people and companies get so much done.</p>
                        <p class="author-txt"><span>{{ trans('messages.author') }}: </span>Dante Alighieri</p>
                        <p class="cat-txt"><span>{{ trans('messages.category') }}: </span>Art</p>
                        <div class="box-btn-shop">
                            <div class="bt-img"><button type="button" class="btn btn-add-cart"><i class="fa fa-book" aria-hidden="true"></i>{{ trans('messages.read') }}</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 service-banner">
                    <div class="slider">
                        <div id="slider" class="flexslider .flexslider-attachments">
                            <div class="flex-viewport">
                            </div>
                            <div class="flex-viewport" >
                                <ul class="slides" >
                                    <li class="clone" aria-hidden="true">
                                        <div class="col-md-8 product-items-details">
                                            <h3>Samsung</h3>
                                            <a href="#">Smartphone - Accessories </a>
                                            <div class="product-item-des">
                                                Launch Tach Ltd Specialzes in car
                                                diagnostics and tessting tools that are mobile- friendly and superior in quality.
                                            </div>
                                            <a class="btn" href="#"><span>Shop Brand Now </span></a>
                                        </div>
                                        <div class="col-md-4">{!! Html::image('image/3.png', '') !!}</div>
                                    </li>
                                    <li >
                                        <div class="col-md-8 product-items-details">
                                            <h3>Samsung</h3>
                                            <a href="#">Smartphone - Accessories </a>
                                            <div class="product-item-des">
                                                Launch Tach Ltd Specialzes in car
                                                diagnostics and tessting tools that are mobile- friendly and superior in quality.
                                            </div>
                                            <a class="btn" href="#"><span>Shop Brand Now </span></a>
                                        </div>
                                        <div class="col-md-4">{!! Html::image('image/1.png', '') !!}</div>
                                    </li>
                                    <li >
                                        <div class="col-md-8 product-items-details">
                                            <h3>Samsung</h3>
                                            <a href="#">Smartphone - Accessories </a>
                                            <div class="product-item-des">
                                                Launch Tach Ltd Specialzes in car
                                                diagnostics and tessting tools that are mobile- friendly and superior in quality.
                                            </div>
                                            <a class="btn" href="#"><span>Shop Brand Now </span></a>
                                        </div>
                                        <div class="col-md-4">{!! Html::image('image/2.png', '') !!}</div>
                                    </li>
                                    <li >
                                        <div class="col-md-8 product-items-details">
                                            <h3>Samsung</h3>
                                            <a href="#">Smartphone - Accessories </a>
                                            <div class="product-item-des">
                                                Launch Tach Ltd Specialzes in car
                                                diagnostics and tessting tools that are mobile- friendly and superior in quality.
                                            </div>
                                            <a class="btn" href="#"><span>Shop Brand Now </span></a>
                                        </div>
                                        <div class="col-md-4">{!! Html::image('image/3.png', '') !!}</div>
                                    </li>
                                    <li >
                                        <div class="col-md-8 product-items-details">
                                            <h3>Samsung</h3>
                                            <a href="#">Smartphone - Accessories </a>
                                            <div class="product-item-des">
                                                Launch Tach Ltd Specialzes in car
                                                diagnostics and tessting tools that are mobile- friendly and superior in quality.
                                            </div>
                                            <a class="btn" href="#"><span>Shop Brand Now </span></a>
                                        </div>
                                        <div class="col-md-4">{!! Html::image('image/1.png', '') !!}</div>
                                    </li>
                                </ul>
                            </div>
                            <ul class="flex-direction-nav">
                                <li><a class="flex-prev" href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li><a class="flex-next" href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
{!! Html::script('js/detail.js') !!}
@endsection
