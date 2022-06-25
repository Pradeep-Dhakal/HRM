@extends('layouts.admin')
@section('main-content')
    <div class="container mt-4 mb-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-8">
                <div class="feed p-2">
                    <form action="{{ route('Feed.store') }}" method="POSt" enctype="multipart/form-data">
                        @csrf
                        <div class=" justify-content-between align-items-center p-2 bg-white border">

                            <div class="feed-text px-2">
                                <h6 class="text-black-50 mt-2">What's on your mind</h6>
                                <textarea name="description" id="" cols="93" rows="3"></textarea>
                            </div>
                            <div class="d-flex flex-row">
                                <div class="p-4">
                                    <input type="file" name="image" id="">
                                </div>

                                <div class="p-4 ml-5">
                                    <button type="submit" class="btn btn-primary">Post</button>
                                </div>

                            </div>

                        </div>
                    </form>
                    @foreach ($user as $post)
                        @if (!$post->post_image)
                            <div class="bg-white border mt-2">
                                <div>
                                    <div
                                        class="d-flex flex-row justify-content-between align-items-center p-2 border-bottom">
                                        <div class="d-flex flex-row align-items-center feed-text px-2"><img
                                                class="rounded-circle" src="https://i.imgur.com/aoKusnD.jpg" width="45">
                                            <div class="d-flex flex-column flex-wrap ml-2"><span
                                                    class="font-weight-bold">{{ $post->users->name }}</span><span
                                                    class="text-black-50 time">{{ $post->created_at }}</span></div>
                                        </div>

                                        <div class="feed-icon px-2"><i class="fa fa-ellipsis-v text-black-50"></i></div>
                                    </div>
                                </div>
                                <div class="p-2 px-3"><span>
                                        {{ $post->description }}</span></div>
                                <div class="d-flex justify-content-end socials p-2 py-3"><i class="fa fa-thumbs-up"></i><i
                                        class="fa fa-comments-o"></i><i class="fa fa-share"></i></div>
                            </div>
                        @else
                            {{-- ------------------------------------------------------------- --}}

                            <div class="bg-white border mt-2">
                                <div>
                                    <div
                                        class="d-flex flex-row justify-content-between align-items-center p-2 border-bottom">
                                        <div class="d-flex flex-row align-items-center feed-text px-2"><img
                                                class="rounded-circle" src="https://i.imgur.com/aoKusnD.jpg" width="45">
                                            <div class="d-flex flex-column flex-wrap ml-2"><span
                                                    class="font-weight-bold">{{ $post->users->name }}</span><span class="text-black-50 time">{{ $post->created_at }}</span></div>
                                        </div>
                                        <div class="feed-icon px-2"><i class="fa fa-ellipsis-v text-black-50"></i></div>
                                    </div>
                                </div>
                                <span>{{$post->description}}</span>
                                <hr>
                                <div class="feed-image p-2 px-3"><img class="img-fluid img-responsive"

                                        src="{{asset('Image/'. $post->post_image)}}"></div>
                                <div class="d-flex justify-content-end socials p-2 py-3"><i class="fa fa-thumbs-up"></i><i
                                        class="fa fa-comments-o"></i><i class="fa fa-share"></i></div>
                            </div>
                        @endif
                    @endforeach


                </div>
            </div>
        </div>
    </div>
@endsection
