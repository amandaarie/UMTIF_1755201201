<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\Prodi;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdiController extends Controller
{
    public function index()
    {
        return view('prodi.index');
    }
    public function mhs_list()
    {
        $prodi = Prodi::with('mhs')->get();
        return Datatables::of($prodi)
            ->addIndexColumn()
            ->addColumn('action', function ($prodi){
                $action = '<a class="text-danger" href="/prodi/edit'.$prodi->nama_prodi.'">Edit</a>';
                return $action;
                
            })
            ->make();
    }
}