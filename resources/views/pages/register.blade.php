@extends('layout.index')
@section('content')
<section class="container">
    <div class="row">
        <div class="col-lg-12 table-padding">
            <div class="register-img-background"></div>
            <div id="loginbox" class="mainbox col-md-12 register-box">
                <div class="panel panel-info">
                    <div>
                        <h3>{{ trans('messages.new_account') }}</h3>
                    </div>
                    <div class="panel-heading">
                        <div class="panel-title">{{ trans('messages.register') }}</div>
                    </div>
                    <div  class="panel-body">
                        {!! Form::open([ 'method' => 'POST', 'class' => 'form-horizontal regietr-form']) !!}
                            {!! Form::token(); !!}
                            <div class="input-group">
                                <span class="input-group-addon">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                </span>
                                {{ Form::text('name', '', array_merge(['class' => 'form-control', 'placeholder' => trans('messages.name') ])) }}
                            </div>
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
                            <div class="input-group">
                                <span class="input-group-addon">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                                </span>
                                {{ Form::input('password', 'repassword', '', array_merge(['class' => 'form-control', 'placeholder' => trans('messages.repassword') ])) }} 
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                </span>
                                {{ Form::input('date', 'birtday','', array('class' => 'form-control', 'placeholder' => trans('messages.birthday'))) }} 
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    {!! Form::submit(trans('messages.add'), ['class' => 'btn btn-success login-btn']); !!}  
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
