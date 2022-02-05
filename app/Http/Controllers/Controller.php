<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    
     /**
     *     @OA\Info(
     *         version="1.0",
     *         title="Aftersales Api - SP21",
     *         description="List Aftersales Api",
     *     )
     */
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
