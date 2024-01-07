<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('siswa.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold">ID Siswa</label>
                                <input type="text" class="form-control @error('id_siswa') is-invalid @enderror" name="id_siswa" placeholder="id_siswa">

                                <!-- error message untuk id siswa -->
                                @error('id_siswa')
                                <div class="alert alert-danger mt-2">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">informasi kesehatan</label>
                                <input type="text" class="form-control @error('informasi_kesehatan') is-invalid @enderror" name="informasi kesehatan" placeholder="informasi kesehatan">

                                <!-- error message untuk informasi kesehatan -->
                                @error('informasi kesehatan')
                                <div class="alert alert-danger mt-2">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">data pendidikan</label>
                                <input type="text" class="form-control @error('data_pendidikan') is-invalid @enderror" name="data pendidikan" placeholder="data_pendidikan">

                                <!-- error message untuk data pendidikan -->
                                @error('data_pendidikan')
                                <div class="alert alert-danger mt-2">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">data kontak</label>
                                <input type="text" class="form-control @error('data_kontak') is-invalid @enderror" name="data kontak" placeholder="data_kontak">

                                <!-- error message untuk data kontak -->
                                @error('data_kontak')
                                <div class="alert alert-danger mt-2">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">data konseling</label>
                                <input type="text" class="form-control @error('data_konseling') is-invalid @enderror" name="data konseling" placeholder="data_konseling">

                                <!-- error message untuk data konseling -->
                                @error('data_konseling')
                                <div class="alert alert-danger mt-2">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">data identitas siswa</label>
                                <input type="text" class="form-control @error('data_identitas_siswa') is-invalid @enderror" name="data identitas siswa" placeholder="data_identitas_siswa">

                                <!-- error message untuk data identitas siswa -->
                                @error('data_identitas_siswa')
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

    <script>
        CKEDITOR.replace('informasi_kesehatan');
        CKEDITOR.replace('data_pendidikan');
        CKEDITOR.replace('data_kontak');
        CKEDITOR.replace('data_konseling');
        CKEDITOR.replace('data_identitas_siswa');
    </script>
</body>
</html>