<?php

namespace App\Http\Livewire;

use App\PesananDetail;
use App\Pesanan;
use Illuminate\Support\Facades\Auth;
use App\Product;
use Livewire\Component;

class ProductDetail extends Component
{
    public $product, $jumlah_pesanan, $ukuran, $saddle;
    public function mount($id)
    {
        $productDetail =  Product::find($id);
        if ($productDetail) {
            $this->product = $productDetail;
        }
    }
    public function masukkanKeranjang()
    {
        $this->validate([
            'jumlah_pesanan' => 'required'
        ]);
        //Validasi Jika Belum Login
        if (!Auth::user()) {
            return redirect()->route('login');
        }
        //Menghitung Total Harga
        if (!empty($this->saddle)) {
            $total_harga = $this->jumlah_pesanan * $this->product->harga + $this->product->harga_saddle;
        } else {
            $total_harga = $this->jumlah_pesanan * $this->product->harga;
        }
        //Mengecek User Mempunyai Pesanan Utama yang statusnya 0
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
        //Menyimpan / Update Data Pesanan Utama
        if (empty($pesanan)) {
            Pesanan::create([
                'user_id' => Auth::user()->id,
                'total_harga' => $total_harga,
                'status' => 0,
                'kode_unik' => mt_rand(100, 999),

            ]);
            $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('status', 0)->first();
            $pesanan->kode_pemesanan = 'JP-' . $pesanan->id;
            $pesanan->update();
        } else {
            $pesanan->total_harga = $pesanan->total_harga + $total_harga;
            $pesanan->update();
        }
        //Menyimpan Pesanan Detail
        PesananDetail::create([
            'product_id' => $this->product->id,
            'pesanan_id' => $pesanan->id,
            'jumlah_pesanan' => $this->jumlah_pesanan,
            'saddle' => $this->saddle ? true : false,
            'total_harga' => $total_harga,
            'ukuran' => $this->ukuran
        ]);
        $this->emit('masukKeranjang');
        session()->flash('message', 'Sukses Masuk Keranjang');
        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.product-detail');
    }
}
