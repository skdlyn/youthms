<?php

namespace App\Http\Controllers;

use App\Models\EU;
use Illuminate\Http\Request;
use App\Models\visitor;
use App\Models\Services;
use App\Models\Produk;
use App\Models\JenisLayanan;

class EUController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $ip = $request->ip();
        $visitor = visitor::firstOrCreate(['ip_address' => $ip]);
        $visitor->increment('visits');
        $visitor->save();


        return view('landing-page');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return true;
    }

    /**
     * Store a newly created resource in storage.
     */

    public function storeindex()
    {
        $layanan = JenisLayanan::all();
        // return true;
        // return $layanan;
        return view('EU.store.index', compact('layanan'));
    }

    public function store(Request $request)
    {
        return true;
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EU $eU, $id)
    {
        $s = Services::all();
        $layanan = JenisLayanan::all();
        $services = Services::where('jenis_layanan_id', $id)->get();
        $idservices = $services->pluck('id');
        $jenis_layanan = JenisLayanan::find($id);
        // return $jenis_layanan;
        foreach ($services as $serv) {
            $produk[$serv->id] = produk::where('services_id', $serv->id)->with('services')->get();
        }
        $produk = collect($produk)->flatten();
        
        return view('EU.store.show',compact('layanan','produk','jenis_layanan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EU $eU)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EU $eU)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EU $eU)
    {
        //
    }
}