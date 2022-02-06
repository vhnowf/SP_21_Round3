<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Models\ReturnProduct;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\ReturnProduct\ReturnProductRepository;

class ReturnProductController extends Controller
{

    public function index()
    {
      $returnproducts = ReturnProduct::all();
      return view('admin.returnproducts.index', compact('returnproducts'));
    }

    public function show(ReturnProduct $returnproduct)
    {
      return view('admin.returnproducts.show', compact('returnproduct'));
    }
    
    public function destroy($id, ReturnProductRepository $returnProductRepository)
    {
      $returnProductRepository->delete($id);
    }

}
