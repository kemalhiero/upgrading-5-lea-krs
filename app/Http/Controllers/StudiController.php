<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Studi;
use App\Models\Matkul;
use App\Models\Kelas;
use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Builder;

class StudiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studi = Studi::all();
        $matkul = Matkul::all();
        // dd($studi);
        return view('studi.studi', compact('studi', 'matkul'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'kode_matkul' => 'required',
            'dosen' => 'required',
            'ruang' => 'required',
            'jadwal' => 'required',
            'periode' => 'required',
        ]);

        Studi::create($validasi);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        // $list_mhs_kelas = Kelas::where('id_studi', '=', $id);        
        // $list_mhs_kelas = Studi::with('mahasiswa')->where('id_studi', '=', $id);
        
        $list_mhs_kelas = Mahasiswa::whereHas('studi', function (Builder $query) use ($id){
            $query->where('studi.id', '=', $id);
        })->get();

        $mahasiswa = Mahasiswa::all();
        $studi = Studi::find($id);
            
        // dd($list_mhs_kelas);

        return view('studi.detail', compact('list_mhs_kelas', 'mahasiswa', 'studi'));
    }

    public function store_mhs(Request $request)
    {
        $validasi = $request->validate([
            'id_studi' => 'required',
            'nim_mhs' => 'required',
        ]);

        // dd($validasi);

        Kelas::create($validasi);
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
    }
}
