<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CommentController extends Controller
{
    protected $comment;

    public function __construct(Comment $comment){
        $this->comment = $comment;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comment = Comment::all();

        return response($comment, 200);
    }

     
    /** 
     *  @OA\Post(
     *  path="/product/{id}/comment",
     *  summary="Create a new comment",
     *  tags={"Comment"},
     *      @OA\Parameter(
     *         in="path",
     *         name="id",
     *         example = "1",
     *         required=true,
     *         @OA\Schema(type="number")
     *     ),
     *     @OA\RequestBody(
     *          @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *             required={"product_id","user_id","comment","photo"},
     *          @OA\Property(property="product_id", type="int", example="1"),
     *          @OA\Property(property="user_id", type="int", example="1"),
     *          @OA\Property(property="comment", type="text", example="Sản phẩm đẹp quá"),
     *          @OA\Property(property="photo", type="string", example="null"),  
     *             )
     *         )
     *      ), 
     *      @OA\Response(
     *          response=200,
     *          description="success",
     *          @OA\JsonContent(
     *               @OA\Property(property="Success", type="string", example="Send a comment successfully"))
     *          )
     *      ),
     *      @OA\Response( * response=403, * description="API key is missing.")
     *  )
     */
    public function create(Request $request)
    {
        $comment = $this->comment->createComment($request->all());

        return response()->json([
            "success" => "Send a comment successfully"
        ], 200);
    }

     /**
     * Show comments of the product has id = $id
     * @OA\Get (
     *     path="/product/{id}/comment",
     *     tags={"Comment"},
     *    @OA\Parameter(
     *         in="path",
     *         name="id",
     *         required=true,
     *         example = "1",
     *         @OA\Schema(type="number")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="success",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 type="array",
     *                 property="comments",
     *                 @OA\Items(
     *                     type="object",
     *                     @OA\Property(
     *                         property="id",
     *                         type="number",
     *                         example=1
     *                     ),
     *                     @OA\Property(
     *                         property="product_id",
     *                         type="number",
     *                         example=1
     *                     ),
     *                     @OA\Property(
     *                         property="user_id",
     *                         type="number",
     *                         example=2
     *                     ),
     *                      @OA\Property(
     *                         property="comment",
     *                         type="string",
     *                         example="example comment"
     *                     ),
     *                      @OA\Property(
     *                         property="photo",
     *                         type="string",
     *                         example="null"
     *                     ),
     *                      @OA\Property(
     *                         property="created_at",
     *                         type="timestamp",
     *                         example="2022-01-20T09:06:33.000000Z"
     *                     ),
     *                     @OA\Property(
     *                         property="updated_at",
     *                         type="timestamp",
     *                         example="2022-01-20T09:06:33.000000Z"
     *                     )
     *                 )
     *             )
     *         )
     *     ),
     *      @OA\Response( * response=403, * description="API key is missing.")
     * )
     */ 
    public function show($id)
    {
        if (Comment::where('product_id',$id)->get()->count() != 0) {
            $comment = Comment::where('product_id',$id)->get();
            return response($comment, 200);
        } else {
            return response()->json([
                "message" => "Product not found"
            ], 404);
        }
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
        if(Comment::find($id)){
            $comment = Comment::find($id);
            $comment->update($request->all());
            return response()->json([
                "message" => "Comment updated successfully"
            ], 200);
        }else{
            return response()->json([
                "message" => "Comment not found"
            ], 404);
        }
    }


    /**
     * Delete a comment
     *
     * @OA\Delete (
     *     path="/comment/{id}",
     *     tags={"Comment"},
     *     * summary="Delete a comment by comment's id",
     *     @OA\Parameter(
     *         in="path",
     *         name="id",
     *         example = "1",
     *         required=true,
     *         @OA\Schema(type="number")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Delete a comment successfully",
     *     ),
     *     @OA\Response( * response=403, * description="API key is missing.")
     * )
     *
     */
    public function destroy($id)
    {
        if(Comment::find($id)) {
            $comment = Comment::where('id', $id);
            $comment->delete();
    
            return response()->json([
                "message" => "Comment deleted successfully"
            ], 200);
        } else {
            return response()->json([
            "message" => "Comment not found"
            ], 404);
        }
    }
}