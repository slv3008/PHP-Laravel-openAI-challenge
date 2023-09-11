<?php
// app/Http/Controllers/ChatbotController.php

namespace App\Http\Controllers;

use OpenAI\OpenAI;
use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    public function index()
    {
        return view('chatbot');
    }

    public function respond(Request $request)
    {
        $openai = new OpenAI();
        $openai->setApiKey(env('OPENAI_API_KEY'));

        $prompt = $request->input('prompt');
        $chatbot = $request->input('chatbot');

        $response = $openai->complete(
            $chatbot,
            $prompt,
            1,
            0,
            null,
            null,
            null,
            'text'
        );

        return response()->json([
            'response' => $response['choices'][0]['text']
        ]);
    }
}
