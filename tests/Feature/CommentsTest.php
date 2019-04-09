<?php

namespace Tests\Feature;

use App\Comment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CommentsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function see_comments()
    {
        $comments = factory(Comment::class, 3)->create();

        $response = $this->get('/retro/comment');

        $comments->each(function ($comment) use ($response) {
            $response->assertSeeText($comment->content);
        });
    }

    /** @test */
    public function see_comment_count()
    {
        factory(Comment::class, 1)->create();

        $this->get('/retro/comment')
            ->assertSeeText('1 comment');

        factory(Comment::class, 1)->create();

        $this->get('/retro/comment')
            ->assertSeeText('2 comments');
    }

    /** @test */
    public function add_comment()
    {
        $this->get('/retro/comment');

        $this->followingRedirects()
            ->post('/retro/comment', [
                'content' => 'Another Comment',
            ])->assertSee('Another Comment');

        $this->assertTrue(Comment::where('content', 'Another Comment')->exists());
    }

    /** @test */
    public function cant_add_empty_comment()
    {
        $this->get('/retro/comment');

        $this->post('/retro/comment', [
            'content' => '',
        ])->assertSessionHasErrors('content');

        $this->assertEmpty(Comment::all());
    }
}
