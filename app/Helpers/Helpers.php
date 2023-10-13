<?php

use Illuminate\Support\Facades\File;

if (!function_exists('uploadImage ')) {
    function uploadImage($image, $path)
    {
     if (!File::exists($path)) {
        File::makeDirectory($path, 0755, true);
    }
    $imageName = time() . '.' . $image->getClientOriginalExtension();
    File::put($path  . $imageName, file_get_contents($image));
   return $imageName;
    }
}
if (!function_exists('deleteImage ')) {
    function deleteImage($image, $path)
    {
        $path=public_path($path.$image);
        if(File::exists($path) && !File::isDirectory($path)){
            File::delete($path);
        }
    }
}
