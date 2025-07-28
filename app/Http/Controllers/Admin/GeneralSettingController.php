<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BusinessSetting;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{

    public function index()
    {
        return view('admin.general-setting.index');
    }
    public function store(Request $request)
    {
        $data = $request->except('_token');
        foreach ($data as $key => $value) {
            if ($request->hasFile($key)) {
                $value = Storage::url($request->file($key)->store('public/uploads'));
            }
            BusinessSetting::updateOrCreate(['key' => $key], ['value' => $value]);
        }
        return redirect()->back()->with('success', 'Settings updated successfully.');
    }

    public function create()
    {
        return 'hi';
    }
}
