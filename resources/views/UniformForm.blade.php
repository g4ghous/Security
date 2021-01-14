<!-- Page Heading
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
 -->


@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{ $error }}
        </div>
    @endforeach
@endif




<form action="/search_uniform" method="POST" class="form-inline mr-auto w-100 navbar-search">
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


<form action="/insert_uniform" method="post">
    @csrf

    <div class="row">
        <div class="col-6">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">


                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-10"><h6 class="m-0 font-weight-bold text-primary">Insert Items</h6></div>
                        @if($employee ?? '')
                        <div class="col-1"><input type="submit" value="Save" class="btn btn-sm btn-primary"></div>
                        @endif
                    </div>
                </div>

                <div class="card-body">

                    @if($employee ?? '')
                        <div class="form-group row">


                            <div class="col-6">
                                <label class="col-form-label" for="name">Name</label>
                                <input name="name" type="text" class="form-control"
                                       value="{{ $employee[0]['name'] ?? $employee['name'] }}" placeholder="name"
                                       required readonly>
                            </div>

                            <div class="col-6">
                                <label class="col-form-label" for="cnic">CNIC</label>
                                <input name="cnic" type="text" class="form-control"
                                       value="{{ $employee[0]['cnic'] ?? $employee['cnic'] }}" placeholder="cnic"
                                       required readonly>
                            </div>


                        </div>


                        <div class="form-group row">


                            <div class="col-6">
                                <label class="col-form-label" for="item">Items</label>
                                <select name="item" type="text" class="form-control" value="{{ old('item') }}"
                                        placeholder="Items" required>
                                    <option value="Pants">Pant</option>
                                    <option value="Shirts">Shirt</option>
                                    <option value="T-Shirt">T-Shirt</option>
                                    <option value="Belt, Waist">Belt, Waist</option>
                                    <option value="Shoes Dms">Shoes Dms</option>
                                    <option value="Long Boots">Long Boots</option>
                                    <option value="Cap Jockey">Cap Jockey</option>
                                    <option value="Barred Caps">Barred Caps</option>
                                    <option value="Shalwar">Shalwar</option>
                                    <option value="Qameez">Qameez</option>
                                    <option value="Whistle+Dori">Whistle+Dori</option>
                                    <option value="Sup Patti">Sup Patti</option>
                                    <option value="Anklets">Anklets</option>
                                    <option value="Scarf">Scarf</option>
                                    <option value="Security Strips">Security Strips</option>
                                    <option value="Jackets / Jersey">Jackets / Jersey</option>
                                    <option value="Commando Pant">Commando Pant</option>
                                    <option value="Company Card">Company Card</option>
                                </select>
                            </div>

                            <div class="col-6">
                                <label class="col-form-label" for="qty">Quantity</label>
                                <input name="qty" type="number" class="form-control" value="{{ old('qty') }}"
                                       placeholder="Quantity" required>
                            </div>


                        </div>

                        <div class="form-group row">
                            <div class="col-6">
                                <label class="col-form-label" for="date_issue">Date Issued</label>
                                <input name="date_issue" type="date" class="form-control"
                                       value="{{ old('date_issue') }}" placeholder="Date Issue" required>
                            </div>

                            <div class="col-6">
                                <label class="col-form-label" for="date_recieve">Date Recieve</label>
                                <input name="date_recieve" type="date" class="form-control"
                                       value="{{ old('date_recieve') }}" placeholder="Date Recieved" required>
                            </div>

                        </div>

                        <div class="form-group row">
                            <div class="col-6">
                                <label class="col-form-label" for="location">Location</label>
                                <select name="location" type="text" class="form-control" value="{{ old('location') }}"
                                        placeholder="Date Issue" required>

                                    <option value="karachi">Karachi</option>
                                    <option value="lahore">Lahore</option>
                                    <option value="islamabad">Lslamabad</option>
                                    <option value="quetta">Quetta</option>
                                    <option value="kpk">KPK</option>
                                </select>

                            </div>

                            <div class="col-6">
                                <label class="col-form-label" for="new_used">New/Used</label>
                                <select name="new_used" type="text" class="form-control" value="{{ old('new_used') }}"  placeholder="New/Used" required >

                                    <option value="new">New</option>
                                    <option value="used">Used</option>

                                </select>


                            </div>

                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <label class="col-form-label" for="remarks">Remarks</label>
                                <textarea name="remarks" type="text" class="form-control" value="{{ old('remarks') }}"
                                          placeholder="Remarks" required></textarea>
                            </div>
                        </div>



                    @endif
                    <div class="table-responsive">


                        @if($no_data ?? '')
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr style="text-align: center" class="bg-gradient-light">
                                    <th>NO DATA</th>
                                </tr>
                                </thead>

                            </table>
                        @endif


                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">

            <div class="card shadow mb-4">


                <div class="card-header py-3">
                    <div class="row">
                        <div class="col-11"><h6 class="m-0 font-weight-bold text-primary">Items Data</h6></div>

                    </div>
                </div>

                <div class="card-body">

                    @if($employee ?? '')
                        <div class="table-responsive">


                            <table id="item_table" class="table table-bordered table-striped table-sm" id="dataTable"
                                   width="100%" cellspacing="0">
                                <thead>
                                <tr style="text-align: center" class="bg-gradient-light">
                                    <th>Item</th>
                                    <th>Date</th>
                                    <th>New/Used</th>
                                    <th>Quantity</th>
                                    <th>Remarks</th>
                                </tr>
                                </thead>
                                <tbody>

                                @if($uniforms ?? '')
                                    @foreach($uniforms as $uniform)
                                        <tr>
                                            <td>{{$uniform['item']}}</td>
                                            <td>{{$uniform['date_recieved']}}</td>
                                            <td>{{$uniform['new_used']}}</td>
                                            <td>{{$uniform['quantity']}}</td>
                                            <td>{{$uniform['remarks']}}</td>
                                        </tr>
                                     @endforeach
                                 @endif
                                </tbody>

                            </table>


                        </div>



                    @endif
                    <div class="table-responsive">


                        @if($no_data ?? '')
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr style="text-align: center" class="bg-gradient-light">
                                    <th>NO DATA</th>
                                </tr>
                                </thead>

                            </table>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>

</form>



