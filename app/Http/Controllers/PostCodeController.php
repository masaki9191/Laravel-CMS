<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostCodeController extends Controller
{
    public function getAddressByPostCode(Request $request)
    {
        $post = DB::table('post')->where('post_code', $request->get('post'))->first();
        if ($post) {
            return response()->json(['address' => $post->si . ' ' . $post->banti]);
        }
        return response()->json([]);
    }

}
