<?php

namespace App\Http\Controllers\ReturnProduct;

use App\Http\Requests\CreateReturnProductRequest;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Models\ReturnProduct;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ReturnProduct\ReturnProductRepository;

class ReturnProductController extends Controller
{

    public function index()
    {
        $returnproducts = ReturnProduct::all();

        return view('returnproducts.index', compact('returnproducts'));
    }

    public function store(CreateReturnProductRequest $request, ReturnProductRepository $returnProductRepository)
    {
       $formData['name'] = $request->name;
       $formData['email'] = $request->email;
       $formData['phone'] = $request->phone; 
       $formData['order_id'] = $request->order_id;
       $formData['product_name'] = $request->product_name;
       $formData['product_code'] = $request->product_code;
       $formData['reason'] = $request->reason;
       $formData['product_quantity'] = $request->product_quantity;
       $formData['other_details'] = $request->other_details;
       $returnProductRepository->create($formData);
       // if ($request->input('photo', false)) {
         //   $returnproduct->addMedia(storage_path('tmp/uploads/' . $request->input('photo')))->toMediaCollection('photo','public');
       // }

        //if ($media = $request->input('ck-media', false)) {
         //   Media::whereIn('id', $media)->update(['model_id' => $returnproduct->id]);
        //}
        
        return redirect()->route('home');
    }
}
