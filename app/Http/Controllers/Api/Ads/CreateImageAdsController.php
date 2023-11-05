<?php

namespace App\Http\Controllers\Api\Ads;
use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Requests\ImageRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;

class CreateImageAdsController extends Controller
{

    public function createImages(ImageRequest $request){
       

        $validatedData=$request->validated();

            //Validation passed, processing with storage

            $image = $request->file('file');
            $name = "toto";
            $extension = $image->getClientOriginalExtension();

            $allowedfileExtension=['jpg','png','jpeg'];

            $check = in_array($extension,$allowedfileExtension);

            //Storing file in disk
            $fileName = time().'_'.$image->getClientOriginalName().'.'.$image->getClientOriginalExtension();
            $image->storeAs('product-images', $fileName);

            //Add image to database (product_images table)
                // $productImage = new \App\Models\productImage;
                // $productImage->path = $fileName;
                // $productImage->product_id = $product->id;
                // $productImage->save();


            return response('{success : Image received}', 200)
                  ->header('Content-Type', 'application/json');
         
    }
}
