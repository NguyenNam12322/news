@extends('frontend.layouts.apps')
@section('content')

<style type="text/css">
    
    h3, h2, h4{
        font-weight: 500;
    }
</style>

 <div class="adContainer">
    <div class="container">
        <div class="ad mb-4"
            style="text-align: center; margin-top: 20px;display: block; min-height: 90px; max-width: 970px; margin-left: auto; margin-right: auto;">
           
        </div>
    </div>
</div>

<?php 
    $cate = App\Models\category::select('namecategory', 'link')->where('id', $data->category)->first();
   
?>
<div class="breadcrumb-container">
    <div class="container">
        <div class="row">
            <!-- Breadcrumb NavXT 6.6.0 -->
            <span property="itemListElement" typeof="ListItem">
                <a property="item" typeof="WebPage" title="Go to Mẹo vặt gia đình." href="/" class="home" ><span property="name">Trang chủ</span></a>
                <meta property="position" content="1">
            </span>
            &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;
            <span property="itemListElement" typeof="ListItem">
                <a property="item" typeof="WebPage" title="Go to the Làm đẹp category archives." href="{{ route('details', $cate->link) }}" class="taxonomy category" ><span property="name">{{ $cate->namecategory }}</span></a>
                <meta property="position" content="2">
            </span>
            &nbsp;&nbsp; <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;
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
                    <br>
                    <time>{{ @$data->created_at->format('d-m-Y, H:i:s') }}</time>
                    <div class="info  mt-4">
                        <!-- <span>
                            <i class="fad fa-folders"></i>
                            <ul class="post-categories">
                                <li><a href="/lam-dep" rel="category tag">Làm đẹp</a></li>
                                <li><a href="/meo-hay" rel="category tag">Mẹo hay cuộc sống</a></li>
                            </ul>
                        </span> -->
                    </div>
                    <div class="content mt-2">
                        
                        {!! html_entity_decode($data->content)   !!}
                    </div>
                    <div class="mt-2">
                                                
                    </div>
                    <div class="src mt-4">
                    </div>
                  
                    <hr>

                    <?php 

                        $news = App\Models\post::where('active', 1)->inRandomOrder()->take(3)->get();
                    ?>
                    <div class="news-group mt-5">
                        <h2>Có thể bạn sẽ quan tâm</h2>
                        <div class="news row">
                            @if($news->count()>0)
                            @foreach($news as $value)
                            <article>
                                <a href="{{ route('details', $value->link) }}" title="{{ $value->title }}">
                                <img src="{{ asset($value->image) }}" alt="{{ $value->title }}" />
                                </a>
                                <div class="info">
                                    <h3>
                                        <a href="{{ route('details', $value->link) }}" title="{{ $value->title }}">   
                                            {{ $value->title }}
                                        </a>
                                    </h3>
                                </div>
                            </article>

                            @endforeach
                            @endif
                          
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 sidebar" style="display: inherit;">
                    <div class="sidebar-sticky-2">
                        <div class="news-group  mt-4" style="display:none;">
                            <div class="news-group">
                                <a href="https://gocmeohay.com/" target="_blank"
                                    title="Góc Mẹo Hay - Cẩm Nang Các Mẹo Vặt Hay Trong Cuộc Sống">
                                <img style="max-width: 100%; border-radius: 5px;"
                                src="/wp-content/uploads/2022/09/thumb.png"              
                                alt="Góc Mẹo Hay - Cẩm Nang Các Mẹo Vặt Hay Trong Cuộc Sống" />
                                </a>
                            </div>
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