"use strict";
var getUrl = window.location;
var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
$(document).ready(function () {

    // Check for click events on the navbar burger icon
    $(".navbar-burger").click(function () {

        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        $(".navbar-burger").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");

    });

    $("a[href='#top']").click(function () {
        $("html, body").animate({scrollTop: 0}, "slow");
        return false;
    });
    $('#check_tax').change(function () {
        $('#order-tax').fadeToggle();
    });

    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        focusOnSelect: true
    });
});

$('input[name="Order[payment_type]"]').change(function () {
    var val = $(this).val();
    if (val == 3) {
        $('.bank').show();
    } else {
        $('.bank').hide();
    }
});

// "use strict";
// function addToCart(product_id){
//     // alert(product_id);
//     var url = $(this).attr('data-url-cart');
//     alert($(this).attr('data-url-cart') );
//     $.ajax({
//         type: "POST",
//         url: url,
//         data: {product_id: product_id}, // serializes the form's elements.
//         beforeSend: function () {
//             $(this).addClass('common-loading-button');
//             $(this).prop('disabled', true);
//         },
//         success: function (data) {
//             // t.empty();
//             // t.append(data);
//         }
//     });
// }

$(document).on("click", ".btn-cart", function (e) {
    e.preventDefault();
    var product_id = $(this).attr('data-product-id');
    var url = $(this).attr('data-url-cart');
    var cartBtn = $(this);
    $.ajax({
        type: "POST",
        url: url,
        data: {product_id: product_id}, // serializes the form's elements.
        beforeSend: function () {
            cartBtn.empty();
            cartBtn.html('<span class="lb-loading ng-scope" style=""></span>');
            cartBtn.addClass('common-loading-button');
            cartBtn.prop('disabled', true);
        },
        success: function (data) {
            cartBtn.empty();
            cartBtn.html('Thêm vào giỏ hàng');
            cartBtn.removeClass('common-loading-button');
            cartBtn.removeAttr('disabled');
            $('#addToCartNotification').modal('show');
            // t.empty();
            // t.append(data);
        }
    });
});

$(document).on("click", ".product_click__size", function (e) {
    e.preventDefault();
    var id = $(this).attr('data-id');
    var url = $(this).attr('data-url');
    var t = $(this).closest('.block-grid__product');
    $.ajax({
        type: "POST",
        url: url,
        data: {id: id}, // serializes the form's elements.
        success: function (data) {
            t.empty();
            t.append(data);
        }
    });
});

$(window).bind("scroll", function (e) {
    var top = $(window).scrollTop();
    if (top > 60) {
        $('.pd-header-navigation').addClass('pd-header-navigation--fixed');
        $('.floating-navigation').addClass('floating-navigation--fixed');
    } else {
        $('.pd-header-navigation').removeClass('pd-header-navigation--fixed');
        $('.floating-navigation').removeClass('floating-navigation--fixed');
    }
});
$('#filterMenu').on('shown.bs.collapse', function () {
    $('.menu__list-wrap').css({visibility: 'visible', bottom: 'auto', top: '36px'});
    $('.js-pf-sortby-wrap').addClass('open');
});
// $('.product_click__size').click(function (e) {
//     alert(1);
//     e.preventDefault();
//     var id = $(this).attr('data-id');
//     var url = $(this).attr('data-url');
//     var t = $(this).closest('.block-grid__product');
//     $.ajax({
//         type: "POST",
//         url: url,
//         data: {id: id}, // serializes the form's elements.
//         success: function (data) {
//             t.empty();
//             t.append(data);
//         }
//     });
// });

