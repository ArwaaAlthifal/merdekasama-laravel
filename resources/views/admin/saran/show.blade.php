<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <a href="/admin/saran" class="btn btn-primary btn-sm px-3 mb-4"><i class="fas fa-arrow-left"></i> Kembali</a>
                    <h4><b>From: {{ $saran->name }}</b></h4>
                    <p>date created: {{ $saran->created_at }}</p>
                    {!! $saran->desc !!}
                </div>
            </div>
        </div>
    </div>
</div>