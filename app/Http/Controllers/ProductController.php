<?php

namespace App\Http\Controllers;

use App\Enums\ProductStatusEnum;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $input = [
            'name' => 'Gold',
            'body' => 'This is a Gold',
            'status' => ProductStatusEnum::Active
        ];
        $product = Product::create($input);

        dd($product->status);
    }
}
