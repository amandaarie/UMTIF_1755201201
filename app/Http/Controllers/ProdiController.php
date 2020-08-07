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
        $list_prodi = Prodi::all();
        return view('prodi.index', compact('list_prodi'));
    }

    

    // public function mhs_list()
    // {
    //     $prodi = Prodi::with('mhs')->get();
    //     return Datatables::of($prodi)
    //         ->addIndexColumn()
    //         ->addColumn('action', function ($prodi){
    //             $action = '<a class="text-danger" href="/prodi/edit'.$prodi->nama_prodi.'">Edit</a>';
    //             return $action;
                
    //         })
    //         ->make();
    // }
}