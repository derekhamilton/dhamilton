<?php
namespace Tests\Feature;

use Tests\TestCase;

class ResumeTest extends TestCase
{
    public function testHome()
    {
        $response = $this->get('/resume');
        $response->assertStatus(200);
    }
}
