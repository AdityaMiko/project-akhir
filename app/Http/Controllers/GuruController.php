<?php

namespace App\Http\Controllers;

use App\Guru;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtGuru = Guru::all();
        return view('Guru.Data-Guru', compact('dtGuru'));
        $dtUser = User::all();
        return view('Guru.Data-Guru', compact('dtUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Guru.Create-Guru');
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
        Guru::create([
            'id' => $request->id,
            'user_id' => $request->user_id,
            'nip' => $request->nip,
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'gender' => $request->gender,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'pendidikan' => $request->pendidikan
        ]);
        return redirect('data-guru')->with('success', 'Data Berhasil Disimpan');
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
        $Guru = Guru::find($id);
        return view('Guru.Edit-Guru', compact('Guru'));
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
            $Guru = Guru::find($id);
            $Guru->id = $request ->input('id');
            $Guru->user_id = $request ->input('user_id');
            $Guru->nip = $request ->input('nip');
            $Guru->nama = $request ->input('nama');
            $Guru->tempat_lahir = $request ->input('tempat_lahir');
            $Guru->tgl_lahir = $request ->input('tgl_lahir');
            $Guru->gender = $request ->input('gender');
            $Guru->phone_number = $request ->input('phone_number');
            $Guru->email = $request ->input('email');
            $Guru->alamat = $request ->input('alamat');
            $Guru->pendidikan = $request ->input('pendidikan');
            $Guru->save();
            
            return redirect ('data-guru')->with('success', 'Data Berhasil Diubah');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Guru = Guru::findorfail($id);
        $Guru->delete();
        return redirect ('data-guru')->with('success', 'Data Berhasil Dihapus');;
    }
}
