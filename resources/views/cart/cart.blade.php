<!DOCTYPE html>
<html lang="vi-VN">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('images/Favicon.ico')}}" rel="shortcut icon" type="image/x-icon">
        <title>Giỏ hàng</title>
        <meta name="csrf-param" content="_csrf">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/style.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/75a5fa0c/css/progressive-media.min.css')}}" rel="stylesheet">
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
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

         <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body class="page-cartPage pageType-ContentPage template-pages-CartPageTemplate pageLabel-cart">
        
        <header class="cart-header">
            <div class="container">
                <div class="columns is-mobile">
                    <div class="column is-half-mobile">
                        <div class="back-to-shop">
                            <a href="/">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span>Tiếp tục mua hàng</span>
                            </a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="cart-logo text-center">
                            <a href="/">
                            <img alt="" src="{{ asset('images/global-samsung-logo.svg')}}"></a>
                        </div>
                    </div>
                    <div class="column">
                        <div class="text-right">
                            <a href="/">
                            <img height="40" src="{{ asset('images/logo.jpg')  }}">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="toko-main-container">
            <div class="container mh-70">
                <div class="cart-page-container v2 row clearfix">
                    <div class="toko-left-content checkout-content checkout-left col-md-8">
                        <div class="sticky-content">
                            <div class="tokoleftcontent-components">
                                <div class="cart-heading">
                                    <h1 class="cart-title">Giỏ hàng</h1>
                                </div>
                            </div>
                            <div class="tokoleftcontent-components">
                            </div>
                            <form id="w0" action="/cart/index" method="post">
                                <input type="hidden" name="_csrf" value="5xMnz8SXEnvrGL_Xkk68eeuL8H-DVoAdJDlAmTBetGTefkKZsPpnObpM56bEPNVLnL-KGfks7FtKUynrciniDw==">                    
                                <ul class="cart-product-list">

                                    <?php



                                        $arrPrice = [];
                                        $key = 0;
                                        
   
                                        $cart = Gloudemans\Shoppingcart\Facades\Cart::content();

                                        

                                        $number_cart = count($cart);


                                       
                                     ?>  

                                    @if($number_cart>0)
                                    @foreach($cart as $key => $data)

                                    <?php 

                                        $price = (int)$data->price*(int)$data->qty;
                                        $key++;
                                        array_push($arrPrice, $price);

                                        $infoProducts = App\Models\product::find($data->id);

                                    ?> 
                                    <li class="divide cart-row row ">
                                        <div class="col-xs-12">
                                            <div class="cart-item-thumb">
                                                <a href="{{ route('details', $infoProducts->Link) }}">
                                                    <div class="progressive-media progressive-media-image progressive-media-loaded" data-img-src="{{ asset($infoProducts->Image) }}">
                                                        <div class="progressive-media-aspect" style="padding-bottom: 66.666666666667%;">
                                                            <div class="progressive-media-aspect-inner">
                                                                <img class="progressive-media-image-placeholder progressive-media-content progressive-media-blur" src="{{  asset($infoProducts->Image) }}" crossorigin="anonymous"><img class="progressive-media-image-placeholder progressive-media-image-placeholder-edge progressive-media-content" src="{{  asset($infoProducts->Image) }}" crossorigin="anonymous">
                                                                <noscript><img class="progressive-media-image-original progressive-media-content" src="{{  asset($infoProducts->Image) }}"></noscript>
                                                                <img src="{{  asset($infoProducts->Image) }}" class="progressive-media-image-original progressive-media-content">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>


                                            
                                            <div class="cart-item-top">
                                                <div class="cart-item-details">
                                                    <a href="{{ route('details',  $infoProducts->Link)  }}">
                                                        <h3 class="name name-no-rtl">
                                                            {{ $infoProducts->Name }}                                               
                                                        </h3>
                                                    </a>
                                                   
                                                    <div class="sku">{{ $infoProducts->productSku }} </div>
                                                    <span class="cart-item-promo-container"> </span>
                                                    <div class="cart-item-preorder"></div>
                                                </div>
                                                <div class="cart-item-right">
                                                    <div class="cart-item-col-4 columns is-mobile">
                                                        <div class="cart-item-quantity product-quantity-details column is-4-mobile">
                                                            <div class="cart-quantity-ui">
                                                                <div class="form-group field-order-quantity_{{ $key }}">
                                                                    <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                                                                        <span class="input-group-btn input-group-prepend">
                                                                            <button class="btn btn-decrease bootstrap-touchspin-down" type="button" onclick="tru('{{ $key  }}', '{{ $data->rowId }}')">
                                                                                <i class="fa fa-minus" aria-hidden="true"></i>
                                                                            </button>
                                                                        </span>
                                                                        <input type="text" id="order-quantity_{{ $key }}" class="form-control" name="Order[total_quantity]" data-krajee-touchspin="TouchSpin_1b49ee50" value="{{ $data->qty??1 }}" readonly>
                                                                        <span class="input-group-btn input-group-append">
                                                                            <button class="btn btn-increase bootstrap-touchspin-up" type="button" onclick="cong('{{ $key }}', '{{ $data->rowId }}')">
                                                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                                            </button>
                                                                        </span>
                                                                    </div>

                                                                    <div class="invalid-feedback"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-price-details column is-8">
                                                            <div class="columns">
                                                                <div class="item-price text-right column">

                                                                    <?php 
                                                                        $prices = $data->price*$data->qty;
                                                                    ?>

                                                                     {{ @number_format($prices) }}đ
                                                                </div>


                                                                <div class="column is-2">
                                                                    <a href="{{ route('removeCart') }}?id={{ $data->rowId }}"><span class="text-right remove-item remove-entry-button pull-right">XÓA</span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           <!--  <div class="cart-item-bottom">
                                                <div class="added-promos" id="added-promos-0">
                                                    <span><br> - Trả góp 0% khi mua sản phẩm Tivi Samsung (01/10 ~ 31/12/2022)
                                                    <br> - Trả trước 0 đồng (01/10 ~ 30/12/2022)
                                                    <br> - Tặng 1 chiếc Micro không dây tri giá 700.000 (01/10 ~31/12/2022)
                                                    </span>
                                                </div>
                                            </div> -->

                                           
                                        </div>
                                    </li>
                                    <li class="divide hidden-xs"></li>

                                     @endforeach
                                    @endif
                                </ul>
                                <!-- <div class="cart-vouchers-wrapper toggle-wrap">
                                    <div class="remove-promo-voucher">
                                    </div>
                                    <div class="add-promo-voucher">
                                        <a class="toggle accordion-toggle" data-toggle="collapse" href="#collapseVoucher" role="button" aria-expanded="false" aria-controls="collapseVoucher">
                                        <span class="icon voucher-icon icon-icon-arrow-right"></span>Áp dụng mã khuyến mãi</a>
                                        <div class="toggle-body accordion-details collapse" id="collapseVoucher">
                                            <div class="row promo-code-group clearfix">
                                                <div class="col-xs-12 col-sm-12 voucher-sensitive">
                                                    <span></span>
                                                </div>
                                                <div class="row w-100">
                                                    <div class="col-md-4">
                                                        <div class="col-xs-9 col-sm-9 voucher-code">
                                                            <div class="voucher">
                                                                <div class="form-group field-order-voucher">
                                                                    <input type="text" id="order-voucher" class="form-control" name="Order[voucher]" placeholder="Nhập mã giảm giá">
                                                                    <div class="invalid-feedback"></div>
                                                                </div>
                                                                <p id="description" class="label"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-3 col-sm-3 col-action">
                                                            <button type="button" class="btn btn-default btn-apply-voucher submit-promo-code" id="btnApplyVoucher" disabled="">Áp
                                                            dụng
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="col-xs-9 col-sm-9 voucher-code">
                                                            <div class="voucher_2">
                                                                <div class="form-group field-order-voucher_2">
                                                                    <input type="text" id="order-voucher_2" class="form-control" name="Order[voucher_2]" placeholder="Nhập mã giảm giá">
                                                                    <div class="invalid-feedback"></div>
                                                                </div>
                                                                <p id="description" class="label"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-3 col-sm-3 col-action">
                                                            <button type="button" class="btn btn-default btn-apply-voucher submit-promo-code" id="btnApplyVoucher2" disabled="">Áp
                                                            dụng
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="col-xs-9 col-sm-9 voucher-code">
                                                            <div class="voucher_3">
                                                                <div class="form-group field-order-voucher_3">
                                                                    <input type="text" id="order-voucher_3" class="form-control" name="Order[voucher_3]" placeholder="Nhập mã giảm giá">
                                                                    <div class="invalid-feedback"></div>
                                                                </div>
                                                                <p id="description" class="label"></p>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-3 col-sm-3 col-action">
                                                            <button type="button" class="btn btn-default btn-apply-voucher submit-promo-code" id="btnApplyVoucher3" disabled="">Áp
                                                            dụng
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </form>
                            <!-- Euro bonus -->
                            <input type="hidden" value="[]" id="list_product_id">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="continue-shopping col-md-6 col-sm-6 hidden-xs">
                                        <a class="btn-link" tabindex="0" href="/">
                                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                                            Tiếp tục mua hàng
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="visible-md visible-lg">
                                <div class="toko-payment-banner">
                                    <div class="single-col row">
                                        <div class="col-xs-12">
                                            <div class="supported-payments">
                                                <p class="supported-payments-heading">Loại thẻ thanh toán được hỗ trợ:</p>
                                                <div class="cards">
                                                    <ul class="list-inline">
                                                        <li class="icon-with-link" id="PaymentVisaIconLink">
                                                            <img src="../images/payment/visa.png" alt="">                                                
                                                        </li>
                                                        <li class="icon-with-link" id="PaymentMastercardIconLink">
                                                            <img src="../images/payment/mastercard.png" alt="">                                                
                                                        </li>
                                                        <li class="icon-with-link" id="PaymentATMIconLink">
                                                            <img src="../images/payment/atm.png" alt="">                                                
                                                        </li>
                                                        <li data-uid="PaymentNapasIconLink" class="icon-with-link" id="PaymentNapasIconLink">
                                                            <img src="../images/payment/napas.png" alt="">                                                
                                                        </li>
                                                        <li class="icon-with-link" id="paymentBankTransferIconLink">
                                                            <img src="../images/payment/btIcon.png" alt="">                                                
                                                        </li>
                                                        <li class="icon-with-link" id="paymentPayAtShopIconLink">
                                                            <img src="../images/payment/TT-t-i-c-a-h-ng.png" alt="">                                                
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-block fz-12">
                                            <p>Mọi thắc mắc vui lòng liên hệ nhân viên theo Hotline: 0912 326 577 để được hỗ trợ
                                                24/7 
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="toko-right-content checkout-content checkout-right col-md-4 ">
                        <div id="cart-sidebar">
                            <div class="sticky-cart-summary">
                                <div class="cart-summary">
                                    <h2 class="cart-summary-title hidden-xs hidden-sm">
                                        TÓM TẮT ĐƠN HÀNG
                                    </h2>
                                    <div class="yCmsComponent yComponentWrapper">
                                        <div class="row free-delivery">
                                            <div class="col-xs-12">
                                                <div class="free-delivery-text free-delivery-text-margin">
                                                    <img src="../images/Voucher-96-cart.png" alt="">
                                                    <span class="summary-text"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="yCmsComponent yComponentWrapper">
                                        <div class="row free-delivery">
                                            <div class="col-xs-12">
                                                <div class="free-delivery-text free-delivery-text-margin">
                                                    <img src="../images/FreeDelivery-96-px.png" alt="">
                                                    <span class="summary-text">Miễn phí giao hàng nhanh toàn quốc.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="cartPaymentOptions">
                                        <div class="row payment-options">
                                            <div class="col-xs-12">
                                                <ul>
                                                    <li>Hỗ trợ thanh toán:</li>
                                                    <li class="icon-tick-16 no-rtl">
                                                        <span> Thanh toán bằng thẻ ATM</span>
                                                    </li>
                                                    <li class="icon-tick-16 no-rtl">
                                                        <span> Thanh toán bằng thẻ quốc tế</span>
                                                    </li>
                                                    <li class="icon-close-16 no-rtl">
                                                        <span> Thanh toán khi nhận hàng/Thanh toán sau</span>
                                                    </li>
                                                    <li class="icon-tick-16 no-rtl">
                                                        <span> Thanh toán tại cửa hàng</span>
                                                    </li>
                                                    <li class="icon-tick-16 no-rtl">
                                                        <span> Trả góp 0% bằng thẻ tín dụng</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                     <?php 

                                        $totalPrice = array_sum($arrPrice);
                                    ?>
                                    <div class="cart-totals">
                                        <hr class="discount-separator">
                                        <div class="row detail total-savings">
                                            <div class="col-xs-6">
                                                Giảm giá:
                                            </div>
                                            <div class="col-xs-6 total-right-value">
                                                
                                            </div>
                                        </div>
                                        <hr class="discount-separator">
                                        <div class="row detail total-savings">
                                            <div class="col-xs-6">
                                                Tạm tính:
                                            </div>
                                            <div class="col-xs-6 total-right-value">
                                               {{ number_format($totalPrice , 0, ',', '.')}}
                                            </div>
                                        </div>
                                        <div class="row totals">
                                            <div class="col-xs-6 grand-total">
                                                <div id="basket-page-total">Thành tiền:</div>
                                            </div>
                                            <div class="col-xs-6 grand-total total-right-value">
                                                {{ number_format($totalPrice , 0, ',', '.')}}
                                            </div>
                                        </div>
                                    </div>

                                    @if($totalPrice>0)
                                    <div class="cart-actions row">
                                        <div class="checkout-button col-sm-12">
                                            <a href="{{ route('checkoutCart') }}" class="btn btn-tertiary btn-block checkoutButton continueCheckout">
                                            TIẾP TỤC
                                            </a>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="../tvs/neo-qled-4k.html" title="">
                                            Neo QLED 4K</a>
                                        </li>
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="../tvs/neo-qled-8k.html" title="">Neo QLED
                                            8K</a>
                                        </li>
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="../tvs/the-premiere.html" title="">
                                            The Premiere</a>
                                        </li>
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="/tvs/lifestyle" title="">Lifestyle</a>
                                        </li>
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="../tvs/qled.html" title="">QLED</a>
                                        </li>
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="../tvs/uhd.html" title="">UHD</a>
                                        </li>
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="../tvs/accessory.html" title="">Accessory</a>
                                        </li>
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
                                            <a class="footer-category__link" href="#" title="">Giới thiệu
                                           
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
                                            <a class="footer-category__link" href="../lien-he.html" aria-label="Liên Hệ" title="">Liên Hệ</a>
                                        </li>
                                        <li class="footer-category__item">
                                            <a class="footer-category__link" href="../danh-muc-tin-tuc/ho-tro-ky-thuat.html" title="">Hỗ Trợ Kỹ
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
                            <p class="footer-copyright">©2022Siêu thị tivi. </p>
                           
                        </div>
                       
                    </div>
                </div>
            </div>
        </footer>


        <a class="fab show" title="Go to Top" onclick="window.scrollTo({ top: 0, behavior: 'smooth' });">
        <img class="fab__icon" alt="" src="../images/arrow-up-circle-outline.svg">
        </a>
        <script src="{{  asset('assets/75a5fa0c/js/progressive-media.min.js')}}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
