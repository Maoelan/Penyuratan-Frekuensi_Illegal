<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_tspt;

class tsptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('crud.createTspt');
    }

    public function lihatTsptCetak()
    {
        //
        $data = M_tspt::all();
        return view('crud.cetakTspt')->with([
            'data' => $data
        ]);
    }

    public function lihatdata()
    {
        //
        $data = M_tspt::all();
        return view('crud.dataTspt')->with([
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
        M_tspt::insert($data);
        return redirect('/dataTspt');
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
        $data = M_tspt::findOrFail($id);
        return view('crud.showTspt')->with([
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
        $item = M_tspt::findOrFail($id);
        $data = $request->except(['_token']);
        $item->update($data);
        return redirect('dataTspt');
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
        $item = M_tspt::findOrFail($id);
        $item->delete();
        return redirect('dataTspt');
    }
}
