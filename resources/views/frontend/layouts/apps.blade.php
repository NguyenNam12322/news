
<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" />
        <link rel="shortcut icon" href="./wp-content/themes/meovatgiadinh/assets/images/favicon.png">
        <link rel="apple-touch-icon" sizes="180x180" href="https://meovatgiadinh.vn/wp-content/themes/meovatgiadinh/assets/images/appleIcon.png">
        <link rel="stylesheet" href="./wp-content/themes/meovatgiadinh/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="./wp-content/themes/meovatgiadinh/assets/css/app.css" />
        <link rel="stylesheet" href="./wp-content/themes/meovatgiadinh/assets/css/style.css" />
        <link rel="stylesheet" href="./wp-content/themes/meovatgiadinh/assets/css/responsive.css" />
        <link rel="stylesheet" href="./wp-content/themes/meovatgiadinh/assets/css/custom.css" />
        <link rel="stylesheet" href="./wp-content/themes/meovatgiadinh/assets/css/all.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
         @if(isset($meta))
        <title>{{ $meta->meta_title }}</title>
        <meta property="og:description" content="{{ $meta->meta_content }}" /> 
        <meta name="keywords" content="{{ $meta->meta_key_words??'sieu thi dien may, siêu thị điện máy, mua điện máy giá rẻ, siêu thị điện máy uy tín, siêu thị điện máy trực tuyến' }}"/>

        @else
        <title>Mẹo Vặt Gia Đình - Chia sẻ những mẹo vặt gia đình, cuộc sống hay nhất</title>
      
        <!-- This site is optimized with the Yoast SEO Premium plugin v14.9 - https://yoast.com/wordpress/plugins/seo/ -->
        <meta name="description" content="Chia sẻ những MẸO VẶT, kinh nghiệm hay trong cuộc sống, gia đình hàng ngày. Cuộc sống của bạn sẽ trở nên tiện ích và sinh động hơn." />
        @endif
        <meta name="robots" content="noindex, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
        
        <meta property="og:locale" content="vi_VN" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Mẹo vặt gia đình - Những mẹo vặt gia đình cuộc sống Hay nhất" />
        <meta property="og:description" content="Chia sẻ những MẸO VẶT trong cuộc sống, gia đình hàng ngày. Cuộc sống của bạn sẽ trở nên tiện ích và sinh động" />
        <meta property="og:url" content="./" />
        <meta property="og:site_name" content="Mẹo vặt gia đình" />
        <meta property="article:publisher" content="https://www.facebook.com/NhungMeoVatGiaDinh" />
        <meta property="article:modified_time" content="2021-01-21T07:58:53+00:00" />
        <meta property="og:image" content="./wp-content/themes/meovatgiadinh/assets/images/no-thumbnail.png" />
        <meta property="og:image:width" content="1000" />
        <meta property="og:image:height" content="550" />
        <meta property="fb:app_id" content="226937295690742" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Mẹo vặt gia đình - Những mẹo vặt gia đình cuộc sống Hay nhất" />
        <meta name="twitter:description" content="Chia sẻ những MẸO VẶT trong cuộc sống, gia đình hàng ngày. Cuộc sống của bạn sẽ trở nên tiện ích và sinh động" />
        <meta name="twitter:creator" content="@meovat_giadinh" />
        <meta name="twitter:site" content="@meovat_giadinh" />
        
        
        @stack('style')
       
        <style type="text/css">
            img.wp-smiley,
            img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
            }

            .news-group .news article.featured .info {

                height: 70px;
             }   
        </style>
        <link rel='stylesheet' id='wp-block-library-css'  href='./wp-includes/css/dist/block-library/style.min.css?ver=5.8.6' type='text/css' media='all' />
        <link rel='stylesheet' id='wp-pagenavi-css'  href='./wp-content/plugins/wp-pagenavi/pagenavi-css.css?ver=2.70' type='text/css' media='all' />
        <link rel="https://api.w.org/" href="./wp-json/" />
        <link rel="alternate" type="application/json" href="./wp-json/wp/v2/pages/2" />
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="./xmlrpc.php?rsd" />
        <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="./wp-includes/wlwmanifest.xml" />
        <meta name="generator" content="WordPress 5.8.6" />
        <link rel='shortlink' href='./' />
        <link rel="alternate" type="application/json+oembed" href="./wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmeovatgiadinh.vn%2F" />
        <link rel="alternate" type="text/xml+oembed" href="./wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmeovatgiadinh.vn%2F&#038;format=xml" />
    </head>
    <body class="home page-template-default page page-id-2">
        <div class="header-top">
            <div class="container text-right">
               
                <a title="Liên hệ" href="./lien-he.html">Liên hệ</a>
            </div>
        </div>
        <header class="header-container">
            <div class="container">
                <div class="nav-group row">
                    <div class="col-12 col-lg-2 col-xl-2">
                        <div class="row">
                            <div class="logo">
                                <!-- <a href="./"> <img
                                    src="./wp-content/themes/meovatgiadinh/assets/images/logo.png"
                                    alt="Mẹo vặt Gia đình" /></a> -->
                            </div>
                            <span class="toggle-nav">
                            <i class="far fa-bars"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-12 col-lg-10 col-xl-10 col-header">
                        <ul id="menu-header-menu" class="header-menu">


                            <!-- <li id="menu-item-18895" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-18895">
                                <a href="./top-list">Top List</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-25283" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-25283"><a href="./danh-gia">Đánh Giá</a></li>
                                </ul>
                            </li> -->

                            <?php 
                                $list = DB::table('categories')->select('namecategory', 'link', 'id')->take(7)->get();
                            ?>
                            @if($list->count())
                            @foreach($list  as $val)
                            @if($val->id!=5)
                            <li id="menu-item-984" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-984"><a href="{{ route('details', $val->link) }}">{{ $val->namecategory }}</a></li>
                            @endif
                            @endforeach
                            @endif
                           
                        </ul>
                        <li class="search-container"><span><i class="fal fa-search"></i></span>
                            <input type="text" class="form-control input-search" placeholder="Tìm kiếm...">
                            <span class="btnSearch"><i class="fal fa-search"></i></span>
                        </li>
                    </div>
                </div>
            </div>
        </header>
        
        @yield('content')

        <footer class="footer-container">
            <div class="container">
                <div class="row nav-group">
                    <div class="col-12 col-lg address footer-col-item">
                        <!-- <a class="logo" href="./" title="Mẹo vặt Gia đình">
                        <img src="./wp-content/themes/meovatgiadinh/assets/images/logo.png" alt="Mẹo vặt Gia đình"
                            title="Mẹo vặt Gia đình" />
                        </a> -->
                        <p>Chia sẻ những kinh nghiệm hay trong cuộc sống.</p>
                        <a href="./lien-he.html">Liên hệ với chúng tôi.</a>
                    </div>
                    <div class="col-12 col-lg-6 footer-col-item mt-3 text-center text-lg-right">
                        <!-- <a href="https://daiphatcoffee.com/" target="_blank" title="Cà phê sạch, rang xay nguyên chất Đại Phát">
                        <img style="max-width: 100%; border-radius: 5px;"
                            src="./wp-content/themes/meovatgiadinh/assets/images/daiphatcoffee.png"
                            alt="Cà phê sạch, rang xay nguyên chất Đại Phát" />
                        </a> -->
                    </div>
                    </ul>
                </div>
                <div class="row">
                    
                    <div class="copyright-group">
                        <div class="left">
                            <span>Copyright ©
                            2022 Mẹo vặt Gia đình. All Rights Reserved.</span>
                        </div>
                        <div class="right">
                            <ul id="menu-footer-menu-04" class="">
                                <li id="menu-item-2745" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2745"><a href="./gioi-thieu.html">Giới thiệu</a></li>
                                <li id="menu-item-18967" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-18967"><a href="./chinh-sach-bao-mat.html">Chính sách bảo mật</a></li>
                                <li id="menu-item-25625" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25625"><a href="./lien-he.html">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </footer>
        <p id="toTop"><i class="fa fa-arrow-up" aria-hidden="true"></i></p>
        <script src="./wp-content/themes/meovatgiadinh/assets/scripts/jquery.min.js"></script>
        <script src="./wp-content/themes/meovatgiadinh/assets/scripts/bootstrap.min.js"></script>
        <script src="./wp-content/themes/meovatgiadinh/assets/scripts/jquery.validate.min.js"></script>
        <script src="./wp-content/themes/meovatgiadinh/assets/scripts/main.min.js"></script>
        <div id="fb-root"></div>
       
    </body>
    <script type='text/javascript' src='./wp-includes/js/wp-embed.min.js?ver=5.8.6' id='wp-embed-js'></script>
</html>




