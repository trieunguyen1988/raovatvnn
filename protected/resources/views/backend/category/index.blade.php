@extends('backend.layouts.master')
@section('content')
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {!! trans('province.province') !!}
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {!! trans('common.lbl_home') !!}</a></li>
        <li class="active">{!! trans('province.province') !!}</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- right column -->
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">{!! trans('province.lbl_list') !!}</h3>
                    <a class="btn btn-primary btn-xs pull-right" href="{!! route('admin.province.getAdd') !!}"><i class="fa fa-fw fa-plus"></i>{!! trans('common.btn_add') !!}</a>
                </div><!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    @if (Session::has('flash_message_err'))
                        <div class="form-group alert alert-danger">
                            <label class="control-label" for="inputError"><i class="icon fa fa-warning"></i> {!! Session::get('flash_message_err') !!}</label>
                        </div>
                    @endif
                    @if (Session::has('flash_message_succ'))
                        <div class="form-group alert alert-success">
                            <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> {!! Session::get('flash_message_succ') !!}</label>
                        </div>
                    @endif
                    <table id="province-list" class="table table-bordered table-striped check-all">
                        <colgroup>
                            <col width="5%"></col>
                            <col width="36%"></col>
                            <col width="36%"></col>
                            <col width="18%"></col>
                        </colgroup>
                        <thead>
                        <tr>
                            <th align="center"><button class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button></th>
                            <th>{!! trans('province.lbl_name') !!}</th>
                            <th>{!! trans('country.lbl_name') !!}</th>
                            <th width="100"></th>
                        </tr>
                        </thead>
                        @if($provinces)
                            <tbody>
                            @foreach($provinces as $province)
                                <tr>
                                    <td align="center">
                                        <input type="checkbox" value="{!! $province->province_id !!}"/>
                                    </td>
                                    <td>{!! $province->province_name !!}</td>
                                    <td>{!! $province->country_name !!}</td>
                                    <td align="center">
                                        <a href="{!! route('admin.province.getEdit', Crypt::encrypt($province->province_id)) !!}">
                                            <button class="btn btn-success btn-xs"><i class="fa fa-fw fa-edit"></i>{!! trans('common.btn_edit') !!}</button>
                                        </a>
                                        <a href="{!! route('admin.province.getDelete', Crypt::encrypt($province->province_id)) !!}">
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-fw fa-remove"></i>{!! trans('common.btn_delete') !!}</button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        @endif
                    </table>
                    <div class="pull-right">{!! $provinces->render() !!}</div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!--/.col (right) -->
    </div>   <!-- /.row -->
</section><!-- /.content -->
@endsection
