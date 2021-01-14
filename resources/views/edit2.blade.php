
@extends('layout')
@section('home')
@include('menu')









    
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
        
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>


                <ul class="navbar-nav ml-auto">




                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                            <img class="img-profile rounded-circle" src="http://airbornsecurity.pk/public/images/user.jpg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                           <!-- <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>-->
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->


            <!-- Begin Page Content -->
            <div class="container-fluid">

                            <u><h1 class="h3 mb-4 text-gray-800 ">Registration</h1></u>

                @if (session('status'))

                    @if(session('status')=='emergency')
                        {{$status = session('status') }}
                    @else
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                @endif

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif


                <!-- Page Heading-->
                <form action="/update/{{$data->emp_id}}" method="POST" id="submit-bg" enctype="multipart/form-data">
                @csrf
                @method('PUT')


                    <!----------------------------------Background Info----------------------------------------------------------------->

                    <div class="row">
                        <br>

                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3" data-toggle="collapse" data-target="#BackgrounInfo" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <h6 class="m-0 font-weight-bold text-primary">
                                        Background Information (1 of 7) :
                                    </h6>
                                </div>
                                <div id="BackgrounInfo" class="card-body ">

                                    <div class="form-group row">

                                        <div class="col-6">
                                            <label class="col-form-label" for="date">Date</label>
                                            <input name="date" type="date" class="form-control" value="{{ $data->date }}"
                                                placeholder="Date" required>
                                        </div>

                                        <div class="col-6">
                                            <label class="col-form-label" for="apply_for">Post Applying For</label>
                                            <input name="apply_for" type="text" class="form-control" value="{{ $data->apply_for }}"
                                                placeholder="Post Applying For" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <div class="col-sm-12">
                                            <label class=" col-form-label" for="name">Name(As per CNIC)</label>
                                            <input name="name" type="text" class="form-control" value="{{ $data->name }}" required
                                                placeholder="Name In Full As per CNIC">
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <div class="col-sm-6">
                                            <label class="col-form-label" for="cnic">CNIC</label>
                                            <input name="cnic" value="{{ $data->cnic }}" type="text" pattern="[0-9]{13}"
                                                min="13" max="13" required class="form-control" placeholder="CNIC No.">
                                        </div>

                                        <div class="col-sm-6">
                                            <label class=" col-form-label" for="Gender">Gender</label>
                                            <select value="{{ $data->gender }}" name="gender" type="text" class="form-control" required
                                                    placeholder="Gender">
                                                <option value="M">Male</option>
                                                <option value="F">Female</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <div class="col-4">
                                            <label class=" col-form-label" for="dob">D.O.B</label>
                                            <input value="{{ $data->dob }}" name="dob" type="date" required class="form-control"
                                                placeholder="D.O.B">
                                        </div>

                                        <div class="col-4">
                                            <label class="col-form-label" for="birth_place">Birth Place</label>
                                            <input value="{{ $data->birth_place }}" name="birth_place" type="text" class="form-control"
                                                required placeholder="Place Of Birth">
                                        </div>

                                        <div class="col-sm-4">
                                            <label class=" col-form-label" for="contact">Contact</label>
                                            <input value="{{ $data->contact }}" name="contact" type="text" class="form-control" required
                                                placeholder="03xx1234567">
                                        </div>
                                    </div>


                                    <div class="form-group row">

                                        <div class="col-6">
                                            <label class=" col-form-label" for="religion">Religion</label>
                                            <input value="{{ $data->religion }}" name="religion" type="text" required
                                                class="form-control" placeholder="Religion">
                                        </div>

                                        <div class="col-6">
                                            <label class=" col-form-label" for="nationality">Nationality</label>
                                            <input name="nationality" value="{{ $data->nationality }}" type="text" class="form-control"
                                                required placeholder="Nationality">
                                        </div>
                                    </div>


                                    <div class="form-group row">

                                        <div class="col-sm-6">
                                            <label class="col-form-label" for="blood_group">Bloog Group</label>
                                            <select name="blood_group" value="{{ $data->blood_group}}" type="text" required
                                                    class="form-control">
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B+">B-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-6">
                                            <label class="col-form-label" for="cast">CAST</label>
                                            <input name="cast" value="{{ $data->cast }}" type="text" class="form-control" required
                                                placeholder="CAST">
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <div class="col-sm-6">
                                            <label class="col-form-label" for="Marital_Status">Marital Status</label>
                                            <select value="{{ $data->marital_status }}" name="marital_status" type="text" required
                                                    class="form-control">
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Divorsed">Divorced</option>
                                                <option value="Widow">Widow</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-6">
                                            <label class=" col-form-label" for="spouse">Spouse Name</label>
                                            <input name="spouse" value="{{ $data->spouse }}" type="text" class="form-control" required
                                                placeholder="SPOUSE NAME">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label class=" col-form-label" placeholder="Present Address" for="adrress_present">Address(Present)</label>
                                            <textarea name="address_present" type="text" rows="4" 
                                                    cols="50" required class="form-control" placeholder="Current Address">{{ $data->address_present }}</textarea>
                                        </div>

                                        <div class="col-sm-6">
                                            <label class=" col-form-label" for="address_permanent">Address(Permanent)</label>
                                            <textarea  name="address_permanent" type="text"
                                                    rows="4" cols="50" placeholder="Permanent Address" required
                                                    class="form-control">{{ $data->address_permanent }}</textarea>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-lg-4 offset-8">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">UPDATE</button>
                                            <br>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </form>


                <!----------------------------------EMERGENCY----------------------------------------------------------------->

                <form action="" method="POST" id="submit-emergency">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3" data-toggle="collapse" data-target="#emergency" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <h6 class="m-0 font-weight-bold text-primary">
                                        In Case Of Emergency (2 of 7) :
                                    </h6>
                                </div>
                                <div id="emergency" class="card-body  ">

                                    <div class="form-group row">

                                        <div class="col-6">
                                            <label class="col-form-label" for="next_of_kin">Next Of Kin</label>
                                            <input name="next_of_kin" value="{{ old('next_of_kin') }}" type="text" class="form-control"
                                                placeholder="Next Of Kin" required>
                                        </div>

                                        <div class="col-6">
                                            <label class="col-form-label" for="kin_contact">Contact</label>
                                            <input name="kin_contact" value="{{ old('kin_contact') }}" type="text" class="form-control"
                                                placeholder="Contact of Kin" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <div class="col-sm-12">
                                            <label class=" col-form-label" for="kin_address">Address</label>
                                            <textarea name="kin_address" value="{{ old('kin_address') }}" type="text" rows="2" cols="50"
                                                    class="form-control" required placeholder="Address"></textarea>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-lg-4 offset-8">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">SAVE</button>
                                            <br>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </form>


                <!----------------------------------Education----------------------------------------------------------------->

                <form action="" method="POST" id="submit-education">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3" data-toggle="collapse" data-target="#education" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <h6 class="m-0 font-weight-bold text-primary">
                                        Educational Info (3 of 7) :
                                    </h6>
                                </div>
                                <div id="education" class="card-body  ">

                                    <div class="form-group row">

                                        <div class="col-6">
                                            <label class="col-form-label" for="primary_school">Primary Education</label>
                                            <input name="primary_school" value="{{ old('primary_school') }}" type="text"
                                                class="form-control" placeholder="Primary Education" required>
                                        </div>

                                        <div class="col-6">
                                            <label class="col-form-label" for="primary_date">Date</label>
                                            <input name="primary_date" value="{{ old('primary_date') }}" type="date"
                                                class="form-control" placeholder="Primary Education Date" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <div class="col-6">
                                            <label class="col-form-label" for="secondary_school">Secondary Education</label>
                                            <input name="secondary_school" value="{{ old('secondary_school') }}" type="text"
                                                class="form-control" placeholder="Tertiary Education" required>
                                        </div>

                                        <div class="col-6">
                                            <label class="col-form-label" for="secondary_date">Date</label>
                                            <input name="secondary_date" value="{{ old('secondary_date') }}" type="date"
                                                class="form-control" placeholder="Secondary Education Date" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <div class="col-6">
                                            <label class="col-form-label" for="tertiary_education">Secondary Education</label>
                                            <input name="tertiary_school" value="{{ old('tertiary_school') }}" type="text"
                                                class="form-control" placeholder="Tertiary Education">
                                        </div>

                                        <div class="col-6">
                                            <label class="col-form-label" for="secondary_date">Date</label>
                                            <input name="tertiary_date" value="{{ old('tertiary_date') }}" type="date"
                                                class="form-control" placeholder="Tertiary Education Date">
                                        </div>
                                    </div>


                                    <div class="form-group row">

                                        <div class="col-sm-12">
                                            <label class=" col-form-label" for="profession">Profession</label>
                                            <input name="profession" value="{{ old('profession') }}" type="text" class="form-control"
                                                required placeholder="Profession">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-lg-4 offset-8">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">SAVE</button>
                                            <br>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </form>

                <!----------------------------------Experience----------------------------------------------------------------->
                <form action="" method="POST" id="submit-experience">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3" data-toggle="collapse" data-target="#experience" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <h6 class="m-0 font-weight-bold text-primary">
                                        Experience Info (4 of 7)
                                    </h6>
                                </div>
                                <div id="experience" class="card-body  ">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                            <tr class="bg-gradient-light">
                                                <th>Name Of Organization</th>
                                                <th>Title Held</th>
                                                <th>From</th>
                                                <th>to</th>

                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td><input name="organization1" value="{{ old('organization1') }}" type="text"
                                                        class="form-control" required placeholder="Organization"></td>
                                                <td><input name="position1" value="{{ old('position1') }}" type="text"
                                                        class="form-control" required placeholder="Position"></td>
                                                <td><input name="from1" value="{{ old('from1') }}" type="date" class="form-control"
                                                        required placeholder="From"></td>
                                                <td><input name="to1" value="{{ old('to1') }}" type="date" class="form-control" required
                                                        placeholder="To"></td>

                                            </tr>
                                            <tr>
                                                <td><input name="organization2" value="{{ old('organization2') }}" type="text"
                                                        class="form-control" placeholder="Organization"></td>
                                                <td><input name="position2" value="{{ old('position2') }}" type="text"
                                                        class="form-control" placeholder="Position"></td>
                                                <td><input name="from2" value="{{ old('from2') }}" type="date" class="form-control"
                                                        placeholder="From"></td>
                                                <td><input name="to2" value="{{ old('to2') }}" type="date" class="form-control"
                                                        placeholder="To"></td>

                                            </tr>
                                            <tr>
                                                <td><input name="organization3" value="{{ old('organization3') }}" type="text"
                                                        class="form-control" placeholder="Organization"></td>
                                                <td><input name="position3" type="text" class="form-control" placeholder="Position">
                                                </td>
                                                <td><input name="from3" value="{{ old('from3') }}" type="date" class="form-control"
                                                        placeholder="From"></td>
                                                <td><input name="to3" value="{{ old('to3') }}" type="date" class="form-control"
                                                        placeholder="To"></td>

                                            </tr>
                                            <tr>
                                                <td><input name="organization4" value="{{ old('organization4') }}" type="text"
                                                        class="form-control" placeholder="Organization"></td>
                                                <td><input name="position4" type="text" class="form-control" placeholder="Position">
                                                </td>
                                                <td><input name="from4" value="{{ old('from4') }}" type="date" class="form-control"
                                                        placeholder="From"></td>
                                                <td><input name="to4" value="{{ old('to4') }}" type="date" class="form-control"
                                                        placeholder="To"></td>

                                            </tr>
                                            <tr>
                                                <td><input name="organization5" value="{{ old('organization5') }}" type="text"
                                                        class="form-control" placeholder="Organization"></td>
                                                <td><input name="position5" type="text" class="form-control" placeholder="Position">
                                                </td>
                                                <td><input name="from5" value="{{ old('from5') }}" type="date" class="form-control"
                                                        placeholder="From"></td>
                                                <td><input name="to5" value="{{ old('to5') }}" type="date" class="form-control"
                                                        placeholder="To"></td>

                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-4 offset-8">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">SAVE</button>
                                            <br>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <!----------------------------------Physical Info----------------------------------------------------------------->
                <form action="" method="POST" id="submit-physical">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3" data-toggle="collapse" data-target="#physical" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <h6 class="m-0 font-weight-bold text-primary">
                                        Physical Information (5 of 7)
                                    </h6>
                                </div>
                                <div id="physical" class="card-body  ">

                                    <div class="form-group row">

                                        <div class="col-4">
                                            <label class="col-form-label" for="height">Height</label>
                                            <input name="height" value="{{ old('height') }}" type="text" class="form-control"
                                                placeholder="Height" required>
                                        </div>

                                        <div class="col-4">
                                            <label class="col-form-label" for="weight">Weight</label>
                                            <input name="weight" value="{{ old('weight') }}" type="text" class="form-control"
                                                placeholder="Weight in KG" required>
                                        </div>

                                        <div class="col-4">
                                            <label class="col-form-label" for="hair_eye_color">Hair/Eye Color</label>
                                            <input name="hair_eye_color" value="{{ old('hair_eye_color') }}" type="text"
                                                class="form-control" placeholder="Brown/Black" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <div class="col-sm-12">
                                            <label class=" col-form-label" for="disabilities">Dissabilities</label>
                                            <textarea name="disabilities" value="{{ old('disabilities') }}" type="text" rows="2"
                                                    cols="50" class="form-control" placeholder="Dissabilities"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-4 offset-8">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">SAVE</button>
                                            <br>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <!----------------------------------Medical Info----------------------------------------------------------------->
                <form action="" method="POST" id="submit-medical">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3" data-toggle="collapse" data-target="#medical" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <h6 class="m-0 font-weight-bold text-primary">
                                        Medical Information (6 of 7)
                                    </h6>
                                </div>
                                <div id="medical" class="card-body  ">


                                    <div class="form-group row">

                                        <div class="col-sm-12">
                                            <label class=" col-form-label" for="medication">Applicant is on any Medication</label>
                                            <textarea name="medication" value="{{ old('medication') }}" type="text" rows="2" cols="50"
                                                    class="form-control" placeholder="Applicant is on any Medication"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <div class="col-sm-12">
                                            <label class=" col-form-label" for="illness">Suffering From Illness</label>
                                            <textarea name="illness" value="{{ old('illness') }}" type="text" rows="2" cols="50"
                                                    class="form-control" placeholder="Suffering From Illness"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-4 offset-8">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">SAVE</button>
                                            <br>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <!----------------------------------Witness Info----------------------------------------------------------------->
                <form action="" method="POST" id="submit-witness">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3" data-toggle="collapse" data-target="#witness" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    <h6 class="m-0 font-weight-bold text-primary">
                                        Witness Information (7 of 7)
                                    </h6>
                                </div>
                                <div id="witness" class="card-body ">


                                    <h6 class="m-0 font-weight-bold text-primary">
                                        Witness No. 1
                                    </h6>
                                    <div class="form-group row">

                                        <div class="col-sm-6">
                                            <label class=" col-form-label" for="witness1_name"></label>
                                            <input name="witness1_name" value="{{ old('witness1_name') }}" type="text"
                                                class="form-control" placeholder="Name of Witness 1 ">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class=" col-form-label" for="witness1_cnic"></label>
                                            <input name="witness1_cnic" value="{{ old('witness1_cnic') }}" type="text"
                                                class="form-control" placeholder="Cnic of Witness 1 ">
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <div class="col-sm-6">
                                            <label class=" col-form-label" for="witness1_present_address">Present Address of Witness
                                                1</label>
                                            <textarea name="witness1_present_address" value="{{ old('witness1_present_address') }}"
                                                    type="text" rows="2" cols="50" class="form-control"
                                                    placeholder="Present Address of Witness 1"></textarea>
                                        </div>

                                        <div class="col-sm-6">
                                            <label class=" col-form-label" for="witness1_permanent_address">Permanent Address of Witness
                                                1</label>
                                            <textarea name="witness1_permanent_address" value="{{ old('witness1_permanent_address') }}"
                                                    type="text" rows="2" cols="50" class="form-control"
                                                    placeholder="Permanent Address of Witness 1"></textarea>
                                        </div>
                                    </div>


                                    <h6 class="m-0 font-weight-bold text-primary">
                                        Witness No. 2
                                    </h6>
                                    <div class="form-group row">

                                        <div class="col-sm-6">
                                            <label class=" col-form-label" for="witness1_name"></label>
                                            <input name="witness2_name" value="{{ old('witness2_name') }}" type="text"
                                                class="form-control" placeholder="Name of Witness 2 ">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class=" col-form-label" for="witness2_cnic"></label>
                                            <input name="witness2_cnic" value="{{ old('witness2_cnic') }}" type="text"
                                                class="form-control" placeholder="Cnic of Witness 2 ">
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <div class="col-sm-6">
                                            <label class=" col-form-label" for="witness2_present_address">Present Address of Witness
                                                1</label>
                                            <textarea name="witness2_present_address" value="{{ old('witness2_present_address') }}"
                                                    type="text" rows="2" cols="50" class="form-control"
                                                    placeholder="Present Address of Witness 2"></textarea>
                                        </div>

                                        <div class="col-sm-6">
                                            <label class=" col-form-label" for="witness2_permanent_address">Permanent Address of Witness
                                                2</label>
                                            <textarea name="witness2_permanent_address" value="{{ old('witness2_permanent_address') }}"
                                                    type="text" rows="2" cols="50" class="form-control"
                                                    placeholder="Permanent Address of Witness 2"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-lg-4 offset-8">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">SAVE</button>
                                            <br>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>


                </form>


                <!-- <script>

                    $('#submit-witness').hide();
                    $('#submit-medical').hide();
                    $('#submit-physical').hide();
                    $('#submit-experience').hide();
                    $('#submit-education').hide();
                    $('#submit-emergency').hide();



                </script> -->




            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2019</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

@endsection('home')





@section('logout')

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('logout') }}">{{ __('Logout') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection('logout')
