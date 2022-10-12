<?php

namespace App\Providers;

use App\Repositories\Business\UserRepository;
use App\Repositories\Contracts\UserInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public $bindings = [
        UserInterface::class => UserRepository::class,
    ];
}
