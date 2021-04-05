@extends('layouts.app_backend')
@section('title', 'Danh sách sản phẩm')
@section('content')
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header card">
                    <div class="row align-items-end">
                        <h1>Danh sách sản phẩm <a href="{{ route('get_backend.product.create') }}" class="btn btn-xs btn-success"> Thêm mới</a></h1>
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
                                <li class="breadcrumb-item">List</li>
                            </ul>
                        </div>
                    </div>
                </div>
    <div class="">
        <div class="card">
            <div class="card-block table-border-style">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Price</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->pro_name }}</td>
                                <td>{{ $item->pro_slug }}</td>
                                <td><span class="text-danger">{{ number_format($item->pro_price,0,',','.') }} đ</span></td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <a href="{{ route('get_backend.product.update', $item->id) }}" class="btn btn-xs btn-primary">Update</a>
                                    <a href="{{ route('get_backend.product.delete', $item->id) }}" class="btn btn-xs btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@stop
