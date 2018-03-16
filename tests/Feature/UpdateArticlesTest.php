<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateArticlesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_be_updated_by_its_owner()
    {
        $this->signIn();

        $article = factory('App\Article')->create(['user_id' => auth()->id()]);

        $this->patch(route('articles.update', $article->id), [
            'title' => 'Changed',
            'content' => 'Changed content.'
        ]);

        tap($article->fresh(), function ($article) {
            $this->assertEquals('Changed', $article->title);
            $this->assertEquals('Changed content.', $article->content);
        });
    }
}
