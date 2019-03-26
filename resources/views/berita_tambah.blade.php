<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tambah : CRUD Eloquent Laravel - HaloMalang.Com</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Berita - <strong>TAMBAH DATA</strong> - <a href="https://www.malasngoding.com/category/laravel" target="_blank">HaloMalang.Com</a>
                </div>
                <div class="card-body">
                    <a href="/berita" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/berita/store">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" placeholder="name...">
 
                            @if($errors->has('name'))
                                <div class="text-danger">
                                    {{ $errors->first('name')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type= "date" name="tanggal" class="input-tanggal" placeholder="date..."></textarea>
 
                             @if($errors->has('date'))
                                <div class="date">
                                    {{ $errors->first('date')}}
                                </div>
                            @endif
 
                        </div>
						
						<div class="form-group">
                            <label>Penulis</label>
                            <textarea name="penulis" class="form-control" placeholder="penulis..."></textarea>
 
                             @if($errors->has('penulis'))
                                <div class="text-danger">
                                    {{ $errors->first('penulis')}}
                                </div>
                            @endif
 
                        </div>
						
						<div class="form-group">
                            <label>Isi</label>
                            <textarea name="isi" class="form-control" placeholder="isi..."></textarea>
 
                             @if($errors->has('isi'))
                                <div class="text-danger">
                                    {{ $errors->first('isi')}}
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