<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <form action="/admin/visi/update" method="POST" enctype="multipart/form-data">
                    @method('PUT')
               
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Visi</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Visi" value="{{ isset($visi) ? $visi->name :  old('name') }}">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
        
                            <div class="form-group">
                                <label for="">Gambar</label>
                                <input type="file" name="cover" class="form-control @error('cover') is-invalid @enderror" placeholder="*********" >
                                
                                @error('cover')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
        
                                @if (isset($visi))
                                    <img src="/{{ $visi->cover }}" width="100%" class="mt-4" alt="">
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Misi</label>
                                <textarea name="desc" class="form-control @error('desc') is-invalid @enderror" id="" cols="30" rows="10">{{ $visi->desc }}</textarea>
                                    @error('desc')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>