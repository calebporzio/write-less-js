<?php

namespace Tests\Feature\Future;

use App\Comment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CommentsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function retreive_comments()
    {
        $comments = factory(Comment::class, 3)->create();

        $response = $this->getJson('/future/api/comment');

        $response->assertJson($comments->toArray());
    }

    /** @test */
    public function add_comment()
    {
        $this->postJson('/future/api/comment', [
                'content' => 'Another Comment',
            ])->assertStatus(200);

        $this->assertTrue(Comment::where('content', 'Another Comment')->exists());
    }

    /** @test */
    public function cant_add_empty_comment()
    {
        $this->postJson('/future/api/comment', [
            'content' => '',
        ])->assertStatus(422);

        $this->assertEmpty(Comment::all());
    }

    /** @test */
    public function see_comment_count()
    {
        factory(Comment::class, 1)->create();

        $this->getJson('/future/api/comment-count')
            ->assertJson(['count' => 1]);

        factory(Comment::class, 1)->create();

        $this->getJson('/future/api/comment-count')
            ->assertJson(['count' => 2]);
    }
}
