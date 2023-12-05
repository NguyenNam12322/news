<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\Models\product;

use Illuminate\Support\Facades\Cache;

use App\Models\deal;

use App\Models\banners;

use App\Models\post;

use  App\Models\image;

use App\Models\metaSeo;

use App\Models\groupProduct;

use App\Models\filter;
use DB;
use App\products1;

use \Carbon\Carbon;


class crawlController extends Controller
{

    public function convertSlug($title)
    {
       
        $replacement = '-';
        $map = array();
        $quotedReplacement = preg_quote($replacement, '/');
        $default = array(
            '/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ|À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ|å/' => 'a',
            '/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ|È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ|ë/' => 'e',
            '/ì|í|ị|ỉ|ĩ|Ì|Í|Ị|Ỉ|Ĩ|î/' => 'i',
            '/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ|Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ|ø/' => 'o',
            '/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ|Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ|ů|û/' => 'u',
            '/ỳ|ý|ỵ|ỷ|ỹ|Ỳ|Ý|Ỵ|Ỷ|Ỹ/' => 'y',
            '/đ|Đ/' => 'd',
            '/ç/' => 'c',
            '/ñ/' => 'n',
            '/ä|æ/' => 'ae',
            '/ö/' => 'oe',
            '/ü/' => 'ue',
            '/Ä/' => 'Ae',
            '/Ü/' => 'Ue',
            '/Ö/' => 'Oe',
            '/ß/' => 'ss',
            '/[^\s\p{Ll}\p{Lm}\p{Lo}\p{Lt}\p{Lu}\p{Nd}]/mu' => ' ',
            '/\\s+/' => $replacement,
            sprintf('/^[%s]+|[%s]+$/', $quotedReplacement, $quotedReplacement) => '',
        );
        //Some URL was encode, decode first
        $title = urldecode($title);
        $map = array_merge($map, $default);
        return strtolower(preg_replace(array_keys($map), array_values($map), $title));

    }

