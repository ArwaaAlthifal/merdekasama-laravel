<div class="serve">
    <div class="container">
        <div class="layanan my-5">
            <div class="row align-items-center ">
                <div class="col">
                    <h3>Layanan Kami</h3>
                    <p>Anda dapat melihat semua layanan kami disini</p>
                </div>
                <div class="col">
                    <img src="/img/layanan.jpg" width="100%" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="servetext text-center">
        <h2 class="mb-0">Layanan Kami</h2>
        <p class="mb-5">geser untuk melihat layanan kami</p>
    </div>

    <div class="row mb-3 d-flex">
        @foreach ($service as $item)
        
        <div class="col-md-3">
            <div class="card text-center mb-4">
                <div class="wrapper-service">
                    <img class="img-service mt-3 mb-3" src="/{{ $item->gambar }}" width="100%" alt="">
                </div>
                <h4>{{ $item->title  }}</h4>
                <p>{{ $item->desc }}</p>
                {!! Illuminate\Support\Str::limit($item->body, 100) !!}
            </div>
        </div>

        @endforeach
    </div>
</div>

