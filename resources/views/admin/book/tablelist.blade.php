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
            <div class="card-header">
                <i class="fa fa-table"></i>{{ trans('messages.category') }}
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable">
                        <thead>
                            <tr>
                                <th>{{ trans('messages.name') }}</th>
                                <th>{{ trans('messages.name') }}</th>
                                <th>{{ trans('messages.name') }}</th>
                                <th>{{ trans('messages.name') }}</th>
                                <th>{{ trans('messages.name') }}</th>
                                <th>{{ trans('messages.name') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
