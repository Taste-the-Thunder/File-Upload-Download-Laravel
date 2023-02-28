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
        $validatedData = $request->validated();
        $validatedData['image'] = $request->file('image')->store('PatientsData/'.$id.'/image');

        return response(Response::HTTP_CREATED);
    }
}
