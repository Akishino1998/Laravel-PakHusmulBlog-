<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/App.CSS">
    <title>Admin</title>
    <style>
        th {text-align:center}
        .center {text-align:center}
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="/admin/tambahbaru "><button type="button" class="btn btn-primary">Tambah Baru</button></a>
                <table border="1">
                    <thead>
                        <th width="80" align="center">Judul</th>
                        <th>Genre</th>
                        <th heigth="80">Sinopsisi</th>
                        <th width="110">Sutradara</th>
                        <th width="100">Penulis</th>
                        <th>Episode</th>
                        <th width="130">Waktu Tayang</th>
                        <th width ="240">Jadwal Tayang</th>
                        <th width="125">Action</th>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td class="center"> {{ $item->judul }} </td>
                                 <td class="center"> {{ $item->Drakor->jenis_genre }} </td>
                                 <td> {{ $item->sinopsis }} </td>
                                 <td class="center"> {{ $item->sutradara }} </td>
                                 <td class="center"> {{ $item->penulis }} </td>
                                 <td class="center"> {{ $item->episode }} </td>
                                 <td class="center"> {{ $item->waktu_tayang }} </td>
                                 <td class="center"> {{ $item->jadwal_tayang }} </td>
                                 <td>
                                     <a href="admin/edit/{{ $item->id_drakor }}"><button type="button" class="btn btn-success"> Edit </button></a>
                                     <a href="admin/hapus/{{ $item->id_drakor }}"><button type="button" class="btn btn-danger"> Hapus </button></a>
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