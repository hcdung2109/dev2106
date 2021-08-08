<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    // danh mục sản phẩm
    public function category()
    {
        return view('frontend.category');
    }

    // chi tiết sản phẩm
    public function product()
    {
        return view('frontend.product');
    }

    // Trang liên hệ
    public function contact()
    {
        return view('frontend.contact');
    }

    // trang đặt hàng
    public function order()
    {
        return view('frontend.order');
    }
}
