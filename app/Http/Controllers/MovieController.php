<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019-05-24
 * Time: 17:20
 */

namespace App\Http\Controllers;


use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $data = Movie::with(['type','region'])->get();
        return response()->json($data,200);
    }

    public function show($id)
    {
        $data = Movie::with(['type','region'])->find($id);
        return response()->json($data,200);
    }
}