@extends('layout.index')
@section('content')
<!--TOP SERVICES-->
<div class="container-fluid">
    <div class="row">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    {!! Html::image('image/la.jpg', '') !!}
                </div>
                <div class="item">
                    {!! Html::image('image/chicago.jpg', '') !!}
                </div>
                <div class="item">
                    {!! Html::image('image/ny.jpg', '') !!}
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <i class="fa fa-angle-double-left glyphicon-chevron-right" aria-hidden="true"></i>
            <span class="sr-only">{{ trans('messages.previous') }}</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <i class="fa fa-angle-double-right glyphicon-chevron-right" aria-hidden="true"></i>
            <span class="sr-only">{{ trans('messages.next') }}</span>
            </a>
        </div>
    </div>
</div>
<!--FEATURED PRODUCTS-->
<section class="container">
    <div class="row">
        <div class="col-lg-12 text-center shop-title-store">
            <h1 class="section-title">{{ trans('messages.library') }} <span>{{ trans('messages.book') }}</span></h1>
            <p class="sub-title">{{ trans('messages.excepteur') }}</p>
        </div>
        <div class="col-lg-12 content-store">
            <div class="">
                <div class="col-md-2 my-shop-animation">
                    <div class="box-prod group-book">
                        <div class="box-img-book">
                            <div class="book-cover-shadow"></div>
                            {!! Html::image('image/1.png', '') !!}
                            <div class="box-btn-shop">
                                <div class="bt-img"><button type="button" class="btn btn-add-cart"><i class="fa fa-shopping-bag"></i></button></div>
                                <div class="bt-img"><a class="btn btn-det-cart" href="##/products/1"><i class="fa fa-list"></i></a></div>
                                <div class="bt-img"><button type="button" class="btn btn-det-cart"><i class="fa fa-heart"></i></button></div>
                            </div>
                        </div>
                        <h2 class="title-book">Divina Commedia</h2>
                        <p class="author-txt">Dante Alighieri</p>
                        <p class="category-txt">Art</p>
                    </div>
                </div>
                <div class="col-md-2 my-shop-animation">
                    <div class="box-prod group-book">
                        <div class="box-img-book">
                            <div class="book-cover-shadow"></div>
                            {!! Html::image('image/2.png', '') !!}
                            <div class="box-btn-shop">
                                <div class="bt-img"><button type="button" class="btn btn-add-cart"><i class="fa fa-shopping-bag"></i></button></div>
                                <div class="bt-img"><a class="btn btn-det-cart" href="##/products/2"><i class="fa fa-list"></i></a></div>
                                <div class="bt-img"><button type="button" class="btn btn-det-cart"><i class="fa fa-heart"></i></button></div>
                            </div>
                        </div>
                        <h2 class="title-book">Lovecraft</h2>
                        <p class="author-txt">H.P. Lovecraft</p>
                        <p class="category-txt">Biography</p>
                    </div>
                </div>
                <div class="col-md-2 my-shop-animation">
                    <div class="box-prod group-book">
                        <div class="box-img-book">
                            <div class="book-cover-shadow"></div>
                            {!! Html::image('image/3.png', '') !!}
                            <div class="box-btn-shop">
                                <div class="bt-img"><button type="button" class="btn btn-add-cart" tabindex="0"><i class="fa fa-shopping-bag"></i></button></div>
                                <div class="bt-img"><a class="btn btn-det-cart" href="##/products/3"><i class="fa fa-list"></i></a></div>
                                <div class="bt-img"><button type="button" class="btn btn-det-cart"><i class="fa fa-heart"></i></button></div>
                            </div>
                        </div>
                        <h2 class="title-book">The secret</h2>
                        <p class="author-txt">MaryLue</p>
                        <p class="category-txt">Business</p>
                    </div>
                </div>
                <div class="col-md-2 my-shop-animation">
                    <div class="box-prod group-book">
                        <div class="box-img-book">
                            <div class="book-cover-shadow"></div>
                            {!! Html::image('image/4.png', '') !!}
                            <div class="box-btn-shop">
                                <div class="bt-img"><button type="button" class="btn btn-add-cart"><i class="fa fa-shopping-bag"></i></button></div>
                                <div class="bt-img"><a class="btn btn-det-cart" href="##/products/4"><i class="fa fa-list"></i></a></div>
                                <div class="bt-img"><button type="button" class="btn btn-det-cart"><i class="fa fa-heart"></i></button></div>
                            </div>
                        </div>
                        <h2 class="title-book">The ship</h2>
                        <p class="author-txt">Berry Loo</p>
                        <p class="category-txt">Computing</p>
                    </div>
                </div>
                <div class="col-md-2 my-shop-animation">
                    <div class="box-prod group-book">
                        <div class="box-img-book">
                            <div class="book-cover-shadow"></div>
                            {!! Html::image('image/5.png', '') !!}
                            <div class="box-btn-shop">
                                <div class="bt-img"><button type="button" class="btn btn-add-cart"><i class="fa fa-shopping-bag"></i></button></div>
                                <div class="bt-img"><a class="btn btn-det-cart" href="##/products/5"><i class="fa fa-list"></i></a></div>
                                <div class="bt-img"><button type="button" class="btn btn-det-cart"><i class="fa fa-heart"></i></button></div>
                            </div>
                        </div>
                        <h2 class="title-book">Dory Say</h2>
                        <p class="author-txt">Berry Loo</p>
                        <p class="category-txt">Crime</p>
                    </div>
                </div>
                <div class="col-md-2 my-shop-animation">
                    <div class="box-prod group-book">
                        <div class="box-img-book">
                            <div class="book-cover-shadow"></div>
                            {!! Html::image('image/6.png', '') !!}
                            <div class="box-btn-shop">
                                <div class="bt-img"><button type="button" class="btn btn-add-cart"><i class="fa fa-shopping-bag"></i></button></div>
                                <div class="bt-img"><a class="btn btn-det-cart" href="##/products/6"><i class="fa fa-list"></i></a></div>
                                <div class="bt-img"><button type="button" class="btn btn-det-cart"><i class="fa fa-heart"></i></button></div>
                            </div>
                        </div>
                        <h2 class="title-book">Miami</h2>
                        <p class="author-txt">Jonh Doe</p>
                        <p class="category-txt">Fiction</p>
                    </div>
                </div>
                <div class="col-md-2 my-shop-animation">
                    <div class="box-prod group-book">
                        <div class="box-img-book">
                            <div class="book-cover-shadow"></div>
                            {!! Html::image('image/7.png', '') !!}
                            <div class="box-btn-shop">
                                <div class="bt-img"><button type="button" class="btn btn-add-cart"><i class="fa fa-shopping-bag"></i></button></div>
                                <div class="bt-img"><a class="btn btn-det-cart" href="##/products/7"><i class="fa fa-list"></i></a></div>
                                <div class="bt-img"><button type="button" class="btn btn-det-cart"><i class="fa fa-heart"></i></button></div>
                            </div>
                        </div>
                        <h2 class="title-book">My Day</h2>
                        <p class="author-txt">Soon Doe</p>
                        <p class="category-txt">Food</p>
                    </div>
                </div>
                <div class="col-md-2 my-shop-animation">
                    <div class="box-prod group-book">
                        <div class="box-img-book">
                            <div class="book-cover-shadow"></div>
                            {!! Html::image('image/8.png', '') !!}
                            <div class="box-btn-shop">
                                <div class="bt-img"><button type="button" class="btn btn-add-cart"><i class="fa fa-shopping-bag"></i></button></div>
                                <div class="bt-img"><a class="btn btn-det-cart" href="##/products/8"><i class="fa fa-list"></i></a></div>
                                <div class="bt-img"><button type="button" class="btn btn-det-cart"><i class="fa fa-heart"></i></button></div>
                            </div>
                        </div>
                        <h2 class="title-book">Tyson</h2>
                        <p class="author-txt">Jonh Doe</p>
                        <p class="category-txt">Art</p>
                    </div>
                </div>
                <div class="col-md-2 my-shop-animation">
                    <div class="box-prod group-book">
                        <div class="box-img-book">
                            <div class="book-cover-shadow"></div>
                            {!! Html::image('image/9.png', '') !!}
                            <div class="box-btn-shop">
                                <div class="bt-img"><button type="button" class="btn btn-add-cart"><i class="fa fa-shopping-bag"></i></button></div>
                                <div class="bt-img"><a class="btn btn-det-cart" href="##/products/9"><i class="fa fa-list"></i></a></div>
                                <div class="bt-img"><button type="button" class="btn btn-det-cart"><i class="fa fa-heart"></i></button></div>
                            </div>
                        </div>
                        <h2 class="title-book">Miami</h2>
                        <p class="author-txt">Jonh Doe</p>
                        <p class="category-txt">Business</p>
                    </div>
                </div>
                <div class="col-md-2 my-shop-animation">
                    <div class="box-prod group-book">
                        <div class="box-img-book">
                            <div class="book-cover-shadow"></div>
                            {!! Html::image('image/10.png', '') !!}
                            <div class="box-btn-shop">
                                <div class="bt-img"><button type="button" class="btn btn-add-cart"><i class="fa fa-shopping-bag"></i></button></div>
                                <div class="bt-img"><a class="btn btn-det-cart" href="##/products/10"><i class="fa fa-list"></i></a></div>
                                <div class="bt-img"><button type="button" class="btn btn-det-cart"><i class="fa fa-heart"></i></button></div>
                            </div>
                        </div>
                        <h2 class="title-book">Mrs. Johns</h2>
                        <p class="author-txt">Jonh Doe</p>
                        <p class="category-txt">Crime</p>
                    </div>
                </div>
                <div class="col-md-2 my-shop-animation">
                    <div class="box-prod group-book">
                        <div class="box-img-book">
                            <div class="book-cover-shadow"></div>
                            {!! Html::image('image/11.png', '') !!}
                            <div class="box-btn-shop">
                                <div class="bt-img"><button type="button" class="btn btn-add-cart"><i class="fa fa-shopping-bag"></i></button></div>
                                <div class="bt-img"><a class="btn btn-det-cart" href="##/products/11"><i class="fa fa-list"></i></a></div>
                                <div class="bt-img"><button type="button" class="btn btn-det-cart"><i class="fa fa-heart"></i></button></div>
                            </div>
                        </div>
                        <h2 class="title-book">Miami</h2>
                        <p class="author-txt">Jonh Doe</p>
                        <p class="category-txt">Religion</p>
                    </div>
                </div>
                <div class="col-md-2 my-shop-animation">
                    <div class="box-prod group-book">
                        <div class="box-img-book">
                            <div class="book-cover-shadow"></div>
                            {!! Html::image('image/12.png', '') !!}
                            <div class="box-btn-shop">
                                <div class="bt-img"><button type="button" class="btn btn-add-cart"><i class="fa fa-shopping-bag"></i></button></div>
                                <div class="bt-img"><a class="btn btn-det-cart" href="##/products/12"><i class="fa fa-list"></i></a></div>
                                <div class="bt-img"><button type="button" class="btn btn-det-cart"><i class="fa fa-heart"></i></button></div>
                            </div>
                        </div>
                        <h2 class="title-book">Rock</h2>
                        <p class="author-txt">Jonh Doe</p>
                        <p class="category-txt">Romance</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--AUTHOR BOOK-->
