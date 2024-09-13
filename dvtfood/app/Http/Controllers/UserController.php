<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index() {
        
    }
    //
    public function addToCart(Request $request) {
        $user = User::where("token", $request->token);

        if($user->count() <= 0) {
            return response()->json(["message" => "Token người dùng không chính xác"],401);
        }

        
        return response()->json(["message" => "Lỗi"],401);
       
    }
}
