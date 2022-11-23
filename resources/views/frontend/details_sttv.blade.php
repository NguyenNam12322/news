

@extends('frontend.layouts.apps')

@section('content') 

@push('style')

 <link href="{{ asset('css/clientlib-base.min.css')}}" rel="stylesheet">
<link href="{{ asset('css/page-standard-pd.min.css') }}" rel="stylesheet">
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
    #thong-so{
        margin: 0;
    }
</style>

@endpush
<div class="product-view">
    <div class="pd-g-header-navigation aem-GridColumn aem-GridColumn--default--12">
        <div class="pd-header-navigation-keep header-keep">
            <div class="pd-header-navigation bg-black" id="anchorContainer" style="">
                <div class="pd-header-navigation__header pd-header-navigation__menu--close">
                    <h1 class="pd-header-navigation__headline">
                        <strong class="pd-header-navigation__headline-text has-text-white">{{ @$data->Name }}</strong>
                    </h1>
                    <div class="pd-header-navigation__menu-wrap">
                        <div class="pd-header-navigation__menu-inner">
                            <ul class="pd-header-navigation__menu" style="">
                              
                                <li id="anchor_pd-g-product-specs" class="pd-header-navigation__menu-item" style="">
                                    <a href="#specs" title="" data-toggle="modal" data-target="#specifications">Thông Số Kỹ Thuật </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="pd-buying-price">
                    <div class="pd-buying-price__wrap">
                        <div class="pd-buying-price__new-price">
                            {{ @number_format($data->Price) }} ₫ 
                        </div>
                    </div>
                    <div class="pd-buying-price__cta">
                        @if(@number_format($data->Price)>0)
                        <button class="btn cta cta--contained cta--emphasis add-special-tagging js-buy-now tg-pre-order btn-cart" href="javascript:;" onclick="addToCart({{ $data->id }})">MUA NGAY
                        </button>
                        @endif
                    </div>
                </div>
            </div>
            <div class="pd-header-navigation__dummy">
                <div class="pd-header-navigation__dummy-headline" style="height: 120px;"></div>
                <div class="pd-header-navigation__dummy-menu"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="columns">
            <div class="column is-6">
                <div class="product_image-container">
                    <div class="owl-carousel owl-theme">


                         <?php 

                            $images_products = Cache::remember('image_product_'.$data->id, 100, function() use ($data) {

                                $images = App\Models\image::where('product_id', $data->id)->select('image')->get()??'';

                                return $images;
                            
                            });

                        ?>

                        @if(isset($images_products))

                   
                       
                        @foreach($images_products as $image)

                        <!-- check trùng ảnh đại diện -->

                        @if(!empty($image->image))

                        @if( basename($image->image) != basename($data->Image) )

                         <div class="image-item">
                            <img alt="" src="{{ asset($image->image) }}">
                        </div>
                      
                        @endif

                        <!-- end check -->
                        @endif
                        @endforeach

                        @endif



                    </div>
                </div>
            </div>
            <div class="column is-6">
                <div class="product-detail-kv__buying-tool">
                    <section class="pd-buying-tool">
                        <div class="pd-buying-tool__info">
                            <div class="pd-info">
                                <!--                                <strong class="pd-info__badge-icon">-->
                                <!--                                    <span class="badge-icon  badge-icon--label badge-icon--bg-color-teal">20/04/2021</span>-->
                                <!--                                </strong>-->
                                <h2 class="pd-info__title">{{ @$data->Name }}</h2>
                                <p class="pd-info__sku">
                                    <span class="pd-info__sku-code">{{ @$data->productSku }}</span>
                                </p>
                                <div class="pd-info__wishlist"></div>
                                <div class="pd-info__usp-list">
                                    {!! @$data->Salient_Features !!}
                                </div>
                            </div>
                        </div>
                        <div class="pd-buying-tool__cost-box">
                            <div class="summary">
                                <strong class="summary__product-name">{{ @$data->Name }}</strong>
                                <div class="summary__select-option-wrap">
                                    <span class="summary__select-option"></span>
                                </div>
                            </div>
                            <div class="cost-box pd-buying-price--cta3">
                                <p class="cost-box__price">
                                    <strong class="cost-box__price-now"> {{ @number_format($data->Price) }} ₫ </strong>
                                </p>
                                <div class="cost-box__cta-wrap ">
                                    <span class="cost-box__cta">

                                    @if(@number_format($data->Price)>0)    
                                    <button class="btn cta cta--contained cta--emphasis add-special-tagging js-buy-now tg-pre-order btn-cart" href="javascript:;" onclick="addToCart({{ $data->id }})">MUA NGAY</button>
                                    @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>


        </div>

        <div class="content" id="contents-scroll">
                 {!! html_entity_decode($data->Detail)   !!}
            </div>    
        <style>
            .feature-benefit-full-bleed__figure {
            background-color: #000;
            }
            .feature-benefit-tab-list, .feature-benefit-tab-list__anchor{
            display: inline-block!important;
            }
        </style>
        <div class="product-view" xmlns="http://www.w3.org/1999/html">
            
        </div>
    </div>
</div>
<div class="cart-notification">
    <div class="modal fade" id="addToCartNotification" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img src="../../images/checked.svg">
                    <p>Sản phẩm đã được thêm vào giỏ hàng.</p>
                    <a href="{{ route('cart-sttv') }}" class="btn btn-default btn-block mini-cart-checkout-button">
                    THANH TOÁN
                    </a>
                    <a href="#" data-dismiss="modal" class="btn btn-link addtocart-continue-shopping">
                    Tiếp tục mua hàng</a>
                </div>
            </div>
        </div>
    </div>
</div>


 <div class="modal fade" id="specifications" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Thông số kỹ thuật</h5>
                <button type="button" class="btn btn-secondary mobiles" data-dismiss="modal">x</button>
            </div>

            
            <div class="modal-body" id="thong-so">
                {!!  $data->Specifications  !!} 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
@push('js')

 <script src="{{ asset('assets/4f253995/jquery.js')}}"></script>
<script src="{{ asset('assets/f8532ac8/yii.js')}}"></script>
<script src="{{ asset('assets/35deb2b4/js/bootstrap.bundle.js')}}"></script>
<script src="{{ asset('swiper@8.4.2/swiper-bundle.min.js')}}"></script>
<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('js/slick.min.js')}}"></script>
<script src="{{ asset('js/main.js')}}"></script>
<script src="{{ asset('assets/75a5fa0c/js/progressive-media.min.js')}}"></script>

<script type="text/javascript">
    
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