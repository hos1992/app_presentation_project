<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\PageSectionRepositoryInterface;
use Illuminate\Http\Request;
//use App\Http\Requests\updateAboutUsRequest;
use App\Http\Requests\updateSectionRequest;

class SectionsController extends Controller
{

    private $pageSectionRepository;

    public function __construct(PageSectionRepositoryInterface $pageSectionRepository)
    {
        $this->pageSectionRepository = $pageSectionRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['sections'] = $this->pageSectionRepository->getOrWhere([
            ['define', '=', 'ABOUT']
        ], [
            ['define', '=', 'HOW_IT_WORKS'],
        ]);

        return view('admin.sections.index', $data);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['section'] = $this->pageSectionRepository->getOneWith($id, ['attachments']);
        return view('admin.sections.edit_' . $data['section']->define, $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(updateSectionRequest $request, $id)
    {
        $this->pageSectionRepository->updatePageSection($id, $request->only([
            'image',
            'title_ar',
            'title_en',
            'data',
        ]));

        return redirect()->action('Admin\SectionsController@index')->with('success', 'تم تحديث المحتوى بنجاح');
    }


}
