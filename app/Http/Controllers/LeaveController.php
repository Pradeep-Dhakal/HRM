<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LeaveController extends Controller
{
    protected $leave = null;
    public function __construct(Leave $leave)

    {
        $this->leave = $leave;

             $this->middleware('permission:Leave Module', ['only' => ['index','store','create','edit','destroy','show']]);
            //  $this->middleware('permission:user-create', ['only' => ['create','store']]);
            //  $this->middleware('permission:user-edit', ['only' => ['edit','update']]);
            //  $this->middleware('permission:user-delete', ['only' => ['destroy']]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = $this->leave->getall();
        $data1 = $this->leave->getone();
        // dd($data1);


        return view('leave.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('leave.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules  = $request->validate([
            "subject" => "required",
            "date" => "required",
            "message" => 'required'
        ]);

        $leave = new Leave();
        $data = $request->all();
        $leave->user_id = auth()->user()->id;
        $leave->subject = $data['subject'];
        $leave->date = $data['date'];
        $leave->message = $data['message'];
        $leave->status = "pending";
        $status = $leave->save();
        if ($status) {
            return redirect()->back()->with('success', 'leave request sent succefully');
        } else {
            return redirect()->back()->with('error', 'Failed to sent your leave appilcation');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $details=$this->with('users')->get('*')->where('user_id', $id);
        $details = Leave::find($id);


        return view('leave.show', compact('details'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $rules  = $request->validate([
            "status" => "required"
        ]);

        $leave = Leave::find($id);
        // $data = $request->all();
        $leave->user_id = auth()->user()->id;
        $leave->subject = $leave->subject;
        $leave->date =  $leave->date;
        $leave->message = $leave->message;
        $leave->status = $request->status;
        $status = $leave->save();
        if ($status) {
            return redirect()->back()->with('success', 'leave application updated succefully!!!!!!');
        } else {
            return redirect()->back()->with('error', 'Failed to update leave applicaion');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $leavedata = Leave::find($id);
        $status = $leavedata->delete();
        if ($status) {
            return redirect()->back()->with('success', 'leave application deleted succefully!!!!!!');
        } else {
            return redirect()->back()->with('error', 'Failed to delete leave applicaion');
        }
    }
}
