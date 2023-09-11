<?php
// app/openai/OpenAI.php

namespace App\OpenAI;

use GuzzleHttp\Client;

class OpenAI
{
    private $client;
    private $apiKey;

    public function __construct($apiKey)
    {
        $this->client = new Client(['base_uri' => 'https://api.openai.com/v1/']);
        $this->apiKey = $apiKey;
    }

    public function complete($chatbot, $prompt)
    {
        $response = $this->client->post('completions', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'model' => $chatbot,
                'prompt' => $prompt,
                'max_tokens' => 150,
            ]
        ]);

        return json_decode($response->getBody(), true);
    }

    // Método adicional para simplificar la llamada desde la prueba
    public function generateResponse($prompt)
    {
        $response = $this->complete('gpt-3.0-turbo', $prompt);
        return $response['choices'][0]['text'] ?? '';
    }
}
