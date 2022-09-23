<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use Illuminate\Support\Facades\Auth;

class UerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function create_token (Request $request)
    // {
    //   $user = User::factory(1)->create();
     
    //   $token = $user->createToken($request->token_name);
 
    //   return ['token' => $token->plainTextToken];

    // }

}
