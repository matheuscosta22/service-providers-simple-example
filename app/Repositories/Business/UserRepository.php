<?php

namespace App\Repositories\Business;

use App\Models\User;
use App\Repositories\Contracts\UserInterface;
use Illuminate\Http\Request;

class UserRepository implements UserInterface
{
    public function create(Request $request): array
    {
        $user = new User();
        $user->fill($request->all());
        $user->save();
        return $user->toArray();
    }
}
