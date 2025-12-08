<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CommissionChart;
use App\Models\Catalogue;
class CommissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commissionCharts = CommissionChart::all();
        return view('backend.commission.index', compact('commissionCharts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $catalogues = Catalogue::where('status','active')->get();
        return view('backend.commission.create', compact('catalogues'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $commissionChart = new CommissionChart();
        $commissionChart->name = $request->name;
        $commissionChart->description = $request->description;
        $commissionChart->commission_rate = $request->commission_rate;
        $commissionChart->down_threshold_amount = $request->down_threshold_amount;
        $commissionChart->up_threshold_amount = $request->up_threshold_amount;
        // $commissionChart->is_active = $request->is_active ? true : false;
        $commissionChart->catalogue_id = $request->catalogue_id;
        // You might want to set created_by and updated_by based on the authenticated user
        $commissionChart->created_by = auth()->id();
        $commissionChart->updated_by = auth()->id();
        $commissionChart->save();

        return redirect()->route('commission-chart.index')->with('success', 'Commission Chart created successfully.');
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
        $commissionChart = CommissionChart::find($id);
        $catalogues = Catalogue::where('status','active')->get();
        return view('backend.commission.edit', compact('commissionChart', 'catalogues'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $commissionChart = CommissionChart::find($id);
        $commissionChart->name = $request->name;
        $commissionChart->description = $request->description;
        $commissionChart->commission_rate = $request->commission_rate;
        $commissionChart->down_threshold_amount = $request->down_threshold_amount;
        $commissionChart->up_threshold_amount = $request->up_threshold_amount;
        // $commissionChart->is_active = $request->is_active ? true : false;
        $commissionChart->catalogue_id = $request->catalogue_id;
        // You might want to set updated_by based on the authenticated user
        $commissionChart->updated_by = auth()->id();
        $commissionChart->update();

        return redirect()->route('commission-chart.index')->with('success', 'Commission Chart updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $commissionChart = CommissionChart::find($id);
        $commissionChart->delete();

        return redirect()->route('commission-chart.index')->with('success', 'Commission Chart deleted successfully.');
    }

    public function updateCommissionStatus(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            $commissionChart = CommissionChart::find($data['commission_id']);
            $commissionChart->is_active = $data['status'] == 'active' ? 'inactive' : 'active';
            $commissionChart->update();
            return response()->json(['status' => $commissionChart->is_active ? 'active' : 'inactive', 'commission_id' => $commissionChart->id]);
        }
    }
}
