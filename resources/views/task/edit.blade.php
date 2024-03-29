@extends('layouts.admin')
@section('main-content')
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a
                                        href="{{ route('task.index') }}">task List</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Default Basic Forms Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        {{-- <h4 class="text-blue h4">Back</h4> --}}

                    </div>
                </div>

                @include('message.response')

                <form action="{{ route('task.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    {{-- <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Select user</label>
                        <div class="col-sm-12 col-md-10" class="m-4 p-4px">
                            <select name="User_id" id="user">
                                @foreach ($person as $users)
                                    <option value="{{ $users->id }}">{{ $users->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> --}}

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Assigned By</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="task_name" placeholder="Enter task name"
                                value="{{ $user->users->name }}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Task Name</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="task_name" placeholder="Enter task name"
                                value="{{ $user->task_name }}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Description</label>
                        <div class="col-sm-12 col-md-10">
                            <textarea name="description" id="document" class="ckeditor form-control" placeholder="" value="">{{ $user->description }}</textarea>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Assigne Date</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" class="taskdate" type="date" name="assigned_date"
                                placeholder="Enter task assigned data" value="{{ $user->assigned_date }}" required>
                        </div>
                    </div>
                    @role('admin')
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Due Date</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" class="taskdate" type="date"  name="due_date" placeholder="Enter task due data"
                                value="{{ $user->due_date }}" required>
                        </div>
                    </div>
                    @endrole

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Select Status</label>
                        <div class="col-sm-12 col-md-10" class="m-4 p-4px">
                            <select name="status" id="user">
                                <option value="{{ $user->status }}">{{ $user->status }}</option>
                                <option value="pending">Not started</option>
                                <option value="Progress">Pending</option>
                                <option value="Finished">Finished</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">File</label>
                        <div class="col-sm-12 col-md-10">
                            <input type="file" name="task_file" id="taskfile" placeholder="" value="">
                            <a href="{{ route('downloaded', $user->id) }}"> {{ $user->task_file }} </a>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label"></label>
                        <div class="col-sm-12 col-md-10">
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Default Basic Forms End -->


        </div>
    </div>
    <script language="javascript">
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();

        today = yyyy + '-' + mm + '-' + dd;
        $('.taskdate').attr('min', today);
    </script>
@endsection
