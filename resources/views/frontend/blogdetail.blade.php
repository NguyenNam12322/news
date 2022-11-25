@extends('frontend.layouts.apps')
@section('content')

 <div class="adContainer">
    <div class="container">
        <div class="ad mb-4"
            style="text-align: center; margin-top: 20px;display: block; min-height: 90px; max-width: 970px; margin-left: auto; margin-right: auto;">
            <ins class="adsbygoogle"
                style="display:inline-block;width:728px;height:90px"
                data-ad-client="ca-pub-9771722450338604"
                data-ad-slot="8876960195"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </div>
</div>
<div class="breadcrumb-container">
    <div class="container">
        <div class="row">
            <!-- Breadcrumb NavXT 6.6.0 -->
            <span property="itemListElement" typeof="ListItem">
                <a property="item" typeof="WebPage" title="Go to Mẹo vặt gia đình." href="https://meovatgiadinh.vn" class="home" ><span property="name">Trang chủ</span></a>
                <meta property="position" content="1">
            </span>
            &nbsp;&nbsp; <i class="fal fa-angle-right"></i> &nbsp;&nbsp;
            <span property="itemListElement" typeof="ListItem">
                <a property="item" typeof="WebPage" title="Go to the Làm đẹp category archives." href="/lam-dep" class="taxonomy category" ><span property="name">Làm đẹp</span></a>
                <meta property="position" content="2">
            </span>
            &nbsp;&nbsp; <i class="fal fa-angle-right"></i> &nbsp;&nbsp;
            <span property="itemListElement" typeof="ListItem">
                <span property="name" class="post post-post current-item">{{ $data->title }}</span>
                <meta property="url" content="{{ $data->title }}">
                <meta property="position" content="3">
            </span>
        </div>
    </div>
</div>
<section class="single-post-content">
    <div class="container">
    <div class="row">
        <div class="post-content">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <h1 style="text-align: left;">{{ $data->title }}</h1>
                    <div class="info  mt-4">
                        <span>
                            <i class="fad fa-folders"></i>
                            <ul class="post-categories">
                                <li><a href="/lam-dep" rel="category tag">Làm đẹp</a></li>
                                <li><a href="/meo-hay" rel="category tag">Mẹo hay cuộc sống</a></li>
                            </ul>
                        </span>
                    </div>
                    <div class="content mt-2">
                        
                        {!! html_entity_decode($data->content)   !!}
                    </div>
                    <div class="mt-2">
                                                
                    </div>
                    <div class="src mt-4">
                    </div>
                  
                    <hr>
                    <div class="news-group mt-5">
                        <h2>Có thể bạn sẽ quan tâm</h2>
                        <div class="news row">

                            
                            <article class="col-12 col-lg-6">
                                <a href="/cung-ong-cong-ong-tao-nen-dung-ca-chep-that-hay-giay.html" title="Cúng ông Công ông Táo nên dùng cá chép thật hay giấy?">
                                <img src="/wp-content/uploads/2020/12/meovatgiadinh-cung-ong-cong-ong-tao-nen-dung-ca-chep-that-hay-giay.jpg" alt="Cúng ông Công ông Táo nên dùng cá chép thật hay giấy?"
                                    onError="this.onerror=null;this.src='/wp-content/themes/meovatgiadinh/assets/images/no-thumbnail.png';" />
                                </a>
                                <div class="info">
                                    <h3><a href="/cung-ong-cong-ong-tao-nen-dung-ca-chep-that-hay-giay.html"
                                        title="Cúng ông Công ông Táo nên dùng cá chép thật hay giấy?">Cúng ông Công ông Táo nên dùng cá chép thật hay giấy?</a>
                                    </h3>
                                </div>
                            </article>
                          
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 sidebar" style="display: inherit;">
                    <div class="sidebar-sticky-2">
                        <div class="news-group  mt-4">
                            <div class="news-group">
                                <a href="https://gocmeohay.com/" target="_blank"
                                    title="Góc Mẹo Hay - Cẩm Nang Các Mẹo Vặt Hay Trong Cuộc Sống">
                                <img style="max-width: 100%; border-radius: 5px;"
                                src="/wp-content/uploads/2022/09/thumb.png"              
                                alt="Góc Mẹo Hay - Cẩm Nang Các Mẹo Vặt Hay Trong Cuộc Sống" />
                                </a>
                            </div>
                        </div>
                        <div class="ad mt-4" style="min-height: 280px; max-width: 336px;">
                            <!-- Sidebar 01 -->
                            <ins class="adsbygoogle"
                                style="display:block"
                                data-ad-client="ca-pub-9771722450338604"
                                data-ad-slot="1292600754"
                                data-ad-format="auto"
                                data-full-width-responsive="true"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div>
                        <div class="news-group  mt-4">
                            <h2>Bài nổi bật</h2>
                             @include('frontend.featured')
                        </div>
                        <div class="news-group sidebar-sticky mt-4">
                            <div class="ad" style="min-height: 280px; max-width: 336px;">
                                <!-- Sidebar 02 [V2] -->
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="text-center mt-5">
   
</div>
@endsection