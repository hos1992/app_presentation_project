<?php

namespace App\Repositories;

interface BaseRepositoryInterface {



    public function create(array $data);
    public function update($id, array $data);
    public function getOne($id);
    public function getAll();
    public function delete($id);


}
