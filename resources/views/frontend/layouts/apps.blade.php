<!DOCTYPE html>
<html lang="vi-VN">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('images/logo.jpg') }}" rel="shortcut icon" type="image/x-icon">
        @if(isset($meta))
        <title>{{ $meta->meta_title }}</title>
        <meta property="og:description" content="{{ $meta->meta_content }}" /> 
        <meta name="keywords" content="{{ $meta->meta_key_words??'sieu thi dien may, siêu thị điện máy, mua điện máy giá rẻ, siêu thị điện máy uy tín, siêu thị điện máy trực tuyến' }}"/>

        @else
        <title> Siêu Thị Tivi - Mua Sắm Tivi Chính Hãng Giá Rẻ Tại Kho</title>
        <meta name="robots" content="noindex, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
        <meta property="og:title" content="Siêu Thị Tivi - Mua Sắm Tivi Chính Hãng Giá Rẻ Tại Kho" />
        <meta property="og:description" content="Siêu Thị Tivi Chuyên Cung Cấp Và Phân Phối Sản Phẩm Tivi Chính Hãng Sony, LG, SamSung, TCL,... Giá Rẻ Nhất Tại Kho. Dịch Vụ Uy Tín Chuyên Nghiệp." />
       
        @endif
        <meta name="csrf-param" content="_csrf">
       <meta name="csrf-token" content="{{ csrf_token() }}">

        @stack('style')
        <style type="text/css">
            .btns{
                border: 0;
               
            }
             nav.navbar a {
               
                font-size: 15px;
            }
            .merchandising-wrapper{
                height: 300px;
            }
        </style>
        
    </head>
    <body>
        <div class="wrap">
            <style type="text/css">
                .progressive-media .progressive-media-content {
                    height: auto !important;
                }
            </style>
            <div class="navbar-fixed-top">
                <div class="container is-fullhd sm-navigation">
                    <nav class="navbar" role="navigation" aria-label="main navigation">
                        <div class="navbar-brand">
                            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            </a>
                            <a class="navbar-item" href="/">
                            <img src="{{ asset('images/logo.jpg')  }}" width="112" height="28">
                            </a>
                            <div class="is-hidden-tablet search-mobile">
                                <form action="{{ route('search-product-frontend') }}" method="get">
                                    <input type="text" placeholder="Tìm kiếm" name="key" id="s" maxlength="40">
                                    <button type="button" class="btns" value="Tìm kiếm" >
                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 96 96" focusable="false">
                                            <path d="M40.581 4.09c20.126 0 36.5 16.374 36.5 36.5a36.325 36.325 0 01-7.963 22.733l22.8 22.948-5.674 5.639-22.767-22.913a36.327 36.327 0 01-22.896 8.093c-20.126 0-36.5-16.374-36.5-36.5s16.374-36.5 36.5-36.5zm0 8c-15.715 0-28.5 12.785-28.5 28.5s12.785 28.5 28.5 28.5 28.5-12.785 28.5-28.5-12.785-28.5-28.5-28.5z"></path>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                            <a class="is-hidden-tablet navbar-item" style="margin-left: auto" href="/"><img style="height: 40px;" src="{{ asset('images/logo.jpg')}}">
                            </a>
                        </div>


                        <?php 

                            $group = App\Models\groupProduct::where('group_product_id', 5)->get()->take(10);

                             $cart = Gloudemans\Shoppingcart\Facades\Cart::content();

                            $number_cart = count($cart);


                        ?>
                        <div id="navbarBasicExample" class="navbar-menu">
                            <div class="navbar-start">
                                @foreach($group as $val)
                                <a class="navbar-item" href="{{ route('category-product', $val->link) }}">{{ $val->name }}</a>
                                @endforeach
                                <a class="navbar-item" href="{{ route('tins') }}">tin tức</a>
                            </div>
                            <div class="navbar-end is-hidden-mobile">
                                <div class="navbar-item">
                                    <form action="{{ route('search-product-frontend') }}" method="get">
                                        <input type="text" placeholder="Tìm kiếm" name="key" id="s" maxlength="40">
                                        <button type="submit" class="btns" value="Tìm kiếm" >
                                            <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 96 96" focusable="false">
                                                <path d="M40.581 4.09c20.126 0 36.5 16.374 36.5 36.5a36.325 36.325 0 01-7.963 22.733l22.8 22.948-5.674 5.639-22.767-22.913a36.327 36.327 0 01-22.896 8.093c-20.126 0-36.5-16.374-36.5-36.5s16.374-36.5 36.5-36.5zm0 8c-15.715 0-28.5 12.785-28.5 28.5s12.785 28.5 28.5 28.5 28.5-12.785 28.5-28.5-12.785-28.5-28.5-28.5z"></path>
                                            </svg>
                                        </button>
                                    </form>
                                    <a href="/"><img src="{{ asset('images/logo.jpg') }}"></a>
                                    <a class="position-relative" href="{{ route('cart-sttv') }}">
                                    <img src="{{ asset('images/cart-outline.png') }}">
                                    <span class="badge badge-danger badge-cart">{{ $number_cart }}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <style>
            </style>


            @yield('content')

            
        </div>
        <footer class="footer">
            <div class="footer">
                <div class="footer-column container">
                    <div class="columns">
                        <div class="footer-column__item column is-one-quarter">
                            <div class="footer-category">
                                <h3 class="footer-category__title">Sản Phẩm</h3>
                                <div class="footer-category__list-wrap">
                                    <ul class="footer-category__list">
                                         <?php 

                                            $groups = App\Models\groupProduct::where('parent_id', 17)->get()->take(10);
                                        ?>
                                        @foreach($groups as $key => $val)
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="{{ route('category-product', $val->link) }}" title="">{{ $val->name }}</a>
                                        </li>
                                        @endforeach
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="footer-column__item column is-one-quarter">
                            <div class="footer-category">
                                <h3 class="footer-category__title">Về chúng tôi</h3>
                                <div class="footer-category__list-wrap">
                                    <ul class="footer-category__list">
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="#" title="">
                                                Giới thiệu
                                            
                                            </a>
                                        </li>
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="#" title="">
                                            Chính sách bảo hành
                                            </a>
                                        </li>
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="#" title="">
                                            Chính sách vận chuyển & giao nhận
                                            </a>
                                        </li>
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="#" title="">
                                            Quy định hình thức thanh toán
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="footer-column__item column is-one-quarter">
                            <div class="footer-category">
                                <h3 class="footer-category__title">Bạn Cần Hỗ Trợ?</h3>
                                <div class="footer-category__list-wrap">
                                    <ul class="footer-category__list">
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="#" aria-label="Liên Hệ" title="">Liên Hệ</a>
                                        </li>
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="#" title="">Hỗ Trợ Kỹ
                                            thuật</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="footer-column__item column is-one-quarter">
                            <div class="footer-category">
                                <h3 class="footer-category__title">Hotline</h3>
                                <p>0912 326 577</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom container">
                    <div class="footer-copyright-wrap">
                        <div class="footer-copyright-align">
                            <p class="footer-copyright">©2022Siêu thị tivi </p>
                            <div class="footer-legal">
                            </div>
                        </div>
                      <!--   <div class="footer-local-logo">
                            <div class="footer-local-logo--wrap">
                                <div class="footer-local-logo__item">
                                    <a class="footer-mark__link" href="https://www.online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=14561" target="_blank">
                                        
                                    </a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </footer>
        <a class="fab show" title="Go to Top" onclick="window.scrollTo({ top: 0, behavior: 'smooth' });">
        <img class="fab__icon" alt="" src="{{ asset('images/arrow-up-circle-outline.svg') }}">
        </a>

        @stack('js')

        
    </body>
</html>