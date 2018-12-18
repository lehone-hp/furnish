@extends('layouts.admin')
@section("title", "Profile | Admin")

@section('content')


    <!-- Page Inner -->
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Profile Details</h3>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Edit Profile</h4>
                        </div>
                        <div class="panel-body">
                            <form action="{{ route('admin.profile.update') }}" method="POST" enctype="multipart/form-data">
                                {{ @csrf_field() }}
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" value="{{ $admin->name }}" name="name" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Name</label>
                                    <input type="email" class="form-control" id="email" value="{{ $admin->email }}" name="email" placeholder="Email" required>
                                </div>


                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="confirm_pass">Confirm Password</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm password" required>
                                </div>

                                <button type="submit" class="btn btn-primary btn-large">Update Profile</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-white">
                        <div class="panel-body user-profile-panel">
                            <div class="user-verify">
                                <img @if($admin->profile_pic != null) src="/users/images/{{ $admin->profile_pic }}" @else src="http://via.placeholder.com/150x150"  @endif class="img-responsive center-block avatar" alt="{{ $admin->name }}'s image" style="height: 150px">
                            </div>
                            <p class="clearfix"></p>
                            <p class="clearfix"></p>
                            <input type="file" name="profile_pic" id="adminProfilePic">
                            <p class="clearfix"></p>
                            <p class="clearfix"></p>
                            <button type="button"  class="btn btn-primary btn-block" id="updateProfilePic">Change Profile Pic</button>
                        </div>
                    </div>
                </div>

            </div><!-- Row -->
        </div><!-- Main Wrapper -->

        <div class="page-footer">
            <p>Made with <i class="fa fa-heart"></i> by Lehone & Rachmann</p>
        </div>

    </div>
    <!-- /Page Inner -->


@endSection