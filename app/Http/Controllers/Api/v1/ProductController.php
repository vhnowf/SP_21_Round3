<?php

namespace App\Modules\User\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Validators\QuestionValidator;
use App\Validators\BaseValidatorInterface;
use DB;

class ProductController extends Controller
{
    protected $product;
    protected $validator;

    public function __construct(QuestionValidator $validator)
    {
        $this->question = new Question();
        $this->validator = $validator;  
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $questions = $this->question->where('status',2)->with('tag', 'user', 'answer.vote', 'vote')->orderBy('created_at', 'DESC')->paginate(5);
        $count = $this->question->where('status',2)->count();
        // dd($count);
        // dd($questions);

        return view('User::products.index', compact('questions', 'count'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $dataForm = $request->question;
            $user = auth()->user();
            $dataForm['owner_id'] = $user->id;
            $dataForm['status'] = 2;
            $question = Question::create($dataForm);
            // $tag = Tag::where('name', $dataForm['tag'])->first();
            // if ($tag) {
            //     $tag_question = QuestionHasTag::insert('')
            // }
            // $question->tag()->create($dataForm['tag']);

            DB::commit();

            return response()->json([
                'status' => 200,
                'message' => __('Post question successfully!'),
                'redirect_url' => route('questions.index'),
            ]);
        } catch (Exception $e) {
            DB::rollback();

            return response()->json([
                'status' => 500,
                'message' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = $this->question->where('id', $id)->with('tag', 'user', 'answer.user', 'answer.vote', 'vote')->first();
        return view('User::questions.detail', compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function getTag(Request $request)
    {
        $name = $request->name;
        $tags = Tag::where('name','like', '%'.$name.'%')->with('questions')->get();

        return response()->json([
            'tags' => $tags,
        ]);
    }

    public function search(Request $request)
    {
        $title = $request->keyword;
        $questions = $this->question->where('title','like', '%'.$title.'%')->orderBy('created_at', 'desc')->with('user', 'tag', 'vote')->paginate(5);
        $count = $this->question->where('title','like', '%'.$title.'%')->with('user', 'tag')->count();

        return view('User::questions.search', compact('questions', 'count'));
    }
}
