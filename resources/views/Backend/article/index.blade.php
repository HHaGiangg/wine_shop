@extends('layouts.app_backend')
@section('title', 'Danh sách bài viết')
@section('content')
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header card">
                    <div class="row align-items-end">
                        <h1>Danh sách bài viết <a href="{{ route('get_backend.article.create') }}" class="btn btn-xs btn-success"> Thêm mới</a></h1>
                    </div>
                    <div class="col-lg-6">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('get_backend.home') }}">
                                        <i class="icofont icofont-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('get_backend.article.index') }}">Article</a>
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
                            <th>Content</th>
                            <th>Description</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($articles as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->a_name }}</td>
                                <td>{{ $item->a_slug }}</td>
                                <td>{{ $item->a_content }}</td>
                                <td>{{ $item->a_description }}</td>
{{--                                <td><span class="text-danger">{{ number_format($item->pro_price,0,',','.') }} đ</span></td>--}}
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <a href="{{ route('get_backend.article.update', $item->id) }}" class="btn btn-xs btn-primary">Update</a>
                                    <a href="{{ route('get_backend.article.delete', $item->id) }}" class="btn btn-xs btn-danger">Delete</a>
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
