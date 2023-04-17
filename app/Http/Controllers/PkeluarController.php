<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PkeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('pmasuk')->get();
        return view('Pkeluar.pkeluar', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $req)
    {
        DB::table('pmasuk')->where('plat', $req->plat)->where('status', 'masuk')->update(['status' => 'keluar'  ]);
        return redirect('/Petugas_Keluar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}