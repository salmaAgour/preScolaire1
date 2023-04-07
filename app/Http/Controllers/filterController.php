<?php

namespace App\Http\Controllers;

use App\Models\testM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class filterController extends Controller
{
    public function index(){
        
    }

    public function filterData(Request $request)
{
    $searchTerm = $request->input('nom');

    $data = DB::table('test_m_s')
        ->where('type', 'like', "%$searchTerm%")
        ->get();

    return response()->json($data);
}
}
