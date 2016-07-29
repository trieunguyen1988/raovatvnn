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
                    <a class="btn btn-primary btn-xs pull-right" href="{!! route('admin.country.getAdd') !!}"><i class="fa fa-fw fa-plus"></i>Thêm mới</a>
                </div><!-- /.box-header -->
                <!-- form start -->
                <div class="box-body no-padding">
                    <table id="country-list" class="table table-bordered table-striped check-all">
                        <colgroup>
                            <col width="5%"></col>
                            <col width="72%"></col>
                            <col width="18%"></col>
                        </colgroup>
                        <thead>
                        <tr>
                            <th align="center"><button class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button></th>
                            <th>Tên quốc gia</th>
                            <th width="100"></th>
                        </tr>
                        </thead>
                        @if($countries)
                            <tbody>
                            @foreach($countries as $country)
                                <tr>
                                    <td align="center">
                                        <input type="checkbox" value="{!! $country->country_id !!}"/>
                                    </td>
                                    <td>{!! $country->country_name !!}</td>
                                    <td align="center">
                                        <a href="{!! route('admin.country.getEdit', $country->country_id) !!}">
                                            <button class="btn btn-success btn-xs"><i class="fa fa-fw fa-edit"></i>Sửa</button>
                                        </a>
                                        <a href="{!! route('admin.country.getDelete', $country->country_id) !!}">
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-fw fa-remove"></i>Xóa</button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        @endif
                    </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">{!! $countries->render() !!}</div>
            </div><!-- /.box -->

        </div><!--/.col (right) -->
    </div>   <!-- /.row -->
</section><!-- /.content -->
@endsection
