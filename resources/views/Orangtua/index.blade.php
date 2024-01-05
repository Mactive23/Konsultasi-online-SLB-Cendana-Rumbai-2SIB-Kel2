@extends('layoutss.main')
@section('content')
<div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('Orangtua.create') }}" class="btn btn-md btn-success mb-3">TAMBAH Data Orangtua</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Username</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Level</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $Orangtua)
                                <tr>
                                    
                                    <td>{{ $Orangtua->username}}</td>

                                    <td>{{ $Orangtua->password}}</td>

                                    <td>{{ $Orangtua->level}}</td>

                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{route('Orangtua.destroy', $Orangtua->id_user) }}" method="post">
                                            <a href="{{route('Orangtua.edit', $Orangtua->id_user) }}" class="btn btn-sm btn-primary">EDIT</a>

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
    


