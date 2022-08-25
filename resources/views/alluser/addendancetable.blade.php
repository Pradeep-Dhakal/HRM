@extends('layouts.admin')
@php
$today=Carbon\Carbon::today();
    $today_recorded_attendance=App\Models\Attendance::whereMonth('date', '=', Carbon\Carbon::now()->format('m'))
                            ->whereDay('date', '=', Carbon\Carbon::now()->format('d'))
                            ->whereYear('date', '=', Carbon\Carbon::now()->format('Y'))
                            ->get();

    // dd(count($today_recorded_attendance));
@endphp
{{-- table banauna lageko --}}
<table class="data-table table stripe hover nowrap" id="usersdatatable">
    <thead>
        <tr>
            <th>S.N.</th>
            <th class="table-plus datatable-nosort">Name</th>
            <th>Check In Time</th>
            <th>Remarks</th>
            <th class="datatable-nosort">Image</th>
        </tr>
    </thead>
    <tbody>
        @isset($today_recorded_attendance)
            @foreach ($today_recorded_attendance as $key => $record)
            @php
                $username=App\Models\User::where('id',$record->user_id)->first();
                $userimage=App\Models\Personalinfo::where('user_id',$record->user_id)->first();
                // dd($username);
            @endphp
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td class="table-plus">{{ $username->name}}</td>
                    <td class="table-plus">{{ Carbon\Carbon::parse($record->check_in)->format('H:i:s')}}</td>
                    <td class="table-plus">@if (Carbon\Carbon::parse($record->check_in)->format('H:i:s')>'10:05:00')
                        Late in
                        @elseif (Carbon\Carbon::parse($record->check_in)->format('H:i:s')<'10:00:00')
                        Early in
                        @else
                        Timly in

                    @endif</td>

                    <td>
                        @isset($userimage)
                        <div>
                            <img class="rounded-circle" width="50" height="5" src="{{asset('uploads/profilepicture/'.$userimage->image)}}" alt="User Image">

                        </div>
                        @else
                        no image available

                        @endisset


                    </td>
                </tr>
            @endforeach
        @else
        No attendance for today

        @endisset


    </tbody>
</table>
