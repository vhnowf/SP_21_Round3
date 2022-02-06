<?php

namespace App\Http\Controllers\Feedback;
use App\Models\Feedback;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateFeedbackRequest;
use App\Http\Controllers\FeedbackRepository;

class FeedbackController extends Controller
{
    public function show() {
        return view('feedback.index');
    }
      
    /**
     * @param  CreateFeedbackRequest  $request
     * @param  FeedbackRepository  $feedbackRepository
     * @return RedirectResponse
     */
    public function store(CreateFeedbackRequest $request, FeedbackRepository $feedbackRepository)
    {
        dd($request->all()); 
        $formData['content'] = $request->content;
        $formData['user_id']  = auth()->user()->id;  
        $feedbackRepository->create($formData);
        //return $request->all();
    }

}
