@extends('layout.index')
@section('content')
<section>
    <div class="container">
        <div class="col-md-12 server-error">
            <h2>{{ trans('messages.404') }}</h2>
            {!! Html::image('image/book-draw.jpg', '') !!}
            <br><br>
            <p>{{ trans('messages.sorry') }}</p>
            <div class="text-home">
                <a href="#" class="btn-lg"><i class="fa fa-home"></i>{{ trans('messages.go_to_home') }}</a>
            </div>
        </div>
    </div>
</section>
@endsection
