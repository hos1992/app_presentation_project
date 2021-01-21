<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'pages';

    protected $appends = [
        'home_page',
        'home_about_us',
        'home_how_it_works',
        'home_screenshots',
    ];

    /**
     * return selected page sections
     */
    public function sections()
    {
        return $this->hasMany(PageSection::class, 'page_id');
    }


    /**
     * return full home page
     */
    public function getHomePageAttribute()
    {
        return $this->where('define', 'HOME')->with('sections.attachments')->first();
    }

    /**
     * return about us section in the home page
     */
    public function getHomeAboutUsAttribute()
    {

        if (!$this->home_page) {
            return null;
        }
        return $this->hasOne(PageSection::class, 'page_id')->where([
            ['page_id', '=', $this->home_page->id],
            ['define', '=', 'ABOUT']
        ])->with('attachments')->first();
    }

    /**
     * return how it works section in the home page
     */
    public function getHomeHowItWorksAttribute()
    {

        if (!$this->home_page) {
            return null;
        }
        return $this->hasOne(PageSection::class, 'page_id')->where([
            ['page_id', '=', $this->home_page->id],
            ['define', '=', 'HOW_IT_WORKS']
        ])->with('attachments')->first();
    }


    /**
     * return screenshots section in the home page
     */
    public function getHomeScreenshotsAttribute()
    {

        if (!$this->home_page) {
            return null;
        }
        return $this->hasOne(PageSection::class, 'page_id')->where([
            ['page_id', '=', $this->home_page->id],
            ['define', '=', 'SCREENSHOTS']
        ])->with('attachments')->first();
    }


}
