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
        <form method="POST" action="{{route('attendance.update',$attendance->id)}}">
            @method('PUT')
            @csrf
            <h3>Record Your Attendance</h3>
            <br>
            @include('attendance.clock')

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="worklocation" class="form-control" placeholder="Work From?" value="{{$attendance->Work_location}}" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="remarks" class="form-control" placeholder="Remarks" value="{{$attendance->remarks}}"  />
                    </div>

                        <div class="pull-right">

                            <button type="submit" class="btn btn-danger btn-lg">
                                check out
                            </button>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <textarea name="description" class="form-control" placeholder="Description of todays work"
                            style="width: 100%; height: 150px;">{{$attendance->description}}</textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
