@extends('layouts.main')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <a href="{{ route('laporan.create') }}" class="btn btn-md btn-success mb-3">TAMBAH LAPORAN</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Perkembangan Anak</th>
                                <th scope="col">Rekomendasi</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $laporan)
                            <tr>
                                
                                <td>{{ $laporan->perkembangan_anak}}</td>

                                <td>{{ $laporan->rekomendasi}}</td>

                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{route('laporan.destroy', $laporan->id_laporan) }}" method="post">
                                        <a href="{{route('laporan.edit', $laporan->id_laporan) }}" class="btn btn-sm btn-primary">EDIT</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <div class="alert alert-danger">
                                Data laporan belum
                                Tersedia.

                            </div>
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
    //message with toastr
    @if (session()-> has('success'))
        toastr.success('{{ session('success') }}', 'BERHASIL!');
    @elseif (session()-> has('error'))
        toastr.error('{{ session('error') }}', 'GAGAL!');
    @endif
</script>
@endsection