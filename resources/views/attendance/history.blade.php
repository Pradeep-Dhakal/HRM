@extends('layouts.admin')
@section('main-content')
    <div class="text-center ">
        <h2>
            Your Attendace History
        </h2>
        @role('admin')
            <a href="{{ route('attendance.create') }}">
                <button class="btn btn-primary">Create New Attendance</button>
            </a>
        </div>

        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">Sn</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Check in</th>
                    <th scope="col">Check Out</th>
                    <th scope="col">Description</th>
                    <th scope="col">Total Hours</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $newdata = DB::table('attendances')
                        ->select('*')
                        ->get();
                @endphp
                @if (isset($newdata))
                    @foreach ($newdata as $key => $dat)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <th>
                                @php
                                    $username=App\Models\User::select('name')->where('id',$dat->user_id)->first();
                                @endphp

                                {{$username->name}}</th>
                            <td>{{ $dat->date }}</td>
                            <td>{{ $dat->check_in }}</td>
                            <td>{{ $dat->check_out }}</td>
                            <td>{{ $dat->description }}</td>
                            <td>{{ $dat->Total_Hours }}</td>
                            <td>
                                @php
                                    $required_time_in_hour='00:08:00';
                                    // $result = Carbon::parse($request->check_in)->diffInMinutes(Carbon::parse($request->check_out));

                                    $overtime =Carbon\Carbon::parse($dat->Total_Hours)->diffInMinutes(Carbon\Carbon::parse($required_time_in_hour));
                                    // dd((int)$dat->Total_Hours);
                                    $insufficient_hour=Carbon\Carbon::parse($required_time_in_hour)->diffInMinutes(Carbon\Carbon::parse($dat->Total_Hours));


                                    // dd($insufficient_hour);
                                @endphp

                                @if ($dat->Total_Hours>$required_time_in_hour)
                                OverTime by {{$overtime}} hour
                                @else
                                Insuficient by: {{$insufficient_hour}} hour

                                @endif



                            </td>
                            <td>

                                {{-- <a href="{{route('attendance.create')}}">
                <i class="fa fa-checkin">Check In</i></a> --}}
                                @if (Auth::user()->hasRole('admin'))
                                    <a href="{{ route('attendance.edit', $dat->id) }}"> <i class="fa fa-edit">Update</i></a>
                                @endif
                                @if ($dat->check_out == '')
                                    <a href="{{ route('attendance.edit', $dat->id) }}">
                                        <i class="fa fa-checkin">Check Out</i></a>
                                    <br>
                                @else
                                    <strong>Already Done</strong>
                                @endif

                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    @else
        <div class="text-center ">

            <?php
            $tday = Carbon\Carbon::today();
            // dd($tday);
            $newd = DB::select('select * from attendances where user_id = ' . auth()->user()->id);
            $today_date_attendance = App\Models\Attendance::whereMonth('date', '=', Carbon\Carbon::now()->format('m'))
                ->whereDay('date', '=', Carbon\Carbon::now())
                ->first();
            // dd($today_date_attendance->date);
            // $todaydatedata=DB::select('select * from attendances where user_id = '. auth()->user()->id .' and date'.' = '.$tday)->get();
            // dd($todaydatedata);
            ?>
            {{-- @isset($newd)
                @foreach ($newd as $newd)
                    @if (Carbon\Carbon::parse($newd->date) == $today_date_attendance->date)
                    <a href="{{ route('attendance.create') }}">
                        <button class="btn btn-primary">Create New Attendance</button>
                    </a>
                    @endif
                @endforeach
            @endisset --}}
            @isset($today_date_attendance->date)
                @if ($today_date_attendance->date == $tday)

                    @else
                    <a href="{{ route('attendance.create') }}">
                        <button class="btn btn-primary">Create New Attendance</button>
                    </a>
                @endif
            @endisset

            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th scope="col">Sn</th>
                        <th scope="col">Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Check in</th>
                        <th scope="col">Check Out</th>
                        <th scope="col">Description</th>
                        <th scope="col">Total Hours</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @php
            $newdata1 = DB::table('attendances')->get('*')->where('user_id', auth()->User()->id);
            // return $this->with('users')->get('*')->where('user_id', auth()->User()->id);

            @endphp --}}
                    @if (isset($data1))
                        @foreach ($data1 as $key => $dat1)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{Auth::user()->name}}</td>
                                <td>{{ $dat1->Date }}</td>
                                <td>{{ $dat1->check_in }}</td>
                                <td>{{ $dat1->check_out }}</td>
                                <td>{{ $dat1->description }}</td>
                                <td>{{ $dat1->Total_Hours }}</td>
                                <td>
                                    @php
                                        $required_time_in_hour='00:08:00';
                                        // $result = Carbon::parse($request->check_in)->diffInMinutes(Carbon::parse($request->check_out));

                                        $overtime =Carbon\Carbon::parse($dat1->Total_Hours)->diffInMinutes(Carbon\Carbon::parse($required_time_in_hour));
                                        // dd((int)$dat->Total_Hours);
                                        $insufficient_hour=Carbon\Carbon::parse($required_time_in_hour)->diffInMinutes(Carbon\Carbon::parse($dat1->Total_Hours));


                                        // dd($insufficient_hour);
                                    @endphp

                                    @if ($dat1->Total_Hours>$required_time_in_hour)
                                    OverTime by {{$overtime}} hour
                                    @else
                                    Insuficient by: {{$insufficient_hour}} hour

                                    @endif



                                </td>

                                <td>
                                    {{-- <a href="{{route('attendance.create')}}">
                <i class="fa fa-checkin">Check In</i></a> --}}
                                    @if ($dat1->check_out == '')
                                        <a href="{{ route('attendance.edit', $dat1->id) }}">
                                            <i class="fa fa-checkin">Check Out</i></a>
                                    @else
                                        <strong>Already Done</strong>
                                    @endif

                                </td>

                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    @endrole




@endsection
