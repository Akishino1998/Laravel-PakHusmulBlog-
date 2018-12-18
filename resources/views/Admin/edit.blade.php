<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Baru</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <form action="/admin/update" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul" size="21" value="{{ $data2->judul }}"></td>
            </tr>
            <tr>
                <td>Genre</td>
                <td>
                    <select name="id_genre" id="genre">
                        @foreach ($data as $item)
                            <option value="{{ $item->id_genre }}">{{ $item->jenis_genre }}</option>
                        @endforeach
                    </select>

                </td>
            </tr>
            <tr>
                <td>Sinopsis</td>
                <td><textarea name="sinopsis" id="sinopsis" cols="20" rows="10">{{ $data2->sinopsis }}</textarea></td>
            </tr>
            <tr>
                <td>Sutradara</td>
                <td><input type="text" name="sutradara" size="21" value="{{ $data2->sutradara }}"></td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td><input type="text" name="penulis" size="21" value="{{ $data2->penulis }}"></td>
            </tr>
            <tr>
                <td>Episode</td>
                <td><input type="text" name="episode" size="21" value="{{ $data2->episode }}"></td>
            </tr>
            <tr>
                <td>Jadwal Tayang</td>
                <td><input type="date" name="jadwal_tayang" size="21" value="{{ $data2->jadwal_tayang }}"></td>
            </tr>
            <tr>
                <td>Waktu Tayang</td>
                <td><input type="text" name="waktu_tayang" size='21' value="{{ $data2->waktu_tayang }}"></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><input type="file" class="form-control-file" name="foto" accept="image/png, image/jpeg, image/gif"></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit" class="btn btn-primary">Simpan</button></td>
            </tr>
        </table>
        <input type="hidden" name="id_drakor" value="{{ $data2->id_drakor }}">
        {{ csrf_field() }}
    </form>
</body>
</html>