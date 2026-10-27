
<?php

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test("un utilisateur s'enregistre avec des données correct", function () {
    $response = $this->post('/register', [
        'name' => 'Jean Dupont',
        'email' => 'jean@example.com',
        'phone' => '',
    ]);

    $response->assertRedirect('/profil');

    $this->assertDatabaseHas('users', [
        'email' => 'jean@example.com',
    ]);
});