var swiper = new Swiper('.home-swiper', {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

var swiper_carousel = new Swiper('.apps-carousel-container__carousel', {
    spaceBetween: 30,
    centeredSlides: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

const swiper_modal = new Swiper('.swiper-modal', {
    autoplay: {
        delay: 3000,
    },
    loop: true,
    spaceBetween: 30,
    centeredSlides: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

const basic_swiper = new Swiper('.basic-swiper', {
    spaceBetween: 30,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});


$('.owl-carousel').owlCarousel({
    items: 1,
    lazyLoad: true,
    loop: true,
    margin: 10
});

$(".showcase-card-tab-card__full-bleed-wrap").hover(function () {
    $(this).addClass("showcase-card--hover");
}, function () {
    $(this).removeClass("showcase-card--hover");
});

function openTab(evt, tabName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("content-tab");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tab");
    for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" is-active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " is-active";
}

$("#theForm").change(function () {
    var category = [];
    var size = [];
    var year = [];
    // $.each($("input[name='category']:checked"), function () {
    //     category.push($(this).val());
    // });
    // window.location.href = $("#theForm").attr('action') + '?' + category;

    $.each($("input[name='category']:checked"), function () {
        category.push($(this).val());
    });
    $.each($("input[name='size']:checked"), function () {
        size.push($(this).val());
    });
    $.each($("input[name='year']:checked"), function () {
        year.push($(this).val());
    });
    $.ajax({
        type: "POST",
        url: $("#theForm").attr('action'),
        data: {
            filter: 1,
            category: category,
            size: size,
            year: year,
        }, // serializes the form's elements.
        success: function (data) {
            $('.product-listing').empty().append(data);
            // $('#category_main').append(data);
        }
    });
});

function showFilter() {
    $('#mobile-mask').addClass('is-active');
    $('#js-mobile-filter-wrapper').addClass('has-slide-left');
    $('#js-mobile-filter-menu-slide-left').addClass('is-active').show();
}

$(document).on("click", "#mobile-mask", function () {
    $('#mobile-mask').removeClass('is-active');
    $('#js-mobile-filter-wrapper').removeClass('has-slide-left');
    $('#js-mobile-filter-menu-slide-left').removeClass('is-active');
});
$(document).on("click", ".mobile-menu-close", function () {
    $('#mobile-mask').removeClass('is-active');
    $('#js-mobile-filter-wrapper').removeClass('has-slide-left');
    $('#js-mobile-filter-menu-slide-left').removeClass('is-active');
});
$(document).on("click", ".swiper-box", function () {
    $('.dimm-layer').css('display', 'block');
});
$(document).on("click", ".feature-benefit-gallery__close", function () {
    $('.dimm-layer').hide();
});
$('#collapseSize').on('hidden.bs.collapse', function () {
    $('.collapseSize').empty().html('<i class="icofont-plus"></i>');
}).on('show.bs.collapse', function () {
    $('.collapseSize').empty().html('<i class="icofont-minus"></i>');
});

$('#collapseCategory').on('hidden.bs.collapse', function () {
    $('.collapseCategory').empty().html('<i class="icofont-plus"></i>');
}).on('show.bs.collapse', function () {
    $('.collapseCategory').empty().html('<i class="icofont-minus"></i>');
});
$('#collapsePrice').on('hidden.bs.collapse', function () {
    $('.collapsePrice').empty().html('<i class="icofont-plus"></i>');
}).on('show.bs.collapse', function () {
    $('.collapsePrice').empty().html('<i class="icofont-minus"></i>');
});

$('#order-voucher').change(function (e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: baseUrl + '/check-voucher',
        data: {
            voucher: $(this).val(),
            product_id: $('#list_product_id').val(),
        },
        dataType: "json",
        // beforeSend: function () {
        //     $(this).attr('disabled','disabled');
        // },
        success: function (data) {
            if (data.status == 1) {
                $('.voucher #description').empty();
                $('#btnApplyVoucher').removeAttr('disabled');
            } else {
                $('#btnApplyVoucher').attr('disabled');
                $('.voucher #description').empty();
                $('.voucher #description').append(data.description);
                $('#order-voucher').addClass('is-valid-false');
            }
        }
    });
});
$('#btnApplyVoucher').click(function () {
    var voucher = $('#order-voucher').val();
    if (voucher == "") {
        alert('Bạn chưa nhập mã giảm giá');
    }

    $.ajax({
        type: "POST",
        url: baseUrl + '/voucher',
        data: {
            voucher: voucher,
        },
        success: function (data) {
            if (data.status == 0) {
                $('.voucher #description').empty();
                $('.voucher #description').append(data.description);
            } else {
                $('#cart-sidebar').empty();
                $('#cart-sidebar').append(data);
            }
        },
    });
});

$('#order-voucher_2').change(function (e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: baseUrl + '/check-voucher',
        data: {
            voucher: $(this).val(),
            product_id: $('#list_product_id').val(),
        },
        dataType: "json",
        // beforeSend: function () {
        //     $(this).attr('disabled','disabled');
        // },
        success: function (data) {
            if (data.status == 1) {
                $('.voucher_2 #description').empty();
                $('#btnApplyVoucher2').removeAttr('disabled');
            } else {
                $('#btnApplyVoucher2').attr('disabled');
                $('.voucher_2 #description').empty();
                $('.voucher_2 #description').append(data.description);
                $('#order-voucher_2').addClass('is-valid-false');
            }
        }
    });
});

$('#btnApplyVoucher2').click(function () {
    var voucher = $('#order-voucher_2').val();
    if (voucher == "") {
        alert('Bạn chưa nhập mã giảm giá');
    }

    $.ajax({
        type: "POST",
        url: baseUrl + '/voucher',
        data: {
            voucher_2: voucher,
        },
        success: function (data) {
            if (data.status == 0) {
                $('.voucher_2 #description').empty();
                $('.voucher_2 #description').append(data.description);
            } else {
                $('#cart-sidebar').empty();
                $('#cart-sidebar').append(data);
            }
        },
    });
});

$('#order-voucher_3').change(function (e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: baseUrl + '/check-voucher',
        data: {
            voucher: $(this).val(),
            product_id: $('#list_product_id').val(),
        },
        dataType: "json",
        // beforeSend: function () {
        //     $(this).attr('disabled','disabled');
        // },
        success: function (data) {
            if (data.status == 1) {
                $('.voucher_3 #description').empty();
                $('#btnApplyVoucher3').removeAttr('disabled');
            } else {
                $('#btnApplyVoucher3').attr('disabled');
                $('.voucher_3 #description').empty();
                $('.voucher_3 #description').append(data.description);
                $('#order-voucher_3').addClass('is-valid-false');
            }
        }
    });
});

$('#btnApplyVoucher3').click(function () {
    var voucher = $('#order-voucher_3').val();
    if (voucher == "") {
        alert('Bạn chưa nhập mã giảm giá');
    }

    $.ajax({
        type: "POST",
        url: baseUrl + '/voucher',
        data: {
            voucher_3: voucher,
        },
        success: function (data) {
            if (data.status == 0) {
                $('.voucher_3 #description').empty();
                $('.voucher_3 #description').append(data.description);
            } else {
                $('#cart-sidebar').empty();
                $('#cart-sidebar').append(data);
            }
        },
    });
});
