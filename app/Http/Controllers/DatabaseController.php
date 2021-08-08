<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\Dosen;
use Illuminate\Http\Request;

class DatabaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosen = Dosen::all();
        $mahasiswa = Mahasiswa::all();
        return view('pages.table_list',compact('mahasiswa','dosen'));

    }
}
