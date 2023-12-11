<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Jadwal Konsultasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body style="background: lightgray">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('jadwal_konsultasi.create') }}" class="btn btn-md btn-success mb-3">Tambah Jadwal Konsultasi</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">ID Jadwal</th>
                                    <th scope="col">Nama Murid</th>
                                    <th scope="col">Waktu Konsultasi</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($jadwalKonsultasi as $jadwal)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $jadwal->id_jadwal }}</td>
                                        <td>{{ $jadwal->nama_murid }}</td>
                                        <td>{{ $jadwal->waktu_konsultasi }}</td>
                                        <td>{{ $jadwal->keterangan }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('jadwal_konsultasi.destroy', $jadwal->id_jadwal) }}" method="post">
                                                <a href="{{ route('jadwal_konsultasi.edit', $jadwal->id_jadwal) }}"
                                                    class="btn btn-sm btn-warning">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            <div class="alert alert-danger">
                                                Data Jadwal Konsultasi belum Tersedia.
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        // message with toastr
        @if(session()->has('success'))
            toastr.success('{{ session('success') }}', 'Berhasil!');
        @elseif(session()->has('error'))
            toastr.error('{{ session('error') }}', 'Gagal!');
        @endif
    </script>
</body>

</html>
