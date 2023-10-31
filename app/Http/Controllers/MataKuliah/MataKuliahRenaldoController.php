<?php

namespace App\Http\Controllers\MataKuliah;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\MataKuliahRenaldo;
use Illuminate\Http\Request;

class MataKuliahRenaldoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $matakuliahrenaldo = MataKuliahRenaldo::where('kode_mataKuliah', 'LIKE', "%$keyword%")
                ->orWhere('nama_mataKuliah', 'LIKE', "%$keyword%")
                ->orWhere('sks', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $matakuliahrenaldo = MataKuliahRenaldo::latest()->paginate($perPage);
        }

        return view('matakuliah.mata-kuliah-renaldo.index', compact('matakuliahrenaldo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('matakuliah.mata-kuliah-renaldo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        MataKuliahRenaldo::create($requestData);

        return redirect('matakuliah/mata-kuliah-renaldo')->with('flash_message', 'MataKuliahRenaldo added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $matakuliahrenaldo = MataKuliahRenaldo::findOrFail($id);

        return view('matakuliah.mata-kuliah-renaldo.show', compact('matakuliahrenaldo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $matakuliahrenaldo = MataKuliahRenaldo::findOrFail($id);

        return view('matakuliah.mata-kuliah-renaldo.edit', compact('matakuliahrenaldo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $matakuliahrenaldo = MataKuliahRenaldo::findOrFail($id);
        $matakuliahrenaldo->update($requestData);

        return redirect('matakuliah/mata-kuliah-renaldo')->with('flash_message', 'MataKuliahRenaldo updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        MataKuliahRenaldo::destroy($id);

        return redirect('matakuliah/mata-kuliah-renaldo')->with('flash_message', 'MataKuliahRenaldo deleted!');
    }
}
