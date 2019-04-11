<?php

namespace Tests\Feature;

use App\Repository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TransferIssueTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function search_for_repos()
    {
        factory(Repository::class)->create(['name' => 'laravel']);
        factory(Repository::class)->create(['name' => 'vue']);

        $response = $this->get('/repo?search=laravel');

        $response
            ->assertSeeText('laravel')
            ->assertDontSeeText('vue');
    }

    /** @test */
    public function star_counts_are_properly_pluralized()
    {
        factory(Repository::class)->create(['name' => 'laravel', 'stars' => 1]);
        factory(Repository::class)->create(['name' => 'vue', 'stars' => 2]);

        $this->get('/repo?search=laravel')->assertSeeText('1 star');
        $this->get('/repo?search=vue')->assertSeeText('2 stars');
    }
}
