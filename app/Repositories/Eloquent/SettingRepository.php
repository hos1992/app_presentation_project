<?php

namespace App\Repositories\Eloquent;

use App\Repositories\SettingsRepositoryInterface;
use App\Setting;

class SettingRepository extends BaseRepository implements SettingsRepositoryInterface
{

    public function __construct()
    {
        $this->model = new Setting();
    }

    public function updateSettings(array $data)
    {
        $settings = $this->model->first();

        $data = json_encode($data['data']);

        if (!$settings) {
            return $this->model->create([
                'data' => $data
            ]);
        } else {
            return $settings->update([
                'data' => $data
            ]);
        }
    }

    public function findFirst()
    {
        return $this->model->first();
    }


}
