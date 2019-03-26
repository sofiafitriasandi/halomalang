@extends('layouts.app')

@section('content')
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

                    You are logged in!
                </div>
				
				
				<div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Berita - <a href="https://www.malasngoding.com/category/laravel" target="_blank">HaloMalang.Com</a>
                </div>
                <div class="card-body">
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
							
            </div>
        </div>
    </div>
</div>
@endsection
