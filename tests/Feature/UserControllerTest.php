<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_if_user_is_created(): void
    {
        /** @var User $user */
        $user = User::query()->create([
            'name' => 'testing',
            'email' => 'testing@email.com',
            'password' => 'testtesttest'
        ]);

        $response = $this->actingAs($user)
            ->postJson('/api/user', [
                'name' => 'testing',
                'email' => 'test@email.com',
                'password' => 'testtesttest'
            ]);

        $response->assertSuccessful();
    }
}
