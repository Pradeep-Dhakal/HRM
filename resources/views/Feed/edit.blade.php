@extends('layouts.admin')
@section('main-content')
    <div class="container mt-4 mb-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-8">
                <div class="feed p-2">
                    <form action="{{ route('Feed.update',$data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class=" justify-content-between align-items-center p-2 bg-white border">

                            <div class="feed-text px-2">
                                <h6 class="text-black-50 mt-2">What's on your mind</h6>
                                <textarea name="description" value="{{old('description')}}"  id="" cols="93" rows="3" required>{{$data->description}} {{ old('description') }}
                                </textarea>
                            </div>
                            <div class="d-flex flex-row">
                                <div>
                                    @isset($data->post_image)
                                    <div>
                                        <img src="{{asset('Image/'.$data->post_image)}}" alt="">
                                    </div>

                                    @endisset
                                </div>
                                <div class="p-4">
                                    <input type="file" name="image" id="" value="{{asset('Image/'.$data->post_image)}}">
                                </div>

                            </div>
                            <div class="p-4 ml-5">
                                <button type="submit" class="btn btn-primary">Update Post</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
