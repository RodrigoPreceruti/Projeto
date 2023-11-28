<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repository\Interfaces\Eloquent\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct(
        protected ProductRepositoryInterface $repository
    )
    {
    }

    public function index()
    {
        $products = $this->repository->all();

        return view('products.index', [
            'products' => $products
        ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $this->repository->create($request->all());

        return redirect()->route('products.index');
    }

    public function edit(Product $product)
    {
        return view('products.edit', [
            'product' => $product
        ]);
    }

    public function update(Request $request, string $id)
    {
        $this->repository->update($id, $request->all());

        return redirect()->route('products.index');
    }

    public function destroy(string $id)
    {
        $this->repository->delete($id);

        return redirect()->route('products.index');
    }
}
