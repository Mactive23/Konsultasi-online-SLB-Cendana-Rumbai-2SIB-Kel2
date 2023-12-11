<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('siswa.update', $siswa->id_siswa) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">ID Siswa</label>
                                <input type="text" class="form-control @error('id_siswa') is-invalid @enderror" name="id_siswa" value="{{ $siswa->id_siswa }}">
                                @error('id_siswa')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Informasi Kesehatan</label>
                                <textarea class="form-control @error('informasi_kesehatan') is-invalid @enderror" name="informasi_kesehatan" rows="5" placeholder="Masukkan informasi kesehatan">{{ $siswa->informasi_kesehatan }}</textarea>
                                @error('informasi_kesehatan')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Data Pendidikan</label>
                                <textarea class="form-control @error('data_pendidikan') is-invalid @enderror" name="data_pendidikan" rows="5" placeholder="Masukkan data pendidikan">{{ $siswa->data_pendidikan }}</textarea>
                                @error('data_pendidikan')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Data Kontak</label>
                                <textarea class="form-control @error('data_kontak') is-invalid @enderror" name="data_kontak" rows="5" placeholder="Masukkan data kontak">{{ $siswa->data_kontak }}</textarea>
                                @error('data_kontak')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Data Konseling</label>
                                <textarea class="form-control @error('data_konseling') is-invalid @enderror" name="data_konseling" rows="5" placeholder="Masukkan data konseling">{{ $siswa->data_konseling }}</textarea>
                                @error('data_konseling')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Data Identitas Siswa</label>
                                <textarea class="form-control @error('data_identitas_siswa') is-invalid @enderror" name="data_identitas_siswa" rows="5" placeholder="Masukkan data identitas siswa">{{ $siswa->data_identitas_siswa }}</textarea>
                                @error('data_identitas_siswa')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-md btn-warning">Reset</button>
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