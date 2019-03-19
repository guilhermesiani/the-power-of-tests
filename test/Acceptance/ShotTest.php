<?php

namespace Test\Acceptance;

use PHPUnit\Framework\TestCase;

class ShotTest extends TestCase
{
    function testShotShouldReturnValidBody()
    {
        $options = [
            CURLOPT_URL => 'http://localhost:8000',
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => ['ammunition' => 'stone', 'target' => 'bird']
        ];
        $ch = curl_init();
        curl_setopt_array($ch, $options);

        $this->assertJsonStringEqualsJsonString(
            '{"data":{"action":"Launched a Stone on a Bird"}}',
            curl_exec($ch)
        );
        $this->assertEquals(200, curl_getinfo($ch, CURLINFO_HTTP_CODE));
        curl_close($ch);
    }

    function testShotWithInvalidBodyShouldReturnAnError()
    {
        $options = [
            CURLOPT_URL => 'http://localhost:8000',
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => ['someInvalidData' => 'asdf']
        ];
        $ch = curl_init();
        curl_setopt_array($ch, $options);

        $this->assertJsonStringEqualsJsonString(
            '{"status":422,"code":"UnprocessableEntityError","message":"Invalid ammunition name"}',
            curl_exec($ch)
        );
        $this->assertEquals(422, curl_getinfo($ch, CURLINFO_HTTP_CODE));
        curl_close($ch);
    }
}
