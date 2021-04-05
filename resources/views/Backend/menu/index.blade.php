@extends('layouts.app_backend')
@section('title','Danh sách Menu')
@section('content')
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header card">
                    <div class="row align-items-end">
                        <h2>Danh sách menu</h2>
                    </div>
                    <div class="col-lg-6">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('get_backend.home') }}">
                                        <i class="icofont icofont-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('get_backend.menu.index') }}">Menu</a>
                                </li>
                                <li class="breadcrumb-item">Create</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Page-header end -->

                <!-- Page-body start -->
                <div class="page-body">
                    <!-- Row start -->
                    <div class="row">
                        <!-- Multiple Open Accordion start -->
                    @include('Backend.menu.list')
                    <!-- Multiple Open Accordion ends -->
                        <!-- Single Open Accordion start -->
                        <div class="col-lg-5">
                            <div class="card">
                                @include('Backend.menu.form', ['route' => route('get_backend.menu.store')])
                            </div>
                        </div>
                        <!-- Single Open Accordion ends -->
                    </div>
                    <!-- Row end -->
                </div>
                <!-- Page-body end -->
            </div>
        </div>

    </div>

@stop
