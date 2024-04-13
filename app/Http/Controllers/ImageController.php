<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(Request $request) {
        // Leer la imágen desde el request
        $imagen = $request->file("file");

        $nombreImagen = Str::uuid() . "." . $imagen->extension();

        $path = public_path("/uploads/" . $nombreImagen);

        // create image manager with desired driver
        $manager = new ImageManager(new Driver());

        // read image from file system
        $image = $manager->read($imagen);

        // resize image proportionally to 300px width
        $image->resize(1000, 1000);

        // save modified image in new format 
        $image->save($path);


        //Contruir una respuesta pra dropzone
        return response()->json(["imagen" => $nombreImagen]);
    }
}
