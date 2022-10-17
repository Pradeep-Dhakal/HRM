@extends('layouts.admin')
@section('main-content')
    @php
    use Carbon\Carbon;
    $currentTime = Carbon::today()->format('Y-m-d');
    // dd($currentTime);
    @endphp
    @if ($usertasks)
        @foreach ($usertasks as $task)
            @if ($task->status == 'pending' || $task->status == 'Not started')
                <div class="alert alert-info alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Reminder!!!! your task is pening or might not started yet <a
                            href="{{ route('task.show', $task->id) }}"> View Details of
                            your task</a></strong>
                </div>
            @elseif ($task->due_date == $currentTime && $task->status != 'Finished')
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>reminder today is the deadlne of your task please submit on time <a
                            href="{{ route('task.show', $task->id) }}"> View Details of your task </a></strong>
                </div>
            @endif
        @endforeach
    @endif

    {{-- dabba haru --}}
    <div class="pd-ltr-20">
        <div class="row">
            <div class="col-xl-3 mb-30">
                <div class="card-box height-100-p widget-style1 bg-primary">
                    <div class="d-flex flex-wrap align-items-center">

                        <div class="widget-data text-center">
                            @php
                                $totalusers = DB::select('select * from users');
                            @endphp
                            <div class="h4 mb-0">
                                <h2>{{ count($totalusers) }}</h2>
                            </div>
                            <div class="weight-600 font-14">
                                <h3>Total User's</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 mb-30">
                <div class="card-box height-100-p widget-style1 bg-success">
                    <div class="d-flex flex-wrap align-items-center">

                        <div class="widget-data text-center">
                            @php

                                $totalcheckinusers = App\Models\Attendance::whereMonth('date', '=', Carbon::now()->format('m'))
                                    ->whereDay('date', '=', Carbon::now()->format('d'))
                                    ->get();
                                // dd(count($totalcheckinusers))
                            @endphp
                            <div class="h4 mb-0">
                                <h2>{{ count($totalcheckinusers) }}</h2>
                            </div>
                            <div class="weight-600 font-14">
                                <h3>Present Today</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 mb-30">
                <div class="card-box height-100-p widget-style1 bg-info">
                    <div class="d-flex flex-wrap align-items-center">

                        <div class="widget-data text-center">
                            @php
                                $todaysdate = Carbon::today()->format('Y-m-d');
                                $leaveuser=App\Models\Leave::where('status','Approved')->whereMonth('date', '=', Carbon::now()->format('m'))
                                    ->whereDay('date', '=', Carbon::now()->format('d'))
                                    ->get();


                            @endphp
                        <div class="h4 mb-0"><h2>{{ count($leaveuser) }}</h2></div>
                        <div class="weight-600 font-14"><h3>On leave Today</h3></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

{{-- dabba haru sakkyo --}}
@include('alluser.addendancetable')

                                @php
                                    $finished = DB::table('tasks')
                                    ->where('status', 'Finished')
                                    ->count();
                                $Pending = DB::table('tasks')
                                    ->where('status', 'Pending')
                                    ->count();
                                $Progress = DB::table('tasks')
                                    ->where('status', 'Progress')
                                    ->count();
                                $Not_started = DB::table('tasks')
                                    ->where('status', 'Not started')
                                    ->count();

                            @endphp
                            <!-- <section class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div id="donut-chart"></div>
                                    </div>
                                    <div class="col-md-3">
                                        <div id="attendance-chart"></div>
                                    </div>
                                </div>
                            </section> -->
                            <section>
                                <div class = "row chart-section">
                                <canvas id="user-chart" style="width:60%;max-width:500px"></canvas>
                                <canvas id="task-chart" style="width:10%;max-width:500px"></canvas>
                                </div>
                            </section>
<hr>


                            {{-- this js is for showing the chart --}}

                            <script language="javascript">
                                // $(document).ready(function() {

                                //     donutChart();

                                //     $(window).resize(function() {
                                //         window.donutChart.redraw();
                                //     });
                                // });

                                // function donutChart() {
                                //     window.donutChart = Morris.Donut({
                                //         element: 'donut-chart',
                                //         data: [{
                                //                 label: "Finished Task ",
                                //                 value: {!! $finished !!}
                                //             },
                                //             {
                                //                 label: "Pending task",
                                //                 value: {!! $Pending !!}
                                //             },
                                //             {
                                //                 label: "Not Started",
                                //                 value: {!! $Not_started !!}
                                //             },

                                //         ],
                                //         resize: true,
                                //         redraw: true
                                //     });
                                // }

                                //Chart for Users
                                var xValues = ["Present Users", "Users on Leave"];
                                var yValues = [{!! count($totalcheckinusers) !!}, {!! count($leaveuser) !!} ];
                                var barColors = [
                                "#b91d47",
                                "#00aba9",
                                "#2b5797",
                                "#e8c3b9",
                                "#1e7145"
                                ];
                                new Chart("user-chart", {
                                    type: "pie",
                                    data: {
                                        labels: xValues,
                                        datasets: [{
                                        backgroundColor: barColors,
                                        data: yValues
                                        }]
                                    },
                                    options: {
                                        title: {
                                        display: true,
                                        text: "Users"
                                        }
                                    }
                                    });
                                //chart for task
                                var xValues = ["Finished Tasks", "Pending", "On Progress", "Not Started"];
                                var yValues = [ {!! $finished !!}, {!! $Pending !!} , {!! $Progress !!} , {!! $Not_started !!} ];
                                var barColors = ["green","yellow","blue","red"];
                                new Chart("task-chart", {
                                    type: "bar",
                                    data: {
                                        labels: xValues,
                                        datasets: [{
                                        backgroundColor: barColors,
                                        data: yValues
                                        }]
                                    },
                                    options: {
                                        title: {
                                        display: true,
                                        text: "Tasks"
                                        }
                                    }
                                    });
                            </script>
<hr>
<hr>



                            {{-- this js is for showing the attendance chart --}}

                            <!-- <script language="javascript">
                                $(document).ready(function() {

                                    attendanceChart();

                                    $(window).resize(function() {
                                        window.donutChart.redraw();
                                    });
                                });

                                function attendanceChart() {
                                    window.donutChart = Morris.Donut({
                                        element: 'attendance-chart',
                                        data: [{
                                                label: "Total Users",
                                                value: {!! count($totalusers) !!}
                                            },
                                            {
                                                label: "Present Users",
                                                value: {!! count($totalcheckinusers) !!}
                                            },
                                            {
                                                label: "Absent Users",
                                                value: {!! count($leaveuser) !!}
                                            },

                                        ],
                                        resize: true,
                                        redraw: true
                                    });
                                } -->
                            <!-- </script> -->

                        @endsection
