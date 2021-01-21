<?php

namespace App\Repositories\Eloquent;

use App\Repositories\BaseRepositoryInterface;

class BaseRepository implements BaseRepositoryInterface
{

    protected $model;

    public function create($data)
    {
        return $this->model->create($data);
    }


    public function update($id, $data)
    {
        return $this->model->where('id', $id)->update($data);
    }


    public function getOne($id)
    {
        return $this->model->find($id);
    }


    public function getAll()
    {
        return $this->model->get();
    }

    public function delete($id)
    {
        $this->model->delete();
    }




}
