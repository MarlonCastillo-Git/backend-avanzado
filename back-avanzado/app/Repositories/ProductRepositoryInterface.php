<?php

namespace App\Repositories;

use App\Models\Product;

interface ProductRepositoryInterface
{
    public function all();
    public function find(int $id): Product;
    public function create(array $data): Product;
    //public function update(array $data): Product;
    //public function delete(int $id): Product;
}