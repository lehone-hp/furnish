@extends('layouts.client')
@section("title")
    Change Password
@endsection

@section('content')
    <!-- Page content -->

    <div class="row">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">Change Password</h2>
            </div>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    All fields are required
                </div>
                <div class="card-body card-block">
                    <form action="#" method="post" class="">
                        <div class="form-group">
                            <label for="old-password" class="form-control-label">Old Password</label>
                            <input type="password" id="old-password" name="old-password"
                                   value="old password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="new-password" class="form-control-label">New Password</label>
                            <input type="password" id="new-password" name="new-password"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="confirm-password" class="form-control-label">Confirm Password</label>
                            <input type="password" id="confirm-password" name="confirm-password"
                                   class="form-control">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                </div>
            </div>
    </div>
@endsection
