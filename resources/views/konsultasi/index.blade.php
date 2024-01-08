@extends ('layouts.main')
@section ('content')
<body style="background: lightgray">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('konsultasi.create') }}" class="btn btn-md btn-success mb-3">OPSI KONSULTASI</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                   
                                    <th scope="col">opsi</th>
                                    <th scope="col">deskripsi</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $konsultasi)
                                <tr>
                                    
                              

                                    <td>{{ $konsultasi->opsi}}</td>

                                    <td>{{ $konsultasi->deskripsi}}</td>

                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{route('konsultasi.destroy', $konsultasi->id_konsultasi) }}" method="post">
                                            <a href="{{route('konsultasi.edit', $konsultasi->id_konsultasi) }}" class="btn btn-sm btn-primary">EDIT</a>

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                    Data informasi belum
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