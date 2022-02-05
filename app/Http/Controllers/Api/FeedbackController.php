<?php

namespace App\Http\Controllers\Api;
use App\Models\Feedback;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{
    
    protected $feedback;

    public function __construct(Feedback $feedback){
        $this->feedback = $feedback;
    }

    public function show() {
        return view('feedback.index');
    }

  
    public function handleForm(Request $request) {
        $messages = [
            'email.email' => 'Định dạng email không chính xác',
            'email.required' => 'Phải nhập email',
            'subject.required' => 'Bắt buộc phải nhập chủ đề',
            'subject.max' => 'Chủ đề không được vượt quá 50 ký tự',
            'message.required' => 'Nội dung mô tả góp ý bắt buộc nhập'
        ];
        
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required|max:50',
            'message' => 'required|max:200'
        ], $messages);
    }

       /**
     * Create Feedback
     * @OA\Post (
     *     path="/feedback",
     *     tags={"Feedback"},
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *             required={"user_id","content"},
     *             @OA\Property(property="user_id", type="number", example = "1"),
     *             @OA\Property(property="content", type="string", example = "Tôi rất hài lòng với dịch vụ chăm sóc khách hàng ở đây" )
     *             )
     *         )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="success",
     *          @OA\JsonContent(
     *                  @OA\Property(property="Success", type="string", example="Send a feedback successfully")
     *          )
     *      ),
     *      @OA\Response( * response=403, * description="API key is missing.")
     * )
     */
    public function store(Request $request) {
        $input = $request->all();
        $feedback = Feedback::create($request->all());

       // return response()->json($feedback);
       return response()->json([
        "Success" => "Send a feedback successfully"
    ], 200);
    }
}