    public function crawlwebtantam()
    {

        $link = 'meo-hay/huong-dan-cach-tao-do-am-trong-phong-may-lanh-don-gian-1550550
           meo-hay/mach-ban-cach-khu-mui-hoi-trong-phong-may-lanh-1550425
           meo-hay/huong-dan-cach-ket-noi-may-lanh-lg-voi-dien-thoai-1550413
           meo-hay/hen-suyen-la-gi-tre-bi-suyen-co-nen-ngu-may-lanh-1549939
           meo-hay/may-lanh-reetech-bao-loi-e3-nguyen-nhan-va-cach-khac-phuc-1549210
           meo-hay/may-lanh-aqua-bao-loi-f1-nguyen-nhan-va-cach-xu-ly-1549034
           meo-hay/ban-can-lam-gi-khi-xuat-hien-ma-loi-may-lanh-sharp-chop-den-1548999
           meo-hay/tre-sot-co-nen-nam-may-lanh-khong-mot-so-luu-y-1548736
           meo-hay/swing-trong-may-lanh-la-gi-cach-su-dung-nhu-the-nao-1548507
           meo-hay/nhiet-do-may-lanh-cho-tre-so-sinh-bao-nhieu-la-an-toan-1550872
           meo-hay/chi-tiet-cach-khac-phuc-khi-may-lanh-electrolux-1550856
           meo-hay/nguyen-nhan-may-lanh-thoi-ra-hoi-nong-1550840
           meo-hay/cach-khac-phuc-khi-may-lanh-lg-bao-loi-ch10-1550735
           meo-hay/nguyen-nhan-va-cach-sua-may-lanh-khong-mo-canh-1550573
           meo-hay/bang-tra-cuu-ma-loi-may-lanh-reetech-day-du-nhat-1550571
           meo-hay/cach-reset-may-lanh-toshiba-don-gian-1550271" 
           meo-hay/bang-tong-hop-ma-loi-may-lanh-gree-day-du-va-chi-tiet-1550093
           meo-hay/cach-su-dung-dieu-khien-may-lanh-daikin-day-du-1547846 
           meo-hay/huong-dan-cach-chinh-may-lanh-lg-mat-nhat-cho-mua-nong-1547799
           meo-hay/nen-dot-nen-thom-trong-phong-may-lanh-khong-1553539
           meo-hay/hop-che-ong-dong-may-lanh-la-gi-co-nen-su-dung-1553529" 
           meo-hay/nguyen-nhan-va-cach-khac-phuc-dieu-hoa-daikin-bi-loi-f3-1553447" 
           meo-hay/tim-hieu-tat-tan-tat-ve-che-do-x-fan-cua-may-lanh-gree-1552859
           meo-hay/tim-hieu-may-lanh-co-loc-khong-khi-1551730
           meo-hay/tim-hieu-may-lanh-khong-cuc-nong-1551599
           meo-hay/huong-dan-cach-di-ong-dong-may-lanh-am-tuong-1551598
           meo-hay/che-do-clean-cua-may-lanh-che-do-tu-dong-lam-sach-1551466
           meo-hay/nguyen-nhan-va-cach-xu-ly-loi-f95-may-lanh-panasonic-1550964
           meo-hay/may-lanh-trung-tam-la-gi-uu-va-nhuoc-diem-cua-may-1547796
           meo-hay/cach-reset-may-lanh-panasonic-don-gian-1550405
           meo-hay/che-do-turbo-trong-may-lanh-la-gi-mach-ban-cach-su-dung-1550227
           meo-hay/mach-ban-cach-lap-may-lanh-cho-2-phong-ngu-1550225
           meo-hay/cach-chinh-may-lanh-mitsubishi-electric-1549925
           meo-hay/loi-h16-may-lanh-panasonic-la-loi-gi-cach-xu-ly-1549920
           meo-hay/may-lanh-1-ngua-la-gi-co-gi-khac-biet-voi-may-lanh-2-ngua-1547620
           meo-hay/ve-sinh-may-lanh-tu-dung-multi-gia-re-qua-chi-tu-1545127
           meo-hay/ve-sinh-may-lanh-am-tran-gia-soc-chi-249-000d-ap-1545124
           meo-hay/ve-sinh-may-lanh-treo-tuong-gia-soc-chi-99-000d-1545112
           meo-hay/bao-duong-may-loc-nuoc-gia-chi-130-000d-1514266
           meo-hay/chuong-trinh-tich-diem-danh-cho-khach-hang-than-1552248
           meo-hay/tai-sao-dieu-hoa-khong-mat-chi-co-gio-nguyen-nhan-1550584
           meo-hay/huong-dan-cach-bat-tat-may-lanh-cac-thuong-hieu-1550232
           meo-hay/che-do-sleep-may-lanh-la-gi-su-dung-nhu-the-nao-1550159
           meo-hay/huong-dan-cach-reset-may-lanh-samsung-1549929
           meo-hay/che-do-hi-power-trong-may-lanh-la-gi-1549872
           meo-hay/ma-loi-may-lanh-tcl-nguyen-nhan-va-cach-khac-phuc-1549761
           meo-hay/tong-hop-ma-loi-may-lanh-aqua-va-cach-khac-phuc-1549215
           meo-hay/may-lanh-inverter-la-gi-diem-khac-biet-voi-may-lanh-thong-thuong-1549087
           meo-hay/huong-dan-chi-tiet-cach-chinh-may-lanh-aqua-don-gian-1549003
           meo-hay/mach-ban-8-cach-su-dung-may-lanh-tiet-kiem-dien-1551153
           meo-hay/cach-khac-phuc-may-lanh-electrolux-bao-loi-e3-1550074
           meo-hay/khac-phuc-may-lanh-nhay-den-xanh-lien-tuc-hieu-qua-1549799
           meo-hay/may-lanh-khong-chay-va-cach-khac-phuc-1549683
           meo-hay/nguyen-nhan-va-meo-khac-phuc-khi-remote-may-lanh-lg-bi-loi-1549543
           meo-hay/huong-dan-chi-tiet-cach-thay-pin-remote-may-lanh-toshiba-1548832
           meo-hay/nguyen-nhan-va-cach-khac-phuc-den-may-lanh-nhap-nhay-1548691 
           meo-hay/may-lanh-lg-bao-loi-ch38-nguyen-nhan-va-cach-khac-phuc-1548636 
           meo-hay/bang-tong-hop-ma-loi-may-lanh-midea-va-cach-khac-phuc-1548603 
           meo-hay/bang-tong-hop-ma-loi-may-lanh-casper-va-cach-khac-phuc-1548463 
           meo-hay/may-lanh-beko-bao-loi-p0-nguyen-nhan-va-cach-khac-phuc-1549036
           meo-hay/cach-chinh-may-lanh-casper-chi-tiet-de-hieu-nhat-1548001
           meo-hay/huong-dan-cach-su-dung-remote-may-lanh-panasonic-1547481
           meo-hay/may-lanh-keu-tit-tit-lien-tuc-la-bi-gi-1547476
           meo-hay/cach-khac-phuc-may-lanh-samsung-bao-loi-cf-trong-1547414
           meo-hay/huong-dan-cach-chinh-may-lanh-bang-remote-1547356
           meo-hay/bang-tong-hop-ma-loi-may-lanh-panasonic-inverter-1546709
           meo-hay/huong-dan-cach-tat-hen-gio-may-lanh-toshiba-1546579
           meo-hay/bang-tong-hop-ma-loi-may-lanh-lg-day-du-moi-nhat-1546511
           meo-hay/mach-ban-cac-cach-su-dung-may-lanh-tiet-kiem-dien-1546296
           meo-hay/tai-sao-phai-ve-sinh-may-lanh-dinh-ky-tan-suat-ve-1548094
           meo-hay/huong-dan-cach-chinh-may-lanh-cho-lanh-1547494
           meo-hay/bang-tong-hop-ma-loi-may-lanh-toshiba-day-du-moi-1546707
           meo-hay/che-do-eco-may-lanh-sharp-co-thuc-su-tiet-kiem-1546653
           meo-hay/cach-khac-phuc-may-lanh-khong-nhan-tin-hieu-tu-remote-1546537
           meo-hay/nguyen-nhan-may-lanh-chay-nuoc-va-cach-khac-phuc-1546454
           meo-hay/cach-khac-phuc-khi-cuc-nong-may-lanh-keu-to-1546249
           meo-hay/nguyen-nhan-cuc-nong-may-lanh-chay-nuoc-1546126
           meo-hay/cach-nhan-biet-va-khac-phuc-hieu-qua-khi-may-lanh-bi-xi-ga-1542615
           meo-hay/tai-sao-remote-may-lanh-bi-loi-cach-khac-phuc-1542041
           meo-hay/vi-sao-may-lanh-chay-mot-luc-roi-tat-roi-chay-lai-1547856
           meo-hay/huong-dan-cach-su-dung-remote-may-lanh-lg-day-du-1547576
           meo-hay/nguyen-nhan-va-cach-khac-phuc-may-lanh-reetech-bao-loi-e4-1547495
           meo-hay/bang-ma-loi-may-lanh-lg-inverter-chi-tiet-1547368
           meo-hay/huong-dan-cach-tinh-dien-nang-tieu-thu-cua-may-1547329
           meo-hay/Cac-cach-mo-may-lanh-khong-can-remote-de-thuc-hien-1547315
           meo-hay/nguyen-nhan-may-lanh-keu-to-va-cach-khac-phuc-1547236
           meo-hay/chi-tiet-bang-tong-hop-ma-loi-may-lanh-electrolux-1546630
           meo-hay/huong-dan-cach-bat-che-do-khu-mui-cua-may-lanh-1546394
           meo-hay/cach-khoa-ga-may-lanh-an-toan-hieu-qua-tai-nha-1546209
           meo-hay/may-lanh-2-chieu-la-gi-danh-gia-uu-nhuoc-diem-1548752
           meo-hay/tai-sao-phong-may-lanh-co-nhieu-bui-cach-han-che-bui-hieu-qua-1547678
           meo-hay/cach-su-dung-may-lanh-giup-tang-tuoi-tho-1547488
           meo-hay/bang-ma-loi-may-lanh-samsung-chi-tiet-cap-nhat-1547405
           meo-hay/tai-sao-may-lanh-khong-lanh-chi-quat-cach-khac-phuc-1547031
           meo-hay/cau-tao-va-nguyen-ly-hoat-dong-cua-may-lanh-1546857
           meo-hay/huong-dan-ban-cach-hen-gio-may-lanh-daikin-1546560
           meo-hay/may-lanh-khong-lanh-nguyen-nhan-cach-khac-phuc-1546263
           meo-hay/lap-dat-cuc-nong-may-lanh-de-ngoai-troi-co-sao-khong-1545482
           meo-hay/canh-bao-gia-mao-website-dich-vu-tan-tam-1431715
           meo-hay/may-lanh-co-mui-hoi-nguyen-nhan-va-meo-khac-phuc-1547730
           meo-hay/huong-dan-cach-chinh-may-lanh-sharp-chi-tiet-nhat-1547677
           meo-hay/cach-xu-ly-may-lanh-panasonic-chop-den-timer-de-1547632
           meo-hay/cach-thao-mat-na-may-lanh-panasonic-sieu-don-gian-1546782
           meo-hay/huong-dan-cach-su-dung-remote-may-lanh-toshiba-1546610
           meo-hay/huong-dan-cach-thao-lap-may-lanh-tai-nha-an-toan-1546558
           meo-hay/bang-tong-hop-ma-loi-may-lanh-toshiba-inverter-1546247
           meo-hay/tai-sao-may-lanh-bi-chop-den-do-nguyen-nhan-va-cach-khac-phuc-1546237
           meo-hay/ngu-may-lanh-bi-tich-dien-co-nguy-hiem-khong-1543678
           meo-hay/may-lanh-chay-nuoc-cach-khac-phuc-1543648
           meo-hay/may-lanh-toshiba-bao-loi-04-la-loi-gi-cach-khac-phuc-1547752
           meo-hay/may-lanh-aqua-bao-loi-e7-nguyen-nhan-cach-khac-phuc-1547748
           meo-hay/cach-sua-loi-h19-may-lanh-panasonic-nhanh-chong-1547680
           meo-hay/cuc-nong-may-lanh-khong-chay-nguyen-nhan-va-meo-1547621
           meo-hay/nguyen-nhan-va-cach-khac-phuc-hien-tuong-may-lanh-keu-re-re-1547473
           meo-hay/cach-chinh-may-lanh-panasonic-mat-nhat-nhung-van-tiet-kiem-dien-1546673 
           meo-hay/huong-dan-chi-tiet-cach-tat-hen-gio-may-lanh-panasonic-1546595 
           meo-hay/cach-xu-ly-khi-remote-may-lanh-khong-hien-thi-nhiet-do-1546519
           meo-hay/nguyen-nhan-may-lanh-tu-tat-cach-khac-phuc-hieu-1546300 
           meo-hay/cong-dung-cua-cac-che-do-may-lanh-la-gi-va-cach-su-dung-1546046
           meo-hay/may-lanh-electrolux-bao-loi-e1-la-gi-va-cach-sua-tai-nha-1547387
           meo-hay/sua-loi-h11-may-lanh-panasonic-hieu-qua-sau-vai-phut-1547280
           meo-hay/giai-ma-cac-ky-hieu-tren-remote-may-lanh-giup-ban-de-su-dung-1547005
           meo-hay/huong-dan-cach-hen-gio-may-lanh-lg-don-gian-1546631
           meo-hay/bang-tong-hop-ma-loi-may-lanh-daikin-cap-nhat-moi-1546622
           meo-hay/huong-dan-cach-tat-hen-gio-may-lanh-sharp-1546416
           meo-hay/khuyen-mai-gia-re-qua-ve-sinh-may-lanh-treo-tuong-1545306
           meo-hay/bao-duong-may-loc-nuoc-gia-soc-chi-tu-130-000d-1544103
           meo-hay/meo-khu-mui-may-lanh-cuc-ky-hieu-qua-de-thuc-hien-1542654
           meo-hay/ve-sinh-may-lanh-treo-tuong-gia-soc-chi-tu-99-1542096
           meo-hay/tai-sao-ngu-may-lanh-bi-dau-hong-cach-dam-bao-suc-1542802
           meo-hay/nguyen-nhan-va-cach-khac-phuc-khi-may-lanh-bi-dong-tuyet-1542757
           meo-hay/ve-sinh-may-lanh-am-tran-tu-dung-multi-gia-re-qua-1536031
           meo-hay/ve-sinh-may-lanh-treo-tuong-gia-re-qua-chi-tu--1536030
           meo-hay/ve-sinh-may-lanh-tu-2hp-5hp-bao-sach-bao-gas-g-1514265
           meo-hay/ve-sinh-may-lanh-treo-tuong-1-1-5hp-bao-sach-bao-1514264
           meo-hay/bao-duong-may-loc-nuoc-gia-chi-tu-135-000d-1481264
           meo-hay/khuyen-mai-hot-ve-sinh-may-lanh-gia-chi-tu-180-00-1481263
           meo-hay/khuyen-mai-bao-duong-may-loc-nuoc-thang-1472179
           meo-hay/dich-vu-ve-sinh-may-lanh-chi-tu-180000-dong-tang-kem-kiem-tra-mien-phi-may-loc-nuoc-1451101
           meo-hay/gioi-thieu-dich-vu-cung-cap-va-lap-dat-may-lanh-am-1472997
           meo-hay/gioi-thieu-ve-trung-tam-bao-hanh-topcare-1472996
           meo-hay/khuyen-mai-dich-vu-ve-sinh-may-lanh-1472178
           meo-hay/khuyen-mai-dich-vu-ve-sinh-may-lanh-1458755
           meo-hay/dich-vu-tan-tam-kiem-tra-ve-sinh-may-loc-nuoc-ta-1451285
           meo-hay/dich-vu-tan-tam-sua-dien-nuoc-dan-dung-gia-soc-ch-1450819
           meo-hay/ve-sinh-may-lanh-cam-ket-bao-sach-bao-ga-1450818
           meo-hay/ly-do-nen-mua-may-lanh-am-tran-tai-tan-tam-1441937
           meo-hay/ra-mat-app-tho-tan-tam-khuyen-mai-cuc-soc-1436107
           meo-hay/ra-mat-app-tho-tan-tam-dat-lich-lap-dat-sua-chua-1436104
           meo-hay/khuyen-mai-tan-tam-giam-chi-phi-ve-sinh-may-lanh-1433607
           meo-hay/huong-dan-thay-van-cap-nuoc-may-giat-long-dung-1394162
           meo-hay/huong-dan-thay-board-may-giat-long-dung-aqua-1394161
           meo-hay/huong-dan-gan-ron-may-giat-cua-ngang-1394159
           meo-hay/huong-dan-sac-ga-may-lanh-1394155
           meo-hay/cach-su-dung-che-do-ve-sinh-long-giat-tren-may-gia-1372227
           meo-hay/dong-nap-ngay-sau-khi-dung-co-nen-khong-1372225
           meo-hay/loi-ich-cua-chan-de-may-giat-1372222
           meo-hay/cach-lap-day-tiep-dien-cho-may-giat-don-gian-nhat-1372221
           meo-hay/cach-ve-sinh-may-giat-cua-truoc-don-gian-ngay-ta-1372219
           meo-hay/cach-khac-phuc-dieu-hoa-bi-nhiem-dien-tu-1372216
           meo-hay/huong-dan-nhiet-do-f-sang-c-tren-dieu-hoa-1372215
           meo-hay/tong-hop-kinh-nghiem-lap-dat-may-lanh-khi-moi-mu-1372213
           meo-hay/may-lanh-dieu-hoa-het-gas-ma-ban-khong-biet-khi--1372210
           meo-hay/6-buoc-ve-sinh-cuc-nong-cuc-lanh-may-lanh-chi-tie-1372209
           meo-hay/7-sai-lam-thuong-mac-phai-khi-ve-sinh-man-hinh-tiv-1372084
           meo-hay/tu-lanh-khong-dong-da-nguyen-nhan-va-cach-khac-ph-1369982
           meo-hay/cach-chon-mua-cap-hdmi-cho-tivi-nhu-the-nao--1369981
           meo-hay/gia-do-tivi-treo-tuong-co-nhung-loai-nao-loai-nao-1369980
           meo-hay/5-cach-su-dung-tivi-don-gian-giup-tang-tuoi-tho-ch-1369978';

        $link = explode(PHP_EOL, $link);

        $now  = Carbon::now();

        foreach($link as $value){

            $link_run = 'https://www.dichvutantam.com/'.trim($value);

            $file_headers = @get_headers($link_run);

            if($file_headers[0] == 'HTTP/1.1 200 OK'){

                $html = file_get_html($link_run);

                $title = strip_tags($html->find('.detail h1', 0));

                $content = html_entity_decode($html->find('.detail .content',0));


                $meta_title = $title;

                $meta_content = $title; 

                $meta_model = new metaSeo();

                $meta_model->meta_title =$meta_title;

                $meta_model->meta_content =$meta_content;

                $meta_model->meta_og_content =$meta_content;

                $meta_model->meta_og_title =$meta_title;

                $meta_model->meta_key_words =$meta_title;

                $meta_model->save();

                $data = ['title' => $title, 'content'=>$content,  'date_post'=>$now, 'category'=>11, 'shortcontent'=>$title, 'id_user'=>1, 'link'=> $this->convertSlug($title), 'active'=>0, 'Meta_id'=>$meta_model['id'], 'featured'=>0, 'hight_light'=>0, 'views'=>0, 'created_at'=>$now, 'updated_at'=>$now];

                $update  = DB::table('posts1')->insert($data);
            }

        }

        echo "thanh cong";
    }

