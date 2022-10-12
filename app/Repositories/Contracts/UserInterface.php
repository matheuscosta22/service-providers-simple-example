<?php

namespace App\Repositories\Contracts;

use Illuminate\Http\Request;

interface UserInterface
{
    public function create(Request $request);
}
