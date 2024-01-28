<?php

namespace App\Http\Controllers;

use App\Models\LPMD;
use Illuminate\Http\Request;

class LPMDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lpmds = LPMD::orderBy('order')->get();

        return view('admin.lpmd.index', [
            'title' => 'LPMD',
            'lpmds' => $lpmds,
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

        $validatedData['order'] = LPMD::count() + 1;

        $lpmd = LPMD::create($validatedData);

        session()->flash('success', 'Data '.$lpmd['nama'].' Berhasil Ditambahkan');

        return redirect('/dashboard/lpmds');
    }

    /**
     * Display the specified resource.
     */
    public function show(LPMD $lpmd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LPMD $lpmd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LPMD $lpmd)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'purna_tugas' => 'required|date',
        ]);
        // dd($lpmd);

        $lpmd->update($validatedData);
        session()->flash('success', 'Data '.$lpmd['nama'].' Berhasil Diubah');

        return redirect('/dashboard/lpmds');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LPMD $lpmd)
    {
        $lpmd->delete();

        session()->flash('success', 'Data '.$lpmd['nama'].' Berhasil Dihapus');

        return redirect('/dashboard/lpmds');
    }

    public function updateOrder()
    {

        $lpmds = LPMD::all();
        foreach ($lpmds as $lpmd) {
            foreach (request()->order as $order) {
                if ($order['id'] == $lpmd->id) {
                    $lpmd->update(['order' => $order['position']]);
                }
            }
        }

        return response()->json(['success' => true]);
    }
}
