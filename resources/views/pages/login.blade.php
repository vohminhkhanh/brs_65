@extends('layout.index')
@section('content')
<section class="container">
    <div class="row">
        <div class="col-lg-12 table-padding">
            <div class="register-img-background pg-login"></div>
            <div id="loginbox" class="mainbox col-md-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">{{ trans('messages.login') }}</div>
                        <div class="forgot-pwd">
                            <button class="btn btn-primary">{{ trans('messages.forgot_password') }}</button>
                        </div>
                    </div>
                    <div class="panel-body">
                        {!! Form::open([ 'method' => 'POST', 'class' => 'form-horizontal regietr-form']) !!}
                            {!! Form::token(); !!}
                            <div class="input-group">
                                <span class="input-group-addon">
                                <i class="fa fa-envelope" aria-hidden="true"></i>   
                                </span>
                                {{ Form::text('email', '', array_merge(['class' => 'form-control', 'placeholder' => trans('messages.email') ])) }} 
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                                </span>
                                {{ Form::input('password', 'password', '', array_merge(['class' => 'form-control', 'placeholder' => trans('messages.password') ])) }} 
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
