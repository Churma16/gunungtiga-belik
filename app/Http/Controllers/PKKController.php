<?php

namespace App\Http\Controllers;

use App\Models\PKK;
use Illuminate\Http\Request;
use App\Http\Requests\StorePKKRequest;
use App\Http\Requests\UpdatePKKRequest;

class PKKController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pkks = PKK::orderBy('order')->get();

        return view('admin.pkk.index', [
            'title' => 'PKK',
            'pkks' => $pkks
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
            'purna_tugas' => 'nullable|date',
        ]);


        $validatedData['order'] = PKK::count() + 1;

        $pkk= PKK::create($validatedData);

        session()->flash('success', 'Data ' . $pkk['nama'] . ' Berhasil Ditambahkan');
        return redirect('/dashboard/pkks');
    }

    /**
     * Display the specified resource.
     */
    public function show(PKK $pkk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PKK $pkk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PKK $pkk)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'purna_tugas' => 'nullable|date',
        ]);
        // dd($pkk);


        $pkk->update($validatedData);
        session()->flash('success', 'Data ' . $pkk['nama'] . ' Berhasil Diubah');

        return redirect('/dashboard/pkks');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PKK $pkk)
    {
        $pkk->delete();

        session()->flash('success', 'Data ' . $pkk['nama'] . ' Berhasil Dihapus');
        return redirect('/dashboard/pkks');
    }


    /**
     * Update the order of PKK records.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateOrder()
    {
        $pkks = PKK::all();
        foreach ($pkks as $pkk) {
            foreach (request()->order as $order) {
                if ($order['id'] == $pkk->id) {
                    $pkk->update(['order' => $order['position']]);
                }
            }
        }

        return response()->json(['success' => true]);
    }
}
