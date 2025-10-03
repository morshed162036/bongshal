<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Bike;
use App\Models\BikeColor;
use App\Models\EngineoilGrade;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class BikeController extends Controller
{
    //
    public function index()
    {
        $bikes = Bike::with('company','color','grade')->get();
        // dd($bikes);
        return view('backend.bikes.index')->with(compact('bikes'));
    }
    public function create()
    {
        $companies = Company::where('status','active')->get();
        return view('backend.bikes.create')->with(compact('companies'));
    }

public function store(Request $request)
{
    $request->validate([
        'model' => 'required|string',
        'company_id' => 'required|integer',
        'type' => 'required|string',
        // 'front_tire_size' => 'required|string',
        // 'rear_tire_size' => 'required|string',
        'battery_capacity' => 'required|string',
        'group-color.*.color' => 'required|string',
        'group-color.*.image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'group-grade.*.grade' => 'required|string',
        'group-grade.*.volume' => 'required|string',
    ]);

    DB::beginTransaction();
    try {
        // Save Bike
        $bike = new Bike();
        $bike->model = $request->model;
        $bike->company_id = $request->company_id;
        $bike->type = $request->type;
        $bike->front_tire_width = $request->front_tire_width;
        $bike->front_tire_aspectratio = $request->front_tire_aspectratio;
        $bike->front_tire_rim = $request->front_tire_rim;
        $bike->rear_tire_width = $request->rear_tire_width;
        $bike->rear_tire_aspectratio = $request->rear_tire_aspectratio;
        $bike->rear_tire_rim = $request->rear_tire_rim;
        $bike->battery = $request->battery_capacity;
        $bike->status = 'active';
        $bike->save();

        // Save Colors with Images
        foreach ($request['group-color'] as $index => $color) {
            if (!empty($color['color'])) {
                $variation = new BikeColor();
                $variation->bike_id = $bike->id;
                $variation->color_name = $color['color'];

                // Handle image per color
                if ($request->hasFile("group-color.$index.image")) {
                    $file = $request->file("group-color.$index.image");
                    $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('images/multiimage/bike'), $filename);
                    $variation->image = $filename;
                }

                $variation->status = 'active';
                $variation->save();
            }
        }

        // Save Grades
        foreach ($request['group-grade'] as $grade) {
            if (!empty($grade['grade'])) {
                $variation = new EngineoilGrade();
                $variation->bike_id = $bike->id;
                $variation->grade = $grade['grade'];
                $variation->volume = $grade['volume'];
                $variation->status = 'active';
                $variation->save();
            }
        }

        DB::commit();
        return redirect()->route('bike.index')->with('success', 'Bike created successfully.');

    } catch (\Exception $exception) {
        DB::rollBack();
        return back()->with('error', 'Something went wrong: ' . $exception->getMessage());
    }
}

    public function edit($id)
    {
        $bike = Bike::with('color','grade')->findorFail($id);
        $companies = Company::where('status','active')->get();
        // dd($bike);
        return view('backend.bikes.edit')->with(compact('bike','companies'));
    }

public function update(Request $request, $id)
{
    $bike = Bike::findOrFail($id);

    $request->validate([
        'model' => 'required|string',
        'company_id' => 'required|integer',
        'type' => 'required|string',
        // 'front_tire_size' => 'required|string',
        // 'rear_tire_size' => 'required|string',
        'battery_capacity' => 'required|string',
        'group-color.*.color' => 'nullable|string',
        'group-color.*.image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'group-color.*.id' => 'nullable|integer',
        'group-grade.*.grade' => 'nullable|string',
        'group-grade.*.volume' => 'nullable|string',
        'group-grade.*.id' => 'nullable|integer',
    ]);

    DB::beginTransaction();
    try {
        // dd($request->all());
        // Update Bike
        $bike->update([
            'model' => $request->model,
            'company_id' => $request->company_id,
            'type' => $request->type,
            'front_tire_width' => $request->front_tire_width,
        'front_tire_aspectratio' => $request->front_tire_aspectratio,
        'front_tire_rim' => $request->front_tire_rim,
        'rear_tire_width' => $request->rear_tire_width,
        'rear_tire_aspectratio' => $request->rear_tire_aspectratio,
        'rear_tire_rim' => $request->rear_tire_rim,
            'battery' => $request->battery_capacity,
        ]);

        /** ---------------- COLORS ---------------- */
        $colorIds = []; // keep track of submitted IDs

        foreach ($request['group-color'] as $index => $color) {
            if (!empty($color['color'])) {
                if (!empty($color['id'])) {
                    // Update existing color
                    $variation = BikeColor::find($color['id']);
                    if (!$variation) continue; // skip invalid ids
                } else {
                    // New color
                    $variation = new BikeColor();
                    $variation->bike_id = $bike->id;
                }

                $variation->color_name = $color['color'];

                // If new image uploaded, replace old one
                if ($request->hasFile("group-color.$index.image")) {
                    $file = $request->file("group-color.$index.image");
                    $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('images/multiimage/bike'), $filename);
                    $variation->image = $filename;
                }

                $variation->status = 'active';
                $variation->save();

                $colorIds[] = $variation->id; // track saved IDs
            }
        }

        // Delete colors not in submitted data
        BikeColor::where('bike_id', $bike->id)
            ->whereNotIn('id', $colorIds)
            ->delete();

        /** ---------------- GRADES ---------------- */
        $gradeIds = [];

        foreach ($request['group-grade'] as $grade) {
            if (!empty($grade['grade'])) {
                if (!empty($grade['id'])) {
                    $variation = EngineoilGrade::find($grade['id']);
                    if (!$variation) continue;
                } else {
                    $variation = new EngineoilGrade();
                    $variation->bike_id = $bike->id;
                }

                $variation->grade = $grade['grade'];
                $variation->volume = $grade['volume'];
                $variation->status = 'active';
                $variation->save();

                $gradeIds[] = $variation->id;
            }
        }

        EngineoilGrade::where('bike_id', $bike->id)
            ->whereNotIn('id', $gradeIds)
            ->delete();

        DB::commit();
        return redirect()->route('bike.index')->with('success', 'Bike updated successfully.');

    } catch (\Exception $exception) {
        DB::rollBack();
        return back()->with('error', 'Something went wrong: ' . $exception->getMessage());
    }
}


    public function destroy($id)
    {
        $bike = Bike::findorFail($id);
        $colors = BikeColor::where('bike_id',$id)->get();
        foreach($colors as $color)
        {
            $exists = public_path('images/multiimage/bike/'.$color->image);
            if(File::exists($exists))
            {
                File::delete($exists);
            }
            $color->delete();
        }
        $grades = EngineoilGrade::where('bike_id',$id)->get();
        foreach($grades as $grade)
        {
            $grade->delete();
        }
        if(!empty($bike))
        {
            $bike->delete();
            return redirect()->back()->with('success','Delete Success!!');
        }
        else
        {
            return redirect()->back()->with('error','Something went wrong!!');
        }
    }

    public function updateBikeStatus(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            if($data['status'] == "active"){
                $status = 'inactive';
            }else{
                $status = 'active';
            }
            Bike::where('id',$data['bike_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'bike_id'=>$data['bike_id']]);
        }
    }
}
