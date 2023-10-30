<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
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
        dd('hello');
    }
}
