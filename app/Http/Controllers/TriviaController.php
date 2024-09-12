<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TriviaController extends Controller
{
    public function getQuestions(Request $request)
    {
        $response = Http::get('https://opentdb.com/api_config.php', [
            'amount' => $request->amount,
            'difficulty' => $request->difficulty,
            'category' => $request->category,
            'type' => $request->type,
        ]);

        return $response->json();
    }
}
