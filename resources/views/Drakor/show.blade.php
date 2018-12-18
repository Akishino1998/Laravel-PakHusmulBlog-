@extends('layouts.master')
@section('title','HOME | Drama Korea')

@section('konten')
<hr>
<div class="row">
    <div class="col-6">
        <h1>Drama Korea {{ $item->judul }}</h1>
        <img src="{{ asset('/image/') }}/{{ $item->foto }}" alt="" width="500">
        
    </div>
    <div class="col-6 ">
        <br><br>
        <table class="keterangan">
            <tr>
                <th>Sinopsis {{ $item->judul }}</th>
            </tr>
            <tr>
                <td>{{ $item->sinopsis }}</td>
            </tr>
            <tr>
                <th>Sutradata</th>
            </tr>
            <tr>
                <td> {{ $item->sutradara }}</td>
            </tr>
            <tr>
                <th>Penulis</th>
            </tr>
            <tr>
                <td>{{ $item->penulis }}</td>
            </tr>
            <tr>
                <th>Genre</th>
            </tr>
            <tr>
                <td> <a href="../genre/{{ $item->Drakor->id_genre }}">{{ $item->Drakor->jenis_genre }}</a> </td>
            </tr>
            <tr>
                <th>Jumlah Episode</th>
            </tr>
            <tr>
                <td>{{ $item->episode }}</td>
            </tr>
            <tr>
                <th>Waktu Tayang</th>
            </tr>
            <tr>
                <td>{{ $item->waktu_tayang }}</td>
            </tr>
            <tr>
                <th>Jadwal Tayang</th>
            </tr>
            <tr>
                <td>{{ $item->jadwal_tayang }}</td>
            </tr>
        </table>
    </div>
</div>
    
@endsection