<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $dataKelas = Kelas::where('kelas', 'LIKE', '%' . $search . '%')
            ->paginate(5);

        return view('kelas.index', [
            'search' => $search,
            'dataKelas' => $dataKelas
        ]);
    }
    public function tambah()
    {
        // folder/file
        return view('kelas/tambah');
    }
    public function aksi_tambah(Request $request)
    {
        $request->validate(['kelas'=>'required'],[
            'kelas.required'=>'kelas wajib di isi!'        ]);

        Kelas::insert([
            'kelas' => $request->kelas
        ]);
        return redirect()->route('kelas');
    }
    public function edit($id)
    {
        // $dataKelas= Kelas::where('id',$id)->get();
        $dataKelas =  Kelas::where('id', $id)->first();

        return view('kelas/edit', [
            'dataKelas' => $dataKelas
        ]);
        // foreach ($dataKelas as $key => $value) {
        //     echo $value->kelas;
        // }

        // $dataKelas(get)
        // [
        //     [
        //         'kelas'=>'XII SIJA'
        //     ]
        // ]

        // $dataKelas(first)
        //     [
        //         'kelas'=>'XII SIJA'
        //     ]


    }

    public function hapus($id)
    {
        // "delete from kelas where id=$id";
        Kelas::where('id', $id)->delete();
        return redirect()->route('kelas');
    }

    public function aksi_edit(Request $request,$id)
    {
        // echo $id;
        // dd($request->only(['kelas']));
        // UPDATE kelas set kelas=$request->kelas where id=$id;
        Kelas::where('id',$id)->update($request->only(['kelas']));
        return redirect()->route('kelas');
        // Kelas::where('id',$id)->update([
        //     'kelas'=>$request->kelas
        // ]);
    }
}
