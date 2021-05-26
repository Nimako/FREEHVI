


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

                            <h4 class="page-title">Account Billing</h4>

                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
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

                             <section class="row">

                        <section class="col-md-4">
                        <table id="datatable-table" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Valuation Code</th>
                                <th>Owner Name</th>
                                <th>Contact</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        </section>

                        <section class="col-md-7">
                            <div class="row">



                                <div class="col-md-12 row">

                                    <div class=" col-md-5 offset-md-2">
                                        <h3><?= !empty($info)?'<span style="color:#6C757D">'.$info->owner_name.'</span>':'<span style="color:gray">Owner Name</span>'; ?></h3>
                                        <p class="text-muted" style="font-size:1em">
                                            #<?= !empty($info)?$info->valuation_code:'0000000000'; ?><br>
                                            <?= !empty($info)?$info->suburb.' '.$info->house_number:'0000000000'; ?><br>
                                        </p>
                                    </div>

                                    <div class="col-md-4  offset-md-1">
                                       <span style="font-size:1.6em" class="badge badge-secondary float-right">Balance <?= !empty($balance->balance)?$balance->balance:'0.00'; ?> <small><?= !empty($balance->balance)&&
                                       $balance->balance<0?'Dr':'Cr'; ?></small></span>
                                    </div>

                                    <div class="col-md-12 offset-md-2">

                                        <form method="POST" action="{{ route('ledgers.store') }}">
                                        @csrf

                                        <label>Year</label>
                                        <select class="form-control" name="year" required="" style="height:3em">
                                            <?php for($x=20; $x<=25; $x++): ?>
                                                <option value="20<?= $x; ?>">20<?= $x; ?></option>
                                            <?php endfor; ?>
                                        </select><br>

                                        <label>Billing type</label>
                                        <select class="form-control" required="" name="revenue_type" style="height:3em">
                                            <option value=""></option>
                                            <?php if(!empty($revenueType)): ?>
                                            <?php foreach($revenueType as $row): ?>
                                             <option><?= $row->revenue_type; ?></option>
                                            <?php endforeach; ?>
                                            <?php endif; ?>
                                        </select><br>

                                        <label>Amount</label>
                                        <input type="text" name="amount" required=""  class="form-control" placeholder="0.00" style="font-size:2em"><br>


                                        <input type="hidden" name="valuation_code" value="<?= !empty($info)?$info->valuation_code:''; ?>">
                                        <button  type="submit" name="save"  class="btn btn-primary btn-block"><b>Submit</b></button>

                                      </form>

                                    </div>

                                </div>

                            </div>

                        </section>


                            </section>



                    <div class="col-md-12">
                       <h4 class="m-t-0 header-title"></h4><BR>

                             <table id="datatabl" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Action</th>
                                    <th>Receipt</th>
                                    <th>Amount (GH¢)</th>
                                    <th>Revenue Type</th>
                                    <th></th>
                                </tr>
                                </thead>
                                 <?php if(!empty($billList)): ?>
                                  <?php foreach($billList as $row): ?>
                                    <tr>
                                        <td><?= date('d M Y h:m',strtotime($row->created_at)); ?></td>
                                        <td><?= $row->receipt; ?></td>
                                        <td><?= $row->debit; ?></td>
                                        <td><?= $row->revenue_type; ?></td>
                                        <td>
                                        <form action="{{route('ledgers.destroy',$row->id)}}" method="POST">
                                          @method('DELETE')
                                          @csrf
                                          <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                        </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                 <?php endif; ?>
                                <tbody>
                                </tbody>
                            </table>

                            <?php if(!empty($billList)): ?>

                            {{ $billList->links() }}

                            <?php endif; ?>


                    </div>
                         </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container -->


     </div> <!-- End wrapper -->

@endsection
