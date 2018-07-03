<div class="collapse navbar-collapse" id="navbar-collapse-1">
    <ul class="menu-first-level">
        <li >
            <a href="#">{{ trans('messages.home_page') }}</a>
        </li>
        <li><a href="#">{{ trans('messages.about') }}</a></li>
        <li class="exp-mega">
            <a href="#">{{ trans('messages.categories') }}</a>
            <!-- Mega Menu Four Column -->
            <div class="mega-menu">
                <span>
                <a class="mega-title" href="#">{{ trans('messages.category') }}</a>
                <a href="#">{{ trans('messages.category_one') }}</a>
                <a href="#">{{ trans('messages.category_one') }}</a>
                <a href="#">{{ trans('messages.category_one') }}</a>
                <a href="#">{{ trans('messages.category_one') }}</a>
                </span>
                <span>
                <a class="mega-title" href="#">{{ trans('messages.category') }}</a>
                <a href="#">{{ trans('messages.category_one') }}</a>
                <a href="#">{{ trans('messages.category_one') }}</a>
                <a href="#">{{ trans('messages.category_one') }}</a>
                <a href="#">{{ trans('messages.category_one') }}</a>
                </span>
                <span>
                <a class="mega-title" href="#">{{ trans('messages.category') }}</a>
                <a href="#">{{ trans('messages.category_one') }}</a>
                <a href="#">{{ trans('messages.category_one') }}</a>
                <a href="#">{{ trans('messages.category_one') }}</a>
                <a href="#">{{ trans('messages.category_one') }}</a>
                </span>
                <span class="mega-menu-img">
                <a href="#">{!! Html::image('image/open-book.png', '') !!}</a>
                </span>
            </div>
        </li>
        <li><a href="#">{{ trans('messages.contact') }}</a></li>
    </ul>
</div>
