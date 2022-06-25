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
                                        href="{{ route('task.index') }}">Task Lists</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-success " href="{{route('task.edit',$details->id)}}" role="button" style="border-radius: 50%">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Default Basic Forms Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Tasks Details</h4>
                    </div>
                </div>
                <table class="table table-striped table-hover">

                    <div class="col-md-6 pull-right">
                        <div class="box box-primary">
                            <div class="box-header">
                                <h4> Image</h4>
                            </div>
                            <div class="box-body">
                                {{-- <img src="{{ asset('uploads/messagefrom'.'/'.$message->image) }}" width="100%"> --}}
                            </div>
                        </div>
                    </div>
                    @if (isset($details))
                        <ul class="list-group col-md-6">
                            <li class="list-group-item">
                                <strong>Task Name</strong> :
                                {{ $details->task_name }}
                            </li>

                            <li class="list-group-item">
                                <strong>Assigned By</strong> :
                                {!! $details->Assigned_by !!}
                            </li>
                            <li class="list-group-item">
                                <strong>Description</strong> :
                                {!! $details->description !!}
                            </li>
                            <li class="list-group-item">
                                <strong>Assigned Date</strong> : {{ $details->assigned_date }}
                            </li>
                            <li class="list-group-item">
                                <strong>Due Date</strong> :
                                {{ $details->due_date }}
                            </li>
                            <li class="list-group-item">
                                <strong>Status</strong> :
                                {{ $details->status }}
                            </li>
                            @if ($details->task_file == '')
                                No file
                            @else
                                <li class="list-group-item">
                                    <strong>File</strong> :
                                    <a href="{{route('downloaded',$details->id)}}"> {{$details->task_file}} </a>
                                </li>
                            @endif
                        </ul>
                    @endif
                </table>

            </div>
            <!-- Default Basic Forms End -->

        </div>
    </div>
@endsection
