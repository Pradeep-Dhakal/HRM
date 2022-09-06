@extends('layouts.admin')
@section('main-content')

    <div class="container">

        <form action="{{ route('payroll.index') }}" method="get">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col"> <label class="col-sm-12 col-md-2 col-form-label">Select user</label></th>

                        <th scope="col"> <label class="col-sm-12 col-md-2 col-form-label">Select Date</label></th>

                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <select name="User_id" id="user" class="form-control"> select user
                                @isset($users)
                                    @foreach ($users as $user)
                                        @php

                                        @endphp
                                        <option value="{{ $user->id }}">{{ $user->name }} </option>
                                    @endforeach
                                @else
                                    no user vailable
                                @endisset
                            </select>
                        </td>
                        <td>
                            <input type="month" name="month" value="{{ old('month') }}">
                        </td>
                        <td><button class="btn btn-primary" type="submit" bt>Submit</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
        <hr>

    </div>
    @isset($filterusers)
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center lh-1 mb-2">
                        <h6 class="fw-bold">Payslip</h6> <span
                            class="fw-normal">{{ Carbon\Carbon::parse($date)->toFormattedDateString() }}</span>
                    </div>
                    <div class="d-flex justify-content-end"> <span>******</span> </div>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-6">
                                    <div> <span class="fw-bolder">EMP Code</span> <small class="ms-3">**********</small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div> <span class="fw-bolder">EMP Name</span> <small class="ms-3">

                                            @isset($filterusers)
                                                <b>{{ $filterusers->name }}</b>
                                            @else
                                                not selected
                                            @endisset
                                        </small> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div> <span class="fw-bolder">PF No.</span> <small class="ms-3">***********</small> </div>
                                </div>
                                <div class="col-md-6">
                                    <div> <span class="fw-bolder">NOD</span> <small class="ms-3">28</small> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div> <span class="fw-bolder">ESI No.</span> <small class="ms-3"></small> </div>
                                </div>
                                <div class="col-md-6">
                                    <div> <span class="fw-bolder">Mode of Pay</span> <small class="ms-3">Cash</small> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">

                                    <div> <span class="fw-bolder">Designation</span> <small class="ms-3">
                                            @isset($filterusers)
                                                {{ $filterusers->roles->first()->name }}
                                            @else
                                                not selected
                                            @endisset
                                        </small> </div>
                                </div>
                                <div class="col-md-6">
                                    <div> <span class="fw-bolder">Ac No.</span> <small class="ms-3">*******</small> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <br>


                    @php
                        $total_office_day = 26;
                        $days = count($total_working_days);
                        $salary_per_day = $salary->amount / $total_office_day;
                        $total_salary_Of_this_month = $days * $salary_per_day;
                        $absent_charge=($total_office_day-$days)*$salary_per_day;
                        $bonusAmount=0;
                    @endphp
                    <div>
                        <h5>Total Wotking Days : 26 </h5>
                            {{-- @php
                               $total_office_day;
                            @endphp --}}
                            {{-- @isset($total_working_days)
                                {{ count($total_working_days) }}
                        @endisset --}}
                        Total Present days: {{$days}}
                    </div>

                    <br>
                    <hr>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Description</th>
                                <th scope="col">******</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Initial Salary</th>
                                <td>
                                    @isset($salary)
                                        {{ $salary->amount }}
                                    @else
                                        not available
                                    @endisset
                                </td>

                            </tr>
                            <tr>
                                <th scope="row">Absent Deduction</th>
                                <td>{{$absent_charge}}</td>

                            </tr>
                            <tr>
                                <th scope="row">Total Bonus</th>
                                <td>{{$bonusAmount}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Total Amount</th>
                                <td>{{$salary->amount-$absent_charge+$bonusAmount}} Nrs</td>
                            </tr>

                        </tbody>
                    </table>
                    <br>
                    <br>
                    <br>
                    <hr>
                </div>
            </div>
        </div @endisset @endsection
