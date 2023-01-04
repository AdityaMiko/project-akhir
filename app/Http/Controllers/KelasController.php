<?php

namespace App\Http\Controllers;

use App\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtKelas = Kelas::all();
        return view('Kelas.Data-Kelas', compact('dtKelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Kelas.Create-Kelas');
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
        Kelas::create([
            'id' => $request->id,
            'kode_kelas' => $request->kode_kelas,
            'nama_kelas' => $request->nama_kelas,

        ]);
        return redirect('data-kelas');
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
        $Kelas = Kelas::find($id);
        return view('Kelas.Edit-Kelas', compact('Kelas'));
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
        $Kelas = Kelas::find($id);
            $Kelas->id = $request ->input('id');
            $Kelas->kode_kelas = $request->input('kode_kelas');
            $Kelas->nama_kelas = $request->input('nama_kelas');
            $Kelas->save();
            
            return redirect ('data-kelas')->with('success', 'Data Berhasil Diubah');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Kelas = Kelas::findorfail($id);
        $Kelas->delete();
        return redirect ('data-kelas')->with('success', 'Data Berhasil Dihapus');;
    }
}