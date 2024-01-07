<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Jadwal Konsultasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: lightgray">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('jadwal_konsultasi.update', $jadwalKonsultasi->id_jadwal) }}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">ID Jadwal</label>
                                <input type="text" class="form-control @error('id_jadwal') is-invalid @enderror" name="id_siswa" value="{{ $siswa->id_jadwal }}">
                                @error('id_jadwal')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Murid</label>
                                <input type="text" class="form-control @error('nama_murid') is-invalid @enderror" name="nama_pasien" value="{{ $jadwalKonsultasi->nama_murid }}">
                                @error('nama_pasien')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Waktu Konsultasi</label>
                                <input type="datetime-local" class="form-control @error('waktu_konsultasi') is-invalid @enderror" name="waktu_konsultasi" value="{{ date('Y-m-d\TH:i', strtotime($jadwalKonsultasi->waktu_konsultasi)) }}">
                                @error('waktu_konsultasi')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Keterangan</label>
                                <textarea class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" rows="5" placeholder="Masukkan keterangan">{{ $jadwalKonsultasi->keterangan }}</textarea>
                                @error('keterangan')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                            <a href="{{ route('jadwal_konsultasi.index') }}" class="btn btn-md btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>