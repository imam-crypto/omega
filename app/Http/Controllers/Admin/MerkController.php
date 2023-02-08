<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MerkRequest;
use App\Models\Merk;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class MerkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Merk::all();
        return view('admin.merk.index')->with('merk', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.merk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MerkRequest $request)
    {
        $data = $request->all();
        $filename = $request->merk_image->getClientOriginalName();
        $data['merk_image'] = $request
            ->file('merk_image')->storeAs('public/assets/image/merk', $filename);
        // Alert::success('Success', 'Merk Mobil Berhasil Di Tambahkan');
        Alert::success('Success', 'Merk Mobil Berhasil Di Tambahkan');
        Merk::create($data);
        return redirect()->route('merk.index');
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
        $merk = Merk::find($id);
        return view('admin.merk.edit')->with('merk', $merk);
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
        $filename = $request->merk_image->getClientOriginalName();

        $data['merk_image'] = $request
            ->file('merk_image')->storeAs('public/assets/image/merk', $filename);

        $item = Merk::findOrFail($id);

        $item->update($data);

        return redirect()->route('merk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Merk::find($id);
        $item->delete();

        // Alert::success('Congrats', 'You\'ve Successfully Registered');
        Alert::success('sukses', 'delete data berhasil');
        return redirect()->route('merk.index');
    }
}
