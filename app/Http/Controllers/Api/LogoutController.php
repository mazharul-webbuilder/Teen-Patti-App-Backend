<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('api');
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Logout Successfully'
        ]);
    }
}
