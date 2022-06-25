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
                    <th scope="col">Date</th>
                    <th scope="col">Check in</th>
                    <th scope="col">Check Out</th>
                    <th scope="col">Description</th>
                    <th scope="col">Total Hours</th>
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
                            <td>{{ $dat->Date }}</td>
                            <td>{{ $dat->check_in }}</td>
                            <td>{{ $dat->check_out }}</td>
                            <td>{{ $dat->description }}</td>
                            <td>{{ $dat->Total_Hours }}</td>
                            <td>
                                {{-- <a href="{{route('attendance.create')}}">
                <i class="fa fa-checkin">Check In</i></a> --}}
                                @if ($dat->check_out == '')
                                    <a href="{{ route('attendance.edit', $dat->id) }}">
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
    @endrole

    @role('Employee')
        <div class="text-center ">
            <h2>
                Your Attendace History
            </h2>
            <?php
            $tday = '{{Carbon::today()}}';
            $newd = DB::table('attendances')->select('*')->where('user_id', auth()->User()->id)->first();
            ?>
                @if ($newd->Date == $tday)
                @else
                    <a href="{{ route('attendance.create') }}">
                        <button class="btn btn-primary">Create New Attendance</button>
                    </a>
                @endif


            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th scope="col">Sn</th>
                        <th scope="col">Date</th>
                        <th scope="col">Check in</th>
                        <th scope="col">Check Out</th>
                        <th scope="col">Description</th>
                        <th scope="col">Total Hours</th>
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
                                <td>{{ $dat1->Date }}</td>
                                <td>{{ $dat1->check_in }}</td>
                                <td>{{ $dat1->check_out }}</td>
                                <td>{{ $dat1->description }}</td>
                                <td>{{ $dat1->Total_Hours }}</td>
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
        @endrole
    @endsection
