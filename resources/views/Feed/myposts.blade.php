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
                    <a class="btn btn-primary" href="{{ route('Feed.index') }}">Create New</a>
                </span>
            </div>
            <div class="card-body">

                {{-- {{ $data->render() }} --}}

                <table class="data-table table stripe hover nowrap" id="usersdatatable">
                    <thead>
                        <tr>
                            <th>S.N.</th>
                            <th class="table-plus datatable-nosort">Description</th>
                            <th>Image</th>

                            <th class="datatable-nosort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @isset($data)
                            @foreach ($data as $key => $post)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td class="table-plus">{{ $post->description }}</td>
                                    @isset($post->post_image)
                                    <td class="table-plus">
                                        <img src="{{asset('Image/'.$post->email) }}" alt="">
                                        </td>
                                    @else
                                    <td>No image available at this moment</td>
                                    @endisset

                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                href="#" role="button" data-toggle="dropdown">
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                {{-- <a class="dropdown-item" href="{{ route('Feed.show', $post->id) }}"><i
                                                        class="dw dw-eye"></i> View</a> --}}

                                                    <a class="dropdown-item" href="{{ route('Feed.edit', $post->id) }}"><i
                                                            class="dw dw-edit2"></i> Edit</a>
                                                    {{ Form::open(['url' => route('Feed.destroy', $post->id), 'onsubmit' => "return confirm('Are you sure you want to delete this?')", 'class' => 'form pull-left']) }}
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
                            <th class="table-plus datatable-nosort">Description</th>
                            <th>Image</th>

                            <th class="datatable-nosort">Action</th>
                        </tr>
                    </tfoot>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

@endsection