<section class="home5 exlusive-book-option2">
    <div class="vertical-author-name">
        <h2>Gordon</h2>
    </div>
    <div class="container ">
        <div class="col-md-12 magazine-product">
            <div class="circle-discount">
                <h2>#</h2>
            </div>
            <div class="col-md-6 img-author">
                <div class="info-magazine-mockup">
                    {!! Html::image('image/team2.jpg', '', array('class' => 'img-team-author')) !!}
                    {!! Html::image('image/magazine-mockup2.png', '') !!}
                </div>
            </div>
            <div class="col-md-6 experience-magazine">
                <div class="txt-exp">
                    <p class="mag-white">1° Magazine</p>
                </div>
                <div class="magazine-desc">
                    <p><span>Author: </span>Gordon Smith</p>
                    <p><span>Publisher: </span>William editor</p>
                    <p><span>Description: </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae massa et augue pharetra facilisis. Ut ac lacinia dolor.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--BEST SELLERS-->
<section class="container">
    <div class="row">
        <div class="col-lg-12 text-center shop-title-store">
            <h1 class="section-title">{{ trans('messages.favorite_books') }}</h1>
            <p class="sub-title">{{ trans('messages.excepteur_favourite') }}</p>
        </div>
        <div class="col-lg-12 content-store">
            <div class="list-product">
                <div class="col-md-2 my-shop-animation">
                    <div class="box-prod">
                        <div class="box-img-book">
                            <div class="book-cover-shadow"></div>
                            {!! Html::image('image/1.png', '') !!}
                            <div class="box-btn-shop">
                                <div class="bt-img"><button type="button" class="btn btn-add-cart"><i class="fa fa-shopping-bag"></i></button></div>
                                <div class="bt-img"><a class="btn btn-det-cart" href="##/products/1"><i class="fa fa-list"></i></a></div>
                                <div class="bt-img"><button type="button" class="btn btn-det-cart"><i class="fa fa-heart"></i></button></div>
                            </div>
                        </div>
                        <h2 class="title-book">Divina Commedia</h2>
                        <p class="author-txt">Dante Alighieri</p>
                        <p class="author-txt">Art</p>
                    </div>
                </div>
                <div class="col-md-2 my-shop-animation">
                    <div class="box-prod">
                        <div class="box-img-book">
                            <div class="book-cover-shadow"></div>
                            {!! Html::image('image/3.png', '') !!}
                            <div class="box-btn-shop">
                                <div class="bt-img"><button type="button" class="btn btn-add-cart"><i class="fa fa-shopping-bag"></i></button></div>
                                <div class="bt-img"><a class="btn btn-det-cart" href="##/products/3"><i class="fa fa-list"></i></a></div>
                                <div class="bt-img"><button type="button" class="btn btn-det-cart"><i class="fa fa-heart"></i></button></div>
                            </div>
                        </div>
                        <h2 class="title-book">The secret</h2>
                        <p class="author-txt">MaryLue</p>
                        <p class="author-txt">Business</p>
                    </div>
                </div>
                <div class="col-md-2 my-shop-animation">
                    <div class="box-prod">
                        <div class="box-img-book">
                            <div class="book-cover-shadow"></div>
                            {!! Html::image('image/5.png', '') !!}
                            <div class="box-btn-shop">
                                <div class="bt-img"><button type="button" class="btn btn-add-cart"><i class="fa fa-shopping-bag"></i></button></div>
                                <div class="bt-img"><a class="btn btn-det-cart" href="##/products/5"><i class="fa fa-list"></i></a></div>
                                <div class="bt-img"><button type="button" class="btn btn-det-cart"><i class="fa fa-heart"></i></button></div>
                            </div>
                        </div>
                        <h2 class="title-book">Dory Say</h2>
                        <p class="author-txt">Berry Loo</p>
                        <p class="author-txt">Crime</p>
                    </div>
                </div>
                <div class="col-md-2 my-shop-animation">
                    <div class="box-prod">
                        <div class="box-img-book">
                            <div class="book-cover-shadow"></div>
                            {!! Html::image('image/8.png', '') !!}
                            <div class="box-btn-shop">
                                <div class="bt-img"><button type="button" class="btn btn-add-cart"><i class="fa fa-shopping-bag"></i></button></div>
                                <div class="bt-img"><a class="btn btn-det-cart" href="##/products/8"><i class="fa fa-list"></i></a></div>
                                <div class="bt-img"><button type="button" class="btn btn-det-cart"><i class="fa fa-heart"></i></button></div>
                            </div>
                        </div>
                        <h2 class="title-book">Tyson</h2>
                        <p class="author-txt">Jonh Doe</p>
                        <p class="author-txt">Art</p>
                    </div>
                </div>
                <div class="col-md-2 my-shop-animation">
                    <div class="box-prod">
                        <div class="box-img-book">
                            <div class="book-cover-shadow"></div>
                            {!! Html::image('image/9.png', '') !!}
                            <div class="box-btn-shop">
                                <div class="bt-img"><button type="button" class="btn btn-add-cart"><i class="fa fa-shopping-bag"></i></button></div>
                                <div class="bt-img"><a class="btn btn-det-cart" href="##/products/9"><i class="fa fa-list"></i></a></div>
                                <div class="bt-img"><button type="button" class="btn btn-det-cart"><i class="fa fa-heart"></i></button></div>
                            </div>
                        </div>
                        <h2 class="title-book">Miami</h2>
                        <p class="author-txt">Jonh Doe</p>
                        <p class="author-txt">Business</p>
                    </div>
                </div>
                <div class="col-md-2 my-shop-animation">
                    <div class="box-prod">
                        <div class="box-img-book">
                            <div class="book-cover-shadow"></div>
                            {!! Html::image('image/12.png', '') !!}
                            <div class="box-btn-shop">
                                <div class="bt-img"><button type="button" class="btn btn-add-cart"><i class="fa fa-shopping-bag"></i></button></div>
                                <div class="bt-img"><a class="btn btn-det-cart" href="##/products/12"><i class="fa fa-list"></i></a></div>
                                <div class="bt-img"><button type="button" class="btn btn-det-cart"><i class="fa fa-heart"></i></button></div>
                            </div>
                        </div>
                        <h2 class="title-book">Rock</h2>
                        <p class="author-txt">Jonh Doe</p>
                        <p class="author-txt">Romance</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="header-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 content-header-footer">
                <div class="col-md-4">
                    <h3>{{ trans('messages.high_rank') }}</h3>
                    <ul>
                        <li>
                            <div class="col-md-3">{!! Html::image('image/1.png', '') !!}</div>
                            <div class="col-md-9">
                                <h2 class="title-book">Divina Commedia</h2>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-3">{!! Html::image('image/4.png', '') !!}</div>
                            <div class="col-md-9">
                                <h2 class="title-book">The ship</h2>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-3">{!! Html::image('image/6.png', '') !!}</div>
                            <div class="col-md-9">
                                <h2 class="title-book">Miami</h2>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>{{ trans('messages.multiple_rating') }}</h3>
                    <ul>
                        <li>
                            <div class="col-md-3">{!! Html::image('image/2.png', '') !!}</div>
                            <div class="col-md-9">
                                <h2 class="title-book">Lovecraft</h2>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-3">{!! Html::image('image/4.png', '') !!}</div>
                            <div class="col-md-9">
                                <h2 class="title-book">The ship</h2>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-3">{!! Html::image('image/7.png', '') !!}</div>
                            <div class="col-md-9">
                                <h2 class="title-book">My Day</h2>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>{{ trans('messages.maybe_you_like') }}</h3>
                    <ul>
                        <li>
                            <div class="col-md-3">{!! Html::image('image/3.png', '') !!}</div>
                            <div class="col-md-9">
                                <h2 class="title-book">The secret</h2>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-3">{!! Html::image('image/4.png', '') !!}</div>
                            <div class="col-md-9">
                                <h2 class="title-book">The ship</h2>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-3">{!! Html::image('image/8.png', '') !!}</div>
                            <div class="col-md-9">
                                <h2 class="title-book">Tyson</h2>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
