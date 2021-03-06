@extends ('layouts.app')
@section('content')


<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tutorial Laravel #21 : CRUD Eloquent Laravel - www.malasngoding.com</title>
    </head>
    <body>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
</div>


      
            <div class="card mt-5">
			  <div class="card-body">
                <h3 class="text-center"><a href="https://www.malasngoding.com/category/laravel" target="_blank">HaloMalang.Com</a></h3>
                <h5 class="text-center my-4">kabar berita</h5>
           <table class="table table-bordered table-stripped">
              @section('crud')
			  <thead>
			  
                    <a href="/berita/tambah" class="btn btn-primary">Input Berita Baru</a>
                    <br/>
                    <br/>
					
					
                 
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Penulis</th>
								<th>Isi</th>
								<th>Edit</th>
                            </tr>
						
                        </thead>
                        <tbody>
                            @foreach($berita as $p)
                            <tr>
                                <td>{{ $p->name }}</td>
                                <td>{{ $p->tanggal }}</td>
								<td>{{ $p->penulis }}</td>
								<td>{{ $p->isi }}</td>
								<td> <a href="/berita/edit/{{ $p->id_berita }}" class="btn btn-warning">Edit</a>
                                    <a href="/berita/hapus/{{ $p->id_berita}}" class="btn btn-danger">Hapus</a>
                                </td>
                               
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
				
            </div>
        </div>
		</div>
		
    </body>
</html>

