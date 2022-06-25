<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Models\User;
use Dotenv\Store\File\Paths;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\DocBlock\Tag;
use Illuminate\Support\Facades\Session;
use App\Notifications\TaskEmailNotification;
use Illuminate\Support\Facades\Notification;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $taskdata = Task::all();
        return view('task.index', compact('taskdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usernames = User::all();
        return view('task.create', compact('usernames'));
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
            "task_file" => "required|mimetypes:application/pdf|max:10000"
        ]);
        // dd($request->all());
        $tasks = new Task();
        $tasks->User_id = $request->User_id;
        $tasks->task_name = $request->task_name;
        $tasks->Assigned_by = auth()->user()->name;
        $tasks->description = $request->description;
        $tasks->assigned_date = $request->assigned_date;
        $tasks->due_date = $request->due_date;
        $tasks->status = 'Not started';
        if ($request->file('task_file')) {
            $file = $request->file('task_file');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('taskfiles'), $filename);
            $tasks['task_file'] = $filename;
        }

        $uid = $request->User_id;
        $user = User::find($uid);
        // dd($user);
        $taskemail = [
            'greeting' => 'Hi ' . $user->name . ',',
            'body' => 'New task Has been assigned to you'
                . 'Task Title:' . $request->task_name . ''
                . 'Assigned By:' . auth()->user()->name . ''
                . 'Assigned Date' . $request->assigned_date . ''
                . 'Deadline' . $request->due_date . '',
            'thanks' => 'Thanks from' . auth()->user()->name . '',
            'actionText' => 'View task',
            'actionURL' => url('http://127.0.0.1:8000/task'),
        ];
        Notification::send($user, new TaskEmailNotification($taskemail));

        $status = $tasks->save();
        if ($status) {
            return redirect()->back()->with('success', 'Task has been added succefully!!!!');
        } else {
            return redirect()->back()->with('error', 'Failed to adding task!!!!');
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
        $details = Task::find($id);
        return view('task.show', compact('details'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Task::find($id);
        $person = User::all();

        return view('task.edit', compact('user', 'person'));
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
        // dd($request->all());
        $updatetasks = Task::find($id);
        $updatetasks->User_id = $request->User_id;
        $updatetasks->task_name = $request->task_name;
        $updatetasks->Assigned_by = auth()->user()->name;
        $updatetasks->description = $request->description;
        $updatetasks->assigned_date = $request->assigned_date;
        $updatetasks->due_date = $request->due_date;
        $updatetasks->status = $request->status;

        // //Store file In Folder
        if ($request->file('task_file')) {
            $file = $request->file('task_file');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('taskfiles'), $filename);
            $tasks['task_file'] = $filename;

            if (file_exists(public_path($filename =  $file->getClientOriginalName()))) {
                unlink(public_path($filename));
            };
            //Update file
            $updatetasks->task_file = $filename;
        }
        $status = $updatetasks->save();

        if ($status) {
            return redirect()->back()->with('success', 'Task has been updated succefully!!!!');
        } else {
            return redirect()->back()->with('error', 'Failed to update the task!!!!');
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
        $data = Task::find($id);
        $status = $data->delete();
        if ($status) {
            return redirect()->back()->with('success', 'Task has been deleted successfully !!!!');
        } else {
            return redirect()->back()->with('error', 'Failed to delete the task !!!!');
        }
    }

    public function downloaded($id)
    {

        $brochure = Task::find($id);

        //dd($advert);
        $full_image_path = public_path() . '/taskfiles/' . $brochure->task_file;
        //dd($full_image_path);
        // filename and look at the extension of the file being requested
        $extension = pathinfo($brochure->task_file, PATHINFO_EXTENSION);
        //dd($extension);
        //create an array of items to reject being downloaded
        $blocked = ['php', 'htaccess'];
        //if the requested file is not in the blocked array
        if (!in_array($extension, $blocked)) {
            //download the file
            return response()->download($full_image_path); // full url of file
        }
    }
}
