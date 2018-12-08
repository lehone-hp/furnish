@extends('layouts.admin')
@section("title", "Clients | Admin")

@section('content')
    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">Clients</h3>
        </div>
        <div id="main-wrapper">
            <div class="row">

                @foreach($clients as $client)

                <div class="col-md-4">
                    <div class="panel panel-white">
                        <div class="panel-body user-profile-panel">
                            <div class="user-verify">
                                <img src="http://via.placeholder.com/100x100" class="user-profile-image img-circle" alt="">
                                <img src="@if($client->isactive == 0) /img/unverified.png @else /img/verified_user.png @endif" class="img-circle verify-status" style="width: 35px;height: 35px;">
                            </div>
                            <h4 class="text-center m-t-lg">{{ $client->firstname }} {{ $client->lastname }}</h4>
                            <p class="text-center">{{ $client->email }}</p>
                            <hr>
                            <ul class="list-unstyled text-left">
                                <li><p><i class="fa fa-map-marker m-r-xs"></i>{{ $client->address }}, {{ $client->country }}</p></li>
                                <li><p><i class="fa fa-phone m-r-xs"></i>{{ $client->phone }}</p></li>
                                <li><p><i class="fa fa-clock-o m-r-xs"></i>{{ $client->created_at }}</li>
                            </ul>
                            <hr>
                            <a href="/admin/clients/{{ $client->id }}" class="btn btn-info btn-block">View Profile</a>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div><!-- Row -->
        </div><!-- Main Wrapper -->

        <div class="page-footer">
            <p>Made with <i class="fa fa-heart"></i> by Lehone & Rachmann</p>
        </div>
    </div>

    @endSection