<?php

namespace App\Http\Controllers;

use App\Models\M_tmisr;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;
use SebastianBergmann\Template\Template;

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

    public function lihatTmisrCetak()
    {
        //
        $data = M_tmisr::all();
        return view('crud.cetakTmisr')->with([
            'data' => $data
        ]);
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

    /**public function printTmisr(){
        $data = M_tmisr::all();
        $pdf = PDF::loadview('crud.dataTmisr', ['data' => $data]);
        return $pdf -> download('terlampir-tmisr.pdf');
    }*/

    public function wordExportTmisr($id){
        $data = M_tmisr::findOrFail($id);
        $TemplateProcessor = new TemplateProcessor( 'word-template/tmisr.docx' );
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
        $TemplateProcessor->setValue ('bw', $data->status);
        $TemplateProcessor->setValue ('status' , $data->status);
        $TemplateProcessor->setValue ('keterangan', $data->keterangan);
        $TemplateProcessor->saveAs('tmisr.docx');
        return response() -> download('tmisr.docx')->deleteFileAfterSend(true);
    }
}
