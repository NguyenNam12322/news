@extends('frontend.layouts.apps')
@section('content')

<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="row news-group">
                    <div class="col-12 news">
                        <h1 class="mt-2 mb-4" style="font-size: 15px;color: #c00000;">Mẹo vặt Gia đình - Nơi chia sẻ
                            những bí quyết, mẹo hay trong cuộc sống
                        </h1>


                        <?php 
                            $featured = App\Models\post::where('active', 1)->where('featured', 1)->orderBy('id', 'asc')->take(1)->get();
                        ?>
                        @if($featured->count()>0)
                        @foreach($featured as $key => $value)

                        
                        <article class="featured featured-main">
                            <a href="{{ route('details', $value->link) }}" title="{{ $value->title }}">
                            <img src="{{ asset($value->image) }}" alt="{{ $value->title }}"
                                onError="this.onerror=null;this.src='./wp-content/themes/meovatgiadinh/assets/images/no-thumbnail.png';" />
                            </a>
                            <div class="info">
                                <h3><a href="{{ route('details', $value->link) }}"
                                    title="{{ $value->title }}">{{ $value->title }}</a>
                                </h3>
                            </div>
                            <div class="desc">
                                  {!! strip_tags(_substrs($value->content,650))  !!}            
                            </div>
                        </article>

                        
                        @endforeach
                        @endif
                    </div>
                </div>
                <div class="row">
                   
                    @if(count($cate)>0)
                    @foreach($cate as $value)

                    @if($value != 6)

                    <?php 
                        $namecate = DB::table('categories')->where('id', $value)->first();

                        $datacate = App\Models\Post::where('category', $value)->where('active', 1)->where('hight_light', 1)->take(4)->get();   
                    ?>  

                    @if($datacate->count()>0) 
                    <div class="col-12 col-lg-6">
                        <div class="news-group">
                            <h2><a style="color: #c00000;text-transform: uppercase;font-size: 18px;"
                                href="{{ route('details', $namecate->link) }}"
                                title="{{ @$namecate->namecategory  }}">{{ @$namecate->namecategory  }}</a>
                            </h2>
                            <div class=" news">
                                @if(count($datacate)>0)
                                @foreach($datacate as $key => $val)

                               

                                @if($key==0)
                                <article class="featured">
                                    <a href="{{ route('details', $val->link) }}" title="{{ $val->title }}">
                                    <img src="{{ asset($val->image) }}" alt="{{ $val->title }}"
                                        onError="this.onerror=null;this.src='./wp-content/themes/meovatgiadinh/assets/images/no-thumbnail.png';" />
                                    </a>
                                    <div class="info">
                                        <h3><a href="{{ route('details', $val->link) }}"
                                            title="{{ $val->title }}">{{ $val->title }}</a>
                                        </h3>
                                    </div>
                                </article>
                                @else

                                <article class="">
                                    <a href="{{ route('details', $val->link) }}" title="{{ $val->title }}">
                                        <img src="{{ asset($val->image) }}" alt="{{ $val->title }}">
                                    </a>
                                    <div class="info">
                                        <h3><a href="{{ route('details', $val->link) }}" title="{{ $val->title }}">{{ $val->title }}</a>
                                        </h3>
                                    </div>
                                </article>
                                @endif

                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                    @endif

                    @endif
                    @endforeach
                    @endif
                    
                </div>
                
                <div class=" articles-page-container mt-5">

                    <?php 
                        $data = App\Models\post::where('category',6)->take(6)->get();  
                    ?>  

                    @if($data->count()>0)
                    @foreach($data as $val)

                    <article class="row">
                        <div class="col-12 col-lg-4">
                            <a href="./10-cach-lam-bap-xao-thom-ngon-beo-ngay-don-gian-de-lam.html" title="10 cách làm bắp xào thơm ngon béo ngậy, đơn giản dễ làm"> <img src="./wp-content/uploads/2021/10/21/meovatgiadinh-9-cach-lam-bap-xao-thom-ngon-beo-ngay-don-gian-de-lam.jpg" alt="10 cách làm bắp xào thơm ngon béo ngậy, đơn giản dễ làm"
                                onError="this.onerror=null;this.src='./wp-content/themes/meovatgiadinh/assets/images/no-thumbnail.png';"></a>
                        </div>
                        <div class="col">
                            <h2><a href="{{ route('details', $val->link) }}"
                                title="{{ $val->title }}">{{  $val->title }}</a>
                            </h2>
                            <div class="info">
                                <span>
                                <i class="fad fa-user-shield"></i>Mẹo hay cuộc sống </span>
                               <!--  <span>
                                    <i class="fad fa-tags"></i>
                                    <ul class="post-categories">
                                        <li><a href="./meo-hay" rel="category tag">Mẹo hay cuộc sống</a></li>
                                    </ul>
                                </span> -->
                            </div>
                            <div class="desc">
                                {!! strip_tags(_substrs($val->content,350))  !!}                   
                            </div>
                        </div>
                    </article>
                    @endforeach
                    @endif



                   
                    <a href="https://cachsuadienmay.vn/cach-sua-ti-vi" class="more ml-auto mr-auto">Xem thêm <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="col-12 col-lg-4 sidebar" style="display: inherit;">
                <div class="sidebar-sticky-2">
                    <div class="news-group  mt-4" style="display:none">
                        <div class="news-group">
                            <a href="#" target="_blank"
                                title="Góc Mẹo Hay - Cẩm Nang Các Mẹo Vặt Hay Trong Cuộc Sống">
                            <!-- <img style="max-width: 100%; border-radius: 5px;"
                            src="./wp-content/uploads/2022/09/thumb.png"              
                            alt="Góc Mẹo Hay - Cẩm Nang Các Mẹo Vặt Hay Trong Cuộc Sống" /> -->
                            </a>
                        </div>
                    </div>
                    <div class="ad mt-4">
                        
                       
                    </div>
                    <div class="news-group  mt-4">
                        <h2>Bài nổi bật</h2>
                        @include('frontend.featured')
                    </div>
                    <div class="news-group sidebar-sticky mt-4">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection