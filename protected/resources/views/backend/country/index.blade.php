@extends('backend.layouts.master')
@section('content')
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Quốc gia
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li class="active">Quốc gia</li>
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
                    <h3 class="box-title">{!! trans('country.lbl_list') !!}</h3>
                    <a class="btn btn-primary btn-xs pull-right" href="{!! route('admin.country.getAdd') !!}">Thêm
                        mới</a>
                </div><!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên quốc gia</th>
                            <th></th>
                        </tr>
                        </thead>
                        @if($countries)
                            <tbody>
                            @foreach($countries as $country)
                                <tr>
                                    <td>{!! $country->country_id !!}</td>
                                    <td>{!! $country->country_name !!}</td>
                                    <td></td>
                                </tr>
                            @endforeach
                            </tbody>
                        @endif
                    </table>
                    <div class="pull-right">{!! $countries->render() !!}</div>
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div><!--/.col (right) -->
    </div>   <!-- /.row -->
</section><!-- /.content -->
@endsection
