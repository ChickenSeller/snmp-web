@extends('framework')

@section('content')
    <section class="content-header">
        <h1>
            AC列表
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">AC列表</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">AC列表</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>设备IP</th>
                                <th>设备物理地址</th>
                                <th>设备型号</th>
                                <th>设备位置</th>
                                <th>母设备IP</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($value['data'] as $line)
                            <tr>
                                <td>{{$line['id']}}</td>
                                <td>{{$line['ip']}}</td>
                                <td>{{$line['bssid']}}</td>
                                <td>{{$line['model_name']}}</td>
                                <td>{{$line['location']}}</td>
                                <td>{{$line['master_ip']}}</td>
                                <td><a href="/ac-detail/{{$line['id']}}">详细信息</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>设备IP</th>
                                <th>设备MAC地址</th>
                                <th>设备型号</th>
                                <th>设备位置</th>
                                <th>母设备IP</th>
                                <th>操作</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@stop