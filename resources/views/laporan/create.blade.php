@extends('layouts.main')
@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('laporan.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold">PERKEMBANGAN ANAK</label>

                                <input type="text" class="form-control @error('perkembangan_anak') is-invalid @enderror" name="perkembangan_anak" placeholder="perkembangan_anak">

                                <!-- error message untuk perkembangan_anak -->
                                @error('perkembangan_anak')
                                <div class="alert alert-danger mt-2">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">REKOMENDASI</label>

                                <input type="text" class="form-control @error('rekomendasi') is-invalid @enderror" name="rekomendasi" placeholder="rekomendasi">

                                <!-- error message untuk rekomendasi -->
                                @error('rekomendasi')
                                <div class="alert alert-danger mt-2">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>

                    <button type="reset" class="btn btn-md btn-warning">RESET</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
@endsection