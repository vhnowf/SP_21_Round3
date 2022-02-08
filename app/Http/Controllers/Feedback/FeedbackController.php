<?php

namespace App\Http\Controllers\Feedback;
use App\Models\Feedback;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateFeedbackRequest;
use App\Repository\FeedbackRepository;

class FeedbackController extends Controller
{
    public function show() {
        return view('feedback.index');
    }
      
    public function store(Request $request, FeedbackRepository $feedbackRepository)
    {
       // dd($request->all()); 
        $formData['content'] = $request->message;
        $formData['user_id']  = auth()->user()->id;  
        $feedbackRepository->create($formData);
        return redirect()->route('feedback')->with('success','Send a feedback
        successfully');
    }

}
