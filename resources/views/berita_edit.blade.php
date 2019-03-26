<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tutorial Laravel #21 : HaloMalang.Com</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Berita - <strong>EDIT DATA</strong> - <a href="https://www.malasngoding.com/category/laravel" target="_blank">HaloMalang.com</a>
                </div>
                <div class="card-body">
                    <a href="/berita" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/berita/update/{{ $berita->id_berita }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" placeholder="name .." value="{{ $berita->name }}">
 
                            @if($errors->has('name'))
                                <div class="text-danger">
                                    {{ $errors->first('name')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type = "date" name="tanggal" class="form-control" placeholder="tanggal .." value="{{ $berita->tanggal}}"> 

                             @if($errors->has('tanggal'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggal')}}
                                </div>
                            @endif
 
                        </div>
						
						<div class="form-group">
                            <label>Penulis</label>
                            <input type="text" name="penulis" class="form-control" placeholder="isi .." value="{{ $berita->penulis}}">
 
                             @if($errors->has('penulis'))
                                <div class="text-danger">
                                    {{ $errors->first('penulis')}}
                                </div>
                            @endif
 
                        </div>
						
						
						<div class="form-group">
                            <label>Isi</label>
                            <textarea name="isi" class="form-control" placeholder="isi ..">{{ $berita->isi}} </textarea>
 
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