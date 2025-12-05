<?php

namespace App\Http\Controllers\middleware;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class MiddlewareSampleController extends Controller
{
    public function index(Request $request)
    {
        return $request->json("value","You are welcome");
    }

    public function noAccess(Request $request){
        return $request->json("value","You do not have access");
    }

    public function noAccess2(Request $request){
        return $request->json("value","You do not have access2");
    }
}
