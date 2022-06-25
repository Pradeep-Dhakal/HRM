@extends('layouts.admin')
@section('main-content')
    @php
    use Carbon\Carbon;
    $currentTime = Carbon::today()->format('Y-m-d');
    // dd($currentTime);
    @endphp
    @if ($usertasks)
        @foreach ($usertasks as $task)
            @if ($task->status == 'pending')
                <div class="alert alert-info alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>Reminder!!!! your task is pening <a href="{{route('task.show',$task->id)}}"> View Details of your task</a></strong>
                </div>
            @elseif ($task->due_date == $currentTime)
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>reminder today is the deadlne of your task please submit on time <a href="{{route('task.show',$task->id)}}"> View Details of your task</strong>
                </div>
            @endif
        @endforeach
    @endif
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
