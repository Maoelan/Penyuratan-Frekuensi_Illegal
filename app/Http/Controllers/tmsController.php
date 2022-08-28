<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_tms;
use PhpOffice\PhpWord\TemplateProcessor;

class tmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('crud.createTms');
    }

    public function lihatTmsCetak()
    {
        //
        $data = M_tms::all();
        return view('crud.cetakTms')->with([
            'data' => $data
        ]);
    }

    public function lihatdata()
    {
        //
        $data = M_tms::all();
        return view('crud.dataTms')->with([
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
        M_tms::insert($data);
        return redirect('/dataTms');
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
        $data = M_tms::findOrFail($id);
        return view('crud.showTms')->with([
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
        $item = M_tms::findOrFail($id);
        $data = $request->except(['_token']);
        $item->update($data);
        return redirect('dataTms');
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
        $item = M_tms::findOrFail($id);
        $item->delete();
        return redirect('dataTms');
    }

    public function wordExportTms($id){
        $data = M_tms::findOrFail($id);
        $TemplateProcessor = new TemplateProcessor( 'word-template/tms.docx' );
        $TemplateProcessor->setValue ('id', $data->id);
        $TemplateProcessor->setValue ('tanggal_pemeriksaan', $data->tanggal_pemeriksaan);
        $TemplateProcessor->setValue ('metode_pemeriksaan', $data->metode_pemeriksaan);
        $TemplateProcessor->setValue ('client_name', $data->client_name);
        $TemplateProcessor->setValue ('kategori_pengguna', $data->kategori_pengguna);
        $TemplateProcessor->setValue ('merk_perangkat', $data->merk_perangkat);
        $TemplateProcessor->setValue ('tipe_perangkat', $data->tipe_perangkat);
        $TemplateProcessor->setValue ('no_seri', $data->no_seri);
        $TemplateProcessor->setValue ('no_sertifikat', $data->no_sertifikat);
        $TemplateProcessor->setValue ('jenis_perangkat', $data->jenis_perangkat);
        $TemplateProcessor->setValue ('status', $data->status);
        $TemplateProcessor->setValue ('keterangan', $data->keterangan);
        $TemplateProcessor->saveAs('tms.docx');
        return response() -> download('tms.docx')->deleteFileAfterSend(true);
    }
}
