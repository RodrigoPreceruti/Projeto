<?php

namespace App\Repository\Interfaces;

interface RepositoryInterface
{
    public function find(string $id);

    public function all();

    public function create(array $data);

    public function update(string $id, array $data);

    public function delete(string $id);
}
