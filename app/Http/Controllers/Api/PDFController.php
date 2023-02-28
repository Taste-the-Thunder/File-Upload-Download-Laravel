<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PDFStoreRequest;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PDFController extends Controller
{
    public function pdfStore(PDFStoreRequest $request)
    {
        $id = 3;
        $validatedData = $request->validated();
        $validatedData['pdf'] = $request->file('pdf')->store('PatientsData/'.$id.'/pdf');

        return response(Response::HTTP_CREATED);
    }
}
