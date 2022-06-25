@extends('layouts.admin')
@section('main-content')
    {{-- @role('admin') --}}
    <div class="container">
        <a href="{{ route('task.create') }}" class="btn btn-success pull-right">assign task</a>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>

                    <th>SN</th>
                    <th>Task Name</th>
                    <th>Assigned by</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($taskdata as $key => $tdata)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $tdata->task_name }}</td>
                        <td>{{ $tdata->Assigned_by }}</td>
                        <td>{!! $tdata->description !!}</td>
                        <td>{{ $tdata->status }}</td>
                        {{-- <td>{{$tdata->status}}</td> --}}
                        <td>
                            <a href="{{ route('task.show', $tdata->id) }}"><i style="font-size: 30px;"
                                    class="fa-solid fa-eye m-2 pt-3"></i></a>

                            {{-- <a href="{{route('task.destroy',$tdata->id)}}"><i style="font-size: 30px;" class="fa fa-trash m-2 "></i></a> --}}
                            {!! Form::open(['method' => 'DELETE', 'url' => route('task.destroy', $tdata->id), 'style' => 'display:inline']) !!}

                            {!! Form::button('<i style="font-size: 30px;" class="fa fa-trash m-2 "></i>', ['type' => 'submit', 'class' => 'btn btn-defult', 'title' => 'Delete Post', 'onclick' => 'return confirm("Confirm delete?")']) !!}

                            {!! Form::close() !!}

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>null</td>
                        <td>null</td>
                        <td>null</td>
                        <td>null</td>
                        <td>null</td>

                    </tr>
                @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
    {{-- @endrole --}}

    {{-- @role('Employee') --}}
    <div class="container">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>


                {{-- @forelse ($data1 as $empdata)
                        <tr>
                            <td>{{ $empdata->id }}</td>
                            <td>{{ $empdata->users->name }}</td>
                            <td>{{ $empdata->subject }}</td>
                            <td>{{ $empdata->date }}</td>
                            <td>pending</td>
                            <td>


                                <a href="{{route('leave.show',$empdata->id)}}"><i style="font-size: 30px;" class="fa-solid fa-eye m-2 pt-3 view"></i></a>

                                <a href=""><i style="font-size: 30px;" class="fa fa-trash m-2 "></i></a>
                            </td>
                        </tr>

                    @empty
                        <tr>
                            <td>null</td>
                            <td>null</td>
                            <td>null</td>
                            <td>null</td>
                            <td>null</td>
                        </tr>
                    @endforelse --}}
            </tbody>
            <tfoot>
                <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
    {{-- @endrole --}}
@endsection
