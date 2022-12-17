<?php

namespace App\Http\Controllers;
use App\Models\Pendonor;
use App\Models\Kesehatan;
use App\Models\Pernyataanpendonor;
use Session;
use Illuminate\Http\Request;

class PendonorController extends Controller
{
    public function create() {
        //$pendonor = Pendonor::all();
        return view('pendaftaran');
    }
    public function store(Request $request) {
        $pendonor = Pendonor::create($request->all());
        if($pendonor) {
            Session::flash('status', 'success');
            Session::flash('message', 'anda telah berhasil mendaftar, silahkan mengisi persyaratan !');
        }
        return view('pernyataan',['pendonor'=>$pendonor]);
    }
    public function storedetail(Request $request, Pendonor $pendonor) {
        $pendonor = Pendonor::query()->where('id',$request->input('idpendonor'))->first();
        if($request->input('hepatitisB') == 0 ) {
        $pendonor->status = 'layak';
        } else {
        $pendonor->status =  'tidak layak';
        }
        if($request->input('kontakhepatitis') == 0 ) {
            $pendonor->status = 'layak';
            } else {
            $pendonor->status =  'tidak layak';
            }
            if($request->input('dapattransfusi') == 0 ) {
                $pendonor->status = 'layak';
                } else {
                $pendonor->status =  'tidak layak';
                }
        $pernyataan = Pernyataanpendonor::create($request->all());
        $pendonor->save();
        if($pernyataan) {
            Session::flash('status', 'success');
            Session::flash('message', 'anda telah berhasil mengisi form pernyataan. silahkan menemui petugas untuk tindak lanjut');
        }
        return redirect('/pendaftar');
    }
    public function storekesehatan(Request $request) {
        $kesehatan = Kesehatan::create($request->all());
        if($kesehatan) {
            Session::flash('status', 'success');
            Session::flash('message', 'anda telah berhasil mengisi form pernyataan');
        }
        return redirect('/list');
    }

    public function pernyataan(Pendonor $pendonor) {
        return view('pernyataan',['pendonor'=>$pendonor]);
    }
    public function list() {
        $pendonor = Pendonor::all();
        return view('listPendaftar', ['pendonor' => $pendonor]);
    }
    public function detail($id) {
        $pendonor = Pendonor::findOrFail($id);
        $pernyataan = Pernyataanpendonor::query()->where('idpendonor',$id)->first();
        return view('detail', ['pendonor' => $pendonor], ['pernyataan' => $pernyataan]);
        }
    public function kesehatan($id) {
            $pendonor = Pendonor::findOrFail($id);
            return view('kesehatan', ['pendonor' => $pendonor]);
            }
}

