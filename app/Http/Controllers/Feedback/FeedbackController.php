<?php

namespace App\Http\Controllers\Feedback;
use App\Models\Feedback;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateFeedbackRequest;
use App\Http\Controllers\Feedback\FeedbackRepository;

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
        $formData['content'] = $request->content;
        $formData['user_id']  = auth()->user()->id;  
        $feedbackRepository->create($formData);
        return redirect()->route('home');
    }

}
