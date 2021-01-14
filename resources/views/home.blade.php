<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Air-Born Security</title>

    <!-- Custom fonts for this template-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="http://airbornsecurity.pk/public/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="http://airbornsecurity.pk/public/js/pace/themes/red/pace-theme-center-atom.css" rel="stylesheet">
    <link href="http://airbornsecurity.pk/public/js/jquery/jquery-confirm.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://airbornsecurity.pk/public/js/DataTable/datatables.min.css" />
    <script src="http://airbornsecurity.pk/public/js/jquery/jquery.js"></script>
    <script src="http://airbornsecurity.pk/public/js/jquery-easing/jquery.easing.min.js"></script>
    <script type="text/javascript" src="http://airbornsecurity.pk/public/js/DataTable/datatables.min.js"></script>
    <script src="http://airbornsecurity.pk/public/js/pace/pace.min.js"></script>
    <script src="http://airbornsecurity.pk/public/js/jquery/jquery-confirm.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>







</head>

<body id="page-top">


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon ">
                    <!-- <i class="fa fa-smile-o"></i> -->
                    <img style="width:60px;" src="http://airbornsecurity.pk/public/images/logo.png">
                </div>
                <div class="sidebar-brand-text mx-3">Air-Born Security</div>
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
                    display: none !important;
                }

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

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
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

                @include('forms')

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

    <!-- End of Main Content -->


    </div>
    <!-- End of Content Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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

    <script>
    $(":input").inputmask();

   </script>

    <!-- Custom scripts for all pages-->
    <script src="http://airbornsecurity.pk/public/js/sb-admin-2.min.js"></script>
    <!-- Custom styles for this page -->

</body>

