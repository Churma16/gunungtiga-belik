<?php

namespace App\Http\Controllers;

use App\Models\BPD;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBPDRequest;
use App\Http\Requests\UpdateBPDRequest;

class BPDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bpds = BPD::orderBy('order')->get();

        return view('admin.bpd.index', [
            'bpds' => $bpds
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


        $validatedData['order'] = BPD::count() + 1;

        $bpd=BPD::create($validatedData);

        session()->flash('success', 'Data ' . $bpd['nama'] . ' Berhasil Ditambahkan');
        return redirect('/dashboard/bpds');
    }

    /**
     * Display the specified resource.
     */
    public function show(BPD $bpd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BPD $bpd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BPD $bpd)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'purna_tugas' => 'required|date',
        ]);
        // dd($bpd);


        $bpd->update($validatedData);

        session()->flash('success', 'Data ' . $bpd['nama'] . ' Berhasil Diubah');
        return redirect('/dashboard/bpds');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BPD $bpd)
    {
        $bpd->delete();

        session()->flash('success', 'Data ' . $bpd['nama'] . ' Berhasil Dihapus');
        return redirect('/dashboard/bpds');
    }

    public function updateOrder()
    {

        $bpds = BPD::all();
        foreach ($bpds as $bpd) {
            foreach (request()->order as $order) {
                if ($order['id'] == $bpd->id) {
                    $bpd->update(['order' => $order['position']]);
                }
            }
        }

        return response()->json(['success' => true]);
    }
}
