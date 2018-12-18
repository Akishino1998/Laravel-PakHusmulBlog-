<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drakor;
use App\Genre;
class DrakorController extends Controller
{
    public function index(){
        $data = Drakor::all();
        return view('index', compact('data'));
    }
    public function show($id){
        $item = Drakor::all()->find($id);
        // dd($item);
        return view('Drakor.show',compact('item'));
    }
    public function genre($id){
        $data = Drakor::all()->where('id_genre',$id);
        return view('Drakor.genre',compact('data'));
    }
}
