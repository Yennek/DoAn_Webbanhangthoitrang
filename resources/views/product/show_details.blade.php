@extends('layout.layout_customer')
@section('content')

    @foreach ($product as $value)
        @section('title')
            {{ $value->product_name }}
        @endsection
    @endforeach
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Product Details</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Category</a>
                            </li>
                            <li class="breadcrumb-item active">Details
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- app ecommerce details start -->
        <section class="app-ecommerce-details">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-5 mt-2">
                        <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="{{ asset('img') }}/{{ $product[0]->image }}" class="img-fluid"
                                    alt="product image" style="height:500px; width:500px; !important">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <h5>{{ $product[0]->product_name }}
                            </h5>
                            <p class="text-muted">by {{ $product[0]->supplier }}</p>
                            <div class="ecommerce-details-price d-flex flex-wrap">
                                @if ($product[0]->discount == 0)
                                    <p class="text-primary font-medium-3 mr-1 mb-0">
                                        {{ number_format($product[0]->unit_price) }}
                                        .??</p>
                                @else
                                    <p class="text-primary font-medium-3 mr-1 mb-0">
                                        {{ number_format($product[0]->unit_price - $product[0]->unit_price * ($product[0]->discount / 100)) }}
                                        .??</p>
                                    <p style="font-size: 15px !important; color: #626262;">
                                        <del>{{ number_format($product[0]->unit_price) }}<del>
                                                .??
                                    </p>
                                @endif
                                <span class="pl-1 font-medium-3 border-left">
                                    <i class="feather icon-star text-warning"></i>
                                    <i class="feather icon-star text-warning"></i>
                                    <i class="feather icon-star text-warning"></i>
                                    <i class="feather icon-star text-warning"></i>
                                    <i class="feather icon-star text-secondary"></i>
                                </span>
                                <span class="ml-50 text-dark font-medium-1">424 ratings</span>
                            </div>
                            <hr>
                            <p>{{ $product[0]->description }}</p>
                            <p class="font-weight-bold mb-25"> <i class="feather icon-truck mr-50 font-medium-2"></i>Free
                                Shipping
                            </p>
                            <hr>
                            <div class="item-quantity">
                                <p class="font-weight-bold">Quantity</p>
                                <div class="input-group quantity-counter-wrapper">
                                    <input type="text" id="sl" class="quantity-counter" value="1">
                                </div>
                            </div>
                            <br>
                            <hr>
                            <div class="form-group">
                                <label class="font-weight-bold">Size</label>
                                <ul class="list-unstyled mb-0 product-color-options">
                                    @if ($product[0]->size_s != 0)
                                        <li class="d-inline-block mr-2">
                                            <fieldset>
                                                <div class="vs-radio-con">
                                                    <input type="radio" name="size" checked="checked" value="S">
                                                    <span class="vs-radio">
                                                        <span class="vs-radio--border"></span>
                                                        <span class="vs-radio--circle"></span>
                                                    </span>
                                                    <span class="">S</span>
                                                </div>
                                            </fieldset>
                                        </li>
                                    @endif
                                    @if ($product[0]->size_m != 0)
                                        <li class="d-inline-block mr-2">
                                            <fieldset>
                                                <div class="vs-radio-con">
                                                    <input type="radio" name="size" value="M">
                                                    <span class="vs-radio">
                                                        <span class="vs-radio--border"></span>
                                                        <span class="vs-radio--circle"></span>
                                                    </span>
                                                    <span class="">M</span>
                                                </div>
                                            </fieldset>
                                        </li>
                                    @endif
                                    @if ($product[0]->size_l != 0)
                                        <li class="d-inline-block mr-2">
                                            <fieldset>
                                                <div class="vs-radio-con">
                                                    <input type="radio" name="size" value="L">
                                                    <span class="vs-radio">
                                                        <span class="vs-radio--border"></span>
                                                        <span class="vs-radio--circle"></span>
                                                    </span>
                                                    <span class="">L</span>
                                                </div>
                                            </fieldset>
                                        </li>
                                    @endif
                                    @if ($product[0]->size_xl != 0)
                                        <li class="d-inline-block mr-2">
                                            <fieldset>
                                                <div class="vs-radio-con">
                                                    <input type="radio" name="size" value="XL">
                                                    <span class="vs-radio">
                                                        <span class="vs-radio--border"></span>
                                                        <span class="vs-radio--circle"></span>
                                                    </span>
                                                    <span class="">XL</span>
                                                </div>
                                            </fieldset>
                                        </li>
                                    @endif
                                    @if ($product[0]->size_xxl != 0)
                                        <li class="d-inline-block mr-2">
                                            <fieldset>
                                                <div class="vs-radio-con">
                                                    <input type="radio" name="size" value="XXL">
                                                    <span class="vs-radio">
                                                        <span class="vs-radio--border"></span>
                                                        <span class="vs-radio--circle"></span>
                                                    </span>
                                                    <span class="">XXL</span>
                                                </div>
                                            </fieldset>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                            <hr>
                            <div class="d-flex flex-column flex-sm-row">
                                <button class="btn btn-primary mr-0 mr-sm-1 mb-1 mb-sm-0" @if (!Auth::check()) data-toggle="modal" data-target="#danger{{ $product[0]->id }}" @else onclick="addCart( {{ $product[0]->id }} )" @endif>
                                    <i class="feather icon-shopping-cart mr-25"></i>
                                    ADD TO CART
                                </button>
                                <!-- Modal -->
                                <div class="modal fade text-left" id="danger{{ $product[0]->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="myModalLabel120" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-danger white">
                                                <h5 class="modal-title" id="myModalLabel120">
                                                    C???nh b??o
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Vui l??ng ????ng nh???p ????? th??m v??o gi??? h??ng!
                                            </div>
                                            <div class="modal-footer">
                                                <a href="/signin" type="button"
                                                    class="btn btn-outline-info mr-1 mb-1 waves-effect waves-light">????ng
                                                    nh???p</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <button type="button" class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1"><i
                                    class="feather icon-facebook"></i></button>
                            <button type="button" class="btn btn-icon rounded-circle btn-outline-info mr-1 mb-1"><i
                                    class="feather icon-twitter"></i></button>
                            <button type="button" class="btn btn-icon rounded-circle btn-outline-danger mr-1 mb-1"><i
                                    class="feather icon-youtube"></i></button>
                            <button type="button" class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1"><i
                                    class="feather icon-instagram"></i></button>
                        </div>
                    </div>
                </div>
                <div class="item-features py-5">
                    <div class="row text-center pt-2">
                        <div class="col-12 col-md-4 mb-4 mb-md-0 ">
                            <div class="w-75 mx-auto">
                                <i class="feather icon-award text-primary font-large-2"></i>
                                <h5 class="mt-2 font-weight-bold">
                                    KH??CH H??NG TH??N THI???T</h5>
                                <p>T??? ng??y 15/04/2021, Canifa ra m???t ch??nh s??ch ch??m s??c kh??ch h??ng th??n thi???t phi??n b???n 2.0 v???i nhi???u ?????c quy???n v?????t tr???i.</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-4 mb-md-0">
                            <div class="w-75 mx-auto">
                                <i class="feather icon-clock text-primary font-large-2"></i>
                                <h5 class="mt-2 font-weight-bold">QUY ?????NH ?????I TR???</h5>
                                <p>Th??y H???ng s???n s??ng h??? tr??? ?????i s???n ph???m cho b???n trong v??ng 30 ng??y tr??n to??n h??? th???ng.
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-4 mb-md-0">
                            <div class="w-75 mx-auto">
                                <i class="feather icon-shield text-primary font-large-2"></i>
                                <h5 class="mt-2 font-weight-bold">
                                    TUY???N D???NG T???I Th??y H???ng</h5>
                                <p>Th??y H???ng ??ang c???n tuy???n h??n 40 v??? tr?? nh??n vi??n b??n h??ng t???i H?? N???i, H???i Ph??ng, V??nh Y??n, Ngh??? An, Th??i Nguy??n; TX. S??n T??y, H??ng Y??n (S???p khai tr????ng)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mt-4 mb-2 text-center">
                        <h2>C?? th??? b???n th??ch</h2>
                        <p>C??c s???n ph???m ????? xu???t</p>
                    </div>
                    <div class="swiper-responsive-breakpoints swiper-container px-4 py-2">
                        <div class="swiper-wrapper">
                            @foreach ($productbycategoryID as $valueRandomProduct)
                                <div class="swiper-slide rounded swiper-shadow">
                                    <div class="item-heading">
                                        <a href="/detail&id={{ $valueRandomProduct->id }}">
                                            <p class="text-truncate mb-0">
                                                {{ $valueRandomProduct->product_name }}
                                            </p>
                                        </a>
                                        <p>
                                            <small>by</small>
                                            <small>{{ $valueRandomProduct->supplier }}</small>
                                        </p>
                                    </div>
                                    <div class="img-container w-50 mx-auto my-2 py-75">
                                        <a href="/detail&id={{ $valueRandomProduct->id }}">
                                            <img src="{{ asset('img') }}/{{ $valueRandomProduct->image }}"
                                                style="height:159px; width: 121px !important" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="item-meta">
                                        <div class="product-rating">
                                            <i class="feather icon-star text-warning"></i>
                                            <i class="feather icon-star text-warning"></i>
                                            <i class="feather icon-star text-warning"></i>
                                            <i class="feather icon-star text-warning"></i>
                                            <i class="feather icon-star text-secondary"></i>
                                        </div>
                                        @if ($valueRandomProduct->discount == 0)
                                            <p class="text-primary mb-0">
                                                {{ number_format($valueRandomProduct->unit_price) }}
                                                .??</p>
                                            </br></br>
                                        @else
                                            <p class="text-primary mb-0">
                                                {{ number_format($valueRandomProduct->unit_price - $valueRandomProduct->unit_price * ($valueRandomProduct->discount / 100)) }}
                                                .??</p>
                                            <p style="font-size: 15px !important; color: #626262;">
                                                <del>{{ number_format($valueRandomProduct->unit_price) }}<del>
                                                        .??
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
            
                    </div>
                </div>
            </div>
        </section>
        <script src="{{ asset('js/font_end/get_one.js') }}"></script>
    @endsection
