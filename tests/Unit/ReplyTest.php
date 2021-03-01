<?php

namespace Tests\Unit;

use App\Models\Reply;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ReplyTest extends TestCase
{
    use DatabaseMigrations;

    protected $reply;

    public function setUp(): void
    {
        parent::setUp();
        $this->reply = Reply::factory()->create();
    }

    public function test_it_has_an_owner()
    {
        $this->assertInstanceOf(User::class, $this->reply->owner);
    }
}