crossorigin="anonymous"></script>
        <script src="{{  asset('assets/f8532ac8/yii.js')}}"></script>
        <script src="{{  asset('assets/f8532ac8/yii.validation.js')}}"></script>
        <script src="{{  asset('assets/f8532ac8/yii.activeForm.js')}}"></script>
        <script src="{{  asset('assets/35deb2b4/js/bootstrap.bundle.js')}}"></script>
        <script src="{{  asset('swiper@8.4.2/swiper-bundle.min.js')}}"></script>
        <script src="{{  asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{  asset('js/slick.min.js')}}"></script>
        <script src="{{  asset('js/main.js')}}"></script>

        <script>jQuery(function ($) {
            jQuery('#w0').yiiActiveForm([{"id":"order-voucher","name":"voucher","container":".field-order-voucher","input":"#order-voucher","error":".invalid-feedback","validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"Voucher phải là chuỗi.","max":50,"tooLong":"Voucher phải chứa nhiều nhất 50 ký tự.","skipOnEmpty":1});}},{"id":"order-voucher_2","name":"voucher_2","container":".field-order-voucher_2","input":"#order-voucher_2","error":".invalid-feedback","validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"Voucher 2 phải là chuỗi.","max":50,"tooLong":"Voucher 2 phải chứa nhiều nhất 50 ký tự.","skipOnEmpty":1});}},{"id":"order-voucher_3","name":"voucher_3","container":".field-order-voucher_3","input":"#order-voucher_3","error":".invalid-feedback","validate":function (attribute, value, messages, deferred, $form) {yii.validation.string(value, messages, {"message":"Voucher 3 phải là chuỗi.","max":255,"tooLong":"Voucher 3 phải chứa nhiều nhất 255 ký tự.","skipOnEmpty":1});}}], {"errorSummary":".alert.alert-danger","errorCssClass":"is-invalid","successCssClass":"is-valid","validationStateOn":"input"});
            });
        </script>



        <script type="text/javascript">
            
            function RemoveCart(id) {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            
                $.ajax({
                    type: 'POST',
                    url: "{{ route('removeCart') }}",
                    data: {
                        product_id: id,
                       
                           
                    },
                    beforeSend: function() {
                       
                        $('.loader').show();

                    },
                    success: function(result){
            
                      window.location.href = result; 
                        
                    }
                });


                
            }

            function tru(key, rowId){
                const val_number = $('#order-quantity_'+key).val();
                val_numbers =  parseInt(val_number);

    
                if(val_numbers>0){
                    val_numbers = val_numbers-1;

                    $.ajaxSetup({
                    headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: 'POST',
                        url: "{{ route('addCartNumber') }}",
                        data: {
                            rowId: rowId,
                            number:val_numbers
                        },
                        success: function(result){

                           window.location.href = result; 
                            
                        }
                    });
                    
                }
            }


            function cong(key, rowId){
                const val_number = $('#order-quantity_'+key).val();
                val_numbers =  parseInt(val_number);

    
                if(val_numbers>0){
                    val_numbers = val_numbers+1;

                    $.ajaxSetup({
                    headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        type: 'POST',
                        url: "{{ route('addCartNumber') }}",
                        data: {
                            rowId: rowId,
                            number:val_numbers
                        },
                        success: function(result){

                           window.location.href = result; 
                            
                        }
                    });
                    
                }
            }
        </script>
    </body>
</html>