<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Repository;

class TransferIssueTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function search_for_repositories()
    {
        $repoA = factory(Repository::class)->create(['name' => 'laravel']);
        $repoB = factory(Repository::class)->create(['name' => 'not-laravel']);

        $response = $this->getJson('/api/repo?search=laravel');

        $response->assertJson(['repos' => [$repoA->toArray()]]);
    }
}
