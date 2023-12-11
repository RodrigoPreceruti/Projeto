<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return $products;
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());

        return $product;
    }

    public function show(Product $product)
    {
        if (!$product) {
            return response()->json([
                'error' => 'Not Found'
            ], Response::HTTP_NOT_FOUND);
        }

        return $product;
    }

    public function update(Request $request, Product $product)
    {
        if (!$product) {
            return response()->json([
                'error' => 'Not Found'
            ], Response::HTTP_NOT_FOUND);
        }

        $product->update($request->all());

        return $product;
    }

    public function destroy(Product $product)
    {
        if (!$product) {
            return response()->json([
                'error' => 'Not Found'
            ], Response::HTTP_NOT_FOUND);
        }

        $product->delete();

        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
