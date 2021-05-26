


@extends('layouts.tempMain')
@section('content')


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">

                            <button  class="btn btn-success btn-sm float-right m-t-15" data-toggle="modal" data-target=".bs-example-modal-lg" class="btn btn-success btn-primary float-right m-1 m-t-15">Add Account</button>

                            <h4 class="page-title">Account Information</h4>

                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                            </div>
                            @endif

                             @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <span id="form_result"></span>


                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title"></h4>

                             <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Valuation Code</th>
                                    <th>Owner Name</th>
                                    <th>House Number</th>
                                    <th>Contact</th>
                                    <th>Surb</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container -->


                     <!-- Modal -->
                     <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myLargeModalLabel">Account Registration</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif




                                          <form method="POST" action="{{ route('records.store') }}">
                                                @csrf


                                            <section class="row">

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Valuation Code</label>
                                                        <input type="text" required=""   class="form-control" placeholder="Enter Valuation code" name="valuation_code">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">

                                                  <div class="form-group">
                                                    <label>Owner Name</label>
                                                    <input type="text" required="" class="form-control" placeholder="Enter Owner name" name="owner_name">
                                                  </div>

                                                   <div class="form-group">
                                                    <label>House Number</label>
                                                    <input type="text" class="form-control" placeholder="Enter House number"  name="house_number">
                                                  </div>

                                                </div>


                                                <div class="col-md-6">

                                                  <div class="form-group">
                                                    <label>Contact Number</label>
                                                    <input type="text"  class="form-control" minlength="10" maxlength="15" name="contact" placeholder="Eg. 02490222222">
                                                  </div>

                                                   <div class="form-group">
                                                    <label>Suburb</label>
                                                    <select name="suburb" class="form-control" required="">
                                                        <?php if(!empty($suburb)): ?>
                                                             <option value="">Select suburb</option>
                                                            <?php foreach ($suburb as $row): ?>
                                                            <option value="<?= $row->suburb; ?>"><?= $row->suburb; ?></option>
                                                        <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </select>
                                                   </div>

                                                </div>

                                            </section>


                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                      </div>



                                           <!-- Modal -->
                     <div class="modal fade edit-record-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myLargeModalLabel">Edit Record</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">


                                        <form method="POST" id="record_update_form">
                                         @csrf

                                            <section class="row">

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Valuation Code</label>
                                                        <input type="text" required=""   class="form-control" placeholder="Enter Valuation code" name="valuation_code" id="valuation_code">
                                                    </div>
                                                </div>


                                                <div class="col-md-6">

                                                  <div class="form-group">
                                                    <label>Owner Name</label>
                                                    <input type="text" required=""   class="form-control" placeholder="Enter Owner name" name="owner_name" id="owner_name">
                                                  </div>

                                                   <div class="form-group">
                                                    <label>House Number</label>
                                                    <input type="text" class="form-control" placeholder="Enter House number"  name="house_number"  id="house_number">
                                                  </div>

                                                </div>


                                                <div class="col-md-6">

                                                  <div class="form-group">
                                                    <label>Contact Number</label>
                                                    <input type="text" minlength="10" maxlength="10" class="form-control" name="contact" id="contact">
                                                  </div>

                                                   <div class="form-group">
                                                    <label>Suburb</label>
                                                      <select name="suburb" class="form-control" required="">
                                                        <?php if(!empty($suburb)): ?>
                                                             <option value="">Select suburb</option>
                                                            <?php foreach ($suburb as $row): ?>
                                                            <option value="<?= $row->suburb; ?>"><?= $row->suburb; ?></option>
                                                        <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </select>
                                                   </div>

                                                </div>

                                            </section>


                                        <div class="modal-footer">
                                            <input type="hidden" name="hidden_id" id="hidden_id">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                      </div>



     </div> <!-- End wrapper -->

@endsection
