<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function testAndExpectARedirectResponseCodeTest()
    {
        $response = $this->get('/');

        $response->assertStatus(302);
    }
}
