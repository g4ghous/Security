<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <title>ZISS</title>

    <!-- Custom fonts for this template-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="http://airbornsecurity.pk/public/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="http://airbornsecurity.pk/public/js/pace/themes/red/pace-theme-center-atom.css" rel="stylesheet">
    <link href="http://airbornsecurity.pk/public/js/jquery/jquery-confirm.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://airbornsecurity.pk/public/js/DataTable/datatables.min.css"/>
    <script src="http://airbornsecurity.pk/public/js/jquery/jquery.js"></script>
    <script src="http://airbornsecurity.pk/public/js/jquery-easing/jquery.easing.min.js"></script>
    <script type="text/javascript" src="http://airbornsecurity.pk/public/js/DataTable/datatables.min.js"></script>
    <script src="http://airbornsecurity.pk/public/js/pace/pace.min.js"></script>
    <script src="http://airbornsecurity.pk/public/js/jquery/jquery-confirm.js"></script>






</head>

<body id="page-top">


<!-- Page Wrapper -->
<div id="wrapper">

   <!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fa fa-smile-o"></i>
    </div>
    <div class="sidebar-brand-text mx-3">ZISS</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<div class="sidebar-heading">
    Registration
</div>
<li class="nav-item">
    <a class="nav-link" href="/home">
        <i class="fa fa-user"></i>
        <span>Register</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="/uniform">
        <i class="fa fa-user"></i>
        <span>Uniform Issuance</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="/employee">
        <i class="fa fa-users"></i>
        <span>Employees</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<!-- <div class="sidebar-heading">
    Peoples
</div> -->

<!-- Nav Item - Pages Collapse Menu -->
<!-- <li class="nav-item">
    <a class="nav-link " href="/search" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-search"></i>
        <span>Search</span>
    </a>
</li> -->


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0 fa fa-arrow-right" id="sidebarToggle"></button>
    <style>
    .sidebar-dark #sidebarToggle::after {
display:none !important;}

.fa-arrow-right:before {
content: "\f061";
color: #dddee0;
}
    </style>
</div>

</ul>
<!-- End of Sidebar -->





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


    <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#bg" role="tab" aria-controls="home" aria-selected="true">Background Info</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#emergence" role="tab" aria-controls="profile" aria-selected="false">Emergency Info</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#education" role="tab" aria-controls="contact" aria-selected="false">Education Info</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link " id="home-tab" data-toggle="tab" href="#experience" role="tab" aria-controls="home" aria-selected="true">Experience Info</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#physical" role="tab" aria-controls="profile" aria-selected="false">Physical Info</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#medical" role="tab" aria-controls="contact" aria-selected="false">Medical Info</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#witness" role="tab" aria-controls="contact" aria-selected="false">Witness Info</a>
  </li>
</ul>

