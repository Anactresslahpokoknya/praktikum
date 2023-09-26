<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/icons/bootstrap-icons.min.css">
</head>
<body class="bg-body-danger">
    @yield('name')
    <div class="container">
        <div class="card shadow mt-4">
            <div class="card-header d-flex text-bg-primary bg-gradient justify-content-between">
                <h4 class="card-title">Data</h4>
                <a href="{{url('siswa/tambah')}}" class="btn btn-light">
                    <i class="bi bi-plus-circle-fill"></i> Tambah
                </a>
            </div>
            <div class="card-body">
                <table class="table table-sm table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>nisn</th>
                            <th>nama</th>
                            <th>alamat</th>
                            <th >no telepon</th>
                            <th >kelas</th>
                            <th >aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datasiswa as $faizal)
                        <tr>
                            <td>{{$faizal->nisn}}</td>
                            <td>{{$faizal->nama}}</td>
                            <td>{{$faizal->alamat}}</td>
                            <td>{{$faizal->no_telp}}</td>
                            <td>{{$faizal->kode_kelas}}</td>
                            <td >
                                <a href="{{url('siswa/edit/'.$faizal->nisn)}}" class="btn btn-success btn-sm">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="{{url('siswa/hapus/'.$faizal->nisn)}}" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash-fill"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>