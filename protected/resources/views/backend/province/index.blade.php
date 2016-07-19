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
                <div class="box-body">
                    <table id="country-list" class="table table-bordered table-striped">
                        <colgroup>
                            <col width="10%"></col>
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
                                        <button class="btn btn-success btn-xs"><i class="fa fa-fw fa-edit"></i>Sửa</button>
                                        <a href="{!! route('admin.country.getDelete', $country->country_id) !!}">
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-fw fa-remove"></i>Xóa</button>
                                        </a>
                                    </td>
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
<script>
    $(function () {
        //Enable iCheck plugin for checkboxes
        //iCheck for checkbox and radio inputs
        $('#country-list input[type="checkbox"]').iCheck({
            checkboxClass: 'icheckbox_flat-blue',
            radioClass: 'iradio_flat-blue'
        });

        //Enable check and uncheck all functionality
        $(".checkbox-toggle").click(function () {
            var clicks = $(this).data('clicks');
            if (clicks) {
                //Uncheck all checkboxes
                $("#country-list input[type='checkbox']").iCheck("uncheck");
                $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
            } else {
                //Check all checkboxes
                $("#country-list input[type='checkbox']").iCheck("check");
                $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
            }
            $(this).data("clicks", !clicks);
        });
    });
</script>
@endsection
