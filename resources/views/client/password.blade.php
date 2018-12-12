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
                    @if (count($errors))
                        <div class="alert alert-danger">
                            {{ $errors->first() }}
                        </div>
                    @elseif (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('client.password') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="current-password" class="form-control-label">Old Password</label>
                            <input type="password" id="current-password"
                                   name="current-password"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-control-label">New Password</label>
                            <input type="password" id="password" name="password"
                                   class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="confirm-password" class="form-control-label">Confirm Password</label>
                            <input type="password" id="confirm-password" name="password_confirmation"
                                   class="form-control">
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
@endsection
