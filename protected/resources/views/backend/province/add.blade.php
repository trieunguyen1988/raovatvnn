@extends('backend.layouts.master')
@section('content')
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {!! trans('province.province') !!}
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {!! trans('common.lbl_home') !!}</a></li>
        <li><a href="{!! route('admin.province.index') !!}"> {!! trans('province.province') !!}</a></li>
        <li class="active">{!! trans('province.lbl_add') !!}</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{!! trans('province.lbl_add') !!}</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="{!! route('admin.province.getAdd') !!}" method="post">
                    <div class="box-body">
                        @if (Session::has('flash_message'))
                            {!! Session::get('flash_message') !!}
                        @endif
                        <div class="form-group">
                            <label for="country_id">{!! trans('country.lbl_name') !!}</label>
                            <select class="form-control" id="country_id" name="country_id">
                                <option value="">{!! trans('common.lbl_pls_select') !!}</option>
                                @if ($countries)
                                    @foreach ($countries as $country)
                                    <option value="{!! $country->country_id !!}" @if (old('country_id') == $country->country_id) selected="selected" @endif>{!! $country->country_name !!}</option>
                                    @endforeach
                                @endif
                            </select>                            
                            @if ($errors->has('country_id'))
                                <div class="has-error">
                                    <label class="control-label" for="inputError">
                                        <i class="fa fa-times-circle-o"></i> {!! $errors->first('country_id') !!}
                                    </label>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="province_name">{!! trans('province.lbl_name') !!}</label>
                            <input type="text" class="form-control" id="province_name" name="province_name" placeholder="" value="{!! old('province_name') !!}"/>
                            @if ($errors->has('province_name'))
                                <div class="has-error">
                                    <label class="control-label" for="inputError">
                                        <i class="fa fa-times-circle-o"></i> {!! $errors->first('province_name') !!}
                                    </label>
                                </div>
                            @endif
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">{!! trans('common.btn_save') !!}</button>
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                        </div>
                    </div>
                </form>
            </div><!-- /.box -->

        </div><!--/.col (left) -->
    </div>   <!-- /.row -->
</section><!-- /.content -->
@endsection
