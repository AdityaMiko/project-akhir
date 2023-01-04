<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtSiswa = Siswa::all();
        return view('Siswa.Data-Siswa', compact('dtSiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Siswa.Create-Siswa');
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
        Siswa::create([
            'id' => $request->id,
            'nis' => $request->nis,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'email' => $request->email,
            'nama_ortu' => $request->nama_ortu,
            'alamat' => $request->alamat,
            'phone_number' => $request->phone_number,
            'kelas_id' => $request->kelas_id

        ]);
        return redirect('data-siswa');
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
        $Siswa = Siswa::find($id);
        return view('Siswa.Edit-Siswa', compact('Siswa'));
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
            $Siswa = Siswa::find($id);
            $Siswa->id = $request ->input('id');
            $Siswa->nis = $request ->input('nis');
            $Siswa->nama = $request->input('nama');
            $Siswa->gender = $request->input('gender');
            $Siswa->tempat_lahir = $request->input('tempat_lahir');
            $Siswa->tgl_lahir = $request->input('tgl_lahir');
            $Siswa->email = $request->input('email');
            $Siswa->nama_ortu = $request->input('nama_ortu');
            $Siswa->alamat = $request->input('alamat');
            $Siswa->phone_number = $request->input('phone_number');
            $Siswa->kelas_id = $request->input('kelas_id');
            $Siswa->save();
            
            return redirect ('data-siswa')->with('success', 'Data Berhasil Diubah');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Siswa = Siswa::findorfail($id);
        $Siswa->delete();
        return redirect ('data-siswa')->with('success', 'Data Berhasil Dihapus');;
    }
}