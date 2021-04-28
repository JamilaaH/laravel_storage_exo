<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FichierController extends Controller
{
    public function index(){
        $images = Image::all();
        return view ('backoffice.fichiers.indexFichier', compact('images'));
    }

    public function create(){
        return view('backoffice.fichiers.createFichier');
    }

    public function store(Request $request){
        // dd($request->file('img'));
        // dans le storage
        Storage::put('public/img/' , $request->file('img'));

        // dans la db 
        $image = new Image();
        $image->src = $request->file('img')->hashName();
        $image->save();
        return redirect()->route('fichiers.index');
    }

    public function destroy(Image $id)  
    {
        $image = $id;

        Storage::delete('public/img/'. $image->src);

        $image->delete();
        return redirect()->back();
    }
}
