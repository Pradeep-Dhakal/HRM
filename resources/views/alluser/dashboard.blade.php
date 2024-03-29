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

                                // $totalusers = DB::select('select * from leaves where status="Approved" AND date='.$todaysdate);
                                $totalusers=App\Models\Leave::where('status','Approved')->whereMonth('date', '=', Carbon::now()->format('m'))
                                    ->whereDay('date', '=', Carbon::now()->format('d'))
                                    ->get();

                            @endphp
                        <div class="h4 mb-0"><h2>{{ count($totalusers) }}</h2></div>
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
                            <section class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div id="donut-chart"></div>
                                    </div>

                                </div>
                            </section>
<hr>


                            {{-- this js is for showing the chart --}}

                            <script language="javascript">
                                $(document).ready(function() {

                                    donutChart();

                                    $(window).resize(function() {
                                        window.donutChart.redraw();
                                    });
                                });

                                function donutChart() {
                                    window.donutChart = Morris.Donut({
                                        element: 'donut-chart',
                                        data: [{
                                                label: "Finished Task ",
                                                value: {!! $finished !!}
                                            },
                                            {
                                                label: "Pending task",
                                                value: {!! $Pending !!}
                                            },
                                            {
                                                label: "Not Started",
                                                value: {!! $Not_started !!}
                                            },

                                        ],
                                        resize: true,
                                        redraw: true
                                    });
                                }
                            </script>

                        @endsection
