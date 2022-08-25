@extends('layouts.admin')
@section('main-content')
    <div class="container">
        <div class="main-body">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    {{-- <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li> --}}
                    <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                @isset(auth()->User()->Personalinfo->image)
                                    <img src="{{ asset('uploads/profilepicture/' . auth()->User()->personalinfo->image) }}"
                                        alt="Admin" class="rounded-circle" width="150">
                                @else
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                        class="rounded-circle" width="150">
                                @endisset
                                <div class="mt-3">
                                    <h4>{{ auth()->User()->name }}</h4>
                                    @php
                                        $skips = ['[', ']', "\""];
                                        $rolename = Auth::user()->roles->pluck('name');
                                        $rname = str_replace($skips, ' ', $rolename);

                                    @endphp
                                    <p class="text-secondary mb-1">{{ strtoupper($rname) }}</p>
                                    <div>
                                        <a class="btn btn-primary" href="{{ route('Feed.show', auth::user()->id) }}">My
                                            posts</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-8">
                    <div class="card mb-3">
                        @include('message.response')
                        <form action="{{ route('update', auth()->User()->id) }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{-- {{ auth()->User()->personalinfo->full_name }} --}}
                                        <input type="text" class="form-control" name='full_name'
                                            value="@isset(auth()->User()->personalinfo->full_name) {{ auth()->User()->personalinfo->full_name }} @endisset
                                        ">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{-- {{ auth()->User()->personalinfo->persoanal_email }} --}}
                                        <input type="text" class="form-control" name='persoanal_email'
                                            value="@isset(auth()->User()->personalinfo->persoanal_email) {{ auth()->User()->personalinfo->persoanal_email }} @endisset">

                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                    </div>

                                    <div class="col-sm-9 text-secondary">
                                        {{-- {{auth()->user()->personalinfo->contact_no}} --}}
                                        <input type="text" class="form-control" name='contact_no'
                                            value=" @isset(auth()->user()->personalinfo->contact_no) {{ auth()->user()->personalinfo->contact_no }} @endisset">

                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">citisenship</h6>

                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name='citizenship_no'
                                            value=" @isset(auth()->user()->personalinfo->citizenship_no) {{ auth()->user()->personalinfo->citizenship_no }} @endisset">
                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">NID Card no</h6>

                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name='NID_card_no'
                                            value=" @isset(auth()->user()->personalinfo->NID_card_no) {{ auth()->user()->personalinfo->NID_card_no }} @endisset">
                                    </div>

                                </div>

                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Date Of Birth</h6>

                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="date" class="form-control" name='date_of_birth'
                                            value=" @isset(auth()->user()->personalinfo->date_of_birth) {{ auth()->user()->personalinfo->date_of_birth }} @endisset">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Blood Group</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" name='blood_group'
                                            value=" @isset(auth()->user()->personalinfo->blood_group) {{ auth()->user()->personalinfo->blood_group }} @endisset">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Gender</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <select name="gender" id="" class="form-control">
                                            <option
                                                value="M"@isset(auth()->user()->personalinfo->gender) @if (auth()->user()->personalinfo->gender == 'M') selected

                                        @endif @endisset>
                                                Male</option>
                                            <option
                                                value="F"@isset(auth()->user()->personalinfo->gender) @if (auth()->user()->personalinfo->gender == 'F') selected

                                            @endif @endisset>
                                                Female</option>
                                            <option
                                                value="O"@isset(auth()->user()->personalinfo->gender) @if (auth()->user()->personalinfo->gender == 'O') selected

                                            @endif @endisset>
                                                Other</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Profile Picture</h6>

                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="file" class="form-control" name='image'>
                                    </div>
                                </div>

                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">
                                        {{-- <a class="btn btn-info " target="__blank"
                                            href="{{ route('profile.edit', auth()->User()->id) }}">Edit</a> --}}

                                        <button type="submit" class="btn btn-info">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
@endsection
