<div class="columns is-multiline is-centered">

        @if($product_sam->count()>0)
        @foreach($product_sam as $key => $value)

        <?php

            $info_pd = App\Models\product::find($value);

        ?>
        @if(!empty($info_pd))
        <div class="column is-3">
            <div class="product-item">
               <!--  <div class="merchandising-flag has-text-centered">
                    <div class="badge">
                        <span>MIỄN PHÍ CÔNG LẮP ĐẶT TRONG 7 NGÀY</span>
                    </div>
                </div> -->
                <div class="product-item_image">
                    <div class="item-img has-text-centered">
                        <a href="{{ route('details', $info_pd->Link) }}">
                            <div class="progressive-media progressive-media-image progressive-media-unloaded" data-img-src="{{ asset($info_pd->Image) }}">
                                <div class="progressive-media-aspect" style="padding-bottom: 80%;">
                                    <div class="progressive-media-aspect-inner">
                                        <img class="progressive-media-image-placeholder progressive-media-content progressive-media-blur" src="{{ asset($info_pd->Image) }}" crossorigin="anonymous"><img class="progressive-media-image-placeholder progressive-media-image-placeholder-edge progressive-media-content" src="{{ asset($info_pd->Image) }}" crossorigin="anonymous">
                                        <noscript><img class="progressive-media-image-original progressive-media-content" src="{{ asset($info_pd->Image) }}"></noscript>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="product-item_content-wrap">
                    <div class="item-top">
                        <a href="{{ route('details', $info_pd->Link) }}">
                        <span class="product-title has-text-centered">{{ $info_pd->Name }}</span>
                        </a>
                        <span class="product-sku">{{ $info_pd->productSku }}</span>
                    </div>
                    <div class="item-bottom">
                        <div class="merchandising-wrapper">
                            <div class="merchandising-box text-center">
                                <div class="merchandising-text">

                                    
                                  {!! @$info_pd->Salient_Features !!}
                                </div>
                            </div>
                        </div>
                        <div class="product-item_promotion" style="display: none">
                            <p class="has-text-centered">Tặng voucher 2M cho đơn hàng tiếp theo. CT
                                đến
                                30/6
                            </p>
                        </div>
                        <div class="product-price has-text-centered">
                            <div class="price">
                                <div class="price-discount" style="display: none">
                                    <span>Giảm 44%</span>
                                </div>
                                <span>24.900.000 ₫</span>
                            </div>
                            <div class="promo-leasing" style="display: none">
                                <div class="product-promo promo">
                                    <span>
                                    chiết khấu 9.900.977 ₫ (giá gốc <del>22.400.400 ₫</del>)
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="custom-button has-text-centered">
                            <div class="actions--add-to-cart">
                                <div class="has-text-centered">
                                    <button class="btn btn-default btn-cart" data-url-cart="/cart/add" data-product-id="109">Thêm vào giỏ hàng
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif



        <div class="cart-notification">
            <div class="modal fade" id="addToCartNotification" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body text-center">
                            <img src="images/checked.svg">
                            <p>Sản phẩm đã được thêm vào giỏ hàng.</p>
                            <a href="cart/index.html" class="btn btn-default btn-block mini-cart-checkout-button">
                            THANH TOÁN
                            </a>
                            <a href="#" data-dismiss="modal" class="btn btn-link addtocart-continue-shopping">
                            Tiếp tục mua hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @endforeach
        @endif
    </div>