@extends('backend.layouts.master')
@section('content')
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {!! trans('cate.lbl_cate') !!}
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {!! trans('common.lbl_home') !!}</a></li>
        <li><a href="{!! route('admin.category.index') !!}"> {!! trans('cate.lbl_cate') !!}</a></li>
        <li class="active">{!! trans('cate.lbl_add') !!}</li>
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
                    <h3 class="box-title">{!! trans('cate.lbl_add') !!}</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form action="{!! route('admin.category.getAdd') !!}" method="post">
                    <div class="box-body">
                        @if (Session::has('flash_message'))
                            {!! Session::get('flash_message') !!}
                        @endif
                        <div class="form-group">
                            <label for="parent_id">{!! trans('cate.lbl_parent_cate') !!}</label>
                            <select class="form-control" id="parent_id" name="parent_id">
                                <option value="">{!! trans('common.lbl_pls_select') !!}</option>
                            </select>
                            @if ($errors->has('parent_id'))
                                <div class="has-error">
                                    <label class="control-label" for="inputError">
                                        <i class="fa fa-times-circle-o"></i> {!! $errors->first('parent_id') !!}
                                    </label>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="category_name">{!! trans('cate.lbl_name') !!}</label>
                            <input type="text" class="form-control" id="category_name" name="category_name"
                                   placeholder="" value="{!! old('category_name') !!}"/>
                            @if ($errors->has('category_name'))
                                <div class="has-error">
                                    <label class="control-label" for="inputError">
                                        <i class="fa fa-times-circle-o"></i> {!! $errors->first('category_name') !!}
                                    </label>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="published">{!! trans('common.lbl_published') !!}</label>
                            <input type="checkbox" class="form-control" id="published" name="published" value="1" checked data-size="mini"/>
                        </div>
                        <!-- /.box-body -->

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
<script type="text/javascript">
    $("#published").bootstrapSwitch();
</script>
@endsection
