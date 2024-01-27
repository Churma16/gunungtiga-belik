<?php

namespace App\Http\Controllers;

use App\Models\KarangTaruna;
use Illuminate\Http\Request;
use App\Http\Requests\StoreKarangTarunaRequest;
use App\Http\Requests\UpdateKarangTarunaRequest;

class KarangTarunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karangTarunas = KarangTaruna::orderBy('order')->get();

        return view('admin.karang-taruna.index', [
            'title' => 'Karang Taruna',
            'karangTarunas' => $karangTarunas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'purna_tugas' => 'required|date',
        ]);


        $validatedData['order'] = KarangTaruna::count() + 1;

        $karangTaruna=KarangTaruna::create($validatedData);

        session()->flash('success', 'Data ' . $karangTaruna['nama'] . ' Berhasil Ditambahkan');
        return redirect('/dashboard/karang-tarunas');
    }

    /**
     * Display the specified resource.
     */
    public function show(KarangTaruna $karangTaruna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KarangTaruna $karangTaruna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KarangTaruna $karangTaruna)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'purna_tugas' => 'required|date',
        ]);
        // dd($karangTaruna);


        $karangTaruna->update($validatedData);

        session()->flash('success', 'Data ' . $karangTaruna['nama'] . ' Berhasil Diubah');
        return redirect('/dashboard/karang-tarunas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KarangTaruna $karangTaruna)
    {
        $karangTaruna->delete();

        session()->flash('success', 'Data ' . $karangTaruna['nama'] . ' Berhasil Dihapus');
        return redirect('/dashboard/karang-tarunas');
    }

    public function updateOrder()
    {

        $karangTarunas = KarangTaruna::all();
        foreach ($karangTarunas as $karangTaruna) {
            foreach (request()->order as $order) {
                if ($order['id'] == $karangTaruna->id) {
                    $karangTaruna->update(['order' => $order['position']]);
                }
            }
        }

        return response()->json(['success' => true]);
    }
}
