<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageSectionAttachment extends Model
{
    protected $table = 'page_section_attachments';
    protected $fillable = [
      'section_id',
      'url',
      'type'
    ];
}
