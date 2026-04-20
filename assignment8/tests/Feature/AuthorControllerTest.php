<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthorControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_author_via_post_request(): void
    {
        $response = $this->post('/authors', [
            'name'      => 'Abai',
            'surname'   => 'Qunanbaiuly',
            'birthdate' => '1845-08-10',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect(route('authors.index'));
        $this->assertDatabaseHas('authors', [
            'name'    => 'Abai',
            'surname' => 'Qunanbaiuly',
        ]);
    }

    public function test_author_creation_stores_in_database(): void
    {
        $this->post('/authors', [
            'name'      => 'Mukhtar',
            'surname'   => 'Auezov',
            'birthdate' => '1897-09-28',
        ]);

        $this->assertDatabaseCount('authors', 1);
    }

    public function test_author_creation_returns_redirect(): void
    {
        $response = $this->post('/authors', [
            'name'      => 'Ilyas',
            'surname'   => 'Zhansugurov',
            'birthdate' => '1894-05-10',
        ]);

        $response->assertRedirect();
    }
}
