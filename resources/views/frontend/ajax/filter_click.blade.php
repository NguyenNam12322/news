
    @if(count($product))
    @foreach($product as $val)
    
    <li class="product-item three-cols-tile">
        <h1 class="sr-only">{{ @$val->Name }}</h1>
        <div class="merchandising-flag text-center wishlist" style="height: 30px;min-height: 30px;">
            <div class="badge">
                <span>MIỄN PHÍ CÔNG LẮP ĐẶT TRONG 7 NGÀY</span>
            </div>
        </div>
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
                    <span>{{ @ number_format($val->Price) }} ₫</span>
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
    

@endif