    public function checkImagePost()
    {
        for ($i=255; $i < 364; $i++) { 

            $post = DB::table('posts1')->where('id', $i)->first();

            preg_match_all('/<img.*?src=[\'"](.*?)[\'"].*?>/i', $post->content, $matches);

            if(isset($matches[1])){

                foreach($matches[1] as $value){

                    DB::table('check_image_crawl')->insert(['id_post'=>$i, 'image'=>$value]);
                }    
                
            }    
            
        }
    }


    public function PutFileImageToSV()
    {
        
        for ($i=255; $i < 364; $i++) { 

            $post = DB::table('posts1')->where('id', $i)->first();

            if($post->crawl_image==''){

                $this->crawlImagesWeb($post->content, $post->id);
            }
           
            
        }

        echo "thành công";
    }

    public function crawlImagesWeb($content, $id)
    {
        preg_match_all('/<img.*?src=[\'"](.*?)[\'"].*?>/i', $content, $matches);

        $arr_change = [];

        $time = time();

        $regexp = '/^[a-zA-Z0-9][a-zA-Z0-9\-\_]+[a-zA-Z0-9]$/';

    
        if(isset($matches[1])){

            foreach($matches[1] as $value){
            
                // nếu link return 200

                $file_headers  = @get_headers($value);

                if($file_headers[0] == 'HTTP/1.1 200 OK'){

                    $img  = '/uploads/news/'.$time.'_'.basename($value);

                    // đẩy file lên server

                    file_put_contents(public_path().$img, file_get_contents($value));

                    $content  = str_replace($value, env('APP_URL').$img, $content);

                
                }
                else{
                    echo $value;
                }
                
            }
        }

        DB::table('posts1')->where('id', $id)->update(['content'=>$content, 'crawl_image'=>1]);

    }

    public function updateLinkCategory()
    {
        $data = DB::table('categories')->get();

        foreach ($data as $key => $value) {

            $slug    = convertSlug($value->namecategory);
            
            $product = DB::table('categories')->where('id',  $value->id)->update(['link'=>$slug]);


        }
        echo "thanh cong";
        
    }

    public function updateMetas($value='')
    {

        $data = post::get();

        foreach ($data as $key => $value) {

            $urls = 'https://sieuthitivi.com'.$value->link;
            $html = file_get_html(trim($urls));

            if(!empty(htmlspecialchars($html->find("meta[name=keywords]",0))) ){
                 $keyword = htmlspecialchars($html->find("meta[name=keywords]",0)->getAttribute('content'));
                $content = $html->find("meta[name=description]",0)->getAttribute('content');
                $title   = $html-> find("title",0)->plaintext;
                $metas   =  metaSeo::find($value->Meta_id);
                $metas->meta_title =$title; 
                $metas->meta_content =$content; 
                $metas->meta_key_words = strip_tags($keyword); 
                $metas->meta_og_title =$title; 
                $metas->meta_og_content =$content; 

                $metas->save();
            }
           
           
        }
        echo "thanh cong";
        
    }
    public function updateMeta()
    {
        $blog = post::get();

        $keys = 7140;

        foreach ($blog as $key => $value) {

            $keys--;
            
            $data = post::find($value->id);

            $data->Meta_id = $keys;

            $data->save();

        }

        echo "thanh cong";
    }
    public function addNames()
    {
        $product = product::where('id_group_product', NULL)->get()->pluck('id')->toArray();

        foreach ($product as $key => $value) {

            $products = product::find($value);

            if(!empty($products)){

                $name =  $products->Name;
                

                if(!empty($products->ProductSku)){
                    $cut    =  strstr($name, $products->ProductSku);
                    $names = str_replace($cut, '', $name);

                    if(!empty($names)){

                        $products->Names = $names;
                        $products->save();

                    }
                }
            }
        }
        echo "thanh cong";

    }
    public function sosanh()
    {

        $ids = [13,16,12,14,15,41,36,40,287,37,38,39,57,58,59,60,61,77,82,80,79,84,78,83,81,117,116,324,130];
        
        foreach ($ids as  $id) {
            
            $groupProduct =  groupProduct::find($id);

            $product = json_decode($groupProduct->product_id);

            
            foreach ($product as $value) {

                if( intval($value)>425){
                    $products = product::find($value);

                    if(!empty($products)){
                        $products->id_group_product = $id;
                        $products->save();

                    }
                   
                }
            
            }
        }
       
        echo "thanh cong";
    }

