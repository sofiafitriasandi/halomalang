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
                <h5 class="text-center my-4">Data Kategori</h5>
           <table class="table table-bordered table-stripped">
              @section('crud')
			  <thead>
			  
                    <a href="/kategori/tambah" class="btn btn-primary">Input Kategori Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                            </tr>
						
                        </thead>
                        <tbody>
                            @foreach($kategori as $p)
							
                            <tr>
                                <td>{{ $p->nama }}</td>
								<td> <a href="/kategori/edit/{{ $p->id_kategori }}" class="btn btn-warning">Edit</a>
                                    <a href="/kategori/hapus/{{ $p->id_kategori }}" class="btn btn-danger">Hapus</a>
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

