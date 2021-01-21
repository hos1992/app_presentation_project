<?php

namespace App\Repositories;

interface PageSectionRepositoryInterface {


    public function getOrWhere(array $where, array $orWhere);

    public function getOneWith($id, array $with);

    public function updatePageSection($id , array $data);

}
