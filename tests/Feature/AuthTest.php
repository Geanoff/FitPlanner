<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    public function teste_cadastrar_usuario()
    {
        $response = $this->post('/cadastrar', [
            'nome' => 'Teste Usuário',
            'email' => 'teste@gmail.com',
            'password' => '12345678',
        ]);

        $response->assertRedirect('/login');
        $this->assertDatabaseHas('users', ['email' => 'teste@gmail.com']);
    }

    public function teste_login_usuario_valido()
    {
        $user = User::factory()->create([
            'email' => 'usuario1@gmail.com',
            'password' => bcrypt('test1234'),
        ]);

        $response = $this->post('/login', [
            'email' => 'usuario1@gmail.com',
            'password' => 'test1234',
        ]);

        $response->assertRedirect('/aluno/dashboard');
        $this->assertAuthenticatedAs($user);
    }
}
