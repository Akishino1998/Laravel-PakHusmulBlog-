<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Storage;
use DB;
use App\Drakor;
use App\Genre;
class adminController extends Controller
{
    public function index(){
        $data = Drakor::all();
        return view('admin.index',compact('data'));
    }
    public function create(){
        $data = Genre::all();
        return view('admin.TambahBaru',compact('data'));
    }
    public function simpan(Request $request){
        // dd($request->genre);
        $data = $request->all();
        Drakor::create($data);
        $id = Drakor::all()->MAX('id_drakor');
        // dd($id);
        if ($request->hasFile('foto')) {
            $image      = $request->file('foto');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();

            $img = Image::make($image->getRealPath());
            $img->resize(300, 400, function ($constraint) {
                $constraint->aspectRatio();                 
            });
            $img->stream(); // <-- Key point
            Storage::disk('local')->put('public/image'.$fileName, $img, 'public');
            DB::table('drakor')
                ->where('id_drakor', $id)
                ->update([
                    'foto' => $fileName,
                ]);
            // return Storage::url($fileName);
            return redirect('/admin');
        }else{
            return redirect('/admin');
        }
    }
    public function edit($id){
        $data = Genre::all();
        $data2 = Drakor::all()->find($id);
        return view('admin.edit',compact('data','data2'));
    }
    public function delete($id){
        $data = Drakor::find($id);
        $data->delete();
        return redirect('/admin');
    }
    public function update(Request $request){
        $data = Drakor::find($request->id_drakor);
        $data->id_genre = $request->id_genre;
        $data->judul = $request->judul;
        $data->sinopsis = $request->sinopsis;
        $data->sutradara = $request->sutradara;
        $data->penulis = $request->penulis;
        $data->episode = $request->episode;
        $data->waktu_tayang = $request->waktu_tayang;
        $data->jadwal_tayang = $request->jadwal_tayang;
        $data->save();
        $id = $request->id_drakor;
        if ($request->hasFile('foto')) {
            $image      = $request->file('foto');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();

            $img = Image::make($image->getRealPath());
            $img->resize(300, 400, function ($constraint) {
                $constraint->aspectRatio();                 
            });
            $img->stream(); // <-- Key point
            Storage::disk('local')->put('public/image'.$fileName, $img, 'public');
            DB::table('drakor')
                ->where('id_drakor', $id)
                ->update([
                    'foto' => $fileName,
                ]);
            // return Storage::url($fileName);
            return redirect('/admin');
        }else{
            return redirect('/admin');
        }

    }
}
