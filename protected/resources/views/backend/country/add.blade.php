@extends('backend.layouts.master')
@section('content')
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Quốc gia
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="{!! route('admin.country.index') !!}"> Quốc gia</a></li>
        <li class="active">Thêm mới</li>
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
                    <h3 class="box-title">{!! trans('country.lbl_add') !!}</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="{!! route('admin.country.getAdd') !!}" method="post">
                    <div class="box-body">
                        @if (Session::has('flash_message'))
                            {!! Session::get('flash_message') !!}
                        @endif
                        <div class="form-group">
                            <label for="exampleInputEmail1">{!! trans('country.lbl_country_name') !!}</label>
                            <input type="text" class="form-control" id="country_name" name="country_name" placeholder=""
                                   value="{!! old('country_name') !!}">
                            @if ($errors->has('country_name'))
                                <div class="has-error">
                                    <label class="control-label" for="inputError"><i
                                                class="fa fa-times-circle-o"></i> {!! $errors->first('country_name') !!}
                                    </label>

                                    <div>
                                        @endif
                                    </div>
                                </div><!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">{!! trans('common.save') !!}</button>
                                    <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
                                </div>
                </form>
            </div><!-- /.box -->

        </div><!--/.col (left) -->
    </div>   <!-- /.row -->
</section><!-- /.content -->
@endsection
