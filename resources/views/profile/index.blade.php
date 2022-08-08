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
                                @if (auth()->User()->Personalinfo->image)
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
                                </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-8">
                <div class="card mb-3">
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
                                        value="{{ auth()->User()->personalinfo->full_name }}">
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
                                        value="{{ auth()->User()->personalinfo->persoanal_email }}">

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                @if (auth()->user()->personalinfo->contact_no)
                                    <div class="col-sm-9 text-secondary">
                                        {{-- {{auth()->user()->personalinfo->contact_no}} --}}
                                        <input type="text" class="form-control" name='contact_no'
                                            value=" {{ auth()->user()->personalinfo->contact_no }}">

                                    </div>
                                @else
                                    <div class="col-sm-9 text-secondary">
                                    </div>
                                @endif

                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">citisenship</h6>

                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" name='citizenship_no'
                                        value=" {{ auth()->user()->personalinfo->citizenship_no }}">

                                    {{-- {{auth()->user()->personalinfo->citizenship_no}} --}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a class="btn btn-info " target="__blank"
                                        href="{{ route('profile.edit', auth()->User()->id) }}">Edit</a>

                                    {{-- <button class="btn btn-primary" type="submit"> Update</button> --}}
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