    public function strip_tags_content($string) { 
        // ----- remove HTML TAGs ----- 
        $string = preg_replace ('/<[^>]*>/', ' ', $string); 
        // ----- remove control characters ----- 
        $string = str_replace("\r", '', $string);
        $string = str_replace("\n", ' ', $string);
        $string = str_replace("\t", ' ', $string);
        // ----- remove multiple spaces ----- 
        $string = trim(preg_replace('/ {2,}/', ' ', $string));
        return $string; 

    }



   
    public function checkProductSku()
    {
        $data  = product::find(2226);

        $data_id = 4;

        $html = $data->Specifications;

        $dom = new \DOMDocument();

        $html = mb_convert_encoding($html , 'HTML-ENTITIES', 'UTF-8'); //convert sang tiếng việt cho dom

        $dom->loadHTML($html);

        $ar_gr[1] = ['Kích cỡ màn hình', 'Độ phân giải', 'Nơi sản xuất', 'Cổng HDMI', 'Công nghệ xử lý hình ảnh', 'Kích thước có chân, đặt bàn', 'Kích thước không chân, treo tường'];
        $ar_gr[2] = ['Khối lượng giặt', 'Khối lượng sấy', 'Tốc độ quay vắt', 'Kiểu động cơ', 'Lồng giặt', 'Công nghệ giặt', 'Kích thước - Khối lượng', 'Nơi sản xuất'];
        $ar_gr[3] = ['Dung tích sử dụng', 'Dung tích ngăn đá', 'Dung tích ngăn lạnh', 'Công nghệ Inverter', 'Kiểu tủ', 'Kích thước - Khối lượng', 'Nơi sản xuất'];
        $ar_gr[4] = ['Loại máy', 'Công suất làm lạnh', 'Công suất sưởi ấm', 'Phạm vi làm lạnh hiệu quả', 'Chế độ tiết kiệm điện', 'Loại Gas sử dụng', 'Nơi sản xuất', 'Năm ra mắt'];

        $ar = $ar_gr[$data_id];



        foreach($dom->getElementsByTagName('td') as $td) {

            foreach ($ar as $key => $value) {

                if(strpos($td->nodeValue, $value)>-1){
                    print_r($td->nodeValue . '<br/>');
                }
            }
           
        }


        // $dom = new \DOMDocument();
        // $dom->loadHtml($html);
        // $x = new \DOMXpath($dom);
        // foreach($x->query('//td') as $td){
        //     echo strip_tags($td->textContent).'<br>';
        //     //if just need the text use:
        //     //echo $td->textContent;
        // }

    }

    public function editKeywordsProduct()
    {
        $Group_products = groupProduct::find(1);

        $id_product =  json_decode($Group_products->product_id);


        foreach ($id_product as $key => $value) {

            $product = product::find($value);

            // tìm chuỗi từ vị trí inch để xóa 

            if(!empty($product->Name)){

                $name = preg_replace('/[0-9]{1,4} inch /', 'remove ', $product->Name);

                $name = str_replace(strstr($name, 'remove'), '', $name);
              
                DB::table('checkname')->insert(['name'=> $product->Name, 'model'=>$product->ProductSku, 'name1'=>$name, 'id_product'=>$value]);

            }
            
        }

      
        echo 'thanh cong';
      
    }
    public function editMetaSeoDB()
    {
        $product = product::select('Meta_id', 'Name', 'Price', 'id')->get();

        // foreach ($product as $key => $value) {

        //     $metaseo =  metaSeo::find($value->Meta_id);

        //     $metaseo->title = $value->Name.
           
        // }

        foreach ($product as $key => $value) {

            $product = product::find($value->id);

            $metaseo =  metaSeo::find($product->Meta_id);

            if(!isset($product->Price)){
                dd($value->id);
                
            }

            $Price = $product->Price;



            //check id trong gia dụng 

            $groupProduct = groupProduct::find(8);

            $giadung = json_decode($groupProduct->product_id);

            $tragop = '';

            if($Price>=3000000 && !in_array($product->id, $giadung)){

                $tragop = ', Trả góp 0%';

            }

            $metaseo->meta_title = $product->Name.' giá rẻ'.$tragop;

            $metaseo->save();

            echo "<pre>";

            echo $value->id;

            echo "</pre>";

        }

        echo'thành công';

    }
   
    public function echo1(){


        $urls = DB::table('crawl_link')->get();

        foreach ($urls as $key => $value) {

            $url = $value->link;

            $image = $value->image;

            $html = file_get_html(trim($url));

            $title =  strip_tags($html->find('.entry-title',0));

            $content  = html_entity_decode($html->find('.entry-content',0));

            $link = str_replace('https://sieuthitivi.com', '', $url);

            $id_user =1;

            $active = 0;

            $category = 0;

            $meta_id  = 0;

            $insert = ['image'=>$image, 'link'=>$link, 'title'=>$title, 'content'=>$content, 'id_user'=>$id_user, 'active'=>$active, 'category'=>$category, 'Meta_id'=>$meta_id];

           
            DB::table('posts1')->insert($insert);
  
        }

        echo "thanh cong";
        
    }


    

    public function echo(){
         $banners = banners::where('option','=',0)->take(6)->OrderBy('stt', 'asc')->where('active','=',1)->select('title', 'image', 'title', 'link')->get();

        $deal = deal::OrderBy('order', 'desc')->get();

        $product_sale = DB::table('products')->join('sale_product', 'products.id', '=', 'sale_product.product_id')->join('makers', 'products.Maker', '=', 'makers.id')->get();

        $groups = groupProduct::select('id','name', 'link')->where('parent_id', 0)->get();

        $deal_start = $deal->first()->start;

        cache::put('deal_start', $deal_start,10000);

    
        Cache::put('groups', $groups,10000);

        Cache::put('product_sale', $product_sale,10000);
        
        Cache::put('baners',$banners,10000);

        Cache::put('deals',$deal,10000);

       
    }
    public function updateProductQua()
    {
      $code = 'NF-N15SRA
        NF-N30ASRA
        NF-N50ASRA
        SD-P104WRA
        MK-5076MWRA
        MK-K51PKRA
        MX-AC400WRA
        MJ-DJ31SRA
        MJ-M176PWRA
        MJ-L500SRA
        MJ-DJ01SRA
        MJ-SJ01WRA
        MJ-H100WRA
        MJ-68MWRA
        MX-SS1BRA
        MX-GS1WRA
        MX-V310KRA
        MX-V300KRA
        MX-900MWRA
        MX-GX1561WRA
        MX-GX1511WRA
        MX-EX1511WRA
        MX-EX1561WRA
        MX-MG5351WRA 
        MX-MP5151WRA 
        MX-MG53C1CRA 
        MX-M300SRA
        MX-M210SRA
        MX-M200WRA
        MX-M200GRA
        MX-M100WRA
        MX-M100GRA
        NC-HU301PZSY
        NC-BG3000CSY
        NC-EG4000CSY
        NC-EG3000CSY
        NC-EG2200CSY
        NC-HKD121WRA
        NC-SK1BRA
        NC-GK1WRA
        MK-GB3WRA
        MK-GH3WRA
        NB-H3801KRA
        NB-H3203KRA
        NT-H900KRA
        SR-PX184KRA
        SR-HB184KRA
        SR-AFM181WRA
        SR-AFY181WRA
        SR-CX188SRA
        SR-CP188NRA
        SR-CP108NRA
        SR-CL188WRA
        SR-CL108WRA
        SR-MVN187HRA
        SR-MVN187LRA
        SR-MVN107HRA
        SR-MVN107LRA
        SR-MVP187HRA
        SR-MVP187NRA
        SR-MVQ187SRA
        SR-MVQ187VRA
        NU-SC100WYUE
        NU-SC180BYUE
        NN-DS596BYUE
        NN-CT655MYUE
        NN-CT36HBYUE
        NN-GT65JBYUE
        NN-GD37HBYUE
        NN-GF574MYUE
        NN-GT35HMYUE
        NN-GM34JMYUE
        NN-GM24JBYUE
        NN-ST65JBYUE
        NN-ST34HMYUE
        NN-SM33HMYUE
        NN-ST25JWYUE
        MC-CG370GN46
        MC-CG371AN46
        MC-CG373RN46
        MC-CG525RN49
        MC-CJ911RN49
        MC-CL305BN46
        MC-CL431AN46
        MC-CL561AN46
        MC-CL563RN46
        MC-CL565KN46
        MC-CL777HN49
        MC-CL779RN49
        MC-SB30JW049
        MC-CL789RN49
        MC-CL787TN49
        MC-CL575KN49
        MC-CL573AN49
        MC-CL571GN49
        MC-YL631RN46
        MC-YL669GN49
        MC-YL635TN46
        MC-YL637SN49
        AMC-CT1
        NI-GSE050ARA
        NI-GWE080WRA
        NI-GSD071PRA
        NI-GSD051GRA
        NI-WT980RRA
        NI-L700SSGRA
        NI-WL30VRA
        NI-U600CARA
        NI-U400CPRA
        NI-W650CSLRA
        NI-W410TSRRA
        NI-E510TDRA
        NI-E410TMRA
        NI-M300TARA
        NI-M300TVRA
        NI-M250TPRA
        NI-317TVRA
        NI-317TXRA
        EH-NA98RP645
        EH-NA98-K645
        EH-NA65-K645
        EH-NA45RP645
        EH-NA27PN645
        EH-NE81-K645
        EH-NE71-P645
        EH-NE65-K645
        EH-NE20-K645
        EH-ND57-P645
        EH-ND57-H645
        EH-ND64-P645
        EH-NE11-V645
        EH-ND30-K645
        EH-ND30-P645
        EH-ND21-P645
        EH-ND13-V645
        EH-ND12-P645
        EH-ND11-W645
        EH-ND11-A645
        EH-HE10VP421';

        $model = explode(PHP_EOL, $code);
        $now   = Carbon::now();
       
        foreach ($model as $key => $value) {
             $product = DB::table('products')->where('ProductSku', trim($value));

             if(!empty($product)){
                $product->update(['active'=>1, 'updated_at'=>$now]);

             }
             else{
                print_r($value);
             }
        }
        echo "thanh cong";

    }

