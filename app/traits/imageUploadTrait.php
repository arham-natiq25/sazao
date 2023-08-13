<?php
namespace App\traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

trait ImageUploadTrait{

    function uploadImage(Request $request , $inputName, $path)  {
        if ($request->hasFile($inputName)) {

            $image = $request->{$inputName};
            $ext = $image->getClientOriginalExtension();
            $imageName = 'media'.uniqid().'.'.$ext;
            $image->move(public_path($path),$imageName);

            return $path.'/'.$imageName;

          }
    }
    function updateImage(Request $request , $inputName, $path,$oldpath=null)  {
        if ($request->hasFile($inputName)) {

            if (File::exists(public_path($oldpath))) {
                File::delete(public_path($oldpath));
                # code...
            }
            $image = $request->{$inputName};
            $ext = $image->getClientOriginalExtension();
            $imageName = 'media'.uniqid().'.'.$ext;
            $image->move(public_path($path),$imageName);

            return $path.'/'.$imageName;

          }
    }

    /** Handle delete image */
    function deleteImage(string $path) {
        if (File::exists(public_path($path))) {
            File::delete(public_path($path));
            # code...
        }
    }
}
