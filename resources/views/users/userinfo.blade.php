@extends('layouts.admin')
@section('main-content')
    <div class="container">
        <div class="justify-content-center">
            <div class="">
                <h2 id="heading"> Add User info</h2>
                <p>Fill all form field to go to next step</p>
                <form id="msform" method="post" action="{{route('store',$id)}}" enctype="multipart/form-data">
                    @csrf
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="personal"><strong>Personal</strong></li>
                        <li id="address"><strong>Address</strong></li>
                        <li id="education"><strong>Academic</strong></li>
                        <li id="skill"><strong>Skills/Experience</strong></li>
                        <li id="salary"><strong>Salary</strong></li>
                        <li id="confirm"><strong>Confirm</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->

                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Personal Information:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 1 - 6</h2>
                                </div>
                            </div>
                            <label class="fieldlabels">First Name: *</label>
                            <input type="text" name="fname" placeholder="First Name" />
                            <label class="fieldlabels">Last Name: *</label>
                            <input type="text" name="lname" placeholder="Last Name" />
                            <label class="fieldlabels">Email: *</label>
                            <input type="email" name="email" placeholder="email" />
                            <label class="fieldlabels">Date Of Birth: *</label>
                            <input type="date" name="dob" placeholder="date of birth" />
                            <label class="fieldlabels">Select Gender: *</label>

                            <select name="gender" id="user" class="form-control  mb-5">
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                                <option value="O">Other</option>
                            </select>


                            <label class="fieldlabels">Blood Group: *</label>
                            <input type="text" name="bloodgroup" placeholder="Blood Group" />

                            <label class="fieldlabels">Contact No.: *</label>
                            <input type="text" name="phone" placeholder="Contact No." />

                            <label class="fieldlabels">Citizenship No.: *</label>
                            <input type="text" name="citizen_no" placeholder="Contact No." />

                            <label class="fieldlabels">NID Card No.: *</label>
                            <input type="text" name="nid" placeholder="Alternate Contact No." />

                            <label class="fieldlabels">Select Image.: *</label>
                            <input type="file" name="image" placeholder="image" />

                        </div>
                        <input type="button" name="next" class="next action-button" value="Next" />
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    {{-- end personal infp0 --}}
                    {{-- start address info --}}
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Address Information:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 2 - 6</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <h3>Temporary</h3>
                                    </div>

                                    <label class="fieldlabels">District: *</label>
                                    <input type="text" name="t_district" placeholder="District" />
                                    <label class="fieldlabels">Tole/Stret: *</label>
                                    <input type="text" name="t_tole" placeholder="Tole/Street" />
                                    <label class="fieldlabels">Wad No :*</label>
                                    <input type="number" name="t_wad" placeholder="wad no" />
                                    <label class="fieldlabels">House No: *</label>
                                    <input type="text" name="t_house_no" placeholder="House no" />
                                </div>
                                <div class="col-lg-6">
                                    <div>
                                        <h3>Permanent</h3>
                                    </div>
                                    <label class="fieldlabels">District: *</label>
                                    <input type="text" name="p_district" placeholder="District" />
                                    <label class="fieldlabels">Tole/Stret: *</label>
                                    <input type="text" name="p_tole" placeholder="Tole/Street" />
                                    <label class="fieldlabels">Wad No :*</label>
                                    <input type="number" name="p_wad" placeholder="wad no" />
                                    <label class="fieldlabels">House No: *</label>
                                    <input type="text" name="p_house_no" placeholder="House no" />

                                </div>
                            </div>

                        </div>
                        <input type="button" name="next" class="next action-button" value="Next" />
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    {{-- end address info --}}
                    {{-- start academic info --}}
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Acamedic Information :</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 3 - 6</h2>
                                </div>
                            </div>
                            <div class="container py-5">
                                <div class="col-md-9">
                                    <label class="fieldlabels">univarsity_name: *</label>
                                    <input type="text" name="univarsity_name" placeholder="univarsity_name" />
                                    <label class="fieldlabels">institution_name: *</label>
                                    <input type="text" name="institution_name" placeholder="institution_name" />
                                    <label class="fieldlabels">joined_year:*</label>
                                    <input type="date" name="joined_year" placeholder="wad no" />
                                    <label class="fieldlabels">finished_year:*</label>
                                    <input type="date" name="passed_year" placeholder="wad no" />
                                    <label class="fieldlabels">Vald 1 Documet: *</label>
                                    <input type="file" name="academicdocuments" placeholder="House no" />
                                </div>
                            </div>
                        </div>
                        <input type="button" name="next" class="next action-button" value="Next" />
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    {{-- end academic info --}}
                    {{-- start skill nad experience  --}}
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Skills ANd Experience:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 4 - 6</h2>
                                </div>
                            </div>
                            <div class="container py-5">
                                <div class="card rounded-0 border-0 shadow">
                                    <div class="card-body p-5">
                                        <!--  Bootstrap table-->
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">S.N</th>
                                                        <th scope="col">Title</th>
                                                        <th scope="col">Duration</th>
                                                        <th scope="col">Certificate</th>
                                                        <th scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td><input type="text"  name="name[]" class="form-control" placeholder="Enter Skill/ Experience title">
                                                        </td>
                                                        <td><input type="text" name="duration[]" class="form-control" placeholder="total duration">
                                                        </td>
                                                        <td><input type="file" name="documents[]" class="form-control" placeholder="upload your certificate">
                                                        </td>
                                                        </td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="text-right">
                                            <!-- Add rows button-->
                                            <a class="btn btn-primary rounded-0" id="insertnewSkill"
                                                href="#">Add
                                                new row</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="button" name="next" class="next action-button" value="Next" />
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    {{-- end skill and experience --}}
                    {{-- start salary details --}}
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Salary Details:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 5 - 6</h2>
                                </div>
                            </div>
                            <div class="container py-5">
                                <div class="card rounded-0 border-0 shadow">
                                    <div class="card-body p-5">
                                        <label for="type">Method</label>
                                        <select name="type" id="" class="form-control">
                                            <option value="1">Hourly</option>
                                            <option value="2">monthly</option>
                                        </select>
                                        <label for="amount">Amount</label>
                                        <input type="text" name="amount" class="form-control" placeholder="Salary anount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <input type="button" name="next" class="next action-button" value="Next" /> --}}
                        <button type="submit" class="btn btn-primary" class="next action-button">Submit  </button>
                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    {{-- end salary detals  --}}
                    {{-- filal part --}}
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Finish:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Step 6 - 6</h2>
                                </div>
                            </div> <br><br>
                            <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="{{ asset('img/successs.jpg') }}" class="fit-image">
                                </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                </div>
                                {{-- <input type="button" name="next" class="next action-button" value="finished" /> --}}
                            </div>
                        </div>
                    </fieldset>
                    {{-- final  --}}
                </form>

            </div>
        </div>
    </div>


@endsection
