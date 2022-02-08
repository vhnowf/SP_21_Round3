<?php

namespace App\Http\Controllers\Insurance;

use App\Models\Insurance;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Repository\InsuranceRepository;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    public function index() {
        return view('insurance.index');
    }
      
    public function search(Request $request, InsuranceRepository $insuranceRepository)
    {
        $formData['code'] = $request->code;
        $insurance =  $insuranceRepository->find($formData['code']);
        return view('insurance.show', compact('insurance'));
    }
}
