@extends('admin.header')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">

            <div class="card">
                <form method="post">
                    <div class="card-header">
                        <strong>Admin</strong> Add
                    </div>

                    <div class="card-body card-block">

                        <div class="form-group" method="post">
                            <label for="nf-name" class=" form-control-label">Name</label>
                            <input type="text" id="nf-name" name="name" value="<?php echo (isset($GLOBALS['edit'])) ?  $GLOBALS['edit_name'] : ''; ?>" placeholder="Enter Name.." class="form-control">
                            <span class="help-block">Please enter your Name</span>
                        </div>
                        <div class="form-group">
                            <label for="nf-email" class=" form-control-label">Email</label>
                            <input type="email" id="nf-email" name="email" value="<?php echo (isset($GLOBALS['edit'])) ?  $GLOBALS['edit_email'] : ''; ?>" placeholder="Enter Email.." class="form-control">
                            <span class="help-block">Please enter your email</span>
                        </div>
                        <div class="form-group">
                            <label for="nf-password" class=" form-control-label">Password</label>
                            <input type="password" id="nf-password" name="password" value="<?php echo (isset($GLOBALS['edit'])) ?  $GLOBALS['edit_password'] : ''; ?>" placeholder="Enter Password.." class="form-control">
                            <span class="help-block">Please enter your password</span>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" name="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <!-- <button style="display:<?php echo (isset($GLOBALS['edit'])) ?: "none"; ?>  " type="reset" name="edit_bt" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Edit
                        </button> -->
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
    <div class="row">
        <div class="col-md-1"> </div>
        <div class="col-lg-10">
            <!-- USER DATA-->
            <div class="user-data m-b-30">
                <h3 class="title-3 m-b-30">
                    <i class="zmdi zmdi-account-calendar"></i>Admin data
                </h3>

                <div class="table-responsive table-data">
                    <table class="table">
                        <thead class="card-header">
                            <tr>

                                <td>ID</td>
                                <td>E-mail</td>
                                <td>Name</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <!-- END USER DATA-->
        </div>
    </div>
</div>
@endsection
