<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class AlunoTest extends TestCase
{
    use RefreshDatabase;

    public function test_view_profile_requires_authentication()
    {
        $response = $this->get('/aluno/perfil');
        $response->assertRedirect('/login');
    }

    public function test_authenticated_user_can_view_profile()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('/aluno/perfil');
        $response->assertStatus(200);
        $response->assertSee($user->name);
    }

    public function test_authenticated_user_can_update_profile()
    {
        $user = User::factory()->create([
            'email' => 'old@example.com',
            'name' => 'Old Name',
        ]);

        $this->actingAs($user);

        $response = $this->put('/aluno/update', [
            'name' => 'New Name',
            'email' => 'new@example.com',
        ]);

        $response->assertRedirect(route('aluno.perfil'));
        $this->assertDatabaseHas('users', ['email' => 'new@example.com', 'name' => 'New Name']);
    }

    public function test_authenticated_user_can_delete_account()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->delete('/aluno/delete');

        $response->assertRedirect('/login');
        $this->assertDatabaseMissing('users', ['id' => $user->id]);
    }
}
