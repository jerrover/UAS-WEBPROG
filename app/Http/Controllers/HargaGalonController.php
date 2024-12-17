<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HargaGalon;

class HargaGalonController extends Controller
{
    public function index()
    {
        $harga = HargaGalon::first(); // Ambil data pertama dari tabel harga_galon
        if (!$harga) {
            // Jika data kosong, buat data baru
            $harga = HargaGalon::create(['price' => 0]);
        }
        return view('edit-harga-galon.index', compact('harga'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'harga' => 'required|numeric|min:0',
        ]);

        $harga = HargaGalon::findOrFail($id);
        $harga->price = $request->harga;
        $harga->save();

        return redirect()->route('edit-harga-galon.index')->with('success', 'Harga galon berhasil diperbarui.');
    }
}
