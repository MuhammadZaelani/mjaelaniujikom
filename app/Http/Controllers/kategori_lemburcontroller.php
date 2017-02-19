<?php

namespace App\Http\Controllers;
use App\kategori_lembur;
use App\golongan;
use App\jabatan;

use Illuminate\Http\Request;

class kategori_lemburcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kategori_lembur=kategori_lembur::all();
        return view('kategori_lembur.index',compact('kategori_lembur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $golongan=golongan::all();
         $jabatan=jabatan::all();
         return view('kategori_lembur.create',compact('golongan','jabatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $kategori_lembur= new kategori_lembur;
        $kategori_lembur->kode_lembur=$request->get('kode_lembur');
        $kategori_lembur->id_jabatan=$request->get('id_jabatan');
        $kategori_lembur->id_golongan=$request->get('id_golongan');
        $kategori_lembur->besaran_uang=$request->get('besaran_uang');
        $kategori_lembur->save();
        return redirect('/kategori_lembur');
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
