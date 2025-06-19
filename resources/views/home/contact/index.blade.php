<section class="contact-bg w-100">
    <div class="container">
        <div class="contact my-5">
            <div class="row align-items-center ">
                <div class="col">
                    <h1 class="cont-land">Ada yang bisa dibantu?</h1>
                    <p class="my-3">KONTAK KAMI</p>
                </div>
                <div class="col">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="w-100 my-5 justify-content-center">
    <div class="container">
        <div class="contact py-5">
            <div class="row align-items-top ">
                <div class="describe col">
                    <h3>MERDEKA <br>SAMA</h3>
                    <p class="my-3">Terima kasih sudah mampir! Jika kamu <br>memiliki pertanyaan seputar Merdeka Sama, <br>hubungi kami melalui kontak di laman ini.</p>
                    <form action="/contact/send" method="POST">
                        @csrf
                        <div class="form-group">
                            <Label>Nama</Label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="" placeholder="Masukan Nama Anda">
                            @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        </div>
                        
                        <div class="form-group">
                            <Label>Kritik dan Saran</Label>
                            <input type="text" name="desc" cols='30' rows='10'  class="form-control @error('desc') is-invalid @enderror" id="" placeholder="Masukan Saran dan Kritik Anda">
                            @error('desc')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        </div>

                        <button type="submit" class="btn btn-success mt-3">Kirim</button>
                    </form>
                </div>
                <div class="describe col">
                    <h4 class="mb-4">Kantor Merdeka Sama</h4>
                    <p class="mb-4">Otista Raya,<br>
                        Jl. Otista Raya No.7,<br>
                        Jakarta Timur, Indonesia 10310</p>

                    <div class="d-flex align-items-center mb-4">
                        <div>
                            <i class="fas fa-phone fa-2x me-3"></i>
                        </div>
                        <div>
                            <h5>Telepon</h5>
                            <h6>(021) 8190802</h6>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <div>
                            <i class="fas fa-envelope fa-2x me-3"></i>
                        </div>
                        <div>
                            <h5>Email</h5>
                            <h6>merdeka_sm@yahoo.com</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>