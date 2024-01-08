@extends('layouts.main')
@section ('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('konsultasi.update', $data->id_konsultasi) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                           
                                <label class="font-weight-bold">OPSI</label>

                                <input type="text" class="form-control @error('opsi') is-invalid @enderror" name="opsi" value="{{ $data->opsi }}">
                                <!-- error message untuk opsi -->
                                @error('opsi')
                                <div class="alert alert-danger mt-2">

                                    {{ $message }}
                                </div>
                                @enderror
                   
                            
                            <div class="form-group">
                                <label class="font-weight-bold">DESKRIPSI</label>

                                <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ $data->deskripsi }}">

                                <!-- error message untuk deskripsi -->
                                @error('deskripsi')
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