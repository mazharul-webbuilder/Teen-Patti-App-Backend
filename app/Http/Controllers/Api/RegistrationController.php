<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Models\User;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('api');
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(RegistrationRequest $request)
    {
        $user = User::create($request->getData());

        return response()->json([
            'user' => $user,
            'token' => $user->createToken('teen-patti-api-token')->plainTextToken
        ]);
    }
}
