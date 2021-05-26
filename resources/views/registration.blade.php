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

                            <h4 class="page-title">User Management</h4>

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


                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">

                    <div class="col-md-6">
                        <div class="card-box">
                        <h4 class="m-t-0 header-title"></h4>
                        <?php if(empty($info)): ?>
                        <form action="{{url('post-registration')}}" method="POST" id="regForm">
                        <?php else: ?>
                        <form action="{{url('update-registration')}}" method="POST" id="regForm">
                        <?php endif; ?>
                        {{ csrf_field() }}
                       <section class="row">

                        <div class="col-md-12">
                            <div class="form-label-group">
                            <input type="text" id="inputName" value="<?= !empty($info)?$info->name:null; ?>" required="" name="name" class="form-control" placeholder="Full name" autofocus>

                            @if ($errors->has('name'))
                            <span class="error">{{ $errors->first('name') }}</span>
                            @endif
                            </div><br>
                        </div>

                        <div class="col-md-12">
                            <div class="form-label-group">
                            <input type="email" name="email" value="<?= !empty($info)?$info->email:null; ?>" required="" id="inputEmail" class="form-control" placeholder="Email address" >

                            @if ($errors->has('email'))
                            <span class="error">{{ $errors->first('email') }}</span>
                            @endif
                            </div><br>
                        </div>

                        <!--<div class="col-md-6">
                            <div class="form-label-group">
                            <select class="form-control"  name="role" required="">
                                <option value=""></option>
                                <option value="SYSTEM-ADMIN">System Administrator</option>
                                <option value="DATA-ENTRY">Data Entry</option>
                                <option value="ACCOUNTANT">Accountant</option>
                                <option value="SECRETARY">Secretary</option>
                                <option value="CASHIER">Cashier</option>
                                <option value="TECHNICIAN">Technician</option>
                                <option value="CLIENT-SERVICE">Client Service</option>
                            </select>
                            </div>
                        </div>-->

                        <div class="col-md-12">

                        <div class="form-label-group">
                        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">

                        @if ($errors->has('password'))
                        <span class="error">{{ $errors->first('password') }}</span>
                        @endif
                        </div><br>
                        </div>

                        <!--<section class="col-md-10">
                            <label>User Privilage</label>
                            <select multiple class="form-control" name="privilege[]" required="">
                                <option value=""></option>
                                <option value="Settings">Settings</option>
                                <option value="Billing">Billing</option>
                                <option value="Cancel Bill">Cancel Bill</option>
                                <option value="Cancel Payment">Cancel Payment</option>
                                <option value="Cash Office">Cash Office</option>
                                <option value="Report">Report</option>
                        </select>
                            <br>
                        </section> -->

                        <?php if(!empty($info)): ?>
                          <div class="col-md-12 form-group">
                               <select class="form-control" name="status" required>
                                    <option value="">Select Status</option>
                                   <option <?= !empty($info)&&$info->status=="ACTIVE"?"selected=''":null; ?> value="ACTIVE">ACTIVE</option>
                                   <option <?= !empty($info)&&$info->status=="INACTIVE"?"selected=''":null; ?> value="INACTIVE">INACTIVE</option>
                               </select>
                           </div>
                         <?php endif; ?>

                        <?php if(!empty($info)): ?>
                        <input type="hidden" name="user_id" value="<?= ($info->id); ?>">
                        <?php endif; ?>

                        <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">SUBMIT</button>

                       </section>
                    </form>
                        </div>
                    </div>


                    <div class="col-6">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title"></h4>

                             <table id="datatable" class="table  table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                 <?php if(!empty($list)): ?>
                                    <?php foreach ($list as $row): ?>
                                     <tr style="cursor:pointer" onclick="window.location='{{url('user-edit/'.$row->id)}}'">
                                     <td><?= $row->id; ?></td>
                                     <td><?= $row->name; ?></td>
                                      <td><?= $row->email; ?></td>
                                      <td><?= $row->status; ?></td>
                                      <td>
                                          <a href="{{url('delete-registration/'. $row->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want perform this action.This action can not undo if you proceed');">DELETE</a>
                                        </td>
                                     </tr>
                                <?php endforeach; ?>
                                <?php endif; ?>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- End wrapper -->

@endsection
