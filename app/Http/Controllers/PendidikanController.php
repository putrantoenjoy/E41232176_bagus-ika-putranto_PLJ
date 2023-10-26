<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendidikan;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendidikan = Pendidikan::get();
        return view('backend.pendidikan.index', compact('pendidikan'));
    }
    public function create()
    {
        $pendidikan = null;
        return view('backend.pendidikan.create', compact('pendidikan'));
    }
    public function store(Request $request)
    {
        // abort(500);
        $messages = [
            'required' => 'Kolom wajib diisi!',
            'max' => 'Kolom wajib diisi maksimal :max karakter!',
            'min' => 'Kolom wajib diisi minimal :min karakter!',
            'alpha' => 'Kolom hanya boleh diisi huruf!',
            'numeric' => 'Kolom hanya boleh diisi angka!',
        ];

        $this->validate($request, [
            'nama'=> 'required|alpha',
            'tingkatan'=> 'required',
            'tahun_masuk'=> 'required|min:1|numeric',
            'tahun_keluar'=> 'required|min:1|numeric',
        ], $messages);
        Pendidikan::create($request->all());

        return redirect()->route('pendidikan.index')->with('success','Data pendidikan baru telah berhasil disimpan.');
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
    public function edit(Pendidikan $pendidikan)
    {
        return view('backend.pendidikan.create', compact('pendidikan'));
    }
    public function update(Request $request, Pendidikan $pendidikan)
    {
        $pendidikan->update($request->all());
        $pendidikan->save();

        return redirect()->route('pendidikan.index')->with('success','Pendidikan berhasil diperbaharui');
    }
    public function destroy(Pendidikan $pendidikan)
    {
        $pendidikan->delete();
        return redirect()->route('pendidikan.index')->with('success','Data Pendidikan berhasil dihapus');
    }
}
