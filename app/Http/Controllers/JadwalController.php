<?php

namespace App\Http\Controllers;

use App\Jadwal;
use App\Siswa;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtJadwal = Jadwal::all();
        return view('Jadwal.Data-Jadwal', compact('dtJadwal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Jadwal.Create-Jadwal');
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
        Jadwal::create([
            'id' => $request->id,
            'kelas_id' => $request->kelas_id,
            'mapel_id' => $request->mapel_id,
            'guru_id' => $request->guru_id,
            'hari' => $request->hari,
            'jam_pelajaran' => $request->jam_pelajaran
        ]);
        return redirect('data-jadwal');
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
        $Jadwal = Jadwal::find($id);
        return view('Jadwal.Edit-Jadwal', compact('Jadwal'));
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
        $Jadwal = Jadwal::find($id);
            $Jadwal->id = $request ->input('id');
            $Jadwal->kelas_id = $request->input('kelas_id');
            $Jadwal->mapel_id = $request->input('mapel_id');
            $Jadwal->guru_id = $request->input('guru_id');
            $Jadwal->hari = $request->input('hari');
            $Jadwal->jam_pelajaran = $request->input('jam_pelajaran');
            $Jadwal->save();
            
            return redirect ('data-jadwal')->with('success', 'Data Berhasil Diubah');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Jadwal = Jadwal::findorfail($id);
        $Jadwal->delete();
        return redirect ('data-jadwal')->with('success', 'Data Berhasil Dihapus');;
    }
}