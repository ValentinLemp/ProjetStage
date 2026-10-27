<?php

use App\Models\User;
use App\Models\Statut;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('une demande est créée', function () {
    $user = User::factory()->create();

    Statut::factory()->create();

    $response = $this
        ->withSession(['idUser' => $user->id])
        ->post('/demande/addDemande', [
            'title' => 'le roi lion',
            'description' => 'demande pour faire un film sur le roi lion',
            'dueDate' => now()->addDays(7)->toDateString(),
        ]);

    $response->assertRedirect('/profil');

    $this->assertDatabaseHas('demandes', [
        'title' => 'le roi lion',
        'user_id' => $user->id,
    ]);
});
