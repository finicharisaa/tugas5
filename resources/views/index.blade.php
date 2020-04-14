<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>mahasiswa crud</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Mahasiswa
                </div>
                <div class="card-body">
                    <a href="/mahasiswa/tambah" class="btn btn-primary">Input Mahasiswa Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
								<th>Nim</th>
								<th>No Handphone</th>
								<th>Alamat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mahasiswa as $p)
                            <tr>
                                <td>{{ $p->nama }}</td>
								<td>{{ $p->nim }}</td>
								<td>{{ $p->no_hp }}</td>
								<td>{{ $p->alamat }}</td>
                                <td>
                                    <a href="/mahasiswa/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/mahasiswa/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
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