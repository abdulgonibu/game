<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use Idemonbd\Notify\Facades\Notify;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function index()
    {
        $data['settings'] = Setting::first();
        return view('admin.settings.index', $data);
    }

    public function setting_update(Request $request)
    {
        $request->validate([
            'website_title' => 'required',
            'slide_text' => 'required|min:10|max:255',
            'site_logo' => '',
            'deposit_minimum' => 'required|numeric',
            'withdrow_minimum' => 'required|numeric',
        ]);

        // $setting->update($request->except('_token', 'site_logo') + [
        //     'site_logo' => "Null",
        // ]);

        $setting = Setting::find(1);
        $setting->website_title = $request->website_title;
        $setting->slide_text = $request->slide_text;
        $setting->deposit_minimum = $request->deposit_minimum;
        $setting->withdrow_minimum = $request->withdrow_minimum;
        $setting->save();

        // if ($request->hasFile('image')) {
        //     if ($blog->image) {
        //         unlink('assets/img/news_img/' . $blog->image);
        //     }
        //     $uploaded_photo = $request->file('image');
        //     $photo_name = time() . $request->id . "." . $uploaded_photo->getClientOriginalExtension($uploaded_photo);
        //     $new_photo_location = 'assets/img/news_img/' . $photo_name;

        //     Image::make($uploaded_photo)->save($new_photo_location);
        //     $blog->update([
        //         'image' => $photo_name,
        //     ]);
        // }
        
        Notify::success('Website Settings Updated', 'Success');
        return redirect(route('setting.index'));
    }

}
