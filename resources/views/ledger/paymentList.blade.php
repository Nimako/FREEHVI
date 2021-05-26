
@extends('layouts.tempMain')
@section('content')

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="wrapper" >
            <div class="container">


                <div class="row" style="margin-top:50px">
                <div class="col-md-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="icon-chart float-right text-muted"></i>
                        <h6 class="text-muted text-uppercase m-b-20">Today</h6>
                        <h2 class="m-b-20">GH¢<span class="amount" data-plugin="counterup"><?= !empty($today)?$today:'0.00'; ?></span></h2>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="icon-chart float-right text-muted"></i>
                        <h6 class="text-muted text-uppercase m-b-20">THIS MONTH</h6>
                        <h2 class="m-b-20">GH¢<span data-plugin="counterup"><?= !empty($thismonth)?$thismonth:'0.00'; ?></span></h2>
                    </div>
                </div>


                <div class="col-md-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="icon-chart float-right text-muted"></i>
                        <h6 class="text-muted text-uppercase m-b-20">LAST MONTH</h6>
                        <h2 class="m-b-20">GH¢<span data-plugin="counterup"><?= !empty($lastmonth)?$lastmonth:'0.00'; ?></span></h2>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="card-box tilebox-one">
                        <i class="icon-chart float-right text-muted"></i>
                        <h6 class="text-muted text-uppercase m-b-20">THIS YEAR</h6>
                        <h2 class="m-b-20">GH¢<span data-plugin="counterup"><?= !empty($thismonth)?$thismonth:'0.00'; ?></span></h2>
                    </div>
                </div>
            </div>
            <!-- end row -->

                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title"></h4>

                             <table id="datatabl" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Receipt</th>
                                    <th>Transaction Type</th>
                                    <th>Amount (GH¢)</th>
                                    <th>Revenue Type</th>
                                    <th>Collector</th>
                                </tr>
                                </thead>
                                 <?php if(!empty($list)): ?>
                                  <?php foreach($list as $row): ?>
                                    <tr>
                                        <td><?= date('d M Y h:m',strtotime($row->created_at)); ?></td>
                                        <td><?= $row->receipt; ?></td>
                                        <td><?= $row->trans_type; ?></td>
                                        <td><?= $row->credit; ?></td>
                                        <td><?= $row->revenue_type; ?></td>
                                        <td><?= $row->name; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                                 <?php endif; ?>
                                <tbody>
                                </tbody>
                            </table>

                            <?php if(!empty($list)): ?>
                           {{ $list->links() }}
                           <?php endif; ?>

                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container -->


     </div> <!-- End wrapper -->

@endsection

