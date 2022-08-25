<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Salary;
use App\Models\User;
use Carbon\Carbon;
use Google\Service\PolyService\Format;
// use Google\Service\Transcoder\Input;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class PayrollController extends Controller
{
    function __construct()
    {


        $this->middleware('permission:Payrol Module', ['only' => ['index','store','create','edit','destroy','show']]);
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
        $users = User::all();

        $filterusers = User::where('id', Request()->get('User_id'))->first();
        $date=Request()->get('month');
        $salary=Salary::where('user_id',Request()->get('User_id'))->first();
        // dd($salary);

        $total_working_days=Attendance::select('*')->where('user_id',Request()->get('User_id'))->whereMonth('date',(Carbon::parse(Request()->get('month'))->format('m')))->whereYear('date',(Carbon::parse(Request()->get('month'))->format('Y')))->get();






        return view('payroll.index', compact('users', 'filterusers','total_working_days','date','salary'));




        // dd(count($total_working_days));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $r)
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
        //
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
        //
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
