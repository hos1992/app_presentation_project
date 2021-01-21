<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\SettingsRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateSettingsRequest;

class SettingsController extends Controller
{

    private $settingRepository;


    public function __construct(SettingsRepositoryInterface $settingRepository)
    {
        $this->settingRepository = $settingRepository;
    }

    public function edit()
    {
        $data['settings'] = $this->settingRepository->findFirst();
        return view('admin.settings.edit', $data);
    }

    public function update(UpdateSettingsRequest $request)
    {
        $this->settingRepository->updateSettings($request->only(['data']));
        return redirect()->back()->with('success', 'تم تحديث المحتوى بنجاح');
    }
}
