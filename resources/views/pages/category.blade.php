@extends('layout.index')
@section('content')
<section class="pattern-1">
    <div class="container content-top-about">
        <div class="col-md-12 content-top-about">
            <div class="img-man">
                {!! Html::image('image/man.png', '') !!}
            </div>
            <div class="fadeInUp animated">
                {!! Html::image('image/top-book4.png', '') !!}
            </div>
        </div>
    </div>
</section>
<section class="container">
    <div class="row">
        <div class="col-md-12 table-padding">
            <div class="col-md-3 column-box form-search ">
                <div class="sw-search">
                    <div class="nav-search" id="nav-search">
                        <span class="input-icon">
                        <input placeholder="Filter list ..." class="nav-search-input" autocomplete="off" autofocus="" aria-invalid="false">
                        <i class="search-icon fa fa-search nav-search-icon"></i>
                        </span>
                    </div>
                </div>
                <!--FILTER CATEGORIES-->
                <div class="filter-table">
                    <h3>Categories</h3>
                    <div class="list-category-column">
                        <ul>
                            <li data-filter="all" class="filter active">
                                All (15)
                                <div class="line-separator"></div>
                                <div class="line-separator2"></div>
                            </li>
                            <li class="filter" data-filter=".category-Art">
                                Art (2)
                                <div class="line-separator"></div>
                                <div class="line-separator2"></div>
                            </li>
                            <li class="filter" data-filter=".category-Biography">
                                Biography (1)
                                <div class="line-separator"></div>
                                <div class="line-separator2"></div>
                            </li>
                            <li class="filter" data-filter=".category-Business">
                                Business (2)
                                <div class="line-separator"></div>
                                <div class="line-separator2"></div>
                            </li>
                            <li class="filter" data-filter=".category-Computing">
                                Computing (2)
                                <div class="line-separator"></div>
                                <div class="line-separator2"></div>
                            </li>
                            <li class="filter" data-filter=".category-Crime">
                                Crime (2)
                                <div class="line-separator"></div>
                                <div class="line-separator2"></div>
                            </li>
                            <li class="filter" data-filter=".category-Fiction">
                                Fiction (1)
                                <div class="line-separator"></div>
                                <div class="line-separator2"></div>
                            </li>
                            <li class="filter" data-filter=".category-Food">
                                Food (1)
                                <div class="line-separator"></div>
                                <div class="line-separator2"></div>
                            </li>
                            <li class="filter" data-filter=".category-Graphic">
                                Graphic (0)
                                <div class="line-separator"></div>
                                <div class="line-separator2"></div>
                            </li>
                            <li class="filter" data-filter=".category-Humour">
                                Humour (0)
                                <div class="line-separator"></div>
                                <div class="line-separator2"></div>
                            </li>
                            <li class="filter" data-filter=".category-Medical">
                                Medical (0)
                                <div class="line-separator"></div>
                                <div class="line-separator2"></div>
                            </li>
                            <li class="filter" data-filter=".category-Personal">
                                Personal (0)
                                <div class="line-separator"></div>
                                <div class="line-separator2"></div>
                            </li>
                            <li class="filter" data-filter=".category-Religion">
                                Religion (1)
                                <div class="line-separator"></div>
                                <div class="line-separator2"></div>
                            </li>
                            <li class="filter" data-filter=".category-Romance">
                                Romance (1)
                                <div class="line-separator"></div>
                                <div class="line-separator2"></div>
                            </li>
                            <li class="filter" data-filter=".category-Sport">
                                Sport (1)
                                <div class="line-separator"></div>
                                <div class="line-separator2"></div>
                            </li>
                            <li class="filter" data-filter=".category-Thriller">
                                Thriller (1)
                                <div class="line-separator"></div>
                                <div class="line-separator2"></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9 panel panel-info-full">
                <div class="panel-heading">
                    <div class="panel-title">
                        <div class="col-xs-6">
                            <h2>Books</h2>
                        </div>
                    </div>
                </div>
                <div id="dataMix" mix-it-up="" >
                    <div class="col-md-3 my-shop-animation mix category-Art" data-myorder="1" data-bound="">
                        <div class="box-prod group-book">
                            <div class="box-img-book">
                                <div class="book-cover-shadow"></div>
                                {!! Html::image('image/1.png', '') !!}
                                <div class="box-btn-shop">
                                    <div class="bt-img"><button type="button" class="btn btn-add-cart"><i class="fa fa-shopping-bag"></i></button></div>
                                    <div class="bt-img"><a class="btn btn-det-cart" href="#"><i class="fa fa-list"></i></a></div>
                                    <div class="bt-img"><button type="button" class="btn btn-det-cart"><i class="fa fa-heart"></i></button></div>
                                </div>
                            </div>
                            <h2 class="title-book">Divina Commedia</h2>
                            <p class="author-txt">Dante Alighieri</p>
                            <p class="category-txt">Art</p>
                        </div>
                    </div>
                    <div class="col-md-3 my-shop-animation mix category-Biography" data-myorder="2" data-bound="">
                        <div class="box-prod group-book">
                            <div class="box-img-book">
                                <div class="book-cover-shadow"></div>
                                {!! Html::image('image/2.png', '') !!}
                                <div class="box-btn-shop">
                                    <div class="bt-img"><button type="button" class="btn btn-add-cart"><i class="fa fa-shopping-bag"></i></button></div>
                                    <div class="bt-img"><a class="btn btn-det-cart" href="#"><i class="fa fa-list"></i></a></div>
                                    <div class="bt-img"><button type="button" class="btn btn-det-cart"><i class="fa fa-heart"></i></button></div>
                                </div>
                            </div>
                            <h2 class="title-book">Lovecraft</h2>
                            <p class="author-txt">H.P. Lovecraft</p>
                            <p class="category-txt">Biography</p>
                        </div>
                    </div>
                    <div class="col-md-3 my-shop-animation mix category-Business" data-myorder="3" data-bound="">
                        <div class="box-prod group-book">
                            <div class="box-img-book">
                                <div class="book-cover-shadow"></div>
                                {!! Html::image('image/3.png', '') !!}
                                <div class="box-btn-shop">
                                    <div class="bt-img"><button type="button" class="btn btn-add-cart"><i class="fa fa-shopping-bag"></i></button></div>
                                    <div class="bt-img"><a class="btn btn-det-cart" href="#"><i class="fa fa-list"></i></a></div>
                                    <div class="bt-img"><button type="button" class="btn btn-det-cart"><i class="fa fa-heart"></i></button></div>
                                </div>
                            </div>
                            <h2 class="title-book">The secret</h2>
                            <p class="author-txt">MaryLue</p>
                            <p class="category-txt">Business</p>
                        </div>
                    </div>
                    <div class="col-md-3 my-shop-animation mix category-Computing" data-myorder="4" data-bound="">
                        <div class="box-prod group-book">
                            <div class="box-img-book">
                                <div class="book-cover-shadow"></div>
                                {!! Html::image('image/4.png', '') !!}
                                <div class="box-btn-shop">
                                    <div class="bt-img"><button type="button" class="btn btn-add-cart"><i class="fa fa-shopping-bag"></i></button></div>
                                    <div class="bt-img"><a class="btn btn-det-cart" href="#"><i class="fa fa-list"></i></a></div>
                                    <div class="bt-img"><button type="button" class="btn btn-det-cart"><i class="fa fa-heart"></i></button></div>
                                </div>
                            </div>
                            <h2 class="title-book">The ship</h2>
                            <p class="author-txt">Berry Loo</p>
                            <p class="category-txt">Computing</p>
                        </div>
                    </div>
                    <div class="col-md-3 my-shop-animation mix category-Crime" data-myorder="5" data-bound="">
                        <div class="box-prod group-book">
                            <div class="box-img-book">
                                <div class="book-cover-shadow"></div>
                                {!! Html::image('image/5.png', '') !!}
                                <div class="box-btn-shop">
                                    <div class="bt-img"><button type="button" class="btn btn-add-cart"><i class="fa fa-shopping-bag"></i></button></div>
                                    <div class="bt-img"><a class="btn btn-det-cart" href="#"><i class="fa fa-list"></i></a></div>
                                    <div class="bt-img"><button type="button" class="btn btn-det-cart"><i class="fa fa-heart"></i></button></div>
                                </div>
                            </div>
                            <h2 class="title-book">Dory Say</h2>
                            <p class="author-txt">Berry Loo</p>
                            <p class="category-txt">Crime</p>
                        </div>
                    </div>
                    <div class="col-md-3 my-shop-animation mix category-Fiction" data-myorder="6" data-bound="">
                        <div class="box-prod group-book">
                            <div class="box-img-book">
                                <div class="book-cover-shadow"></div>
                                {!! Html::image('image/6.png', '') !!}
                                <div class="box-btn-shop">
                                    <div class="bt-img"><button type="button" class="btn btn-add-cart"><i class="fa fa-shopping-bag"></i></button></div>
                                    <div class="bt-img"><a class="btn btn-det-cart" href="#"><i class="fa fa-list"></i></a></div>
                                    <div class="bt-img"><button type="button" class="btn btn-det-cart"><i class="fa fa-heart"></i></button></div>
                                </div>
                            </div>
                            <h2 class="title-book">Miami</h2>
                            <p class="author-txt">Jonh Doe</p>
                            <p class="category-txt">Fiction</p>
                        </div>
                    </div>
                    <div class="col-md-3 my-shop-animation mix category-Food" data-myorder="7" data-bound="">
                        <div class="box-prod group-book">
                            <div class="box-img-book">
                                <div class="book-cover-shadow"></div>
                                {!! Html::image('image/7.png', '') !!}
                                <div class="box-btn-shop">
                                    <div class="bt-img"><button type="button" class="btn btn-add-cart"><i class="fa fa-shopping-bag"></i></button></div>
                                    <div class="bt-img"><a class="btn btn-det-cart" href="#"><i class="fa fa-list"></i></a></div>
                                    <div class="bt-img"><button type="button" class="btn btn-det-cart"><i class="fa fa-heart"></i></button></div>
                                </div>
                            </div>
                            <h2 class="title-book">My Day</h2>
                            <p class="author-txt">Soon Doe</p>
                            <p class="category-txt">Food</p>
                        </div>
                    </div>
                    <div class="col-md-3 my-shop-animation mix category-Art" data-myorder="8" data-bound="">
                        <div class="box-prod group-book">
                            <div class="box-img-book">
                                <div class="book-cover-shadow"></div>
                                {!! Html::image('image/8.png', '') !!}
                                <div class="box-btn-shop">
                                    <div class="bt-img"><button type="button" class="btn btn-add-cart"><i class="fa fa-shopping-bag"></i></button></div>
                                    <div class="bt-img"><a class="btn btn-det-cart" href="#"><i class="fa fa-list"></i></a></div>
                                    <div class="bt-img"><button type="button" class="btn btn-det-cart"><i class="fa fa-heart"></i></button></div>
                                </div>
                            </div>
                            <h2 class="title-book">Tyson</h2>
                            <p class="author-txt">Jonh Doe</p>
                            <p class="category-txt">Art</p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="more btn btn-primary btn-block" ng-click="loadMore()">Load More!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
