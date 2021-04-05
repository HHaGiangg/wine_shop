@extends('layouts.app_backend')
@section('title','Thêm mới bài viết')
@section('content')
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header card">
                    <div class="row align-items-end">
                        <h2>Thêm mới bài viết</h2>
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
                                <li class="breadcrumb-item">Create</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Page-header end -->

                <!-- Page-body start -->
                @include('Backend.article.form')

            </div>
        </div>

    </div>

@stop
