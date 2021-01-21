<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\PageSection;

class updateSectionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (auth()->guard('admin')->check()) {
            return true;
        }

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $section = PageSection::find($this->route('website_section'));
        return $this->getRulesForSection($section->define);
    }


    /**
     * helper
     */
    private function getRulesForSection($section)
    {
        switch ($section) {
            case 'ABOUT' :
                return [
                    'image' => 'nullable|image',
                    'title_ar' => 'required|max:60',
                    'title_en' => 'required|max:60',
                    'data.content_ar' => 'required',
                    'data.content_en' => 'required',
                ];
                break;

            case 'HOW_IT_WORKS' :
                return [

                    'title_ar' => 'required|max:60',
                    'title_en' => 'required|max:60',
                    'data.excerpt_ar' => 'required|max:100',
                    'data.excerpt_en' => 'required|max:100',

                    'data.steps.1.title_ar' => 'required|max:60',
                    'data.steps.1.title_en' => 'required|max:60',
                    'data.steps.1.excerpt_ar' => 'required|max:100',
                    'data.steps.1.excerpt_en' => 'required|max:100',

                    'data.steps.2.title_ar' => 'required|max:60',
                    'data.steps.2.title_en' => 'required|max:60',
                    'data.steps.2.excerpt_ar' => 'required|max:100',
                    'data.steps.2.excerpt_en' => 'required|max:100',

                    'data.steps.3.title_ar' => 'required|max:60',
                    'data.steps.3.title_en' => 'required|max:60',
                    'data.steps.3.excerpt_ar' => 'required|max:100',
                    'data.steps.3.excerpt_en' => 'required|max:100',

                ];
                break;
        }
    }
}
