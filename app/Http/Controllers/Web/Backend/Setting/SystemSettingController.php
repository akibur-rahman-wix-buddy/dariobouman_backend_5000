<?php
//
namespace App\Http\Controllers\Web\Backend\Setting;

use App\Http\Controllers\Controller;
use App\Models\SystemSetting;
use App\Models\User;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;


class SystemSettingController extends Controller
{

    // public function index()
    // {
    //     $setting = SystemSetting::latest('id')->first();
    //     return view('backend.layout.system_setting.index', compact('setting'));
    // }

    public function profileindex()
    {
        return view('backend.layout.system_setting.profile_setting');
    }

    public function stripeindex()
    {
        return view('backend.layout.system_setting.stripe');
    }
    /**
     * Update the system settings.
     *
     * @param  Request  $request
     * @return RedirectResponse
     */

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'system_name' => 'nullable',
            'description' => 'nullable',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',  // Adding image validation
            'favicon' => 'nullable|mimes:jpeg,png,jpg,gif,svg,ico|max:2048',  // Adding image validation
            'copyright' => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        try {
            $setting = SystemSetting::firstOrNew();
            $setting->system_name = $request->system_name;
            $setting->description = $request->description;
            $setting->copyright = $request->copyright;

            if ($request->hasFile('logo')) {
                if (!empty($setting->logo)) {
                    @unlink(public_path('/') . $setting->logo);
                }
                $logo = uploadImage($request->file('logo'), 'setting/logo');
                $setting->logo = $logo;
            }

            if ($request->hasFile('favicon')) {
                if (!empty($setting->favicon)) {
                    @unlink(public_path('/') . $setting->favicon);
                }
                $favicon = uploadImage($request->file('favicon'), 'setting/favicon');
                $setting->favicon = $favicon;
            }

            $setting->save();
            return back()->with('t-success', 'Updated successfully');
        } catch (Exception $e) {
            return back()->with('t-error', 'Failed to update');
        }
    }



    public function stripestore(Request $request)
    {
        $request->validate([
            'myfatoorah_key'    => 'required|string',
        ]);
        try {
            $envContent = File::get(base_path('.env'));
            $lineBreak = "\n";
            $envContent = preg_replace([
                '/MYFATOORAH_API_KEY=(.*)\s/',
            ], [
                'MYFATOORAH_API_KEY=' . $request->myfatoorah_key . $lineBreak,
            ], $envContent);

            if ($envContent !== null) {
                File::put(base_path('.env'), $envContent);
            }
            return redirect()->back()->with('t-success', 'My Fatoorah Setting Update successfully.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('t-error', 'My Fatoorah Setting Update Failed');
        }
        return redirect()->back();
    }
}
