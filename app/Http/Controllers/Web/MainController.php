<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Repositories\PageRepositoryInterface;
use Illuminate\Http\Request;

class MainController extends Controller
{

    private $pageRepository;

    public function __construct(PageRepositoryInterface $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    public function home()
    {
        $page = $this->pageRepository->getBYDefine('HOME');
        $data['about_us'] = $page->home_about_us;
        $data['how_it_works'] = $page->home_how_it_works;
        return view('user.home', $data);
    }

    public function setLocale($locale){
        session(['locale' => $locale]);
        return redirect()->back();
    }
}
