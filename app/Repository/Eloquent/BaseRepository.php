<?php

namespace App\Repository\Eloquent;

use App\Repository\Interfaces\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements RepositoryInterface
{

    public function __construct(
        protected Model $model
    )
    {
    }

    public function find(string $id)
    {
        return $this->model->find($id);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update(string $id, array $data)
    {
        $model = $this->find($id);

        return $model->update($data);
    }

    public function delete(string $id)
    {
        $model = $this->find($id);

        return $model->delete();
    }
}
