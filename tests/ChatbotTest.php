<?php

namespace Tests;

use Laravel\Lumen\Testing\TestCase as LumenTestCase;
use App\OpenAI\OpenAI;

class ChatbotTest extends LumenTestCase
{
    /**
     * Creates the application.
     *
     * @return \Laravel\Lumen\Application
     */
    public function createApplication()
    {
        return require __DIR__.'/../bootstrap/app.php';
    }

    /**
     * Test the OpenAI API call
     *
     * @return void
     */
    public function testOpenAI()
    {
        $apiKey = env('OPENAI_API_KEY'); // Ajusta esto para obtener la clave API de tu archivo .env o configura uno general
        $openai = new OpenAI($apiKey);

        $response = $openai->generateResponse("Hello, how are you?");
        $this->assertIsString($response);
    }
}
