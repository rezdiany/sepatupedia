<div class="container">
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"> <a href="{{route('products')}}" class="text-dark">List Sepatu</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sepatu Detail</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card gambar-product">
                <div class="card-body">
                    <img src="{{url ('assets/sepatu')}}/{{ $product->gambar}}" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2><strong>{{$product->nama}}<strong> <br>
                        @if($product->is_ready == 1)
                        <h5 style="color: white;"><span class="badge bg-success"><i class="fas fa-check"></i> Ready Stock</h5></span>
                        @else
                        <h5 style="color: white;"> <span class="badge bg-danger"><i class="fas fa-times"></i>
                                Stok Habis</h5>
                        </span>
                        @endif
            </h2>
            <h4>Rp. {{number_format($product->harga)}}
            </h4>
            <hr>
            <div class="row" style="font-weight: normal;">
                <div class="col">
                    <form wire:submit.prevent="masukkanKeranjang">
                        <table class="table" style="border-top: hidden;">
                            <tr>
                                <td>Brand</td>
                                <td>:</td>
                                <td>
                                    <img src="{{url ('assets/logo')}}/{{ $product->brand->gambar}}" class="img-fluid" width="120">

                                </td>
                            </tr>
                            <tr>
                                <td>Bahan</td>
                                <td>:</td>
                                <td>
                                    {{$product->bahan}}
                                </td>
                            </tr>
                            <tr>
                                <td>Berat</td>
                                <td>:</td>
                                <td>
                                    {{$product->berat}}

                                </td>
                            </tr>
                            <tr>
                                <td>Jumlah</td>
                                <td>:</td>
                                <td>
                                    <input id="jumlah_pesanan" type="number" class="form-control @error('jumlah_pesanan') is-invalid @enderror" wire:model="jumlah_pesanan" value="{{ old('jumlah_pesanan') }}" required autocomplete="jumlah_pesanan" autofocus min="1">

                                    @error('jumlah_pesanan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </td>
                            </tr>
                            <tr>
                                <td>Ukuran</td>
                                <td>:</td>
                                <td>

                                    <select id="ukuran" type="number" class="form-control @error('ukuran') is-invalid @enderror" wire:model="ukuran" value="{{ old('ukuran') }}" required autocomplete="name" autofocus>
                                        <option value=""></option>
                                        <option value="37">37</option>
                                        <option value="38">38</option>
                                        <option value="39">39</option>
                                        <option value="40">40</option>
                                        <option value="41">41</option>
                                        <option value="42">42</option>
                                        <option value="43">43</option>
                                        <option value="44">44</option>
                                        <option value="45">45</option>


                                    </select>

                                    @error('ukuran')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>

                                    @enderror
                                </td>

                            </tr>
                            @if($jumlah_pesanan > 1)
                            @else
                            <tr>
                                <td colspan="3"><strong> Saddle Sepatu (Isi Jika Ingin Tambah Saddle) </strong></td>
                            </tr>
                            <tr>
                                <td>Harga Saddle</td>
                                <td>:</td>
                                <td>
                                    Rp. {{number_format($product->harga_saddle)}}
                                </td>
                            </tr>
                            <tr>
                                <td>Saddle</td>
                                <td>:</td>
                                <td>
                                    <input id="saddle" type="number" class="form-control @error('saddle') is-invalid @enderror" wire:model="saddle" value="{{ old('saddle') }}" autocomplete="name" autofocus min="0" max="1">

                                    @error('saddle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </td>
                            </tr>
                            @endif
                            <tr>
                                <td colspan="3">
                                    <button type="submit" class="btn btn-dark btn-block" @if($product->is_ready !== 1) disabled @endif><i class="fas fa-shopping-cart"></i> Masukkan Keranjang</button>

                                </td>
                            </tr>

                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>