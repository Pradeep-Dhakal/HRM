@extends('layouts.admin')
@section('main-content')
    <div class="container">
        <div class="justify-content-center">
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div>
            @endif
            <div class="card">
                <div class="card-header">Roles
                    @can('role-create')
                        <span class="float-right">
                            <a class="btn btn-primary" href="{{ route('roles.create') }}">New Role</a>
                        </span>
                    @endcan
                </div>
                <div class="card-body">

                    <table class="data-table table stripe hover nowrap" id="rolesdatatable">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th class="table-plus datatable-nosort">Role Name</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($data)
                                @foreach ($data as $key => $role)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td class="table-plus">
                                            {{ $role->name }}
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                    href="#" role="button" data-toggle="dropdown">
                                                    <i class="dw dw-more"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                    <a class="dropdown-item" href="{{ route('roles.show', $role->id) }}"><i
                                                            class="dw dw-eye"></i> View</a>
                                                            @can('role-edit')
                                                        <a class="dropdown-item" href="{{ route('roles.edit', $role->id) }}"><i
                                                                class="dw dw-edit2"></i> Edit</a>
                                                    @endcan
                                                    @can('role-delete')
                                                        {{ Form::open(['url' => route('roles.destroy', $role->id), 'onsubmit' => "return confirm('Are you sure you want to delete this?')", 'class' => 'form pull-left']) }}
                                                        @method('delete')
                                                        <button class="dropdown-item"><i class="dw dw-delete-3"></i>
                                                            Delete</button>
                                                        {{ Form::close() }}
                                                    @endcan
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endisset
                        <tfoot>
                            <tr>
                                <th>S.N.</th>
                                <th class="table-plus datatable-nosort">Role Name</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </tfoot>

                        </tbody>
                    </table>
                    {{ $data->render() }}

                </div>
            </div>
        </div>
    </div>
@endsection
