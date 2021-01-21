<?php

namespace App\Repositories\Eloquent;

use App\Page;
use App\Repositories\PageRepositoryInterface;

class PageRepository extends BaseRepository implements PageRepositoryInterface
{

    public function __construct()
    {
        $this->model = new Page();
    }

    public function getBYDefine(string $define)
    {
        return $this->model->where('define', $define)->with('sections.attachments')->first();
    }

}
