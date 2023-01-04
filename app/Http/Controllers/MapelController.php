<?php

namespace App\Http\Controllers;

use App\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtMapel = Mapel::all();
        return view('Mapel.Data-Mapel', compact('dtMapel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Mapel.Create-Mapel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Mapel::create([
            'id' => $request->id,
            'kode_mapel' => $request->kode_mapel,
            'nama_mapel' => $request->nama_mapel,

        ]);
        return redirect('data-mapel');
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
        $Mapel = Mapel::find($id);
        return view('Mapel.Edit-Mapel', compact('Mapel'));
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
        {
            $Mapel = Mapel::find($id);
            $Mapel->id = $request->input('id');
            $Mapel->kode_mapel = $request->input('kode_mapel');
            $Mapel->nama_mapel = $request->input('nama_mapel');
            $Mapel->save();

            return redirect('data-mapel')->with('success', 'Data Berhasil Diubah');;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Mapel = Mapel::findorfail($id);
        $Mapel->delete();
        return redirect('data-mapel')->with('success', 'Data Berhasil Dihapus');;
    }
}
