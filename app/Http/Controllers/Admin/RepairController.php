<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RepairRequest;
use App\Models\Repair;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RepairController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repair = Repair::all();
        return view('admin.repair.index')->with('repair', $repair);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.repair.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RepairRequest $request)
    {
        $data = $request->all();

        Alert::success('Success', 'Merk Mobil Berhasil Di Tambahkan');
        Repair::create($data);
        return redirect()->route('repair.index');
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
        $data = Repair::find($id);
        return view('admin.repair.edit')->with('repair', $data);
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
        $data = $request->all();

        $item = Repair::findOrFail($id);

        $item->update($data);

        return redirect()->route('repair.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Repair::find($id);
        $item->delete();

        // Alert::success('Congrats', 'You\'ve Successfully Registered');
        Alert::success('sukses', 'delete data berhasil');
        return redirect()->route('repair.index');
    }
}
