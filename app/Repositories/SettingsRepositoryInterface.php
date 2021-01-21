<?php

namespace App\Repositories;

interface SettingsRepositoryInterface {


    public function updateSettings(array $data);
    public function findFirst();

}
