@extends('layouts.master')

@section('content')
<div class="container">
    <!--content Area Start-->
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card mb-4 status-card" onclick="go('https://google.com')">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <i class="fas fa-shopping-bag" style="font-size: 25px"></i>
                        </div>
                        <div class="col-9">
                            <p class="mb-1 h4 font-weight-bolder">
                                <span class="counter-up">123</span>
                            </p>
                            <p class="mb-0 text-black-50">Today Order</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card mb-4 status-card" onclick="go('https://google.com')">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <i class="fas fa-users" style="font-size: 25px"></i>
                        </div>
                        <div class="col-9">
                            <p class="mb-1 h4 font-weight-bolder">
                                <span class="counter-up">456</span>
                            </p>
                            <p class="mb-0 text-black-50">Total User</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card mb-4 status-card" onclick="go('item_list.html')">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <i class="fas fa-cubes" style="font-size: 25px"></i>
                        </div>
                        <div class="col-9">
                            <p class="mb-1 h4 font-weight-bolder">
                                <span class="counter-up">223</span>
                            </p>
                            <p class="mb-0 text-black-50">Total Items</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card mb-4 status-card" onclick="go('https://google.com')">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <i class="fas fa-map-location" style="font-size: 25px"></i>
                        </div>
                        <div class="col-9">
                            <p class="mb-1 h4 font-weight-bolder">
                                <span class="counter-up">14</span>
                            </p>
                            <p class="mb-0 text-black-50">Support Location</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--content Area Start-->
</div>
@endsection
