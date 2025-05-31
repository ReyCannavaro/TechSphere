<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gadgets;
use App\Models\categories;

class GadgetsController extends Controller
{
    public function edit($id)
    {
        $gadgets = Gadgets::findOrFail($id);
        $categories = Categories::all();
        return view('admin.gadgets.edit', compact('gadgets', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $gadget = Gadgets::find($id);

        if (!$gadget) {
            return redirect()->route('admin.gadgets.dashboard')->with('error', 'Gadget tidak ditemukan');
        }

        $gadget->update($request->all());

        return redirect()->route('admin.gadgets.dashboard')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $gadget = Gadgets::findOrFail($id);
        $gadget->delete();

        return redirect()->route('admin.gadgets.dashboard')->with('success', 'Gadget berhasil dihapus');
    }

    public function create()
    {
        $categories = Categories::all();
        return view('admin.gadgets.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required',
            'categories_id' => 'required|integer',
            'tahun_keluaran' => 'required|integer',
            'harga' => 'required|numeric',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Simpan data ke database
        $gadget = new Gadgets();
        $gadget->name = $request->name;
        $gadget->categories_id = $request->categories_id;
        $gadget->tahun_keluaran = $request->tahun_keluaran;
        $gadget->harga = $request->harga;
        $gadget->description = $request->description;

        // Simpan gambar jika ada
        if ($request->hasFile('image')) {
            $filename = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/pict', $filename);
            $gadget->image = $filename;
        }

        $gadget->save();

        return redirect()->route('admin.gadgets.dashboard')->with('success', 'Gadget berhasil ditambahkan!');
    }
}
