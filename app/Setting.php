<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';

    protected $fillable = [
        'data'
    ];

    public function getDataAttribute($val)
    {
        return json_decode($val, true);
    }

}
