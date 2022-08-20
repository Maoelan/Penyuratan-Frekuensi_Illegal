<?php

namespace App\Http\Controllers;

use App\Models\M_tmisr;
use Illuminate\Http\Request;
use App\Exports\TmisrExport;
use Maatwebsite\Excel\Facedes\Excel;

class tmisrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('crud.createTmisr');
    }

    public function lihatdata()
    {
        //
        $data = M_tmisr::all();
        return view('crud.dataTmisr')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $data = $request->except(['_token']);
        M_tmisr::insert($data);
        return redirect('/dataTmisr');
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
        $data = M_tmisr::findOrFail($id);
        return view('crud.showTmisr')->with([
            'data' => $data
        ]);
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
        $item = M_tmisr::findOrFail($id);
        $data = $request->except(['_token']);
        $item->update($data);
        return redirect('dataTmisr');
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
        $item = M_tmisr::findOrFail($id);
        $item->delete();
        return redirect('dataTmisr');
    }

    public function exportTmisr(){
        return Excel::download(new TmisrExport, 'data-lampiran-tmisr.xlsx');
    }
}
