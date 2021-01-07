<div class="container">

    {{-- Banner --}}
    <div class="banner">
        <img src="{{url ('assets/slider/slider1.png')}}" alt="">
    </div>
    {{--Pilih Brand --}}
    <section class="pilih-brand mt-4">
        <h3><strong>Pilih Brand </strong>
            <a href="{{route('products')}}" class="btn btn-dark float-right"><i class="far fa-eye"></i> Lihat Semua</a>
        </h3>
        <div class="row mt-4">
            @foreach($brands as $brand)
            <div class="col">
                <a href="{{route('products.brand', $brand->id)}}">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <img src="{{url ('assets/logo')}}/{{ $brand->gambar}}" class="img-fluid">
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>
    {{--BEST PRODUCT --}}
    <section class="products mt-5 mb-5">
        <h3><strong>Best Products</strong></h3>
        <div class="row mt-4">
            @foreach($products as $product)
            <div class="col-md-3">
                <div class="card mb-3">
                    <div class="card-body text-center">
                        <img src="{{url ('assets/sepatu')}}/{{ $product->gambar}}" class="img-fluid">
                        <div class="row mt-2 tinggi">
                            <div class="col-md-12">
                                <h5 class="tinggi"><strong>{{ $product->nama}}</strong></h5>
                                <h5>Rp. {{number_format($product->harga)}}</h5>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <a href="{{route('products.detail', $product->id)}}" class="btn btn-dark btn-block"><i class="far fa-eye"></i> Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>