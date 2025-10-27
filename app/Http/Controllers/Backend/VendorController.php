<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendors = Vendor::all();
        return view('backend.vendor.index', compact('vendors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.vendor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:vendors,email',
            'phone' => 'required|string|max:20',
            'wechat' => 'nullable|string|max:50',
            'address' => 'nullable|string|max:500',
            'website' => 'nullable|url|max:255',
            'image' => 'nullable|image|mimes:webp,jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Create a user for the vendor
        DB::beginTransaction();
        try {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->email); // Default password, should be changed later
        $user->text_password = $user->password ; // Default password, should be changed later
        $user->role = 'vendor';
        $user->	is_active = '0';
        $user->save();
        // dd($user);
        $vendor = new Vendor();
        $vendor->name = $request->name;
        $vendor->email = $request->email;
        $vendor->phone = $request->phone;
        $vendor->wechat = $request->wechat;
        $vendor->address = $request->address;
        $vendor->website = $request->website;
        $vendor->status = 'pending'; // Default status
        $vendor->purchase_amount = 0; // Default value
        $vendor->get_amount = 0; // Default value
        $vendor->current_due = 0; // Default value
        $vendor->user_id = $user->id; // Assuming the user is logged in
        $vendor->created_by = auth()->id(); // Assuming the user is logged in

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/vendors'), $imageName);
            $vendor->image = 'images/vendors/' . $imageName;
        }

        $vendor->save();

        DB::commit();
        return redirect()->route('vendor.index')->with('success', 'Vendor created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            // dd($e->getMessage());
            return back()->withErrors(['error' => 'An error occurred while creating the vendor. Please try again.']);
        }
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
        $vendor = Vendor::findorFail($id);
        return view('backend.vendor.edit')->with(compact('vendor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::beginTransaction();
        try {
        $vendor = Vendor::findorFail($id);

        $vendor->name = $request->name;
        $vendor->email = $request->email;
        $vendor->phone = $request->phone;
        $vendor->wechat = $request->wechat;
        $vendor->address = $request->address;
        $vendor->website = $request->website;
        $vendor->updated_by = auth()->id(); // Assuming the user is logged in

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($vendor->image && file_exists(public_path($vendor->image))) {
                unlink(public_path($vendor->image));
            }

        // Upload new image
        $image = $request->file('image');
        $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/vendors'), $imageName);
        $vendor->image = 'images/vendors/' . $imageName;
        }

        $vendor->save();

        $user = User::findorFail($vendor->user_id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        DB::commit();
        return redirect()->route('vendor.index')->with('success', 'Vendor update successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            // dd($e->getMessage());
            return back()->withErrors(['error' => 'An error occurred while creating the vendor. Please try again.']);
        }


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function vendorApproval()
    {
        $vendors = Vendor::where('status', 'pending')->get();
        return view('backend.vendor.approval', compact('vendors'));
    }
    
    public function updateVendorStatus(Request $request)
    {
        $vendor = Vendor::findOrFail($request->id);
        $vendor->status = $request->status;
        $vendor->save();

        return response()->json(['success' => 'Vendor status updated successfully.']);
    }

    public function approveVendor($id)
    {
        $vendor = Vendor::findOrFail($id);
        $vendor->status = 'active';
        $vendor->save();

        $user = User::findOrFail($vendor->user_id);
        $user->is_active = '1';
        $user->save();

        return redirect()->back()->with('success', 'Vendor approved successfully.');
    }
    public function rejectVendor($id)
    {
        $vendor = Vendor::findOrFail($id);
        $vendor->status = 'rejected';
        $vendor->save();

        $user = User::findOrFail($vendor->user_id);
        $user->is_active = '0';
        $user->save();

        return redirect()->back()->with('success', 'Vendor rejected successfully.');
    }
}
