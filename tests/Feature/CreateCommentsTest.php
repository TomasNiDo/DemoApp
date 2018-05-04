<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Notifications\CommentPosted;
use Illuminate\Support\Facades\Notification;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateCommentsTest extends TestCase
{
    use RefreshDatabase;

    protected $article;
    protected $user;
    protected $comment;

    public function setUp()
    {
        parent::setUp();

        $this->withExceptionHandling();

        $this->user = factory('App\User')->create();
        $this->article = factory('App\Article')
            ->create([
                'user_id' => $this->user->id,
            ]);
        $this->comment = factory('App\Comment')->make();
    }

    /** @test */
    public function it_should_prevent_unauthenticated_user_to_comment_to_an_article()
    {
        $this->post(
            route('articles.comments.store', $this->article->id),
            $this->comment->toArray()
        )->assertRedirect(route('login'));
    }

    /** @test */
    public function it_should_allow_authenticated_user_to_post_a_comment()
    {
        $this->signIn();

        $this->post(
            route('articles.comments.store', $this->article->id),
            $this->comment->toArray()
        );

        $this->assertDatabaseHas('comments', $this->comment->toArray());
    }

    /** @test */
    public function it_should_notify_article_owner_about_the_comment()
    {
        Notification::fake();

        $this->signIn();

        $this->post(
            route('articles.comments.store', $this->article->id),
            $this->comment->toArray()
        );

        Notification::assertSentTo($this->user, CommentPosted::class);
    }
}
