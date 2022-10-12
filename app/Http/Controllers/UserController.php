<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\UserInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke(Request $request, UserInterface $interface): JsonResponse
    {
        return response()->json($interface->create($request));
    }
}
