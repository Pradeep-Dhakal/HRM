<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Models\User;

use App\Notifications\TaskReminderNotification;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $usertasks=Task::all()->where('user_id',auth()->user()->id);
        // dd($usertasks);
        return view('alluser.dashboard', compact('usertasks'));
    }
}
