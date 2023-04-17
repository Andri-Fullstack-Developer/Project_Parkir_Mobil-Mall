<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Pmasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Pmasuk = pmasuk::all();
        $user = Auth::user()->name;
        $ma = Auth::user()->username;
        $petugas = Auth::user()->petugas;
        $email = Auth::user()->email;
        return view('Dasboard.dasboard', ['email' => $email,'petugas' => $petugas,'nama' => $user, 'username' => $ma],  compact('Pmasuk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if($request == NULL)
        {
                $data = 'coba';
        }
        else {
            $data = [$request->mall, $request->plat, $request->gedung, $request-> lantai];
        }
        
        return view('Pmasuk.pmasuk', ['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $harga_input = "Rp. 10000,-";
    //     $harga_processed = str_replace(["Rp. ", ",", "-"], "", $harga_input);
    //     $harga = floatval(str_replace(".", "", $harga_processed)) / 100;
    //     $harga_formatted = "Rp. " . number_format($harga, 2, ",", ".") . ",-";
    //     echo $harga_formatted; // Output: Rp. 10.000,00,-

    //     $currentDateTime = Carbon::now();
        
    //     pmasuk::create([
    //         'mall' => $request->mall,
    //         'plat' => $request->plat,
    //         'gedung' => $request->gedung,
    //         'lantai' => $request->lantai,
    //         'harga' => $harga_processed,
    //         'status' => 'masuk',
    //         'updated_at' => '2023-04-16 09:07:07',
    //         'created_at' => '2023-04-16 09:07:07',
    //     ]);
        
    //     return redirect('Pmasuk')->with('success1', 'Data berhasil ditambahkan.');

    //     return redirect('Pmasuk');
    // }

    public function store(Request $request)
    {
        DB::table('pmasuk')->insert(['mall' => $request->mall, 'gedung' => $request->gedung, 'lantai' => $request->lantai,'plat' =>$request->plat, 'status' => 'masuk', 'harga' => 10000,
                'updated_at' => '2023-04-16 09:07:07',
                'created_at' => '2023-04-16 09:07:07',]);
        

        return redirect('Pmasuk');
    }
    /**
     * Display the specified resource.
     */
    public function show(Request $request)
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
        $Pmasuk = Pmasuk::find($id);
        $Pmasuk -> delete();
      
        return redirect('/home');
    }
}
