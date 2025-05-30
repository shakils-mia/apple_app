<?php

namespace App\Http\Controllers;
use App\Helper\ResponseHelper;
use App\Models\Brand;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function ByBrandPage()
    {
        return view ('pages.product-by-brand');
    }
    public function BrandList():JsonResponse
    {
        $date=Brand::all();
        return ResponseHelper::Out('success', $date,200);
    }
}
