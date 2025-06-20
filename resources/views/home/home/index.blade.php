<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">

    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="wrapper-img-banner">
                <img src="/img/look3.png" class="img-banner" alt="">
            </div>
            <div class="container">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<section class="d-flex w-100 min-vh-100 align-items-center justify-content-center">
    <div class="container">
        <div class="about my-5 ">
            <div class="row align-items-center ">
                <div class="col">
                   @if($about && $about->cover)
<img src="{{ asset('storage/' . $about->cover) }}" alt="..." />
@else
<p>Gambar belum tersedia</p>
@endif
                </div>
                <div class="col">
                    <h3 class="home-land mb-0">Tentang Kami</h3>
                    <img class="mb-3" src="/img/line.png" width="80" alt="">
                    <p class="mb-4">{{ $about->desc }}</p>
                    <a class="btn selengkapnya" href="/about">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>    
</section>


<div class="container-serve">
    <div class="services">
        <div class="text-center">
            <h3 class="services-land mb-0">Layanan Kami</h3>
            <p class="mb-5">pergi ke halaman layanan untuk melihat semua layanan kami</p>
        </div>

        <div class="row mb-0">
            @foreach ($service as $item) <div class="col md-3">
                <div class="text-center">
                    <div class="card wrapper-service bg-light align-items-center py-4 px-4 mb-5">
                        <img class="img-service mb-4" src="/{{ $item->gambar }}" width="100%" alt="">
                        <h4>{{ $item->title  }}</h4>
                    </div>
                </div>
        </div>

        @endforeach
    </div>

    <div class="text-center">
        <a href="/services" class="btn btn-primary px-4"><i class="fas fa-arrow-right me-2"></i>View More</a>
    </div>
</div>
</div>

<section class="d-flex align-items-center py-5 px-5 mt-5 justify-content-center w-100 min-vh-100">
    <div class="container align-items-center justify-content-center">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col">
                <h1 class="mb-0">Konsultasikan Kebutuhan Anda</h1>
                <img class="mb-3" src="/img/line.png" width="80" alt="">
                <p>
                    Kami siap memberikan pilihan & solusi terbaik untuk cetakan pada perusahaan Anda. Kita bisa berkomunikasi melalui Telephone,  WhatsApp, Zoom Meeting ataupun mengunjungi langsung (Visit) perusahaan Bapak/Ibu untuk membicarakan berbagai kebutuhan.
                </p>
            </div>
            <div class="col align-items-center justify-content-center">
                <div class="cont align-items-center justify-content-center mb-5">
                    <div class="text-center">
                        <img src="/img/delivery.png" width="80px" alt="">
                    </div>
                    <div>
                        <div>
                            <h1>01 Pemesanan</h1>
                        </div>
                        <div>
                            <p>
                                Untuk estimasi lamanya pengerjaan produk akan dilampirkan
                                pada penawaran harga. Lama pengerjaan produk tergantung
                                pada ketersediaan bahan dan banyaknya pesanan. waktu
                                produksi sudah termasuk Quality Control.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="cont align-items-center justify-content-center mb-5">
                    <div class="text-center">
                        <img src="/img/check-list.png" width="80px" alt="">
                    </div>
                    <div>
                        <div>
                            <h1>02 Pengerjaan</h1>
                        </div>
                        <div>
                            <p>
                                Untuk estimasi lamanya pengerjaan produk akan dilampirkan
                                pada penawaran harga. Lama pengerjaan produk tergantung
                                pada ketersediaan bahan dan banyaknya pesanan. waktu
                                produksi sudah termasuk Quality Control.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="cont align-items-center justify-content-center mb-5">
                    <div class="text-center">
                        <img src="/img/truck.png" width="80px" alt="">
                    </div>
                    <div>
                        <div>
                            <h1>03 Pengiriman</h1>
                        </div>
                        <div>
                            <p>
                                Untuk estimasi lamanya pengerjaan produk akan dilampirkan
                                pada penawaran harga. Lama pengerjaan produk tergantung
                                pada ketersediaan bahan dan banyaknya pesanan. waktu
                                produksi sudah termasuk Quality Control.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="contactus bg-light">
    <div class="container">
        <div class="contact my-5">
            <div class="text-center">
                <h3>Hubungi Kami</h3>
                <p>anda dapat bertanya dan menghubungi kami</p>
                <button class="btn btn-success px-4"><i class="fa-brands fa-whatsapp me-2"></i><a href="">Whatsapp</a></button>
                <button class="btn btn-danger px-4"><i class="fa-regular fa-envelope me-2"></i><a href="/contact">Email</a></button>
            </div>
        </div>
    </div>
</section>

<section class="client px-5 pt-5 bg-light">
    <div class="client-container px-3 py-3">
        <div class="text-center mb-3">
            <h2>Client Kami</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-1 mb-3 d-flex align-items-center justify-content-center">
                <img class="mx-4" src="/img/kemenhub.png" width="100%">
                <img class="mx-4" src="/img/dharmais.png" width="100%">
                <img class="mx-4" src="/img/kemenkes.png" width="100%">
                <img class="mx-4" src="/img/disdik.png" width="100%">
                <img class="mx-4" src="/img/dpdri.png" width="100%">
                <img class="mx-4" src="/img/rsudbogor.png" width="100%">
                <img class="mx-4" src="/img/mabes.png" width="100%">
                <img class="mx-4" src="/img/rshaji.png" width="100%">
            </div>
        </div>
    </div>
</section>


