<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Mahasiswa CRUD</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Mahasiswa - <strong>EDIT DATA</strong>
                </div>
                <div class="card-body">
                    <a href="/mahasiswa" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/mahasiswa/update/{{ $mahasiswa->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama mahasiswa .." value=" {{ $mahasiswa->nama }}">
 
                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Alamat mahasiswa .."> {{ $mahasiswa->alamat }} </textarea>
 
                             @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif
 
                        </div>
                         <div class="form-group">
                            <label>nim</label>
                            <input type="text" name="nim" class="form-control" placeholder="Nim mahasiswa .." value=" {{ $mahasiswa->nim }}">
 
                            @if($errors->has('nim'))
                                <div class="text-danger">
                                    {{ $errors->first('nim')}}
                                </div>
                            @endif
 
                        </div>
                         <div class="form-group">
                            <label>no hp</label>
                            <input type="text" name="no_hp" class="form-control" placeholder="no hp mahasiswa .." value=" {{ $mahasiswa->no_hp }}">
 
                            @if($errors->has('no_hp'))
                                <div class="text-danger">
                                    {{ $errors->first('no_hp')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>