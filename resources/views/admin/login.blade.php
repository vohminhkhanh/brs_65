@extends('admin.layoutlogin.index')
@section('content')
<div class="container">
    <div class="row text-center">
        <div class="col-md-4 col-md-offset-4 mx-auto pt-5 mt-5">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ trans('messages.login') }}</h3>
                </div>
                <div class="panel-body">
                    {!! Form::open(['method' => 'POST', 'class' => 'form-horizontal']) !!}
                        {!! Form::token(); !!}
                        <fieldset>
                            <div class="form-group">
                                {{ Form::text('email', '', array_merge(['class' => 'form-control', 'placeholder' => trans('messages.email')])) }}
                            </div>
                            <div class="form-group">
                                {{ Form::input('password', 'password', '', array_merge(['class' => 'form-control', 'placeholder' => trans('messages.password') ])) }}
                            </div>
                            <button type="submit" class="btn btn-lg btn-success btn-block">{{ trans('messages.add') }}</button>
                        </fieldset>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
