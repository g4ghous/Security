<!-- Page Heading
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
 -->


<form action="/search" method="POST" class="form-inline mr-auto w-100 navbar-search">
    @csrf
    <div class="input-group col-12">
        <input type="text" name="cnic" class="form-control bg-gradient-light border-0 small" value="{{ old('cnic') }}"
               placeholder="CNIC" aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>
    </div>
</form>

&nbsp;

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="form-group row">
            <div class="col-4">
                <h6 class="m-0 font-weight-bold text-primary form-control-plaintext">SEARCH RESULT </h6>
            </div>
            @if($employee ?? '')
                <div class="offset-6 col-2">
                    <select onchange="showTable(this.value)" class="form-control-sm">
                        <option value="bg">Background Info</option>
                        <option value="emergency">Emergency contact</option>
                        <option value="education">Education Info</option>
                        <option value="experience">Experience Info</option>
                        <option value="physical">Physical Info</option>
                        <option value="medical">Medical Info</option>
                        <option value="witness">Witness Info</option>
                    </select>
                </div>
            @endif
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if($employee ?? '')
                <div id="bg">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr class="bg-gradient-light">
                            <th>Date</th>
                            <th>Applied For</th>
                            <th>Name</th>
                            <th>Cnic</th>
                            <th>Gender</th>
                            <th>D.O.B</th>
                            <th>Contact</th>
                            <th>Religion</th>
                            <th>Address</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr class="bg-gradient-light">
                            <th>Date</th>
                            <th>Applied For</th>
                            <th>Name</th>
                            <th>Cnic</th>
                            <th>Gender</th>
                            <th>D.O.B</th>
                            <th>Contact</th>
                            <th>Religion</th>
                            <th>Address</th>
                        </tr>
                        </tfoot>
                        <tbody>

                        @foreach($employee as $emp)
                            <tr>
                                <td>{{$emp->date}}</td>
                                <td>{{$emp->apply_for}}</td>
                                <td>{{$emp->name}}</td>
                                <td>{{$emp->cnic}}</td>
                                <td>{{$emp->gender}}</td>
                                <td>{{$emp->dob}}</td>
                                <td>{{$emp->contact}}</td>
                                <td>{{$emp->religion}}</td>
                                <td>{{$emp->address_present}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>

                <div id="emergency">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr class="bg-gradient-light">
                            <th>Date</th>
                            <th>Next of Kin</th>
                            <th>Kin Contact</th>
                            <th>Kin Address</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr class="bg-gradient-light">
                            <th>Date</th>
                            <th>Next of Kin</th>
                            <th>Kin Contact</th>
                            <th>Kin Address</th>

                        </tr>
                        </tfoot>
                        <tbody>

                        @foreach($employee as $emp)
                            <tr>
                                <td>{{$emp->date}}</td>
                                <td>{{$emp->next_of_kin}}</td>
                                <td>{{$emp->kin_contact}}</td>
                                <td>{{$emp->kin_address}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>

                <div id="education">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr class="bg-gradient-light">
                            <th>Primary Edu</th>
                            <th>Passing Date</th>
                            <th>Secondary Edu</th>
                            <th>Passing Date</th>
                            <th>Tertiary Edu</th>
                            <th>Passing Date</th>
                            <th>Profession</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr class="bg-gradient-light">
                            <th>Primary Edu</th>
                            <th>Passing Date</th>
                            <th>Secondary Edu</th>
                            <th>Passing Date</th>
                            <th>Tertiary Edu</th>
                            <th>Passing Date</th>
                            <th>Profession</th>

                        </tr>
                        </tfoot>
                        <tbody>

                        @foreach($employee as $emp)
                            <tr>
                                <td>{{$emp->primary_school}}</td>
                                <td>{{$emp->primary_date}}</td>
                                <td>{{$emp->secondary_school}}</td>
                                <td>{{$emp->secondary_date}}</td>
                                <td>{{$emp->tertiary_school}}</td>
                                <td>{{$emp->tertiary_date}}</td>
                                <td>{{$emp->profession}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>



                <div id="experience">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr class="bg-gradient-light">
                            <th>Organization</th>
                            <th>Position</th>
                            <th>From</th>
                            <th>To</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr class="bg-gradient-light">
                            <th>Organization</th>
                            <th>Position</th>
                            <th>From</th>
                            <th>To</th>

                        </tr>
                        </tfoot>
                        <tbody>

                        @foreach($experience as $exp)
                            <tr>
                                <td>{{$exp->organization}}</td>
                                <td>{{$exp->position}}</td>
                                <td>{{$exp->from}}</td>
                                <td>{{$exp->to}}</td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>


                <div id="physical">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr class="bg-gradient-light">
                            <th>Height</th>
                            <th>Weight</th>
                            <th>Hair/Eye Color</th>
                            <th>Dissabilities</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr class="bg-gradient-light">
                            <th>Height</th>
                            <th>Weight</th>
                            <th>Hair/Eye Color</th>
                            <th>Dissabilities</th>
                        </tr>
                        </tfoot>
                        <tbody>

                        @foreach($employee as $emp)
                            <tr>
                                <td>{{$emp->height}}</td>
                                <td>{{$emp->weight}}</td>
                                <td>{{$emp->hair_eye_color}}</td>
                                <td>{{$emp->dissabilities}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>


                <div id="medical">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr class="bg-gradient-light">
                            <th>Medication</th>
                            <th>Illness</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr class="bg-gradient-light">
                            <th>Medication</th>
                            <th>Illness</th>
                        </tr>
                        </tfoot>
                        <tbody>

                        @foreach($employee as $emp)
                            <tr>
                                <td>{{$emp->medication}}</td>
                                <td>{{$emp->illness}}</td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>



                <div id="witness">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr class="bg-gradient-light">
                            <th>Witness Name</th>
                            <th>Cnic</th>
                            <th>Present Address</th>
                            <th>Permanent Address</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr class="bg-gradient-light">
                            <th>Witness Name</th>
                            <th>Cnic</th>
                            <th>Present Address</th>
                            <th>Permanent Address</th>
                        </tr>
                        </tfoot>
                        <tbody>

                        @foreach($witness as $wit)
                            <tr>
                                <td>{{$wit->witness_name}}</td>
                                <td>{{$wit->cnic}}</td>
                                <td>{{$wit->witness_present_address}}</td>
                                <td>{{$wit->witness_permanent_address}}</td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>


            @endif


            @if($no_data ?? '')
                <div id="no_data">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr style="text-align: center" class="bg-gradient-light">
                            <th>NO DATA</th>
                        </tr>
                        </thead>

                    </table>
                </div>
            @endif


        </div>
    </div>
</div>


<script>
    function showTable(tab_val) {
        $('#bg').hide();
        $('#emergency').hide();
        $('#education').hide();
        $('#experience').hide();
        $('#physical').hide();
        $('#medical').hide();
        $('#witness').hide();
        if (tab_val == 'bg') {
            $('#bg').show();
        } else if (tab_val == 'emergency') {
            $('#emergency').show();
        } else if (tab_val == 'education') {
            $('#education').show();
        } else if (tab_val == 'experience') {
            $('#experience').show();
        } else if (tab_val == 'physical') {
            $('#physical').show();
        } else if (tab_val == 'medical') {
            $('#medical').show();
        } else if (tab_val == 'witness') {
            $('#witness').show();
        } else {
            $('#bg').show();
        }


    }

    showTable('bg');

</script>
