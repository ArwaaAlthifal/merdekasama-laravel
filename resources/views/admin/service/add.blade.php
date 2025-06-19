<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                @if (isset($service))
                <form action="/admin/service/{{ $service->id }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                @else
                <form action="/admin/service" method="POST" enctype="multipart/form-data">
                    
                @endif
                    @csrf
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Title" value="{{ isset($service) ? $service->title :  old('title') }}">
                        @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <input type="text" name="desc" class="form-control @error('desc') is-invalid @enderror" placeholder="Deskripsi" value="{{ isset($service) ? $service->desc :  old('desc') }}">
                        @error('desc') 
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" placeholder="*********" >
                        
                        @error('gambar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        @if (isset($service))
                            <img src="/{{ $service->gambar }}" width="100%" class="mt-4" alt="">
                        @endif
                            
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>