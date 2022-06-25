@extends('layouts.admin')
@section('main-content')
    <div class="container contact-form">
        <div class="contact-image d-flex justify-content-between">
            <div>
            {{-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRzYTbYm5wZp6foaWzwx5yxrto1xHLOihd71ye9xesUng&s"
                alt="rocket_contact" /> --}}
            </div>
                <div>
                <a href="{{route('attendance.index')}}" class="btn btn-info d-inlilne-block p-4"> My Attendanc Records</a>
            </div>
        </div>
        <form method="POST" action="{{route('attendance.store')}}">
            {{-- @method('PUT') --}}
            @csrf

            <h3>Record Your Attendance</h3>
            <br>
            @include('attendance.clock')

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="worklocation" class="form-control" placeholder="Work From?" value="" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="remarks" class="form-control" placeholder="Remarks" value="" />
                    </div>

                    <div class="row">
                        <div class="pull-left mx-4">
                            <button type="submit" class="btn btn-primary btn-lg">
                                check in

                            </button>
                        </div>
                        <div class="pull-right">

                            <a href=""> <button type="submit" class="btn btn-danger btn-lg">
                                check out
                            </button>
                        </a>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea name="description" class="form-control" placeholder="Description of todays work"
                            style="width: 100%; height: 150px;"></textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
