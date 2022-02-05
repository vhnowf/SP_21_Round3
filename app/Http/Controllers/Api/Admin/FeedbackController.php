<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCouponRequest;
use App\Http\Requests\StoreCouponRequest;
use App\Http\Requests\UpdateCouponRequest;
use App\Models\Feedback;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class FeedbackController extends Controller
{

    /**
     * Show list feedbacks
     * @OA\Get (
     *     path="/feedbacks",
     *     tags={"Feedback"},
     *     @OA\Response(
     *         response=200,
     *         description="success",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 type="array",
     *                 property="rows",
     *                 @OA\Items(
     *                     type="object",
     *                     @OA\Property(
     *                         property="id",
     *                         type="number",
     *                         example=1
     *                     ),
     *                     @OA\Property(
     *                         property="user_id",
     *                         type="number",
     *                         example=2
     *                     ),
     *                      @OA\Property(
     *                         property="content",
     *                         type="string",
     *                         example="example content"
     *                     ),
     *                      @OA\Property(
     *                         property="created_at",
     *                         type="timestamp",
     *                         example="2022-01-20T09:06:33.000000Z"
     *                     ),
     *                    @OA\Property(
     *                         property="updated_at",
     *                         type="timestampl",
     *                         example="2022-01-20T09:06:33.000000Z"
     *                     ),
     *                  
     *                 )
     *             )
     *         )
     *     ),
     *    @OA\Response( * response=403, * description="API key is missing."),
     * )
     */

    public function index()
    {
      $feedbacks = Feedback::all();
      
      return response()->json($feedbacks);
    }

    public function create()
    {
    //    abort_if(Gate::denies('coupon_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.feedbacks.create');
    }

   // public function store(StoreCouponRequest $request)
    //{
    //}

    public function edit($id, Feedback $feedback)
    {
      //  abort_if(Gate::denies('coupon_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return response()->json($id,$feedback);
    }


  /**
     * Show a feedback with certain $id
     * @OA\Get (
     *     path="/feedbacks/{id}",
     *     tags={"Feedback"},
     *    @OA\Parameter(
     *         in="path",
     *         name="id",
     *         example = "1",
     *         required=true,
     *         @OA\Schema(type="number")
     *     ),
     *      @OA\Response(
     *          response=200,
     *          description="success",
     *          @OA\JsonContent(
     *              @OA\Property(property="id", type="number", example=1),
     *              @OA\Property(property="user_id", type="number", example=1),
     *              @OA\Property(property="content", type="string", example="content"),
     *              @OA\Property(property="created_at", type="timestamp", example="2022-01-20T09:06:33.000000Z"),
     *              @OA\Property(property="updated_at", type="timestamp", example="2022-01-20T09:06:33.000000Z")
     *          )
     *      ),
     *      @OA\Response( * response=403, * description="API key is missing."),
     * )
     */ 
   public function show($id)
    {
      $feedback = Feedback::where('id', $id)->get();  
    //  dd($feedback);
      if( $feedback == null ) {
        return response()->json([
          'success' => false,
          'msg' => 'Not feedback available'
        ],400);
      }
      return response()->json($feedback);

    }

 
    public function destroy($id)
    { 
      $feedback = Feedback::find($id);
     
      if($feedback == null) {
        return response()->json([
          'success' => false,
          'msg' => 'Not available feedback to delete'
        ],400);
      }
      $feedback->delete();
      return response()->json([
        'success' => true,
        'msg' => 'Delete successfully'
      ],200);
    }

  //  public function massDestroy(MassDestroyCouponRequest $request)
 //   {
    //    Coupon::whereIn('id', request('ids'))->delete();

  //      return response(null, Response::HTTP_NO_CONTENT);
  //  }


}