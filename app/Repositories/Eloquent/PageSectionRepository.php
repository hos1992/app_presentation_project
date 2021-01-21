<?php

namespace App\Repositories\Eloquent;

use App\PageSection;
use App\PageSectionAttachment;
use App\Repositories\PageSectionRepositoryInterface;

class PageSectionRepository extends BaseRepository implements PageSectionRepositoryInterface
{


    private $attachmentModel;

    public function __construct()
    {
        $this->model = new PageSection();
        $this->attachmentModel = new PageSectionAttachment();
    }

    public function getOrWhere(array $where, array $orWhere)
    {

        return $this->model->where($where)->orWhere($orWhere)->get();

    }

    public function getOneWith($id, array $with)
    {
        return $this->model->where('id', $id)->with($with)->first();
    }

    public function updatePageSection($id, array $data)
    {

        // get the section
        $section = $this->model->find($id);

        // update according to section type
        switch ($section->define) {
            case 'ABOUT':
                $this->updateAboutSection($section, $data);
                break;
            case 'HOW_IT_WORKS' :
                $this->updateHowItWorksSection($section, $data);
                break;
        }

    }

    /**
     * helpers
     */
    private function updateAboutSection($section, $data)
    {

        if (isset($data['image'])) {
            // delete the old
            $this->deleteAttachment($section->aboutUsImage);

            //upload the new
            $this->uploadAttachment($section, $data['image']);
        }

        return $this->model->where('id', $section->id)->update($this->constructRequestData($data));


    }

    private function updateHowItWorksSection($section, $data)
    {
        return $this->model->where('id', $section->id)->update($this->constructRequestData($data));
    }

    private function deleteAttachment($attachment)
    {
        if(isset($attachment->url)){
            try{
                unlink(public_path($attachment->url));
            }catch (\Exception $e){
                // do nothing
            }
            $this->attachmentModel->where('id', $attachment->id)->delete();
        }

    }

    private function uploadAttachment($section, $image)
    {

        $imageName = time() . "_" . md5($image->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('/uploads/sections'), $imageName);
        $insertArr = [
            'section_id' => $section->id,
            'url' => '/uploads/sections/' . $imageName,
            'type' => 'IMAGE'
        ];
        $this->attachmentModel->create($insertArr);

    }

    private function constructRequestData($data)
    {
        return [
            'title_ar' => $data['title_ar'],
            'title_en' => $data['title_en'],
            'data' => json_encode($data['data'])
        ];
    }

}
