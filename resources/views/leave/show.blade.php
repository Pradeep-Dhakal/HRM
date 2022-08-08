@extends('layouts.admin')
@section('main-content')
    <div class="container">
        <div class="justify-content-center">

            <div class="card">
                <div class="card-header">leave Application
                    @can('role-create')
                        <span class="float-right">
                            <a class="btn btn-primary" href="#">Back</a>
                        </span>
                    @endcan
                </div>
                @include('message.response')

                <div class="card-body">

                    <form action="{{ route('leave.update', $details->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="lead">
                            <strong>Name:</strong>
                            {{-- {{ $user->name }} --}}
                            {{ $details->users->name }}
                        </div>
                        <div class="lead">
                            <strong>Email:</strong>
                            {{-- {{ $user->email }} --}}
                            {{ $details->users->email }}
                        </div>
                        <div class="lead">
                            <strong>Date:</strong>
                            {{-- {{ $user->email }} --}}
                            {{ $details->date }}
                        </div>

                        <div class="lead">
                            <strong>Letter</strong>

                            {!! $details->message !!}
                            ********
                        </div>

                        <div class="lead">
                            <strong>Status</strong>
                            @role('admin')
                            <select name="status" id="user">
                                <option value="{{ $details->status }}">{{ $details->status }}</option>
                                <option value="Approved">Approved</option>
                                <option value="Rejected">Reject</option>
                                <option value="Pending">Pending</option>
                            </select>
                            @else
                            {{ $details->status }}
                            @endrole
                        </div>
                        @role('admin')
                        <div class="lead">
                            <button type="submit" class="btn btn-primary" class="text-right">Save</button>
                        </div>
                        @endrole
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
