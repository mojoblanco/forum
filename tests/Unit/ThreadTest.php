<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ThreadTest extends TestCase
{
    use RefreshDatabase;

    protected $thread;

    public function setUp()
    {
        parent::setUp();

        $this->thread = factory('App\Thread')->create();
    }

    /** @test **/
    public function a_thread_has_a_creator()
    {
        $this->assertInstanceOf('App\User', $this->thread->creator);
    }

    /** @test **/
    public function a_thread_has_a_valid_path_string()
    {
        $thread = create('App\Thread');

        $this->assertEquals("/threads/{$thread->channel->slug}/{$thread->id}", $thread->path());
    }

    /** @test **/
    public function a_thread_can_add_a_reply()
    {
        $this->thread->addReply([
            'body' => 'Hello',
            'user_id' => 1
        ]);

        $this->assertCount(1, $this->thread->replies);
    }

    /** @test **/
    public function a_thread_belongs_to_a_channel()
    {
        $thread = create('App\Thread');

        $this->assertInstanceOf('App\Channel', $thread->channel);
    }
}
