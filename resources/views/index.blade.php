@extends('layouts.master')

@section('title','HOME | Drama Korea')

@section('konten')
<hr>
<div class="row">
    <div class="col-10">
        
            <table border="0">
                @foreach ($data as $item)
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-4">
                                <img class="sub-gambar" src="image/{{ $item->foto }}" alt="">
                            </div>
                            <div class="col-8">
                                <h4 class="title">{{ $item->judul }}</h4>
                                <p>Sinopsis Drama {{ $item->judul }} : {{ $item->sinopsis }}</p>
                                <button class=""><a href="/show/{{ $item->id_drakor }}">See More</a></button>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr></tr>
                 @endforeach
            </table>
       
    </div>
</div>
    
@endsection