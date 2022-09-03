<?php

namespace App\Http\Controllers;

use App\Models\M_datasurat;
use App\Models\M_tmisr;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;
use SebastianBergmann\Template\Template;

class datasuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('crud.createDataSurat');
    }

    public function lihatdata()
    {
        //
        $data = M_datasurat::all();
        return view('crud.dataDataSurat')->with([
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
        M_datasurat::insert($data);
        return redirect('/dataDataSurat');
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
        $data = M_datasurat::findOrFail($id);
        return view('crud.showDataSurat')->with([
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
        $item = M_datasurat::findOrFail($id);
        $data = $request->except(['_token']);
        $item->update($data);
        return redirect('dataDataSurat');
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
        $item = M_datasurat::findOrFail($id);
        $item->delete();
        return redirect('dataDataSurat');
    }

    public function wordExportDataSurat($id){
        $dataSurat = M_datasurat::findOrFail($id);
        $data = M_tmisr::findOrFail($id);

        $TemplateProcessor = new TemplateProcessor( 'word-template/tmisr.docx' );
        $TemplateProcessor->setValue ('id', $data->id);
        $TemplateProcessor->setValue ('nomer_surat', $data->nomer_surat);
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
        $TemplateProcessor->setValue ('status' , $data->status);
        $TemplateProcessor->setValue ('jenis_barang' , $data->jenis_barang);
        $TemplateProcessor->setValue ('merk_type' , $data->merk_type);
        $TemplateProcessor->setValue ('lokasi_segel' , $data->lokasi_segel);
        $TemplateProcessor->setValue ('jenis_barang_dua' , $data->jenis_barang_dua);
        $TemplateProcessor->setValue ('merk_type_dua' , $data->merk_type_dua);
        $TemplateProcessor->setValue ('lokasi_segel_dua' , $data->lokasi_segel_dua);
        $TemplateProcessor->setValue ('mulai_beroperasi' , $data->mulai_beroperasi);
        $TemplateProcessor->setValue ('keterangan', $data->keterangan);  
        
        $TemplateProcessor->setValue ('id', $dataSurat->id);
        $TemplateProcessor->setValue ('nama_pemilik', $dataSurat->nama_pemilik);
        $TemplateProcessor->setValue ('nik_pemilik', $dataSurat->nik_pemilik);
        $TemplateProcessor->setValue ('jenis_kelamin', $dataSurat->jenis_kelamin);
        $TemplateProcessor->setValue ('agama', $dataSurat->agama);
        $TemplateProcessor->setValue ('pekerjaan', $dataSurat->pekerjaan);
        $TemplateProcessor->setValue ('agama', $dataSurat->agama);
        $TemplateProcessor->setValue ('jabatan', $dataSurat->jabatan);
        $TemplateProcessor->setValue ('alamat', $dataSurat->alamat);
        $TemplateProcessor->setValue ('bertindak_untuk', $dataSurat->bertindak_untuk);

        $TemplateProcessor->setValue ('nama_pemeriksa', $dataSurat->nama_pemeriksa);
        $TemplateProcessor->setValue ('nip_pemeriksa', $dataSurat->nip_pemeriksa);
        $TemplateProcessor->setValue ('nik_pemeriksa', $dataSurat->nik_pemeriksa);
        $TemplateProcessor->setValue ('jenis_kelamin_pemeriksa', $dataSurat->jenis_kelamin_pemeriksa);
        $TemplateProcessor->setValue ('agama_pemeriksa', $dataSurat->agama_pemeriksa);
        $TemplateProcessor->setValue ('pekerjaan_pemeriksa', $dataSurat->pekerjaan_pemeriksa);
        $TemplateProcessor->setValue ('agama_pemeriksa', $dataSurat->agama_pemeriksa);
        $TemplateProcessor->setValue ('jabatan_pemeriksa', $dataSurat->jabatan_pemeriksa);
        $TemplateProcessor->setValue ('pangkat_gol', $dataSurat->pangkat_gol);
        $TemplateProcessor->setValue ('alamat_pemeriksa', $dataSurat->alamat_pemeriksa);
        $TemplateProcessor->setValue ('bertindak_untuk_pemeriksa', $dataSurat->bertindak_untuk_pemeriksa);
        
        $TemplateProcessor->setValue ('nama_kbalai', $dataSurat->nama_kbalai);
        $TemplateProcessor->setValue ('nip_kbalai', $dataSurat->nip_kbalai);
        $TemplateProcessor->setValue ('tanggal_now', $dataSurat->tanggal_now);

        $TemplateProcessor->saveAs('surat_lampiran.docx');
        return response() -> download('surat_lampiran.docx')->deleteFileAfterSend(true);
    }
}
