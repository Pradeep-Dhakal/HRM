<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{

    /**
     * create a new instance of the class
     *
     * @return void
     */
    function __construct(Attendance $attendance)
    {
        $this->middleware('permission:Attendance-record|Attendance-create|Attendance-edit|Attendance-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:Attendance-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:Attendance-edit|Attendance-record', ['only' => ['edit', 'update']]);
        $this->middleware('permission:Attendance-delete', ['only' => ['destroy']]);

        $this->attendance  = $attendance;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->attendance->getAll();
        $data1 = $this->attendance->getone();
        return view('attendance.history',compact('data','data1'));

    }

    // public function history()
    // {
    //     # code...
    //     return view('attendance.index');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('attendance.checkin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data=Attendance::all();
        // $endtime=Carbon::parse('{{$data->updated_at}}');
        // $starttime=Carbon::parse('{{$data->created_at}}');
        // $totaltime = $starttime->diffForHumans($endtime);

        $checkIn = Carbon::now();
        $attendance = new Attendance();
        $attendance->user_id = auth()->user()->id;
        $attendance->Work_location = $request->worklocation;
        $attendance->description = $request->description;
        $attendance->remarks = $request->remarks;
        $attendance->Date=Carbon::today();
        $attendance->check_in = $checkIn;
        $attendance->check_out = "";
        $attendance->Total_Hours = '';
        $attendance->IP = $request->ip();
        // dd($attendance);
        $attendance->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $attendance=Attendance::find($id);
        return view('attendance.checkout', compact('attendance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $attendance = Attendance::find($id);

        $check_in = $attendance->check_in;
        $check_out = Carbon::now();
        $result = Carbon::parse($attendance->check_in)->diffInMinutes(Carbon::parse(Carbon::now()));


        $attendance->user_id = auth()->user()->id;
        $attendance->Work_location = $request->worklocation;
        $attendance->description = $request->description;
        $attendance->remarks = $request->remarks;
        $attendance->date=Carbon::today();
        $attendance->check_in = $attendance->check_in;
        $attendance->check_out = Carbon::now();
        $attendance->Total_Hours = gmdate('H:i:s',$result);
        $attendance->IP = $request->ip();
        // dd($attendance);
        $attendance->save();
        return view('attendance.history');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
