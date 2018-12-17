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
        $data = Drakor::all()->find($id);
        return view('show',compact('data'));
    }
}
