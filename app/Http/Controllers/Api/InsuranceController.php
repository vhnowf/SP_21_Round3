<?php

namespace App\Http\Controllers\API;

use App\Models\Insurance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insurance = Insurance::all();

    }


     /**
     * Create the insurance for a product
     * @OA\Post (
     *     path="/insurance",
     *     tags={"Insurance"},
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *             required={"product_id","content", "start_date", "expired_date"},
     *             @OA\Property(property="product_id", type="number", example = "4"),
     *             @OA\Property(property="content", type="string", example = "Trong tuần đầu tiên, bạn có thể đổi một sản phẩm bất kỳ có giá tiền bằng hoặc hơn sản phẩm đã mua " ),
     *             @OA\Property(property="start_date", type="date", example = "2022-01-01" ),
     *             @OA\Property(property="expired_date", type="date", example = "2022-01-08" )
     *             )
     *         )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="success",
     *          @OA\JsonContent(
     *                  @OA\Property(property="Success", type="string", example="Create the insurance for product successfully")
     *          )
     *      ),
     *      @OA\Response( * response=403, * description="API key is missing.")
     * )
     */
    public function store(Request $request)
    {
        $insurance = Insurance::create($request->all());

        return response()->json([
            "message" => "Create insurance successffully"
        ], 200);
    }

    /**
     *  Get the insurance of product has id = $id
     *  * @OA\Get (
     *     path="/product/{id}/insurance",
     *     tags={"Insurance"},
     *    @OA\Parameter(
     *         in="path",
     *         name="id",
     *         example = "1",
     *         required=true,
     *         @OA\Schema(type="number")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="success",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 type="array",
     *                 property="insurances",
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
     *                         property="content",
     *                         type="number",
     *                         example="Bảo hành một đổi một trong vòng 1 tháng đầu sử dụng"
     *                     ),
     *                     @OA\Property(
     *                         property="start_date",
     *                         type="date",
     *                         example="2022-01-01"
     *                     ),
     *                      @OA\Property(
     *                         property="expired_date",
     *                         type="date",
     *                         example="2022-02-01"
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
     *     @OA\Response( * response=403, * description="API key is missing.")
     * )
     */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Insurance::where('product_id',$id)->get()->count() != 0) {
            $insurance = Insurance::where('product_id',$id)->get();
            return response($insurance, 200);
        } else {
            return response()->json([
                "message" => "Product not found"
            ], 404);
        }
    }


   
    public function update($id, Request $request)
    {
        if(Insurance::find($id)){
            $insurance = Insurance::find($id);
            $insurance->update($request->all());
            return response()->json([
                "message" => "Insurance updated successfully"
            ], 200);
        }else{
            return response()->json([
                "message" => "Insurance not found"
            ], 404);
        }
    }

    /**
     * Delete the insurance by product_id
     *
     * @OA\Delete (
     *     path="/product/{id}/insurance",
     *     tags={"Insurance"},
     *     * summary="Delete the insurance",
     *     @OA\Parameter(
     *         in="path",
     *         name="id",
     *         example = "1",
     *         required=true,
     *         @OA\Schema(type="number")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Delete the insurance successfully",
     *     ),
     *     @OA\Response( * response=403, * description="API key is missing.")
     * )
     *
     */
    public function destroy($id)
    {
        if(Insurance::find($id)) {
            $insurance = Insurance::where('product_id', $id);

            $insurance->delete();
    
            return response()->json([
                "message" => "Delete the insurance successfully"
            ], 202);
        } else {
            return response()->json([
            "message" => "Insurance not found"
            ], 404);
        }
    }
}