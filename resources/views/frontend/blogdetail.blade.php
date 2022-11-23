

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

@endpush
<div class="product-view">
    <div class="pd-g-header-navigation aem-GridColumn aem-GridColumn--default--12">
        <div class="pd-header-navigation-keep header-keep">
            <div class="pd-header-navigation bg-black" id="anchorContainer" style="">
                <div class="pd-header-navigation__header pd-header-navigation__menu--close">
                    <h1 class="pd-header-navigation__headline">
                        <strong class="pd-header-navigation__headline-text has-text-white">{{  @strip_tags($data->title)  }}</strong>
                    </h1>
                    
                </div>
                
            </div>
            <div class="pd-header-navigation__dummy">
                <div class="pd-header-navigation__dummy-headline" style="height: 120px;"></div>
                <div class="pd-header-navigation__dummy-menu"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div>
            <h1>{{ @strip_tags($data->title) }}</h1>
        </div>
        <div class="content" id="contents-scroll">
            <?php 
                $content = preg_replace("/(<img\\s)[^>]*(src=\\S+)[^>]*(\\/?>)/i", "$1$2$3", $data->content);

                $content = str_replace('https://sieuthitivi.com', '', $content)

                
            ?>
                 {!! html_entity_decode($content)   !!}
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