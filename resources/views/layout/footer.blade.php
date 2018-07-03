<section id="footer" class="ftr-2">
    <div class="container footer2">
        <div class="row">
            <div class="col-md-12 footer-title">
                <h2><span>{{ trans('messages.framgia') }}</span>{{ trans('messages.book') }}</h2>
            </div>
            <div class="col-md-12">
                <div class="col-md-4 footer-zone footer-about">
                    <h3>{{ trans('messages.about_us') }}</h3>
                    <p>{{ trans('messages.excepteur_about_us') }}</p>
                    <div class="socialfooter">
                        <a href="##"><i class="fa fa-facebook"></i></a>
                        <a href="##"><i class="fa fa-dribbble"></i></a>
                        <a href="##"><i class="fa fa-twitter"></i></a>
                        <a href="##"><i class="fa fa-instagram"></i></a>
                        <a href="##"><i class="fa fa-google"></i></a>
                    </div>
                </div>
                <div class="col-md-4 footer-zone footer-about">
                    <h3>{{ trans('messages.contact') }}</h3>
                    <p><i class="fa fa-map-marker"></i>{{ trans('messages.address') }}</p>
                    <p><i class="fa fa-phone"></i>{{ trans('messages.phone') }}</p>
                    <p><i class="fa fa-envelope-o"></i>{{ trans('messages.mail') }}</p>
                    <p><i class="fa fa-globe"></i>{{ trans('messages.recruit') }}</p>
                </div>
                <div class="col-md-4 box-tags footer-about">
                    <p><i class="fa fa-headphones" aria-hidden="true"></i></p>
                    <h3>{{ trans('messages.phone') }}</h3>
                </div>
                <div class="footer-map">{!! Html::image('image/map.png', 'map') !!}</div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-xs-12 copyright">{{ trans('messages.copyright_your_website_2018') }}</div>
                </div>
            </div>
        </div>
    </div>
</section>
