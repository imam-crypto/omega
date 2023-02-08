<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\VehicleRequest;
use App\Models\vehicle;
use App\Models\Vehicle as ModelsVehicle;
use Illuminate\Http\Request;
use Alert;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

// use RealRashid\SweetAlert\Facades\Alert;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = vehicle::all();
        // dd($data);
        return view('admin.vehicle.index')->with('vehicle', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // mimes:jpg,png,jpeg,gif,svg|max:2048
        return view('admin.vehicle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VehicleRequest $request)
    {
        // dd($request);
        $data = $request->all();
        $filename = $request->vehicle_image->getClientOriginalName();
        $data['vehicle_image'] = $request
            ->file('vehicle_image')->storeAs('public/assets/image/vehicle', $filename);
        // Alert::success('Success', 'Type Mobil Berhasil Di Tambahkan');
        FacadesAlert::success('Success', 'Type Mobil Berhasil Di Tambahkan');
        $create = vehicle::create($data);
        $create->id;
        // dd($create->id);
        return redirect()->route('admin.vehicles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // find vehicle by id
        $vehicle = vehicle::find($id);
        return view('admin.vehicle.edit')->with('vehicle', $vehicle);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($id);
        $data = $request->all();
        $filename = $request->vehicle_image->getClientOriginalName();

        $data['vehicle_image'] = $request
            ->file('vehicle_image')->storeAs('public/assets/image/vehicle', $filename);

        $item = vehicle::findOrFail($id);

        $item->update($data);

        return redirect()->route('admin.vehicles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $item = vehicle::find($id);
        $item->delete();

        // Alert::success('Congrats', 'You\'ve Successfully Registered');
        FacadesAlert::success('sukses', 'delete data berhasil');
        return redirect()->route('admin.vehicles');
    }
}
