<?php

namespace App\services\Photos;



use Image;
use Illuminate\Support\Facades\Storage;
use App\Interfaces\Photos\SaveInFolderInterface;

class SaveInFolderService implements SaveInFolderInterface{

    public function saveIn($request, string $folderName)
    {


            $image = $request;
            $fileName = time() . '.' . $image->getClientOriginalExtension();

           $img = Image::make($image);
           $img->resize(120, 120, function ($constraint) {
              $constraint->aspectRatio();
            });


           $img->stream(); // <-- Key point

            //dd();
            Storage::disk('local')->put('profile'.'/'.$fileName, 'public');
            return $img;
    }
}
