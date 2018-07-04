@extends('admin.layout.index')
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">{{ trans('messages.dashboard') }}</a>
            </li>
            <li class="breadcrumb-item active">{{ trans('messages.tables') }}</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-body">
                <div class="table-responsive">
                    {!! Form::open(['method' => 'POST', 'class' => 'form-horizontal']) !!}
                        {!! Form::token(); !!}
                        <div class="form-group">
                            {!! Form::label('email', trans('messages.email'), ['class' => 'col-sm-3 control-label']); !!}  
                            <div class="col-sm-6">
                                {{ Form::text('email', '', array_merge(['class' => 'form-control', 'placeholder' => trans('messages.email') ])) }}
                            </div> 
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                {!! Form::submit(trans('messages.add'), ['class' => 'btn btn-default']); !!}  
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
