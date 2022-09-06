@extends('layouts.admin')
@section('main-content')
    {{-- @role('admin') --}}
    @hasrole('admin')
        <div class="container">
            <a href="{{ route('task.create') }}" class="btn btn-success pull-right">assign task</a>
            <table id="example" class="table table-striped table-bordered example" style="width:100%">
                <thead>
                    <tr>

                        <th>SN</th>
                        <th>Task Name</th>
                        <th>Assigned By</th>
                        <th>Assigned Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($taskdata as $key => $tdata)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>
                                {{ $tdata->task_name }}
                            </td>
                            <td>{{ $tdata->Assigned_by }}</td>
                            <td>{!! $tdata->assigned_date !!}</td>
                            <td>{{ $tdata->status }}</td>
                            {{-- <td>{{$tdata->status}}</td> --}}

                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
                                        role="button" data-toggle="dropdown">
                                        <i class="dw dw-more"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                        <a class="dropdown-item" href="{{ route('task.show', $tdata->id) }}"><i
                                                class="dw dw-eye"></i> View</a>

                                        <a class="dropdown-item" href="{{ route('task.edit', $tdata->id) }}"><i
                                                class="dw dw-edit2"></i> Edit</a>


                                        {{ Form::open(['url' => route('task.destroy', $tdata->id), 'onsubmit' => "return confirm('Are you sure you want to delete this?')", 'class' => 'form pull-left']) }}
                                        @method('delete')
                                        <button class="dropdown-item"><i class="dw dw-delete-3"></i>
                                            Delete</button>
                                        {{ Form::close() }}

                                    </div>
                                </div>
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
                        <th>Task Name</th>
                        <th>Assigned By</th>
                        <th>Assigned Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    @else
        <div class="container">
            <a href="{{ route('task.create') }}" class="btn btn-success pull-right">assign task</a>

            <table id="example" class="table table-striped table-bordered example" style="width:100%">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Task Name</th>
                        <th>Assigned By</th>
                        <th>Assigned Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($mytask as $key => $tdata)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>
                            {{ $tdata->task_name }}
                        </td>
                        <td>{{ $tdata->Assigned_by }}</td>
                        <td>{!! $tdata->assigned_date !!}</td>
                        <td>{{ $tdata->status }}</td>
                        {{-- <td>{{$tdata->status}}</td> --}}

                        <td>
                            <div class="dropdown">
                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
                                    role="button" data-toggle="dropdown">
                                    <i class="dw dw-more"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                    <a class="dropdown-item" href="{{ route('task.show', $tdata->id) }}"><i
                                            class="dw dw-eye"></i> View</a>

                                    <a class="dropdown-item" href="{{ route('task.edit', $tdata->id) }}"><i
                                            class="dw dw-edit2"></i> Edit</a>


                                    {{ Form::open(['url' => route('task.destroy', $tdata->id), 'onsubmit' => "return confirm('Are you sure you want to delete this?')", 'class' => 'form pull-left']) }}
                                    @method('delete')
                                    <button class="dropdown-item"><i class="dw dw-delete-3"></i>
                                        Delete</button>
                                    {{ Form::close() }}

                                </div>
                            </div>
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
                        <th>Task Name</th>
                        <th>Assigned By</th>
                        <th>Assigned Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    @endhasrole


@endsection