    public function updateQuatityByTable()
    {


        // $data = DB::table('qualtity1')->get();
        // foreach ($data as $key => $value) {

        //     $product = product::find($value->product_id);

        //     $product->Quantily = $value->qty;

        //     $product->save();
           

        // }
        // echo "thanh cong";
    }

    public function updateQuatity()
    {
        $data = DB::table('qualtity')->get();
        foreach ($data as $key => $value) {

           $product = product::where('ProductSku', trim($value->name))->first();

            if(!empty($product)){
                $updateProduct = product::find($product->id);
                $updateProduct->Quantily = $value->qty;
                $updateProduct->save();
                DB::table('qualtity1')->insert(['name'=>$value->name, 'qty'=>$value->qty, 'product_id'=>$product->id]);

            }

        }
        echo "thanh cong";
    }
    public function getMetaNUll()
    {
        $meta = metaSeo::where('meta_title', 'like', '%Nội dung không tồn tại%')->get();
        foreach ( $meta as $key => $value) {
             $post = post::where('Meta_id', $value->id)->first();
             if(!empty($post)&&!empty($post->link)){
                $pp = post::find($post->id);
                $ppl=$pp->link;
                $urls = 'https://dienmaynguoiviet.vn/'.$ppl;
                $file_headers = @get_headers($urls);
                if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found'){

                    echo '<pre>';
                    print_r($urls);
                }
                else{

                    $html = file_get_html(trim($urls));


                    $keyword = htmlspecialchars($html->find("meta[name=keywords]",0)->getAttribute('content'));
                    $content = $html->find("meta[name=description]",0) ->getAttribute('content');
                    $title   = $html-> find("title",0)-> plaintext;
                
                    $metas   =  metaSeo::find($value['id']);

                    
                    $metas->meta_title =$title; 
                    $metas->meta_content =$content; 
                    $metas->meta_key_words = strip_tags($keyword); 
                    $metas->meta_og_title =$title; 
                    $metas->meta_og_content =$content; 

                    $metas->save();


                }
             }
        }
        echo "thanh cong";
       

    }
    public function CrawlNameMeta()
    {
        $post = post::select('id', 'Meta_id', 'link')->get();

        foreach ($post as $key => $value) {
            $urls = 'http://dienmaynguoiviet.com/'.$value->link.'/';
            $file_headers =@get_headers($urls);

            if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found'){

                echo '<pre>';
                print_r($urls);
            }
            else{
                $html = file_get_html(trim($urls));
                $keyword = htmlspecialchars($html->find("meta[name=keywords]",0)->getAttribute('content'));
                $content = $html->find("meta[name=description]",0) ->getAttribute('content');
                $title   = $html-> find("title",0)-> plaintext;
            
                $meta   =  metaSeo::find($value->Meta_id);

                $meta->meta_title =$title; 
                $meta->meta_content =$content; 
                $meta->meta_key_words = strip_tags($keyword); 
                $meta->meta_og_title =$title; 
                $meta->meta_og_content =$content; 

                $meta->save();
            }
        
            
        }

       
    }
    public function allproduct(){
        $link = $_GET['link'];

        $sp  = groupProduct::where('link', trim($link))->first();
        if(!empty($sp)){
            $sps = groupProduct::find($sp->id);

            $product = json_decode($sps->product_id);


            $link = [];

            if(!empty($product)){
                foreach ($product as $key => $value) {
                    $products = product::find($value);

                    $links = $products->Link??'';
                    if($links !=''){
                         array_push($link, 'https://dienmaynguoiviet.vn/'.$links);
                    }
                   
                }
            }

            foreach ($link as  $values) {
                echo $values.'<br>';
            }
        }
        else{
            echo "không tìm thấy nhóm sản phẩm này";
        }

    }
    public function checkempty()
    {
        $code = product::select('ProductSku', 'Detail')->get();

        foreach ($code as $key => $value) {
            
            if(empty($value->Detail)){
                echo "<pre>";
                print_r($value->ProductSku);
            }
        }
    }
    public function changeQualtity()
    {
        $data = DB::table('qualtity')->select('name', 'qty')->get();

        foreach ($data as $key => $value) {
          
            $product = product::where('ProductSku', trim($value->name))->select('id')->first();

            if(!empty($product)){
                $productId = product::find($product->id);
                $productId->Quantily = $value->qty;
                $productId->save();
                DB::table('product_update1')->insert(['product_id'=>$product->id, 'qty'=>$value->qty]);
            }  

        }
        echo "thanh cong";
    }
   public function emptyContent()
   {
        $products = product::select('id', 'Link')->OrderBy('id', 'asc')->where('Detail', '')->get();

        foreach ($products as $key => $value) {
             print_r($value->Link.'     ');
        }

   }

   public function randomOrderDeal()
   {
        $deal = deal::get();

        if($deal->count()>0){
            foreach ($deal as $key => $value) {
          
                $deals = deal::find($value->id);

                $deals->order = mt_rand(1, 10000);

                $deals->save();

           }
        }

       
       echo "thanh cong";
   }
    public function findimage()
    {
        $image = DB::table('imagecrawl')->select('image', 'id', 'active')->where('image', 'like', '%/media/%')->get();

        foreach ($image as $key => $value) {

            print_r($value);

            // if(strpos($value->image,'https://dienmaynguoiviet.vn/')===false){


            //     $images  = 'https://dienmaynguoiviet.vn'.$value->image;
            //     $img  = str_replace('https://dienmaynguoiviet.vn/media', '/media', $images);
            //     DB::table('imagecrawl')->where('id', $value->id)->update(['active' => 1]);

            //     file_put_contents(public_path().$img, file_get_contents(trim($images)));
            // }
            
        }

    }
    public function runCrawl()
    {
        $image = DB::table('imagecrawl')->select('image', 'id', 'active')->where('active', 0)->get();

        foreach ($image as $key => $value) {
            $pos = strpos($value->image, "/media/product/");

            if($pos != false){

               
                $file_headers = @get_headers($value->image);
                if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found'){

                   
                    print_r($value->image.' ');
                }
                else{
                         
                     DB::table('imagecrawl')->where('id', $value->id)->update(['active' => 1]);

                    DB::table('imagerun')->insert(['image'=>$value->image]);

                    $img  = str_replace('https://dienmaynguoiviet.vn/media', '/media', $value->image);

                    file_put_contents(public_path().$img, file_get_contents(trim($value->image)));

                    
                }

                
            }    

        }
        echo "thanh cong";

    }
    public function getAllimageContent()
    {

    
        $products = product::select('id')->OrderBy('id', 'asc')->get();

        foreach ($products as $key => $value) {

            $product = product::find($value->id);
            if($product->id<4176){

                if(!empty($product->Detail)){

                    preg_match_all('/<img.*?src=[\'"](.*?)[\'"].*?>/i', $product->Detail, $matches);
                
                    if(isset($matches[1])){
                        foreach ($matches[1] as $key => $images) {

                             DB::table('imagecrawl')->insert(['image'=>$images]);
        
                            // $pos = strpos($images, "/media/lib/");

                            // if($pos != false){
                               
                            //     $img  = str_replace('https://dienmaynguoiviet.vn/media', '/media', $images);
                            //     file_put_contents(public_path().$img, file_get_contents(trim($images)));

                            //     DB::table('imagerun')->insert(['image'=>$images]);
                            // }

                            // $file_headers = @get_headers($images);

                            // if(is_array($file_headers)){

                            //     if(array_key_exists(0, $file_headers) && $file_headers[0] == 'HTTP/1.1 200 OK'){
                            //         $img  = str_replace('https://dienmaynguoiviet.vn/media', '/media', $images);

                            //         file_put_contents(public_path().$img, file_get_contents($images));
                            //     }
                               

                            // }

                           
                        }

                    }    

                }
            }

            
        } 

        echo "thanh cong";   

    }
    public function checkContennull($value='')
    {
         $products = product::select('id')->OrderBy('id', 'asc')->get();

        foreach ($products as $key => $value) {
            $product = product::find($value->id);

            if(empty($product->Detail)){

                $url = 'https://dienmaynguoiviet.vn/'.trim($product->Link).'/';

                $html = file_get_html(trim($url));
                $content  = html_entity_decode($html->find('.emty-content',0));

                if(!empty($content)){
                    $product->Detail = $content;

                    $product->save();
                }
                else{
                    print_r($url.'<br>');
                }
                
            }
            
        }  
        echo "thanh cong";  
    }
    public function removedot()
    {
        
        $products = product::select('id')->OrderBy('id', 'asc')->get();

        foreach ($products as $key => $value) {
            $product = product::find($value->id);
            $product->Detail = str_replace('..https://dienmaynguoiviet.vn/media/', 'https://dienmaynguoiviet.vn/media/', $product->Detail);
            $product->save();
        }    
        echo "thanh cong";

    }
    public function crawlProductEdit()
    {

        $products = product::select('id')->OrderBy('id', 'asc')->get();
        foreach ($products as $key => $value) {

            $product = product::find($value->id);

            if(!empty($product->Link)){
                 $url = 'https://dienmaynguoiviet.vn/'.$product->Link.'/';

                $html = file_get_html(trim($url));
               
                $content  = html_entity_decode($html->find('.emty-content .Description',0));

                $contents = str_replace('https://dienmaynguoiviet.vn/media', '/media', $content);

                $contents = str_replace('/media', 'https://dienmaynguoiviet.vn/media', $content);

                $product->Detail = $contents;

                $product->save();

            }
            else{
                print_r($value->id.' ');
            }

            if($value->id>4175){
                break;
            }    
             
        } 
   
        echo "thanh cong";
           
    }
    public function removeSpaceProductsku()
    {
        $product = product::select('ProductSku', 'id')->get();
        foreach ($product as $key => $value) {
            $products = product::find($value->id);
            $products->ProductSku =  trim($products->ProductSku);

            $products->save();
            
        }
        echo "thanh cong";

    }
   
    public function checkbtu()
    {
        $name = "Điều hòa Mitsubishi MSZ-HL25VA 2 chiều 9000BTU Inverter Gas R410A";

        $strpos = strpos($name, 'BTU');

        print_r($name[$strpos]);
    }


    public function checkss()
    {
            $name = "Điều hòa Mitsubishi MSZ-HL25VA 2 chiều 9000BTU Inverter Gas R410A";

            $strpos = strpos($name, 'BTU');

            print_r($name[$strpos]);


    }

    public function checkPD()
    {
       
        $product = groupProduct::find(4)->product_id;

        $product = json_decode($product);

        $arFalse = [];

        foreach ($product as $key => $value) {

            $name_product = product::find($value)->Name;

            $pos = strpos(strtolower($name_product), 'inverter');

            if ($pos == true) {

                if(strpos(strtolower($name_product), 'invert')==true) {

                    array_push($arFalse, $value);

                }
                
            }
           
        }

        $group = groupProduct::find(88);

        $group->product_id = json_encode($arFalse);

        $group->save();

        echo "thanh cong";

    }
    public function getFileAr()
    {
        $ar_image = $this->getImageFalse();
        $ar_false = [];
        foreach ($ar_image as $key => $value) {

            $images = 'https://dienmaynguoiviet.vn/media/news/'.basename($value);
            $file_headers = @get_headers($images);

            if($file_headers[0] == 'HTTP/1.1 200 OK'){
                $images = 'https://dienmaynguoiviet.vn/media/news/'.basename($value);
            }  
            else{

                $images = 'https://dienmaynguoiviet.vn/media/lib/'.basename($value);
                $file_headers = @get_headers($images);
                if($file_headers[0]== 'HTTP/1.1 200 OK'){
                    $images = $images;
                }
                else{
                    $images = 'https://dienmaynguoiviet.vn/media/product/'.basename($value);
                    $file_headers = @get_headers($images);
                    if($file_headers[0]== 'HTTP/1.1 200 OK'){
                        $images = $images;
                    }
                    else{
                        $images = '';
                        array_push($ar_false, $value);
                    }
                }
                
            } 
            if(!empty($images)) {
                $img  = '/images/posts/crawl/'.basename($images);
                file_put_contents(public_path().$img, file_get_contents($images));    
            }
            

           
        }
        print_r($ar_false);
        echo "thanh cong";
    
    }
    public function getImageFalse()
    {
        $post = post::select('content', 'id', 'category')->get();
        $ar_image_false = [];

        foreach($post as $val){
            if($val->category!=5){
                preg_match_all('/<img.*?src=[\'"](.*?)[\'"].*?>/i', $val->content, $matches);
                if(isset($matches[1])){
                    foreach($matches[1] as $value){
                        if($value!=null){
                           
                                $value = 'http://localhost/pj5/'.$value;

                                $file_headers = @get_headers($value);

                                try {

                                   if(is_array($file_headers) && $file_headers[0] != 'HTTP/1.1 200 OK'){

                                        $images = 'https://dienmaynguoiviet.vn/media/product/'.basename($value);

                                        array_push($ar_image_false, $value);
                                        
                                   } 
                                    
                                } catch (Exception $e) {
                                    echo "Message: " . $e->getMessage();
                                }
                           
                           
                        }        
                    } 
                        
                }    
            }    

        }
        return(array_unique($ar_image_false));
        
    }

     public function getImageAll()
    {
       
        $post = post::select('content', 'id', 'category')->get();

        foreach($post as $val){

            if($val->category!=5){
                preg_match_all('/<img.*?src=[\'"](.*?)[\'"].*?>/i', $val->content, $matches);
            
                if(isset($matches[1])){

                    foreach($matches[1] as $value){

                        if($value !=null){

                            $images = 'https://dienmaynguoiviet.vn/media/news/'.basename($value);

                            $file_headers = @get_headers($images);

                            if($file_headers[0] == 'HTTP/1.1 200 OK'){

                                $images = 'https://dienmaynguoiviet.vn/media/news/'.basename($value);

                            }  
                            else{
                                $images = 'https://dienmaynguoiviet.vn/media/lib/'.basename($value);
                            } 
                            $img  = '/images/posts/crawl/'.basename($images);

                            file_put_contents(public_path().$img, file_get_contents($images));  

                           
                        }    
                    }
                }
            }

        
        }
        echo "thanh cong";
       
    }
    public function crawlImageAgain()
    {
        $post = post::select('link', 'id')->orderBy('date_post','desc')->take(120)->get();
        $i =0;
        foreach($post as $val){
            $i++;
            if($i>81 && $i<91){
                $links = 'https://dienmaynguoiviet.vn/'.$val->link.'/';
                $html = file_get_html(trim($links));
                $imagess = strip_tags($html->find('#image-page', 0));
                $images = 'https://dienmaynguoiviet.vn'.$imagess;

                $img  = '/uploads/posts/crawl/'.basename($images);
                file_put_contents(public_path().$img, file_get_contents($images));
                $linkss = post::find($val->id);
                $linkss->image = $img;

                $linkss->save();
            }

        }
        echo "thanh cong";

    }
    public function getDatePost()
    {
        $post_link = post::select('link', 'category', 'id')->get();
        foreach($post_link as $value){
            if($value->category!=5){
                $link = 'https://dienmaynguoiviet.vn/'.$value->link.'/';

                $html = file_get_html(trim($link));
                $time = strip_tags($html->find('.detail-head time', 0));
                $post = post::find($value->id);
                $post->date_post = Carbon::parse($time);
                $post->save();

            }
            

        }
        echo "thanh cong";

    }


    public function filterTech()
    {
        $maygiat = groupProduct::find(2)->product_id;
        $info = product::select('Specifications', 'id')->whereIn('id', json_decode($maygiat))->get();
       
        $longdung = [];
        foreach($info as $val){
            $pos = strpos(strtolower($val->Specifications), 'lồng đứng');
            if($pos === false){
                array_push($longdung, $val->id);
            }

        }

        $filter = filter::find(17);

         if(!empty($filter->value)){

            $ar_kqs = json_decode($filter->value, true);

        }
        else{
            $ar_kqs = [];
        }
        $ar_kqs[30] =  $longdung;

        $filter->value = json_encode($ar_kqs);

        $filter->save();
        echo "thanh cong";



    }

    public function filterPrice()
    {
        $maygiat = groupProduct::find(2)->product_id;

        // $price   = product::select('id')->whereIn('id', json_decode($maygiat))->whereBetween('Price', [12000000, 15000000])->get()->pluck('id')->toArray();
        $price   = product::select('id')->whereIn('id', json_decode($maygiat))->where('Price', '>', 15000000)->get()->pluck('id')->toArray();

        $filter = filter::find(16);

        if(!empty($filter->value)){

            $ar_kqs = json_decode($filter->value, true);

        }
        else{
            $ar_kqs = [];
        }
        $ar_kqs[27] =  $price;

        $filter->value = json_encode($ar_kqs);

        $filter->save();
        echo "thanh cong";




    }
    public function addFilterProduct(Request $request)
    {

        $link =  $request->link;
        $property   = $request->property;

        $ar   = $request->ar;


         
        $search = $link;

        $query  = product::where('Link', 'like','%'.$search.'%')->get();

        $ar_kq = [];

        foreach ($query as $key => $value) {
          
            array_push($ar_kq, $value->id);
        }

        $filter = filter::find($property);

         
        if(!empty($filter->value)){

            $ar_kqs = json_decode($filter->value, true);

        }
        else{
            $ar_kqs = [];
        }
        $ar_kqs[$ar] = $ar_kq;


        $filter->value = json_encode($ar_kqs);

        $filter->save();
        echo "thanh cong";

    }

    public function getMetaToFails()
    {
        $link = metaSeo::where('meta_content', 'Đường link cần xem không có trên website hoặc đã bị xóa')->get();

        foreach ($link as $key => $value) {


            $product = product::where('Meta_id', $value->id)->first();


            if(!empty($product)){


                $url = $product->Link;

                $urls = 'https://dienmaynguoiviet.vn/'.$url.'/';

        
                $html = file_get_html(trim($urls));

                $keyword = htmlspecialchars($html->find("meta[name=keywords]",0)->getAttribute('content'));
                $content = $html->find("meta[name=description]",0) ->getAttribute('content');
                $title   = $html-> find("title",0)-> plaintext;
            
                $meta   =  metaSeo::find($value->id);

                $meta->meta_title =$title; 
                $meta->meta_content =$content; 
                $meta->meta_key_words = strip_tags($keyword); 
                $meta->meta_og_title =$title; 
                $meta->meta_og_content =$content; 

                $meta->save();

            }


        }   
        echo "thanh cong";

       
    }


    public function addMEtaserForG(){
        for($i= 1; $i<2; $i++){

            $meta = new metaSeo();

            $meta->meta_content = '';

            $meta->meta_title = '';
            $meta->meta_key_words = '';
            $meta->meta_og_title = '';
            $meta->meta_og_content = '';

            $meta->save();

        }
        echo "thanh cong";

    }

    public function checklinkss()
    {
      
        $post = image::select('image','product_id')->get();

        foreach ($post as $key => $images) {
            $file_headers = @get_headers('http://localhost/'.$images->images);

            if($file_headers[0] != 'HTTP/1.1 200 OK'){

                $product = product::find($images->product_id);

                $products = $product->Link;

                print_r($products);

            }
        }   

    }

    public function addMetaSeoForGroup()
    {
        $groupProduct = groupProduct::select('id')->get();

        $i = 5688;

        foreach ($groupProduct as $key => $value) {

           
            $group = groupProduct::find($value->id);
            $group->Meta_id = $i;
            $group->save();
            $i++;


        }

        echo "thanh cong";
    }

    public function fill_name(){

        $ar_info[1] ='tivi';
        $ar_info[2] ='may-giat';
        $ar_info[3] ='tu-lanh';
        $ar_info[4] ='dieu-hoa';
        $ar_info[6] ='tu-dong';
        $ar_info[7] ='tu-mat';
       
        $ar_info[9] ='may-loc-nuoc';

        $ar_info[71] ='may-say';

    
        foreach ($ar_info as $key => $value) {


            $productname = product::select('id')->whereBetween('id', [3995, 4171])->where('Link', 'like', '%'.$value.'%')->get()->pluck('id')->toArray();

            $groupProduct = groupProduct::find($key);

            $groupProduct->product_id = json_encode($productname);

            $groupProduct->save();

        }
      

        echo "thanh cong";


       
       
    
        foreach ($ar_info as $key => $value) {


            $productname = product::select('id')->where('Link', 'like', '%'.$value.'%')->get()->pluck('id')->toArray();

            $groupProduct = groupProduct::find($key);

            $groupProduct->product_id = json_encode($productname);

            $groupProduct->save();

        }
      

        echo "thanh cong";
        
    }


   


    public function crawl()
    {
        $dif = $this->cralwss();

        if(isset($dif)){
            foreach ($dif as $url) {
                
                    $html = file_get_html(trim($url));
                    $title = strip_tags($html->find('.emty-title h1', 0));
                    
                    $specialDetail = html_entity_decode($html->find('.special-detail', 0));
                    $content  = html_entity_decode($html->find('.emty-content .Description',0));

                   

                    preg_match_all('/<img.*?src=[\'"](.*?)[\'"].*?>/i', $content, $matches);

                    $arr_change = [];

                    $time = time();

                    $regexp = '/^[a-zA-Z0-9][a-zA-Z0-9\-\_]+[a-zA-Z0-9]$/';

                    if(isset($matches[1])){
                        foreach($matches[1] as $value){
                           
                            $value = 'http://dienmaynguoiviet.com/'.str_replace('..', '', $value);

                            $arr_image = explode('/', $value);

                            if($arr_image[0] != env('APP_URL')){

                                $file_headers = @get_headers($value);


                                if($file_headers[0] == 'HTTP/1.1 200 OK') 
                                {

                                    $infoFile = pathinfo($value, PATHINFO_EXTENSION);

                                   if(!empty($infoFile)){

                                        if($infoFile=='png'||$infoFile=='jpg'||$infoFile=='web'){

                                            $img = '/images/product/crawl/'.basename($value);

                                            file_put_contents(public_path().$img, file_get_contents($value));

                                         
                                            array_push($arr_change, 'images/product/crawl/'.basename($value));
                                        }   
                                    }

                                    
                                }
                               
                            }
                            
                        }
                    }



                    $content = str_replace($matches[1], $arr_change, $content);

                    $price = strip_tags($html->find(".p-price", 0));

                    $info  = html_entity_decode($html->find('.emty-info table', 0));
                    // $arElements = $html->find( "meta[name=keywords]" );
                    $price = trim(str_replace('Liên hệ', '0', $price));
                    $price =  trim(str_replace(["Giá:","VNĐ",".", "Giá khuyến mại:"],"",$price));
                    $images =  html_entity_decode($html->find('#owl1 img',0));
                    
                    if(!empty($images) ){
                        $image = $html->find('#owl1 img',0)->src;
                        if(!empty($image)){

                            $urlImage = 'http://dienmaynguoiviet.com/'.$image;

                            $contents = file_get_contents($urlImage);
                            $name = basename($urlImage);
                            
                            $name = '/uploads/product/crawl/'.time().'_'.$name;

                            Storage::disk('public')->put($name, $contents);

                            $image = $name;

                        }
                        else{
                            $image = '/images/product/noimage.png';
                        }

                        $model = strip_tags($html->find('#model', 0));

                        $qualtily = -1;

                        $maker = 12;

                        $meta_id = 0;

                        $group_id = 2;

                        $active = 0;

                        $link =  str_replace('/', '', trim(str_replace('http://dienmaynguoiviet.com/', '', $url)));

                        $inputs = ["Link"=>$link, "Price"=>$price, "Name"=>$title, "ProductSku"=>$model, "Image"=>$image, "Quantily"=>$qualtily, "Maker"=>$maker, "Meta_id"=>$meta_id,"Group_id"=>$group_id, "active"=>0, "Specifications"=>$info, "Salient_Features"=>$specialDetail, "Detail"=>$content];

                        product::Create($inputs);
                        DB::table('product_crawl')->insert(['link'=>$url]);
                    }
                    else{
                        print_r($url);
                    } 
               
               
            }    
        }

        echo "thanh cong";

    } 


  

    public function crawl1()
    {
        $post = Post::orderBy('updated_at', 'desc')->take(40)->get();

        return response()->view('sitemap.index', [
            'post' => $post,
        ])->header('Content-Type', 'text/xml');
    }



   

    public function getLink()
    {

        $codes =  $this->crawls();

        $strings = explode('https', $codes);

        $blog = [];

        foreach ($strings as $key => $value) {

            $link = 'https'.$value;
            
            if($key !=0){

                $html = file_get_html(trim($link));

                if(strip_tags($html->find('#page-view', 0))=='blog'){

                    array_push($blog, $link);

                }
                
            }
        }

        return($blog);

    }

    public function getLinks()
    {
        

        for($i=10; $i<1525; $i++){
            $product = post::find($i);

            $post->link = convertSlug($product->title);

            $post->save();

          
        }

        echo "thanh cong";

    }


    

    public function getMetaProducts()
    {
        for($i=4204; $i<4573; $i++){

            $link = product::find($i);


            if(isset($link)){


                $url = $link->Link;

                $urls = 'http://dienmaynguoiviet.com/'.$url.'/';

        
                $html = file_get_html(trim($urls));

                $keyword = htmlspecialchars($html->find("meta[name=keywords]",0)->getAttribute('content'));
                $content = $html->find("meta[name=description]",0) ->getAttribute('content');
                $title   = $html-> find("title",0)-> plaintext;
            
                $meta   = new metaSeo();

                $meta->meta_title =$title; 
                $meta->meta_content =$content; 
                $meta->meta_key_words = strip_tags($keyword); 
                $meta->meta_og_title =$title; 
                $meta->meta_og_content =$content; 

                $meta->save();

                $link->Meta_id = $meta['id'];

                $link->save();


            }


        }   
        echo "thanh cong";

    }

   

     public function post()
     {

        for ($i = 3; $i<1514; $i++) {

            $link = post::find($i);

            $links = $link->link;

           

            $html = file_get_html('https://dienmaynguoiviet.vn/'.trim($links).'/');
           
            $content =  str_replace(html_entity_decode($html->find('.emtry_content h2', 0)), '', html_entity_decode($html->find('.emtry_content', 0))) ; 

            // lay anh trong bai viet

             preg_match_all('/<img.*?src=[\'"](.*?)[\'"].*?>/i', $content, $matches);

            $arr_change = [];

            $time = time();

            $regexp = '/^[a-zA-Z0-9][a-zA-Z0-9\-\_]+[a-zA-Z0-9]$/';

            if(isset($matches[1])){
                foreach($matches[1] as $value){
                   
                    $value = 'https://dienmaynguoiviet.vn/'.str_replace('../','', $value);

                    $arr_image = explode('/', $value);

                    if($arr_image[0] != env('APP_URL')){

                        $file_headers = @get_headers($value);

                        if($file_headers[0] == 'HTTP/1.1 200 OK') 
                        {

                            $infoFile = pathinfo($value);

                           if(!empty($infoFile['extension'])){

                                if($infoFile['extension']=='png'||$infoFile['extension']=='jpg'||$infoFile['extension']=='web'){

                                    $img = '/images/posts/crawl/'.basename($value);

                                    file_put_contents(public_path().$img, file_get_contents($value));

                                 
                                    array_push($arr_change, 'images/posts/crawl/'.basename($value));
                                }   
                            }

                            
                        }
                       
                    }
                    
                }
            }


           
        }    
     

        echo "thanh cong";   
    }

    
    function filter(){

        for ($i=243; $i < 2845; $i++) { 

            $product = product::find($i);

            if(!empty($product->Link) && strpos(trim($product->Link), 'tivi')){


                $groupProduct = groupProduct::find(1);

                if($groupProduct->product_id==''){

                    $datas_ar = [];

                    $groupProduct->product_id=json_encode($datas_ar);
                }
                else{
                    $groupProduct->product_id = $groupProduct->product_id;
                }

                $data_product = json_decode($groupProduct->product_id);



                array_push($data_product, $i);

                array_unique($data_product);

                $data_product = json_encode($data_product);

                $groupProduct->product_id = $data_product;


                $groupProduct->save();

            }
           

            
        }
        echo "thanh cong";
    }

    
    public function getImagePost()
    {

        for($i=4172; $i<4174; $i++){

            $posts = product::find($i);

            if(isset($posts)){

                $link = 'https://dienmaynguoiviet.vn/'.$posts->Link;

                

                $html = file_get_html(trim($link));

                $image = $html->find('.img-detail img');


                

                for($ids = 0; $ids<count($image); $ids++){

                    $images = $html->find('.img-detail img', $ids)->src;

                   
                    $images = 'https://dienmaynguoiviet.vn/'. $images;

                   

                    $file_headers = @get_headers('https://dienmaynguoiviet.vn/'.$images);



                    if($file_headers[0] == 'HTTP/1.1 200 OK'){

                        $img  = '/uploads/product/crawl/child/'.basename($images);


                        file_put_contents(public_path().$img, file_get_contents($images));




                        $input['image'] = $img;

                        $input['link'] = $img;

                        $input['product_id'] = $i;

                        $input['order'] = 0;


                        $images_model = new image();

                        $images_model = $images_model->create($input);

                      

                    }
                }
            }
            else{
                print_r($posts);
            }
        }
        echo "thanh cong";

    }

    public function selectedCode()
    {


       
            $pass =14;

       

            $code = filter::select('value')->where('id', $pass)->get();


            $codes = json_decode($code[0]->value);

            $data = [];


            
            foreach ( $codes  as $key => $values) {

                $numbers = array_filter($values, function($var){
                    return $var>243;
                    
                });

                $ProductSku = array_map(function($n){

                    return(products1::find($n)->ProductSku);

                }, $numbers);

                if(!empty($ProductSku)){
                    $data[$key] =$ProductSku;

                }
            
            }

            dd($data);

            $datasss = [];

            foreach($data as $key => $datas){

              

                $ProductSku = array_map(function($n){

                    $datass = product::where('ProductSku', $n)->first();

                    return($datass->id);

                }, $datas);


                $datasss[$key] = array_values($ProductSku);

             }

             $finter = filter::find($pass);

             $result = json_encode($datasss);

             $finter->value =  $result;

             $finter->save();
          
        echo "thanh cong";


    
    }

   



    public function removelink()
    {
       
            // $arr= product::select('id', 'ProductSku')->get()->pluck('ProductSku')->toArray();

            // $unique = array_unique($arr); 
            // $dupes = array_diff_key( $arr, $unique ); 

            // print_r($dupes);

            
        // echo "thành công";

        $arr = product::select('id', 'ProductSku')->get()->pluck('ProductSku')->toArray();

        $unique = array_unique($arr); 
        $dupes = array_diff_key($arr, $unique); 

        $dupess= array_unique($dupes);

        
     

        foreach($dupess as  $dupesss){

          
            $dataId = product::Where('ProductSku', $dupesss)->first();

            $product = $dataId::find($dataId->id)->delete();

        }

        echo "thanh cong";

    }
   
}