<form action="/update/{{$data->emp_id}}" method="POST" id="submit-bg" enctype="multipart/form-data">
    @csrf
    <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="bg" role="tabpanel" aria-labelledby="home-tab">

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

                                    



                                </div>
                            </div>
                        </div>
                    </div>

    </div>

  <div class="tab-pane fade" id="emergence" role="tabpanel" aria-labelledby="profile-tab">

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
                                            <input name="next_of_kin" value="{{ $data->next_of_kin }}" type="text" class="form-control"
                                                placeholder="Next Of Kin" required>
                                        </div>

                                        <div class="col-6">
                                            <label class="col-form-label" for="kin_contact">Contact</label>
                                            <input name="kin_contact" value="{{ $data->kin_contact }}" type="text" class="form-control"
                                                placeholder="Contact of Kin" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <div class="col-sm-12">
                                            <label class=" col-form-label" for="kin_address">Address</label>
                                            <textarea name="kin_address" type="text" rows="2" cols="50"
                                                    class="form-control" required placeholder="Address">{{ $data->kin_address }}</textarea>
                                        </div>
                                    </div>





                                </div>
                            </div>
                        </div>
                    </div>


  </div>

                    <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="contact-tab">

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
                                        <input name="primary_school" value="{{ $data->primary_school }}" type="text"
                                            class="form-control" placeholder="Primary Education" required>
                                    </div>

                                    <div class="col-6">
                                        <label class="col-form-label" for="primary_date">Date</label>
                                        <input name="primary_date" value="{{ $data->primary_date }}" type="date"
                                            class="form-control" placeholder="Primary Education Date" required>
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-6">
                                        <label class="col-form-label" for="secondary_school">Secondary Education</label>
                                        <input name="secondary_school" value="{{ $data->secondary_school }}" type="text"
                                            class="form-control" placeholder="Tertiary Education" required>
                                    </div>

                                    <div class="col-6">
                                        <label class="col-form-label" for="secondary_date">Date</label>
                                        <input name="secondary_date" value="{{ $data->secondary_date }}" type="date"
                                            class="form-control" placeholder="Secondary Education Date" required>
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-6">
                                        <label class="col-form-label" for="tertiary_education">Secondary Education</label>
                                        <input name="tertiary_school" value="{{ $data->tertiary_school }}" type="text"
                                            class="form-control" placeholder="Tertiary Education">
                                    </div>

                                    <div class="col-6">
                                        <label class="col-form-label" for="secondary_date">Date</label>
                                        <input name="tertiary_date" value="{{ $data->tertiary_date }}" type="date"
                                            class="form-control" placeholder="Tertiary Education Date">
                                    </div>
                                </div>


                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        <label class=" col-form-label" for="profession">Profession</label>
                                        <input name="profession" value="{{ $data->profession }}" type="text" class="form-control"
                                            required placeholder="Profession">
                                    </div>
                                </div>





                            </div>
                        </div>
                    </div>
                    </div>


                    </div>

                    <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="home-tab">

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
                                            <td><input name="organization1" value="{{ $data->organization1 }}" type="text"
                                                    class="form-control" required placeholder="Organization"></td>
                                            <td><input name="position1" value="{{ $data->position1 }}" type="text"
                                                    class="form-control" required placeholder="Position"></td>
                                            <td><input name="from1" value="{{ $data->from1 }}" type="date" class="form-control"
                                                    required placeholder="From"></td>
                                            <td><input name="to1" value="{{ $data->to1 }}" type="date" class="form-control" required
                                                    placeholder="To"></td>

                                        </tr>
                                        <tr>
                                            <td><input name="organization2" value="{{ $data->organization2 }}" type="text"
                                                    class="form-control" placeholder="Organization"></td>
                                            <td><input name="position2" value="{{ $data->position2 }}" type="text"
                                                    class="form-control" placeholder="Position"></td>
                                            <td><input name="from2" value="{{ $data->from2 }}" type="date" class="form-control"
                                                    placeholder="From"></td>
                                            <td><input name="to2" value="{{ $data->to2 }}" type="date" class="form-control"
                                                    placeholder="To"></td>

                                        </tr>
                                        <tr>
                                            <td><input name="organization3" value="{{ $data->organization3 }}" type="text"
                                                    class="form-control" placeholder="Organization"></td>
                                            <td><input name="position3" type="text" class="form-control" placeholder="Position">
                                            </td>
                                            <td><input name="from3" value="{{ $data->from3 }}" type="date" class="form-control"
                                                    placeholder="From"></td>
                                            <td><input name="to3" value="{{ $data->to3 }}" type="date" class="form-control"
                                                    placeholder="To"></td>

                                        </tr>
                                        <tr>
                                            <td><input name="organization4" value="{{ $data->organization4 }}" type="text"
                                                    class="form-control" placeholder="Organization"></td>
                                            <td><input name="position4" type="text" class="form-control" placeholder="Position">
                                            </td>
                                            <td><input name="from4" value="{{ $data->from4 }}" type="date" class="form-control"
                                                    placeholder="From"></td>
                                            <td><input name="to4" value="{{ $data->to4 }}" type="date" class="form-control"
                                                    placeholder="To"></td>

                                        </tr>
                                        <tr>
                                            <td><input name="organization5" value="{{ $data->organization5 }}" type="text"
                                                    class="form-control" placeholder="Organization"></td>
                                            <td><input name="position5" type="text" class="form-control" placeholder="Position">
                                            </td>
                                            <td><input name="from5" value="{{ $data->from5 }}" type="date" class="form-control"
                                                    placeholder="From"></td>
                                            <td><input name="to5" value="{{ $data->to5 }}" type="date" class="form-control"
                                                    placeholder="To"></td>

                                        </tr>
                                        </tbody>
                                    </table>
                                </div>




                            </div>
                        </div>
                    </div>
                    </div>

                    </div>
                    <div class="tab-pane fade" id="physical" role="tabpanel" aria-labelledby="profile-tab">

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
                                        <input name="height" value="{{ $data->height }}" type="text" class="form-control"
                                            placeholder="Height" required>
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label" for="weight">Weight</label>
                                        <input name="weight" value="{{ $data->weight }}" type="text" class="form-control"
                                            placeholder="Weight in KG" required>
                                    </div>

                                    <div class="col-4">
                                        <label class="col-form-label" for="hair_eye_color">Hair/Eye Color</label>
                                        <input name="hair_eye_color" value="{{ $data->hair_eye_color }}" type="text"
                                            class="form-control" placeholder="Brown/Black" required>
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        <label class=" col-form-label" for="disabilities">Dissabilities</label>
                                        <textarea name="disabilities"  type="text" rows="2"
                                                cols="50" class="form-control" placeholder="Dissabilities">{{ $data->disabilities }}</textarea>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                    </div>

                    </div>
                    <div class="tab-pane fade" id="medical" role="tabpanel" aria-labelledby="contact-tab">

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
                                        <textarea name="medication"  type="text" rows="2" cols="50"
                                                class="form-control" placeholder="Applicant is on any Medication">{{ $data->medication }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        <label class=" col-form-label" for="illness">Suffering From Illness</label>
                                        <textarea name="illness"  type="text" rows="2" cols="50"
                                                class="form-control" placeholder="Suffering From Illness">{{ $data->illness }}</textarea>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                    </div>

                    </div>
                    <div class="tab-pane fade" id="witness" role="tabpanel" aria-labelledby="contact-tab">

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
                                        <input name="witness1_name" value="{{ $data->witness1_name }}" type="text"
                                            class="form-control" placeholder="Name of Witness 1 ">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class=" col-form-label" for="witness1_cnic"></label>
                                        <input name="witness1_cnic" value="{{ $data->witness1_cnic }}" type="text"
                                            class="form-control" placeholder="Cnic of Witness 1 ">
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-sm-6">
                                        <label class=" col-form-label" for="witness1_present_address">Present Address of Witness
                                            1</label>
                                        <textarea name="witness1_present_address"
                                                type="text" rows="2" cols="50" class="form-control"
                                                placeholder="Present Address of Witness 1">{{ $data->witness1_present_address }}</textarea>
                                    </div>

                                    <div class="col-sm-6">
                                        <label class=" col-form-label" for="witness1_permanent_address">Permanent Address of Witness
                                            1</label>
                                        <textarea name="witness1_permanent_address"
                                                type="text" rows="2" cols="50" class="form-control"
                                                placeholder="Permanent Address of Witness 1">{{ $data->witness1_permanent_address }}</textarea>
                                    </div>
                                </div>


                                <h6 class="m-0 font-weight-bold text-primary">
                                    Witness No. 2
                                </h6>
                                <div class="form-group row">

                                    <div class="col-sm-6">
                                        <label class=" col-form-label" for="witness1_name"></label>
                                        <input name="witness2_name" value="{{ $data->witness2_name }}" type="text"
                                            class="form-control" placeholder="Name of Witness 2 ">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class=" col-form-label" for="witness2_cnic"></label>
                                        <input name="witness2_cnic" value="{{ $data->witness2_cnic }}" type="text"
                                            class="form-control" placeholder="Cnic of Witness 2 ">
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-sm-6">
                                        <label class=" col-form-label" for="witness2_present_address">Present Address of Witness
                                            1</label>
                                        <textarea name="witness2_present_address"
                                                type="text" rows="2" cols="50" class="form-control"
                                                placeholder="Present Address of Witness 2">{{ $data->witness2_present_address }}</textarea>
                                    </div>

                                    <div class="col-sm-6">
                                        <label class=" col-form-label" for="witness2_permanent_address">Permanent Address of Witness
                                            2</label>
                                        <textarea name="witness2_permanent_address"
                                                type="text" rows="2" cols="50" class="form-control"
                                                placeholder="Permanent Address of Witness 2">{{ $data->witness2_permanent_address }}</textarea>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>
                    </div>

                    </div>
                    </div>
                    <div class="form-group row">
                                    <div class="col-lg-4 offset-8">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">UPDATE</button>
                                        <br>
                                    </div>
                     </div>




 </form>

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






</div>
<!-- End of Page Wrapper -->
<!-- Bootstrap core JavaScript-->

<script src="http://airbornsecurity.pk/public/js/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->



<!-- Custom scripts for all pages-->
<script src="http://airbornsecurity.pk/public/js/sb-admin-2.min.js"></script>
<!-- Custom styles for this page -->

</body>

</html>
