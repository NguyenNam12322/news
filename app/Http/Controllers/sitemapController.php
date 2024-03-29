<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\post;

use App\Models\product;

use DB;

class sitemapController extends Controller
{
   public function index()
   {
      return view('sitemap.index');

   }

   public function category()
   {
      
      $category = DB::table('categories')->get();

      return response()->view('sitemap.child', [
            'category' => $category,
      ])->header('Content-Type', 'text/xml');
   }


   public function sitemapChildProduct()
   {
    $product = product::take(160)->OrderBy('id', 'desc')->get();

       return response()->view('sitemap.child', [
            'product' => $product,
        ])->header('Content-Type', 'text/xml');
   }
   public function sitemapChildBlog()
   {
    $blog = post::take(160)->OrderBy('id', 'desc')->get();

    
       return response()->view('sitemap.childs_blog', [
            'blog' => $blog
        ])->header('Content-Type', 'text/xml');
   }
}

