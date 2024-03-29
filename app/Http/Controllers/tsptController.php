<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_tspt;
use PhpOffice\PhpWord\TemplateProcessor;

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

    public function wordExportTspt($id){
        $data = M_tspt::findOrFail($id);
        $TemplateProcessor = new TemplateProcessor( 'word-template/tspt.docx' );
        $TemplateProcessor->setValue ('id', $data->id);
        $TemplateProcessor->setValue ('tanggal_pemeriksaan', $data->tanggal_pemeriksaan);
        $TemplateProcessor->setValue ('metode_pemeriksaan', $data->metode_pemeriksaan);
        $TemplateProcessor->setValue ('client_id', $data->client_id);
        $TemplateProcessor->setValue ('client_name', $data->client_name);
        $TemplateProcessor->setValue ('nama_stasiun', $data->nama_stasiun);
        $TemplateProcessor->setValue ('alamat_stasiun', $data->alamat_stasiun);
        $TemplateProcessor->setValue ('koordinat', $data->koordinat);
        $TemplateProcessor->setValue ('stasiun_lawan', $data->stasiun_lawan);
        $TemplateProcessor->setValue ('tx', $data->tx);
        $TemplateProcessor->setValue ('rx', $data->rx);
        $TemplateProcessor->setValue ('bw', $data->bw);
        $TemplateProcessor->setValue ('nomer_beroperasi', $data->nomer_beroperasi);
        $TemplateProcessor->setValue ('mulai_beroperasi', $data->mulai_beroperasi);
        $TemplateProcessor->setValue ('keterangan', $data->keterangan);
        $TemplateProcessor->saveAs('tspt.docx');
        return response() -> download('tspt.docx')->deleteFileAfterSend(true);
    }
}
