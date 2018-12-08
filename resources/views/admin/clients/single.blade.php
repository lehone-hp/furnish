
@extends('layouts.admin')
@section("title")
    {{ $client->firstname }} | Admin
    @endSection


@section('content')

    <div class="page-inner">
        <div class="page-title">
            <h3 class="breadcrumb-header">{{ $client->firstname }}'s Profile</h3>
        </div>
        <div id="main-wrapper">
            <div class="row">
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
                            <div class="col-md-12 text-right">
                                <h4>Address</h4>
                                <address>
                                    <strong>Twitter, Inc.</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                </address>
                                <address>
                                    <strong>Full Name</strong><br>
                                    <a href="mailto:#">first.last@example.com</a>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="profile-timeline">
                        <ul class="list-unstyled">
                            <li class="timeline-item">
                                <div class="panel panel-white">
                                    <div class="panel-body">
                                        <div class="timeline-item-header">
                                            <img src="http://via.placeholder.com/40x40" alt="">
                                            <p>{{ $client->firstname }} {{ $client->lastname }}</p>
                                            <small><span style="font-weight: bolder">Member since</span> - {{ $client->created_at->diffForHumans() }}</small>
                                        </div>
                                        <div class="timeline-item-post">
                                            <p>
                                               {!! $client->about !!}
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="panel panel-white">
                        <div class="panel-heading clearfix">
                            <h3 class="panel-title">{{ $client->firstname }}'s Recent Orders</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive invoice-table">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th scope="row">Q#1</th>
                                        <td>{{ $client->created_at->toDateString() }}</td>
                                        <td><a href="/products/2" class="text-primary" style="text-decoration: underline">Cane Chair</a></td>
                                        <td><span class="label label-success">Completed</span></td>
                                        <td>XAF 30000</td>
                                        <td><a href="/orders/client" class="btn btn-sm">View <span class="fa fa-eye"></span></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Q#1</th>
                                        <td>{{ $client->created_at->toDateString() }}</td>
                                        <td><a href="/products/2" class="text-primary" style="text-decoration: underline">Cane Chair</a></td>
                                        <td><span class="label label-warning">Pending</span></td>
                                        <td>XAF 30000</td>
                                        <td><a href="/orders/client" class="btn btn-sm">View <span class="fa fa-eye"></span></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Q#1</th>
                                        <td>{{ $client->created_at->toDateString() }}</td>
                                        <td><a href="/products/2" class="text-primary" style="text-decoration: underline">Cane Chair</a></td>
                                        <td><span class="label label-danger">Cancelled</span></td>
                                        <td>XAF 30000</td>
                                        <td><a href="/orders/client" class="btn btn-sm">View <span class="fa fa-eye"></span></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Row -->
        </div><!-- Main Wrapper -->
        <div class="page-footer">
            <p>Made with <i class="fa fa-heart"></i> by Lehone & Rachmann</p>
        </div>
    </div>

    @endSection