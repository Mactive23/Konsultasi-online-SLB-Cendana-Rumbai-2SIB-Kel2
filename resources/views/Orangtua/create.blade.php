<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Orangtua</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: lightgray">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('Orangtua.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="font-weight-bold">USERNAME</label>

                                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="username">

                                <!-- error message untuk username -->
                                @error('username')
                                <div class="alert alert-danger mt-2">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">PASSWORD</label>

                                <input type="text" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password">

                                <!-- error message untuk password -->
                                @error('password')
                                <div class="alert alert-danger mt-2">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">LEVEL</label>

                                <input type="text" class="form-control @error('level') is-invalid @enderror" name="level" placeholder="level">

                                <!-- error message untuk level -->
                                @error('level')
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
</body>

</html>
