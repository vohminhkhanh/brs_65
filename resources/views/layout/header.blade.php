<header>
    <div id="top" class="container box-logo-menu">
        <div class="row">
            <nav class="col-md-12 navigation-menu">
                <div class="col-md-3 content-logo">
                    <h2>{{ trans('messages.framgia') }}<span>{{ trans('messages.book') }}</span></h2>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false" aria-controls="nav-collapse1">
                        <span class="sr-only">{{ trans('messages.toggle_navigation') }}</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-8 mainmenu">
                    @include('layout.menu')
                </div>
                <!-- Top Cart -->
                <div class="col-md-1 box-shoppingCart">
                    <div class="list-product" auto-close="disabled">
                        <div class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">
                            {!! Html::image('image/active-search.png', '') !!}
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
