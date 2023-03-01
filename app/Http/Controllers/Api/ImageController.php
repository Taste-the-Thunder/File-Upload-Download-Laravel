<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImageStoreRequest;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ImageController extends Controller
{
    public function imageStore(ImageStoreRequest $request)
    {
        $id = 3;
        $validator = $request->validated();
        // if ($validator->fails()) {
        //     return response()->json(['response' => 'error', 'message'=> $validator->errors(),'validation_error'=> $validator->errors()],400);
        // }
        // $unique_name= time() . '.' . $request->profile_picture->extension();;
        //         Image::make($request->profile_picture)->save(('images/profile_pictures/').$unique_name);
        $validator['image'] = $request->file('image')->store('PatientsData/'.$id.'/image');
        return response(Response::HTTP_CREATED);

    }
}
