<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalogue;
use Illuminate\Support\Facades\File;
class CatalogueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Catalogue::get()->all();
        return view('backend.catalogue.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.catalogue.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $banner = new Catalogue();
        // $banner->first_text = $request->first_text;
        $banner->name = $request->title;
        $banner->status = "active";

        if($request->hasFile('image')){
            $image_temp = $request->file('image');
            if($image_temp->isValid()){
                //Get Image Extension
                $extension = $image_temp->getClientOriginalExtension();
                //Generate New Image Name
                $imageName = time().'.'.$extension;
                $imagePath = 'images/category';
                $image_temp->move(public_path($imagePath),$imageName);
                $banner->image = $imageName;
            }
        }


        $banner->save();
        return redirect(route('catalogue.index'))->with('success','New Catalogue Save Successfully!');
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
        $banner = Catalogue::where('id',$id)->get()->first();
        return view('backend.catalogue.edit')->with(compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $banner = Catalogue::findorFail($id);
        $banner->name = $request->title;

        if($request->hasFile('image')){
            $exists = 'images/category/'.$banner->image;
            if(File::exists($exists))
            {
                File::delete($exists);
            }
            $image_temp = $request->file('image');
            if($image_temp->isValid()){
                //Get Image Extension
                $extension = $image_temp->getClientOriginalExtension();
                //Generate New Image Name
                $imageName = time().'.'.$extension;
                $imagePath = 'images/category';
                $image_temp->move(public_path($imagePath),$imageName);
                $banner->image = $imageName;
            }
        }

        $banner->update();

        return redirect(route('catalogue.index'))->with('success','Catalogue Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $banner = Catalogue::findorFail($id);
        $exists = 'images/category/'.$banner->image;
        if(File::exists($exists))
        {
            File::delete($exists);
        }
        $banner->delete();
        $message  = "Catalogue Delete Successfully Done";
        return redirect(route('catalogue.index'))->with("success",$message);
    }
    public function updateCatalogueStatus(Request $request){
        if($request->ajax()){
            $data = $request->all();
            // echo "<pre>"; print_r($data);die;
            if ($data['status']== 'Active') {
                $status = 'inactive';
            }
            else{
                $status = 'active';
            }
            Catalogue::where('id',$data['product_type'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'product_type'=> $data['product_type']]);
        }
    }
}
