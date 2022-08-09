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
                            <input type="month">
                        </td>
                        <td><button class="btn btn-primary" type="submit" bt>Submit</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
        <hr>
        <div>
            @isset($filterusers)

            {{$filterusers->name}}
            @endisset
        </div>
    </div>
@endsection