<script>
    $(document).ready(function () {


        $.ajaxSetup({

            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

            }

        });



        function notify_me(title,content,color){
            $.confirm({
                title: title,
                content: content,
                type: color,
                typeAnimated: true,
                buttons: {
                    close: function () {
                    }
                }
            });
        }

        function form_reset(){
            $('#submit-bg')[0].reset();
            $('#submit-education')[0].reset();
            $('#submit-emergency')[0].reset();
            $('#submit-experience')[0].reset();
            $('#submit-medical')[0].reset();
            $('#submit-physical')[0].reset();
            $('#submit-witness')[0].reset();
        }



        $("#submit-bg").submit(function (e) {


            e.preventDefault();
            Pace.start();
           
            var date = $("input[name=date]").val();
            var apply_for = $("input[name=apply_for]").val();
            var name = $("input[name=name]").val();
            var cnic = $("input[name=cnic]").val();
            var dob = $("input[name=dob]").val();
            var gender = $("select[name=gender]").children("option:selected").val();
            var birth_place = $("input[name=birth_place]").val();
            var contact = $("input[name=contact]").val();
            var religion = $("input[name=religion]").val();
            var nationality = $("input[name=nationality]").val();
            var blood_group = $("select[name=blood_group]").children("option:selected").val();
            var cast = $("input[name=cast]").val();
            var marital_status = $("select[name=marital_status]").children("option:selected").val();
            var spouse = $("input[name=spouse]").val();
            var address_present = $("textarea[name=address_present]").val();
            var address_permanent = $("textarea[name=address_permanent]").val();


            console.log({
                date: date, apply_for: apply_for, name: name, cnic: cnic, dob: dob,
                gender: gender, birth_place: birth_place, contact: contact, religion: religion,
                nationality: nationality, blood_group: blood_group, cast: cast, marital_status: marital_status,
                spouse: spouse, address_present: address_present, address_permanent: address_permanent
            });


            $.ajax({

                type: 'POST',

                url: '/home/save_background',

                data: {
                    date: date, apply_for: apply_for, name: name, cnic: cnic, dob: dob,
                    gender: gender, birth_place: birth_place, contact: contact, religion: religion,
                    nationality: nationality, blood_group: blood_group, cast: cast, marital_status: marital_status,
                    spouse: spouse, address_present: address_present, address_permanent: address_permanent
                },


                success: function (data) {

                    console.log(data.status);

                    if (data.status == 'error') {
                        console.log(data.error);
                        notify_me('Error !!',data.error,'red');
                    } else if (data.status == 'val_errors') {
                        console.log(data.errors);
                        notify_me('Error !!',data.errors,'red');
                    } else if (data.status == 'success') {

                        $('#submit-bg').hide();
                        $('#submit-emergency').show();
                        //form_reset();
                        //notify_me('SUCCESS','Data Entered Sucessfully !!','green');
                    } else {
                        console.log(data.errors);
                        notify_me('Something Went Worng !!',data.errors,'red');
                    }


                    Pace.stop();


                }

            });


        });


        $("#submit-emergency").submit(function (e) {


            e.preventDefault();
            Pace.start();


            var cnic = $("input[name=cnic]").val();
            var next_of_kin = $("input[name=next_of_kin]").val();
            var kin_contact = $("input[name=kin_contact]").val();
            var kin_address = $("textarea[name=kin_address]").val();


            console.log({
                cnic: cnic, next_of_kin: next_of_kin,
                kin_contact: kin_contact, kin_address: kin_address
            });


            $.ajax({

                type: 'POST',

                url: '/home/save_emergency',

                data: {
                    cnic: cnic, next_of_kin: next_of_kin,
                    kin_contact: kin_contact, kin_address: kin_address
                },


                success: function (data) {

                    console.log(data.status);

                    if (data.status == 'error') {
                        console.log(data.error);
                        notify_me('Error !!',data.error,'red');
                    } else if (data.status == 'val_errors') {
                        console.log(data.errors);
                        notify_me('Error !!',data.errors,'red');
                    } else if (data.status == 'success') {

                        $('#submit-emergency').hide();
                        $('#submit-education').show();
                        //form_reset();
                        //notify_me('SUCCESS','Data Entered Sucessfully !!','green');
                    } else {
                        console.log(data.errors);
                        notify_me('Something Went Worng !!',data.errors,'red');
                    }


                    Pace.stop();


                }

            });


        });

        $("#submit-education").submit(function (e) {


            e.preventDefault();
            Pace.start();


            var cnic = $("input[name=cnic]").val();
            var primary_school = $("input[name=primary_school]").val();
            var primary_date = $("input[name=primary_date]").val();
            var secondary_school = $("input[name=secondary_school]").val();
            var secondary_date = $("input[name=secondary_date]").val();
            var tertiary_school = $("input[name=tertiary_school]").val();
            var tertiary_date = $("input[name=tertiary_date]").val();
            var profession = $("input[name=profession]").val();


            console.log({
                cnic: cnic, primary_school: primary_school, primary_date: primary_date,
                secondary_school: secondary_school, secondary_date: secondary_date,
                tertiary_school: tertiary_school, tertiary_date: tertiary_date, profession: profession
            });


            $.ajax({

                type: 'POST',

                url: '/home/save_education',

                data: {
                    cnic: cnic, primary_school: primary_school, primary_date: primary_date,
                    secondary_school: secondary_school, secondary_date: secondary_date,
                    tertiary_school: tertiary_school, tertiary_date: tertiary_date, profession: profession
                },


                success: function (data) {

                    console.log(data.status);

                    if (data.status == 'error') {
                        console.log(data.error);
                        notify_me('Error !!',data.error,'red');
                    } else if (data.status == 'val_errors') {
                        console.log(data.errors);
                        notify_me('Error !!',data.errors,'red');
                    } else if (data.status == 'success') {

                        $('#submit-education').hide();
                        $('#submit-experience').show();
                        //form_reset();
                        //notify_me('SUCCESS','Data Entered Sucessfully !!','green');
                    } else {
                        console.log(data.errors);
                        notify_me('Something Went Worng !!',data.errors,'red');
                    }


                    Pace.stop();


                }

            });


        });

        $("#submit-experience").submit(function (e) {


            e.preventDefault();
            Pace.start();


            var cnic = $("input[name=cnic]").val();
            var organization1 = $("input[name=organization1]").val();
            var position1 = $("input[name=position1]").val();
            var from1 = $("input[name=from1]").val();
            var to1 = $("input[name=to1]").val();
            ;
            var organization2 = $("input[name=organization2]").val();
            var position2 = $("input[name=position2]").val();
            var from2 = $("input[name=from2]").val();
            var to2 = $("input[name=to2]").val();
            ;
            var organization3 = $("input[name=organization3]").val();
            var position3 = $("input[name=position3]").val();
            var from3 = $("input[name=from3]").val();
            var to3 = $("input[name=to3]").val();
            ;
            var organization4 = $("input[name=organization4]").val();
            var position4 = $("input[name=position4]").val();
            var from4 = $("input[name=from4]").val();
            var to4 = $("input[name=to4]").val();
            ;
            var organization5 = $("input[name=organization5]").val();
            var position5 = $("input[name=position5]").val();
            var from5 = $("input[name=from5]").val();
            var to5 = $("input[name=to5]").val();


            console.log({
                cnic: cnic, organization1: organization1, position1: position1, from1: from1, to1: to1,
                organization2: organization2, position2: position2, from2: from2, to2: to2,
                organization3: organization3, position3: position3, from3: from3, to3: to3,
                organization4: organization4, position4: position4, from4: from4, to4: to4,
                organization5: organization5, position5: position5, from5: from5, to5: to5
            });


            $.ajax({

                type: 'POST',

                url: '/home/save_experience',

                data: {
                    cnic: cnic, organization1: organization1, position1: position1, from1: from1, to1: to1,
                    organization2: organization2, position2: position2, from2: from2, to2: to2,
                    organization3: organization3, position3: position3, from3: from3, to3: to3,
                    organization4: organization4, position4: position4, from4: from4, to4: to4,
                    organization5: organization5, position5: position5, from5: from5, to5: to5
                },


                success: function (data) {

                    console.log(data.status);
                    if (data.status == 'error') {
                        console.log(data.error);
                        notify_me('Error !!',data.error,'red');
                    } else if (data.status == 'val_errors') {
                        console.log(data.errors);
                        notify_me('Error !!',data.errors,'red');
                    } else if (data.status == 'success') {

                        $('#submit-experience').hide();
                        $('#submit-physical').show();
                        //form_reset();
                        //notify_me('SUCCESS','Data Entered Sucessfully !!','green');
                    } else {
                        console.log(data.errors);
                        notify_me('Something Went Worng !!',data.errors,'red');
                    }


                    Pace.stop();


                }

            });


        });


        $("#submit-physical").submit(function (e) {


            e.preventDefault();
            Pace.start();


            var cnic = $("input[name=cnic]").val();
            var height = $("input[name=height]").val();
            var weight = $("input[name=weight]").val();
            var hair_eye_color = $("input[name=hair_eye_color]").val();
            var disabilities = $("textarea[name=disabilities]").val();


            console.log({
                cnic: cnic, height: height, weight: weight,
                hair_eye_color: hair_eye_color, disabilities: disabilities,
            });


            $.ajax({

                type: 'POST',

                url: '/home/save_physical',

                data: {
                    cnic: cnic, height: height, weight: weight,
                    hair_eye_color: hair_eye_color, disabilities: disabilities
                },


                success: function (data) {

                    console.log(data.status);
                    if (data.status == 'error') {
                        console.log(data.error);
                        notify_me('Error !!',data.error,'red');
                    } else if (data.status == 'val_errors') {
                        console.log(data.errors);
                        notify_me('Error !!',data.errors,'red');
                    } else if (data.status == 'success') {

                        $('#submit-physical').hide();
                        $('#submit-medical').show();
                        //form_reset();
                        //notify_me('SUCCESS','Data Entered Sucessfully !!','green');
                    } else {
                        console.log(data.errors);
                        notify_me('Something Went Worng !!',data.errors,'red');
                    }

                    Pace.stop();


                }

            });


        });


        $("#submit-medical").submit(function (e) {


            e.preventDefault();
            Pace.start();


            var cnic = $("input[name=cnic]").val();
            var medication = $("textarea[name=medication]").val();
            var illness = $("textarea[name=illness]").val();

            console.log({
                cnic: cnic, medication: medication, illness: illness,
            });


            $.ajax({

                type: 'POST',

                url: '/home/save_medical',

                data: {
                    cnic: cnic, medication: medication, illness: illness
                },


                success: function (data) {

                    console.log(data.status);

                    if (data.status == 'error') {
                        console.log(data.error);
                        notify_me('Error !!',data.error,'red');
                    } else if (data.status == 'val_errors') {
                        console.log(data.errors);
                        notify_me('Error !!',data.errors,'red');
                    } else if (data.status == 'success') {

                        $('#submit-medical').hide();
                        $('#submit-witness').show();
                        //form_reset();
                        //notify_me('SUCCESS','Data Entered Sucessfully !!','green');
                    } else {
                        console.log(data.errors);
                        notify_me('Something Went Worng !!',data.errors,'red');
                    }



                    Pace.stop();


                }

            });


        });

    $("#submit-witness").submit(function (e) {


            e.preventDefault();
            Pace.start();


            var cnic = $("input[name=cnic]").val();
            var witness1_name = $("input[name=witness1_name]").val();
            var witness1_cnic = $("input[name=witness1_cnic]").val();
            var witness1_present_address = $("textarea[name=witness1_present_address]").val();
            var witness1_permanent_address = $("textarea[name=witness1_permanent_address]").val();
            var witness2_name = $("input[name=witness2_name]").val();
            var witness2_cnic = $("input[name=witness2_cnic]").val();
            var witness2_present_address = $("textarea[name=witness2_present_address]").val();
            var witness2_permanent_address = $("textarea[name=witness2_permanent_address]").val();



            console.log({
                cnic: cnic, witness1_name: witness1_name, witness1_cnic: witness1_cnic,
                witness1_present_address: witness1_present_address, witness1_permanent_address: witness1_permanent_address,
                witness2_name: witness2_name, witness2_cnic: witness2_cnic,
                witness2_present_address: witness2_present_address, witness2_permanent_address: witness2_permanent_address,

            });


            $.ajax({

                type: 'POST',

                url: '/home/save_witness',

                data: {
                    cnic: cnic, witness1_name: witness1_name, witness1_cnic: witness1_cnic,
                    witness1_present_address: witness1_present_address, witness1_permanent_address: witness1_permanent_address,
                    witness2_name: witness2_name, witness2_cnic: witness2_cnic,
                    witness2_present_address: witness2_present_address, witness2_permanent_address: witness2_permanent_address
                },


                success: function (data) {

                    console.log(data.status);
                    if (data.status == 'error') {
                        console.log(data.error);
                        notify_me('Error !!',data.error,'red');
                    } else if (data.status == 'val_errors') {
                        console.log(data.errors);
                        notify_me('Error !!',data.errors,'red');
                    } else if (data.status == 'success') {

                        $('#submit-witness').hide();
                        $('#submit-bg').show();
                        form_reset();
                        $("input[name=cnic]").val('');
                        notify_me('SUCCESS','Data Entered Sucessfully !!','green');
                    } else {
                        console.log(data.errors);
                        notify_me('Something Went Worng !!',data.errors,'red');
                    }

                    Pace.stop();


                }

            });


        });


        $('#item_table').DataTable();


       // notify_me('done','done','green');

        @if($statusses ?? '')
        notify_me('Imformation Missing !!','Please fill out complete Information First !!','yellow');
        @if($statusses['emergency']=='N' ?? '')
        $('#submit-emergency').show();
        $('#submit-bg').hide();
        @elseif ($statusses['education'] == 'N' ?? '')
        $('#submit-education').show();
        $('#submit-bg').hide();
        @elseif ($statusses['experience'] == 'N' ?? '')
        $('#submit-experience').show();
        $('#submit-bg').hide();
        @elseif ($statusses['physical'] == 'N' ?? '')
        $('#submit-physical').show();
        $('#submit-bg').hide();
        @elseif ($statusses['medical'] == 'N' ?? '')
        $('#submit-medical').show();
        $('#submit-bg').hide();
        @elseif ($statusses['witness'] == 'N' ?? '')
        $('#submit-witness').show();
        $('#submit-bg').hide();
        @endif
        @endif



    });






</script>

</html>
