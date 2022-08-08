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
                <div class="card-header">Users
                    <span class="float-right">
                        <a class="btn btn-primary" href="{{ route('users.create') }}">New User</a>
                    </span>
                </div>
                <div class="card-body">

                    {{-- {{ $data->render() }} --}}

                    <table class="data-table table stripe hover nowrap" id="usersdatatable">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th class="table-plus datatable-nosort">Name</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @isset($data)
                                @foreach ($data as $key => $user)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td class="table-plus">{{ $user->name }}</td>
                                        <td class="table-plus">{{ $user->email }}</td>
                                        <td class="table-plus">
                                            @if (!empty($user->getRoleNames()))
                                                @foreach ($user->getRoleNames() as $val)
                                                    <label class="badge badge-dark">{{ $val }}</label>
                                                @endforeach
                                            @endif
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                    href="#" role="button" data-toggle="dropdown">
                                                    <i class="dw dw-more"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                    <a class="dropdown-item" href="{{ route('users.show', $user->id) }}"><i
                                                            class="dw dw-eye"></i> View</a>
                                                    <a class="dropdown-item" href="{{ route('create', $user->id) }}"><i
                                                            class="dw dw-add"></i> User Info</a>
                                                        <a class="dropdown-item" href="{{ route('users.edit', $user->id) }}"><i
                                                                class="dw dw-edit2"></i> Edit</a>
                                                        {{ Form::open(['url' => route('users.destroy', $user->id), 'onsubmit' => "return confirm('Are you sure you want to delete this?')", 'class' => 'form pull-left']) }}
                                                        @method('delete')
                                                        <button class="dropdown-item"><i class="dw dw-delete-3"></i>
                                                            Delete</button>
                                                        {{ Form::close() }}
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endisset
                        <tfoot>
                            <tr>
                                <th>S.N.</th>
                                <th class="table-plus datatable-nosort">Name</th>
                                <th>Email</th>
                                <th>Roles</th>
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
