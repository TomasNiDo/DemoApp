<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_should_display_the_latest_article_at_homepage()
    {
        $articles = factory('App\Article', 10)->create([
            'user_id' => factory('App\User')->create()->id,
            'created_at' => Carbon::now()->subDay(1)
        ]);

        $latestArticle = factory('App\Article')->create([
            'user_id' => factory('App\User')->create()->id,
            'title' => 'Ang Probinsyano',
            'created_at' => Carbon::now(),
        ]);

        $this->get('/')
            ->assertSee($latestArticle->title)
            ->assertSee($latestArticle->owner->name);
    }
}
