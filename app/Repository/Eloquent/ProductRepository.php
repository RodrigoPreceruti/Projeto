<?php

namespace App\Repository\Eloquent;

use App\Models\Product;
use App\Repository\Interfaces\Eloquent\ProductRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    public function __construct()
    {
        parent::__construct(new Product());
    }
}
