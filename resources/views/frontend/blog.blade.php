@extends('frontend.layouts.apps')
@section('content')

@push('style')

      <link rel="stylesheet" href="https://meovatgiadinh.vn/wp-content/themes/meovatgiadinh/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://meovatgiadinh.vn/wp-content/themes/meovatgiadinh/assets/css/app.css" />
        <link rel="stylesheet" href="https://meovatgiadinh.vn/wp-content/themes/meovatgiadinh/assets/css/style.css" />
        <link rel="stylesheet" href="https://meovatgiadinh.vn/wp-content/themes/meovatgiadinh/assets/css/responsive.css" />
        <link rel="stylesheet" href="https://meovatgiadinh.vn/wp-content/themes/meovatgiadinh/assets/css/custom.css" />
        <link rel="stylesheet" href="https://meovatgiadinh.vn/wp-content/themes/meovatgiadinh/assets/css/all.min.css" />

@endpush


<div class="adContainer">
    <div class="container">
        
    </div>
</div>
<div class="breadcrumb-container">
    <div class="container">
        <div class="row">
            <!-- Breadcrumb NavXT 6.6.0 -->
            <span property="itemListElement" typeof="ListItem">
                <a property="item" typeof="WebPage" title="Go to Mẹo vặt gia đình." href="/" class="home" ><span property="name">Trang chủ</span></a>
                <meta property="position" content="1">
            </span>
            &nbsp;&nbsp; <i class="fal fa-angle-right"></i> &nbsp;&nbsp;
            <span property="itemListElement" typeof="ListItem">
                <span property="name" class="archive taxonomy category current-item">{{ $name_cates_cate }}</span>
                <meta property="url" content="#">
                <meta property="position" content="2">
            </span>
        </div>
    </div>
</div>
<section class="articles-page-container">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h1>
                    Chuyên mục: {{ $name_cates_cate }}               
                </h1>
                
                @if($data->count()>0)
                @foreach($data as $value)

                
                <article class="row mt-5">
                    <div class="col-12 col-lg-4">
                        <a href="{{ route('details', $value->link) }}" title="{{ $value->title }}">
                        <img src="{{ asset($value->image) }}" alt="{{  $value->title }}"
                            onError="this.onerror=null;this.src='https://meovatgiadinh.vn/wp-content/themes/meovatgiadinh/assets/images/no-thumbnail.png';"></a>
                    </div>
                    <div class="col">
                        <h2><a href="{{ route('details', $value->link) }}" title="{{ $value->title }}">{{ $value->title }}</a>
                        </h2>
                        <div class="info">
                            <span>
                            <i class="fad fa-user-shield"></i>{{ $name_cates_cate }}</span>
                           
                        </div>
                        <div class="desc">
                            {!! strip_tags(_substrs($value->content,350))  !!}                         
                            <a href="{{ route('details', $value->link) }}" title="{{ $value->title }}">Chi tiết <i
                                class="far fa-long-arrow-right"></i> 
                            </a>
                        </div>
                    </div>
                </article>
                @endforeach
                @endif
                <div class="paginate-group">
                </div>
            </div>
            <div class="col-12 col-lg-4 sidebar" style="display: inherit;">
                <div class="sidebar-sticky-2">
                    <div class="news-group  mt-4">
                        <div class="news-group">
                            <a href="https://gocmeohay.com/" target="_blank"
                                title="Góc Mẹo Hay - Cẩm Nang Các Mẹo Vặt Hay Trong Cuộc Sống">
                            <img style="max-width: 100%; border-radius: 5px;"
                            src="https://meovatgiadinh.vn/wp-content/uploads/2022/09/thumb.png"              
                            alt="Góc Mẹo Hay - Cẩm Nang Các Mẹo Vặt Hay Trong Cuộc Sống" />
                            </a>
                        </div>
                    </div>
                   
                    <div class="news-group  mt-4">
                        <h2>Bài nổi bật</h2>
                         @include('frontend.featured')
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</section>
<div class="text-center mt-5">
    <!-- Footer [V2] -->
    <ins class="adsbygoogle"
        style="display:inline-block;width:728px;height:90px"
        data-ad-client="ca-pub-9771722450338604"
        data-ad-slot="5165193311"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>
@endsection