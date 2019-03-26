<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tutorial Laravel #21 : CRUD Eloquent Laravel - www.malasngoding.com</title>
    </head>
    <body>
        <div class="container">
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>