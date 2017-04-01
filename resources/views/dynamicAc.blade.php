@extends('framework');
@section('content');
    <section class="content-header">
    <h1>
        AC详情
    </h1>
    <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">AC详情</li>
    </ol>
</section>
<section class="content">
    <!-- row -->
    <div class="row">
        <div class="col-md-3">
            <!-- AREA CHART -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">CPU状态</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div id="cpu-realtime" class="chart" style="height: 250px">

                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6">
            <!-- LINE CHART -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">内存状态</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body row">
                    <div id="memory-pie" class="col-md-6" style="height: 250px">
                    </div>
                    <div id="memory-bar" class="col-md-6" style="height: 250px">
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </div>
        <!-- /.col (RIGHT) -->
    </div>

</section>
@stop

@section('script')
    <script>
        $(function () {
            var myChart1 = echarts.init(document.getElementById('cpu-realtime'));
            // 指定图表的配置项和数据
            var option1 = {
                tooltip: {
                    trigger: 'item',
                    formatter: "{a} <br/>{b}: {d}%"
                },
                series : [
                    {
                        name: 'CPU负载',
                        type: 'pie',
                        selectedMode: 'single',
                        radius: [0, '90%'],

                        label: {
                            normal: {
                                position: 'inner'
                            }
                        },
                        labelLine: {
                            normal: {
                                show: false
                            }
                        },
                        data:[
                            {value:25, name:'已用'},
                            {value:75, name:'空闲'},
                        ]
                    }
                ]
            };

            // 使用刚指定的配置项和数据显示图表。
            myChart1.setOption(option1);

            var myChart2 = echarts.init(document.getElementById('memory-pie'));
            var option2 = {
                tooltip: {
                    trigger: 'item',
                    formatter: "{a} <br/>{b}: {d}%"
                },
                series : [
                    {
                        name: '内存负载',
                        type: 'pie',
                        selectedMode: 'single',
                        radius: [0, '90%'],

                        label: {
                            normal: {
                                position: 'inner'
                            }
                        },
                        labelLine: {
                            normal: {
                                show: false
                            }
                        },
                        data:[
                            {value:22, name:'已用'},
                            {value:78, name:'空闲'},
                        ]
                    }
                ]
            };

            // 使用刚指定的配置项和数据显示图表。
            myChart2.setOption(option2);

            var myChart3 = echarts.init(document.getElementById('memory-bar'));

            var option3 = {
                tooltip: {
                    trigger: 'item',
                    formatter: "{a} <br/>{b}: {c}"
                },
                xAxis : [
                    {
                        type : 'value'
                    }
                ],
                yAxis : [
                    {
                        type : 'category',
                        axisTick: {
                            alignWithLabel: true
                        },
                        data : ['总量','空闲','已使用']
                    }
                ],
                series : [
                    {
                        name:'内存',
                        type:'bar',
                        label: {
                            normal: {
                                show: true,
                                position: 'inside'
                            }
                        },
                        data:[540, 170, 370]
                    }
                ]
            };
            myChart3.setOption(option3);


        });

    </script>
@stop