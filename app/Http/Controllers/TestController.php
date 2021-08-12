<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/testing",
     *     @OA\Response(response="200", description="Display a listing of projects.")
     * )
     */
    public function index(){
        return "test";
    }
}
