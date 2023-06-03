@extends('layouts.master')

@section('css')
<!--Chartist Chart CSS -->
<link rel="stylesheet" href="{{ URL::asset('plugins/chartist/css/chartist.min.css') }}">
@endsection

@section('breadcrumb')
<div class="col-sm-6 text-left" >
     <h4 class="page-title">Employee Information System</h4>
</div>
@endsection

@section('content')
                   <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <span class="ti-id-badge" style="font-size: 30px"></span>
                                            </div>
                                            <h5 class="font-16 text-uppercase mt-0 text-white-50">Total <br> Employees</h5> 
                                        </div>
                                        <h1 class="font-500 float-right">{{$data[0]}} </h1>
                                        <span class="ti-user float-left" style="font-size: 71px"></span>
                                        <!-- <div class="pt-2">
                                            <div class="float-right">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                            </div>
                                            <p class="text-white-50 mb-0">More info</p>
                                        </div> -->
                                    </div>
                                </div>
                            </div>

                            
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-left mini-stat-img mr-4">
                                                <span class="ti-panel" style="font-size: 30px"></span>
                                            </div>
                                            <h5 class="font-16 text-uppercase mt-0 text-white-50">Availabe <br> Schedules</h5> 
                                        </div>
                                        <h1 class="font-500 float-right">{{$data[4]}} </h1>
                                        <span class="ti-time float-left" style="font-size: 71px"></span>
                                        
                                    </div>
                                </div>
                            </div>
                    </div>
                        <!-- new row end -->
                        <div class="row">
                            <div class="col-xl-9">
                                <div class="card">
                                    
                                </div>
                                <!-- end card -->
                            </div>

                            <div class="col-xl-3">
                                <div class="card">
                                   
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        
                        
                        <!-- end row -->
@endsection

@section('script')
<!--Chartist Chart-->
<script src="{{ URL::asset('plugins/chartist/js/chartist.min.js') }}"></script>
<script src="{{ URL::asset('plugins/chartist/js/chartist-plugin-tooltip.min.js') }}"></script>
<!-- peity JS -->
<script src="{{ URL::asset('plugins/peity-chart/jquery.peity.min.js') }}"></script>
<script src="{{ URL::asset('assets/pages/dashboard.js') }}"></script>
@endsection