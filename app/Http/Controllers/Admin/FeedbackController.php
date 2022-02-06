<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Models\Feedback;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\Feedback\FeedbackRepository;

class FeedbackController extends Controller
{

    public function index()
    {
      $feedbacks = Feedback::all();
      return view('admin.feedbacks.index', compact('feedbacks'));
    }

    public function show(Feedback $feedback)
    {
      return view('admin.feedbacks.show', compact('feedback'));
    }
    
    public function destroy($id, FeedbackRepository $feedbackRepository)
    {
      $feedbackRepository->delete($id);
    }

}
