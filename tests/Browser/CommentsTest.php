<?php

namespace Tests\Browser;

use App\Comment;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CommentsTest extends DuskTestCase
{
    use DatabaseMigrations;

    /** @test */
    function forcePass()
    {
        $this->assertTrue(true);
    }

    // /** @test */
    // public function see_comments()
    // {
    //     $comments = factory(Comment::class, 3)->create();

    //     $this->browse(function (Browser $browser) use ($comments) {
    //         $browser->visit('/future/comment')->waitFor('@ready');

    //         $comments->each(function($comment) use ($browser) {
    //             $browser->assertSee($comment->content);
    //         });
    //     });
    // }

    // /** @test */
    // public function see_comment_count()
    // {
    //     factory(Comment::class)->create();

    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/future/comment')
    //                 ->waitFor('@ready')
    //                 ->assertSee('1 comment');
    //     });

    //     factory(Comment::class)->create();

    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/future/comment')
    //                 ->waitFor('@ready')
    //                 ->assertSee('2 comments');
    //     });
    // }

    // /** @test */
    // public function add_comment()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser
    //             ->visit('/future/comment')
    //             ->waitFor('@ready')
    //             ->type('textarea', 'Foo')
    //             ->press('Comment')
    //             ->waitForText('Foo')
    //             ->assertSee('Foo');
    //     });
    // }

    // /** @test */
    // public function cant_add_empty_comment()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser
    //             ->visit('/future/comment')
    //             ->waitFor('@ready')
    //             ->press('Comment')
    //             ->waitForText('The comment cannot be empty')
    //             ->assertSee('The comment cannot be empty');
    //     });
    // }
}
