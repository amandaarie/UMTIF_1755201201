<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;
use DataTables;

class DosenController extends Controller
{
    public function index() {
        return view('dosen.index');

    }

    public function dosen_list() {
        $dosen = Dosen::all();
        return Datatables::of($dosen)
             ->addIndexColumn()
             ->addColumn('action', function ($dosen) {
                 $action = '<a class="text-primary"href="/dosen/edit/'.$dosen->kode_dosen.'">Edit</a>';
                 $action .= ' | <a class="text-danger"href="/dosen/delete/'.$dosen->kode_dosen.'">Hapus</a>';
                 return $action;
            })
             ->make();
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_dosen' => 'required|digits:10',
            'nama_dosen' => 'required',
            'nidn' => 'required',
            'email' => 'required',
            'handphone' => 'required',
            'alamat' => 'required',
       ]);
       Dosen::create($request->all());
       return redirect()->route('dosen.index')
                       ->with('success','Data berhasil ditambahkan');
    }

    public function edit(Dosen $dosen, $id)
    {
       $dosen = Dosen::find($id);
       return view('dosen.edit', compact('dosen'));
    }

    public function update(Request $request, Dosen $dosen)
    {
        $request->validate([
            'nama_dosen' => 'required',
            'nidn' => 'required',
            'email' => 'required',
            'handphone' => 'required',
            'alamat' => 'required',
       ]);
        $dosen->update($request->all());
        return redirect()->route('dosen.index')
                        ->with('success','Data berhasil diupdate');
    }

    public function destroy(Dosen $dosen)
    {
        $dosen->delete();
 
        return redirect()->route('dosen.index')
        ->with
 ('success'
 ,'Data Berhasil Dihapus');
    }
}
