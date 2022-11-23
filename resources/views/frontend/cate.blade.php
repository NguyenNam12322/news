

@extends('frontend.layouts.apps')

@section('content') 
    @push('style')
    <link href="{{ asset('css/site.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/clientlib-base.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/35deb2b4/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('bulma/css/bulma.min.css')}}" rel="stylesheet">
    <link href="{{ asset('bulma/css/all.min.css')}}" rel="stylesheet">
    <link href="{{ asset('swiper@8.4.2/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/icofont.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/slick.css')}}" rel="stylesheet">
    <link href="{{ asset('css/slick-theme.css')}}" rel="stylesheet">
    <link href="{{ asset('css/site.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/75a5fa0c/css/progressive-media.min.css')}}" rel="stylesheet">

    <style type="text/css">
        .btn-cart{
            width: 100%;
        }

    </style>
    @endpush

    <div class="category">
        <div class="pageType-CategoryPage">
            <div class="container is-fullhd">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../media/category/1620228290AEM_2021_PF_KV_NeoQLED_PC.jpg" class="d-block w-100 is-hidden-mobile" alt="...">
                            <img src="../media/category/1620228290AEM_2021_PF_KV_NeoQLED_MO.jpg" class="d-block w-100 is-hidden-tablet" alt="...">
                            <div class="carousel-caption d-md-block text-color--white">
                                <h5>Neo QLED</h5>
                                <p>Không có giới hạn, cho những điều vĩ đại.</p>
                                <div class="home-kv-carousel__cta-wrap">
                                    <a class="cta cta--underline cta--white" href="../samsung/qled/highlights.html">
                                    TÌM HIỂU THÊM
                                    </a>
                                    <a class="cta cta--contained cta--white" href="../samsung/tvs/neo-qled-8k.html">
                                    CHỌN TV CỦA BẠN
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img src="../media/category/16202280082021_PF_KV_QLED_PC.jpg" class="d-block w-100 is-hidden-mobile" alt="...">
                            <img src="../media/category/16202280082021_PF_KV_QLED_MO.jpg" class="d-block w-100 is-hidden-tablet" alt="...">
                            <div class="carousel-caption d-md-block text-color--black">
                                <h5>QLED TV</h5>
                                <p>Đỉnh cao công nghệ TV</p>
                                <div class="home-kv-carousel__cta-wrap">
                                    <a class="cta cta--contained cta--black" href="../samsung/tvs/neo-qled-8k.html">
                                    CHỌN TV CỦA BẠN
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="icon">
                    <i class="fas fa-chevron-circle-left"></i>
                    </span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="icon">
                    <i class="fas fa-chevron-circle-right"></i>
                    </span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="is-hidden-tablet">
                <div id="mobile-mask" class="mobile-mask"></div>
                <div class="mobile-facets js-mobile-facets">
                    <ul class="nav nav-tabs nav-justified mobile-facet-tabs js-mobile-facet-tabs" role="tablist">
                        <li onclick="showFilter();" class="js-mobile-facet-tab">
                            <a href="#" class="mobile-button-slide-left">Bộ lọc</a>
                        </li>
                        <li role="presentation" class="js-mobile-facet-tab">
                            <a href="#" class="mobile-button-slide-left-sort">Sắp xếp theo</a>
                        </li>
                    </ul>
                    <!-- Nav tabs finish-->
                    <!-- Tab panes -->
                    <div class="tab-content mobile-facet-tab-content js-mobile-facet-tab-content">
                        <!-- tab panel start -->
                        <div role="tabpanel" class="tab-pane js-tab-pane" id="filter">
                            <div class="col-md-12 product-facet js-product-facet">
                                <div class="facet facet-color js-facet">
                                    <div class="facet-name js-facet-name clearfix collapsed" data-tracking="baseColors" data-omni="shop:category filter_color">
                                        Theo Màu Sắc
                                        <a href="#" class="icon-plus facet-icon facet-icon-open" title="Open" style="background-image: none;">
                                            <svg width="16" height="16" viewbox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <title>Icon/16/Plus 16px</title>
                                                <path d="M8 2v12m6-6H2" stroke="#000" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square"></path>
                                            </svg>
                                        </a>
                                        <a href="#" class="icon-minus facet-icon facet-icon-closed" title="Close" style="background-image: none;">
                                            <svg width="16" height="16" viewbox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <title>Icon/16/Plus 16px</title>
                                                <path d="M14 8H2" stroke="#000" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square"></path>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="facet-colors clearfix js-facet-values" style="display: none;">
                                        <ul class="facet-colors-list js-facet-list js-toggle-less " data-item-height="32" data-max-shown="4" style="visibility: visible;">
                                            <li>
                                                <form action="#" method="get" class="ng-pristine ng-valid">
                                                    <input type="hidden" name="q" value=":baseColors:Black-000000" autocomplete="off">
                                                    <input type="hidden" name="text" value="" autocomplete="off"> <label class="facet-colors-label" style="background: #000000">
                                                    <input title="Black" class="facet-colors-input facet-colors-click js-facet-checkbox" type="checkbox" data-omni="color">
                                                    <span class="facet-colors-halo"></span>
                                                    <span class="facet-colors-outerring"></span>
                                                    <span class="facet-colors-tag">
                                                    Black&nbsp;
                                                    <span class="facet-value-count">(28)</span>
                                                    </span>
                                                    </label>
                                                </form>
                                            </li>
                                            <li>
                                                <form action="#" method="get" class="ng-pristine ng-valid">
                                                    <input type="hidden" name="q" value=":baseColors:Gray-808080" autocomplete="off">
                                                    <input type="hidden" name="text" value="" autocomplete="off"> <label class="facet-colors-label" style="background: #808080">
                                                    <input title="Gray" class="facet-colors-input facet-colors-click js-facet-checkbox" type="checkbox" data-omni="color">
                                                    <span class="facet-colors-halo"></span>
                                                    <span class="facet-colors-outerring"></span>
                                                    <span class="facet-colors-tag">
                                                    Gray&nbsp;
                                                    <span class="facet-value-count">(11)</span>
                                                    </span>
                                                    </label>
                                                </form>
                                            </li>
                                            <li>
                                                <form action="#" method="get" class="ng-pristine ng-valid">
                                                    <input type="hidden" name="q" value=":baseColors:Silver-c0c0c0" autocomplete="off">
                                                    <input type="hidden" name="text" value="" autocomplete="off"> <label class="facet-colors-label" style="background: #c0c0c0">
                                                    <input title="Silver" class="facet-colors-input facet-colors-click js-facet-checkbox" type="checkbox" data-omni="color">
                                                    <span class="facet-colors-halo"></span>
                                                    <span class="facet-colors-outerring"></span>
                                                    <span class="facet-colors-tag">
                                                    Silver&nbsp;
                                                    <span class="facet-value-count">(10)</span>
                                                    </span>
                                                    </label>
                                                </form>
                                            </li>
                                            <li>
                                                <form action="#" method="get" class="ng-pristine ng-valid">
                                                    <input type="hidden" name="q" value=":baseColors:Gray-777777" autocomplete="off">
                                                    <input type="hidden" name="text" value="" autocomplete="off"> <label class="facet-colors-label" style="background: #777777">
                                                    <input title="Gray" class="facet-colors-input facet-colors-click js-facet-checkbox" type="checkbox" data-omni="color">
                                                    <span class="facet-colors-halo"></span>
                                                    <span class="facet-colors-outerring"></span>
                                                    <span class="facet-colors-tag">
                                                    Gray&nbsp;
                                                    <span class="facet-value-count">(7)</span>
                                                    </span>
                                                    </label>
                                                </form>
                                            </li>
                                            <li style="display: none;">
                                                <form action="#" method="get" class="ng-pristine ng-valid">
                                                    <input type="hidden" name="q" value=":baseColors:Silver-dbdbdb" autocomplete="off">
                                                    <input type="hidden" name="text" value="" autocomplete="off"> <label class="facet-colors-label" style="background: #dbdbdb">
                                                    <input title="Silver" class="facet-colors-input facet-colors-click js-facet-checkbox" type="checkbox" data-omni="color">
                                                    <span class="facet-colors-halo"></span>
                                                    <span class="facet-colors-outerring"></span>
                                                    <span class="facet-colors-tag">
                                                    Silver&nbsp;
                                                    <span class="facet-value-count">(5)</span>
                                                    </span>
                                                    </label>
                                                </form>
                                            </li>
                                        </ul>
                                        <div class="more-less-button-container">
                                            <span class="js-more-button js-show-toggle">
                                            <a href="#" class="js-facet-show-link js-facet-show-link-more">
                                            Hiển thị nhiều hơn</a>
                                            </span>
                                            <span class="js-less-button js-show-toggle">
                                            <a href="#" class="js-facet-show-link js-facet-show-link-less" style="display: none;">
                                            Hiển thị ít hơn</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="facet js-facet">
                                    <div class="facet-name js-facet-name clearfix collapsed" data-tracking="price" data-omni="shop:category filter_price">
                                        Theo GIÁ CẢ
                                        <a href="#" class="icon-plus facet-icon facet-icon-open" title="Open" style="background-image: none;">
                                            <svg width="16" height="16" viewbox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <title>Icon/16/Plus 16px</title>
                                                <path d="M8 2v12m6-6H2" stroke="#000" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square"></path>
                                            </svg>
                                        </a>
                                        <a href="#" class="icon-minus facet-icon facet-icon-closed" title="Close" style="background-image: none;">
                                            <svg width="16" height="16" viewbox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <title>Icon/16/Plus 16px</title>
                                                <path d="M14 8H2" stroke="#000" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square"></path>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="facet-values js-facet-values js-facet-form clearfix" style="display: none;">
                                        <ul class="facet-list js-facet-list js-toggle-less
                                            " data-max-shown="4" style="visibility: visible;">
                                            <li>
                                                <form action="#" method="get" class="ng-pristine ng-valid">
                                                    <input type="hidden" name="q" value=":price:Trên 20 triệu" autocomplete="off">
                                                    <input type="hidden" name="text" value="" autocomplete="off">
                                                    <label>
                                                        <input title="Trên 20 triệu" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only" data-omni="price">
                                                        <span class="facet-label">
                                                            <span class="facet-mark">
                                                                <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                        <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                            <span class="facet-text">
                                                            Trên 20 triệu&nbsp;
                                                            <span class="facet-value-count">
                                                            (35)</span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </form>
                                            </li>
                                            <li>
                                                <form action="#" method="get" class="ng-pristine ng-valid">
                                                    <input type="hidden" name="q" value=":price:Từ 12 - 15 triệu" autocomplete="off">
                                                    <input type="hidden" name="text" value="" autocomplete="off">
                                                    <label>
                                                        <input title="Từ 12 - 15 triệu" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only" data-omni="price">
                                                        <span class="facet-label">
                                                            <span class="facet-mark">
                                                                <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                        <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                            <span class="facet-text">
                                                            Từ 12 - 15 triệu&nbsp;
                                                            <span class="facet-value-count">
                                                            (9)</span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </form>
                                            </li>
                                            <li>
                                                <form action="#" method="get" class="ng-pristine ng-valid">
                                                    <input type="hidden" name="q" value=":price:Từ 15 - 20 triệu" autocomplete="off">
                                                    <input type="hidden" name="text" value="" autocomplete="off">
                                                    <label>
                                                        <input title="Từ 15 - 20 triệu" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only" data-omni="price">
                                                        <span class="facet-label">
                                                            <span class="facet-mark">
                                                                <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                        <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                            <span class="facet-text">
                                                            Từ 15 - 20 triệu&nbsp;
                                                            <span class="facet-value-count">
                                                            (10)</span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </form>
                                            </li>
                                            <li>
                                                <form action="#" method="get" class="ng-pristine ng-valid">
                                                    <input type="hidden" name="q" value=":price:Từ 5 - 8 triệu" autocomplete="off">
                                                    <input type="hidden" name="text" value="" autocomplete="off">
                                                    <label>
                                                        <input title="Từ 5 - 8 triệu" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only" data-omni="price">
                                                        <span class="facet-label">
                                                            <span class="facet-mark">
                                                                <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                        <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                            <span class="facet-text">
                                                            Từ 5 - 8 triệu&nbsp;
                                                            <span class="facet-value-count">
                                                            (1)</span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </form>
                                            </li>
                                            <li style="display: none;">
                                                <form action="#" method="get" class="ng-pristine ng-valid">
                                                    <input type="hidden" name="q" value=":price:Từ 8 - 12 triệu" autocomplete="off">
                                                    <input type="hidden" name="text" value="" autocomplete="off">
                                                    <label>
                                                        <input title="Từ 8 - 12 triệu" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only" data-omni="price">
                                                        <span class="facet-label">
                                                            <span class="facet-mark">
                                                                <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                        <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                            <span class="facet-text">
                                                            Từ 8 - 12 triệu&nbsp;
                                                            <span class="facet-value-count">
                                                            (6)</span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </form>
                                            </li>
                                        </ul>
                                        <div class="more-less-button-container">
                                            <span class="js-more-button js-show-toggle">
                                            <a href="#" class="js-facet-show-link js-facet-show-link-more">
                                            Hiển thị nhiều hơn</a>
                                            </span>
                                            <span class="js-less-button js-show-toggle">
                                            <a href="#" class="js-facet-show-link js-facet-show-link-less" style="display: none;">
                                            Hiển thị ít hơn</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="facet js-facet">
                                    <div class="facet-name js-facet-name clearfix collapsed" data-tracking="category" data-omni="shop:category filter_category">
                                        Theo Danh mục sản phẩm
                                        <a href="#" class="icon-plus facet-icon facet-icon-open" title="Open" style="background-image: none;">
                                            <svg width="16" height="16" viewbox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <title>Icon/16/Plus 16px</title>
                                                <path d="M8 2v12m6-6H2" stroke="#000" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square"></path>
                                            </svg>
                                        </a>
                                        <a href="#" class="icon-minus facet-icon facet-icon-closed" title="Close" style="background-image: none;">
                                            <svg width="16" height="16" viewbox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <title>Icon/16/Plus 16px</title>
                                                <path d="M14 8H2" stroke="#000" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square"></path>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="facet-values js-facet-values js-facet-form clearfix" style="display: none;">
                                        <ul class="facet-list js-facet-list js-toggle-less
                                            " data-max-shown="4" style="visibility: visible;">
                                            <li>
                                                <form action="#" method="get" class="ng-pristine ng-valid">
                                                    <input type="hidden" name="q" value=":category:AV0104" autocomplete="off">
                                                    <input type="hidden" name="text" value="" autocomplete="off">
                                                    <label>
                                                        <input title="Full HD" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only" data-omni="category">
                                                        <span class="facet-label">
                                                            <span class="facet-mark">
                                                                <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                        <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                            <span class="facet-text">
                                                            Full HD&nbsp;
                                                            <span class="facet-value-count">
                                                            (2)</span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </form>
                                            </li>
                                            <li>
                                                <form action="#" method="get" class="ng-pristine ng-valid">
                                                    <input type="hidden" name="q" value=":category:AV0105" autocomplete="off">
                                                    <input type="hidden" name="text" value="" autocomplete="off">
                                                    <label>
                                                        <input title="QLED 4K" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only" data-omni="category">
                                                        <span class="facet-label">
                                                            <span class="facet-mark">
                                                                <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                        <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                            <span class="facet-text">
                                                            QLED 4K&nbsp;
                                                            <span class="facet-value-count">
                                                            (18)</span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </form>
                                            </li>
                                            <li>
                                                <form action="#" method="get" class="ng-pristine ng-valid">
                                                    <input type="hidden" name="q" value=":category:AV0107" autocomplete="off">
                                                    <input type="hidden" name="text" value="" autocomplete="off">
                                                    <label>
                                                        <input title="QLED 8K" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only" data-omni="category">
                                                        <span class="facet-label">
                                                            <span class="facet-mark">
                                                                <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                        <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                            <span class="facet-text">
                                                            QLED 8K&nbsp;
                                                            <span class="facet-value-count">
                                                            (9)</span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </form>
                                            </li>
                                            <li>
                                                <form action="#" method="get" class="ng-pristine ng-valid">
                                                    <input type="hidden" name="q" value=":category:AV0102" autocomplete="off">
                                                    <input type="hidden" name="text" value="" autocomplete="off">
                                                    <label>
                                                        <input title="UHD 4K" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only" data-omni="category">
                                                        <span class="facet-label">
                                                            <span class="facet-mark">
                                                                <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                        <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                            <span class="facet-text">
                                                            UHD 4K&nbsp;
                                                            <span class="facet-value-count">
                                                            (32)</span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="facet js-facet">
                                    <div class="facet-name js-facet-name clearfix collapsed" data-tracking="variantSize" data-omni="shop:category filter_variantsize">
                                        Theo Size
                                        <a href="#" class="icon-plus facet-icon facet-icon-open" title="Open" style="background-image: none;">
                                            <svg width="16" height="16" viewbox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <title>Icon/16/Plus 16px</title>
                                                <path d="M8 2v12m6-6H2" stroke="#000" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square"></path>
                                            </svg>
                                        </a>
                                        <a href="#" class="icon-minus facet-icon facet-icon-closed" title="Close" style="background-image: none;">
                                            <svg width="16" height="16" viewbox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                <title>Icon/16/Plus 16px</title>
                                                <path d="M14 8H2" stroke="#000" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square"></path>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="facet-values js-facet-values js-facet-form clearfix" style="display:none;">
                                        <ul class="facet-list js-facet-list js-toggle-less
                                            " data-max-shown="4" style="visibility: visible;">
                                            <li>
                                                <form action="#" method="get" class="ng-pristine ng-valid">
                                                    <input type="hidden" name="q" value=":variantSize:85" autocomplete="off">
                                                    <input type="hidden" name="text" value="" autocomplete="off">
                                                    <label>
                                                        <input title="85" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only">
                                                        <span class="facet-label">
                                                            <span class="facet-mark">
                                                                <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                        <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                            <span class="facet-text">
                                                            85&nbsp;
                                                            <span class="facet-value-count">
                                                            (4)</span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </form>
                                            </li>
                                            <li>
                                                <form action="#" method="get" class="ng-pristine ng-valid">
                                                    <input type="hidden" name="q" value=":variantSize:82" autocomplete="off">
                                                    <input type="hidden" name="text" value="" autocomplete="off">
                                                    <label>
                                                        <input title="82" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only">
                                                        <span class="facet-label">
                                                            <span class="facet-mark">
                                                                <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                        <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                            <span class="facet-text">
                                                            82&nbsp;
                                                            <span class="facet-value-count">
                                                            (1)</span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </form>
                                            </li>
                                            <li>
                                                <form action="#" method="get" class="ng-pristine ng-valid">
                                                    <input type="hidden" name="q" value=":variantSize:75" autocomplete="off">
                                                    <input type="hidden" name="text" value="" autocomplete="off">
                                                    <label>
                                                        <input title="75" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only">
                                                        <span class="facet-label">
                                                            <span class="facet-mark">
                                                                <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                        <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                            <span class="facet-text">
                                                            75&nbsp;
                                                            <span class="facet-value-count">
                                                            (8)</span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </form>
                                            </li>
                                            <li>
                                                <form action="#" method="get" class="ng-pristine ng-valid">
                                                    <input type="hidden" name="q" value=":variantSize:70" autocomplete="off">
                                                    <input type="hidden" name="text" value="" autocomplete="off">
                                                    <label>
                                                        <input title="70" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only">
                                                        <span class="facet-label">
                                                            <span class="facet-mark">
                                                                <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                        <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                            <span class="facet-text">
                                                            70&nbsp;
                                                            <span class="facet-value-count">
                                                            (1)</span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </form>
                                            </li>
                                            <li style="display: none;">
                                                <form action="#" method="get" class="ng-pristine ng-valid">
                                                    <input type="hidden" name="q" value=":variantSize:65" autocomplete="off">
                                                    <input type="hidden" name="text" value="" autocomplete="off">
                                                    <label>
                                                        <input title="65" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only">
                                                        <span class="facet-label">
                                                            <span class="facet-mark">
                                                                <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                        <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                            <span class="facet-text">
                                                            65&nbsp;
                                                            <span class="facet-value-count">
                                                            (13)</span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </form>
                                            </li>
                                            <li style="display: none;">
                                                <form action="#" method="get" class="ng-pristine ng-valid">
                                                    <input type="hidden" name="q" value=":variantSize:55" autocomplete="off">
                                                    <input type="hidden" name="text" value="" autocomplete="off">
                                                    <label>
                                                        <input title="55" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only">
                                                        <span class="facet-label">
                                                            <span class="facet-mark">
                                                                <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                        <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                            <span class="facet-text">
                                                            55&nbsp;
                                                            <span class="facet-value-count">
                                                            (14)</span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </form>
                                            </li>
                                            <li style="display: none;">
                                                <form action="#" method="get" class="ng-pristine ng-valid">
                                                    <input type="hidden" name="q" value=":variantSize:50" autocomplete="off">
                                                    <input type="hidden" name="text" value="" autocomplete="off">
                                                    <label>
                                                        <input title="50" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only">
                                                        <span class="facet-label">
                                                            <span class="facet-mark">
                                                                <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                        <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                            <span class="facet-text">
                                                            50&nbsp;
                                                            <span class="facet-value-count">
                                                            (10)</span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </form>
                                            </li>
                                            <li style="display: none;">
                                                <form action="#" method="get" class="ng-pristine ng-valid">
                                                    <input type="hidden" name="q" value=":variantSize:43" autocomplete="off">
                                                    <input type="hidden" name="text" value="" autocomplete="off">
                                                    <label>
                                                        <input title="43" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only">
                                                        <span class="facet-label">
                                                            <span class="facet-mark">
                                                                <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                        <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                            <span class="facet-text">
                                                            43&nbsp;
                                                            <span class="facet-value-count">
                                                            (9)</span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </form>
                                            </li>
                                            <li style="display: none;">
                                                <form action="#" method="get" class="ng-pristine ng-valid">
                                                    <input type="hidden" name="q" value=":variantSize:32" autocomplete="off">
                                                    <input type="hidden" name="text" value="" autocomplete="off">
                                                    <label>
                                                        <input title="32" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only">
                                                        <span class="facet-label">
                                                            <span class="facet-mark">
                                                                <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                        <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                            <span class="facet-text">
                                                            32&nbsp;
                                                            <span class="facet-value-count">
                                                            (1)</span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-cta">
                                <div class="columns">
                                    <div class="column is-6">
                                        <a class="btn btn-link btn-block js-clear-filters">XÓA HẾT</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tab panel finish -->
                        <!-- tab panel start -->
                        <div role="tabpanel" class="tab-pane js-tab-pane" id="sort-by">
                            <div class="mobile-facet-links">
                                <ul class="list-unstyled">
                                    <li class="active">
                                        <a href="neo-qled-8k-1.html?sort=relevance&amp;q=%3Arelevance" class="mobile-facet-links-label" data-omni="relevance">
                                            Sự liên quan
                                            <span class="mobile-facet-icon icon-tick-dark" style="background-image: none;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                    <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="neo-qled-8k-2.html?sort=CustomSort&amp;q=%3ACustomSort" class="mobile-facet-links-label" data-omni="customsort">
                                            search.page.sort.CustomSort
                                            <span class="mobile-facet-icon icon-tick-dark" style="background-image: none;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                    <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="neo-qled-8k-3.html?sort=topRated&amp;q=%3AtopRated" class="mobile-facet-links-label" data-omni="toprated">
                                            Xếp hạng cao nhất
                                            <span class="mobile-facet-icon icon-tick-dark" style="background-image: none;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                    <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="neo-qled-8k-4.html?sort=name-asc&amp;q=%3Aname-asc" class="mobile-facet-links-label" data-omni="name-asc">
                                            Tên (tăng dần)
                                            <span class="mobile-facet-icon icon-tick-dark" style="background-image: none;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                    <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="neo-qled-8k-5.html?sort=name-desc&amp;q=%3Aname-desc" class="mobile-facet-links-label" data-omni="name-desc">
                                            Tên (giảm dần)
                                            <span class="mobile-facet-icon icon-tick-dark" style="background-image: none;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                    <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="neo-qled-8k-6.html?sort=price-asc&amp;q=%3Aprice-asc" class="mobile-facet-links-label" data-omni="price-asc">
                                            Giá (thấp nhất trước)
                                            <span class="mobile-facet-icon icon-tick-dark" style="background-image: none;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                    <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="neo-qled-8k-7.html?sort=price-desc&amp;q=%3Aprice-desc" class="mobile-facet-links-label" data-omni="price-desc">
                                            Giá (cao nhất trước)
                                            <span class="mobile-facet-icon icon-tick-dark" style="background-image: none;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                    <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="js-mobile-filter-wrapper">
                    <nav id="js-mobile-filter-menu-slide-left" class="c-menu mobile-filter-menu-slide-left" style="top: 61px; height: calc(100vh - 61px);display: none">
                        <div class="columns filter-menu-fix">
                            <div class="column">
                                <div class="mobile-menu-header">
                                    Bộ lọc
                                    <a href="#" class="mobile-menu-close icon-close-x" style="background-image: none;">
                                        <svg width="32" height="32" viewbox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                            <title>
                                                6C356472-D97B-409B-B566-B996938961A1
                                            </title>
                                            <path d="M8.47 8.47l15.012 15.012m0-15.012L8.471 23.483" stroke-width="2" stroke="#000" fill="none" fill-rule="evenodd" stroke-linejoin="round"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="columns">
                                <div class="product-facet js-product-facet">
                                    <div class="column facet facet-color js-facet">
                                        <div class="facet-name js-facet-name clearfix collapsed" data-tracking="baseColors" data-omni="shop:category filter_color">
                                            Theo Màu Sắc
                                            <a href="#" class="icon-plus facet-icon facet-icon-open" title="Open" style="background-image: none;">
                                                <svg width="16" height="16" viewbox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                    <title>Icon/16/Plus 16px</title>
                                                    <path d="M8 2v12m6-6H2" stroke="#000" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square"></path>
                                                </svg>
                                            </a>
                                            <a href="#" class="icon-minus facet-icon facet-icon-closed" title="Close" style="background-image: none;">
                                                <svg width="16" height="16" viewbox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                    <title>Icon/16/Plus 16px</title>
                                                    <path d="M14 8H2" stroke="#000" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="facet-colors clearfix js-facet-values" style="display: none;">
                                            <ul class="facet-colors-list js-facet-list js-toggle-less " data-item-height="32" data-max-shown="4" style="visibility: visible;">
                                                <li>
                                                    <form action="#" method="get" class="ng-pristine ng-valid">
                                                        <input type="hidden" name="q" value=":baseColors:Black-000000" autocomplete="off">
                                                        <input type="hidden" name="text" value="" autocomplete="off">
                                                        <label class="facet-colors-label" style="background: #000000">
                                                        <input title="Black" class="facet-colors-input facet-colors-click js-facet-checkbox" type="checkbox" data-omni="color">
                                                        <span class="facet-colors-halo"></span>
                                                        <span class="facet-colors-outerring"></span>
                                                        <span class="facet-colors-tag">
                                                        Black&nbsp;
                                                        <span class="facet-value-count">(28)</span>
                                                        </span>
                                                        </label>
                                                    </form>
                                                </li>
                                                <li>
                                                    <form action="#" method="get" class="ng-pristine ng-valid">
                                                        <input type="hidden" name="q" value=":baseColors:Gray-808080" autocomplete="off">
                                                        <input type="hidden" name="text" value="" autocomplete="off">
                                                        <label class="facet-colors-label" style="background: #808080">
                                                        <input title="Gray" class="facet-colors-input facet-colors-click js-facet-checkbox" type="checkbox" data-omni="color">
                                                        <span class="facet-colors-halo"></span>
                                                        <span class="facet-colors-outerring"></span>
                                                        <span class="facet-colors-tag">
                                                        Gray&nbsp;
                                                        <span class="facet-value-count">(11)</span>
                                                        </span>
                                                        </label>
                                                    </form>
                                                </li>
                                                <li>
                                                    <form action="#" method="get" class="ng-pristine ng-valid">
                                                        <input type="hidden" name="q" value=":baseColors:Silver-c0c0c0" autocomplete="off">
                                                        <input type="hidden" name="text" value="" autocomplete="off">
                                                        <label class="facet-colors-label" style="background: #c0c0c0">
                                                        <input title="Silver" class="facet-colors-input facet-colors-click js-facet-checkbox" type="checkbox" data-omni="color">
                                                        <span class="facet-colors-halo"></span>
                                                        <span class="facet-colors-outerring"></span>
                                                        <span class="facet-colors-tag">
                                                        Silver&nbsp;
                                                        <span class="facet-value-count">(10)</span>
                                                        </span>
                                                        </label>
                                                    </form>
                                                </li>
                                                <li>
                                                    <form action="#" method="get" class="ng-pristine ng-valid">
                                                        <input type="hidden" name="q" value=":baseColors:Gray-777777" autocomplete="off">
                                                        <input type="hidden" name="text" value="" autocomplete="off">
                                                        <label class="facet-colors-label" style="background: #777777">
                                                        <input title="Gray" class="facet-colors-input facet-colors-click js-facet-checkbox" type="checkbox" data-omni="color">
                                                        <span class="facet-colors-halo"></span>
                                                        <span class="facet-colors-outerring"></span>
                                                        <span class="facet-colors-tag">
                                                        Gray&nbsp;
                                                        <span class="facet-value-count">(7)</span>
                                                        </span>
                                                        </label>
                                                    </form>
                                                </li>
                                                <li style="display: none;">
                                                    <form action="#" method="get" class="ng-pristine ng-valid">
                                                        <input type="hidden" name="q" value=":baseColors:Silver-dbdbdb" autocomplete="off">
                                                        <input type="hidden" name="text" value="" autocomplete="off">
                                                        <label class="facet-colors-label" style="background: #dbdbdb">
                                                        <input title="Silver" class="facet-colors-input facet-colors-click js-facet-checkbox" type="checkbox" data-omni="color">
                                                        <span class="facet-colors-halo"></span>
                                                        <span class="facet-colors-outerring"></span>
                                                        <span class="facet-colors-tag">
                                                        Silver&nbsp;
                                                        <span class="facet-value-count">(5)</span>
                                                        </span>
                                                        </label>
                                                    </form>
                                                </li>
                                            </ul>
                                            <div class="more-less-button-container">
                                                <span class="js-more-button js-show-toggle">
                                                <a href="#" class="js-facet-show-link js-facet-show-link-more">
                                                Hiển thị nhiều hơn</a>
                                                </span>
                                                <span class="js-less-button js-show-toggle">
                                                <a href="#" class="js-facet-show-link js-facet-show-link-less" style="display: none;">
                                                Hiển thị ít hơn</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column facet js-facet">
                                        <div class="facet-name js-facet-name clearfix collapsed" data-tracking="price" data-omni="shop:category filter_price">
                                            Theo GIÁ CẢ
                                            <a href="#" class="icon-plus facet-icon facet-icon-open" title="Open" style="background-image: none;">
                                                <svg width="16" height="16" viewbox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                    <title>Icon/16/Plus 16px</title>
                                                    <path d="M8 2v12m6-6H2" stroke="#000" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square"></path>
                                                </svg>
                                            </a>
                                            <a href="#" class="icon-minus facet-icon facet-icon-closed" title="Close" style="background-image: none;">
                                                <svg width="16" height="16" viewbox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                    <title>Icon/16/Plus 16px</title>
                                                    <path d="M14 8H2" stroke="#000" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="facet-values js-facet-values js-facet-form clearfix" style="display: none;">
                                            <ul class="facet-list js-facet-list js-toggle-less
                                                " data-max-shown="4" style="visibility: visible;">
                                                <li>
                                                    <form action="#" method="get" class="ng-pristine ng-valid">
                                                        <input type="hidden" name="q" value=":price:Trên 20 triệu" autocomplete="off">
                                                        <input type="hidden" name="text" value="" autocomplete="off">
                                                        <label>
                                                            <input title="Trên 20 triệu" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only" data-omni="price">
                                                            <span class="facet-label">
                                                                <span class="facet-mark">
                                                                    <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                            <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <span class="facet-text">
                                                                Trên 20 triệu&nbsp;
                                                                <span class="facet-value-count">
                                                                (35)</span>
                                                                </span>
                                                            </span>
                                                        </label>
                                                    </form>
                                                </li>
                                                <li>
                                                    <form action="#" method="get" class="ng-pristine ng-valid">
                                                        <input type="hidden" name="q" value=":price:Từ 12 - 15 triệu" autocomplete="off">
                                                        <input type="hidden" name="text" value="" autocomplete="off">
                                                        <label>
                                                            <input title="Từ 12 - 15 triệu" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only" data-omni="price">
                                                            <span class="facet-label">
                                                                <span class="facet-mark">
                                                                    <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                            <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <span class="facet-text">
                                                                Từ 12 - 15 triệu&nbsp;
                                                                <span class="facet-value-count">
                                                                (9)</span>
                                                                </span>
                                                            </span>
                                                        </label>
                                                    </form>
                                                </li>
                                                <li>
                                                    <form action="#" method="get" class="ng-pristine ng-valid">
                                                        <input type="hidden" name="q" value=":price:Từ 15 - 20 triệu" autocomplete="off">
                                                        <input type="hidden" name="text" value="" autocomplete="off">
                                                        <label>
                                                            <input title="Từ 15 - 20 triệu" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only" data-omni="price">
                                                            <span class="facet-label">
                                                                <span class="facet-mark">
                                                                    <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                            <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <span class="facet-text">
                                                                Từ 15 - 20 triệu&nbsp;
                                                                <span class="facet-value-count">
                                                                (10)</span>
                                                                </span>
                                                            </span>
                                                        </label>
                                                    </form>
                                                </li>
                                                <li>
                                                    <form action="#" method="get" class="ng-pristine ng-valid">
                                                        <input type="hidden" name="q" value=":price:Từ 5 - 8 triệu" autocomplete="off">
                                                        <input type="hidden" name="text" value="" autocomplete="off">
                                                        <label>
                                                            <input title="Từ 5 - 8 triệu" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only" data-omni="price">
                                                            <span class="facet-label">
                                                                <span class="facet-mark">
                                                                    <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                            <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <span class="facet-text">
                                                                Từ 5 - 8 triệu&nbsp;
                                                                <span class="facet-value-count">
                                                                (1)</span>
                                                                </span>
                                                            </span>
                                                        </label>
                                                    </form>
                                                </li>
                                                <li style="display: none;">
                                                    <form action="#" method="get" class="ng-pristine ng-valid">
                                                        <input type="hidden" name="q" value=":price:Từ 8 - 12 triệu" autocomplete="off">
                                                        <input type="hidden" name="text" value="" autocomplete="off">
                                                        <label>
                                                            <input title="Từ 8 - 12 triệu" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only" data-omni="price">
                                                            <span class="facet-label">
                                                                <span class="facet-mark">
                                                                    <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                            <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <span class="facet-text">
                                                                Từ 8 - 12 triệu&nbsp;
                                                                <span class="facet-value-count">
                                                                (6)</span>
                                                                </span>
                                                            </span>
                                                        </label>
                                                    </form>
                                                </li>
                                            </ul>
                                            <div class="more-less-button-container">
                                                <span class="js-more-button js-show-toggle">
                                                <a href="#" class="js-facet-show-link js-facet-show-link-more">
                                                Hiển thị nhiều hơn</a>
                                                </span>
                                                <span class="js-less-button js-show-toggle">
                                                <a href="#" class="js-facet-show-link js-facet-show-link-less" style="display: none;">
                                                Hiển thị ít hơn</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column facet js-facet">
                                        <div class="facet-name js-facet-name clearfix collapsed" data-tracking="category" data-omni="shop:category filter_category">
                                            Theo Danh mục sản phẩm
                                            <a href="#" class="icon-plus facet-icon facet-icon-open" title="Open" style="background-image: none;">
                                                <svg width="16" height="16" viewbox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                    <title>Icon/16/Plus 16px</title>
                                                    <path d="M8 2v12m6-6H2" stroke="#000" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square"></path>
                                                </svg>
                                            </a>
                                            <a href="#" class="icon-minus facet-icon facet-icon-closed" title="Close" style="background-image: none;">
                                                <svg width="16" height="16" viewbox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                    <title>Icon/16/Plus 16px</title>
                                                    <path d="M14 8H2" stroke="#000" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="facet-values js-facet-values js-facet-form clearfix" style="display: none;">
                                            <ul class="facet-list js-facet-list js-toggle-less">
                                                <li>
                                                    <input type="hidden" name="q" autocomplete="off">
                                                    <input type="hidden" name="text" value="" autocomplete="off">
                                                    <label>
                                                        <input title="Full HD" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only">
                                                        <span class="facet-label">
                                                            <span class="facet-mark">
                                                                <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                        <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                    </svg>
                                                                </span>
                                                            </span>
                                                            <span class="facet-text">
                                                            Full HD&nbsp;
                                                            <span class="facet-value-count">
                                                            (2)</span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <form action="#" method="get" class="ng-pristine ng-valid">
                                                        <input type="hidden" name="q" value=":category:AV0105" autocomplete="off">
                                                        <input type="hidden" name="text" value="" autocomplete="off">
                                                        <label>
                                                            <input title="QLED 4K" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only" data-omni="category">
                                                            <span class="facet-label">
                                                                <span class="facet-mark">
                                                                    <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                            <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <span class="facet-text">
                                                                QLED 4K&nbsp;
                                                                <span class="facet-value-count">
                                                                (18)</span>
                                                                </span>
                                                            </span>
                                                        </label>
                                                    </form>
                                                </li>
                                                <li>
                                                    <form action="#" method="get" class="ng-pristine ng-valid">
                                                        <input type="hidden" name="q" value=":category:AV0107" autocomplete="off">
                                                        <input type="hidden" name="text" value="" autocomplete="off">
                                                        <label>
                                                            <input title="QLED 8K" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only" data-omni="category">
                                                            <span class="facet-label">
                                                                <span class="facet-mark">
                                                                    <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                            <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <span class="facet-text">
                                                                QLED 8K&nbsp;
                                                                <span class="facet-value-count">
                                                                (9)</span>
                                                                </span>
                                                            </span>
                                                        </label>
                                                    </form>
                                                </li>
                                                <li>
                                                    <form action="#" method="get" class="ng-pristine ng-valid">
                                                        <input type="hidden" name="q" value=":category:AV0102" autocomplete="off">
                                                        <input type="hidden" name="text" value="" autocomplete="off">
                                                        <label>
                                                            <input title="UHD 4K" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only" data-omni="category">
                                                            <span class="facet-label">
                                                                <span class="facet-mark">
                                                                    <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                            <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <span class="facet-text">
                                                                UHD 4K&nbsp;
                                                                <span class="facet-value-count">
                                                                (32)</span>
                                                                </span>
                                                            </span>
                                                        </label>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="column facet js-facet">
                                        <div class="facet-name js-facet-name clearfix collapsed" data-tracking="variantSize" data-omni="shop:category filter_variantsize">
                                            Theo Size
                                            <a href="#" class="icon-plus facet-icon facet-icon-open" title="Open" style="background-image: none;">
                                                <svg width="16" height="16" viewbox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                    <title>Icon/16/Plus 16px</title>
                                                    <path d="M8 2v12m6-6H2" stroke="#000" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square"></path>
                                                </svg>
                                            </a>
                                            <a href="#" class="icon-minus facet-icon facet-icon-closed" title="Close" style="background-image: none;">
                                                <svg width="16" height="16" viewbox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                                    <title>Icon/16/Plus 16px</title>
                                                    <path d="M14 8H2" stroke="#000" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="square"></path>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="facet-values js-facet-values js-facet-form clearfix" style="display:none;">
                                            <ul class="facet-list js-facet-list js-toggle-less
                                                " data-max-shown="4" style="visibility: visible;">
                                                <li>
                                                    <form action="#" method="get" class="ng-pristine ng-valid">
                                                        <input type="hidden" name="q" value=":variantSize:85" autocomplete="off">
                                                        <input type="hidden" name="text" value="" autocomplete="off">
                                                        <label>
                                                            <input title="85" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only">
                                                            <span class="facet-label">
                                                                <span class="facet-mark">
                                                                    <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                            <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <span class="facet-text">
                                                                85&nbsp;
                                                                <span class="facet-value-count">
                                                                (4)</span>
                                                                </span>
                                                            </span>
                                                        </label>
                                                    </form>
                                                </li>
                                                <li>
                                                    <form action="#" method="get" class="ng-pristine ng-valid">
                                                        <input type="hidden" name="q" value=":variantSize:82" autocomplete="off">
                                                        <input type="hidden" name="text" value="" autocomplete="off">
                                                        <label>
                                                            <input title="82" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only">
                                                            <span class="facet-label">
                                                                <span class="facet-mark">
                                                                    <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                            <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <span class="facet-text">
                                                                82&nbsp;
                                                                <span class="facet-value-count">
                                                                (1)</span>
                                                                </span>
                                                            </span>
                                                        </label>
                                                    </form>
                                                </li>
                                                <li>
                                                    <form action="#" method="get" class="ng-pristine ng-valid">
                                                        <input type="hidden" name="q" value=":variantSize:75" autocomplete="off">
                                                        <input type="hidden" name="text" value="" autocomplete="off">
                                                        <label>
                                                            <input title="75" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only">
                                                            <span class="facet-label">
                                                                <span class="facet-mark">
                                                                    <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                            <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <span class="facet-text">
                                                                75&nbsp;
                                                                <span class="facet-value-count">
                                                                (8)</span>
                                                                </span>
                                                            </span>
                                                        </label>
                                                    </form>
                                                </li>
                                                <li>
                                                    <form action="#" method="get" class="ng-pristine ng-valid">
                                                        <input type="hidden" name="q" value=":variantSize:70" autocomplete="off">
                                                        <input type="hidden" name="text" value="" autocomplete="off">
                                                        <label>
                                                            <input title="70" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only">
                                                            <span class="facet-label">
                                                                <span class="facet-mark">
                                                                    <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                            <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <span class="facet-text">
                                                                70&nbsp;
                                                                <span class="facet-value-count">
                                                                (1)</span>
                                                                </span>
                                                            </span>
                                                        </label>
                                                    </form>
                                                </li>
                                                <li style="display: none;">
                                                    <form action="#" method="get" class="ng-pristine ng-valid">
                                                        <input type="hidden" name="q" value=":variantSize:65" autocomplete="off">
                                                        <input type="hidden" name="text" value="" autocomplete="off">
                                                        <label>
                                                            <input title="65" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only">
                                                            <span class="facet-label">
                                                                <span class="facet-mark">
                                                                    <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                            <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <span class="facet-text">
                                                                65&nbsp;
                                                                <span class="facet-value-count">
                                                                (13)</span>
                                                                </span>
                                                            </span>
                                                        </label>
                                                    </form>
                                                </li>
                                                <li style="display: none;">
                                                    <form action="#" method="get" class="ng-pristine ng-valid">
                                                        <input type="hidden" name="q" value=":variantSize:55" autocomplete="off">
                                                        <input type="hidden" name="text" value="" autocomplete="off">
                                                        <label>
                                                            <input title="55" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only">
                                                            <span class="facet-label">
                                                                <span class="facet-mark">
                                                                    <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                            <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <span class="facet-text">
                                                                55&nbsp;
                                                                <span class="facet-value-count">
                                                                (14)</span>
                                                                </span>
                                                            </span>
                                                        </label>
                                                    </form>
                                                </li>
                                                <li style="display: none;">
                                                    <form action="#" method="get" class="ng-pristine ng-valid">
                                                        <input type="hidden" name="q" value=":variantSize:50" autocomplete="off">
                                                        <input type="hidden" name="text" value="" autocomplete="off">
                                                        <label>
                                                            <input title="50" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only">
                                                            <span class="facet-label">
                                                                <span class="facet-mark">
                                                                    <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                            <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <span class="facet-text">
                                                                50&nbsp;
                                                                <span class="facet-value-count">
                                                                (10)</span>
                                                                </span>
                                                            </span>
                                                        </label>
                                                    </form>
                                                </li>
                                                <li style="display: none;">
                                                    <form action="#" method="get" class="ng-pristine ng-valid">
                                                        <input type="hidden" name="q" value=":variantSize:43" autocomplete="off">
                                                        <input type="hidden" name="text" value="" autocomplete="off">
                                                        <label>
                                                            <input title="43" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only">
                                                            <span class="facet-label">
                                                                <span class="facet-mark">
                                                                    <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                            <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <span class="facet-text">
                                                                43&nbsp;
                                                                <span class="facet-value-count">
                                                                (9)</span>
                                                                </span>
                                                            </span>
                                                        </label>
                                                    </form>
                                                </li>
                                                <li style="display: none;">
                                                    <form action="#" method="get" class="ng-pristine ng-valid">
                                                        <input type="hidden" name="q" value=":variantSize:32" autocomplete="off">
                                                        <input type="hidden" name="text" value="" autocomplete="off">
                                                        <label>
                                                            <input title="32" type="checkbox" class="facet-checkbox js-facet-checkbox sr-only">
                                                            <span class="facet-label">
                                                                <span class="facet-mark">
                                                                    <span class="facet-icon icon-tick-dark no-rtl" style="background-image: none;">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                                            <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                                        </svg>
                                                                    </span>
                                                                </span>
                                                                <span class="facet-text">
                                                                32&nbsp;
                                                                <span class="facet-value-count">
                                                                (1)</span>
                                                                </span>
                                                            </span>
                                                        </label>
                                                    </form>
                                                </li>
                                            </ul>
                                            <div class="more-less-button-container">
                                                <span class="js-more-button js-show-toggle">
                                                <a href="#" class="js-facet-show-link js-facet-show-link-more">
                                                Hiển thị nhiều hơn</a>
                                                </span>
                                                <span class="js-less-button js-show-toggle">
                                                <a href="#" class="js-facet-show-link js-facet-show-link-less" style="display: none;">
                                                Hiển thị ít hơn</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="columns">
                                <div class="column is-6">
                                    <a href="neo-qled-8k-8.html?q=&amp;?sort=relevance" class="h6 col-xs-6 text-uppercase no-padding text-underline" title="Clear all applied facets">Xóa hết</a>
                                </div>
                                <div class="column is-6">
                                    <a href="neo-qled-8k-8.html?q=&amp;?sort=relevance" id="refineSearchMobile" class="h6 col-xs-6 text-uppercase text-right no-padding  text-underline" title="ÁP DỤNG">ÁP DỤNG</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <nav id="js-mobile-filter-menu-slide-left-sort" class="c-menu mobile-filter-menu-slide-left" style="top: 61px; height: calc(100vh - 61px); display: none;">
                        <div class="mobile-menu-header">
                            Sắp xếp theo
                            <a href="#" class="mobile-menu-close icon-close-x" style="background-image: none;">
                                <svg width="32" height="32" viewbox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <title>6C356472-D97B-409B-B566-B996938961A1</title>
                                    <path d="M8.47 8.47l15.012 15.012m0-15.012L8.471 23.483" stroke-width="2" stroke="#000" fill="none" fill-rule="evenodd" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mobile-facets">
                                    <div class="mobile-facet-links">
                                        <ul class="list-unstyled">
                                            <li class="active">
                                                <a href="neo-qled-8k-1.html?sort=relevance&amp;q=%3Arelevance" class="mobile-facet-links-label" data-omni="relevance">
                                                    Sự liên quan
                                                    <span class="mobile-facet-icon icon-tick-dark" style="background-image: none;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                            <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="neo-qled-8k-2.html?sort=CustomSort&amp;q=%3ACustomSort" class="mobile-facet-links-label" data-omni="customsort">
                                                    search.page.sort.CustomSort
                                                    <span class="mobile-facet-icon icon-tick-dark" style="background-image: none;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                            <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="neo-qled-8k-3.html?sort=topRated&amp;q=%3AtopRated" class="mobile-facet-links-label" data-omni="toprated">
                                                    Xếp hạng cao nhất
                                                    <span class="mobile-facet-icon icon-tick-dark" style="background-image: none;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                            <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="neo-qled-8k-4.html?sort=name-asc&amp;q=%3Aname-asc" class="mobile-facet-links-label" data-omni="name-asc">
                                                    Tên (tăng dần)
                                                    <span class="mobile-facet-icon icon-tick-dark" style="background-image: none;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                            <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="neo-qled-8k-5.html?sort=name-desc&amp;q=%3Aname-desc" class="mobile-facet-links-label" data-omni="name-desc">
                                                    Tên (giảm dần)
                                                    <span class="mobile-facet-icon icon-tick-dark" style="background-image: none;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                            <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="neo-qled-8k-6.html?sort=price-asc&amp;q=%3Aprice-asc" class="mobile-facet-links-label" data-omni="price-asc">
                                                    Giá (thấp nhất trước)
                                                    <span class="mobile-facet-icon icon-tick-dark" style="background-image: none;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                            <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="neo-qled-8k-7.html?sort=price-desc&amp;q=%3Aprice-desc" class="mobile-facet-links-label" data-omni="price-desc">
                                                    Giá (cao nhất trước)
                                                    <span class="mobile-facet-icon icon-tick-dark" style="background-image: none;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewbox="3 3 13 12">
                                                            <path fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="square" stroke-width="2" d="M4 9.1l3 2.4L11.5 4"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <!-- other content in here -->
                </div>
            </div>

            <div class="container">
                <div class="columns is-hidden-mobile">
                    <div class="column is-5">
                        <div class="plp-breadcrumb">
                            <div class="breadcrumb-section hidden-xs hidden-sm">
                                <ul class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
                                    <li property="itemListElement" typeof="ListItem">
                                        <a href="/"><u>Trang chủ</u></a>
                                    </li>
                                    <li property="itemListElement" typeof="ListItem">
                                        <a href="{{ route('category-product', $data->link) }}"><u>Sảnphẩm</u></a>
                                    </li>
                                    <li class="active" property="itemListElement" typeof="ListItem">
                                        {{ @$data->name }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="columns">
                    <div class="column is-2 is-hidden-mobile">
                       
                            <div class="" style="opacity: 1; display: block;">
                                <div class="">
                                    <div class="pf-finder-v2__filters-list-top">
                                        <h2 class="pf-finder-v2__filters-list-top-text">Bộ lọc</h2>
                                        <a href="javascript:void(0)" class="pf-finder-v2__filters-list-top-closed" role="button" title="">
                                            <span class="hidden">Đóng</span>
                                            <svg class="icon" focusable="false">
                                                <use xlink:href="#delete-bold" href="#delete-bold"></use>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="pf-finder-v2__filters-list-list">
                                        <div class="pf-finder-v2__filters-list-list-wrap js-pf-filter_list-wrap">
                                           
                                            <div class="pf-finder-v2__filters-list-list-area pf-finder-v2__filters-list-list--active" style="display:block">
                                                <h3 class="pf-finder-v2__filters-list-list-headline">
                                                    <a href="javascript:void(0)" class="pf-finder-v2__filters-list-list-headline-text">
                                                        Dòng TV
                                                        <span class="hidden" data-global-text="{&quot;Expand&quot; : &quot;Click to Expand&quot;,&quot;Collapse&quot; : &quot;Nhấp để thu gọn&quot;}">Nhấp để thu gọn</span>
                                                        <svg class="icon icon--open" focusable="false">
                                                            <use xlink:href="#open-down-regular" href="#open-down-regular"></use>
                                                        </svg>
                                                        <svg class="icon icon--closed" focusable="false">
                                                            <use xlink:href="#close-up-regular" href="#close-up-regular"></use>
                                                        </svg>
                                                    </a>
                                                </h3>

                                                <div class="pf-finder-v2__filters-list-item-wrap" style="">
                                                    <ul class="pf-finder-v2__filters-list-list-item">

                                                        <?php 

                                                            $groups = App\Models\groupProduct::where('parent_id', 17)->get()->take(10);
                                                        ?>
                                                        @foreach($groups as $key => $val)
                                                        <li class="pf-finder-v2__filters-list-list-items">
                                                            <div class="checkbox-radio">
                                                                <input type="checkbox" name="category" class="checkbox-pop" value="{{ $val->id }}" id="checkbox-{{ $key }}">
                                                                <label class="checkbox-radio__label" for="checkbox-{{ $key }}">
                                                                <span class="checkbox-radio__label-text">{{ $val->name }}</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        @endforeach
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                           <!--  <div class="pf-finder-v2__filters-list-list-area pf-finder-v2__filters-list-list--active" style="display:block">
                                                <h3 class="pf-finder-v2__filters-list-list-headline">
                                                    <a href="javascript:void(0)" class="pf-finder-v2__filters-list-list-headline-text">
                                                    Theo giá<span class="hidden">Nhấp để thu gọn</span>
                                                    </a>
                                                </h3>
                                                <div class="pf-finder-v2__filters-list-item-wrap" style="">
                                                    <ul class="pf-finder-v2__filters-list-list-item">
                                                        <li class="pf-finder-v2__filters-list-list-items" style="display:block">
                                                            <div class="checkbox-radio">
                                                                <input type="checkbox" value="1" name="price" class="hidden price" id="price-1">
                                                                <label class="checkbox-radio__label" for="price-1">
                                                                <span class="checkbox-radio__label-text">Trên 20 triệu</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="pf-finder-v2__filters-list-list-items" style="display:block">
                                                            <div class="checkbox-radio">
                                                                <input type="checkbox" value="2" name="price" class="hidden price" id="price-2">
                                                                <label class="checkbox-radio__label" for="price-2">
                                                                <span class="checkbox-radio__label-text">Từ 15 - 20 triệu</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="pf-finder-v2__filters-list-list-items" style="display:block">
                                                            <div class="checkbox-radio">
                                                                <input type="checkbox" value="3" name="price" class="hidden price" id="price-3">
                                                                <label class="checkbox-radio__label" for="price-3">
                                                                <span class="checkbox-radio__label-text">Từ 12 - 15 triệu</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="pf-finder-v2__filters-list-list-items" style="display:block">
                                                            <div class="checkbox-radio">
                                                                <input type="checkbox" value="4" name="price" class="hidden price" id="price-4">
                                                                <label class="checkbox-radio__label" for="price-4">
                                                                <span class="checkbox-radio__label-text">Từ 8 - 12 triệu</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li class="pf-finder-v2__filters-list-list-items" style="display:block">
                                                            <div class="checkbox-radio">
                                                                <input type="checkbox" value="5" name="price" class="hidden price" id="price-5">
                                                                <label class="checkbox-radio__label" for="price-5">
                                                                <span class="checkbox-radio__label-text">Từ 5 - 8 triệu</span>
                                                                </label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="pf-finder-v2__filters-list-list-area pf-finder-v2__filters-list-list--active" name="filterAvailable" data-name="Display Size_2" style="display:block">
                                                <h3 class="pf-finder-v2__filters-list-list-headline">
                                                    <a href="javascript:void(0)" class="pf-finder-v2__filters-list-list-headline-text">
                                                        Kích Thước Màn Hình
                                                        <svg class="icon icon--open" focusable="false">
                                                            <use xlink:href="#open-down-regular" href="#open-down-regular"></use>
                                                        </svg>
                                                        <svg class="icon icon--closed" focusable="false">
                                                            <use xlink:href="#close-up-regular" href="#close-up-regular"></use>
                                                        </svg>
                                                    </a>
                                                </h3>
                                                <div class="pf-finder-v2__filters-list-item-wrap" style="">
                                                    <ul class="pf-finder-v2__filters-list-list-item">
                                                        <li class="pf-finder-v2__filters-list-list-items" style="display:block">
                                                            <input type="checkbox" value="6" name="size" class="hidden size" id="size-6">
                                                            <label class="checkbox-radio__label" for="size-6">
                                                            <span class="checkbox-radio__label-text">Trên 80 inch</span>
                                                            </label>
                                                        </li>
                                                        <li class="pf-finder-v2__filters-list-list-items" style="display:block">
                                                            <input type="checkbox" value="7" name="size" class="hidden size" id="size-7">
                                                            <label class="checkbox-radio__label" for="size-7">
                                                            <span class="checkbox-radio__label-text">75 inch</span>
                                                            </label>
                                                        </li>
                                                        <li class="pf-finder-v2__filters-list-list-items" style="display:block">
                                                            <input type="checkbox" value="8" name="size" class="hidden size" id="size-8">
                                                            <label class="checkbox-radio__label" for="size-8">
                                                            <span class="checkbox-radio__label-text">60 - 70 inch</span>
                                                            </label>
                                                        </li>
                                                        <li class="pf-finder-v2__filters-list-list-items" style="display:block">
                                                            <input type="checkbox" value="9" name="size" class="hidden size" id="size-9">
                                                            <label class="checkbox-radio__label" for="size-9">
                                                            <span class="checkbox-radio__label-text">50 - 55 inch</span>
                                                            </label>
                                                        </li>
                                                        <li class="pf-finder-v2__filters-list-list-items" style="display:block">
                                                            <input type="checkbox" value="10" name="size" class="hidden size" id="size-10">
                                                            <label class="checkbox-radio__label" for="size-10">
                                                            <span class="checkbox-radio__label-text">Dưới 50 inch</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                     @if(count($product))
                    <ul class="column is-10 product-listing product-grid plp-content">

                        @foreach($product as $val)
                        
                        <li class="product-item three-cols-tile">
                            <h1 class="sr-only">{{ @$val->Name }}</h1>
                           <!--  <div class="merchandising-flag text-center wishlist" style="height: 30px;min-height: 30px;">
                                <div class="badge">
                                    <span>MIỄN PHÍ CÔNG LẮP ĐẶT TRONG 7 NGÀY</span>
                                </div>
                            </div> -->
                            <div class="">
                                    <div class="item-img has-text-centered">
                                        <a href="{{ route('details', $val->Link) }}">
                                            <div class="progressive-media progressive-media-image progressive-media-unloaded" data-img-src="{{ asset($val->Image) }}">
                                                <div class="progressive-media-aspect" style="padding-bottom: 80%;">
                                                    <div class="progressive-media-aspect-inner">
                                                        <img class="progressive-media-image-placeholder progressive-media-content progressive-media-blur" src="{{ asset($val->Image) }}" crossorigin="anonymous"><img class="progressive-media-image-placeholder progressive-media-image-placeholder-edge progressive-media-content" src="{{ asset($val->Image) }}" crossorigin="anonymous">
                                                        <noscript><img class="progressive-media-image-original progressive-media-content" src="{{ asset($val->Image) }}"></noscript>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <div class="product-content-wrapper">
                                <div class="item-flex-top">
                                    <div class="variable-height-wrapper-s1">
                                        <div class="name">
                                            <a title="{{ $val->Name }}" class="product-title" href="{{ route('details', $val->Link) }}">
                                                {{ @$val->Name }}                                          
                                            </a>

                                            <span class="product-sku">{{ @$val->productSku  }}</span>
                                        </div>
                                    </div>
                                    <div class="variable-height-wrapper-s2">
                                        <div class="merchandising-wrapper">
                                            <div class="merchandising-box">
                                                <div class="merchandising-text text-center">
                                                    {!! @$val->Salient_Features !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-flex-bottom">
                                    <div class="product-item-size">
                                        <ul class="product-item-size-list">
                                            <li class="product-item-size active">

                                                <?php 
                                                   $pattern = '/[1-9][0-9]{0,2}\sinch/';
                                                   $string = strtolower($val->Name);
                                                ?>
                                                @if (preg_match($pattern, $string, $matches)) 
                                                       {{ intval($matches[0]) }}
                                                @endif                                         
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="shipping-eta"></div>
                                    <div class="price">
                                        <!--                                        <div class="price-discount">-->
                                        <!--                                        <span>-->
                                        <!--                                            <span>Giảm 26%</span>-->
                                        <!--                                        </span>-->
                                        <!--                                        </div>-->
                                        <span>{{ @number_format($val->Price) }} ₫</span>
                                    </div>
                                 
                                    <div class="product-card-v2__cta">
                                        @if(number_format($val->Price)>0)
                                        <div class="btn btn-default btn-cart" onclick="addToCart({{ $val->id }})">Thêm vào giỏ hàng</div>
                                        @endif
                                        <a class="cta cta--outlined cta--black" href="{{ route('details', $val->Link) }}">TÌM HIỂU THÊM</a>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-notification">
                                <div class="modal fade" id="addToCartNotification" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body text-center">
                                                <img src="{{ asset('images/checked.svg') }}">
                                                <p>Sản phẩm đã được thêm vào giỏ hàng.</p>
                                                <a href="../cart/index.html" class="btn btn-default btn-block mini-cart-checkout-button">
                                                THANH TOÁN
                                                </a>
                                                <a href="#" data-dismiss="modal" class="btn btn-link addtocart-continue-shopping">
                                                Tiếp tục mua hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                      
                        @endforeach
                        
                        {{  $product->links()  }}
                    </ul>


                    @endif
                </div>
            </div>
        </div>
    </div>

    @push('js')

    <script src="{{ asset('assets/75a5fa0c/js/progressive-media.min.js')}}"></script>
    <script src="{{ asset('assets/4f253995/jquery.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
    crossorigin="anonymous"></script>

    <script src="{{ asset('assets/f8532ac8/yii.js')}}"></script>
    <script src="{{ asset('assets/35deb2b4/js/bootstrap.bundle.js')}}"></script>
    <script src="{{ asset('swiper@8.4.2/swiper-bundle.min.js')}}"></script>

    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script type="text/javascript">

        var check_val =[]; 

        var check_val1 = [];

        $('.size').change(function(){
             if($(this).prop('checked') === true){

                check_val1.push($(this).val());

                alert(check_val1);


            }    
        }) ;  


        $('.checkbox-pop').change(function(){
            if($(this).prop('checked') === true){

                check_val.push($(this).val());

            }
            else{

                const index = check_val.indexOf($(this).val());
                if (index > -1) { 
                  check_val.splice(index, 1); 
                }

            }

          

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        
            $.ajax({
                type: 'POST',
                url: "{{ route('filter-checkbox') }}",
                data: {
                    data: JSON.stringify(check_val),
                   
                },
               
                success: function(result){

                    $('.plp-content').html('');

                    $('.plp-content').html(result);
                    
                }
            });
        });
       
        
            function addToCart(id) {
    
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            
                $.ajax({
                    type: 'POST',
                    url: "{{ route('cart') }}",
                    data: {
                        product_id: id,
                        gift_check:$('#gift_checked').val()
                           
                    },
                    beforeSend: function() {
                       
                        $('.loader').show();

                    },
                    success: function(result){
            
                       window.location.href = result; 

                    }
                });

            }
    </script>

  

    @endpush


@endsection 
    