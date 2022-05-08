@extends('layout.layout_customer')
@section('title')
    Products
@endsection
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Products</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Products</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrum-right">
            </div>
        </div>
    </div>
    <div class="content-detached content-right">
        <div class="content-body">
            <!-- Ecommerce Content Section Starts -->
            <section id="ecommerce-header">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="ecommerce-header-items">
                            <div class="result-toggler">
                                <button class="navbar-toggler shop-sidebar-toggler" type="button" data-toggle="collapse">
                                    <span class="navbar-toggler-icon d-block d-lg-none"><i
                                            class="feather icon-menu"></i></span>
                                </button>
                            </div>
                            <div class="view-options">
                                <div class="view-btn-option">
                                    <button class="btn btn-white view-btn grid-view-btn active">
                                        <i class="feather icon-grid"></i>
                                    </button>
                                    <button class="btn btn-white list-view-btn view-btn">
                                        <i class="feather icon-list"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Ecommerce Content Section Starts -->
            <!-- background Overlay when sidebar is shown  starts-->
            <div class="shop-content-overlay"></div>
            <!-- background Overlay when sidebar is shown  ends-->

            <!-- Ecommerce Search Bar Starts -->
            <section id="ecommerce-searchbar">
                <div class="row mt-1">
                    <div class="col-sm-12">
                        <form action="/" method="GET">
                            <fieldset class="form-group position-relative">
                                <input type="text" class="form-control search-product" id="iconLeft5"
                                    placeholder="Tìm kiếm" name="product_name">
                                <div class="form-control-position">
                                    <button type="submit" class="btn btn-icon" style="padding-top: 2px !important;"><i
                                            class="feather icon-search"></i></button>
                                </div>
                            </fieldset>
                            <form>
                    </div>
                </div>
            </section>
            <!-- Ecommerce Search Bar Ends -->

            <!-- Ecommerce Products Starts -->
            <section id="ecommerce-products" class="grid-view">
                @foreach ($product as $key => $value)
                    <div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <a href="/detail&id={{ $value->id }}">
                                    <img class="img-fluid" src="{{ asset('img') }}/{{ $value->image }}"
                                        alt="img-placeholder" style="height:350px !important"></a>
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        @if ($value->discount != 0)
                                            <div class="badge badge-primary badge-md">
                                                - {{ $value->discount }}%
                                            </div>
                                        @endif
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                            @if ($value->discount == 0)
                                                <p class="text-primary font-medium-3 mr-1 mb-0">
                                                    {{ number_format($value->unit_price) }}
                                                    .Đ</p>
                                                </br></br>
                                            @else
                                                <p class="text-primary font-medium-3 mr-1 mb-0">
                                                    {{ number_format($value->unit_price - $value->unit_price * ($value->discount / 100)) }}
                                                    .Đ</p>
                                                <p style="font-size: 15px !important; color: #626262;">
                                                    <del>{{ number_format($value->unit_price) }}<del>
                                                            .Đ
                                                </p>
                                            @endif
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <a href="/detail&id={{ $value->id }}">{{ $value->product_name }}</a>
                                    <p class="item-company">By <span class="company-name">{{ $value->supplier }}</span>
                                    </p>
                                </div>
                                <div>
                                    <p class="item-description">
                                        {{ $value->description }}
                                    </p>
                                </div>
                            </div>
                            <a href="/detail&id={{ $value->id }}" style="color: wheat">
                                <div class="item-options text-center">
                                    <div class="cart">
                                        <i class="feather icon-shopping-cart"></i> <span>Chi tiết</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </section>
            <!-- Ecommerce Products Ends -->

            <!-- Ecommerce Pagination Starts -->
            <section id="ecommerce-pagination">
                <div>{!! $product->appends(request()->input())->links() !!}</div>
            </section>
            <!-- Ecommerce Pagination Ends -->

        </div>
    </div>
    <div class="sidebar-detached sidebar-left">
        <div class="sidebar">
            <!-- Ecommerce Sidebar Starts -->
            <div class="sidebar-shop" id="ecommerce-sidebar-toggler">

                <div class="row">
                    <div class="col-sm-12">
                        <h6 class="filter-heading d-none d-lg-block">Filters</h6>
                    </div>
                </div>
                <span class="sidebar-close-icon d-block d-md-none">
                    <i class="feather icon-x"></i>
                </span>
                <div class="card">
                    <div class="card-body">
                        <div class="multi-range-price">
                            <div class="multi-range-title pb-75">
                                <h6 class="filter-title mb-0">Sắp xếp</h6>
                            </div>
                            <ul class="list-unstyled price-range" id="price-range">
                                <li>
                                    <span class="vs-radio-con vs-radio-primary py-25">
                                        <span class="ml-50">Theo giá: {!! \App\Helpers\TableListingHelper::headerSort('unit_price') !!}</span>
                                    </span>
                                </li>
                                <li>
                                    <span class="vs-radio-con vs-radio-primary py-25">
                                    </span>
                                </li>
                                <li>
                                    <span class="vs-radio-con vs-radio-primary py-25">
                                        <span class="ml-50">Theo giảm giá: {!! \App\Helpers\TableListingHelper::headerSort('discount') !!}</span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Brand -->
                    <hr>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
