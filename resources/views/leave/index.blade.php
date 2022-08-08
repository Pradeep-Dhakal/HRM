@extends('layouts.admin')
@section('main-content')
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
                @if (Auth::user()->hasRole('admin'))
                    @foreach ($data as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->users->name }}</td>
                            <td>{{ $data->subject }}</td>
                            <td>{{ $data->date }}</td>
                            <td>{{ $data->status }}</td>
                            <td>
                                <a href="{{ route('leave.show', $data->id) }}"><i style="font-size: 30px;" data-toggle="modal"
                                        data-target=".bd-example-modal-lg" class="fa-solid fa-eye m-2 pt-3"></i></a>

                                {!! Form::open(['method' => 'DELETE', 'url' => route('leave.destroy', $data->id), 'style' => 'display:inline']) !!}

                                {!! Form::button('<i style="font-size: 30px;" class="fa fa-trash m-2 "></i>', [
                                    'type' => 'submit',
                                    'class' => 'btn btn-defult',
                                    'title' => 'Delete Post',
                                    'onclick' => 'return confirm("Confirm delete?")',
                                ]) !!}

                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                @else
                    @php
                        // $data1 = DB::select('select * from leaves where user_id='. auth()->user()->id)->get();
                        $data1= App\Models\Leave::all()->where('user_id',auth()->user()->id);
                        // dd($data1);

                    @endphp

                    @foreach ($data1 as $authdata)
                        <tr>
                            <td>{{ $authdata->id }}</td>
                            <td>{{ $authdata->users->name }}</td>
                            <td>{{ $authdata->subject }}</td>
                            <td>{{ $authdata->date }}</td>
                            <td>{{ $authdata->status }}</td>
                            <td>
                                <a href="{{ route('leave.show', $authdata->id) }}"><i style="font-size: 30px;"
                                        authdata-toggle="modal" authdata-target=".bd-example-modal-lg"
                                        class="fa-solid fa-eye m-2 pt-3"></i></a>

                                {!! Form::open([
                                    'method' => 'DELETE',
                                    'url' => route('leave.destroy', $authdata->id),
                                    'style' => 'display:inline',
                                ]) !!}

                                {!! Form::button('<i style="font-size: 30px;" class="fa fa-trash m-2 "></i>', [
                                    'type' => 'submit',
                                    'class' => 'btn btn-defult',
                                    'title' => 'Delete Post',
                                    'onclick' => 'return confirm("Confirm delete?")',
                                ]) !!}

                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                @endif

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
@endsection
