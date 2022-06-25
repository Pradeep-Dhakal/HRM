@extends('layouts.admin')
@section('main-content')
    <div class="container contact-form">
        <div class="contact-image d-flex justify-content-between">
            <div>
                @include('message.response')
                <form method="POST" action="{{ route('leave.store') }}">
                    @csrf
                    {{-- @method('PUT') --}}
                    <h3>Write Your Leave Application With Reason </h3>
                    <br>
                    <div class="">
                        <div class="form-group">
                            <label for="">Subject</label>
                            <input type="text" name="subject" class="form-control" placeholder="Subject" value="" />
                        </div>
                        <div class="form-group">
                            <label for="">Date For</label>
                            <input type="date" name="date" class="form-control" id="date_picker" placeholder="date"
                                value="" />
                        </div>

                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="message" id="document" class="ckeditor form-control" placeholder=""></textarea>
                        </div>

                        <div class="pull-left mx-4">
                            <button type="submit" class="btn btn-primary btn-lg">
                                Send
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('.ckeditor').ckeditor();
                });
            </script>
            <script language="javascript">
                var today = new Date();
                var dd = String(today.getDate()).padStart(2, '0');
                var mm = String(today.getMonth() + 1).padStart(2, '0');
                var yyyy = today.getFullYear();

                today = yyyy + '-' + mm + '-' + dd;
                $('#date_picker').attr('min', today);
            </script>
        @endsection
