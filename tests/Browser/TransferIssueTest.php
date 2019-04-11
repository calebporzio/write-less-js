<?php

namespace Tests\Browser;

use App\Repository;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class TransferIssueTest extends DuskTestCase
{
    use DatabaseMigrations;

    /** @test */
    public function repository_stars_are_properly_pluralized()
    {
        $repoA = factory(Repository::class)->create(['stars' => 1]);
        $repoB = factory(Repository::class)->create(['stars' => 2]);

        $this->browse(function (Browser $browser) use ($repoA, $repoB) {
            $browser->visit('/issue')
                ->waitFor('@ready')
                ->click('@transfer-issue-link')
                ->type('search', $repoA->name)
                ->waitUntilMissing('@transfer-issue-link input.loading')
                ->pause(250)
                ->assertSeeIn('#repo-list', '1 star')
                ->type('search', $repoB->name)
                ->waitUntilMissing('@transfer-issue-link input.loading')
                ->pause(250)
                ->assertSeeIn('#repo-list', '2 stars');
        });
    }
}
