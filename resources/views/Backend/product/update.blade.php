@extends('layouts.app_backend')
@section('title','Cập nhật sản phẩm')
@section('content')
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header card">
                    <div class="row align-items-end">
                        <h2>Cập nhật sản phẩm</h2>
                    </div>
                    <div class="col-lg-6">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('get_backend.home') }}">
                                        <i class="icofont icofont-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('get_backend.product.index') }}">Product</a>
                                </li>
                                <li class="breadcrumb-item">Update</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Page-header end -->

                <!-- Page-body start -->
                @include('Backend.product.form')

            </div>
        </div>

    </div>
@stop
