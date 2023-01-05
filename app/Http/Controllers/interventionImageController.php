<?php

namespace App\Http\Controllers;

use App\Helper\ImageManager;
use App\Models\Images;
use Illuminate\Http\Request;

class interventionImageController extends Controller
{
    public function interventionImageAdd(Request $request){

        $image = ImageManager::uploadImage($request->image);
        Images::create(['type'=> $request->type, 'images' => $image]);

        return response()->json(['status' => 200,'message' => 'successfully Insert Data']);
    }

    public function interventionImageView(Request $request){
        $getData = Images::orderBy('id', 'DESC')->get();
        $data = [];
        foreach ($getData as $key => $value) {
            $data[] = array(
                'id' => $value->id,
                'type' => $value->type,
                'image' => env('IMAGE_URL').$value->images
            );
        }
        return response()->json(['status' => 200,'message' => 'Show Data Succefully ','data' => $data]);
    }

    public function interventionImageDelete($id){
        $getData = Images::where('id', $id)->first();
        if($getData)
        {
            ImageManager::removeImage($getData->images);
            Images::where('id', $id)->delete();
            return response()->json(['status' => 200,'message' => 'successfully Delete Data']);
        }
        else{
            return response()->json(['status' => 404,'message' => 'Data Not Found'], $status = 404);
        }
    }

    public function interventionImageUpdate(Request $request, $id){
        $getData = Images::where('id', $id)->first();
        if($getData)
        {
            $image = ImageManager::updateImage($getData->images, $request->image);
            $getData->type = $request->type;
            $getData->images = $image;
            $getData->save();
        }
    }

    public function removeImageQuerJob(){
        $data = "Remove image Run job query";
        dispatch(new \App\Jobs\removeImage($data));
        return response()->json(['status' => 200,'message' => 'remove storage/public/image folder and truncate images table successfully']);
    }




}
