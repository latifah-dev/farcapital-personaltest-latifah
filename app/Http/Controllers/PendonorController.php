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
        return redirect('/pernyataan');
    }
    public function storedetail(Request $request) {
        $pernyataan = Pernyataanpendonor::create($request->all());
        if($pernyataan) {
            Session::flash('status', 'success');
            Session::flash('message', 'anda telah berhasil mengisi form pernyataan');
        }
        return redirect('/pernyataan');
    }
    public function storekesehatan(Request $request) {
        $kesehatan = Kesehatan::create($request->all());
        if($kesehatan) {
            Session::flash('status', 'success');
            Session::flash('message', 'anda telah berhasil mengisi form pernyataan');
        }
        return redirect('/');
    }
    //public function pernyataan($id) {
    //    $pendonor = Pendonor::findOrFail($id);
    //    return view('pernyataan', ['pendonor' => $pendonor]);
    //}

    public function pernyataan() {
        //$pendonor = Pendonor::all();
        return view('pernyataan');
    }
    public function list() {
        $pendonor = Pendonor::all();
        return view('listPendaftar', ['pendonor' => $pendonor]);
    }
    public function detail($id) {
        $pendonor = Pendonor::findOrFail($id);
        return view('detail', ['pendonor' => $pendonor]);
        }
    public function kesehatan($id) {
            $pendonor = Pendonor::findOrFail($id);
            return view('kesehatan', ['pendonor' => $pendonor]);
            }
}
