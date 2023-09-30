<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Streamer;

class StreamerTest extends TestCase
{
    use RefreshDatabase;
    public function test_streamers_index(): void
    {
        $response = $this->get('/streamers');

        $response->assertStatus(200);
    }

    public function test_streamer_new(): void
    {
        $response = $this->get('/streamer/new');
        $response->assertStatus(200);
    }
}
