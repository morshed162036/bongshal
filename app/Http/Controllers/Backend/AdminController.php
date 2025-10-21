<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Setting;
use Illuminate\Support\Facades\File;
// Uncomment the following lines if you have these models
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            $validate = $request->validate([
                'email' => 'required|email|max:255',
                'password' => 'required',
            ]);

            if(Auth::guard('web')->attempt(['email'=>$data['email'],'password'=>$data['password'],'role'=>'admin'])){
                return redirect('dashboard');
                }
            elseif(Auth::guard('web')->attempt(['email'=>$data['email'],'password'=>$data['password'],'role'=>'vendor','is_active'=>'1'])){
                return redirect('dashboard');
                }
            else{
                return redirect()->back()->with('error','Invalid Email or Password');
            }
        }
        return view('backend.login');
    }
    public function logout(){
        Auth::guard('web')->logout();
        return redirect('login');
    }
    public function dashboard(){
        // $new = Order::where('status','Create')->get()->count();
        // $complete = Order::where('status','Complete')->get()->count();
        // $pending = Order::where('status','Pending')->get()->count();
        // $service = Service::get()->count();
        // $category = Blog_category::get()->count();
        // $blog = Blog_post::get()->count();
        // return view('server.dashboard')->with(compact('new','complete','pending','service','category','blog'));
        return view('backend.dashboard');
    }
//     public function edit()
// {
//     $setting = Setting::first(); // Assuming only one settings row
//     return view('settings.edit', compact('setting'));
// }

public function settingsUpdate(Request $request)
{
    $setting = Setting::first();

    if($request->isMethod('post')) {

        $data = $request->only([
            'site_name', 'email', 'phone', 'address',
            'meta_description', 'meta_keywords', 'meta_title', 'copyright',
            'social_facebook', 'google_analytics_code', 'facebook_pixel_code',
            'social_linkedin', 'social_twitter', 'social_instagram', 'social_youtube',
            'short_about', 'whatsapp'
        ]);

        // if($request->hasFile('logo')){

        //     //First Delete old logo
        //     if(file_exists(public_path($setting->logo))){
        //         unlink(public_path($setting->logo));
        //     }

        //     $file = $request->file('logo');
        //     $path = 'images';
        //     $file_name = 'logo'.'.'.$file->getClientOriginalExtension();
        //     $file->move(public_path($path),$file_name);     //Upload new logo
        //     $data['logo'] = $path.'/'.$file_name;

        // }
        //  if($request->hasFile('fevicon')){

        //     //First Delete old logo
        //     if(file_exists(public_path($setting->fevicon))){
        //         unlink(public_path($setting->fevicon));
        //     }

        //     $file = $request->file('fevicon');
        //     $path = 'images';
        //     $file_name = 'fevicon'.'.'.$file->getClientOriginalExtension();
        //     $file->move(public_path($path),$file_name);     //Upload new logo
        //     $data['fevicon'] = $path.'/'.$file_name;

        // }

        if($request->hasFile('logo')){
                $exists = 'images/setting/'.$setting->logo;
                if(File::exists($exists))
                {
                    File::delete($exists);
                }
                $image_temp = $request->file('logo');
                if($image_temp->isValid()){
                    //Get Image Extension
                    $extension = $image_temp->getClientOriginalExtension();
                    //Generate New Image Name
                    $imageName = time().'_logo.'.$extension;
                    $imagePath = 'images/setting';
                    $image_temp->move(public_path($imagePath),$imageName);
                    $setting->logo = $imageName;
                }
            }
            if($request->hasFile('favicon')){
                $exists = 'images/setting/'.$setting->favicon;
                if(File::exists($exists))
                {
                    File::delete($exists);
                }
                $image_temp = $request->file('favicon');
                if($image_temp->isValid()){
                    //Get Image Extension
                    $extension = $image_temp->getClientOriginalExtension();
                    //Generate New Image Name
                    $imageName = time().'_favicon.'.$extension;
                    $imagePath = 'images/setting';
                    $image_temp->move(public_path($imagePath),$imageName);
                    $setting->favicon = $imageName;
                }
            }
            if($request->hasFile('sos_banner')){
                $exists = 'images/setting/'.$setting->sos_banner;
                if(File::exists($exists))
                {
                    File::delete($exists);
                }
                $image_temp = $request->file('sos_banner');
                if($image_temp->isValid()){
                    //Get Image Extension
                    $extension = $image_temp->getClientOriginalExtension();
                    //Generate New Image Name
                    $imageName = time().'_sos_banner.'.$extension;
                    $imagePath = 'images/setting';
                    $image_temp->move(public_path($imagePath),$imageName);
                    $setting->sos_banner = $imageName;
                }
            }
        $setting->update($data);

        return redirect()->back()->with('success', 'Settings updated!');
    } else {
        return view('backend.settings')->with('company', $setting);
    }
}

}
