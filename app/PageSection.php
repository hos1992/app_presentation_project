<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageSection extends Model
{
    protected $table = 'page_sections';

    public function getDataAttribute($val)
    {
        return json_decode($val, true);
    }

    public function attachments()
    {
        return $this->hasMany(PageSectionAttachment::class, 'section_id');
    }

    public function aboutUsImage()
    {
        return $this->hasOne(PageSectionAttachment::class, 'section_id');
    }

}
